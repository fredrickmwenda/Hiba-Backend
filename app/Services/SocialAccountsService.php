<?php

namespace App\Services;
use App\Models\User;
use App\Models\Customer;
use Laravel\Socialite\Two\User as ProviderUser;
use App\Models\VirtualCard;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use DNS1D;
use DB;

class SocialAccountsService
{
    /**
     * Find or create user instance by provider user instance, provider name, and user type.
     * 
     * @param ProviderUser $providerUser
     * @param string $provider
     * @param string $userType
     * 
     * @return User|Customer
     */
    public function findOrCreate(ProviderUser $providerUser, string $provider, string $userType): User|Customer
    {
        $linkedSocialAccount = \App\LinkedSocialAccount::where('provider_name', $provider)
            ->where('provider_id', $providerUser->getId())
            ->first();

        if ($linkedSocialAccount) {
            // Check if the linked account belongs to a User or Customer based on $userType
            if ($userType === 'user') {
                $user = $linkedSocialAccount->user;
            } elseif ($userType === 'customer') {
                $user = $linkedSocialAccount->customer;
            }

            if ($user instanceof User || $user instanceof Customer) {
                return $user;
            }
        } else {
            $user = null;

            if ($email = $providerUser->getEmail()) {
                if ($userType === 'user') {
                    // Try to find a User by email
                    $user = User::where('email', $email)->first();
                } elseif ($userType === 'customer') {
                    // Try to find a Customer by email
                    $user = Customer::where('email', $email)->first();
                }
            }

            if (! $user) {
                // Create a new user based on $userType
                $rawUserData = $providerUser->getRaw();
                $phoneNumber = null;
                //first We loop through all the keys in the raw user data using a foreach loop.
                foreach ($rawUserData as $key => $value) {
                    // Check if the key contains "phone" or "Phone" (case-insensitive)
                    //stripos checks if the key contains "phone" (case-insensitive) or "Phone" (also case-insensitive).
                    //The || (logical OR) operator checks for both variations.
                    //If either "phone" or "Phone" is found in any part of the key (case-insensitive), it will be considered a match, 
                    //and the corresponding value will be assigned to the $phoneNumber variable.
                    if (stripos($key, 'phone') !== false || stripos($key, 'Phone') !== false) {
                        $phoneNumber = $value;
                        break; // Stop the loop when a phone number is found
                    }
                }
                if ($userType === 'user') {
                    $user = User::create([
                        'first_name' => $providerUser->getName(),
                        'email' => $providerUser->getEmail(),
                        'phone' => $phoneNumber,
                        'avatar' => $providerUser->getAvatar(),
                    ]);
                } elseif ($userType === 'customer') {
                    $user = Customer::create([
                        'name' => $providerUser->getName(),
                        'email' => $providerUser->getEmail(),
                        'phone' => $providerUser->getPhone(),
                        'avatar' => $providerUser->getAvatar(),
                    ]);
                    //create virtual card for the user
                    $qr_data = QrCode::generate('hiiba'.$user->id.$user->name);
                    $svgStart = strpos($qr_data, '<svg');
                    $svgEnd = strpos($qr_data, '</svg>') + 6;
                    $svgContent = substr($qr_data, $svgStart, $svgEnd - $svgStart);

                    // Save the SVG content to a file in the public folder
                    // Define the subfolder path within the public folder
                    $subfolderPath = 'assets/images/virtualcard';

                    // Create the subfolder if it doesn't exist
                    $fullSubfolderPath = public_path($subfolderPath);
                    if (!file_exists($fullSubfolderPath)) {
                        mkdir($fullSubfolderPath, 0777, true);
                    }

                    // Generate a unique SVG filename
                    $svgFilename = 'qrcode_'.$user->id.'_'.uniqid().'.svg';

                    // Save the SVG content to a file in the subfolder
                    $svgFilePath = $fullSubfolderPath . '/' . $svgFilename;
                    file_put_contents($svgFilePath, $svgContent);

                    $barcodeData = 'hiiba' . $user->id . $user->name;
                    $barcodeSVG = DNS1D::getBarcodeSVG($barcodeData, 'C128', 2, 100);
                    
                    
                    // Generate a unique SVG filename
                    $barsvgFilename = 'barcode_'.$user->id.'_'.uniqid().'.svg';
                    
                    // Save the SVG content to a file in the subfolder
                    $barsvgFilePath = $fullSubfolderPath . '/' . $barsvgFilename;
                    file_put_contents($barsvgFilePath, $barcodeSVG);
                    info($user->id);
                    info($svgFilePath);
                    info($barsvgFilePath);
                    //create a virtual card for the customer
                
                    $cardNumber = strval($user->id) . str_pad(rand(0, 99999999), 8, '0', STR_PAD_LEFT);
                    VirtualCard::create([
                        'customer_id' => $user->id,
                        'card_number' => $cardNumber,
                        'barcode' => $barsvgFilePath,
                        'qr-code' => $svgFilePath,
                        'points' => '0'
                    ]);
                    $user->load('virtualCard');
                }
            }

            // Create the linked social account based on $userType
            if ($userType === 'user') {
                $user->linkedSocialAccounts()->create([
                    'provider_id' => $providerUser->getId(),
                    'provider_name' => $provider,
                    'user_id' => $user->id,
                ]);
            } elseif ($userType === 'customer') {
                $user->linkedCustomerAccounts()->create([
                    'provider_id' => $providerUser->getId(),
                    'provider_name' => $provider,
                    'customer_id'=> $user->id,
                ]);
            }

            return $user;
        }
    }
}
