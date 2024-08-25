<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
// use App\Models\CompanyProgram;
use App\Models\User;

/**
 * Class UserProgramPoints.
 *
 * @package namespace App\Entities;
 */
class UserProgramPoints extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function company_program()
    {
        return $this->belongsTo(CompanyPrograms::class);
    }



}
