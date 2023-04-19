<html lang="en">
<head>
    <title>Print Blood Crossmatch & Issue Slip</title>
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

        <div class="col-6">
            <h6>Patient Name: <u>{{$model->patient->name ?? ''}}</u></h6>
        </div>

        <div class="col-3">
            <h6>Age: <u>{{$model->patient->age_display ?? ''}}</u></h6>
        </div>

        <div class="col-3">
            <h6>Sex: <u>{{$model->patient->gender ?? ''}}</u></h6>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-6">
            <h6>Blood Group of Patient: <u>{{$model->patient->blood_group ?? ''}}</u></h6>
        </div>

        <div class="col-6">
            <h6>Blood Group of Donor/Bag: <u>{{$model->blood_group_donor ?? ''}}</u></h6>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-6">
            <h6>Blood Donor Name: <u>{{$model->donor_name ?? ''}}</u></h6>
        </div>

        <div class="col-6">
            <h6>Screened for: <u>HBsAg, HCV, HIV</u></h6>
        </div>
    </div>

    <div class="row mt-2 mb-3">
        <div class="col-6">
            <h6>Screening Result: <u>NON REACTIVE</u></h6>
        </div>

        <div class="col-6">
            <h6>Ward: <u>L ROOM</u></h6>
        </div>

    </div>

    <hr style="border: 1px solid silver;">

    <div class="row text-center">
        <h5><b><u>BLOOD CROSSMATCH & ISSUE SLIP</u></b></h5>
    </div>


    <div class="container mt-3">

        <p style="font-size: 18px;">This Blood is <b>issued after standard crossmatch</b>, which is found
            <b>{{$model->result ?? 'NA'}}</b>.
        </p><br>

        <h6><b>Blood bank entry No: {{$model->entry_number ?? 'NA'}}</b></h6>

        <div class="row">
            <div class="col-6">
                <h6><b>Crossmatch & Issued by: <u>{{$model->issued_by_incharge_name ?? 'NA'}}</u></b></h6>
            </div>

            <div class="col-3">
                <h6><b>Date: <u>{{Carbon\Carbon::parse($model->date ?? '')->format('d-m-Y') ?? 'NA'}}</u></b></h6>
            </div>

            <div class="col-3">
                <h6><b>Time: <u>{{Carbon\Carbon::parse($model->time ?? 'NA')->format('g:i A') ?? 'NA'}}</u></b></h6>
            </div>
        </div>


        <hr class="mt-5" style="border: 1px solid black;">

        <h6 style="font-size: 15px;"><b>INSTRUCTIONS:</b></h6>
        <p style="font-size: 13px;">
            <b> BEFORE STARTING TRANSFUSION OF THIS UNIT VERIFY PATIENT IDENTITY, BLOOD GROUP, RH, AND BLOOD BANK
                NUMBERS AS
                PER INFORMATION GIVEN ON TRANSFUSION OR ISSUE SLIP.</b>
        </p>


        <h6 class="mt-5" style="font-size: 14px; float: right">
            <b><u>SIGNATURE</u></b></h6>


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




