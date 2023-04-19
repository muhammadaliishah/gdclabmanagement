<html lang="en">
<head>
    <title>Print Bio Chemistry Diagnostic Test</title>
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <style>
        table, p, li, h5 {
            font-family: 'Times New Roman', sans-serif;
        }

        table {
            border-collapse: collapse;
        }

        p, ol li, td {
            font-size: 14px;
        }

        .right-head {
            text-align: right;
        }

        #total-payable {
            text-align: right;
        }

        .names {

            text-transform: capitalize;

        }

        .text-center {
            text-align: center;
        }

        .justify {
            text-align: justify;
        }

        @media print {
            .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
                float: left;
            }

            .col-sm-12 {
                width: 100%;
            }

            .col-sm-11 {
                width: 91.66666667%;
            }

            .col-sm-10 {
                width: 83.33333333%;
            }

            .col-sm-9 {
                width: 75%;
            }

            .col-sm-8 {
                width: 66.66666667%;
            }

            .col-sm-7 {
                width: 58.33333333%;
            }

            .col-sm-6 {
                width: 50%;
            }

            .col-sm-5 {
                width: 41.66666667%;
            }

            .col-sm-4 {
                width: 33.33333333%;
            }

            .col-sm-3 {
                width: 25%;
            }

            .col-sm-2 {
                width: 16.66666667%;
            }

            .col-sm-1 {
                width: 8.33333333%;
            }
        }

        h6 {
            font-size: 16px;
            font-family: "" Century Gothic " b";
        }
    </style>
</head>

<body>
<div class="row" style="width: 750px">
    <div class="container">

        <table class="table table-bordered">
            <tr>
                <td class="text-center"><img width="80px" src="{{ asset('assets/img/logo_health.png') }}" alt=""></td>

                <td width="550px" class="text-center">
                    <h5 style="text-align: center;"><b> GILGIT DIAGNOSTIC CENTRE <br/>
                            Hospital Road Near Old Polo Ground Gilgit (15100) </b> <br>
                                   Phone No: 058115-53370
                    </h5>

                </td>

            </tr>
        </table>

    </div>
    <br><br>

    <div class="row">

        <div class="col-3">
            <h6>ID NO: <u>{{$model->entry_number ?? ''}}</u></h6>
        </div>

        <div class="col-4">
            <h6>Patient Name: <u>{{$model->patient->name ?? ''}}</u></h6>
        </div>

        <div class="col-3">
            <h6>Age: <u>{{$model->patient->age_display ?? ''}}</u></h6>
        </div>

        <div class="col-2">
            <h6>Sex: <u>{{$model->patient->gender ?? ''}}</u></h6>
        </div>
    </div>

    <div class="row mt-3 mb-3">
        <div class="col-4">
            <h6>Ref By Dr: <u>{{$model->doctor->name ?? ''}}</u></h6>
        </div>

        <div class="col-3">
            <h6>Date: <u>{{Carbon\Carbon::parse($model->date ?? '')->format('d-M-Y') }}</u></h6>
        </div>

        <div class="col-5">
            <h6>Investigation: <u>RBS</u></h6>
        </div>

    </div>

    <hr style="border: 1px solid silver;">

    <div class="row text-center">
        <h5><b><u>BIO-CHEMISTRY DIAGNOSTIC TESTS</u></b></h5>
    </div>


    <div class="container mt-2">
        <table class="table table-bordered " style="border-bottom: 1px solid gray; border-top: 1px solid gray;">
            <thead>
            <tr>
                <td class=""><b>Test</b></td>
                <td class="text-center"><b>Result</b></td>
                <td class="text-center"><b>Unit</b></td>
                <td class=""><b>Normal Range</b></td>
            </tr>

            </thead>

            <tbody>

            @if(!empty($model->bilirubin_total) || !empty($model->ALT_SGPT) || !empty($model->AST_SGOT) || !empty($model->alkaline_phosphatase	) )
                <tr>
                    <td colspan="3"><h6 style="font-size: 16px;">
                            <b>LIVER FUNCTION TESTS (LFTs)</b></h6>
                    </td>
                </tr>
            @endif

            @if(!empty($model->bilirubin_total))
                <tr>

                    <td style="width: 220px;"><b>
                            Bilirubin Total</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->bilirubin_total ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>mg/dl</b>
                    </td>

                    <td style="width: 300px;">
                        <b>0.1 - 1.2 (Adults)</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->ALT_SGPT))
                <tr>

                    <td style="width: 220px;"><b>
                            ALT/SGPT</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->ALT_SGPT ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>lU/l</b>
                    </td>

                    <td style="width: 300px;">
                        <b>10 - 45 Male</b><br>
                        <b>10 - 40 Female</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->AST_SGOT))
                <tr>

                    <td style="width: 220px;"><b>
                            AST/SGOT</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->AST_SGOT ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>lU/l</b>
                    </td>

                    <td style="width: 300px;">
                        <b>8 - 37 Male</b><br>
                        <b>8 - 33 Female</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->alkaline_phosphatase))
                <tr>

                    <td style="width: 220px;"><b>
                            Alkaline Phosphatase (ALP)</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->alkaline_phosphatase ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>lU/l</b>
                    </td>

                    <td style="width: 300px;">
                        <b>53 - 350 (Adult) < 645 (Upto 15yrs)</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->blood_urea) || !empty($model->creatinine) || !empty($model->uric_acid) )
                <tr>
                    <td colspan="3"><h6 style="font-size: 16px;">
                            <b>RENTAL FUNCTION TESTS (RFTs)</b></h6>
                    </td>
                </tr>
            @endif

            @if(!empty($model->blood_urea))
                <tr>

                    <td style="width: 220px;"><b>
                            Blood Urea</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->blood_urea ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>mg/dl</b>
                    </td>

                    <td style="width: 300px;">
                        <b>10 - 45 </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->creatinine))
                <tr>

                    <td style="width: 220px;"><b>
                            Creatinine</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->creatinine ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>mg/dl</b>
                    </td>

                    <td style="width: 300px;">
                        <b> 0.5 - 1.4</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->uric_acid))
                <tr>

                    <td style="width: 220px;"><b>
                            Uric Acid</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->uric_acid ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>mg/dl</b>
                    </td>

                    <td style="width: 300px;">
                        <b>(Male) 3.4 - 7.0 (Females) 2.4 - 6.2 </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->cholesterol) || !empty($model->triglycerides) || !empty($model->HDL_cholesterol) || !empty($model->LDL_cholesterol) || !empty($model->LDH) )
                <tr>
                    <td colspan="3"><h6 style="font-size: 16px;">
                            <b>LIPID PROFILE</b></h6>
                    </td>
                </tr>
            @endif

            @if(!empty($model->cholesterol))
                <tr>

                    <td style="width: 220px;"><b>
                            Cholesterol</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->cholesterol ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>mg/dl</b>
                    </td>

                    <td style="width: 300px;">
                        <b>< 200 (Desirable) 150-240 (Borderline) <br>
                            200-240 (High Risk) </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->triglycerides))
                <tr>

                    <td style="width: 220px;"><b>
                            Triglycerides</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->triglycerides ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>mg/dl</b>
                    </td>

                    <td style="width: 300px;">
                        <b> < 150 (Desirable) 150-200 (Borderline) <br>
                            > 200 (High Risk) </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->HDL_cholesterol))
                <tr>

                    <td style="width: 220px;"><b>
                            HDL Cholesterol</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->HDL_cholesterol ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>mg/dl</b>
                    </td>

                    <td style="width: 300px;">
                        <b>< 45 (Desirable) 35-40 (Borderline) <br>
                            > 45 (High Risk) </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->LDL_cholesterol))
                <tr>

                    <td style="width: 220px;"><b>
                            LDL Cholesterol</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->LDL_cholesterol ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>mg/dl</b>
                    </td>

                    <td style="width: 300px;">
                        <b>< 130 (Desirable) 130-190 (Borderline) <br>
                            > 190 (High Risk) </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->LDH))
                <tr>

                    <td style="width: 220px;"><b>
                            LDH</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->LDH ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>u/l</b>
                    </td>

                    <td style="width: 300px;">
                        <b> 225 - 450 u/l </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->sodium) || !empty($model->potassium) || !empty($model->chloride) || !empty($model->BUN) || !empty($model->calcium) || !empty($model->glucose_fasting) || !empty($model->glucose_random) || !empty($model->serum_albumin) || !empty($model->GCT) || !empty($model->OGTT) || !empty($model->first_hour) || !empty($model->second_hour) )
                <tr>
                    <td colspan="3"><h6 style="font-size: 16px;">
                            <b>SERUM ELECTROLYTES & OTHER TESTS</b></h6>
                    </td>
                </tr>
            @endif

            @if(!empty($model->sodium))
                <tr>

                    <td style="width: 220px;"><b>
                            Sodium (Na)</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->sodium ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>mmol/L</b>
                    </td>

                    <td style="width: 300px;">
                        <b>135 - 155 </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->potassium))
                <tr>

                    <td style="width: 220px;"><b>
                            Potassium (K)</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->potassium ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>mmol/L</b>
                    </td>

                    <td style="width: 300px;">
                        <b>4.1 - 5.6 </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->chloride))
                <tr>

                    <td style="width: 220px;"><b>
                            Chloride (Cl)</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->chloride ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>mmol/L</b>
                    </td>

                    <td style="width: 300px;">
                        <b>90 - 110</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->BUN))
                <tr>

                    <td style="width: 220px;"><b>
                            BUN</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->BUN ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>lU/l</b>
                    </td>

                    <td style="width: 300px;">
                        <b>6 - 24 mg/dl</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->calcium))
                <tr>

                    <td style="width: 220px;"><b>
                            Calcium</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->calcium ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>mg/dl</b>
                    </td>

                    <td style="width: 300px;">
                        <b> 8.6 - 10.3 (Adults) 7.0 - 12.0 (Children) </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->glucose_fasting))
                <tr>

                    <td style="width: 220px;"><b>
                            Glucose (Fasting)</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->glucose_fasting ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>mg/dl</b>
                    </td>

                    <td style="width: 300px;">
                        <b>60 - 110 </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->glucose_random))
                <tr>

                    <td style="width: 220px;"><b>
                            Glucose (Random)</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->glucose_random ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>mg/dl</b>
                    </td>

                    <td style="width: 300px;">
                        <b> 70 - 180</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->serum_albumin))
                <tr>

                    <td style="width: 220px;"><b>
                            Serum Albumin</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->serum_albumin ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>g/dl</b>
                    </td>

                    <td style="width: 300px;">
                        <b>3.5 - 5.2 </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->GCT))
                <tr>

                    <td style="width: 220px;"><b>
                            GCT</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->GCT ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>mg/dl</b>
                    </td>

                    <td style="width: 300px;">
                        <b>< 140 mg/dl </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->OGTT))
                <tr>

                    <td style="width: 220px;"><b>
                            OGTT ( F )</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->OGTT ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>mg/dl</b>
                    </td>

                    <td style="width: 300px;">
                        <b> 60 - 110 mg/dl </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->first_hour))
                <tr>

                    <td style="width: 220px;"><b>
                            1st Hour</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->first_hour ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>mg/dl</b>
                    </td>

                    <td style="width: 300px;">
                        <b>< 200 mg/dl </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->second_hour))
                <tr>

                    <td style="width: 220px;"><b>
                            2nd Hour</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->second_hour ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>mg/dl</b>
                    </td>

                    <td style="width: 300px;">
                        <b> < 140 mg/dl </b>
                    </td>

                </tr>
            @endif


            </tbody>
        </table>

        <h6 class="text-center" style="font-size: 13px;">
            <b>All of the above tests are performed on Semi-Automated Biochemistry Analyzer Micro Lab 300</b></h6>


        <h6 class="mt-3" style="font-size: 14px; float: right">
            <b><u>LAB INCHARGE</u></b></h6>


    </div>
</div>

<script>
    window.print();
</script>
<div class=" pt-5" >


    <p>This is a Computer Generated Report their for signatures are not required.</p>
    <footer class="text-center">
        <hr>
       <div style="margin-left: 75%">

        <h6 >Iqtdar Hussain</h6>
        <p>Lab Technologist</p>
        <p>Bs(MLT)</p>


    </div>


        <p style="font-size: 12px;"><b>NOT VALID FOR COURT</b></p>

    </footer>

    </div>
</body>


</html>




