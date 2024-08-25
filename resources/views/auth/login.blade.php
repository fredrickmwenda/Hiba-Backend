@extends('layouts.auth')

@section('content')

<div class="row w-100 mx-0 auth-page">
	<div class="col-md-8 col-xl-6 mx-auto">
		<div class="card">
			<div class="row">
                <div class="col-md-4 pe-md-0">
                    <div class="auth-side-wrapper"></div>
                </div>
                <div class="col-md-8 ps-md-0">
                    <div class="auth-form-wrapper px-4 py-5">
                        <a href="#" class="noble-ui-logo d-block mb-2">Hiiba</a>
                        <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
                        @if(Session::has('error'))
                            <span class="invalid-feedback">
                                <strong>{{session('error')}}</strong>
                            </span>
                        @endif
                        <form  method="POST" action="{{ route('login') }}" >
                            @csrf
                            <div class="mb-3">
                                <label for="userEmail" class="form-label" >Email address</label>
                                <input type="email" class="form-control" id="userEmail" name="email" placeholder="Email">
                                @if($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{$errors->first('email')}}</strong>
                                    </span>
                                @endif
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="userPassword" class="form-label">Password</label>
                                <div class="input-group password confirmpasswordCheck" id="confirmpasswordCheck">
                                    <input type="password" class="form-control" id="userPassword" name="password" autocomplete="current-password" placeholder="Password">
                                    <span class="input-group-text input-group-addon">
                                        <!-- <i class="btn-icon-prepend" data-feather="eye-off"></i> -->
                                        <i class="btn-icon-prepend" id="passwordToggle" data-feather="eye-off" onclick="togglePasswordVisibility()"  style="cursor:pointer"></i>
                                    </span>
                                </div>
                                
                                @if($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{$errors->first('password')}}</strong>
                                    </span>
                                @endif

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="remember" id="authCheck" value="1" {{ old('remember') ? 'checked' : '' }}>      
                                <label class="form-check-label" for="authCheck">Remember me</label>
                            </div>
                            <div>
                            <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login</button> 
                            </div>
                            <a href="{{route('register')}}" class="d-block mt-3 text-muted mb-3">Not a user? <u>Sign up</u></a>
                            <p class="mb-2"> Login using Socials </p>

                            <a href="{{ route('login.twitter') }}" type="button" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                                <i class="btn-icon-prepend" data-feather="twitter"></i>
                                
                            </a>
                          
                            <a href="{{ route('login.facebook') }}" type="button" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                                <i class="btn-icon-prepend" data-feather="facebook"></i>
                                
                            </a>

                            <a href="{{ route('login.google') }}" type="button" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                                <i class="mdi mdi-google"></i>
                                
                            </a>

                        </form>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>


@endsection
@push('js')
<script>
    feather.replace();
</script>

@endpush
