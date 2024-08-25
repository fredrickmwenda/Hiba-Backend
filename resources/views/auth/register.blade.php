@extends('layouts.auth')

@section('content')
<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pe-md-0">
                  <div class="auth-side-wrapper">

                  </div>
                </div>
                <div class="col-md-8 ps-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo d-block mb-2">Hiiba</a>
                    <h5 class="text-muted fw-normal mb-4">Create a free account.</h5>
                    <form  method="POST" action="{{ route('register') }}">
                       @csrf
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Username</label>
                            <input type="text" class="form-control"  autocomplete="Username" placeholder="Username" name="name">
                            @if($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{$errors->first('name')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="userEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="userEmail" placeholder="Email" name="email">
                            @if($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{$errors->first('email')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="userPhone" class="form-label">Phone</label>
                            <input type="number" class="form-control" id="userPhone" placeholder="Phone" name="phone">
                            @if($errors->has('phone'))
                                <span class="invalid-feedback">
                                    <strong>{{$errors->first('phone')}}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="mb-3"  >
                            <label for="companies" class="form-label">Company</label>
                            <select class="form-control select2" id="company_id" name="company" required>
                                <option >Select Company</option>
                                @php
                                    $companies = \App\Models\Company::get();
                                @endphp
                                @foreach($companies as $company)
                                <option value="{{$company->id}}">{{$company->name}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('company'))
                                <span class="invalid-feedback">
                                    <strong>{{$errors->first('company')}}</strong>
                                </span>
                            @endif
                            <div class="invalid-feedback">
                                Please Select Company
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="userPassword" class="form-label">Password</label>
                            <div class="input-group password confirmpasswordCheck" id="confirmpasswordCheck">
                                <input type="password" class="form-control" id="userPassword" autocomplete="current-password" placeholder="Password" name="password">
                                <span class="input-group-text input-group-addon">
                                    <i class="btn-icon-prepend" id="passwordToggle" data-feather="eye-off" onclick="togglePasswordVisibility()" style="cursor:pointer"></i>
                                    <!-- <i class="btn-icon-prepend" data-feather="eye-off"></i> -->
                                </span>
                            </div>
                            
                            @if($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{$errors->first('password')}}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label"> Confirm password</label>
                            <div class="input-group password confirmpasswordCheck" id="confirmpasswordCheck">
                               <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password"> 
                                <span class="input-group-text input-group-addon">
                                    <i class="btn-icon-prepend" id="passwordConfirmToggle" data-feather="eye-off" onclick="toggleConfirmPasswordVisibility()"  style="cursor:pointer"></i>
                                    <!-- <i class="btn-icon-prepend" data-feather="eye-off"></i> -->
                                </span>
                            </div>
                            
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="remember" id="authCheck" value="1" {{ old('remember') ? 'checked' : '' }}>      
                            <!-- <input type="checkbox" class="form-check-input" id="authCheck"> -->
                            <label class="form-check-label" for="authCheck">
                            Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary text-white me-2 mb-2 mb-md-0">Sign up</button>

                        <a href="{{route('login')}}" class="d-block mt-3 text-muted mb-3">Already a user? <u>Sign in</u></a>
                        <button type="button" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                            <i class="btn-icon-prepend" data-feather="twitter"></i>
                            Sign Up with Twitter
                        </button>
                          
                        <button type="button" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                            <i class="btn-icon-prepend" data-feather="facebook"></i>
                            Sign Up with Facebook
                        </button>

                        <button type="button" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                            <i class="mdi mdi-google"></i>
                            SignUp with Google
                        </button>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
						</div>
					</div>

@endsection
@push('js')

<script>
  $(document).ready(function() {
    $('#company_id').select2({
      // theme: 'bootstrap4'
      placeholder: 'Select Company',
      allowClear: true,
      width: '100%',
    });
  });

    feather.replace();



</script>
@endpush
