@extends('layouts.nav-landing-page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      @if(Auth::user()->user_type=='jobseeker')
      @if(count($jobs)>0)
      <div class="col-md-6 overflow-auto" id='saved-content'>
        <div class="card">
          <div class="card-header text-center"> <h3>Your Saved Jobs</h3></div>
          @foreach($jobs as $job)
          <div class="card-body border-bottom">
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
                <a href="{{route('jobs.show', [$job->id,$job->slug])}}" class="btn btn-info">Show Jobs</a>
              </div>

            </div>
          </div>
          @endforeach
        </div>

      </div>

      <div class="col-md-6">
      <div class="right-image-saved-jobs">
      </div>
      </div>

      @else



  <div class="col-md-6 my-auto">
    <div class="card p-5">
    <div class="card-body text-center">
      <h3 class="mb-3">You Don't have any Saved Jobs</h3>
      <a href="{{ url('/') . '#discover-jobs' }}" class="btn btn-info">Discover some new Jobs</a>
    </div>
  </div>
  </div>


  <div class="col-md-6">
  <div class="right-image-no-jobs">
  </div>
  </div>


              @endif

              @endif

</div>
</div>


@endsection
<style>

main {
  height: calc(100vh - 72.2px);
  margin-top: 72.2px;
}


.right-image-saved-jobs{
  background: url(../images/savedjobs.svg);
  background-repeat: no-repeat;
  background-size: 80%;
  background-position: center;
  position:relative;
  height: 600px;
}

.right-image-no-jobs{
  background: url(../images/nojobs.svg);
  background-repeat: no-repeat;
  background-size: 80%;
  background-position: center;
  position:relative;
  height: 600px;
}

#saved-content {
  height: 600px;
}


</style>
