@extends('layouts.layout')

@section('content')

    <main id="main" class="main">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New User</h5>

                        {{ Form::open(array('route' => 'users.store', 'class' => 'form', 'id' => 'create-add-users-form', 'files' => true)) }}

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="name">Name:</label>
                                    {{ Form::text('name', NULL, ['class' => ( 'form-control '. ( $errors->has('name') ? ' is-invalid' : '' )), 'id' => 'name']) }}
                                    <div class="invalid-feedback">
                                        {{ $errors->has('name') ? $errors->first('name') : '' }}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="father_name">Father Name:</label>
                                    {{ Form::text('father_name', NULL, ['class' => ( 'form-control '. ( $errors->has('father_name') ? ' is-invalid' : '' )), 'id' => 'father_name']) }}
                                    <div class="invalid-feedback">
                                        {{ $errors->has('father_name') ? $errors->first('father_name') : '' }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="cnic_no">CNIC:</label>
                                    {{ Form::number('cnic_no', NULL, ['class' => ( 'form-control '. ( $errors->has('cnic_no') ? ' is-invalid' : '' )), 'id' => 'cnic_no']) }}
                                    <div class="invalid-feedback">
                                        {{ $errors->has('cnic_no') ? $errors->first('cnic_no') : '' }}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="cell_no">Cell No:</label>
                                    {{ Form::number('cell_no', NULL, ['class' => ( 'form-control '. ( $errors->has('cell_no') ? ' is-invalid' : '' )), 'id' => 'cell_no']) }}
                                    <div class="invalid-feedback">
                                        {{ $errors->has('cell_no') ? $errors->first('cell_no') : '' }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="email_address">Email Address:</label>
                                    {{ Form::email('email_address', NULL, ['class' => ( 'form-control '. ( $errors->has('email_address') ? ' is-invalid' : '' )), 'id' => 'email_address']) }}
                                    <div class="invalid-feedback">
                                        {{ $errors->has('email_address') ? $errors->first('email_address') : '' }}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="password">Password:</label>
                                    {{ Form::password(NULL, ['class' => ( 'form-control '. ( $errors->has('password') ? ' is-invalid' : '' )), 'id' => 'password', 'name' => 'password']) }}
                                    <div class="invalid-feedback">
                                        {{ $errors->has('password') ? $errors->first('password') : '' }}
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="address">Address:</label>
                                    {{ Form::text('address', NULL, ['class' => ( 'form-control '. ( $errors->has('address') ? ' is-invalid' : '' )), 'id' => 'address']) }}
                                    <div class="invalid-feedback">
                                        {{ $errors->has('address') ? $errors->first('address') : '' }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-md-12">--}}
                        {{--                                <div class="form-group {{( $errors->has('role')) ? 'has-error' : ''}}">--}}
                        {{--                                    <label class="control-label d-block" for="role">--}}
                        {{--                                        Choose Role:--}}
                        {{--                                    </label>--}}
                        {{--                                    {{ Form::select('role[]',--}}
                        {{--                                                $roles,--}}
                        {{--                                                NULL,--}}
                        {{--                                                array('class' => ( ['form-select select2'] ),--}}
                        {{--                                                'id' => 'role[]',--}}
                        {{--                                                 'multiple' => 'multiple')) }}--}}
                        {{--                                    <span class="help-block">--}}
                        {{--                                    {{ $errors->has('role')? $errors->first('role'): '' }}--}}
                        {{--                           </span>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </div>
                        </div>


                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
