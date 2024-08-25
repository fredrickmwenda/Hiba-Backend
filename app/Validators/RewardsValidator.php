<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class RewardsValidator.
 *
 * @package namespace App\Validators;
 */
class RewardsValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'image' => ['required'],
            'name' => 'required',
            'description' => 'required',
            'program_id' => 'required',
            'points_required' => 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'image' => ['required'],
            'name' => 'required',
            'description' => 'required',
            'program_id' => 'required',
            'points_required' => 'required'
        ],
    ];
}
