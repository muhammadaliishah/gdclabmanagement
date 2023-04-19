<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUsersRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|max:180',
            'father_name' => 'required|max:180',
            'password' => 'nullable|min:8',
            'address' => 'nullable|max:200',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
