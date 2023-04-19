<?php

namespace App\Http\Controllers\Backend\CompleteBloodCountControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBioChemistryDiagnosticTestRequestsRequest;
use App\Http\Requests\StoreCompleteBloodCountTestRequestsRequest;
use App\Http\Requests\StoreUrineTestRequestsRequest;
use App\Models\CompleteBloodCount;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\UrineTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpParser\Comment\Doc;

class CompleteBloodCountController extends Controller
{
    public function index()
    {
        $models = CompleteBloodCount::orderby('created_at', 'desc')->paginate(10);

        return view('backend.complete-blood-count-CBC-ESR-tests.index', compact('models'));
    }

    public function create()
    {
        $doctors = Doctor::pluck('name', 'id');

        return view('backend.complete-blood-count-CBC-ESR-tests.create', compact('doctors'));
    }

    public function store(StoreCompleteBloodCountTestRequestsRequest $request)
    {
        try {

            DB::beginTransaction();

            $patient_model = new Patient();

            $patient_model->name = $request->patient_name;
            $patient_model->age = $request->age;
            $patient_model->age_type = $request->age_type;
            $patient_model->gender = $request->gender;

            $patient_model->save();


            $model = new CompleteBloodCount();

            $model->entry_number = $request->entry_number;
            $model->doctor_id = $request->doctor_id;
            $model->patient_id = $patient_model->id;
            $model->date = $request->report_date;

            $model->wbc_count = $request->wbc_count;
            $model->rbc_count = $request->rbc_count;
            $model->hemoglobin = $request->hemoglobin;
            $model->hematocrit = $request->hematocrit;
            $model->MCV = $request->MCV;
            $model->MCH = $request->MCH;
            $model->MCHC = $request->MCHC;
            $model->platelets_count = $request->platelets_count;
            $model->neutrophils = $request->neutrophils;
            $model->lymphocytes = $request->lymphocytes;
            $model->monocytes = $request->monocytes;
            $model->eosinophils = $request->eosinophils;
            $model->basophils = $request->basophils;
            $model->bands = $request->bands;
            $model->blood_group = $request->blood_group;
            $model->ESR = $request->ESR;
            $model->BT = $request->BT;
            $model->CT = $request->CT;

            $model->save();

            DB::commit();

            toastr()->success('Complete Blood Count (CBC) & ESR Automations Test Saved Successfully.');

            return redirect(route('complete-blood-count.print', $model->id));

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
        $model = CompleteBloodCount::find($id);

        return view('backend.complete-blood-count-CBC-ESR-tests.edit', compact('model', 'doctors'));
    }

    public function update(StoreCompleteBloodCountTestRequestsRequest $request, $id)
    {
        try {

            DB::beginTransaction();

            $model = CompleteBloodCount::find($id);

            $patient_model = Patient::find($model->patient_id);

            $patient_model->name = $request->patient_name;
            $patient_model->age = $request->age;
            $patient_model->age_type = $request->age_type;
            $patient_model->gender = $request->gender;

            $patient_model->save();


            $model->entry_number = $request->entry_number;
            $model->doctor_id = $request->doctor_id;
            $model->date = $request->report_date;

            $model->wbc_count = $request->wbc_count;
            $model->rbc_count = $request->rbc_count;
            $model->hemoglobin = $request->hemoglobin;
            $model->hematocrit = $request->hematocrit;
            $model->MCV = $request->MCV;
            $model->MCH = $request->MCH;
            $model->MCHC = $request->MCHC;
            $model->platelets_count = $request->platelets_count;
            $model->neutrophils = $request->neutrophils;
            $model->lymphocytes = $request->lymphocytes;
            $model->monocytes = $request->monocytes;
            $model->eosinophils = $request->eosinophils;
            $model->basophils = $request->basophils;
            $model->bands = $request->bands;
            $model->blood_group = $request->blood_group;
            $model->ESR = $request->ESR;
            $model->BT = $request->BT;
            $model->CT = $request->CT;

            $model->save();

            DB::commit();

            toastr()->success('Complete Blood Count (CBC) & ESR Automations Test Updated Successfully.');

            return redirect(route('complete-blood-count.print', $model->id));

        } catch (\Exception $e) {

            Log::error($e->getMessage() . 'Complete Blood Count (CBC) & ESR Automations Test updating');
            DB::rollBack();

            toastr()->error('Server Ran Into Problem');
        }

        return back();
    }

    public function destroy($id)
    {
    }
}
