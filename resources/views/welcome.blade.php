@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <h1>Recent Job</h1>
        <table class="table">
          <thead>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </thead>
          <tbody>
             @foreach($jobs as $job)
            <tr>
              <td><img src="{{asset('uploads/logo')}}/{{$job->company->logo}}" width="80"></td>
              <td>Position:{{$job->position}}
              <br>
              <i class="fas fa-user-clock" aria-hidden="true"></i>&nbsp;{{$job->type}}
              </td>
              <td><i class="fa fa-map-marker-alt" aria-hidden="true"></i>&nbsp;{{$job->address}}</td>
              <td>
              <i class="fa fa-globe" aria-hidden="true"></i>
              &nbsp;Date:{{$job->created_at->diffForHumans()}}
              </td>
              <td>
                <a class="btn btn-success btn-sm" href="{{route('jobs.show', [$job->id,$job->slug])}}">
                Apply</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>

    <div class="">
      <a href="{{route('alljobs')}}"><button class="btn btn-success btn-lg" style="width: 100%;">Browse All Jobs</button></a>
    </div>

    <br><br>
    <h1>Featured Company</h1>
</div>

<div class="container">
  <div class="row">

    @foreach($companies as $company)
    <div class="col-md-3">
      <div class="card">
<img class="card-img-top img-fluid" src="{{asset('uploads/logo')}}/{{$company->logo}}">
<div class="card-body">
  <h5 class="card-title">{{str_limit($company->cname,20)}}</h5>
  <p class="card-text">{{str_limit($company->description,30)}}</p>
  <a href="{{route('company.index', [$company->id,$company->slug])}}" class="btn btn-primary">Visit Company</a>
</div>
</div>
    </div>

    @endforeach
  </div>

</div>
@endsection

<style>
.fa {
  color: #4121D7;
}

.fas {
  color: #4121D7;
}

</style>
