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
                    <h6 class="card-title">Programs Table</h6>
                </div>
                <div class="col-lg-6">
                    @can('Create Progran')
                    <div class="add-new-btn d-flex justify-content-end">
                        <a href="{{ route('program.create') }}" class="btn btn-primary float-right"><i class="link-icon" data-feather="plus"></i> Add New Program</a>
                    </div>
                    @endcan
                </div>
           
            </div>
            <div class="table-responsive">
                <table id="programsTable" class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th> Company </th>
                        <th> Entry Points </th>
                        <th> Usage('usage per points') </th>
                        <th> Usage Points </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companyPrograms as $program)
                    <tr>
                        <td> {{$program->id}} </td>
                        <td>
                            {{$program->name}}
                        <td>
                            <?php
                                $description = $program->description;
                                $words = str_word_count($description);
                                $limitedDescription =  Str::limit($description, $limit = 30, $end = '...');
                            ?>
                            {{ $limitedDescription }}
                        </td>
                        <td> {{$program->company->name}} </td>
                        <td> {{$program->category->name}} </td>
                        <td> {{$program->entry_points}} </td>
                        <td> {{$program->usage}} </td>
                        <td> {{$program->usage_points}} </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @can('Edit Program')
                                    <a class="dropdown-item  btn-icon" href="{{route('program.edit', $program->id) }}"><i data-feather="edit"></i> Edit</a>
                                    @endcan
                                    @can('View Program')
                                    <a class="dropdown-item btn-icon" href="{{route('program.show', $program->id) }}"><i data-feather="eye"></i> View</a>
                                    @endcan
                                    @can('Delete Program')
                                    <a class="dropdown-item btn-icon" href="{{route('program.delete', $program->id) }}"> <i data-feather="delete"></i> Delete</a>
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
        $('#programsTable').DataTable({
            responsive: true,
            "order": [[ 0, "desc" ]],
        });
    });
</script>
@endpush
@endsection