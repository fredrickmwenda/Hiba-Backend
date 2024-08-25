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
                    <h6 class="card-title">Ads Table</h6>
                </div>
                <div class="col-lg-6">
                    @can('Create Ad')
                    <div class="add-new-btn d-flex justify-content-end">
                        <a href="{{ route('ad.create') }}" class="btn btn-primary float-right"><i class="link-icon" data-feather="plus"></i> Add New Ad</a>
                    </div>
                    @endcan
                </div>
           
            </div>
            <div class="table-responsive">
                <table id="companiesTable" class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th> Company </th>
                        <th> Duration </th>
                        <th> Status </th>
                        <th> Created At </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Ads as $ad)
                    <tr>
                        <td> {{$ad->id}} </td>
                        <td>                  
                           <img src="{{ asset('assets/images/ads/'.$ad->image) }}" alt="company-logo" class="avatar-xs rounded-circle me-2" height="10px" width="10px">
                            {{$ad->adname}}
                        <td>
                            <?php
                                $description = $ad->description;
                                $words = str_word_count($description);
                                $limitedDescription = Str::limit($description, $limit = 30, $end = '...');
                            ?>
                            {{ $limitedDescription }}
                        </td>
                        <td>
                            @if($ad->company !== null )
                            {{$ad->company->name}} 
                            @endif                 
                        </td>

                        <td> 
                            {{$ad->duration}} Days                 
                        </td>

                        <td>  
                            @if($ad->status == 'active')
                               <span class="badge bg-primary">Active</span>
                            @elseif($ad->status == 'inactive')
                                <span class="badge bg-info">Inactive</span>
                            @elseif($ad->status == 'expired')
                                <span class="badge bg-warning">Expired</span>
                            @endif                
                        </td>

                        <td> 
                            @php
                            $date = date('D M Y', strtotime($ad->created_at));
                            @endphp
                            {{$date}}                  
                        </td>

                        <td>
                        <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @can('Edit Ad')
                                    <a class="dropdown-item  btn-icon" href="{{route('ad.edit', $ad->id) }}"><i data-feather="edit"></i> Edit</a>
                                    @endcan
                                    @can('View Ad')
                                    <a class="dropdown-item btn-icon" href="{{route('ad.show', $ad->id) }}"><i data-feather="eye"></i> View</a>
                                    @endcan
                                    @can('Delete Ad')
                                    <a class="dropdown-item btn-icon" href="{{route('ad.delete', $ad->id) }}"> <i data-feather="delete"></i> Delete</a>
                                    @endcan
                                </div>
                            </div>
                           <!-- <div class="d-flex">
                                <a class="px-2" href="{{ route('ad.edit', $ad->id) }}">
                                    <i data-feather="edit"></i> Edit
                                </a>
                                <a class="px-2" href="{{ route('ad.show', $ad->id) }}">
                                    <i data-feather="eye"></i> View
                                </a>
                                <a class="px-2" href="{{ route('ad.delete', $ad->id) }}">
                                    <i data-feather="delete"></i> Delete
                                </a>
                            </div> -->
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
        $('#companiesTable').DataTable({
            responsive: true,
            "order": [[ 0, "desc" ]],
        });
    });
</script>
@endpush
@endsection