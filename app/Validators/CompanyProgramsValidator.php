<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class CompanyProgramsValidator.
 *
 * @package namespace App\Validators;
 */
class CompanyProgramsValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'terms' => 'required',
            'accrual_rate' => 'required',
            'redemption_rate'=> 'required',

        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'terms' => 'required',
            'accrual_rate' => 'required',
            'redemption_rate'=> 'required',
        ],
    ];
}
