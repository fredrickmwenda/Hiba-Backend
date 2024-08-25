<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Rewards.
 *
 * @package namespace App\Entities;
 */
class Rewards extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = [];

    protected $guarded = [];
    protected $table = 'rewards';


    public function program()
    {
        return $this->belongsTo(CompanyPrograms::class);
    }



}
