<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\VirtualCardRepository;
use App\Entities\VirtualCard;
use App\Validators\VirtualCardValidator;

/**
 * Class VirtualCardRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class VirtualCardRepositoryEloquent extends BaseRepository implements VirtualCardRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return VirtualCard::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return VirtualCardValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
