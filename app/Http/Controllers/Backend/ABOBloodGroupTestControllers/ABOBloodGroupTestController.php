<?php

namespace App\Http\Controllers\Backend\ABOBloodGroupTestControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBilirubinBioChemistryTestRequestsRequest;
use App\Http\Requests\StoreBioChemistryDiagnosticTestRequestsRequest;
use App\Http\Requests\StoreABOBloodGroupTestRequestsRequest;
use App\Http\Requests\StoreUrineTestRequestsRequest;
use App\Models\ABOBloodGroup;
use App\Models\BilirubinBioChemistry;
use App\Models\BioChemistryDiagnositc;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\UrineTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpParser\Comment\Doc;

class ABOBloodGroupTestController extends Controller
{
    public function index()
    {
        $models = ABOBloodGroup::orderby('created_at', 'desc')->paginate(10);

        return view('backend.abo-blood-group-tests.index', compact('models'));
    }

    public function create()
    {
        $doctors = Doctor::pluck('name', 'id');

        return view('backend.abo-blood-group-tests.create', compact('doctors'));
    }

    public function store(StoreABOBloodGroupTestRequestsRequest $request)
    {
        try {

            DB::beginTransaction();

            $patient_model = new Patient();

            $patient_model->name = $request->patient_name;
            $patient_model->age = $request->age;
            $patient_model->age_type = $request->age_type;
            $patient_model->gender = $request->gender;

            $patient_model->save();


            $model = new ABOBloodGroup();

            $model->entry_number = $request->entry_number;
            $model->doctor_id = $request->doctor_id;
            $model->patient_id = $patient_model->id;
            $model->date = $request->report_date;

            $model->ABO_blood_group = $request->abo_blood_group;
            $model->RH_type = $request->RH_type;

            $model->save();

            DB::commit();

            toastr()->success('ABO Blood Group Test Saved Successfully.');

            return redirect(route('abo.blood.group.print', $model->id));

        } catch (\Exception $e) {

            Log::error($e->getMessage() . 'New ABO Blood Group Test adding');
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
        $model = ABOBloodGroup::find($id);

        return view('backend.abo-blood-group-tests.edit', compact('model', 'doctors'));
    }

    public function update(StoreABOBloodGroupTestRequestsRequest $request, $id)
    {
        try {

            DB::beginTransaction();

            $model = ABOBloodGroup::find($id);

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

            $model->ABO_blood_group = $request->abo_blood_group;
            $model->RH_type = $request->RH_type;

            $model->save();

            DB::commit();

            toastr()->success('ABO Blood Group Test Updated Successfully.');

            return redirect(route('abo.blood.group.print', $model->id));

        } catch (\Exception $e) {

            Log::error($e->getMessage() . 'ABO Blood Group Test updating');
            DB::rollBack();

            toastr()->error('Server Ran Into Problem');
        }

        return back();
    }

    public function destroy($id)
    {
    }
}
