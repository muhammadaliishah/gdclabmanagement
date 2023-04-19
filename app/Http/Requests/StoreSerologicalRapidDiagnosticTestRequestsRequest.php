<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSerologicalRapidDiagnosticTestRequestsRequest extends FormRequest
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

            'hepatitisB_surface_antigen' => 'nullable',
            'hepatitisC_virus_antibody' => 'nullable',
            'human_immunodeficiency_virus' => 'nullable',
            'helicobacter_pylori_antibody' => 'nullable',
            'rheumatoid_arthritis' => 'nullable',
            'anti_streptolysin_o_tier' => 'nullable',
            'c_reactive_protein' => 'nullable',
            'prostate_specific_antigen' => 'nullable',
            'montox_test' => 'nullable',
            'heptitisA_virus_antibody' => 'nullable',
            'malaria_rapid_test' => 'nullable',
            'tuberculosis_rapid_test' => 'nullable',
            'toxoplasma_gondi_antibodies' => 'nullable',
            'typhoid_rapid_test' => 'nullable',

        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
