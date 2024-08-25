<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Redemption.
 *
 * @package namespace App\Entities;
 */
class Redemption extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = [];

    protected $guarded = [];
    protected $table = 'redemptions';

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function reward(){
        return $this->belongsTo(Reward::class);
    }

}
