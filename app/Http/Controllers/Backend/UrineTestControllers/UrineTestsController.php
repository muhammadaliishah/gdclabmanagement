<?php

namespace App\Http\Controllers\Backend\UrineTestControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUrineTestRequestsRequest;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\UrineTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpParser\Comment\Doc;

class UrineTestsController extends Controller
{
    public function index()
    {
        $models = UrineTest::orderby('created_at', 'desc')->paginate(10);

        return view('backend.urine-tests.index', compact('models'));
    }

    public function create()
    {
        $doctors = Doctor::pluck('name', 'id');

        return view('backend.urine-tests.create', compact('doctors'));
    }

    public function store(StoreUrineTestRequestsRequest $request)
    {
        try {

            DB::beginTransaction();

            $patient_model = new Patient();

            $patient_model->name = $request->patient_name;
            $patient_model->age = $request->age;
            $patient_model->age_type = $request->age_type;
            $patient_model->gender = $request->gender;

            $patient_model->save();


            $model = new UrineTest();

            $model->entry_number = $request->entry_number;
            $model->doctor_id = $request->doctor_id;
            $model->patient_id = $patient_model->id;
            $model->date = $request->report_date;
            $model->color = $request->color;
            $model->appearance = $request->appearance;
            $model->PH = $request->PH;
            $model->specific_gravity = $request->specific_gravity;
            $model->protein = $request->protein;
            $model->glucose = $request->glucose;
            $model->ketones = $request->ketones;
            $model->bilirubin = $request->bilirubin;
            $model->blood = $request->blood;
            $model->nitrite = $request->nitrite;
            $model->wbc_pus_cells = $request->wbc_pus_cells;
            $model->rbc = $request->RBC;
            $model->epithelial_cells = $request->epithelial_cells;
            $model->cast = $request->casts;
            $model->bacteria = $request->bacteria;
            $model->calcium_oxalate = $request->calcium_oxalate;
            $model->amorphous_urates = $request->amorphous_urates;

            $model->save();

            DB::commit();

            toastr()->success('Urine Test Saved Successfully.');

        //    return $model->doctor->name;

            return redirect(route('urine-test.print', $model->id));

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
        $model = UrineTest::find($id);

        return view('backend.urine-tests.edit', compact('model', 'doctors'));
    }

    public function update(StoreUrineTestRequestsRequest $request, $id)
    {
        try {

            DB::beginTransaction();

            $model = UrineTest::find($id);

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
            $model->appearance = $request->appearance;
            $model->PH = $request->PH;
            $model->specific_gravity = $request->specific_gravity;
            $model->protein = $request->protein;
            $model->glucose = $request->glucose;
            $model->ketones = $request->ketones;
            $model->bilirubin = $request->bilirubin;
            $model->blood = $request->blood;
            $model->nitrite = $request->nitrite;
            $model->wbc_pus_cells = $request->wbc_pus_cells;
            $model->rbc = $request->RBC;
            $model->epithelial_cells = $request->epithelial_cells;
            $model->cast = $request->casts;
            $model->bacteria = $request->bacteria;
            $model->calcium_oxalate = $request->calcium_oxalate;
            $model->amorphous_urates = $request->amorphous_urates;

            $model->save();

            DB::commit();

            toastr()->success('Urine Test Updated Successfully.');

            return redirect(route('urine-test.print', $model->id));

        } catch (\Exception $e) {

            Log::error($e->getMessage() . 'Urine Test Updating');
            DB::rollBack();

            toastr()->error('Server Ran Into Problem');
        }

        return back();
    }

    public function destroy($id)
    {
    }
}
