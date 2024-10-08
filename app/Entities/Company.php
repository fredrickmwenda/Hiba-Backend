<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Company.
 *
 * @package namespace App\Entities;
 */
class Company extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [];
    protected $guarded = [];
    protected $table = 'companies';


    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }

    public function companyUsers()
    {
        return $this->hasMany(CompanyUser::class);
    }

    public function programs()
    {
        return $this->hasMany(CompanyPrograms::class);
    }

}
