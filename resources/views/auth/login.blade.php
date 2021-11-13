{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LAGFERRY | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('admin/plugins/iCheck/square/blue.css')}}">
    {{-- <link rel="shortcut icon" href="{{('/admin/dist/img/icon.ico') }}"> --}}
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
      .eko{
        font: italic small-caps bold 12px/30px Georgia, serif;
        font-size:50px; color:#903735; font-weight:900
      }
      .track{
        font: italic bold 12px/30px Georgia, serif;
        font-weight:900;font-size:27px; color:#0E548F;font-style: italic;
        text-transform: capitalize;

      }


      /* Important part */
      .modal-dialog{
          overflow-y: initial !important
      }
      .modal-body{
          height: 400px;
          overflow-y: auto;
      }
    </style>

  </head>

<body class="hold-transition login-page" style="background: url({{asset('admin/dist/img/lag12.jpg')}}); background-size:cover; background-position: center center">


  <div class="login-box" style="background-color:#fff">
        <div class="">
        <img src="{{asset('admin/dist/img/logo.png')}}" class="img-triangle" alt="User Image" style="width:250px; height:90px; position:unset">
        </div>

  <!-- /.login-logo -->
  <div class="login-box-body">


    <div>
      <p class="login-box-msg">Enter your login credentials</p>
    </div>

       <form method="POST" action="{{ route('login') }}">
        @csrf
          <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

        <div class="row">
              <div class="col-xs-8">
                <div class="checkbox icheck">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                      {{ __('Remember Me') }}
                  </label>
                </div>
              </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>

          <!-- /.col -->
        </div>
       </form>



        @if (Route::has('password.request'))
          <a class="btn btn-link" href="{{ route('password.request') }}">
              {{ __('Forgot Your Password?') }}
          </a>
        @endif


        <a class="btn btn-link" style="color: #DD0D0A" data-toggle="modal" data-target="#signUpModal">
            {{ __('Sign Up') }}
        </a>

  </div>
  <!-- /.login-box-body -->

  <!-- Modal -->
    <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                {{-- <h5 class="modal-title" id="signUpModalLabel">Sign-Up Form</h5> --}}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="">
                    <img src="{{asset('admin/dist/img/logo.png')}}" class="img-triangle" alt="User Image" style="width:250px; height:90px; position:unset">
                </div>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="modal-body">

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="lname">Last name<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" id="lname" value="{{ old('last_name') }}" name ="last_name" pattern="[A-Za-z]{3,}" title="Minimum of three letters" placeholder=""  autofocus required/>


                                </div>

                                <div class="form-group">
                                    <label for="fname">First Name<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" id="first_name" value="{{ old('first_name') }}" name ="first_name" pattern="[A-Za-z]{3,}" title="Minimum of three letters" placeholder=""  required>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="email">Email  <span class="text-red">*</span></label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  required autocomplete="email">
                                </div>


                                <div class="form-group ">
                                    <label for="gender">Gender <span class="text-red">*</span></label>

                                    <select class="form-control" name="gender"  required>
                                        <option value="" disabled selected>Choose</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>

                                      </select>
                                </div>

                                <div class="form-group ">
                                    <label for="gender">Marital Status <span class="text-red">*</span></label>

                                    <select class="form-control" name="marital_status"  required>
                                        <option value="" disabled selected>Choose</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Widowed">Widowed</option>
                                        <option value="Divorced">Divorced</option>
                                      </select>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group ">
                                    <label for="phone">phone <span class="text-red">*</span></label>
                                    <input type="number" class="form-control" id="phone" value="{{ old('phone') }}" maxlength="11" minlength="11" name ="phone"  required>
                                </div>

                                <div class="form-group ">
                                    <label for="username">UserName <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" id="username" value="{{ old('user_name') }}" name ="user_name" pattern="[a-z]{3,15}" title="Username should only contain lowercase(with minimum of three and maximum of 15) letters. e.g. john"  required>
                                </div>


                                <div class="form-group">
                                    <label>Password <span class="text-red">*</span></label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number, one uppercase and lowercase letter, and at least 8 or more characters">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Confirm Password <span class="text-red">*</span></label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="form-group">
                                    <label>
                                    <input type="checkbox" class="form-control checkbox"> I agree to the <a href="#">terms and conditions</a>
                                    </label>
                                </div>





                            </div>


                        </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>

<script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('admin/plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

</body>
</html>

