<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sambaza extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'sambazas';

    public function sender(){
        return $this->belongsTo(Customer::class, 'sender_id', 'id');
    }

    public function recipient(){
        return $this->belongsTo(Customer::class, 'recipient_id', 'id');
    }

    public function program(){
        return $this->belongsTo(CompanyProgram::class,);
    }
}
