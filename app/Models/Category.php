<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Your Category model logic here
    protected $guarded= [];
    protected $table = 'categories';
     public function  programs (){
        return $this->hasMany(CompanyPrograms::this);
     }
}