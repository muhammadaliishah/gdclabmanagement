<html lang="en">
<head>
    <title>Print BILIRUBIN BIO CHEMISTRY DIAGNOSTIC TESTS</title>
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
            <h6>Investigation: <u>S.Bili Total, Direct, Indirect</u></h6>
        </div>

    </div>

    <hr style="border: 1px solid silver;">

    <div class="row text-center">
        <h5><b><u>BIO - CHEMISTRY DIAGNOSTIC TESTS</u></b></h5>
    </div>

    <div class="row mt-3">
        <h5 style="font-size: 16px;"><b>BILIRUBIN (DIRECT & IN-DIRECT)</b></h5>
    </div>

    <div class="container">
        <table class="table table-bordered " style="border-bottom: 1px solid gray; border-top: 1px solid gray;">
            <thead>
            <tr>
                <td class=""><b>Test</b></td>
                <td class="text-center"><b>Result</b></td>
                <td class="text-center"><b></b></td>
                <td class=""><b>Normal Range</b></td>
            </tr>

            </thead>

            <tbody>

            @if(!empty($model->total_bilirubin))
                <tr>

                    <td style="width: 220px;"><b>
                            Total Bilirubin</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->total_bilirubin ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>mg/dl</b>
                    </td>

                    <td style="width: 300px;"><b>
                            Adults: 0.1 - 12 <br>
                            Children: 0.2 - 1.0 <br>
                            <u>Neonates: </u><br><br>
                            Upto 24 Hours: < 8.8 <br>
                            2nd Day: 1.3 - 11.3 <br>
                            3rd Day: 0.7 - 12.7 <br>
                            4th - 6th Day: 0.1 - 12.6 <br>
                            10 Days Old: 12.0 <br>
                        </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->bilirubin_direct))
                <tr>

                    <td style="width: 220px;"><b>
                            Bilirubin - Direct</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->bilirubin_direct ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>mg/dl</b>
                    </td>

                    <td style="width: 300px;">
                        <b>< 0.25</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->bilirubin_inDirect))
                <tr>

                    <td style="width: 220px;"><b>
                            Bilirubin - Indirect</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->bilirubin_inDirect ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b>mg/dl</b>
                    </td>

                    <td style="width: 300px;">
                        <b>Adults: 0.1 - 0.75 <br>
                            For 10 Days Old: < 11.75
                        </b>
                    </td>

                </tr>
            @endif

            </tbody>
        </table>

        <h6 class="text-center" style="font-size: 13px;">
            <b>All of the above tests are performed on Semi-Automation Biochemistry Analyzer Micro-lab 300.</b></h6>


        <h6 class="mt-5" style="font-size: 14px; float: right">
            <b><u>LAB INCHARGE</u></b></h6>


    </div>
</div>

<script>
    window.print();
</script>
</body>



</html>




