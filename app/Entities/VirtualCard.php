<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class VirtualCard.
 *
 * @package namespace App\Entities;
 */
class VirtualCard extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = [];
    protected $guarded = [];
    protected $table = 'virtual_cards';
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}
