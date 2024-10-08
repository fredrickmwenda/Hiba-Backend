<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CustomerQuestionRepository;
use App\Entities\CustomerQuestion;
use App\Validators\CustomerQuestionValidator;

/**
 * Class CustomerQuestionRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CustomerQuestionRepositoryEloquent extends BaseRepository implements CustomerQuestionRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CustomerQuestion::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return CustomerQuestionValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
