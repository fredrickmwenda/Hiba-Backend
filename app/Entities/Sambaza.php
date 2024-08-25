<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Sambaza.
 *
 * @package namespace App\Entities;
 */
class Sambaza extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = [];

    // protected $guarded = [];
    // protected $table = 'sambazas';

    // public function sender(){
    //     return $this->belongsTo(User::class, 'sender_id');
    // }

    // public function recipient(){
    //     return $this->belongsTo(User::class, 'recipient_id');
    // }

    // public function program(){
    //     return $this->belongsTo(CompanyProgram::class,);
    // }

    public function sender(){
        return $this->belongsTo(Customer::class, 'sender_id', 'id');
    }

    public function recipient(){
        return $this->belongsTo(Customer::class, 'recipient_id', 'id');
    }

    public function program(){
        return $this->belongsTo(CompanyPrograms::class,);
    }


}
