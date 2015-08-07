<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="_token" content="{!! csrf_token() !!}" />
    <title>GRACEAdmin | Dashboard</title>
 <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
{!! Minify::stylesheet('/backend/bootstrap/css/bootstrap.min.css') !!}
{!! Minify::stylesheet('/assets/bootstrap/css/bootstrap-tagsinput.css') !!}

{{-- {!! HTML::style("//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css") !!} --}}
{!! HTML::("backend/vendors/font-awesome-4.2.0/css/font-awesome.min.css") !!}
{!! HTML::style("//code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css") !!}


{!! Minify::stylesheet(array(
    '/backend/css/style.css',
    '/backend/css/AdminLTE.min.css',
    '/backend/css/awesome-bootstrap-checkbox.css',
    '/backend/css/skins/_all-skins.min.css',
    '/backend/plugins/iCheck/all.css',
    '/backend/plugins/datepicker/datepicker3.css',
    '/backend/plugins/select2/select2.min.css',
    '/backend/plugins/timepicker/bootstrap-timepicker.min.css',
    '/backend/plugins/colorpicker/bootstrap-colorpicker.min.css',

    '/backend/plugins/daterangepicker/daterangepicker-bs3.css',

    '/backend/plugins/morris/morris.css'

)) !!}

@yield('styles')

{!! Minify::javascript('/backend/plugins/jQuery/jQuery-2.1.4.min.js') !!}
{!! Minify::javascript('/backend/bootstrap/js/bootstrap.min.js') !!}

{!! HTML::script('ckeditor/ckeditor.js') !!}

@yield('scripts')


<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>
<body class="skin-blue">

<div class="wrapper">
   <header class="main-header">
        <!-- Logo -->
        <a href="{!! url(getLang() . '/admin') !!}" class="logo"><b>GRACE</b>Admin</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" src="/flags/{{ LaravelLocalization::getCurrentLocale() }}.png">&nbsp;
                            <span class="username">{{ LaravelLocalization::getCurrentLocaleName() }}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a href="{{LaravelLocalization::getLocalizedURL($localeCode) }}" hreflang="{{$localeCode}}">
                                    <img alt="" src="/flags/{{$localeCode}}.png">&nbsp; &nbsp;{{{ $properties['native'] }}} </a>

                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">{{ $formPost->count() }}</span> </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have {{ $formPost->count() }} notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    @foreach($formPost as $item)
                                        <li>
                                            <a href="#">
                                                <p>{{ $item->subject }}</p>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="footer"><a href="{{ url(getLang() . '/admin/form-post') }}">See All Messages</a></li>
                        </ul>
                    </li>

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ gratavarUrl(Sentry::getUser()->email) }}" class="user-image" alt="User Image"/>
                            <span class="hidden-xs">{{ Sentry::getUser()->first_name . ' ' . Sentry::getUser()->last_name }}</span> </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{ gratavarUrl(Sentry::getUser()->email) }}" class="img-circle" alt="User Image"/>

                                <p>
                                <p> {{ Sentry::getUser()->first_name . ' ' . Sentry::getUser()->last_name }} 
                                    <small>{{ Sentry::getUser()->created_at }}</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="col-xs-4 text-center">
one
                                </div>
                                <div class="col-xs-4 text-center">
two 
                                </div>
                                <div class="col-xs-4 text-center">
three
                                </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{ url(getLang() . '/admin/user/' . Sentry::getUser()->id) }}" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url('/admin/logout') }}" class="btn btn-default btn-flat">Sign out</a></div>

                            </li>
                        </ul>
                     </li>
                  </ul>
            </div>
        </nav>
    </header>

{{-- @include('backend/layout/adminheader') --}}

    @include('backend/layout/menu')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div><!-- /.content-wrapper -->

    @include('backend/layout/footer')
</div>
<!-- ./wrapper -->

 

{!! Minify::javascript(array(


    '/backend/plugins/select2/select2.full.min.js',
    '/backend/plugins/sparkline/jquery.sparkline.min.js',
    '/backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
    '/backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
    '/backend/plugins/input-mask/jquery.inputmask.js',
    '/backend/plugins/input-mask/jquery.inputmask.date.extensions.js',
    '/backend/plugins/input-mask/jquery.inputmask.extensions.js',
    '/backend/plugins/daterangepicker/daterangepicker.js',
    '/backend/plugins/datepicker/bootstrap-datepicker.js',
    '/backend/plugins/colorpicker/bootstrap-colorpicker.min.js',
    '/backend/plugins/timepicker/bootstrap-timepicker.min.js',
    '/backend/plugins/slimScroll/jquery.slimscroll.min.js',
    '/backend/plugins/iCheck/icheck.min.js',
    '/backend/plugins/fastclick/fastclick.min.js',
    '/backend/plugins/chartjs/Chart.min.js'



    )) !!}


    <script src="{{ asset('vendors/livicons/minified/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
    @if (Request::is('admin/form_builder2') || Request::is('admin/gridmanager') || Request::is('admin/portlet_draggable'))
        <script src="{{ asset('assets/vendors/form_builder1/js/jquery.ui.min.js') }}"></script>
    @endif
    <script src="{{ asset('backend/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script> 
{!! Minify::javascript(array( '/backend/bootstrap/js/bootstrap-tagsinput.js', '/assets/js/jquery.slug.js')) !!}
{!! HTML::style("//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js") !!}
{!! Minify::javascript('/backend/js/app.min.js') !!}
{!! Minify::javascript('/backend/js/demo.js') !!}
{!! HTML::script('/vendors/livicons/minified/raphael-min.js') !!}
{!! HTML::script('/vendors/livicons/minified/livicons-1.4.min.js') !!}
{!! HTML::script('vendors/holder-master/holder.js') !!}
 




    <script type="text/javascript">
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                  ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                  },
                  startDate: moment().subtract(29, 'days'),
                  endDate: moment()
                },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
</body>
</html>
