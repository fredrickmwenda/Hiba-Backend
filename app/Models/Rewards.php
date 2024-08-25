<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rewards extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'rewards';


    public function program(){
        return $this->belongsTo(CompanyProgram::class);

    }

    public function redemptions(){
        return $this->hasMany(Redemption::class);
    }




}
