<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUrineTestRequestsRequest extends FormRequest
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
            'appearance' => 'nullable',
            'PH' => 'nullable',
            'specific_gravity' => 'nullable',
            'protein' => 'nullable',
            'glucose' => 'nullable',
            'ketones' => 'nullable',
            'bilirubin' => 'nullable',
            'blood' => 'nullable',
            'nitrite' => 'nullable',
            'wbc_pus_cells' => 'nullable',
            'RBC' => 'nullable',
            'epithelial_cells' => 'nullable',
            'casts' => 'nullable',
            'bacteria' => 'nullable',
            'calcium_oxalate' => 'nullable',
            'amorphous_urates' => 'nullable',

        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
