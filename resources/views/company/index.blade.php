
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
      <span class="fas fa-calendar-alt"></span>
      <span>{{$company->phone}}</span>
      </li>




    </ul>
    </div>
    </div>
    </div>
    </div>
      </div>
</div>

  <div class="row">


    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 mt-5 descJob">
      <div class="card" style="padding-right: 0; padding-left: 0;">
        <div class="card-body">
          @if(empty($company->cover_photo))
          <img src="{{asset('images/placeholder.jpg')}}" class="img-fluid"  alt="">
          @else
          <img src="{{asset('uploads/cover_photo')}}/{{$company->cover_photo}}" class="img-fluid"  alt="">
          @endif

          <!-- <p>
          {{$company->description}}
        </p>
        <p>
        {{$company->description}}
      </p> -->
    </div>
  </div>

  <div class="card" style="padding-right: 0; padding-left: 0;">
    <div class="card-header">
      <h3>About Us</h3>
    </div>
    <div class="card-body">
      <p>
        {{$company->description}}
      </p>

</div>
</div>

<div class="card" style="padding-right: 0; padding-left: 0;">
  <div class="card-header">
    <h3>About Us</h3>
  </div>
  <div class="card-body">
    <p>
      {{$company->description}}
    </p>

</div>
</div>

</div>


<div class="col-md-4 col-lg-4 col-xl-4 mt-5 recentJob text-center">

  <div class="card">
    <div class="card-header">
      <h3>Most Recent Job</h3>
    </div>
    @foreach($company->jobs as $job)
    <div class="card-body">






      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">{{$job->position}}</a></li>


        <li class="list-inline-item">  <img src="/images/placeholder.jpg" alt="" class="img-fluid mb-3 mt-3" style="width: 80px; height: 80px;"></li>
        <li class="list-inline-item">
          <span class="fas fa-map-marker-alt"></span>
          <span>{{$company->address}}</span>
        </li>
        <li class="list-inline-item">
          <span class="fas fa-calendar-alt"></span>
          <span>Published: {{$job->created_at->diffForHumans()}}</span>
        </li>

      </ul>



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
