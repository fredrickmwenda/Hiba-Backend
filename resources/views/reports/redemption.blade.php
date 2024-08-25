@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}">
@endpush
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-lg-4">
                        <h6 class="card-title">Redemptions Report</h6>
                    </div>

                    <div class="col-lg-8">
                        <form method="get" action="{{ route('reports.redemption') }}" class="d-flex flex-row justify-content-between">
                            @csrf
                            <div class="col-lg-4">
                                <div class="form-group row">
                                    <div class="">
                                        {{ __('From:') }}
                                    </div>
                                    <div class="col-lg-10">
                                        <input type="datetime-local" class="form-control" name="from_date">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group row">
                                    <div class="">
                                        {{ __('To:') }}
                                    </div>
                                    <div class="col-lg-10 input-group">
                                        <input type="datetime-local" class="form-control" name="to_date">
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="form-group row">

                                    <div class="input-group mt-3">
                                        <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i>Filter</button>
                                        <a href="{{ route('reports.redemption') }}" class="btn btn-danger ml-2"><i class="fas fa-sync-alt"></i>Clear</a>
                                    </div>

                                </div>
                            </div>

                        </form>
                    </div>


                </div>
                <div class="table-responsive">
                    <table id="userTable" class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Customer</th>
                                <th>Program</th>
                                <th>Redeemed Points</th>
                                <th> Date </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($redemptions as $reward)
                            <tr>
                                <td>{{$reward->id}}</td>
                                <td>{{$reward->customer->name}} </td>
                                <td>{{$reward->program->name}}</a></td>
                                <td>{{$reward->redeemed_points}}</td>
                                <td>{{$reward->created_at}}</td>
                                <!-- <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item  btn-icon" href="#"><i data-feather="edit"></i> Edit</a>
                                    <a class="dropdown-item btn-icon" href="#"><i data-feather="eye"></i> View</a>
                                    <a class="dropdown-item btn-icon" href="#"> <i data-feather="delete"></i> Delete</a>
                                </div>
                            </div>
                        </td> -->
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{ asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#userTable').DataTable({
            responsive: true,
            "order": [
                [0, "desc"]
            ],
        });
    });
</script>
@endpush
@endsection