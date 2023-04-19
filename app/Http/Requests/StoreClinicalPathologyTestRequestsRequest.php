<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClinicalPathologyTestRequestsRequest extends FormRequest
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

            'color' => 'nullable',
            'consistency' => 'nullable',
            'blood' => 'nullable',
            'mucus' => 'nullable',
            'WBC_PUS_cells' => 'nullable',
            'RBC' => 'nullable',
            'ova_parasites' => 'nullable',
            'cyst' => 'nullable',
            'fatty_globules' => 'nullable',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
