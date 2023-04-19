<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsersRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|max:180',
            'father_name' => 'required|max:180',
            'cnic_no' => 'required|max:14|unique:users,cnic_number',
            'cell_no' => 'required|max:11|unique:users,cell_number',
            'email_address' => 'required|max:30|unique:users,email',
            'password' => 'required|min:8',
            'address' => 'nullable|max:180',

        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
