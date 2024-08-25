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
                    <h6 class="card-title">Companies Table</h6>
                </div>
                <div class="col-lg-6">
                    @can('Create Company')
                    <div class="add-new-btn d-flex justify-content-end">
                        <a href="{{ route('company.create') }}" class="btn btn-primary float-right"><i class="link-icon" data-feather="plus"></i> Add New Company</a>
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                    <tr>
                        <td> {{$company->id}} </td>
                        <td>
                        <!-- {{ asset('storage/'.$company->logo) }} -->
                           <img src="{{ asset('assets/images/company/'.$company->logo) }}" alt="company-logo" class="avatar-xs rounded-circle me-2" height="10px" width="10px">
                            {{$company->name}}
                        <td>
                            <?php
                                $description = $company->description;
                                $words = str_word_count($description);
                                $limitedDescription = Str::limit($description, $limit = 30, $end = '...');
                            ?>
                            {{ $limitedDescription }}
                        </td>


                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @can('Edit Company')
                                    <a class="dropdown-item  btn-icon" href="{{route('company.edit', $company->id) }}"><i data-feather="edit"></i> Edit</a>
                                    @endcan
                                    @can('View Company')
                                    <a class="dropdown-item btn-icon" href="{{route('company.show', $company->id) }}"><i data-feather="eye"></i> View</a>
                                    @endcan
                                    @can('Delete Company')
                                    <a class="dropdown-item btn-icon" href="{{route('company.delete', $company->id) }}"> <i data-feather="delete"></i> Delete</a>
                                    @endcan
                                </div>
                            </div>
                           <!-- <div class="d-flex"> -->
                                <!-- @can('Edit Company')
                                <a class="px-2" href="{{ route('company.edit', $company->id) }}">
                                    <i data-feather="edit"></i> Edit
                                </a>
                                @endcan
                                <a class="px-2" href="{{ route('company.show', $company->id) }}">
                                    <i data-feather="eye"></i> View
                                </a>
                                @can('Delete Company')
                                <a class="px-2" href="{{ route('company.delete', $company->id) }}">
                                    <i data-feather="delete"></i> Delete
                                </a>
                                @endcan -->
                            <!-- </div> -->
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