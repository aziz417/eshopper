
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>INSPINIA | Dashboard v.2</title>
    <!-- Latest compiled and minified CSS -->

    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('backend/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">

    {{--sweet alert--}}
    <link href="{{asset('backend/css/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset('backend/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">

    <!-- Gritter -->
{{--    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">--}}

    <link href="{{asset('backend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/custom_style.css')}}" rel="stylesheet">

</head>
<body class="fixed-sidebar fixed-nav fixed-nav-basic padding-right-remove pace-done">
<div class="pace  pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div>
</div>
<div id="wrapper">
    @include('admin.elements.sidebar')

    <div id="page-wrapper" class="gray-bg dashbard-1" style="min-height: 800px; margin-top: 0px">

        @include('admin.elements.header')
        @yield('mainContent')
        @include('admin.elements.footer')
    </div>
</div>
<!-- Mainly scripts -->
<script src="{{asset('backend/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('backend/js/popper.min.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.js')}}"></script>
<script src="{{asset('backend/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('backend/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('backend/js/plugins/dataTables/datatables.min.js')}}"></script>
<script src="{{asset('backend/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Flot -->
<script src="{{asset('backend/js/plugins/flot/jquery.flot.js')}}"></script>
<script src="{{asset('backend/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('backend/js/plugins/flot/jquery.flot.spline.js')}}"></script>
<script src="{{asset('backend/js/plugins/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('backend/js/plugins/flot/jquery.flot.pie.js')}}"></script>

<!-- Peity -->
<script src="{{asset('backend/js/plugins/peity/jquery.peity.min.js')}}"></script>
<script src="{{asset('backend/js/demo/peity-demo.js')}}"></script>
<!-- Custom and plugin javascript -->
<script src="{{asset('backend/js/inspinia.js')}}"></script>
<script src="{{asset('backend/js/plugins/pace/pace.min.js')}}"></script>
<!-- jQuery UI -->
<script src="{{asset('backend/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- GITTER -->
<script src="{{asset('backend/js/plugins/gritter/jquery.gritter.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('backend/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- ChartJS-->
<script src="{{asset('backend/js/plugins/chartJs/Chart.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('backend/js/plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('backend/js/plugins/sweetalert/sweetalert.min.js')}}"></script>



@stack('custom-js')

</body>
</html>

