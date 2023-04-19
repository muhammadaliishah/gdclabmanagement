<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|max:180',
            'father_name' => 'nullable|max:180',
            'cnic_no' => 'nullable|max:14|unique:users,cnic_number',
            'cell_no' => 'nullable|max:11|unique:users,cell_number',
            'email_address' => 'nullable|max:30|unique:users,email',
            'specialist' => 'nullable|max:180',
            'address' => 'nullable|max:180',

        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
