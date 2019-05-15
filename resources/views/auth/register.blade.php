<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
   <!DOCTYPE html>
<html lang="en">
   <head>
      <title>Amazing Islands </title>
      <!-- Meta tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Gaze Sign up & login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
         />
      <script>
         addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
      </script>
      <!-- Meta tags -->
      <!--stylesheets-->
      <link href="{{URL::asset('asset/css/style.css')}}" rel='stylesheet' type='text/css' media="all">
      <!--//style sheet end here-->
      <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
   </head>
   <body>
      <div class="mid-class">
         <div class="art-right-w3ls">
            <h2>Sign Up</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
               <div class="main">
                  <div class="form-left-to-w3l">
                  <input id="name" placeholder="Nama" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                  </div>
                  <div class="form-left-to-w3l">
                  <input id="email" placeholder="Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

								@if ($errors->has('email'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
                  </div>
                  <div class="form-left-to-w3l">
                  <input id="kelamin" placeholder="Kelamin" type="text" class="form-control{{ $errors->has('kelamin') ? ' is-invalid' : '' }}" name="kelamin" value="{{ old('kelamin') }}" required autofocus>

								@if ($errors->has('kelamin'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('kelamin') }}</strong>
									</span>
								@endif
                  </div>
                  <div class="form-left-to-w3l">
                  <input id="no_hp" placeholder="No HP" type="text" class="form-control{{ $errors->has('no_hp') ? ' is-invalid' : '' }}" name="no_hp" value="{{ old('no_hp') }}" required autofocus>

                        @if ($errors->has('no_hp'))
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('no_hp') }}</strong>
                           </span>
                        @endif
                  </div>
                  <div class="form-left-to-w3l">
                  <input id="alamat" placeholder="Alamat" type="text" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" value="{{ old('alamat') }}" required autofocus>

								@if ($errors->has('alamat'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('alamat') }}</strong>
									</span>
								@endif
                  </div>
                  <div class="form-left-to-w3l">

                  <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                           </span>
                        @endif
                  </div>
                  <div class="form-left-to-w3l">
                     <input id="password-confirm" type="password" placeholder="password confirmation" class="form-control" name="password_confirmation" required>
                  </div>
               </div>
               <div class="clear"></div>
               <div class="btnn">
                  <button type="submit">Sign Up</button>
               </div>
            </form>
         
         </div>
         <div class="art-left-w3ls">
            <h1 class="header-w3ls">
               Register <hr>
            </h1>
         </div>
      </div>
      <footer class="bottem-wthree-footer">
         
      </footer>
   </body>
</html>