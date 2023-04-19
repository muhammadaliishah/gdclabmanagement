<?php

namespace App\Http\Controllers\Backend\Settings;

use App\Http\Requests\StoreUsersRequest;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class UsersController extends Controller
{
    public function index()
    {
        $models = User::paginate(10);

        return view('backend.settings.add-users.index', compact('models'));
    }

    public function create()
    {
        return view('backend.settings.add-users.create');
    }

    public function store(StoreUsersRequest $request)
    {
        try {

            DB::beginTransaction();

            $model = new User();

            $model->name = $request->name;
            $model->father_name = $request->father_name;
            $model->cnic_number = $request->cnic_no;
            $model->cell_number = $request->cell_no;
            $model->email = $request->email_address;
            $model->password = \Hash::make($request->password);
            $model->address = $request->address;

            $model->save();


            if (request()->filled('role')) {

                $model->assignRole(request('role'));
            }

            toastr()->success('User Added Successfully.');

            DB::commit();

        } catch (\Exception $e) {

            Log::error($e->getMessage() . 'New User adding');
            DB::rollBack();

            toastr()->error('Server Ran Into Problem');
        }

        return back();
    }

    public function show($id)
    {
        $model = User::find($id);

        return view('backend.settings.add-users.show', compact('model'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'name' => 'required|max:180',
            'father_name' => 'required|max:180',
            'password' => 'nullable|min:8',
            'address' => 'nullable|max:200',

            'cnic_no' => 'required|max:14|unique:users,cnic_number,' . $id,
            'cell_no' => 'required|max:11',
            'email_address' => 'required|max:30|unique:users,email,' . $id,
        ]);

        try {

            DB::beginTransaction();

            $model = User::find($id);

            $model->name = $request->name;
            $model->father_name = $request->father_name;
            $model->cnic_number = $request->cnic_no;
            $model->cell_number = $request->cell_no;
            $model->email = $request->email_address;
            $model->address = $request->address;

            if ($request->password != '' && $request->password != NULL) {

                $model->password = \Hash::make($request->password);
            }

            $model->save();

            toastr()->success('User Updated Successfully.');

            DB::commit();

        } catch (\Exception $e) {

            Log::error($e->getMessage() . 'Update User Details');
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
