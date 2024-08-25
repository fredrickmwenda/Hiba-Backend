@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12 stretch-card">
		<div class="card">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
			<div class="card-body">
				<h6 class="card-title">Create a User</h6>
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Enter name" name="name">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control" placeholder="Enter phone" name="phone">
                            </div>
                        </div>
                        

                    </div>
                    <div class="row">


                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control" placeholder="Enter email" name="email">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Role</label>
                                <select name="role_id" class="form-control" id="role_id">
                                    <option value=""> Select Role </option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}"> {{$role->name}} </option>
                                    @endforeach
                                </select>
                                <!-- <input type="password" class="form-control" autocomplete="off" placeholder="Password" name="password"> -->
                            </div>
                        </div>
                    </div>
           
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="userPassword">Password</label>
                                <div class="input-group password passwordcheck" id="passwordCheck">
                                    <input type="password" class="form-control" autocomplete="off" placeholder="Password" name="password" id="userPassword">
                                    <span class="input-group-text input-group-addon">
                                        <i class="btn-icon-prepend" id="passwordToggle" data-feather="eye-off" onclick="togglePasswordVisibility()" style="cursor:pointer"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="password_confirmation"> Confirm Password</label>
                                <div class="input-group password confirmpasswordCheck" id="confirmpasswordCheck">
                                    <input type="password" id="password_confirmation" class="form-control" autocomplete="off" placeholder="Password" name="password_confirmation">
                                    <span class="input-group-text input-group-addon">
                                        <i class="btn-icon-prepend" id="passwordConfirmToggle" data-feather="eye-off" onclick="toggleConfirmPasswordVisibility()"  style="cursor:pointer"></i>            
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">


                    
                        <div class="col-sm-6">
                            <div class="mb-3" id="company_set" style="display: none;">
                                <label for="company" class="form-label">Company</label>
                                <select class="form-control" id="company_id" name="company">
                                    @php
                                        $companies = \App\Models\Company::get();
                                    @endphp
                                    @foreach($companies as $company)
                                    <option value="{{$company->id}}">{{$company->name}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Please Select Company
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary submit">Submit form</button>
                </form>
									
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
    $(document).ready(function(){
        $('#role_id').change(function(){
            console.log()
            var role = $(this).val();
            console.log(role);
            if(role == 2 || role == 3){
                $('#company_set').show();
         
            }
        });
    });

    // $(document).ready(function() {
    $('#company_id').select2({
      // theme: 'bootstrap4'
      placeholder: 'Select Company',
      allowClear: true,
      width: '100%',
    });

    feather.replace();
//   });
</script>
@endpush