<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" href="{{asset('assets/images/docker-logo.png')}}">
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.googleapis.com.css') }}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="{{ asset('assets/css/ace-part2.min.css') }}" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="{{ asset('assets/css/ace-skins.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/ace-rtl.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/dropify.css') }}" />
        <!-- Styles -->

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
      <![endif]-->

      <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-layout">
    <div class="main-container">
        <div class="main-content">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="login-container">
                        <div class="center">
                            <h1>
                                <i class="ace-icon fa fa-leaf green"></i>
                                <span class="red">Docker</span>
                                <span class="white" id="id-text2">Application</span>
                            </h1>
                            <h4 class="blue" id="id-company-text">&copy; Docker</h4>
                        </div>

                        <div class="space-6"></div>

                        <div class="position-relative">
                            <div id="login-box" class="login-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header blue lighter bigger">
                                            <i class="ace-icon fa fa-coffee green"></i>
                                            Entrez vos informations , Merci .
                                        </h4>

                                        <div class="space-6"></div>

                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <fieldset>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input id="name" name="name" type="text" class="form-control" placeholder="Name" />
                                                        <i class="ace-icon fa fa-user"></i>
                                                    </span>
                                                    @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                    @endif
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input id="password" name="password" type="password" class="form-control" placeholder="Password" />
                                                        <i class="ace-icon fa fa-lock"></i>
                                                    </span>
                                                    @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                    @endif
                                                </label>

                                                <div class="space"></div>

                                                <div class="clearfix">
                                                    <label class="inline">
                                                        <input type="checkbox" class="ace" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                                                        <span class="lbl"> se souvenir de moi </span>
                                                    </label>

                                                    <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                        <i class="ace-icon fa fa-key"></i>
                                                        <span class="bigger-110">Login</span>
                                                    </button>
                                                </div>

                                                <div class="space-4"></div>
                                            </fieldset>
                                        </form>

                                    </div><!-- /.widget-main -->

                                    <div class="toolbar clearfix">
                                        <div>
                                         @if (Route::has('password.request'))
                                         <a href="{{ route('password.request') }}" data-target="#forgot-box" class="forgot-password-link">
                                            <i class="ace-icon fa fa-arrow-left"></i>
                                            password oublié! 
                                        </a>
                                        @endif
                                    </div>

                                    <div>
                                        <a href="#" data-target="#signup-box" class="user-signup-link">
                                            S'enregistrer
                                            <i class="ace-icon fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- /.widget-body -->
                        </div><!-- /.login-box -->

                        <div id="forgot-box" class="forgot-box widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header red lighter bigger">
                                        <i class="ace-icon fa fa-key"></i>
                                        obtenir un nouveau mot de passe
                                    </h4>

                                    <div class="space-6"></div>
                                    <p>
                                        Entrer votre adresse email
                                    </p>

                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf

                                        <fieldset>
                                            <label class="block clearfix">
                                                <span class="block input-icon input-icon-right">
                                                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                                  <i class="ace-icon fa fa-envelope"></i>
                                              </span>

                                              @if ($errors->has('email'))
                                              <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </label>

                                        <div class="clearfix">
                                            <button type="submit" class="width-35 pull-right btn btn-sm btn-danger">
                                                <i class="ace-icon fa fa-lightbulb-o"></i>
                                                <span class="bigger-110">envoyez</span>
                                            </button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div><!-- /.widget-main -->

                            <div class="toolbar center">
                                <a href="#" data-target="#login-box" class="back-to-login-link">
                                    retour au login
                                    <i class="ace-icon fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div><!-- /.widget-body -->
                    </div><!-- /.forgot-box -->

                    <div id="signup-box" class="signup-box widget-box no-border">
                        <div class="widget-body">
                            <div class="widget-main">
                                <h4 class="header green lighter bigger">
                                    <i class="ace-icon fa fa-users blue"></i>
                                    Enregistrer vous 
                                </h4>

                                <div class="space-6"></div>
                                <p> Entrer vos informations: </p>

                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                    @csrf
                                    <fieldset>
                                        <label class="block clearfix">
                                            <span class="block input-icon input-icon-right">
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="email" required>
                                                <i class="ace-icon fa fa-envelope"></i>
                                            </span>

                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif

                                        </label>

                                        <label class="block clearfix">
                                            <span class="block input-icon input-icon-right">
                                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="prénom" required autofocus>
                                                <i class="ace-icon fa fa-user"></i>
                                            </span>

                                            @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </label>

                                        <label class="block clearfix">
                                            <span class="block input-icon input-icon-right">
                                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" placeholder="Nom" value="{{ old('lastname') }}" required autofocus>
                                                <i class="ace-icon fa fa-user"></i>
                                            </span>

                                            @if ($errors->has('lastname'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('lastname') }}</strong>
                                            </span>
                                            @endif
                                        </label>

                                        <label class="block clearfix">
                                            <span class="block input-icon input-icon-right">
                                                <input id="telephone" type="text" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone"  placeholder="telephone" value="{{ old('telephone') }}" required autofocus>
                                                <i class="ace-icon fa fa-user"></i>
                                            </span>

                                            @if ($errors->has('telephone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('telephone') }}</strong>
                                            </span>
                                            @endif
                                        </label>

                                        <label class="block clearfix">
                                            <span class="block input-icon input-icon-right">
                                             <input id="photo" name="photo" type="file" class="dropify" data-max-file-size="3M" />
                                         </span>

                                         @if ($errors->has('photo'))
                                         <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('photo') }}</strong>
                                        </span>
                                        @endif
                                    </label>

                                    <label class="block clearfix">
                                        <span class="block input-icon input-icon-right">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="password" required>
                                            <i class="ace-icon fa fa-lock"></i>
                                        </span>

                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </label>

                                    <label class="block clearfix">
                                        <span class="block input-icon input-icon-right">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirmer le password" required>
                                            <i class="ace-icon fa fa-retweet"></i>
                                        </span>
                                    </label>

                                    <div class="space-24"></div>

                                    <div class="clearfix">
                                        <button type="reset" class="width-30 pull-left btn btn-sm">
                                            <i class="ace-icon fa fa-refresh"></i>
                                            <span class="bigger-110">Reset</span>
                                        </button>

                                        <button type="submit" class="width-65 pull-right btn btn-sm btn-success">
                                            <span class="bigger-110">Register</span>

                                            <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                        </button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>

                        <div class="toolbar center">
                            <a href="#" data-target="#login-box" class="back-to-login-link">
                                <i class="ace-icon fa fa-arrow-left"></i>
                                Back to login
                            </a>
                        </div>
                    </div><!-- /.widget-body -->
                </div><!-- /.signup-box -->
            </div><!-- /.position-relative -->

            <div class="navbar-fixed-top align-right">
                <br />
                &nbsp;
                <a id="btn-login-dark" href="#">Dark</a>
                &nbsp;
                <span class="blue">/</span>
                &nbsp;
                <a id="btn-login-blur" href="#">Blur</a>
                &nbsp;
                <span class="blue">/</span>
                &nbsp;
                <a id="btn-login-light" href="#">Light</a>
                &nbsp; &nbsp; &nbsp;
            </div>
        </div>
    </div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.main-content -->
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('assets/js/dropify.js') }}"></script>

<!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

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
<script type="text/javascript">
    jQuery(function($) {
       $(document).on('click', '.toolbar a[data-target]', function(e) {
        e.preventDefault();
        var target = $(this).data('target');
                $('.widget-box.visible').removeClass('visible');//hide others
                $(target).addClass('visible');//show target
            });
   });



            //you don't need this, just used for changing background
            jQuery(function($) {
               $('#btn-login-dark').on('click', function(e) {
                $('body').attr('class', 'login-layout');
                $('#id-text2').attr('class', 'white');
                $('#id-company-text').attr('class', 'blue');
                
                e.preventDefault();
            });
               $('#btn-login-light').on('click', function(e) {
                $('body').attr('class', 'login-layout light-login');
                $('#id-text2').attr('class', 'grey');
                $('#id-company-text').attr('class', 'blue');
                
                e.preventDefault();
            });
               $('#btn-login-blur').on('click', function(e) {
                $('body').attr('class', 'login-layout blur-login');
                $('#id-text2').attr('class', 'white');
                $('#id-company-text').attr('class', 'light-blue');
                
                e.preventDefault();
            });

           });
       </script>
   </body>
   </html>
