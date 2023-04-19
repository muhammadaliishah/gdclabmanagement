@extends('layouts.layout')

@section('content')

    <main id="main" class="main">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Semen Analysis / Post Coital Test Details</h5>

                        <div class="card">
                            <div class="card-body">

                                {{ Form::model($model->id, array('route' => ['seman-analysis-post-coital.update', $model->id], 'target' => '_blank',  'class' => 'form', 'id' => 'edit-tests-form', 'files' => true)) }}
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

                                <h5 class="card-title">Seman Analysis / Post Coital Test Results</h5>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="volume">Volume:</label>
                                            {{ Form::text('volume', $model->volume, ['class' => ( 'form-control '. ( $errors->has('volume') ? ' is-invalid' : '' )), 'id' => 'volume']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('volume') ? $errors->first('volume') : '' }}
                                            </div>
                                        </div>
                                    </div>

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
                                            <label class="control-label" for="viscosity">Viscosity:</label>
                                            {{ Form::text('viscosity', $model->viscosity, ['class' => ( 'form-control '. ( $errors->has('viscosity') ? ' is-invalid' : '' )), 'id' => 'viscosity']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('viscosity') ? $errors->first('viscosity') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="PH">PH:</label>
                                            {{ Form::text('PH', $model->PH, ['class' => ( 'form-control '. ( $errors->has('PH') ? ' is-invalid' : '' )), 'id' => 'PH']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('PH') ? $errors->first('PH') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="total_sperm_count">Total Sperm
                                                Count:</label>
                                            {{ Form::text('total_sperm_count', $model->total_sperm_count, ['class' => ( 'form-control '. ( $errors->has('total_sperm_count') ? ' is-invalid' : '' )), 'id' => 'total_sperm_count']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('total_sperm_count') ? $errors->first('total_sperm_count') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="active_motile">Active Motile:</label>
                                            {{ Form::text('active_motile', $model->active_motile, ['class' => ( 'form-control '. ( $errors->has('active_motile') ? ' is-invalid' : '' )), 'id' => 'active_motile']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('active_motile') ? $errors->first('active_motile') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="sluggish_motile">Sluggish Motile:</label>
                                            {{ Form::text('sluggish_motile', $model->sluggish_motile, ['class' => ( 'form-control '. ( $errors->has('sluggish_motile') ? ' is-invalid' : '' )), 'id' => 'sluggish_motile']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('sluggish_motile') ? $errors->first('sluggish_motile') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="non_motile">Non Motile:</label>
                                            {{ Form::text('non_motile', $model->non_motile, ['class' => ( 'form-control '. ( $errors->has('non_motile') ? ' is-invalid' : '' )), 'id' => 'non_motile']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('non_motile') ? $errors->first('non_motile') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label"
                                                   for="pus_cell">Puss Cell:</label>
                                            {{ Form::text('pus_cell', $model->pus_cell, ['class' => ( 'form-control '. ( $errors->has('pus_cell') ? ' is-invalid' : '' )), 'id' => 'pus_cell']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('pus_cell') ? $errors->first('pus_cell') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="dibberies_cell">Dibberies Cell:</label>
                                            {{ Form::text('dibberies_cell', $model->dibberies_cell, ['class' => ( 'form-control '. ( $errors->has('dibberies_cell') ? ' is-invalid' : '' )), 'id' => 'dibberies_cell']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('dibberies_cell') ? $errors->first('dibberies_cell') : '' }}
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
                                            <label class="control-label" for="morphology">Morphology:</label>
                                            {{ Form::text('morphology', $model->morphology, ['class' => ( 'form-control '. ( $errors->has('morphology') ? ' is-invalid' : '' )), 'id' => 'morphology']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('morphology') ? $errors->first('morphology') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" for="opinion">Opinion:</label>
                                            {{ Form::text('opinion', $model->opinion, ['class' => ( 'form-control '. ( $errors->has('opinion') ? ' is-invalid' : '' )), 'id' => 'opinion']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('opinion') ? $errors->first('opinion') : '' }}
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
