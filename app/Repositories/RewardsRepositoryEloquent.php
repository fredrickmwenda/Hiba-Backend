<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\RewardsRepository;
use App\Entities\Rewards;
use App\Validators\RewardsValidator;

/**
 * Class RewardsRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class RewardsRepositoryEloquent extends BaseRepository implements RewardsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Rewards::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return RewardsValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
