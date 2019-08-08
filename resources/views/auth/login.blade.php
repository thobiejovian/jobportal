@extends('layouts.nav-landing-page')

@section('content')


<div class="container login-container">
  <div class="row d-flex align-items-center justify-content-center  h-75">
    <form class="login-form text-center" method="POST" action="{{ route('login') }}">
          @csrf
      <div class="col-md-12 my-auto">

        @if(Session::has('message'))
        <div class="alert alert-success">
          {{Session::get('message')}}
        </div>
        @endif




          <h2 class="text-uppercase mb-5">Login</h2>
          <div class="form-group">
              <input id="email" class="form-control rounded-pill form-control-lg @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>

          <div class="form-group">
              <input id="password" class="form-control rounded-pill form-control-lg @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="current-password">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="forgot-link d-flex align-items-center justify-content-between">
            <div class="form-check">
                <input type="checkbox" name="remember" value="" class="form-check-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Remember Password</label>
            </div>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Password?
                </a>
            @endif
          </div>
          <button type="submit" class="btn mt-5 btn-primary btn-custom btn-block rounded-pill btn-lg" name="button">Login</button>
          <p class="mt-3">Don't have an account <a href="#"><strong>Register Now</strong></a></p>
      </div>
    </form>
  </div>
</div>

@endsection

<style>

main {
  height: calc(100vh - 85px);
  margin-top: 85px;
}


  .login-form{
    max-width: 100%;
    width: 370px;
    padding: 15px;
    margin: auto;
  }

  .login-form a{
    text-decoration: none;
  }

  .login-form a:hover{
    color: #51b5da;
  }

  .form-control {
    font-size: 15px;
    min-height: 48px;
    font-weight: 500;
  }

  .form-control:focus {
    border-color: #51b5da;
    box-shadow: 0 0 0 0.2rem rgba(114,61,190,.25);
  }

  .forgot-link{
    font-size: 13px;
  }

  .forgot-link label{
    margin-bottom: 0;
  }

  .btn-custom {
    background: #51b5da;
    border-color: #51b5da;
    color: #fff;
    font-size: 15px;
    min-height: 48px;
  }

  .btn-custom:focus,
  .btn-custom:hover,
  .btn-custom:active,
  .btn-custom:active:focus{
    background: #51b5da;
    border-color: #51b5da;
    color: #fff;
    box-shadow: 0 0 0 0.2rem rgba(61, 167, 190, 0.25);
  }


</style>
