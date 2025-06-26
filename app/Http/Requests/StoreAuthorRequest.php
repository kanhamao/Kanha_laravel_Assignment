<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreAuthorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    // Custom response for validation failure
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 412)
        );
    }

    /**
     * Validation rules for creating an author.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100',
            'bio' => 'nullable|string',
            'nationality' => 'nullable|string|max:100'
        ];
    }
}
