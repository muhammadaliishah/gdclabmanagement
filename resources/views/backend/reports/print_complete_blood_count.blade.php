<html lang="en">
<head>
    <title>Print Complete Blood Count Test</title>
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
            <h6>Investigation: <u>CBC, BTCT</u></h6>
        </div>

    </div>

    <hr style="border: 1px solid silver;">

    <div class="row text-center">
        <h5><b><u>COMPLETE BLOOD COUNT (CBC) & ESR AUTOMATION</u></b></h5>
    </div>


    <div class="container mt-2">
        <table class="table table-bordered " style="border-bottom: 1px solid gray; border-top: 1px solid gray;">
            <thead>
            <tr>
                <td class=""><b>Test</b></td>
                <td class="text-center"><b>Result</b></td>
                <td class="text-center"></td>
                <td class=""><b>Normal Range</b></td>
            </tr>

            </thead>

            <tbody>

            @if(!empty($model->wbc_count))
                <tr>

                    <td style="width: 220px;"><b>
                            WBC Count</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->wbc_count ?? 'NA'}}</b>
                    </td>

                    <td class="text-center"></td>

                    <td style="width: 300px;"><b>
                            Adults: 4,000 - 11,000 <br>
                            Children: < 2 Years : 6,200 - 17,000 <br>
                            Newborns: 9,000 - 30,000 </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->rbc_count))
                <tr>

                    <td style="width: 220px;"><b>
                            RBC Count</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->rbc_count ?? 'NA'}}</b>
                    </td>

                    <td class="text-center"></td>

                    <td style="width: 300px;">
                        <b>4.5 - 6.0</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->hemoglobin))
                <tr>

                    <td style="width: 220px;"><b>
                            Hemoglobin</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->hemoglobin ?? 'NA'}}</b>
                    </td>

                    <td class="text-center"></td>

                    <td style="width: 300px;"><b>
                            Men: 13 - 18 <br>
                            Women: 12 - 16 (Pregnancy > 11) <br>
                            Children: 11 - 16 <br>
                            Infants: 10 - 15 <br>
                            Newborns: 14 - 22 </b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->hematocrit))
                <tr>

                    <td style="width: 220px;"><b>
                            Hematocrit</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->hematocrit ?? 'NA'}}</b>
                    </td>

                    <td class="text-center"></td>

                    <td style="width: 300px;">
                        <b>35 - 47</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->MCV))
                <tr>

                    <td style="width: 220px;"><b>
                            MCV</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->MCV ?? 'NA'}}</b>
                    </td>

                    <td class="text-center"></td>

                    <td style="width: 300px;">
                        <b>79 - 98</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->MCH))
                <tr>

                    <td style="width: 220px;"><b>
                            MCH</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->MCH ?? 'NA'}}</b>
                    </td>

                    <td class="text-center"></td>

                    <td style="width: 300px;">
                        <b>26 - 34</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->MCHC))
                <tr>

                    <td style="width: 220px;"><b>
                            MCHC</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->MCHC ?? 'NA'}}</b>
                    </td>

                    <td class="text-center"></td>

                    <td style="width: 300px;">
                        <b>32 - 36</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->platelets_count))
                <tr>

                    <td style="width: 220px;"><b>
                            Platelets Count</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->platelets_count ?? 'NA'}}</b>
                    </td>

                    <td class="text-center"></td>

                    <td style="width: 300px;">
                        <b>150,000 - 450,000</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->neutrophils) || !empty($model->lymphocytes) || !empty($model->monocytes) || !empty($model->eosinophils) || !empty($model->basophils) || !empty($model->bands) || !empty($model->blood_group) || !empty($model->ESR) || !empty($model->BT) || !empty($model->CT) )
                <tr>
                    <td colspan="4"><h6 style="font-size: 16px;">
                            <b>Differential Leucocyte Count (DLD) Adult Ranges</b></h6>
                    </td>
                </tr>
            @endif

            @if(!empty($model->neutrophils))
                <tr>

                    <td style="width: 220px;"><b>
                            Neutrophils</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->neutrophils ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b> % </b>
                    </td>

                    <td style="width: 300px;">
                        <b>40 - 75</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->lymphocytes))
                <tr>

                    <td style="width: 220px;"><b>
                            Lymphocytes</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->lymphocytes ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b> % </b>
                    </td>

                    <td style="width: 300px;">
                        <b>15 - 45</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->monocytes))
                <tr>

                    <td style="width: 220px;"><b>
                            Monocytes</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->monocytes ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b> % </b>
                    </td>

                    <td style="width: 300px;">
                        <b>2 - 12</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->eosinophils))
                <tr>

                    <td style="width: 220px;"><b>
                            Eosinophils</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->eosinophils ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b> % </b>
                    </td>

                    <td style="width: 300px;">
                        <b>2 - 6</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->basophils))
                <tr>

                    <td style="width: 220px;"><b>
                            Basophils</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->basophils ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b> % </b>
                    </td>

                    <td style="width: 300px;">
                        <b>0 - 1</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->bands))
                <tr>

                    <td style="width: 220px;"><b>
                            Bands</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->bands ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b> % </b>
                    </td>

                    <td style="width: 300px;">
                        <b>0 - 5</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->blood_group))
                <tr>

                    <td style="width: 220px;"><b>
                            Blood Group</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->blood_group ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b> RH. Factor </b>
                    </td>

                    <td style="width: 300px;">
                        <b>--</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->ESR))
                <tr>

                    <td style="width: 220px;"><b>
                            ESR</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->ESR ?? 'NA'}}</b>
                    </td>

                    <td class="text-center">
                        <b> mm/1st hour </b>
                    </td>

                    <td style="width: 300px;"><b>
                            Childs: up to 10, <br>
                            Men: up to 15, <br>
                            Women: up to 20, <br></b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->BT))
                <tr>

                    <td style="width: 220px;"><b>
                            BT</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->BT ?? 'NA'}}</b>
                    </td>

                    <td class="text-center"></td>

                    <td style="width: 300px;">
                        <b>Normal Range: 02 to 06 Minutes</b>
                    </td>

                </tr>
            @endif

            @if(!empty($model->CT))
                <tr>

                    <td style="width: 220px;"><b>
                            CT"</b>
                    </td>

                    <td style="width: 100px;" class="text-center">
                        <b> {{$model->CT ?? 'NA'}}</b>
                    </td>

                    <td class="text-center"></td>

                    <td style="width: 300px;">
                        <b>Normal Range: 08 to 14 Minutes</b>
                    </td>

                </tr>
            @endif

            </tbody>
        </table>

        <h6 class="text-center" style="font-size: 13px;">
            <b>Containing (18) parameters on fully automated Hematology analyzer. (Syntax)</b></h6>


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




