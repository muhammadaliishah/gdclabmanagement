<html lang="en">
<head>
    <title>Print Serological Rapid Diagnostic Tests (RDTs)</title>
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
            <h6>Investigation: <u>HBsAg, HCV</u></h6>
        </div>

    </div>

    <hr style="border: 1px solid silver;">

    <div class="row text-center">
        <h5><b><u>SEROLOGICAL RAPID DIAGNOSTIC TESTS (RDTs)</u></b></h5>
    </div>


    <div class="container mt-2">
        <table class="table table-bordered " style="border-bottom: 1px solid gray; border-top: 1px solid gray;">
            <thead>
            <tr>
                <td class=""><b>Test</b></td>
                <td class="text-center"><b>Result</b></td>
                <td class="text-center"><b>Normal Range</b></td>
            </tr>

            </thead>

            <tbody>

            @if(!empty($model->hepatitisB_surface_antigen))
                <tr>

                    <td style="width: 300px;"><b>
                            Hepatitis B Surface Antigen (HBsAg)</b>
                    </td>

                    <td style="width: 120px;" class="text-center">
                        <b> {{$model->hepatitisB_surface_antigen ?? 'NA'}}</b>
                    </td>

                    <td style="width: 250px;" class="text-center">
                        <b>Negative</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->hepatitisC_virus_antibody))
                <tr>

                    <td style="width: 300px;"><b>
                            Hepatitis C Virus Antibody (HCV Ab)</b>
                    </td>

                    <td style="width: 120px;" class="text-center">
                        <b> {{$model->hepatitisC_virus_antibody ?? 'NA'}}</b>
                    </td>

                    <td style="width: 250px;" class="text-center">
                        <b>Negative </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->human_immunodeficiency_virus))
                <tr>

                    <td style="width: 300px;"><b>
                            Human Immunodeficiency Virus (HIV) Antibodies</b>
                    </td>

                    <td style="width: 120px;" class="text-center">
                        <b> {{$model->human_immunodeficiency_virus ?? 'NA'}}</b>
                    </td>

                    <td style="width: 250px;" class="text-center">
                        <b>Negative</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->helicobacter_pylori_antibody))
                <tr>

                    <td style="width: 300px;"><b>
                            Helicobacter Pylori Antibody (H. pylori)</b>
                    </td>

                    <td style="width: 120px;" class="text-center">
                        <b> {{$model->helicobacter_pylori_antibody ?? 'NA'}}</b>
                    </td>

                    <td style="width: 250px;" class="text-center">
                        <b>Negative</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->rheumatoid_arthritis))
                <tr>

                    <td style="width: 300px;"><b>
                            Rheumatoid Arthritis (RA) Factor</b>
                    </td>

                    <td style="width: 120px;" class="text-center">
                        <b> {{$model->rheumatoid_arthritis ?? 'NA'}}</b>
                    </td>

                    <td style="width: 250px;" class="text-center">
                        <b>< 8 IU/ml</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->anti_streptolysin_o_tier))
                <tr>

                    <td style="width: 300px;"><b>
                            Anti Streptolysin O Tier (ASOT)</b>
                    </td>

                    <td style="width: 120px;" class="text-center">
                        <b> {{$model->anti_streptolysin_o_tier ?? 'NA'}}</b>
                    </td>

                    <td style="width: 250px;" class="text-center">
                        <b> < 200 IU/ml </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->c_reactive_protein))
                <tr>

                    <td style="width: 300px;"><b>
                            C Reactive Protein (CRP)</b>
                    </td>

                    <td style="width: 120px;" class="text-center">
                        <b> {{$model->c_reactive_protein ?? 'NA'}}</b>
                    </td>

                    <td style="width: 250px;" class="text-center">
                        <b> < 6 mg/L</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->prostate_specific_antigen))
                <tr>

                    <td style="width: 300px;"><b>
                            Prostate Specific Antigen (PSA)</b>
                    </td>

                    <td style="width: 120px;" class="text-center">
                        <b> {{$model->prostate_specific_antigen ?? 'NA'}}</b>
                    </td>

                    <td style="width: 250px;" class="text-center">
                        <b>Negative</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->montox_test))
                <tr>

                    <td style="width: 300px;"><b>
                            MONTOX TEST</b>
                    </td>

                    <td style="width: 120px;" class="text-center">
                        <b> {{$model->montox_test ?? 'NA'}}</b>
                    </td>

                    <td style="width: 250px;" class="text-center">
                        <b></b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->heptitisA_virus_antibody))
                <tr>

                    <td style="width: 300px;"><b>
                            Hepatitis A Virus Antibody</b>
                    </td>

                    <td style="width: 120px;" class="text-center">
                        <b> {{$model->heptitisA_virus_antibody ?? 'NA'}}</b>
                    </td>

                    <td style="width: 250px;" class="text-center">
                        <b>Negative</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->malaria_rapid_test))
                <tr>

                    <td style="width: 300px;"><b>
                            Malaria Rapid Test (ICT - MP)</b>
                    </td>

                    <td style="width: 120px;" class="text-center">
                        <b> {{$model->malaria_rapid_test ?? 'NA'}}</b>
                    </td>

                    <td style="width: 250px;" class="text-center">
                        <b>Negative</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->tuberculosis_rapid_test))
                <tr>

                    <td style="width: 300px;"><b>
                            Tuberculosis Rapid Test</b>
                    </td>

                    <td style="width: 120px;" class="text-center">
                        <b> {{$model->tuberculosis_rapid_test ?? 'NA'}}</b>
                    </td>

                    <td style="width: 250px;" class="text-center">
                        <b> Negative </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->toxoplasma_gondi_antibodies))
                <tr>

                    <td style="width: 300px;"><b>
                            Toxoplasma gondii Antibodies</b>
                    </td>

                    <td style="width: 120px;" class="text-center">
                        <b> {{$model->toxoplasma_gondi_antibodies ?? 'NA'}}</b>
                    </td>

                    <td style="width: 250px;" class="text-center">
                        <b>Negative</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->typhoid_rapid_test))
                <tr>

                    <td style="width: 300px;"><b>
                            Typhoid Rapid Test (Typhidot)</b>
                    </td>

                    <td style="width: 120px;" class="text-center">
                        <b> {{$model->typhoid_rapid_test ?? 'NA'}}</b>
                    </td>

                    <td style="width: 250px;" class="text-center">
                        <b>Negative</b>
                    </td>

                </tr>
            @endif


            </tbody>
        </table>

        <h6 class="text-center" style="font-size: 13px;">
            <b>Complete Range of Quality Controlled Specialized and Routine Analysis</b></h6>


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




