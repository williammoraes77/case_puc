    <base href="/">
    <meta charset="utf-8" />
    <title>@section('title') {{{$title}}} @show</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/theme/assets/images/favicon.png">
    <title>Materialart Admin Template</title>
    <link href="/assets/theme/dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="/assets/theme/assets/libs/morris.js/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="/assets/theme/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="/assets/theme/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="/assets/theme/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="/assets/theme/assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="/assets/theme/assets/libs/jquery-steps/steps.css" rel="stylesheet">
    <link href="/assets/theme/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
    <link href="/assets/theme/assets/extra-libs/prism/prism.css" rel="stylesheet">

    @yield('styles')

@section('scripts_default')

     <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="/assets/theme/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/assets/theme/dist/js/materialize.min.js"></script>
    <script src="/assets/theme/assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!-- ============================================================== -->
    <!-- Apps -->
    <!-- ============================================================== -->
    <script src="/assets/theme/dist/js/app.js"></script>
    <script src="/assets/theme/dist/js/app.init.horizontal.js"></script>
    <script src="/assets/theme/dist/js/app-style-switcher.js"></script>
    <!-- ============================================================== -->
    <!-- Custom js -->
    <!-- ============================================================== -->
    <script src="/assets/theme/dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <!--c3 JavaScript -->
    <script src="/assets/theme/assets/extra-libs/c3/d3.min.js"></script>
    <script src="/assets/theme/assets/extra-libs/c3/c3.min.js"></script>
    <script src="/assets/theme/assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="/assets/theme/dist/js/pages/dashboards/dashboard5.js"></script>
    <script src="/assets/theme/assets/extra-libs/sparkline/sparkline.js"></script>
     <!--Morris JavaScript -->
    <script src="/assets/theme/assets/libs/raphael/raphael.min.js"></script>
    <script src="/assets/theme/assets/libs/morris.js/morris.min.js"></script>
    <script src="/assets/theme/assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="/assets/theme/assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>

    @include('partials.swal')
@stop
