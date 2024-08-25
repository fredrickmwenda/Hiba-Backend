<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SambazaRepository;
use App\Entities\Sambaza;
use App\Validators\SambazaValidator;

/**
 * Class SambazaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class SambazaRepositoryEloquent extends BaseRepository implements SambazaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Sambaza::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return SambazaValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
