<?php

namespace App\Http\Controllers\Backend\BioChemistryDiagnosticControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBilirubinBioChemistryTestRequestsRequest;
use App\Http\Requests\StoreBioChemistryDiagnosticTestRequestsRequest;
use App\Http\Requests\StoreUrineTestRequestsRequest;
use App\Models\BilirubinBioChemistry;
use App\Models\BioChemistryDiagnositc;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\UrineTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpParser\Comment\Doc;

class BilirubinBioChemistryTestsController extends Controller
{
    public function index()
    {
        $models = BilirubinBioChemistry::orderby('created_at', 'desc')->paginate(10);

        return view('backend.bilirubin-bio-chemistry-tests.index', compact('models'));
    }

    public function create()
    {
        $doctors = Doctor::pluck('name', 'id');

        return view('backend.bilirubin-bio-chemistry-tests.create', compact('doctors'));
    }

    public function store(StoreBilirubinBioChemistryTestRequestsRequest $request)
    {
        try {

            DB::beginTransaction();

            $patient_model = new Patient();

            $patient_model->name = $request->patient_name;
            $patient_model->age = $request->age;
            $patient_model->age_type = $request->age_type;
            $patient_model->gender = $request->gender;

            $patient_model->save();


            $model = new BilirubinBioChemistry();

            $model->entry_number = $request->entry_number;
            $model->doctor_id = $request->doctor_id;
            $model->patient_id = $patient_model->id;
            $model->date = $request->report_date;

            $model->total_bilirubin = $request->total_bilirubin;
            $model->bilirubin_direct = $request->bilirubin_direct;
            $model->bilirubin_inDirect = $request->bilirubin_indirect;

            $model->save();

            DB::commit();

            toastr()->success('Bilirubin Bio-Chemistry Diagnostic Test Saved Successfully.');

            return redirect(route('bilirubin.bio.chemistry.test.print', $model->id));

        } catch (\Exception $e) {

            Log::error($e->getMessage() . 'New Bilirubin Bio-Chemistry Diagnostic Test adding');
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
        $model = BilirubinBioChemistry::find($id);

        return view('backend.bilirubin-bio-chemistry-tests.edit', compact('model', 'doctors'));
    }

    public function update(StoreBilirubinBioChemistryTestRequestsRequest $request, $id)
    {
        try {

            DB::beginTransaction();

            $model = BilirubinBioChemistry::find($id);

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

            $model->total_bilirubin = $request->total_bilirubin;
            $model->bilirubin_direct = $request->bilirubin_direct;
            $model->bilirubin_inDirect = $request->bilirubin_indirect;

            $model->save();

            DB::commit();

            toastr()->success('Bilirubin Bio-Chemistry Diagnostic Test Updated Successfully.');

            return redirect(route('bilirubin.bio.chemistry.test.print', $model->id));

        } catch (\Exception $e) {

            Log::error($e->getMessage() . 'Bilirubin Bio-Chemistry Diagnostic Test updating');
            DB::rollBack();

            toastr()->error('Server Ran Into Problem');
        }

        return back();
    }

    public function destroy($id)
    {
    }
}
