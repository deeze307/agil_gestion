<!DOCTYPE html>
{{--@if ($__env->yieldContent('ng'))--}}
  <html lang="en" ng-app="@yield('ng')">
{{--@else--}}
  {{--<html lang="en" ng-app="">--}}
{{--@endif--}}
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Select2 -->
    {!! IAStyle('ampleadmin/plugins/select2/select2.min.css') !!}
            <!-- jQuery 2.2.3 -->
    {!! IAScript('ampleadmin/plugins/jQuery/jquery-2.2.3.min.js') !!}
            <!-- Bootstrap 3.3.6 -->
    {!! IAStyle('ampleadmin/bootstrap/dist/css/bootstrap.min.css') !!}
    {!! IAScript('ampleadmin/bootstrap/dist/js/bootstrap.min.js') !!}
            <!-- Bootstrap Dialog-->
    {!! IAStyle('assets/dialog-master/css/bootstrap-dialog.min.css') !!}
    {!! IAScript('assets/dialog-master/js/bootstrap-dialog.min.js') !!}
            <!-- Font Awesome -->
    {!! IAStyle('assets/font-awesome/css/font-awesome.min.css') !!}
            <!-- Shortcut -->
    {!! IAScript('assets/jquery/shortcut.js') !!}
            <!-- Cookies -->
    {!! IAScript('assets/jquery/cookies/cookies.js') !!}
            <!-- AngularJS-->
    {!! IAStyle('assets/angularjs/loading-bar.css') !!}
    {!! IAScript('assets/angularjs/angular.min.js') !!}
    {!! IAScript('assets/angularjs/angular-route.min.js') !!}
    {!! IAScript('assets/angularjs/angular-animate.min.js') !!}
    {!! IAScript('assets/angularjs/loading-bar.js') !!}
            <!-- Angular Bootstrap -->
    {!! IAScript('assets/angularjs/ui-bootstrap-tpls-0.12.1.min.js') !!}
            <!-- Angular Toasty-->
    {!! IAStyle('assets/angularjs/toasty/angular-toasty.min.css') !!}
    {!! IAScript('assets/angularjs/toasty/angular-toasty.min.js') !!}
            {{--<!-- Other styles -->--}}
    {{--{!! IAStyle('assets/loader_mini.css') !!}--}}


            <!-- AmpleAdmin App -->
    {!! IAStyle('ampleadmin/plugins/sidebar-nav/dist/sidebar-nav.min.css') !!}
    {!! IAStyle('ampleadmin/css/animate.css') !!}
    {!! IAStyle('ampleadmin/css/spinners.css') !!}
    {!! IAStyle('ampleadmin/plugins/sweetalert/sweetalert.css') !!}
    {!! IAStyle('ampleadmin/css/style.css') !!}
    {!! AGTheme('ampleadmin/css/colors/purple-dark.css') !!}



            <!-- DataTables -->
    {!! IAStyle('ampleadmin/plugins/datatables/dataTables.bootstrap.css') !!}
    {!! IAScript('ampleadmin/plugins/datatables/jquery.dataTables.min.js') !!}
    {!! IAScript('ampleadmin/plugins/datatables/dataTables.bootstrap.min.js') !!}
            <!-- Moments en español -->
    {!! IAScript('assets/moment.min.js') !!}
    {!! IAScript('assets/moment.locale.es.js') !!}
            <!-- DataRangePicker -->
    {!! IAScript('assets/jquery/daterangepicker/daterangepicker.js') !!}
    {!! IAStyle('assets/jquery/daterangepicker/daterangepicker.css') !!}
            <!-- Angular DataTables -->
    {!! IAScript('assets/angular-datatables/angular-datatables.min.js') !!}
    <script>
        function remoteLink(uri) {
            document.getElementById("ltebody").innerHTML='<object type="text/html" data="'+uri+'"  width="100%" height="2000"></object>';
        }
    </script>

  @yield('head')
</head>
<body class="fix-header">

    <!-- Preloader -->
    <div class="preloader">
      <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
      </svg>
    </div>

    <div id="wrapper">

      <!-- Main Header -->
        <nav class="navbar  navbar-default navbar-static-top m-b-0">
        <!-- Header Navbar -->
            <div class="navbar-header">
                <div class="top-left-part">
                    <a class="logo" href="#">
                        <!-- Logo icon image, you can use font-icon also -->
                        {{--<b>--}}
                          {{--<!--This is dark logo icon-->--}}
                            {{--{!! AGimg('ampleadmin/img/admin-logo.png','dark-logo') !!}--}}
                                 {{--<!--This is light logo icon-->--}}
                            {{--{!! AGimg('ampleadmin/img/admin-logo-dark.png','light-logo') !!}--}}
                        {{--</b>--}}
                        <!-- Logo text image you can use text also -->
                        <span class="hidden-xs">
                            <!--This is dark logo text-->
                            {!! AGimg('ampleadmin/img/agilgestion.png','home','dark-logo') !!}
                          <!--This is light logo text-->
                            {!! AGimg('ampleadmin/img/agilgestion.png','home','light-logo') !!}
                        </span>
                    </a>
                </div>

                <!-- Top Navbar  -->

                @include('ampleadmin/partial/navlogin')

                <!-- End Top NavbAr -->

            </div>
        </nav>
          @include('ampleadmin/partial/menu')
      {{--@endif--}}

      <!-- Content Wrapper. Contains page content -->
      {{--<div class="content-wrapper">--}}
        <!-- !!! CORE !!! -->
        {!! IAScript('vendor/agil_gestion/agil_gestion.js') !!}
        <section class="content">
            {{--<div class="box">--}}
                {{--<div class="box-body" id="ltebody">--}}
            @yield('body')

            {{--</div>--}}
            {{--</div>--}}
        </section>

        <!-- /.content -->
      {{--</div>--}}
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <!-- End Control Sidebar -->
    </div>

    <!-- ./wrapper -->

    <toasty></toasty>

    <!-- **** JScripts Ample Admin**** -->

    {!! IAScript('ampleadmin/plugins/sidebar-nav/dist/sidebar-nav.min.js') !!}
    {!! IAScript('ampleadmin/js/jquery.slimscroll.js') !!}
    {!! IAScript('ampleadmin/js/waves.js') !!}
    {!! IAScript('ampleadmin/plugins/sweetalert/sweetalert.min.js') !!}
    {!! IAScript('ampleadmin/plugins/sweetalert/jquery.sweet-alert.custom.js') !!}
    {!! IAScript('ampleadmin/js/custom.min.js') !!}
    {!! IAScript('ampleadmin/plugins/styleswitcher/jQuery.style.switcher.js') !!}

    <!-- End JScripts Ample Admin -->

    <!-- iCheck para checkboxes -->
    {!! IAStyle('ampleadmin/plugins/iCheck/all.css') !!}
    {!! IAScript('ampleadmin/plugins/iCheck/icheck.min.js') !!}


            <!-- Select2 -->
    {!! IAScript('ampleadmin/plugins/select2/select2.full.min.js') !!}





    <script type="text/javascript">
      // Moment en español
      moment.locale("es");

      // Funcion para levantar el datatable
      $(function() {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Initialize datatable Elements
        $(".datatable").DataTable( {
          "language": {
            "scrollX": true,
            "search": "Buscar",
            "lengthMenu":     "Ver _MENU_ resultados",
            "info": "Ver _START_ a _END_ de _TOTAL_ resultados",
            "zeroRecords": "No hay resultados",
            "paginate": {
              "first":      "Primero",
              "last":       "Ultimo",
              "next":       "Siguiente",
              "previous":   "Anterior"
            }
          }
        });

        // Datapicker sin rango de fechas
        $('input.defaultdatapicker').daterangepicker({
          locale: {
            format: 'DD/MM/YYYY'
          },
          autoApply: true,
          singleDatePicker: true
        });

        // Datapicker con rango de fechas
        $('input.defaultdatarangepicker').daterangepicker({
          locale: {
            format: 'DD/MM/YYYY',
            customRangeLabel: 'Definir rango'
          },
          ranges: {
            'Hoy': [moment(), moment()],
            'Ayer': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Ultimos 7 dias': [moment().subtract(6, 'days'), moment()]
          },
          autoApply: true
        });

        // Datapicker con rango de fechas full
        $('input.fulldatarangepicker').daterangepicker({
          locale: {
            format: 'DD/MM/YYYY',
            customRangeLabel: 'Definir rango'
          },
          ranges: {
            'Hoy': [moment(), moment()],
            'Ayer': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Ultimos 7 dias': [moment().subtract(6, 'days'), moment()],
            'Ultimos 30 dias': [moment().subtract(29, 'days'), moment()],
            'Este Mes': [moment().startOf('month'), moment().endOf('month')],
            'Ultimo Mes': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          autoApply: true
        });
      });
    </script>

    {{--@yield('footer')--}}

</body>
<footer class="footer text-center"> 2017 &copy; DeeZe.Designs </footer>

  </html>
