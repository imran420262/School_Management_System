<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">

<head>
	<title>Welcome to {{ $school_details[0]['school_name'] }}</title>
	<meta charset="utf-8">
	<meta name="description" content="test">
    <meta name="keywords" content="school,college,management,result,exam,attendance,account,hrm,library,payroll,hostel,admission,events">
    <meta name="author" content="CloudSchool">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<!-- style -->
	{{-- <link rel="shortcut icon" href="@if($siteInfo['favicon']){{asset('storage/site/'.$siteInfo['favicon'])}} @else{{ asset('images/favicon.png') }}@endif"> --}}
   <link rel="stylesheet" href="{{ asset(mix('/css/libs.css', 'frontend')) }}">
   <!-- CSS only -->
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    <!--styles -->

    <!-- Child Page css goes here  -->
    @yield("extraStyle")
     <!-- Child Page css -->

    <!-- Locale specific font size for menu -->
    @if(app()->getLocale() == 'bn')
        <style>
            .main-nav>ul>li {
                font-size: 18px;
            }
        </style>
        @endif
</head>

<body>
    <!-- page header -->
    @include('frontend.partial.header')
    <!-- / page header -->
    
	<!-- BEGIN CHILD PAGE-->
	@yield('pageContent')
	<!-- END CHILD PAGE-->	


	<!-- footer -->
    @include('frontend.partial.footer')
	<!-- / footer -->

    <script src="{{ asset(mix('/js/jquery.min.js', 'frontend')) }}"></script>
    <script src="{{ asset(mix('/js/libs.js', 'frontend')) }}"></script>

    <!-- Extra js from child page -->
    @yield("extraScript")
    <!-- END JAVASCRIPT -->

</body>
</html>