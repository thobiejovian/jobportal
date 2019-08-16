@extends('layouts.nav-landing-page')

@section('content')
<div class="container user-registration">
<div class="row h-100">
<div class="col-md-5 my-auto">
<h2 class="form-title mb-5 text-center">JobSeeker Sign up</h2>
  <form method="POST" action="{{ route('register') }}">
      @csrf
      <input type="hidden" name="user_type" value="jobseeker">
<div class="form-group mb-5">
<label for="name"><i class="fas fa-user-tie"></i></label>
<input type="text" id="name" placeholder="Your Name" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>




<div class="form-group mb-5">
<label for="email"><i class="fas fa-envelope"></i></i></label>
<input type="email" id="email" placeholder="Your E-mail" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>


<div class="form-group mb-5">
<label for="password"><i class="fas fa-unlock"></i></label>
<input id="password" type="password" placeholder="Password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>


<div class="form-group mb-5">
<label for="password-confirm"><i class="fas fa-lock"></i></label>
<input id="password-confirm" type="password" placeholder="Repeat your password" name="password_confirmation" required autocomplete="new-password">
</div>


<div class="form-group form-button text-center">
  <button type="submit" class="btn btn-info">
      {{ __('Register') }}
  </button>
</div>
</form>
</div>
<div class="col-md-6 ml-5 my-auto">
<div class="right-image"  style="min-height:300px">
</div>
<div class="signup-link text-center">
  <a href="{{ route('employer.register') }}" class="">Click here for Employer signup</a>
</div>
</div>

</div>
</div>
@endsection

<style media="screen">

main {
  height: calc(100vh - 72.2px);
  margin-top: 72.2px;

}


.right-image{
  background: url(../images/signup.svg);
  background-repeat: no-repeat;
  background-size: 80%;
  background-position: center;
  position:relative;
  height: 400px;
}

.form-group {
  position: relative;
}

.form-group label i {
  font-size: 18px;
}

label {
position: absolute;
left: 0;
top: 22%;
color: #222;
  }

input {
width: 100%;
display: block;
border: none;
border-bottom: 1px solid #999;
padding: 6px 30px;
background-color: #f8fafc;
}



</style>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Job Seeker Registration') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <input type="hidden" name="user_type" value="jobseeker">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob">

                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6  mt-2">
                                <input  type="radio" name="gender" value="male" required=""> Male
                                <input class="ml-2"  type="radio" name="gender" value="female" required=""> Female

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
