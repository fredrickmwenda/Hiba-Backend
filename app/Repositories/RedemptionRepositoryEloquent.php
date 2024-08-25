<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\RedemptionRepository;
use App\Entities\Redemption;
use App\Validators\RedemptionValidator;

/**
 * Class RedemptionRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class RedemptionRepositoryEloquent extends BaseRepository implements RedemptionRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Redemption::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return RedemptionValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
