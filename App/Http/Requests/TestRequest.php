<?php

namespace App\Http\Requests;

use Framework\Http\FormRequest;

class TestRequest extends FormRequest
{
    /**
     * Provide rules to standardize the validation for a request based on this form request.
     *
     * @return array The validation rules for the request.
     */
    public function rules(): array
    {
        return [];
    }
}