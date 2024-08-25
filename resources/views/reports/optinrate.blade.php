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
                        <h6 class="card-title">Sambaza Table</h6>
                    </div>

                    <div class="col-lg-8">
                        <form method="get" action="{{ route('reports.optinrate') }}" class="d-flex flex-row justify-content-between">
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
                                <div class="form-group row mr-3">
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
                                        <a href="{{ route('reports.optinrate') }}" class="btn btn-danger ml-2"><i class="fas fa-sync-alt"></i>Clear</a>
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
                                <th>Program Points</th>
                                <th> Date</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($opt_in_rates as $optinrate)
                            <tr>
                                <td>{{$optinrate->id}}</td>
                                <td>{{$optinrate->customer->name}} </td>
                                <td>{{$optinrate->Program->name}}</a></td>
                                <td>{{$optinrate->earned_points}}</td>
                                <td>{{$optinrate->created_at}}</td>

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