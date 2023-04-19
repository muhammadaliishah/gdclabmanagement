<?php

namespace App\Http\Controllers\Backend\ClinicalPathologyTestControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBioChemistryDiagnosticTestRequestsRequest;
use App\Http\Requests\StoreClinicalPathologyTestRequestsRequest;
use App\Http\Requests\StoreUrineTestRequestsRequest;
use App\Models\ClinicalPathology;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\UrineTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpParser\Comment\Doc;

class ClinicalPathologyTestController extends Controller
{
    public function index()
    {
        $models = ClinicalPathology::orderby('created_at', 'desc')->paginate(10);

        return view('backend.clinical-pathology-tests.index', compact('models'));
    }

    public function create()
    {
        $doctors = Doctor::pluck('name', 'id');

        return view('backend.clinical-pathology-tests.create', compact('doctors'));
    }

    public function store(StoreClinicalPathologyTestRequestsRequest $request)
    {
        try {

            DB::beginTransaction();

            $patient_model = new Patient();

            $patient_model->name = $request->patient_name;
            $patient_model->age = $request->age;
            $patient_model->age_type = $request->age_type;
            $patient_model->gender = $request->gender;

            $patient_model->save();


            $model = new ClinicalPathology();

            $model->entry_number = $request->entry_number;
            $model->doctor_id = $request->doctor_id;
            $model->patient_id = $patient_model->id;
            $model->date = $request->report_date;

            $model->color = $request->color;
            $model->consistency = $request->consistency;
            $model->blood = $request->blood;
            $model->mucus = $request->mucus;
            $model->WBC_PUS_cells = $request->WBC_PUS_cells;
            $model->RBC = $request->RBC;
            $model->ova_parasites = $request->ova_parasites;
            $model->cyst = $request->cyst;
            $model->fatty_globules = $request->fatty_globules;

            $model->save();

            DB::commit();

            toastr()->success('Clinical Pathology Test Saved Successfully.');

            return redirect(route('clinical-pathology.print', $model->id));

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
        $model = ClinicalPathology::find($id);

        return view('backend.clinical-pathology-tests.edit', compact('model', 'doctors'));
    }

    public function update(StoreClinicalPathologyTestRequestsRequest $request, $id)
    {
        try {

            DB::beginTransaction();

            $model = ClinicalPathology::find($id);

            $patient_model = Patient::find($model->patient_id);

            $patient_model->name = $request->patient_name;
            $patient_model->age = $request->age;
            $patient_model->age_type = $request->age_type;
            $patient_model->gender = $request->gender;

            $patient_model->save();


            $model->entry_number = $request->entry_number;
            $model->doctor_id = $request->doctor_id;
            $model->date = $request->report_date;

            $model->color = $request->color;
            $model->consistency = $request->consistency;
            $model->blood = $request->blood;
            $model->mucus = $request->mucus;
            $model->WBC_PUS_cells = $request->WBC_PUS_cells;
            $model->RBC = $request->RBC;
            $model->ova_parasites = $request->ova_parasites;
            $model->cyst = $request->cyst;
            $model->fatty_globules = $request->fatty_globules;

            $model->save();

            DB::commit();

            toastr()->success('Clinical Pathology Test Updated Successfully.');

            return redirect(route('clinical-pathology.print', $model->id));

        } catch (\Exception $e) {

            Log::error($e->getMessage() . 'Clinical Pathology Test updating');
            DB::rollBack();

            toastr()->error('Server Ran Into Problem');
        }

        return back();
    }

    public function destroy($id)
    {
    }
}
