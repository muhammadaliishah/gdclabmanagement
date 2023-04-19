<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBioChemistryDiagnosticTestRequestsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'doctor_id' => 'required|exists:doctors,id',
            'entry_number' => 'required',
            'report_date' => 'required|date',
            'patient_name' => 'required|max:250',
            'age' => 'required',
            'age_type' => 'required',
            'gender' => 'required',

            'bilirubin_total' => 'nullable',
            'ALT_SGPT' => 'nullable',
            'AST_SPOT' => 'nullable',
            'alkaline_phosphatase' => 'nullable',
            'blood_urea' => 'nullable',
            'creatinine' => 'nullable',
            'uric_acid' => 'nullable',
            'cholesterol' => 'nullable',
            'triglycerides' => 'nullable',
            'HDL_cholesterol' => 'nullable',
            'LDL_cholesterol' => 'nullable',
            'LDH' => 'nullable',
            'sodium' => 'nullable',
            'potassium' => 'nullable',
            'chloride' => 'nullable',
            'calcium' => 'nullable',
            'BUN' => 'nullable',
            'glucose_fasting' => 'nullable',
            'glucose_random' => 'nullable',
            'serum_albumin' => 'nullable',
            'GCT' => 'nullable',
            'OGTT' => 'nullable',
            'first_hour' => 'nullable',
            'second_hour' => 'nullable',

        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
