<html lang="en">
<head>
    <title>Print Clinical Pathology Test</title>
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

        <div class="col-4">
            <h6>Date: <u>{{Carbon\Carbon::parse($model->date ?? '')->format('d-M-Y') }}</u></h6>
        </div>

        <div class="col-4">
            <h6>Investigation: <u>STOOL R/E</u></h6>
        </div>

    </div>

    <hr style="border: 1px solid silver;">

    <div class="row text-center">
        <h5><b><u>CLINICAL PATHOLOGY</u></b></h5>
    </div>

    <div class="row mt-3">
        <h5 style="font-size: 16px;"><b>STOOL ROUTINE EXAMINATION</b></h5>
    </div>

    <div class="container">
        <table class="table table-bordered " style="border-bottom: 1px solid gray; border-top: 1px solid gray;">
            <thead>
            <tr>
                <td class=""><b>Test</b></td>
                <td class="text-center"><b>Result</b></td>
                <td class=""><b>Normal Range</b></td>
            </tr>

            </thead>

            <tbody>

            @if(!empty($model->color) || !empty($model->consistency) || !empty($model->blood) || !empty($model->mucus) )
                <tr>
                    <td colspan="3"><h6 style="font-size: 16px;">
                            <b>PHYSICAL EXAMINATION</b></h6>
                    </td>
                </tr>
            @endif

            @if(!empty($model->color))
                <tr>

                    <td style="width: 220px;"><b>
                            Color</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->color ?? 'NA'}}</b>
                    </td>

                    <td style="width: 300px;">
                        <b>Brownish</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->consistency))
                <tr>

                    <td style="width: 220px;"><b>
                            Consistency</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->consistency ?? 'NA'}}</b>
                    </td>

                    <td style="width: 300px;">
                        <b> Formed </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->blood))
                <tr>

                    <td style="width: 220px;"><b>
                            Blood</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->blood ?? 'NA'}}</b>
                    </td>

                    <td style="width: 300px;">
                        <b>NILL</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->mucus))
                <tr>

                    <td style="width: 220px;"><b>
                            Mucus</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->mucus ?? 'NA'}}</b>
                    </td>

                    <td style="width: 300px;">
                        <b>NILL</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->WBC_PUS_cells) || !empty($model->RBC) || !empty($model->ova_parasites) || !empty($model->cyst) || !empty($model->fatty_globules) )
                <tr>
                    <td colspan="3"><h6 style="font-size: 16px;">
                            <b>MICROSCOPIC EXAMINATION</b></h6>
                    </td>
                </tr>
            @endif

            @if(!empty($model->WBC_PUS_cells))
                <tr>

                    <td style="width: 220px;"><b>
                            WBCs/PUS CELLs</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->WBC_PUS_cells ?? 'NA'}}</b>
                    </td>

                    <td style="width: 300px;">
                        <b>< 5</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->RBC))
                <tr>

                    <td style="width: 220px;"><b>
                            RBCs</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->RBC ?? 'NA'}}</b>
                    </td>

                    <td style="width: 300px;">
                        <b> NILL </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->ova_parasites))
                <tr>

                    <td style="width: 220px;"><b>
                            Ova & Parasites</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->ova_parasites ?? 'NA'}}</b>
                    </td>

                    <td style="width: 300px;">
                        <b>--</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->cyst))
                <tr>

                    <td style="width: 220px;"><b>
                            Cyst</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->cyst ?? 'NA'}}</b>
                    </td>

                    <td style="width: 300px;">
                        <b></b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->fatty_globules))
                <tr>

                    <td style="width: 220px;"><b>
                            Fatty Globules</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->fatty_globules ?? 'NA'}}</b>
                    </td>

                    <td style="width: 300px;">
                        <b>NILL</b>
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




