<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreABOBloodGroupTestRequestsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'doctor_id' => 'required|exists:doctors,id',
            'entry_number' => 'nullable',
            'report_date' => 'required|date',
            'patient_name' => 'required|max:250',
            'age' => 'nullable',
            'age_type' => 'nullable',
            'gender' => 'nullable',

            'abo_blood_group' => 'nullable',
            'RH_type' => 'nullable',

        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
