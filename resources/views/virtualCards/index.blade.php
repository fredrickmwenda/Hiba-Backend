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
                <div class="col-lg-6">
                    <h6 class="card-title">Virtual Cards Table</h6>
                </div>
                <div class="col-lg-6">
                    <div class="add-new-btn d-flex justify-content-end">
                        <!-- <a href="{{ route('user.create') }}" class="btn btn-primary float-right"><i data-feather="plus" class="icon-lg mb-1"></i> Add New User</a> -->
                    </div>
                </div>
           
            </div>
            <div class="table-responsive">
                <table id="userTable" class="table">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Card Number</th>
                    <th>Phone NUmber</th>
                    <th>Points</th>
                    <!-- <th>Action</th> -->
                    
                    </tr>
                </thead>
                <tbody>
                    @foreach($virtualCards as $virtualCard)
                    <tr>
                        <td>{{$virtualCard->id}}</td>
                        <td>{{$virtualCard->customer->name}} </td>
                        <td>{{$virtualCard->card_number}} </td>
                        <td><a href="tel:{{$virtualCard->customer->phone}}">{{$virtualCard->customer->phone}}</a></td>
                       
                        <td>{{$virtualCard->points}}</td>

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
            "order": [[ 0, "desc" ]],
        });
    });
</script>
@endpush
@endsection