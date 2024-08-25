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
                    <h6 class="card-title">Rewards Table</h6>
                </div>
                <div class="col-lg-6">
                    @can('Create Reward')
                    <div class="add-new-btn d-flex justify-content-end">
                        <a href="{{ route('reward.create') }}" class="btn btn-primary float-right"><i data-feather="plus" class="icon-lg mb-1"></i> Add New Reward</a>
                    </div>
                    @endcan
                </div>
           
            </div>
            <div class="table-responsive">
                <table id="userTable" class="table">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Program</th>
                    <th>Points Required</th>
                    <th>Action</th>
                    
                    </tr>
                </thead>
                <tbody>
                    @foreach($rewards as $reward)
                    <tr>
                        <td>{{$reward->id}}</td>
                        <td>
                            <img src="{{ asset('assets/images/rewards/'.$reward->image) }}" alt="reward-image" class="avatar-xs rounded-circle me-2" height="10px" width="10px">
                            {{$reward->name}} 
                        </td>
                        <td>                            
                            <?php
                                $description = $reward->description;
                                $words = str_word_count($description);
                                $limitedDescription = Str::limit($description, $limit = 30, $end = '...');
                            ?>
                            {{ $limitedDescription }}
                        </td>
                        <td>
                            {{$reward->program->name}}
                        </td>
                        <td>{{$reward->points_required}}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @can('Edit Reward')
                                    <a class="dropdown-item  btn-icon" href="{{route('reward.edit', $reward->id) }}"><i data-feather="edit"></i> Edit</a>
                                    @endcan
                                    @can('View Reward')
                                    <a class="dropdown-item btn-icon" href="{{route('reward.show', $reward->id) }}"><i data-feather="eye"></i> View</a>
                                    @endcan
                                    @can('Delete Reward')
                                    <a class="dropdown-item btn-icon" href="{{route('reward.delete', $reward->id) }}"> <i data-feather="delete"></i> Delete</a>
                                    @endcan
                                </div>
                            </div>
              
                        </td>
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