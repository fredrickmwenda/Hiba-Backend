<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProgram extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'company_programs';

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function rewards()
    {
        return $this->hasMany(Rewards::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function OptedInPrograms()
    {
        return $this->hasMany(OptedInPrograms::class, 'program_id');
    }

    public function redemptions()
    {
        return $this->hasMany(Redemption::class);
    }

   

    

 
}
