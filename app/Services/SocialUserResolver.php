<?php
namespace App\Services;

use Coderello\SocialGrant\Resolvers\SocialUserResolverInterface;
use Illuminate\Contracts\Auth\Authenticatable;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\User as ProviderUser;

class SocialUserResolver implements SocialUserResolverInterface
{
    /**
     * Resolve user by provider credentials.
     *
     * @param string $provider
     * @param string $accessToken
     * @param string $userType
     *
     * @return Authenticatable|null
     */
    public function resolveUserByProviderCredentials(string $provider, string $accessToken, string $userType = null): ?Authenticatable
    {
        // Set a default value for $userType if it's not provided
        $userType = $userType ?? 'customer';
        
        // Implement your custom logic here to resolve the user based on provider credentials
        // You can access data from the provider, access token, and user type to determine the user
        
        // Example: Call the appropriate method in Socialite to retrieve user data based on provider
        $providerUser = Socialite::driver($provider)->userFromToken($accessToken);
        
        // Example: Use the SocialAccountsService to find or create a user based on provider credentials
        $user = SocialAccountsService::findOrCreate($providerUser, $provider, $userType);
        
        // Return the resolved user or null if not found
        return $user;
    }
}
