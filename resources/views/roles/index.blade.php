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
                        <h6 class="card-title">Roles</h6>
                    </div>
                    <div class="col-lg-6">
                        @can('Create Role')
                        <div class="add-new-btn d-flex justify-content-end">
                            <a href="{{ route('role.create') }}" class="btn btn-primary float-right"><i class="link-icon" data-feather="plus"></i>Add New Role</a>
                        </div>
                        @endcan
                    </div>
            
                </div>
                <div class="table-responsive custom-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="am-select" width="10%">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input  form-check-input checkAll" id="selectAll">
                                        <label class="custom-control-label checkAll" for="selectAll"></label>
                                    </div>
                                </th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Permissions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $page)
                            <tr>
                                <th>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="ids[]" class="custom-control-input form-check-input" id="customCheck{{ $page->id }}" value="{{ $page->id }}">
                                        <label class="custom-control-label" for="customCheck{{ $page->id }}"></label>
                                    </div>
                                </th>
                                <td>
                                    {{ $page->name }}
                                    <div class="hover">
                                        @can('Edit Role')
                                        <a href="{{ route('role.edit',$page->id) }}">{{ __('Edit') }}</a>
                                        @endcan
                                    </div>
                                </td>
                                <td>
                                    @foreach ($page->permissions as $perm)
                                    <span class="mr-2">
                                        {{ $perm->name }},
                                    </span>
                                    @endforeach
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

@endsection