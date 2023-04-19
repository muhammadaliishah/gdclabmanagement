@extends('layouts.layout')

@section('content')

    <main id="main" class="main">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Bio-Chemistry Diagnostic Test</h5>

                        <div class="card">
                            <div class="card-body">

                                {{ Form::open(array('route' => 'bio-chemistry-diagnostic.store', 'target' => '_blank',  'class' => 'form', 'id' => 'create-tests-form', 'files' => true)) }}

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

                                <h5 class="card-title">Bio-Chemistry Diagnostic Test Results</h5>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="bilirubin_total">Bilirubin
                                                Total:</label>
                                            {{ Form::text('bilirubin_total', NULL, ['class' => ( 'form-control '. ( $errors->has('bilirubin_total') ? ' is-invalid' : '' )), 'id' => 'bilirubin_total']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('bilirubin_total') ? $errors->first('bilirubin_total') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="ALT_SGPT">ALT/SGPT:</label>
                                            {{ Form::text('ALT_SGPT', NULL, ['class' => ( 'form-control '. ( $errors->has('ALT_SGPT') ? ' is-invalid' : '' )), 'id' => 'ALT_SGPT']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('ALT_SGPT') ? $errors->first('ALT_SGPT') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="AST_SPOT">AST/SPOT:</label>
                                            {{ Form::text('AST_SPOT', NULL, ['class' => ( 'form-control '. ( $errors->has('AST_SPOT') ? ' is-invalid' : '' )), 'id' => 'AST_SPOT']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('AST_SPOT') ? $errors->first('AST_SPOT') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="alkaline_phosphatase">Alkaline
                                                Phosphatase
                                                (ALP):</label>
                                            {{ Form::text('alkaline_phosphatase', NULL, ['class' => ( 'form-control '. ( $errors->has('alkaline_phosphatase') ? ' is-invalid' : '' )), 'id' => 'alkaline_phosphatase']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('alkaline_phosphatase') ? $errors->first('alkaline_phosphatase') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="blood_urea">Blood Urea:</label>
                                            {{ Form::text('blood_urea', NULL, ['class' => ( 'form-control '. ( $errors->has('blood_urea') ? ' is-invalid' : '' )), 'id' => 'blood_urea']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('blood_urea') ? $errors->first('blood_urea') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="creatinine">Creatinine:</label>
                                            {{ Form::text('creatinine', NULL, ['class' => ( 'form-control '. ( $errors->has('creatinine') ? ' is-invalid' : '' )), 'id' => 'creatinine']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('creatinine') ? $errors->first('creatinine') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="uric_acid">Uric Acid:</label>
                                            {{ Form::text('uric_acid', NULL, ['class' => ( 'form-control '. ( $errors->has('uric_acid') ? ' is-invalid' : '' )), 'id' => 'uric_acid']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('uric_acid') ? $errors->first('uric_acid') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="cholesterol">Cholesterol:</label>
                                            {{ Form::text('cholesterol', NULL, ['class' => ( 'form-control '. ( $errors->has('cholesterol') ? ' is-invalid' : '' )), 'id' => 'cholesterol']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('cholesterol') ? $errors->first('cholesterol') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label"
                                                   for="triglycerides">Triglycerides:</label>
                                            {{ Form::text('triglycerides', NULL, ['class' => ( 'form-control '. ( $errors->has('triglycerides') ? ' is-invalid' : '' )), 'id' => 'triglycerides']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('triglycerides') ? $errors->first('triglycerides') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="HDL_cholesterol">HDL
                                                Cholesterol:</label>
                                            {{ Form::text('HDL_cholesterol', NULL, ['class' => ( 'form-control '. ( $errors->has('HDL_cholesterol') ? ' is-invalid' : '' )), 'id' => 'HDL_cholesterol']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('HDL_cholesterol') ? $errors->first('HDL_cholesterol') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="LDL_cholesterol">LDL
                                                Cholesterol:</label>
                                            {{ Form::text('LDL_cholesterol', NULL, ['class' => ( 'form-control '. ( $errors->has('LDL_cholesterol') ? ' is-invalid' : '' )), 'id' => 'LDL_cholesterol']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('LDL_cholesterol') ? $errors->first('LDL_cholesterol') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="LDH">LDH:</label>
                                            {{ Form::text('LDH', NULL, ['class' => ( 'form-control '. ( $errors->has('LDH') ? ' is-invalid' : '' )), 'id' => 'LDH']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('LDH') ? $errors->first('LDH') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="sodium">Sodium (NA):</label>
                                            {{ Form::text('sodium', NULL, ['class' => ( 'form-control '. ( $errors->has('sodium') ? ' is-invalid' : '' )), 'id' => 'sodium']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('sodium') ? $errors->first('sodium') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="potassium">Potassium (K):</label>
                                            {{ Form::text('potassium', NULL, ['class' => ( 'form-control '. ( $errors->has('potassium') ? ' is-invalid' : '' )), 'id' => 'potassium']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('potassium') ? $errors->first('potassium') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="chloride">Chloride (Cl):</label>
                                            {{ Form::text('chloride', NULL, ['class' => ( 'form-control '. ( $errors->has('chloride') ? ' is-invalid' : '' )), 'id' => 'chloride']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('chloride') ? $errors->first('chloride') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="BUN">BUN:</label>
                                            {{ Form::text('BUN', NULL, ['class' => ( 'form-control '. ( $errors->has('BUN') ? ' is-invalid' : '' )), 'id' => 'BUN']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('BUN') ? $errors->first('BUN') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="calcium">Calcium:</label>
                                            {{ Form::text('calcium', NULL, ['class' => ( 'form-control '. ( $errors->has('calcium') ? ' is-invalid' : '' )), 'id' => 'calcium']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('calcium') ? $errors->first('calcium') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="glucose_fasting">Glucose
                                                (Fasting):</label>
                                            {{ Form::text('glucose_fasting', NULL, ['class' => ( 'form-control '. ( $errors->has('glucose_fasting') ? ' is-invalid' : '' )), 'id' => 'glucose_fasting']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('glucose_fasting') ? $errors->first('glucose_fasting') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="glucose_random">Glucose (Random):</label>
                                            {{ Form::text('glucose_random', NULL, ['class' => ( 'form-control '. ( $errors->has('glucose_random') ? ' is-invalid' : '' )), 'id' => 'glucose_random']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('glucose_random') ? $errors->first('glucose_random') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="serum_albumin">Serum Albumin:</label>
                                            {{ Form::text('serum_albumin', NULL, ['class' => ( 'form-control '. ( $errors->has('serum_albumin') ? ' is-invalid' : '' )), 'id' => 'serum_albumin']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('serum_albumin') ? $errors->first('serum_albumin') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="GCT">GCT:</label>
                                            {{ Form::text('GCT', NULL, ['class' => ( 'form-control '. ( $errors->has('GCT') ? ' is-invalid' : '' )), 'id' => 'GCT']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('GCT') ? $errors->first('GCT') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="OGTT">OGTT (F):</label>
                                            {{ Form::text('OGTT', NULL, ['class' => ( 'form-control '. ( $errors->has('OGTT') ? ' is-invalid' : '' )), 'id' => 'OGTT']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('OGTT') ? $errors->first('OGTT') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="first_hour">1st Hour:</label>
                                            {{ Form::text('first_hour', NULL, ['class' => ( 'form-control '. ( $errors->has('first_hour') ? ' is-invalid' : '' )), 'id' => 'first_hour']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('first_hour') ? $errors->first('first_hour') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="second_hour">2nd Hour:</label>
                                            {{ Form::text('second_hour', NULL, ['class' => ( 'form-control '. ( $errors->has('second_hour') ? ' is-invalid' : '' )), 'id' => 'second_hour']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('second_hour') ? $errors->first('second_hour') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" style="height: 50px;">Save & Print Report</button>
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
