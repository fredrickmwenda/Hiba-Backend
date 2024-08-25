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
                        <h6 class="card-title">Permissions</h6>
                    </div>
                    <div class="col-lg-6">
                        @can('Create Permission')
                        <div class="add-new-btn d-flex justify-content-end">
                            <a href="{{ route('permission.create') }}" class="btn btn-primary float-right"><i class="link-icon" data-feather="plus"></i> Add New Permission</a>
                        </div>
                        @endcan
                    </div>
            
                </div>

                @php
                $i = 1;
                @endphp
                @foreach($permission_groups as $group)
                <div class="row">
                        <div class="col-12">
                            <div class="form-check">			
                                <label class="form-check-label" for="checkPermission" style="font-size: 20px;font-weight: 600;">{{ $group->group_name }}</label>
                            </div>
</div>
                    </div>
                

                    @php
                        $permissions = \App\Models\User::getpermissionsByGroupName($group->group_name);
                        $j = 1;


                    @endphp
                    @foreach($permissions as $permission)
                    <div class="email-list-item">
                        <div class="email-list-actions">
                            <div class="form-check">                 
                                <input type="checkbox" class="form-check-input">
                            </div>
                        </div>
                        <div class="email-list-detail">

                            <span class="">{{ $permission->name }}</span>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @can('Edit Permission')
                                        <a class="dropdown-item btn-icon" href="{{route('permission.edit', $permission->id) }}"><i data-feather="edit"></i> Edit</a>
                                    @endcan
                                    @can('Delete Permission')
                                        <a class="dropdown-item btn-icon" href="{{route('permission.delete', $permission->id) }}"><i data-feather="delete"></i> Delete</a>
                                    @endcan
                                </div>
                            </div>

                            <!-- @can('Edit Permission')
                            <a class="date  btn-icon" href="{{route('permission.edit', $permission->id) }}"><i data-feather="edit"></i> Edit</a>
                            @endcan
                            @can('Delete Permission')
                            <a class="date  btn-icon" href="{{route('permission.destroy', $permission->id) }}"><i data-feather="edit"></i> Edit</a>
                            @endcan -->


                        </div>
                    </div>
                    @php 
                    $j++
                    @endphp
                    @endforeach
                
                @php 
                 $i++;
                @endphp
                @endforeach

            </div>
        </div>
    </div>
</div>
        
@endsection