@extends('layouts.layout')

@section('content')

    <main id="main" class="main">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Clinical Pathology Test Details</h5>

                        <div class="card">
                            <div class="card-body">

                                {{ Form::model($model->id, array('route' => ['clinical-pathology.update', $model->id], 'target' => '_blank',  'class' => 'form', 'id' => 'edit-tests-form', 'files' => true)) }}
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

                                <h5 class="card-title">Clinical Pathology Test Results</h5>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="color">Color:</label>
                                            {{ Form::text('color', $model->color, ['class' => ( 'form-control '. ( $errors->has('color') ? ' is-invalid' : '' )), 'id' => 'color']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('color') ? $errors->first('color') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="consistency">Consistency:</label>
                                            {{ Form::text('consistency', $model->consistency, ['class' => ( 'form-control '. ( $errors->has('consistency') ? ' is-invalid' : '' )), 'id' => 'consistency']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('consistency') ? $errors->first('consistency') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="blood">Blood:</label>
                                            {{ Form::text('blood', $model->blood, ['class' => ( 'form-control '. ( $errors->has('blood') ? ' is-invalid' : '' )), 'id' => 'blood']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('blood') ? $errors->first('blood') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="mucus">Mucus:</label>
                                            {{ Form::text('mucus', $model->mucus, ['class' => ( 'form-control '. ( $errors->has('mucus') ? ' is-invalid' : '' )), 'id' => 'mucus']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('mucus') ? $errors->first('mucus') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">


                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="WBC_PUS_cells">WBCs/PUS Cells:</label>
                                            {{ Form::text('WBC_PUS_cells', $model->WBC_PUS_cells, ['class' => ( 'form-control '. ( $errors->has('WBC_PUS_cells') ? ' is-invalid' : '' )), 'id' => 'WBC_PUS_cells']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('WBC_PUS_cells') ? $errors->first('WBC_PUS_cells') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="RBC">RBCs:</label>
                                            {{ Form::text('RBC', $model->RBC, ['class' => ( 'form-control '. ( $errors->has('RBC') ? ' is-invalid' : '' )), 'id' => 'RBC']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('RBC') ? $errors->first('RBC') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="ova_parasites">Ova & Parasites:</label>
                                            {{ Form::text('ova_parasites', $model->ova_parasites, ['class' => ( 'form-control '. ( $errors->has('ova_parasites') ? ' is-invalid' : '' )), 'id' => 'ova_parasites']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('ova_parasites') ? $errors->first('ova_parasites') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label"
                                                   for="cyst">Cyst:</label>
                                            {{ Form::text('cyst', $model->cyst, ['class' => ( 'form-control '. ( $errors->has('cyst') ? ' is-invalid' : '' )), 'id' => 'cyst']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('cyst') ? $errors->first('cyst') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="fatty_globules">Fatty Globules:</label>
                                            {{ Form::text('fatty_globules', $model->fatty_globules, ['class' => ( 'form-control '. ( $errors->has('fatty_globules') ? ' is-invalid' : '' )), 'id' => 'fatty_globules']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('fatty_globules') ? $errors->first('fatty_globules') : '' }}
                                            </div>
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
