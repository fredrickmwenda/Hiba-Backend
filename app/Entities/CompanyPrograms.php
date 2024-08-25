<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class CompanyPrograms.
 *
 * @package namespace App\Entities;
 */
class CompanyPrograms extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = [];

    protected $guarded = [];
    protected $table = 'company_programs';

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function rewards()
    {
        return $this->hasMany(Rewards::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function OptedInPrograms()
    {
        return $this->hasMany(OptedInPrograms::class, 'program_id');
    }

 






}
