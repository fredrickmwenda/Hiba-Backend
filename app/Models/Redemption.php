<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redemption extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'redemptions';


    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function reward(){
        return $this->belongsTo(Rewards::class);
    }

    public function program(){
        return $this->belongsTo(CompanyProgram::class);
    }
    
}
