@extends('layouts.layout')

@section('content')

    <main id="main" class="main">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">

                            <div class="col-11">
                                <h5 class="card-title">Urine Test Details</h5>
                            </div>

                            <div class="col-1">
                                <a class="btn btn-primary"
                                   href="{{route('urine-tests.create')}}"> New
                                    <span class="bi bi-plus-circle"></span>
                                </a>
                            </div>

                        </div>

                        <div class="table-responsive mt-2">
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                <tr>
                                    <th class="cell text-center">S#</th>
                                    <th class="cell">Entry #</th>
                                    <th class="cell">Report Date</th>
                                    <th class="cell">Patient Name</th>
                                    <th class="cell">Age</th>
                                    <th class="cell">Sex</th>
                                    <th class="cell">Ref By Dr</th>
                                    <th class="cell"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($models as $model)
                                    <tr>
                                        <td class="cell text-center"><b>{{$loop->iteration}}</b></td>
                                        <td class="cell"><b>{{$model->entry_number ?? 'NA'}}</b></td>
                                        <td class="cell">{{Carbon\Carbon::parse($model->date ?? '')->format('d-M-Y')}}</td>
                                        <td class="cell">{{$model->patient->name ?? ''}}</td>
                                        <td class="cell">{{$model->patient->age . ' ' .$model->patient->age_type ?? ''}}</td>
                                        <td class="cell">{{$model->patient->gender ?? 'NA'}}</td>
                                        <td class="cell">{{$model->doctor->name ?? ''}}</td>

                                        <td class="cell"><a class="btn btn-primary"
                                                            href="{{route('urine-tests.edit', $model->id)}}">Edit</a>
                                        </td>
                                    </tr>

                                @empty
                                    <tr>
                                        <td colspan="6">No Record Found..</td>
                                    </tr>
                                @endforelse

                                </tbody>
                            </table>
                            <br>

                            {!! $models->links() !!}

                        </div><!--//table-responsive-->
                    </div>
                </div><!--//app-card-body-->
            </div>
        </div>
    </main>

@endsection
