<?php

namespace App\Http\Controllers\Backend\SerologicalRapidDiagnosticTestControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSerologicalRapidDiagnosticTestRequestsRequest;
use App\Http\Requests\StoreUrineTestRequestsRequest;
use App\Models\SerologicalRapidDiagnostic;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\UrineTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpParser\Comment\Doc;

class SerologicalRapidDiagnosticTestController extends Controller
{
    public function index()
    {
        $models = SerologicalRapidDiagnostic::orderby('created_at', 'desc')->paginate(10);

        return view('backend.serological-rapid-diagnostic-tests.index', compact('models'));
    }

    public function create()
    {
        $doctors = Doctor::pluck('name', 'id');

        return view('backend.serological-rapid-diagnostic-tests.create', compact('doctors'));
    }

    public function store(StoreSerologicalRapidDiagnosticTestRequestsRequest $request)
    {
        try {

            DB::beginTransaction();

            $patient_model = new Patient();

            $patient_model->name = $request->patient_name;
            $patient_model->age = $request->age;
            $patient_model->age_type = $request->age_type;
            $patient_model->gender = $request->gender;

            $patient_model->save();


            $model = new SerologicalRapidDiagnostic();

            $model->entry_number = $request->entry_number;
            $model->doctor_id = $request->doctor_id;
            $model->patient_id = $patient_model->id;
            $model->date = $request->report_date;

            $model->hepatitisB_surface_antigen = $request->hepatitisB_surface_antigen;
            $model->hepatitisC_virus_antibody = $request->hepatitisC_virus_antibody;
            $model->human_immunodeficiency_virus = $request->human_immunodeficiency_virus;
            $model->helicobacter_pylori_antibody = $request->helicobacter_pylori_antibody;
            $model->rheumatoid_arthritis = $request->rheumatoid_arthritis;
            $model->anti_streptolysin_o_tier = $request->anti_streptolysin_o_tier;
            $model->c_reactive_protein = $request->c_reactive_protein;
            $model->prostate_specific_antigen = $request->prostate_specific_antigen;
            $model->montox_test = $request->montox_test;
            $model->heptitisA_virus_antibody = $request->heptitisA_virus_antibody;
            $model->malaria_rapid_test = $request->malaria_rapid_test;
            $model->tuberculosis_rapid_test = $request->tuberculosis_rapid_test;
            $model->toxoplasma_gondi_antibodies = $request->toxoplasma_gondi_antibodies;
            $model->typhoid_rapid_test = $request->typhoid_rapid_test;
            $model->helicobecter_pylori_antibody = $request->helicobecter_pylori_antibody;
            $model->ra_factor = $request->ra_factor;

            $model->save();

            DB::commit();

            toastr()->success('Serological Rapid Diagnostic Test Saved Successfully.');

            return redirect(route('serological.rapid.diagnostic.test.print', $model->id));

        } catch (\Exception $e) {

            Log::error($e->getMessage() . 'New Urine Test adding');
            DB::rollBack();

            toastr()->error('Server Ran Into Problem');
        }

        return back();
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $doctors = Doctor::pluck('name', 'id');
        $model = SerologicalRapidDiagnostic::find($id);

        return view('backend.serological-rapid-diagnostic-tests.edit', compact('model', 'doctors'));
    }

    public function update(StoreSerologicalRapidDiagnosticTestRequestsRequest $request, $id)
    {
        try {

            DB::beginTransaction();

            $model = SerologicalRapidDiagnostic::find($id);

            $patient_model = Patient::find($model->patient_id);

            $patient_model->name = $request->patient_name;
            $patient_model->age = $request->age;
            $patient_model->age_type = $request->age_type;
            $patient_model->gender = $request->gender;

            $patient_model->save();


            $model->entry_number = $request->entry_number;
            $model->doctor_id = $request->doctor_id;
            $model->date = $request->report_date;

            $model->hepatitisB_surface_antigen = $request->hepatitisB_surface_antigen;
            $model->hepatitisC_virus_antibody = $request->hepatitisC_virus_antibody;
            $model->human_immunodeficiency_virus = $request->human_immunodeficiency_virus;
            $model->helicobacter_pylori_antibody = $request->helicobacter_pylori_antibody;
            $model->rheumatoid_arthritis = $request->rheumatoid_arthritis;
            $model->anti_streptolysin_o_tier = $request->anti_streptolysin_o_tier;
            $model->c_reactive_protein = $request->c_reactive_protein;
            $model->prostate_specific_antigen = $request->prostate_specific_antigen;
            $model->montox_test = $request->montox_test;
            $model->heptitisA_virus_antibody = $request->heptitisA_virus_antibody;
            $model->malaria_rapid_test = $request->malaria_rapid_test;
            $model->tuberculosis_rapid_test = $request->tuberculosis_rapid_test;
            $model->toxoplasma_gondi_antibodies = $request->toxoplasma_gondi_antibodies;
            $model->typhoid_rapid_test = $request->typhoid_rapid_test;

            $model->save();

            DB::commit();

            toastr()->success('Serological Rapid Diagnostic Test Updated Successfully.');

            return redirect(route('serological.rapid.diagnostic.test.print', $model->id));

        } catch (\Exception $e) {

            Log::error($e->getMessage() . 'Serological Rapid Diagnostic Test updating');
            DB::rollBack();

            toastr()->error('Server Ran Into Problem');
        }

        return back();
    }

    public function destroy($id)
    {
    }
}