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
                    <h6 class="card-title">Redemptions Table</h6>
                </div>
          
           
            </div>
            <div class="table-responsive">
                <table id="userTable" class="table">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Reward</th>
                    <th>Points</th>
                    
                    
                    <!-- <th>Action</th> -->
                    
                    </tr>
                </thead>
                <tbody>
                    @foreach($redemptions as $reward)
                    <tr>
                        <td>{{$reward->id}}</td>
                        <td>{{$reward->customer->name}} </td>
                        <td>{{$reward->reward->name}}</a></td>
                        <td>{{$reward->redeemed_points}}</td>
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
            "order": [[ 0, "desc" ]],
        });
    });
</script>
@endpush
@endsection