@extends('layouts.nav-landing-page')

@section('content')


<div class="container-fluid firstSection">
  <div class="row h-100  align-items-center">
    <div class="gambar-kiri col-lg-6 col-xl-6">
      <h5 class="ml-2 pl-1 font-roboto">We have <span class="redText">100.000</span> great job offers you deserve!</h5>
      <h1 class="ml-2 font-source">Easiest way to find your dream job</h1>
      <form action="{{route('alljobs')}}" method="GET">

      <div class="form-group row formGroup mt-5">
          <div class="col-xs-4 col-md-4 col-lg-4 col-xl-4">
              <input placeholder="Keyword or Company" type="text" name="title" class="form-control">
              <span style="position:absolute; right:20px;top:17px; color:#51b5da;" class="fas fa-search"></span>
          </div>


          <div class="col-xs-3 col-md-3 col-lg-3 col-xl-3">
              <input placeholder="City" type="text" name="address" class="form-control">
              <span style="position:absolute; right:20px;top:17px; color:#51b5da;" class="fas fa-map-marker-alt"></span>

          </div>

          <div class="form-group">
              <button type="submit" class="btn btn-primary searchBtn">Search</button>
          </div>
      </div>
      </form>
    </div>
    <div class="gambar-kanan col-lg-6 col-xl-6">

    </div>
  </div>
</div>




<div class="container">
  <div class="row headerJob mr-2 justify-content-center" style="margin-right: 0; margin-left: 0;">
    <div class="col-md-12">
      <h1 class="text-center font-source display-4">Jobs that might interest you</h1>
    </div>
  </div>
  <div class="row justify-content-center">

@foreach($jobs as $job)
      <div class="col-md-4 col-lg-4 col-xl-4 d-flex py-3">




<div class="card h-100 p-3 shadow card-hover">
  <div class="row">
<div class="col-md-4">
  <img class="img-fluid" src="{{asset('uploads/logo')}}/{{$job->company->logo}}" style="margin-top: calc(50% - 23.65px);">
  </div>
  <div class="col-md-8">

  <div class="card-block px-2 border-0">
    <a href="{{route('jobs.show', [$job->id,$job->slug])}}" class="card-title font-roboto cardText text-dark" style="text-decoration: none;">{{$job->position}}</a>
    <p class="card-text text-secondary">{{$job->company->cname}}</p>
    <i class="fas fa-calendar-alt" aria-hidden="true">&nbsp;{{$job->created_at->diffForHumans()}}</i>
    <i class="fas fa-map-marker-alt" aria-hidden="true">&nbsp;{{$job->address}}</i>
    <div class="">
      <a href="{{route('jobs.show', [$job->id,$job->slug])}}" class="btn btn-primary">Visit Company</a>
    </div>
    </div>
  </div>
</div>


</div>

      </div>
@endforeach



</div>
    </div>








<div class="container">
    <div class="row">
      <h1>Jobs that might interest you</h1>
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
  <h5 class="card-title text-secondary">{{str_limit($company->cname,20)}}</h5>
  <p class="card-text">{{str_limit($company->description,30)}}</p>
  <a href="{{route('company.index', [$company->id,$company->slug])}}" class="btn btn-primary">Visit Company</a>
  <button type="button" class="btn btn-primary">Primary</button>
</div>
</div>
    </div>

    @endforeach
  </div>

</div>
@endsection

<style>



.firstSection {
height: 100vh;
background-color: #fbfbfb;
background-position: right center;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
background-repeat: no-repeat;
/* background-attachment: fixed; */
}

.gambar-kanan {
  background: url(images/testscreen.svg);
background-repeat: no-repeat;
background-size: 85%;
background-position: bottom center;
height: 600px;


}

input.form-control {
   height:50px !important;
   border-radius: 10px !important;
   margin-left: 10px;
   position: relative;
}

.searchBtn {
   height:50px !important;
   border-radius: 10px !important;
   margin-left: 10px;
   width: 100px;
}

.gambar-kiri {
  right: -50px !important;

}

.gambar-kiri h5 {
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 1.3em;
}

.gambar-kiri h1 {
  font-family: 'Source Sans Pro', sans-serif;
  font-size: 5em;
}

.redText {
  color: rgb(231, 35, 35);
}

.font-roboto {
  font-family: 'Roboto Condensed', sans-serif !important;
}

.font-source {
  font-family: 'Source Sans Pro', sans-serif !important;

}

.cardText {
  font-size: 1.5em;
}

.card-hover:hover {
  box-shadow: 0 1.5rem 2rem rgba(0, 0, 0, 0.15) !important;
  border-left: 3px solid #51b5da;
  transition: all ease-in-out 300ms;
  cursor: pointer;
}
</style>
