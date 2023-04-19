@extends('layouts.layout')

@section('content')

    <main id="main" class="main">

        <div class="row">
            <div class="col-lg-12">

                {{--  add new record start    --}}

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Urine Test</h5>

                        <div class="card">
                            <div class="card-body">

                                {{ Form::open(array('route' => 'urine-tests.store', 'target' => '_blank',  'class' => 'form', 'id' => 'create-urine-tests-form', 'files' => true)) }}

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
                                                Choose Ref By Dr:
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

                                <h5 class="card-title">Urine Test Results</h5>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="color">Color:</label>
                                            {{ Form::text('color', NULL, ['class' => ( 'form-control '. ( $errors->has('color') ? ' is-invalid' : '' )), 'id' => 'color']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('color') ? $errors->first('color') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="appearance">Appearance:</label>
                                            {{ Form::text('appearance', NULL, ['class' => ( 'form-control '. ( $errors->has('appearance') ? ' is-invalid' : '' )), 'id' => 'appearance']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('appearance') ? $errors->first('appearance') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="PH">PH:</label>
                                            {{ Form::text('PH', NULL, ['class' => ( 'form-control '. ( $errors->has('PH') ? ' is-invalid' : '' )), 'id' => 'PH']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('PH') ? $errors->first('PH') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="specific_gravity">Specific
                                                Gravity:</label>
                                            {{ Form::text('specific_gravity', NULL, ['class' => ( 'form-control '. ( $errors->has('specific_gravity') ? ' is-invalid' : '' )), 'id' => 'specific_gravity']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('specific_gravity') ? $errors->first('specific_gravity') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="protein">Protein:</label>
                                            {{ Form::text('protein', 'NEGATIVE', ['class' => ( 'form-control '. ( $errors->has('protein') ? ' is-invalid' : '' )), 'id' => 'protein']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('protein') ? $errors->first('protein') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="glucose">Glucose:</label>
                                            {{ Form::text('glucose', 'NEGATIVE', ['class' => ( 'form-control '. ( $errors->has('glucose') ? ' is-invalid' : '' )), 'id' => 'glucose']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('glucose') ? $errors->first('glucose') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="ketones">Ketones:</label>
                                            {{ Form::text('ketones', 'NEGATIVE', ['class' => ( 'form-control '. ( $errors->has('ketones') ? ' is-invalid' : '' )), 'id' => 'ketones']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('ketones') ? $errors->first('ketones') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="bilirubin">Bilirubin:</label>
                                            {{ Form::text('bilirubin', 'NEGATIVE', ['class' => ( 'form-control '. ( $errors->has('bilirubin') ? ' is-invalid' : '' )), 'id' => 'bilirubin']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('bilirubin') ? $errors->first('bilirubin') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="blood">Blood:</label>
                                            {{ Form::text('blood', 'NEGATIVE', ['class' => ( 'form-control '. ( $errors->has('blood') ? ' is-invalid' : '' )), 'id' => 'blood']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('blood') ? $errors->first('blood') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="nitrite">Nitrite:</label>
                                            {{ Form::text('nitrite', 'NEGATIVE', ['class' => ( 'form-control '. ( $errors->has('nitrite') ? ' is-invalid' : '' )), 'id' => 'nitrite']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('nitrite') ? $errors->first('nitrite') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="wbc_pus_cells">WBCs/Pus Cells:</label>
                                            {{ Form::text('wbc_pus_cells', NULL, ['class' => ( 'form-control '. ( $errors->has('wbc_pus_cells') ? ' is-invalid' : '' )), 'id' => 'wbc_pus_cells']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('wbc_pus_cells') ? $errors->first('wbc_pus_cells') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="RBC">RBCs:</label>
                                            {{ Form::text('RBC', NULL, ['class' => ( 'form-control '. ( $errors->has('RBC') ? ' is-invalid' : '' )), 'id' => 'RBC']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('RBC') ? $errors->first('RBC') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="epithelial_cells">Epithelial
                                                Cells:</label>
                                            {{ Form::text('epithelial_cells', NULL, ['class' => ( 'form-control '. ( $errors->has('epithelial_cells') ? ' is-invalid' : '' )), 'id' => 'epithelial_cells']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('epithelial_cells') ? $errors->first('epithelial_cells') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="casts">Casts:</label>
                                            {{ Form::text('casts', NULL, ['class' => ( 'form-control '. ( $errors->has('casts') ? ' is-invalid' : '' )), 'id' => 'casts']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('casts') ? $errors->first('casts') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="bacteria">Bacteria:</label>
                                            {{ Form::text('bacteria', NULL, ['class' => ( 'form-control '. ( $errors->has('bacteria') ? ' is-invalid' : '' )), 'id' => 'bacteria']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('bacteria') ? $errors->first('bacteria') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="calcium_oxalate">Calcium
                                                Oxalate:</label>
                                            {{ Form::text('calcium_oxalate', NULL, ['class' => ( 'form-control '. ( $errors->has('calcium_oxalate') ? ' is-invalid' : '' )), 'id' => 'calcium_oxalate']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('calcium_oxalate') ? $errors->first('calcium_oxalate') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="amorphous_urates">Amorphous
                                                Urates:</label>
                                            {{ Form::text('amorphous_urates', NULL, ['class' => ( 'form-control '. ( $errors->has('amorphous_urates') ? ' is-invalid' : '' )), 'id' => 'amorphous_urates']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('amorphous_urates') ? $errors->first('amorphous_urates') : '' }}
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
