<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;
use App\Rules\UploadImageRule;

/**
 * Class CompanyValidator.
 *
 * @package namespace App\Validators;
 */
class CompanyValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'logo' => ['required'],
            'name' => 'required',
            'description' => 'required',
            // 'category_id' => 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required',
            'description' => 'required',
            // 'category_id' => 'required'
        ],
    ];
}
