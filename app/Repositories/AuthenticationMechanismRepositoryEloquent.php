<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\AuthenticationMechanismRepository;
use App\Entities\AuthenticationMechanism;
use App\Validators\AuthenticationMechanismValidator;

/**
 * Class AuthenticationMechanismRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AuthenticationMechanismRepositoryEloquent extends BaseRepository implements AuthenticationMechanismRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return AuthenticationMechanism::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return AuthenticationMechanismValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
