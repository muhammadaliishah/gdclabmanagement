<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBilirubinBioChemistryTestRequestsRequest extends FormRequest
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

            'total_bilirubin' => 'nullable',
            'bilirubin_direct' => 'nullable',
            'bilirubin_indirect' => 'nullable',

        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
