<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CompanyProgramsRepository;
use App\Entities\CompanyPrograms;
use App\Validators\CompanyProgramsValidator;

/**
 * Class CompanyProgramsRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CompanyProgramsRepositoryEloquent extends BaseRepository implements CompanyProgramsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CompanyPrograms::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return CompanyProgramsValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
