<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\UploadedFile;

class UploadImageRule implements Rule
{
    public function passes($attribute, $value)
    {
        if ($value instanceof UploadedFile) {
            return $value->isValid() && $value->getClientSize() <= 2048 * 1024 && $value->isFile() && in_array($value->getClientOriginalExtension(), ['jpeg', 'jpg', 'png']);
        }

        return false;
    }

    public function message()
    {
        return 'The logo must be a valid image file (jpeg, jpg, png) and should not exceed 2MB.';
    }
}
