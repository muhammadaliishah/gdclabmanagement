<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSemanAnalysisTestRequestsRequest extends FormRequest
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

            'volume' => 'nullable',
            'color' => 'nullable',
            'viscosity' => 'nullable',
            'PH' => 'nullable',
            'total_sperm_count' => 'nullable',
            'active_motile' => 'nullable',
            'sluggish_motile' => 'nullable',
            'non_motile' => 'nullable',
            'pus_cell' => 'nullable',
            'dibberies_cell' => 'nullable',
            'RBC' => 'nullable',
            'morphology' => 'nullable',
            'opinion' => 'nullable',

        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
