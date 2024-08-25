<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $tables = 'companies';

    public function companyUsers()
    {
        return $this->hasMany(CompanyUser::class);
    }

    public function ads()
    {
        return $this->hasMany(Ads::class);
    }

    public function compNotifications(){
        return $this->hasMany(Notification::class);
    }

    public function programs()
    {
        return $this->hasMany(CompanyProgram::class);
    }




}
