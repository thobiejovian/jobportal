@extends('layouts.nav-landing-page')

@section('content')
<div class="container">
	<div class="row">
      <!-- left column -->

      <div class="col-md-3 text-center">
        @if(empty(Auth::user()->profile->avatar))
        <img src="{{asset('images/placeholder.jpg')}}" class="img-fluid"  alt="">
        @else
          <img src="{{asset('uploads/avatar')}}/{{Auth::user()->profile->avatar}}" class="img-fluid"  alt="">
          @endif
  <form action="{{route('avatar')}}" method="POST" enctype="multipart/form-data">@csrf

    <div class="card mt-5">
      <div class="card-header">Update Profile Picture
      </div>
      <div class="card-body">
        <input class=" form-control mt-4" type="file" name="avatar"/>
        <button class="btn btn-info" type="submit">Update</button>
      </div>
    </div>
      </div>
  </form>


      <!-- edit form column -->
      <div class="col-md-5 col-lg-5 col-xl-5 card personal-info">
        <div class="card-header">
        <h3>Update Your Profile</h3>
        </div>

      <form action="{{route('profile.create')}}" method="POST">@csrf

        <div class="card-body">

          <div class="form-group">
            						<label class="control-label">Address</label>

            					  <input class="form-control" type="text" name="address" value="{{Auth::user()->profile->address}}">

          </div>
          <div class="form-group">
            <label class="control-label">Experience</label>

              <textarea class="form-control" name="experience">{{Auth::user()->profile->experience}}</textarea>

          </div>
          <div class="form-group">
            <label class="control-label">Bio</label>

                <textarea class="form-control" name="bio">{{Auth::user()->profile->bio}}</textarea>

          </div>

          <div class="form-group">
          <button class="btn btn-info" type="submit">Update</button>

          </div>
          </div>

        @if(Session::has('message'))
        <div class="alert alert-success">
          {{Session::get('message')}}
        </div>
        @endif
      </div>

</form>

      <div class="col-md-4 col-lg-4 col-xl-4">

        <div class="card text-center">
       <div class="card-header">
         <h4>Your Information</h4>
       </div>

          <div class="card-body">
            <p>Name: {{Auth::user()->name}}</p>
            <p>Email: {{Auth::user()->email}}</p>
            <p>Address: {{Auth::user()->profile->address}}</p>
            <p>Experience: {{Auth::user()->profile->experience}}</p>
            <p>Gender: {{Auth::user()->profile->gender}}</p>
            <p>Bio: {{Auth::user()->profile->bio}}</p>
            <p>Joined Since: {{date('F d Y',strtotime(Auth::user()->created_at))}}</p>


            @if(!empty(Auth::user()->profile->cover_letter))
            <p><a href="{{Storage::url(Auth::user()->profile->cover_letter)}}">Cover Letter</a></p>

            @else
            <p>Please upload cover letter</p>
            @endif

            @if(!empty(Auth::user()->profile->resume))
            <p><a href="{{Storage::url(Auth::user()->profile->resume)}}">Resume</a></p>

            @else
            <p>Please upload Resume</p>
            @endif
            </div>
        </div>

  <form action="{{route('cover.letter')}}" method="POST" enctype="multipart/form-data">@csrf
        <div class="card text-center mt-4">
       <div class="card-header">
         <h4>Update Your Cover Letter</h4>
       </div>

          <div class="card-body upload-btn-wrapper1">


              <input class="mt-4" type="file" name="cover_letter"/>

              <button class="btn btn-info mt-4">Update new CV</button>

            </div>
        </div>
</form>

<form action="{{route('resume')}}" method="POST" enctype="multipart/form-data">@csrf
          <div class="card text-center mt-4">
         <div class="card-header">
           <h4>Update Your Resume</h4>
         </div>

            <div class="card-body upload-btn-wrapper2">



                <input class="mt-4" type="file" name="resume"/>

                <button class="btn btn-info mt-4">Upload new Resume</button>


              </div>
          </div>

      </div>
      </form>






  </div>
</div>

@endsection

<style>


main {
  height: calc(100vh - 72.2px);
  margin-top: 72.2px;
}



</style>
