<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @yield('head')
    <link rel="shortcut icon" href="{{asset('assets/images/docker-logo.png')}}">
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.googleapis.com.css') }}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />
    <!-- Data tables-->
    <link rel="stylesheet" href="{{ asset('assets/css/datatables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/buttons/buttons.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/buttons/buttons.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/buttons/buttons.foundation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/buttons/buttons.jqueryui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/buttons/buttons.semanticui.min.css') }}" />
    <!--  Sweet Alert  -->
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/dropify.css') }}" />


        <!--[if lte IE 9]>
            <link rel="stylesheet" href="{{ asset('assets/css/ace-part2.min.css') }}" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="{{ asset('assets/css/ace-skins.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/ace-rtl.min.css') }}" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="{{ asset('assets/css/ace-ie.min.css') }}" />
      <![endif]-->

      <!-- inline styles related to this page -->

      <!-- ace settings handler -->
      <script src="{{asset('assets/js/ace-extra.min.js')}}"></script>

      <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
        <script src="{{asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body class="no-skin">
   @include('layouts.navbar')

   <div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    @include('layouts.sidebar')

    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Home</a>
                    </li>

                    <li>
                        <a href="#"> @yield('racine_page')</a>
                    </li>
                    <li class="active"> @yield('page_name')</li>
                </ul><!-- /.breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
                        <span class="input-icon">
                            <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                            <i class="ace-icon fa fa-search nav-search-icon"></i>
                        </span>
                    </form>
                </div><!-- /.nav-search -->
            </div>
            <div class="page-header">
                <h1>
                    @yield('titre1_page')
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        @yield('titre2_page')
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <div class="page-content">
                @include('layouts.settingspage')
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        @yield('content')
                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

    @include('layouts.footer')

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>

<!-- <![endif]-->

        <!--[if IE]>
<script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!-- page specific plugin scripts -->

<!-- ace scripts -->
<script src="{{asset('assets/js/ace-elements.min.js')}}"></script>
<script src="{{asset('assets/js/ace.min.js')}}"></script>
<!-- Data Tables-->
<script src="{{asset('assets/js/datatables.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.select.min.js')}}"></script>
<script src="{{asset('assets/js/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/js/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/js/sweetalert.min.js')}}"></script>
<script src="{{ asset('assets/js/dropify.js') }}"></script>
<script type="text/javascript">
    $('.dropify').dropify({
        messages: {
            'default': 'Drag and drop a file here or click',
            'replace': 'Drag and drop or click to replace',
            'remove':  'Remove',
            'error':   'Ooops, something wrong happended.'
        }
    });
</script>
<!-- inline scripts related to this page -->
@yield('js')
</body>
</html>
