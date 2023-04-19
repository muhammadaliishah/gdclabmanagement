@extends('layouts.layout')

@section('content')

    <main id="main" class="main">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Bilirubin Bio-Chemistry Test Details</h5>

                        <div class="card">
                            <div class="card-body">

                                {{ Form::model($model->id, array('route' => ['bilirubin-bio-chemistry.update', $model->id], 'target' => '_blank',  'class' => 'form', 'id' => 'edit-tests-form', 'files' => true)) }}
                                {!! method_field('POST') !!}

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="entry_number">Entry Number:</label>
                                            {{ Form::text('entry_number', $model->entry_number, ['class' => ( 'form-control '. ( $errors->has('entry_number') ? ' is-invalid' : '' )), 'id' => 'entry_number']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('entry_number') ? $errors->first('entry_number') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="report_date">Report Date:</label>
                                            {{ Form::date('report_date', $model->date, ['class' => ( 'form-control '. ( $errors->has('report_date') ? ' is-invalid' : '' )), 'id' => 'report_date']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('report_date') ? $errors->first('report_date') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group {{( $errors->has('doctor_id')) ? 'has-error' : ''}}">
                                            <label class="control-label d-block" for="doctor_id">
                                                Choose Ref By Dr.:
                                            </label>
                                            {{ Form::select('doctor_id',
                                                        $doctors,
                                                        $model->doctor_id,
                                                        array('class' => ( 'form-control select2' ),
                                                        'id' => 'doctor_id')) }}
                                            <span class="help-block">
                                    {{ $errors->has('doctor_id')? $errors->first('doctor_id'): '' }}
                           </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="patient_name">Patient Name:</label>
                                            {{ Form::text('patient_name', $model->patient->name, ['class' => ( 'form-control '. ( $errors->has('patient_name') ? ' is-invalid' : '' )), 'id' => 'patient_name']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('patient_name') ? $errors->first('patient_name') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label" for="age">Age:</label>
                                            {{ Form::number('age', $model->patient->age, ['class' => ( 'form-control '. ( $errors->has('age') ? ' is-invalid' : '' )), 'id' => 'age']) }}
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
                                                        $model->patient->age_type,
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
                                                        $model->patient->gender,
                                                        array('class' => ( 'form-select' ),
                                                        'id' => 'gender')) }}
                                            <span class="help-block">
                                    {{ $errors->has('gender')? $errors->first('gender'): '' }}
                           </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card mt-5">
                            <div class="card-body">

                                <h5 class="card-title">Bilirubin (Direct & In-Direct) Test Results</h5>

                                <div class="row mt-3">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="total_bilirubin">Total Bilirubin:</label>
                                            {{ Form::text('total_bilirubin', $model->total_bilirubin, ['class' => ( 'form-control '. ( $errors->has('total_bilirubin') ? ' is-invalid' : '' )), 'id' => 'total_bilirubin']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('total_bilirubin') ? $errors->first('total_bilirubin') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="bilirubin_direct">Bilirubin
                                                Direct:</label>
                                            {{ Form::text('bilirubin_direct', $model->bilirubin_direct, ['class' => ( 'form-control '. ( $errors->has('bilirubin_direct') ? ' is-invalid' : '' )), 'id' => 'bilirubin_direct']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('bilirubin_direct') ? $errors->first('bilirubin_direct') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="bilirubin_indirect">Bilirubin
                                                In-Direct:</label>
                                            {{ Form::text('bilirubin_indirect', $model->bilirubin_inDirect, ['class' => ( 'form-control '. ( $errors->has('bilirubin_indirect') ? ' is-invalid' : '' )), 'id' => 'bilirubin_indirect']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('bilirubin_indirect') ? $errors->first('bilirubin_indirect') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" style="height: 50px;">Update Report
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
