<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Hiba') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

      <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="{{asset('assets/vendors/core/core.css')}}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
	<!-- select2 -->
    <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">

  <!-- Layout styles -->  
	<link rel="stylesheet" id="themeStylesheet" href="{{asset('assets/css/demo1/style.css')}}">
  <!-- End layout styles -->

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/images/site.webmanifest')}}">

    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet" type="text/css" />

    

    <!-- Scripts -->
    @stack('css')
    
</head>
<body>
    <div class="main-wrapper">
        @include('layouts.partials.sidebar')

        <div class="page-wrapper">
            @include('layouts.partials.header')
            <div class="page-content">
            @yield('content')
            </div>  
        </div>
    </div>

    	<!-- core:js -->
	<script src="../assets/vendors/core/core.js"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="{{asset('assets/vendors/chartjs/Chart.min.js')}}"></script>
  <script src="{{asset('assets/vendors/jquery.flot/jquery.flot.js')}}"></script>
  <script src="{{asset('assets/vendors/jquery.flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{asset('assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('assets/js/template.js')}}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <!-- <script src="{{asset('assets/js/dashboard-light.js')}}"></script>
  <script src="{{asset('assets/js/dashboard-dark.js')}}"></script> -->
  <script src="{{asset('assets/js/datepicker.js')}}"></script>
  <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
  <script src="{{asset('assets/js/dashboard-light.js')}}" id="modeScript"></script>
  <script src="{{asset('assets/js/select2.min.js')}}"></script>
  <script src="{{asset('assets/js/pusher.js')}}"></script>

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

  @if (session('success'))
      <script>
          $(document).ready(function(){
              toastr.success('{{ session('success') }}', 'Success', {
                  closeButton: true,
              });
          });
      </script>
  @endif

	@if (session('message'))
		<script>
			$(document).ready(function(){
				toastr.success('{{ session('message') }}', 'Success', {
					closeButton: true,
				});
			});
		</script>
	@endif

  @php
      $message = $response['message'] ?? '';
  @endphp

  @if ($message)
  <script>
      $(document).ready(function(){
          toastr.success("{{ $message }}");
      });
  </script>
  @endif

	@if (session('error'))
    <script>
        $(document).ready(function() {
            toastr.error('{{ session('error') }}', 'Error!', {
                closeButton: true,
                // progressBar: true,
            });
        });
    </script>
  @endif
	<!-- End custom js for this page -->
  @stack('js')
  <!-- Hide the light theme script -->
  

<script>
    function setTheme(theme) {
        var stylesheet = document.getElementById('themeStylesheet');
        var modeScript = document.getElementById('modeScript');

        if (theme === 'demo1') {
            stylesheet.href = "{{ asset('assets/css/demo1/style.css') }}";
            modeScript.src = "{{asset('assets/js/dashboard-light.js')}}"; // Load the light theme script
      
        } else if (theme === 'demo2') {
            stylesheet.href = "{{ asset('assets/css/demo2/style.css') }}";
            modeScript.src = "{{asset('assets/js/dashboard-dark.js')}}"; // Load the dark theme script
        }
    }
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

<!-- <script>
    $(document).ready(function() {
        // Select2 Multiple
        $('.select2').select2({
            placeholder: "Select",
            allowClear: true
        });
    });

</script> -->
<script>
    const pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
        cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
        encrypted: true
    });

    // Subscribe to the channel where your events are being triggered
    const channel = pusher.subscribe('hiiba-development');

    // Listen for the 'ad-deactivated' event
    channel.bind('ad-deactivated', data => {
        // Handle the event data here
        console.log('Ad Deactivated:', data.ad_id);

        // You can update your frontend UI, show notifications, etc.
    });
</script>



</body>
</html>
