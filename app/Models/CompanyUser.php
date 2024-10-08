<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyUser extends Model
{
    use HasFactory;
    protected $guarded= [];
    protected $table = 'company_users';
    
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
