<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompleteBloodCountTestRequestsRequest extends FormRequest
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

            'wbc_count' => 'nullable',
            'rbc_count' => 'nullable',
            'hemoglobin' => 'nullable',
            'hematocrit' => 'nullable',
            'MCV' => 'nullable',
            'MCH' => 'nullable',
            'MCHC' => 'nullable',
            'platelets_count' => 'nullable',
            'neutrophils' => 'nullable',
            'lymphocytes' => 'nullable',
            'monocytes' => 'nullable',
            'eosinophils' => 'nullable',
            'basophils' => 'nullable',
            'bands' => 'nullable',
            'blood_group' => 'nullable',
            'ESR' => 'nullable',
            'BT' => 'nullable',
            'CT' => 'nullable',

        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
