<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ENDASH </title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="/assets/css/paper-dashboard.css" rel="stylesheet"/>
    <link href="{{ asset('css/dropzone.css') }}" rel="stylesheet">
    <script src="{{ asset('js/dropzone.js') }}"></script>
    <script src="{{ asset('js/vue.js') }}"></script>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!-- <link href="/assets/css/demo.css" rel="stylesheet" /> -->

    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('/assets/css/themify-icons.css')}}" rel="stylesheet">

    @yield('css')

    @stack('style')

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">
    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->
   @include('inc.sidebar')
    </div>

    <div class="main-panel">
        @include('inc.header')

        <div class="content">
           @yield('content')
        </div>
        
        @include('inc.footer')
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="/assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="/assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <!-- <script type="/text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> -->

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="/assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="/assets/js/dash.js"></script>
    
    @include('sweet::alert')

   @stack('scripts')
	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "ENDASH the platform manager for EnyimbaFC website"

            },{
                type: 'success',
                timer: 2
            });

    	});
	</script>
    <script>
      @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
            case 'info':
                $.notify({
                        message: "{{ Session::get('message') }}"
                    },{
                        type: 'info',
                        timer: 400
                    });
                break;

            case 'warning':
                $.notify({
                        message: "{{ Session::get('message') }}"
                    },{
                        type: 'warning',
                        timer: 400
                    });
                    break;

            case 'success':
                $.notify({
                        message: "{{ Session::get('message') }}"
                    },{
                        type: 'success',
                        timer: 400
                    });
                    break;

            case 'error':
                $.notify({
                        message: "{{ Session::get('message') }}"
                    },{
                        type: 'error',
                        timer: 4000
                    });
                
                break;
        }
      @endif
    </script>
</html>
