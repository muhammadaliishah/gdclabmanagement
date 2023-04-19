<?php

namespace App\Http\Controllers\Backend\UrinePregnancyTestControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBilirubinBioChemistryTestRequestsRequest;
use App\Http\Requests\StoreBioChemistryDiagnosticTestRequestsRequest;
use App\Http\Requests\StoreUrinePregnancyTestRequestsRequest;
use App\Http\Requests\StoreUrineTestRequestsRequest;
use App\Models\BilirubinBioChemistry;
use App\Models\BioChemistryDiagnositc;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\UrinePregnancy;
use App\Models\UrineTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpParser\Comment\Doc;

class UrinePregnancyTestController extends Controller
{
    public function index()
    {
        $models = UrinePregnancy::orderby('created_at', 'desc')->paginate(10);

        return view('backend.urine-pregnancy-tests.index', compact('models'));
    }

    public function create()
    {
        $doctors = Doctor::pluck('name', 'id');

        return view('backend.urine-pregnancy-tests.create', compact('doctors'));
    }

    public function store(StoreUrinePregnancyTestRequestsRequest $request)
    {
        try {

            DB::beginTransaction();

            $patient_model = new Patient();

            $patient_model->name = $request->patient_name;
            $patient_model->age = $request->age;
            $patient_model->age_type = $request->age_type;
            $patient_model->gender = $request->gender;

            $patient_model->save();


            $model = new UrinePregnancy();

            $model->entry_number = $request->entry_number;
            $model->doctor_id = $request->doctor_id;
            $model->patient_id = $patient_model->id;
            $model->date = $request->report_date;

            $model->urine_pregnancy_test = $request->urine_pregnancy_test;

            $model->save();

            DB::commit();

            toastr()->success('Urine Pregnancy Test Saved Successfully.');

            return redirect(route('urine.pregnancy.test.print', $model->id));

        } catch (\Exception $e) {

            Log::error($e->getMessage() . 'New Urine Pregnancy Test adding');
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
        $model = UrinePregnancy::find($id);

        return view('backend.urine-pregnancy-tests.edit', compact('model', 'doctors'));
    }

    public function update(StoreUrinePregnancyTestRequestsRequest $request, $id)
    {
        try {

            DB::beginTransaction();

            $model = UrinePregnancy::find($id);

            $patient_model = Patient::find($model->patient_id);

            $patient_model->name = $request->patient_name;
            $patient_model->age = $request->age;
            $patient_model->age_type = $request->age_type;
            $patient_model->gender = $request->gender;

            $patient_model->save();

            $model->entry_number = $request->entry_number;
            $model->doctor_id = $request->doctor_id;
            $model->patient_id = $patient_model->id;
            $model->date = $request->report_date;

            $model->urine_pregnancy_test = $request->urine_pregnancy_test;
            $model->save();

            DB::commit();

            toastr()->success('Urine Pregnancy Test Updated Successfully.');

            return redirect(route('urine.pregnancy.test.print', $model->id));

        } catch (\Exception $e) {

            Log::error($e->getMessage() . 'Urine Pregnancy Test updating');
            DB::rollBack();

            toastr()->error('Server Ran Into Problem');
        }

        return back();
    }

    public function destroy($id)
    {
    }
}
