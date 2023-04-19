@extends('layouts.layout')

@section('content')

    <main id="main" class="main">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Serological Rapid Diagnostic Test Details</h5>

                        <div class="card">
                            <div class="card-body">

                                {{ Form::model($model->id, array('route' => ['rdt.update', $model->id], 'target' => '_blank',   'class' => 'form', 'id' => 'edit-tests-form', 'files' => true)) }}
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

                                <h5 class="card-title">Serological Rapid Diagnostic Test Results</h5>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="hepatitisB_surface_antigen">Hepatitis
                                                B Surface Antigen:</label>
                                            {{ Form::text('hepatitisB_surface_antigen', $model->hepatitisB_surface_antigen, ['class' => ( 'form-control '. ( $errors->has('hepatitisB_surface_antigen') ? ' is-invalid' : '' )), 'id' => 'hepatitisB_surface_antigen']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('hepatitisB_surface_antigen') ? $errors->first('hepatitisB_surface_antigen') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="hepatitisC_virus_antibody">Hepatitis C
                                                Virus Antibody:</label>
                                            {{ Form::text('hepatitisC_virus_antibody', $model->hepatitisC_virus_antibody, ['class' => ( 'form-control '. ( $errors->has('hepatitisC_virus_antibody') ? ' is-invalid' : '' )), 'id' => 'hepatitisC_virus_antibody']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('hepatitisC_virus_antibody') ? $errors->first('hepatitisC_virus_antibody') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="human_immunodeficiency_virus">Human
                                                Immunodeficiency Virus (HIV):</label>
                                            {{ Form::text('human_immunodeficiency_virus', $model->human_immunodeficiency_virus, ['class' => ( 'form-control '. ( $errors->has('human_immunodeficiency_virus') ? ' is-invalid' : '' )), 'id' => 'human_immunodeficiency_virus']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('human_immunodeficiency_virus') ? $errors->first('human_immunodeficiency_virus') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="helicobacter_pylori_antibody">Helicobacter
                                                Pylori Antibody (H.pylori):</label>
                                            {{ Form::text('helicobacter_pylori_antibody', $model->helicobacter_pylori_antibody, ['class' => ( 'form-control '. ( $errors->has('helicobacter_pylori_antibody') ? ' is-invalid' : '' )), 'id' => 'helicobacter_pylori_antibody']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('helicobacter_pylori_antibody') ? $errors->first('helicobacter_pylori_antibody') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="rheumatoid_arthritis">Rheumatoid Arthritis
                                                (RA) Factor:</label>
                                            {{ Form::text('rheumatoid_arthritis', $model->rheumatoid_arthritis, ['class' => ( 'form-control '. ( $errors->has('rheumatoid_arthritis') ? ' is-invalid' : '' )), 'id' => 'rheumatoid_arthritis']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('rheumatoid_arthritis') ? $errors->first('rheumatoid_arthritis') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="anti_streptolysin_o_tier">Anti
                                                Streptolysin O Tier (ASOT):</label>
                                            {{ Form::text('anti_streptolysin_o_tier', $model->anti_streptolysin_o_tier, ['class' => ( 'form-control '. ( $errors->has('anti_streptolysin_o_tier') ? ' is-invalid' : '' )), 'id' => 'anti_streptolysin_o_tier']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('anti_streptolysin_o_tier') ? $errors->first('anti_streptolysin_o_tier') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="c_reactive_protein">C-Reactive Protein
                                                (CRP):</label>
                                            {{ Form::text('c_reactive_protein', $model->c_reactive_protein, ['class' => ( 'form-control '. ( $errors->has('c_reactive_protein') ? ' is-invalid' : '' )), 'id' => 'c_reactive_protein']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('c_reactive_protein') ? $errors->first('c_reactive_protein') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="prostate_specific_antigen">Prostate
                                                Specific Antigen (PSA):</label>
                                            {{ Form::text('prostate_specific_antigen', $model->prostate_specific_antigen, ['class' => ( 'form-control '. ( $errors->has('prostate_specific_antigen') ? ' is-invalid' : '' )), 'id' => 'prostate_specific_antigen']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('prostate_specific_antigen') ? $errors->first('prostate_specific_antigen') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="montox_test">Montox Test:</label>
                                            {{ Form::text('montox_test', $model->montox_test, ['class' => ( 'form-control '. ( $errors->has('montox_test') ? ' is-invalid' : '' )), 'id' => 'montox_test']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('montox_test') ? $errors->first('montox_test') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="heptitisA_virus_antibody">Heptitis A Virus
                                                Antibody:</label>
                                            {{ Form::text('heptitisA_virus_antibody', $model->hepatitisC_virus_antibody, ['class' => ( 'form-control '. ( $errors->has('heptitisA_virus_antibody') ? ' is-invalid' : '' )), 'id' => 'heptitisA_virus_antibody']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('heptitisA_virus_antibody') ? $errors->first('heptitisA_virus_antibody') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="malaria_rapid_test">Malaria Rapid Test
                                                (ICT - MP):</label>
                                            {{ Form::text('malaria_rapid_test', $model->malaria_rapid_test, ['class' => ( 'form-control '. ( $errors->has('malaria_rapid_test') ? ' is-invalid' : '' )), 'id' => 'malaria_rapid_test']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('malaria_rapid_test') ? $errors->first('malaria_rapid_test') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="tuberculosis_rapid_test">Tuberculosis
                                                Rapid Test (ICT - TB):</label>
                                            {{ Form::text('tuberculosis_rapid_test', $model->tuberculosis_rapid_test, ['class' => ( 'form-control '. ( $errors->has('tuberculosis_rapid_test') ? ' is-invalid' : '' )), 'id' => 'tuberculosis_rapid_test']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('tuberculosis_rapid_test') ? $errors->first('tuberculosis_rapid_test') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="toxoplasma_gondi_antibodies">Toxoplasma
                                                Gondii Antibodies:</label>
                                            {{ Form::text('toxoplasma_gondi_antibodies', $model->toxoplasma_gondi_antibodies, ['class' => ( 'form-control '. ( $errors->has('toxoplasma_gondi_antibodies') ? ' is-invalid' : '' )), 'id' => 'toxoplasma_gondi_antibodies']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('toxoplasma_gondi_antibodies') ? $errors->first('toxoplasma_gondi_antibodies') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="typhoid_rapid_test">Typhoid Rapid Test
                                                (Typhidot):</label>
                                            {{ Form::text('typhoid_rapid_test', $model->typhoid_rapid_test, ['class' => ( 'form-control '. ( $errors->has('typhoid_rapid_test') ? ' is-invalid' : '' )), 'id' => 'typhoid_rapid_test']) }}
                                            <div class="invalid-feedback">
                                                {{ $errors->has('typhoid_rapid_test') ? $errors->first('typhoid_rapid_test') : '' }}
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
