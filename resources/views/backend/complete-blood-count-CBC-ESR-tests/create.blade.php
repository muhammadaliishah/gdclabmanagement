@extends('layouts.layout')

@section('content')

    <main id="main" class="main">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Complete Blood Count (CBC) & ESR Automations Test</h5>

                        <div class="card">
                            <div class="card-body">

                                {{ Form::open(array('route' => 'complete-blood-count.store', 'target' => '_blank', 'class' => 'form', 'id' => 'create-tests-form', 'files' => true)) }}

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

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="report_date">Report Date:</label>
                                            {{ Form::date('report_date', today(), ['class' => ( 'form-control '. ( $errors->has('report_date') ? ' is-invalid' : '' )), 'id' => 'report_date']) }}
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
                                                        NULL,
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

                            </div>
                        </div>

                        <div class="card mt-5">
                            <div class="card-body">

                                <h5 class="card-title">Complete Blood Count (CBC) & ESR Automations Test Results</h5>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="wbc_count">WBC Count:</label>
                                            {{ Form::text('wbc_count', NULL, ['class' => ( 'form-control '. ( $errors->has('wbc_count') ? ' is-invalid' : '' )), 'id' => 'wbc_count']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('wbc_count') ? $errors->first('wbc_count') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="rbc_count">RCB Count:</label>
                                            {{ Form::text('rbc_count', NULL, ['class' => ( 'form-control '. ( $errors->has('rbc_count') ? ' is-invalid' : '' )), 'id' => 'rbc_count']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('rbc_count') ? $errors->first('rbc_count') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="hemoglobin">Hemoglobin:</label>
                                            {{ Form::text('hemoglobin', NULL, ['class' => ( 'form-control '. ( $errors->has('hemoglobin') ? ' is-invalid' : '' )), 'id' => 'hemoglobin']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('hemoglobin') ? $errors->first('hemoglobin') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="hematocrit">Hematocrit:</label>
                                            {{ Form::text('hematocrit', NULL, ['class' => ( 'form-control '. ( $errors->has('hematocrit') ? ' is-invalid' : '' )), 'id' => 'hematocrit']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('hematocrit') ? $errors->first('hematocrit') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="MCV">MCV:</label>
                                            {{ Form::text('MCV', NULL, ['class' => ( 'form-control '. ( $errors->has('MCV') ? ' is-invalid' : '' )), 'id' => 'MCV']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('MCV') ? $errors->first('MCV') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="MCH">MCH:</label>
                                            {{ Form::text('MCH', NULL, ['class' => ( 'form-control '. ( $errors->has('MCH') ? ' is-invalid' : '' )), 'id' => 'MCH']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('MCH') ? $errors->first('MCH') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="MCHC">MCHC:</label>
                                            {{ Form::text('MCHC', NULL, ['class' => ( 'form-control '. ( $errors->has('MCHC') ? ' is-invalid' : '' )), 'id' => 'MCHC']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('MCHC') ? $errors->first('MCHC') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="platelets_count">Platelets Count:</label>
                                            {{ Form::text('platelets_count', NULL, ['class' => ( 'form-control '. ( $errors->has('platelets_count') ? ' is-invalid' : '' )), 'id' => 'platelets_count']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('platelets_count') ? $errors->first('platelets_count') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label"
                                                   for="neutrophils">Neutrophils:</label>
                                            {{ Form::text('neutrophils', NULL, ['class' => ( 'form-control '. ( $errors->has('neutrophils') ? ' is-invalid' : '' )), 'id' => 'neutrophils']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('neutrophils') ? $errors->first('neutrophils') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="lymphocytes">Lymphocytes:</label>
                                            {{ Form::text('lymphocytes', NULL, ['class' => ( 'form-control '. ( $errors->has('lymphocytes') ? ' is-invalid' : '' )), 'id' => 'lymphocytes']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('lymphocytes') ? $errors->first('lymphocytes') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="monocytes">Monocytes:</label>
                                            {{ Form::text('monocytes', NULL, ['class' => ( 'form-control '. ( $errors->has('monocytes') ? ' is-invalid' : '' )), 'id' => 'monocytes']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('monocytes') ? $errors->first('monocytes') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="eosinophils">Eosinophils:</label>
                                            {{ Form::text('eosinophils', NULL, ['class' => ( 'form-control '. ( $errors->has('eosinophils') ? ' is-invalid' : '' )), 'id' => 'eosinophils']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('eosinophils') ? $errors->first('eosinophils') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="basophils">Basophils:</label>
                                            {{ Form::text('basophils', NULL, ['class' => ( 'form-control '. ( $errors->has('basophils') ? ' is-invalid' : '' )), 'id' => 'basophils']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('basophils') ? $errors->first('basophils') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="bands">Bands:</label>
                                            {{ Form::text('bands', NULL, ['class' => ( 'form-control '. ( $errors->has('bands') ? ' is-invalid' : '' )), 'id' => 'bands']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('bands') ? $errors->first('bands') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="blood_group">Blood Group:</label>
                                            {{ Form::text('blood_group', NULL, ['class' => ( 'form-control '. ( $errors->has('blood_group') ? ' is-invalid' : '' )), 'id' => 'blood_group']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('blood_group') ? $errors->first('blood_group') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="ESR">ESR:</label>
                                            {{ Form::text('ESR', NULL, ['class' => ( 'form-control '. ( $errors->has('ESR') ? ' is-invalid' : '' )), 'id' => 'ESR']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('ESR') ? $errors->first('ESR') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="BT">BT:</label>
                                            {{ Form::text('BT', NULL, ['class' => ( 'form-control '. ( $errors->has('BT') ? ' is-invalid' : '' )), 'id' => 'BT']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('BT') ? $errors->first('BT') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="CT">CT:</label>
                                            {{ Form::text('CT', NULL, ['class' => ( 'form-control '. ( $errors->has('CT') ? ' is-invalid' : '' )), 'id' => 'CT']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('CT') ? $errors->first('CT') : '' }}
                                            </div>
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
