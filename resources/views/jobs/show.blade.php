@extends('layouts.nav-landing-page')

@section('content')
        <div class="container">
        <div class="row">
          @if(Session::has('message'))
          <div class="alert alert-success">
            {{Session::get('message')}}
          </div>
          @endif

            <div class="col-md-8 mb-4">

                <div class="card bg-white mb-3">
                  <div class="card-body">
                <div class="row">

                <div class="col-md-2 mt-2">
                    <img src="{{asset('uploads/logo')}}/{{$job->company->logo}}" alt="" class="img-fluid">
                </div>

                <div class="col-md-9">
                <h5>{{$job->company->cname}}</h5>
                <h2>{{$job->title}}</h2>
                <ul class="list-inline">
                  <li class="list-inline-item">
                  <span class="fas fa-map-marker-alt"></span>
                  <span>{{$job->address}}</span>
                  </li>

                  <li class="list-inline-item">
                  <span class="fas fa-clock"></span>
                  <span>{{$job->type}}</span>
                  </li>

                  <li class="list-inline-item">
                  <span class="fas fa-calendar-alt"></span>
                  <span>{{$job->created_at->diffForHumans()}}</span>
                  </li>
                </ul>
                <ul class="list-inline">

                <div class="row">

                  @if(Auth::check()&&Auth::user()->user_type=='jobseeker')
                  @if(!$job->checkApplication())
                  <div class="col-md-4">
                  <li class="list-inline-item btn-block">
                  <apply-component :jobid={{$job->id}}></apply-component>
                  </li>
                  </div>
                  @endif

                  <div class="col-md-4">
                    <li class="list-inline-item btn-block">
                        <favourite-component :jobid={{$job->id}} :favourited={{$job->checkSaved()?'true':'false'}}></favourite-component>

                    </li>
                  </div>
                  @endif

                  <div class="col-md-2">
                    <li class="list-inline-item btn-block">
                    <button class="btn btn-info shareBut btn-block"><i class="fas fa-share-alt"></i></button>
                    </li>
                  </div>

                  <div class="col-md-2">
                    <li class="list-inline-item  btn-block">
                    <button class="btn btn-info printBut btn-block "><i class="fas fa-print"></i></button>
                    </li>
                  </div>
                </div>
                </ul>
                </div>
                </div>
                </div>
              </div>





              <img src="{{asset('uploads/cover_photo')}}/{{$job->company->cover_photo}}" alt="" class="img-fluid">



              <div class="card mt-4">
                <div class="card-header">
                  <h3>About Us</h3>
                </div>
                <div class="card-body">
                  <p>
                      {!! $job->description !!}
                  </p>
                </div>
              </div>

              <div class="card mt-4">
              <div class="card-header">
                <h3>Your Tasks</h3>
              </div>

              <div class="card-body">
                <p>
                    {!! $job->roles !!}
                </p>
              </div>
              </div>

              <div class="card mt-4">
              <div class="card-header">
                <h3>Contact</h3>
              </div>

              <div class="card-body">
                <p>
                    {!! $job->contact !!}
                </p>
              </div>
              </div>

              <div class="card mt-4">
              <div class="card-header">
                <h3>Job Recommendations</h3>
              </div>
              @foreach($jobRecommendations as $jobRecommendation)
              <div class="card-body border-bottom">
                <div class="row">
                <div class="col-md-2">
                    <img src="{{asset('uploads/logo')}}/{{$jobRecommendation->company->logo}}" alt="" class="img-fluid mt-1">
                </div>

                <div class="col-md-9">
                  <ul class="list-inline">
                    <li class="list-inline-item"><a href="{{route('jobs.show', [$jobRecommendation->id, $jobRecommendation->slug] )}}">{{$jobRecommendation->position}}</a></li>
                    <p class="m-0">{{$jobRecommendation->company->cname}}</p>
                    <li class="list-inline-item">
                      <span class="fas fa-map-marker-alt"></span>
                      <span>{{$jobRecommendation->address}}</span>
                    </li>
                    <li class="list-inline-item">
                      <span class="fas fa-calendar-alt"></span>
                      <span>{{$jobRecommendation->created_at->diffForHumans()}}</span>
                    </li>

                  </ul>
                </div>


              </div>
              </div>
              @endforeach
              </div>

              <div class="card mt-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12 text-center mb-4">
                      <p style="font-size: 1.5em;" class="font-weight-bold">Enter your email and be the first to receive all the jobs that match your search criteria</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8">
                      <input class="form-control" type="email" name="email" autocomplete="on" placeholder="Enter your email..." value="">
                    </div>
                    <div class="col-md-4 mb-4">
                      <button type="submit" name="button" class="btn btn-success btn-block">Create Job Agent</button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <p style="font-size: 0.8em;" class="text-muted">By clicking above you agree to the EasyJob Terms of Use. Read our full Data Protection Policy here. We will send you matching jobs by mail. You may unsubscribe at any time from EasyJob emails and services.</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="col-md-4">
              <div class="card text-center bg-white">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 mx-auto">
                      <img src="{{asset('uploads/logo')}}/{{$job->company->logo}}" alt="" class=" mb-3 img-fluid border">
                    </div>
                  </div>

                  <h2 class="mb-3">{{$job->company->cname}}</h2>
                  <a href="{{route('company.index', [$job->company->id, $job->company->slug])}}" class="btn btn-info btn-block mb-1">Company Profile</a>
                  <a href="#" class="btn btn-info btn-block">Jobs</a>
                </div>
              </div>

              <div class="card mt-4 bg-white">
                <div class="card-header text-center">
                  <h3>Most Recent Job</h3>
                </div>
                @foreach($jobs as $job)
                <div class="card-body">
                  <div class="row">

                    <div class="col-md-3">
                      <img src="{{asset('uploads/logo')}}/{{$job->company->logo}}" alt="" class="img-fluid mt-2">
                    </div>
                    <div class="col-md-9">
                      <ul class="list-inline">
                        <li class="list-inline-item"><a href="#">{{$job->position}}</a></li>
                        <p class="m-0">{{$job->company->cname}}</p>
                        <li class="list-inline-item">
                          <span class="fas fa-map-marker-alt"></span>
                          <span>{{$job->address}}</span>
                        </li>
                        <li class="list-inline-item">
                          <span class="fas fa-calendar-alt"></span>
                          <span>{{$job->created_at->diffForHumans()}}</span>
                        </li>

                      </ul>
                    </div>

                  </div>
                </div>
                @endforeach
              </div>
            </div>


        </div>





<!-- buat di lain hari -->
<!-- @if(Auth::check()&&Auth::user()->user_type=='jobseeker')
<button type="button" name="button"></button>
@endif -->

        </div>
@endsection

<style>

main {
  height: calc(100vh - 120px);
  margin-top: 120px;
}

.shareBut{
  min-height: 36px;
}

.printBut {
  min-height: 36px;
}



</style>
