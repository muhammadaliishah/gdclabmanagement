<?php

namespace App\Http\Controllers\Backend\Settings;

use App\Http\Requests\StoreDoctorsRequest;
use App\Http\Requests\StoreUsersRequest;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use PhpParser\Comment\Doc;

class DoctorsController extends Controller
{
    public function index()
    {
        $models = Doctor::paginate(10);

        return view('backend.settings.doctors.index', compact('models'));
    }

    public function create()
    {
        return view('backend.settings.doctors.create');
    }

    public function store(StoreDoctorsRequest $request)
    {
        try {

            DB::beginTransaction();

            $model = new Doctor();

            $model->name = $request->name;
            $model->father_name = $request->father_name;
            $model->cnic_number = $request->cnic_no;
            $model->cell_number = $request->cell_no;
            $model->email = $request->email_address;
            $model->specialist = $request->specialist;
            $model->address = $request->address;

            $model->save();

            toastr()->success('Doctor Added Successfully.');

            DB::commit();

        } catch (\Exception $e) {

            Log::error($e->getMessage() . 'New User doctor');
            DB::rollBack();

            toastr()->error('Server Ran Into Problem');
        }

        return back();
    }

    public function show($id)
    {
        $model = Doctor::find($id);

        return view('backend.settings.doctors.show', compact('model'));
    }

    public function edit($id)
    {
        //
    }

    public function update(StoreDoctorsRequest $request, $id)
    {
        try {

            DB::beginTransaction();

            $model = Doctor::find($id);

            $model->name = $request->name;
            $model->father_name = $request->father_name;
            $model->cnic_number = $request->cnic_no;
            $model->cell_number = $request->cell_no;
            $model->email = $request->email_address;
            $model->specialist = $request->specialist;
            $model->address = $request->address;

            $model->save();

            toastr()->success('Doctor Updated Successfully.');

            DB::commit();

        } catch (\Exception $e) {

            Log::error($e->getMessage() . 'Update doctor Details');
            DB::rollBack();

            toastr()->error('Server Ran Into Problem');
        }

        return back();
    }

    public function destroy($id)
    {
        //
    }
}
