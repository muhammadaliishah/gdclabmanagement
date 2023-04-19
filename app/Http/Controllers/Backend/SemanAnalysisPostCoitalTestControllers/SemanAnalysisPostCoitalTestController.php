<?php

namespace App\Http\Controllers\Backend\SemanAnalysisPostCoitalTestControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBioChemistryDiagnosticTestRequestsRequest;
use App\Http\Requests\StoreSemanAnalysisTestRequestsRequest;
use App\Http\Requests\StoreUrineTestRequestsRequest;
use App\Models\SemanAnalysis;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\UrineTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpParser\Comment\Doc;

class SemanAnalysisPostCoitalTestController extends Controller
{
    public function index()
    {
        $models = SemanAnalysis::orderby('created_at', 'desc')->paginate(10);

        return view('backend.seman-analysis-post-coital-tests.index', compact('models'));
    }

    public function create()
    {
        $doctors = Doctor::pluck('name', 'id');

        return view('backend.seman-analysis-post-coital-tests.create', compact('doctors'));
    }

    public function store(StoreSemanAnalysisTestRequestsRequest $request)
    {
        try {

            DB::beginTransaction();

            $patient_model = new Patient();

            $patient_model->name = $request->patient_name;
            $patient_model->age = $request->age;
            $patient_model->age_type = $request->age_type;
            $patient_model->gender = $request->gender;

            $patient_model->save();


            $model = new SemanAnalysis();

            $model->entry_number = $request->entry_number;
            $model->doctor_id = $request->doctor_id;
            $model->patient_id = $patient_model->id;
            $model->date = $request->report_date;

            $model->volume = $request->volume;
            $model->color = $request->color;
            $model->viscosity = $request->viscosity;
            $model->PH = $request->PH;
            $model->total_sperm_count = $request->total_sperm_count;
            $model->active_motile = $request->active_motile;
            $model->sluggish_motile = $request->sluggish_motile;
            $model->non_motile = $request->non_motile;
            $model->pus_cell = $request->pus_cell;
            $model->dibberies_cell = $request->dibberies_cell;
            $model->RBC = $request->RBC;
            $model->morphology = $request->morphology;
            $model->opinion = $request->opinion;

            $model->save();

            DB::commit();

            toastr()->success('Seman Analysis / Post Coital Test Saved Successfully.');

            return redirect(route('seman-analysis-analysis.print', $model->id));

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
        $model = SemanAnalysis::find($id);

        return view('backend.seman-analysis-post-coital-tests.edit', compact('model', 'doctors'));
    }

    public function update(StoreSemanAnalysisTestRequestsRequest $request, $id)
    {
        try {

            DB::beginTransaction();

            $model = SemanAnalysis::find($id);

            $patient_model = Patient::find($model->patient_id);

            $patient_model->name = $request->patient_name;
            $patient_model->age = $request->age;
            $patient_model->age_type = $request->age_type;
            $patient_model->gender = $request->gender;

            $patient_model->save();


            $model->entry_number = $request->entry_number;
            $model->doctor_id = $request->doctor_id;
            $model->date = $request->report_date;

            $model->volume = $request->volume;
            $model->color = $request->color;
            $model->viscosity = $request->viscosity;
            $model->PH = $request->PH;
            $model->total_sperm_count = $request->total_sperm_count;
            $model->active_motile = $request->active_motile;
            $model->sluggish_motile = $request->sluggish_motile;
            $model->non_motile = $request->non_motile;
            $model->pus_cell = $request->pus_cell;
            $model->dibberies_cell = $request->dibberies_cell;
            $model->RBC = $request->RBC;
            $model->morphology = $request->morphology;
            $model->opinion = $request->opinion;

            $model->save();

            DB::commit();

            toastr()->success('Seman Analysis / Post Coital Test Updated Successfully.');

            return redirect(route('seman-analysis-analysis.print', $model->id));

        } catch (\Exception $e) {

            Log::error($e->getMessage() . 'Seman Analysis / Post Coital Test updating');
            DB::rollBack();

            toastr()->error('Server Ran Into Problem');
        }

        return back();
    }

    public function destroy($id)
    {
    }
}
