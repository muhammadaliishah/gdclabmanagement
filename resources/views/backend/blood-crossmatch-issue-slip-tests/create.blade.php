@extends('layouts.layout')

@section('content')

    <main id="main" class="main">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Blood Cross-Match & Issue Slip</h5>

                        <div class="card">
                            <div class="card-body">

                                {{ Form::open(array('route' => 'blood-cross-match.store', 'target' => '_blank',  'class' => 'form', 'id' => 'create-tests-form', 'files' => true)) }}

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="entry_number">Entry Number:</label>
                                            {{ Form::text('entry_number', NULL, ['class' => ( 'form-control '. ( $errors->has('entry_number') ? ' is-invalid' : '' )), 'id' => 'entry_number']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('entry_number') ? $errors->first('entry_number') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label" for="report_date">Report Date:</label>
                                            {{ Form::date('report_date', today(), ['class' => ( 'form-control '. ( $errors->has('report_date') ? ' is-invalid' : '' )), 'id' => 'report_date']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('report_date') ? $errors->first('report_date') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label" for="report_time">Time:</label>
                                            {{ Form::time('report_time', now(), ['class' => ( 'form-control '. ( $errors->has('report_time') ? ' is-invalid' : '' )), 'id' => 'report_time']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('report_time') ? $errors->first('report_time') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="control-label" for="issued_by_incharge_name">Crossmatch & Issued
                                                By:</label>
                                            {{ Form::text('issued_by_incharge_name', NULL, ['class' => ( 'form-control '. ( $errors->has('issued_by_incharge_name') ? ' is-invalid' : '' )), 'id' => 'issued_by_incharge_name']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('issued_by_incharge_name') ? $errors->first('issued_by_incharge_name') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="patient_name">Patient Name:</label>
                                            {{ Form::text('patient_name', NULL, ['class' => ( 'form-control '. ( $errors->has('patient_name') ? ' is-invalid' : '' )), 'id' => 'patient_name']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('patient_name') ? $errors->first('patient_name') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label" for="age">Age:</label>
                                            {{ Form::number('age', NULL, ['class' => ( 'form-control '. ( $errors->has('age') ? ' is-invalid' : '' )), 'id' => 'age']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('age') ? $errors->first('age') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group {{( $errors->has('age_type')) ? 'has-error' : ''}}">
                                            <label class="control-label d-block" for="age_type">
                                                Choose Age Type:
                                            </label>
                                            {{ Form::select('age_type',
                                                        [
                                                            "Days"=> "Days",
                                                            "Months"=> "Months",
                                                            "Years"=> "Years",
        ],
                                                        NULL,
                                                        array('class' => ( 'form-select' ),
                                                        'id' => 'age_type')) }}
                                            <span class="help-block">
                                    {{ $errors->has('age_type')? $errors->first('age_type'): '' }}
                           </span>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group {{( $errors->has('gender')) ? 'has-error' : ''}}">
                                            <label class="control-label d-block" for="gender">
                                                Choose Sex:
                                            </label>
                                            {{ Form::select('gender',
                                                         [
                                                            "Male"=> "Male",
                                                            "Female"=> "Female",
                                                            "Others"=> "Others",
                                                        ],
                                                        NULL,
                                                        array('class' => ( 'form-select' ),
                                                        'id' => 'gender')) }}
                                            <span class="help-block">
                                    {{ $errors->has('gender')? $errors->first('gender'): '' }}
                           </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="patient_blood_group">Blood Group of
                                                Patient:</label>
                                            {{ Form::text('patient_blood_group', NULL, ['class' => ( 'form-control '. ( $errors->has('patient_blood_group') ? ' is-invalid' : '' )), 'id' => 'patient_blood_group']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('patient_blood_group') ? $errors->first('patient_blood_group') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="blood_group_donor">Blood Group of
                                                Donor/Bag:</label>
                                            {{ Form::text('blood_group_donor', NULL, ['class' => ( 'form-control '. ( $errors->has('blood_group_donor') ? ' is-invalid' : '' )), 'id' => 'blood_group_donor']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('blood_group_donor') ? $errors->first('blood_group_donor') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="donor_name">Blood Donor Name:</label>
                                            {{ Form::text('donor_name', NULL, ['class' => ( 'form-control '. ( $errors->has('donor_name') ? ' is-invalid' : '' )), 'id' => 'donor_name']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('donor_name') ? $errors->first('donor_name') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="card mt-5">
                            <div class="card-body">

                                <h5 class="card-title">Blood Cross-Match & Issue Slip Results</h5>

                                <div class="row mt-3">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="result">Value:</label>
                                            {{ Form::text('result', NULL, ['class' => ( 'form-control '. ( $errors->has('result') ? ' is-invalid' : '' )), 'id' => 'result']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('result') ? $errors->first('result') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" style="height: 50px;">Save & Print
                                            Report
                                        </button>
                                        {{--                                    <input type="checkbox" name="is_print" id="is_print" style="margin-left: 10px; height:20px; width:20px;"> Print Report--}}
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
