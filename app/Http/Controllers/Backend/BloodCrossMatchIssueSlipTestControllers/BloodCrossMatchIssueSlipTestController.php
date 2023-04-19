<?php

namespace App\Http\Controllers\Backend\BloodCrossMatchIssueSlipTestControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBloodCrossMatchTestRequestsRequest;
use App\Http\Requests\StoreUrineTestRequestsRequest;
use App\Models\BilirubinBioChemistry;
use App\Models\BioChemistryDiagnositc;
use App\Models\BloodCrossMatch;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\UrineTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpParser\Comment\Doc;

class BloodCrossMatchIssueSlipTestController extends Controller
{
    public function index()
    {
        $models = BloodCrossMatch::orderby('created_at', 'desc')->paginate(10);

        return view('backend.blood-crossmatch-issue-slip-tests.index', compact('models'));
    }

    public function create()
    {
        return view('backend.blood-crossmatch-issue-slip-tests.create');
    }

    public function store(StoreBloodCrossMatchTestRequestsRequest $request)
    {
        try {

            DB::beginTransaction();

            $patient_model = new Patient();

            $patient_model->name = $request->patient_name;
            $patient_model->age = $request->age;
            $patient_model->age_type = $request->age_type;
            $patient_model->gender = $request->gender;
            $patient_model->blood_group = $request->patient_blood_group;

            $patient_model->save();


            $model = new BloodCrossMatch();

            $model->entry_number = $request->entry_number;
            $model->patient_id = $patient_model->id;
            $model->date = $request->report_date;
            $model->time = $request->report_time;

            $model->issued_by_incharge_name = $request->issued_by_incharge_name;
            $model->donor_name = $request->donor_name;
            $model->blood_group_donor = $request->blood_group_donor;
            $model->result = $request->result;

            $model->save();

            DB::commit();

            toastr()->success('Blood Cross-March & Issue Slip Saved Successfully.');

            return redirect(route('blood.crossmatch.issue.slip.print', $model->id));

        } catch (\Exception $e) {

            Log::error($e->getMessage() . 'New Blood Cross-March & Issue Slip adding');
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
        $model = BloodCrossMatch::find($id);

        return view('backend.blood-crossmatch-issue-slip-tests.edit', compact('model'));
    }

    public function update(StoreBloodCrossMatchTestRequestsRequest $request, $id)
    {
        try {

            DB::beginTransaction();

            $model = BloodCrossMatch::find($id);

            $patient_model = Patient::find($model->patient_id);

            $patient_model->name = $request->patient_name;
            $patient_model->age = $request->age;
            $patient_model->age_type = $request->age_type;
            $patient_model->gender = $request->gender;
            $patient_model->blood_group = $request->patient_blood_group;

            $patient_model->save();

            $model->entry_number = $request->entry_number;
            $model->patient_id = $patient_model->id;
            $model->date = $request->report_date;
            $model->time = $request->report_time;

            $model->issued_by_incharge_name = $request->issued_by_incharge_name;
            $model->donor_name = $request->donor_name;
            $model->blood_group_donor = $request->blood_group_donor;
            $model->result = $request->result;

            $model->save();

            DB::commit();

            toastr()->success('Blood Cross-March & Issue Slip Updated Successfully.');

            return redirect(route('blood.crossmatch.issue.slip.print', $model->id));

        } catch (\Exception $e) {

            Log::error($e->getMessage() . 'Blood Cross-March & Issue Slip updating');
            DB::rollBack();

            toastr()->error('Server Ran Into Problem');
        }

        return back();
    }

    public function destroy($id)
    {
    }
}
