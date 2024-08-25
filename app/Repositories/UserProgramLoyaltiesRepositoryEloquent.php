<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\UserProgramLoyaltiesRepository;
use App\Entities\UserProgramLoyalties;
use App\Validators\UserProgramLoyaltiesValidator;

/**
 * Class UserProgramLoyaltiesRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class UserProgramLoyaltiesRepositoryEloquent extends BaseRepository implements UserProgramLoyaltiesRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return UserProgramLoyalties::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return UserProgramLoyaltiesValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
