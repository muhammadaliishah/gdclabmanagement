@extends('layouts.layout')

@section('content')

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">

                <div class="row">
                    <!-- Active Students Card-->
                    <div class="col-sm-3">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Your Requests</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="ri  ri-user-follow-line"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{0}}</h6>
                                        <span class="text-success small pt-1 fw-bold">12%</span> <span
                                            class="text-muted small pt-2 ps-1">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Active Students Card -->

                    <!-- Fee Collection Card -->
                    <div class="col-sm-3">
                        <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title"> Submitted Requests</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{0}}</h6>
                                        <span class="text-success small pt-1 fw-bold">8%</span> <span
                                            class="text-muted small pt-2 ps-1">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Fee Collection Card -->

                    <!-- Defaulters Card -->
                    <div class="col-sm-3">
                        <div class="card info-card defaulter-card">

                            <div class="card-body">
                                <h5 class="card-title">Rejected Requests</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cash"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{0}}</h6>
                                        <span class="text-success small pt-1 fw-bold">8%</span> <span
                                            class="text-muted small pt-2 ps-1">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Defaulters Card -->

                    <!-- Active Courses Card -->
                    <div class="col-sm-3">

                        <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title">Admin Approval</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-book"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{0}}</h6>
                                        <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                            class="text-muted small pt-2 ps-1">decrease</span>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Active Courses Card -->

                </div>

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Reports -->
                        <div class="col-sm-8">
                            <div class="card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Division Wise Report <span>/This Year</span></h5>

                                    <!-- Line Chart -->
                                    {{--                                    {!! $chart->container() !!}--}}

                                </div>

                            </div>
                        </div><!-- End Reports -->

                        <div class="col-sm-4">
                            <div class="card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Item Wise Report <span>/This Year</span></h5>

                                    <!-- Line Chart -->
                                    {{--                                    {!! $item_chart->container() !!}--}}

                                </div>

                            </div>
                        </div>

                    </div>
                </div><!-- End Left side columns -->
            </div>
        </section>

    </main><!-- End #main -->

    {{--    <script src="{{ $chart->cdn() }}"></script>--}}
    {{--    <script src="{{ $item_chart->cdn() }}"></script>--}}
    {{--    {!! $chart->script() !!}--}}
    {{--    {!! $item_chart->script() !!}--}}

@endsection
