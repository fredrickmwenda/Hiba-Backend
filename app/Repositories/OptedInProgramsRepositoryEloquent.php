<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\OptedInProgramsRepository;
use App\Entities\OptedInPrograms;
use App\Validators\OptedInProgramsValidator;

/**
 * Class OptedInProgramsRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class OptedInProgramsRepositoryEloquent extends BaseRepository implements OptedInProgramsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return OptedInPrograms::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return OptedInProgramsValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
