<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Customer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded = [];
    protected $table = 'customers';


        /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


        /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function companies(){
        return $this->hasMany(Company::class);
    }


    public function virtualCard(){
        return $this->hasOne(VirtualCard::class);
    }

    public function redemptions(){
        return $this->hasMany(Redemption::class);
    }

    public function optedInPrograms(){
        return $this->hasMany(OptedInPrograms::class);
    }

    public function sentSambazas()
    {
        return $this->hasMany(Sambaza::class, 'sender_id');
    }

    public function receivedSambazas()
    {
        return $this->hasMany(Sambaza::class, 'recipient_id');
    }

    public function linkedSocialAccounts()
    {
        return $this->hasMany(LinkedSocialAccount::class);
    }



}
