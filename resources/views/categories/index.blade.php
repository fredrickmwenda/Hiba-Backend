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
                    <h6 class="card-title">Categories Table</h6>
                </div>
                <div class="col-lg-6">
                    @can('Create Category')
                    <div class="add-new-btn d-flex justify-content-end">
                        <a href="{{ route('category.create') }}" class="btn btn-primary float-right"><i data-feather="plus" class="icon-lg mb-1"></i> Add New Category</a>
                    </div>
                    @endcan
                </div>
           
            </div>
            <div class="table-responsive">
                <table id="categoryTable" class="table">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th>Name</th>
                        <th>Description</th>                  
                        <th>Action</th>                 
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>

                        <td> 
                        <?php
                                $description = $category->description;
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
                                    @can('Edit Category')
                                    <a class="dropdown-item  btn-icon" href="{{route('category.edit', $category->id) }}"><i data-feather="edit"></i> Edit</a>
                                    @endcan
                                    @can('View Category')
                                    <a class="dropdown-item btn-icon" href="{{route('category.show', $category->id) }}"><i data-feather="eye"></i> View</a>
                                    @endcan
                                    @can('Delete Category')
                                    <a class="dropdown-item btn-icon" href="{{route('category.delete', $category->id) }}"> <i data-feather="delete"></i> Delete</a>
                                    @endcan
                                </div>
                            </div>
                            <!-- <div class="d-flex">
                                <a class="px-2" href="{{ route('category.edit', $category->id) }}">
                                    <i data-feather="edit"></i> Edit
                                </a>
                                <a class="px-2" href="{{ route('category.show', $category->id) }}">
                                    <i data-feather="eye"></i> View
                                </a>
                                <a class="px-2" href="{{ route('category.delete', $category->id) }}">
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
        $('#categoryTable').DataTable({
            responsive: true,
            "order": [[ 0, "desc" ]],
        });
    });
</script>
@endpush
@endsection