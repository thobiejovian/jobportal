@extends('layouts.nav-landing-page')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 my-auto">
          <div class="card">
            <div class="card-header text-center">
              <h3>Your Live Jobs</h3>
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
                  <a href="{{route('jobs.show', [$job->id,$job->slug])}}" class="btn btn-info">Show Jobs</a>
                  <a class="btn btn-dark ml-2" href="{{route('job.edit', [$job->id])}}">
                  Edit Jobs</a>
                </div>

              </div>
            </div>
            @endforeach
          </div>
        </div>

        <div class="col-md-6">
        <div class="right-image-emp-jobs">
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


.right-image-emp-jobs{
  background: url(../images/employerjob.svg);
  background-repeat: no-repeat;
  background-size: 80%;
  background-position: center;
  position:relative;
  height: 600px;
}



</style>
