<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ConversionRateRepository;
use App\Entities\ConversionRate;
use App\Validators\ConversionRateValidator;

/**
 * Class ConversionRateRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ConversionRateRepositoryEloquent extends BaseRepository implements ConversionRateRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ConversionRate::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ConversionRateValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
