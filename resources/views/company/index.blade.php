
@extends('layouts.nav-landing-page')

@section('content')
<div class="container">
  <div class="row section-first">
    <div class="col-md-12">
    <div class="card bg-white mb-3">
      <div class="card-body">
    <div class="row">
    <div class="col-md-2 mt-1">
        <img src="{{asset('uploads/logo')}}/{{$company->logo}}" alt="" class="img-fluid">
    </div>

    <div class="col-md-10">
    <a href="#" class="btn btn-success float-right">Create Job Agent</a>
    <h5>{{$company->cname}}</h5>
    <ul class="list-inline">
      <li class="list-inline-item">
      <span class="fas fa-map-marker-alt"></span>
      <span>{{$company->address}}</span>
      </li>

      <li class="list-inline-item">
      <span class="fas fa-clock"></span>
      <span>{{$company->website}}</span>
      </li>

      <li class="list-inline-item">
      <span class="fas fa-users"></span>
      <span>{{$company->size}}</span>
      </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
      </div>
</div>

  <div class="row">

    <div class="col-md-8 mt-3">
          @if(empty($company->cover_photo))
          <img src="{{asset('images/placeholder.jpg')}}" class="img-fluid"  alt="">
          @else
          <img src="{{asset('uploads/cover_photo')}}/{{$company->cover_photo}}" class="img-fluid"  alt="">
          @endif

  <div class="card mt-4">
    <div class="card-header">
      <h3>About Us</h3>
    </div>
    <div class="card-body">
      <p>
        {{$company->description}}
      </p>

    </div>
  </div>

<div class="card mt-4">
  <div class="card-header">
    <h3>In Short</h3>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-4 float-left">
        <p>Website:</p>
      </div>
      <div class="col-md-8 float-left">
        <a href="#">{{$company->website}}</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 float-left">
        <p>Address:</p>
      </div>
      <div class="col-md-8 float-left">
        <p>{{$company->address}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 float-left">
        <p>Size:</p>
      </div>
      <div class="col-md-8 float-left">
        <p>{{$company->size}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 float-left">
        <p>Turnover:</p>
      </div>
      <div class="col-md-8 float-left">
        <p>{{$company->turnover}} Million Euro in 2018</p>
      </div>
    </div>
</div>
</div>

</div>


<div class="col-md-4 col-lg-4 col-xl-4 recentJob">

  <div class="card">
    <div class="card-header text-center">
      <h3>Most Recent Job</h3>
    </div>
    @foreach($company->jobs as $job)
    <div class="card-body">
      <div class="row">
        <div class="col-md-3">
          <img src="{{asset('uploads/logo')}}/{{$company->logo}}" class="img-fluid mt-1"  alt="">
        </div>
        <div class="col-md-9">
          <ul class="list-inline">
            <li class="list-inline-item mb-2"><a href="#">{{$job->position}}</a></li>
            <li class="list-inline-item">
              <span class="fas fa-map-marker-alt"></span>
              <span>{{$company->address}}</span>
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



</div>






@endsection

<style>

main {
  height: calc(100vh - 85px);
  margin-top: 85px;
}




</style>







</style>
