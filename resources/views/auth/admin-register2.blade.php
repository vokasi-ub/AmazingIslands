<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Miminium</title>

   <!-- start: Css -->
   <link rel="stylesheet" type="text/css" href="{{ URL::asset('assetsAdmin/css/bootstrap.min.css') }}">

<!-- plugins -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assetsAdmin/css/plugins/font-awesome.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assetsAdmin/css/plugins/simple-line-icons.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assetsAdmin/css/plugins/animate.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assetsAdmin/css/plugins/fullcalendar.min.css') }}"/>
<link href="{{ URL::asset('assetsAdmin/css/style.css') }}" rel="stylesheet">
<!-- end: Css -->


<link rel="shortcut icon" href="assetsAdmin/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body id="mimin" class="dashboard form-signin-wrapper">

      <div class="container">

        <form class="form-signin">
          <div class="panel periodic-login">
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">Ai</h1>
                  <p class="atomic-mass">Amazing Islands</p>
                  <p class="element-name">Register Admin</p>

                  @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                 @endif
                 <form action="registerPost" method="post">
                {{ csrf_field() }}
                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                  @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                  @endif
                    <span class="bar"></span>
                    <label>{{ __('Name') }}</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                   @endif
                    <span class="bar"></span>
                    <label>{{ __('E-Mail Address') }}</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                  @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    <span class="bar"></span>
                    <label>{{ __('Password') }}</label>
                  </div>

                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    <span class="bar"></span>
                    <label>{{ __('Confirm Password') }}</label>
                  </div>
                  <label class="pull-left">
                  <input type="checkbox" class="icheck pull-left" name="checkbox1"/> &nbsp; Agree the terms and policy
                  </label>
                  <input type="submit" class="btn col-md-12" value="SignUp"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="loginadmin">Already have an account?</a>
                </div>
          </div>
          </form>
        </form>

      </div>

      <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="{{ URL::asset('assetsAdmin/js/jquery.min.js') }}"></script>
      <script src="{{ URL::asset('assetsAdmin/js/jquery.ui.min.js') }}"></script>
      <script src="{{ URL::asset('assetsAdmin/js/bootstrap.min.js') }}"></script>

      <script src="{{ URL::asset('assetsAdmin/js/plugins/moment.min.js') }}"></script>
      <script src="{{ URL::asset('assetsAdmin/js/plugins/icheck.min.js') }}"></script>

      <!-- custom -->
      <script src="{{ URL::asset('assetsAdmin/js/main.js') }}"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
   </html>