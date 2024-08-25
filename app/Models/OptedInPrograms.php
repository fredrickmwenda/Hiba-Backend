<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptedInPrograms extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'opted_in_programs';

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function Program(){
        return $this->belongsTo(CompanyProgram::class, 'program_id');
    }
}
