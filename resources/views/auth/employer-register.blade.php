@extends('layouts.nav-landing-page')

@section('content')
<div class="container employer-registration">
<div class="row h-100">
<div class="col-md-5 my-auto">
<h2 class="form-title mb-5 text-center">Employer Sign up</h2>
  <form method="POST" action="{{ route('emp.register') }}">
      @csrf
      <input type="hidden" name="user_type" value="employer">
<div class="form-group mb-5">
<label for="name"><i class="fas fa-user-tie"></i></label>
<input type="text" id="cname" placeholder="Company Name" class="@error('cname') is-invalid @enderror" name="cname" value="{{ old('email') }}" required autocomplete="email">
@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>




<div class="form-group mb-5">
<label for="email"><i class="fas fa-envelope"></i></i></label>
<input type="email" id="email" placeholder="Company E-mail" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
  <a href="{{ route('employer.register') }}" class="">Click here for Jobseeker signup</a>
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
  background: url(../images/emp-signup.svg);
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
