<?php

namespace App\Http\Controllers\Backend\BioChemistryDiagnosticControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBioChemistryDiagnosticTestRequestsRequest;
use App\Http\Requests\StoreUrineTestRequestsRequest;
use App\Models\BioChemistryDiagnositc;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\UrineTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpParser\Comment\Doc;

class BioChemistryDiagnosticTestsController extends Controller
{
    public function index()
    {
        $models = BioChemistryDiagnositc::orderby('created_at', 'desc')->paginate(10);

        return view('backend.bio-chemistry-diagnostic-tests.index', compact('models'));
    }

    public function create()
    {
        $doctors = Doctor::pluck('name', 'id');

        return view('backend.bio-chemistry-diagnostic-tests.create', compact('doctors'));
    }

    public function store(StoreBioChemistryDiagnosticTestRequestsRequest $request)
    {
        try {

            DB::beginTransaction();

            $patient_model = new Patient();

            $patient_model->name = $request->patient_name;
            $patient_model->age = $request->age;
            $patient_model->age_type = $request->age_type;
            $patient_model->gender = $request->gender;

            $patient_model->save();


            $model = new BioChemistryDiagnositc();

            $model->entry_number = $request->entry_number;
            $model->doctor_id = $request->doctor_id;
            $model->patient_id = $patient_model->id;
            $model->date = $request->report_date;

            $model->bilirubin_total = $request->bilirubin_total;
            $model->ALT_SGPT = $request->AST_SPOT;
            $model->AST_SGOT = $request->AST_SPOT;
            $model->alkaline_phosphatase = $request->alkaline_phosphatase;
            $model->blood_urea = $request->blood_urea;
            $model->creatinine = $request->creatinine;
            $model->uric_acid = $request->uric_acid;
            $model->cholesterol = $request->cholesterol;
            $model->triglycerides = $request->triglycerides;
            $model->HDL_cholesterol = $request->HDL_cholesterol;
            $model->LDL_cholesterol = $request->LDL_cholesterol;
            $model->LDH = $request->LDH;
            $model->sodium = $request->sodium;
            $model->potassium = $request->potassium;
            $model->chloride = $request->chloride;
            $model->BUN = $request->BUN;
            $model->calcium = $request->calcium;
            $model->glucose_fasting = $request->glucose_fasting;
            $model->glucose_random = $request->glucose_random;
            $model->serum_albumin = $request->serum_albumin;
            $model->GCT = $request->GCT;
            $model->OGTT = $request->OGTT;
            $model->first_hour = $request->first_hour;
            $model->second_hour = $request->second_hour;

            $model->save();

            DB::commit();

            toastr()->success('Bio-Chemistry Diagnostic Test Saved Successfully.');

            return redirect(route('bio.chemistry.diagnostic.test.print', $model->id));

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
        $model = BioChemistryDiagnositc::find($id);

        return view('backend.bio-chemistry-diagnostic-tests.edit', compact('model', 'doctors'));
    }

    public function update(StoreBioChemistryDiagnosticTestRequestsRequest $request, $id)
    {
        try {

            DB::beginTransaction();

            $model = BioChemistryDiagnositc::find($id);

            $patient_model = Patient::find($model->patient_id);

            $patient_model->name = $request->patient_name;
            $patient_model->age = $request->age;
            $patient_model->age_type = $request->age_type;
            $patient_model->gender = $request->gender;

            $patient_model->save();


            $model->entry_number = $request->entry_number;
            $model->doctor_id = $request->doctor_id;
            $model->date = $request->report_date;

            $model->bilirubin_total = $request->bilirubin_total;
            $model->ALT_SGPT = $request->AST_SPOT;
            $model->AST_SGOT = $request->AST_SPOT;
            $model->alkaline_phosphatase = $request->alkaline_phosphatase;
            $model->blood_urea = $request->blood_urea;
            $model->creatinine = $request->creatinine;
            $model->uric_acid = $request->uric_acid;
            $model->cholesterol = $request->cholesterol;
            $model->triglycerides = $request->triglycerides;
            $model->HDL_cholesterol = $request->HDL_cholesterol;
            $model->LDL_cholesterol = $request->LDL_cholesterol;
            $model->LDH = $request->LDH;
            $model->sodium = $request->sodium;
            $model->potassium = $request->potassium;
            $model->chloride = $request->chloride;
            $model->BUN = $request->BUN;
            $model->calcium = $request->calcium;
            $model->glucose_fasting = $request->glucose_fasting;
            $model->glucose_random = $request->glucose_random;
            $model->serum_albumin = $request->serum_albumin;
            $model->GCT = $request->GCT;
            $model->OGTT = $request->OGTT;
            $model->first_hour = $request->first_hour;
            $model->second_hour = $request->second_hour;

            $model->save();

            DB::commit();

            toastr()->success('Bio-Chemistry Diagnostic Test Updated Successfully.');

            return redirect(route('bio.chemistry.diagnostic.test.print', $model->id));

        } catch (\Exception $e) {

            Log::error($e->getMessage() . 'Bio-Chemistry Diagnostic Test updating');
            DB::rollBack();

            toastr()->error('Server Ran Into Problem');
        }

        return back();
    }

    public function destroy($id)
    {
    }
}
