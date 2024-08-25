<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Hiba Loyalty Points Backend">
	<meta name="author" content="NobleUI">
	<!-- <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web"> -->

	<title>Hiba</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->
	<!-- core:css -->
	<link rel="stylesheet" href="{{asset('assets/vendors/core/core.css')}}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
	<!-- endinject -->
	<link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">
	<link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet" type="text/css" />

  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{asset('assets/css/demo1/style.css')}}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
  <style>
	.toast-error {
    background-color: #f44336; /* Red color */
    color: #000000; /* White text */
   }
	</style>
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">
            @yield('content')
			</div>
		</div>
	</div>

	<!-- core:js -->
	<script src="{{asset('assets/vendors/core/core.js')}}"></script>
	<script src="{{asset('assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('assets/js/template.js')}}"></script>
	<script src="{{asset('assets/js/select2.min.js')}}"></script>
	<script src="{{ asset('assets/js/toastr.min.js') }}"></script>
	@if (isset($errors) && $errors->any())
    @foreach ($errors->all() as $error)
        <script>
            $(document).ready(function(){
                toastr.error('{{ $error }}', 'Error', {
                    closeButton: true,
                });
            });
        </script>
    @endforeach
  @endif

  @if (session('error'))
    <script>
        $(document).ready(function() {
			toastr.error('{{ session('error') }}', 'Error!', {
                closeButton: true,
                // progressBar: true,
                showMethod: 'slideDown',
                hideMethod: 'slideUp',
                timeOut: 3000, // Adjust the timeout as needed
                extendedTimeOut: 1000,
                positionClass: 'toast-top-right', // Adjust the position as needed
                iconClass: 'toast-error', // Add a custom class for red color
            });
        });
    </script>
  @endif
	@stack('js')
	<script>
		$(document).ready(function() {
			// Select2 Multiple
			$('.select2').select2({
				placeholder: "Select",
				allowClear: true
			});

		});
	</script>
	<script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('userPassword');
        const passwordToggle = document.getElementById('passwordToggle');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordToggle.setAttribute('data-feather', 'eye');
        } else {
            passwordInput.type = 'password';
            passwordToggle.setAttribute('data-feather', 'eye-off');
        }

        // Re-initialize the Feather icons after changing the icon attribute
        feather.replace();
    }
	function toggleConfirmPasswordVisibility() {
        const passwordInput = document.getElementById('password_confirmation');
        const passwordToggle = document.getElementById('passwordConfirmToggle');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordToggle.setAttribute('data-feather', 'eye');
        } else {
            passwordInput.type = 'password';
            passwordToggle.setAttribute('data-feather', 'eye-off');
        }

        // Re-initialize the Feather icons after changing the icon attribute
        feather.replace();
    }
</script>
</body>
</html>