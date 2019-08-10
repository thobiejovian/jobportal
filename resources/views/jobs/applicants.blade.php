@extends('layouts.nav-landing-page')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
          @foreach($applicants as $applicant)
          <div class="card mt-5">
              <div class="card-header text-center">
              <h4><a href="{{route('jobs.show',[$applicant->id,$applicant->slug])}}">{{$applicant->title}}</a></h4>
              </div>
              <div class="card-body p-3">
                <div class="row">
                @foreach($applicant->users as $user)

                <div class="col-md-2">
                  <img src="{{asset('uploads/avatar')}}/{{$user->profile->avatar}}" alt="" class="img-fluid mt-1">
                </div>
                <div class="col-md-9 my-auto">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                    <span class="fas fa-map-marker-alt"></span>
                    <span>Name: {{$user->name}}</span>
                    </li>
                    <li class="list-inline-item">
                    <span class="fas fa-envelope"></span>
                    <span>{{$user->email}}</span>
                    </li>
                    </ul>
                    <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#" class="btn btn-sm btn-info">View Profile</a>
                    </li>
                    <li class="list-inline-item">
                      <a class="btn btn-sm btn-dark ml-2" href="{{Storage::url($user->profile->resume)}}">View Resume</a>
                    </li>
                    <li class="list-inline-item">
                      <a class="btn btn-sm btn-dark ml-2" href="{{Storage::url($user->profile->cover_letter)}}">View Cover Letter</a>
                    </li>                                       
                  </ul>
                </div>
            @endforeach
            </div>
            </div>

          </div>
          @endforeach
        </div>

        <div class="col-md-6">
        <div class="right-image-applicant">
        </div>
        </div>

    </div>
</div>
@endsection


<style>

main {
  height: calc(100vh - 72.2px);
  margin-top: 72.2px;
}


.right-image-applicant{
  background: url(../images/applicant.svg);
  background-repeat: no-repeat;
  background-size: 80%;
  background-position: center;
  position:relative;
  height: 600px;
}



</style>
