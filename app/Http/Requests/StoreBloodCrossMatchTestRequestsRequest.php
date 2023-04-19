<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBloodCrossMatchTestRequestsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'entry_number' => 'required',
            'report_date' => 'required|date',
            'report_time' => 'nullable',
            'patient_name' => 'required|max:250',
            'age' => 'nullable',
            'age_type' => 'nullable',
            'gender' => 'required',
            'patient_blood_group' => 'nullable',

            'issued_by_incharge_name' => 'nullable|max:250',
            'blood_group_donor' => 'nullable',
            'donor_name' => 'nullable|max:250',
            'result' => 'nullable',

        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
