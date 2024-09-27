<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="DayOne - It is one of the Major Dashboard Template which includes - HR, Employee and Job Dashboard. This template has multipurpose HTML template and also deals with Task, Project, Client and Support System Dashboard." name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords" content="admin dashboard, admin panel template, html admin template, dashboard html template, bootstrap 4 dashboard, template admin bootstrap 4, simple admin panel template, simple dashboard html template,  bootstrap admin panel, task dashboard, job dashboard, bootstrap admin panel, dashboards html, panel in html, bootstrap 4 dashboard, bootstrap 5 dashboard, bootstrap5 dashboard"/>

    <!-- Title -->
    <title>Dayone - Multipurpose Admin & Dashboard Template</title>

    <!--Favicon -->
    <link rel="icon" href="{{ asset('assets/images/brand/favicon.ico') }}" type="image/x-icon"/>

    <!-- Bootstrap css -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" id="style"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Style css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/boxed.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!-- Animate css -->
    <link href="{{ asset('assets/css/animated.css') }}" rel="stylesheet" />

    <!-- P-scroll bar css-->
    <link href="{{ asset('assets/plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />

    <!---Icons css-->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />

    <!---Sidebar css-->
    <link href="{{ asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet" />

    <!-- Select2 css -->
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />

    <!--- INTERNAL jvectormap css-->
    <link href="{{ asset('assets/plugins/jvectormap/jqvmap.css') }}" rel="stylesheet" />

    <!-- INTERNAL Data table css -->
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.css') }}" rel="stylesheet" />

    <!-- INTERNAL Time picker css -->
    <link href="{{ asset('assets/plugins/time-picker/jquery.timepicker.css') }}" rel="stylesheet" />

    <!-- INTERNAL jQuery-countdowntimer css -->
    <link href="{{ asset('assets/plugins/jQuery-countdowntimer/jQuery.countdownTimer.css') }}" rel="stylesheet" />

</head>

<body class="app sidebar-mini" >

    <!---Global-loader-->
    <div id="global-loader" >
        <img src="{{ asset('assets/images/svgs/loader.svg') }}" alt="loader">
    </div>

    <div class="page">
            <div class="page-main">
                    {{-- Sidebar --}}
                @include('admin.components.sidebar')

                 <div class="app-content main-content">
                    <div class="side-app">
                    {{-- Heder --}}
                @include('admin.components.header')
                {{-- Main Section --}}
                @yield('admin')
        </div>
    </div>
</div>
</div>

    <!--Footer-->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                    Copyright © 2021 <a href="#">Dayone</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="#">Spruko Technologies Pvt.Ltd</a> All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer-->


    </div>

    <!-- Back to top -->
    <a href="#top" id="back-to-top"><span class="feather feather-chevrons-up"></span></a>

    <!-- Jquery js-->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

    <!--Moment js-->
    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!--Othercharts js-->
    <script src="{{ asset('assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>

    <!--Sidemenu js-->
    <script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- P-scroll js-->
    <script src="{{ asset('assets/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/plugins/p-scrollbar/p-scroll1.js') }}"></script>

    <!--Sidebar js-->
    <script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Select2 js -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>

    <!-- INTERNAL Peitychart js-->
    <script src="{{ asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>

    <!-- INTERNAL Apexchart js-->
    <script src="{{ asset('assets/plugins/apexchart/apexcharts.js') }}"></script>

    <!-- INTERNAL Vertical-scroll js-->
    <script src="{{ asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js') }}"></script>
    <script src="{{ asset('assets/plugins/vertical-scroll/vertical-scroll.js') }}"></script>

    <!-- INTERNAL  Datepicker js -->
    <script src="{{ asset('assets/plugins/date-picker/jquery-ui.js') }}"></script>

    <!-- INTERNAL Chart js -->
    <script src="{{ asset('assets/plugins/chart/chart.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/chart/utils.js') }}"></script>

    <!-- INTERNAL Timepicker js -->
    <script src="{{ asset('assets/plugins/time-picker/jquery.timepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/time-picker/toggles.min.js') }}"></script>

    <!-- INTERNAL Chartjs rounded-barchart -->
    <script src="{{ asset('assets/plugins/chart.min/chart.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chart.min/rounded-barchart.js') }}"></script>

    <!-- INTERNAL jQuery-countdowntimer js -->
    <script src="{{ asset('assets/plugins/jQuery-countdowntimer/jQuery.countdownTimer.js') }}"></script>

    <!-- INTERNAL Index js-->
    <script src="{{ asset('assets/js/index1.js') }}"></script>

    <!-- Custom js-->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- Include Toastr CSS -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script type="text/javascript">
  toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right", // Position of the toast
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000", // Duration for showing toast
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        @session("success")
            toastr.success("{{ $value }}", "Success");
        @endsession

        @session("info")
            toastr.info("{{ $value }}", "Info");
        @endsession

        @session("warning")
            toastr.warning("{{ $value }}", "Warning");
        @endsession

        @session("error")
            toastr.error("{{ $value }}", "Error");
        @endsession

    </script>

</body>
</html>
