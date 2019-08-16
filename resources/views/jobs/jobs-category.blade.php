@extends('layouts.nav-landing-page')

@section('content')
<div class="container">
  <div class="row">

<div class="col-md-12 overflow-auto" id='category-job'>
  <div class="card">

    <div class="card-header text-center"> <h3>Jobs Found in {{$categoryName->name}}</h3></div>

    @foreach($jobs as $job)
    <div class="card-body border-bottom">
      <div class="row">

        <div class="col-md-2">
          <img src="{{asset('uploads/logo')}}/{{$job->company->logo}}" alt="" class="img-fluid mt-2">
        </div>
        <div class="col-md-9 my-auto">
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
{{$jobs->appends(Illuminate\Support\Facades\Input::except('page'))->links()}}
</div>


</div>
</div>



@endsection

<style>

main {
  height: calc(100vh - 120px);
  margin-top: 120px;
}

#category-job {
  height: 600px;
}

</style>
