@extends('layouts.layout')

@section('content')

    <main id="main" class="main">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">

                            <div class="col-11">
                                <h5 class="card-title">Doctors Details</h5>
                            </div>

                            <div class="col-1">
                                <a class="btn btn-primary"
                                   href="{{route('doctors.create')}}"> New
                                    <span class="bi bi-plus-circle"></span>
                                </a>
                            </div>

                        </div>

                        <div class="table-responsive mt-2">
                            <table id="datatable" class="table app-table-hover mb-0 text-left">
                                <thead>
                                <tr>
                                    <th class="cell">S#</th>
                                    <th class="cell">Name</th>
                                    <th class="cell">Father Name</th>
                                    <th class="cell">Cnic No</th>
                                    <th class="cell">Cell No</th>
                                    <th class="cell">Email Address</th>
                                    <th class="cell">Specialist</th>
                                    <th class="cell">Address</th>
                                    <th class="cell"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($models as $model)
                                    <tr>
                                        <td class="cell text-center"><b>{{$loop->iteration}}</b></td>
                                        <td class="cell">{{$model->name ?? 'NA'}}</td>
                                        <td class="cell">{{$model->father_name ?? 'NA'}}</td>
                                        <td class="cell">{{$model->cnic_number ?? ''}}</td>
                                        <td class="cell">{{$model->cell_number ?? ''}}</td>
                                        <td class="cell">{{$model->email ?? 'NA'}}</td>
                                        <td class="cell">{{$model->specialist ?? 'NA'}}</td>
                                        <td class="cell">{{$model->address ?? ''}}</td>
                                        <td class="cell"><a class="btn btn-primary"
                                                            href="{{route('doctors.show', $model->id)}}">Edit</a>
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
