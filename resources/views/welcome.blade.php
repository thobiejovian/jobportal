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





<div class="container" style="height: 700px;">
<div class="section-header text-center">
<h2 class="section-title">Browse Categories</h2>
<p class="mb-5">Most popular categories of portal, sorted by popularity</p>
</div>
<div class="row justify-content-center text-center">
<div class="col-lg-3 col-md-6 col-xs-12 f-category p-3">
<a href="browse-jobs.html">
<div class="icon bg-info">
<i class="fab fa-python" style="width: 40px;"></i>
</div>
<h3 class="text-body">Python</h3>
<p>(4286 jobs)</p>
</a>
</div>
<div class="col-lg-3 col-md-6 col-xs-12 f-category p-3">
<a href="browse-jobs.html">
<div class="icon bg-info">
<i class="fas fa-database"></i>
</div>
<h3 class="text-body">Data Science</h3>
<p>(2000 jobs)</p>
</a>
</div>
<div class="col-lg-3 col-md-6 col-xs-12 f-category p-3">
<a href="browse-jobs.html">
<div class="icon bg-info">
<i class="fab fa-js"></i>
</div>
<h3 class="text-body">Javascript</h3>
<p>(1450 jobs)</p>
</a>
</div>
<div class="col-lg-3 col-md-6 col-xs-12 f-category p-3">
<a href="browse-jobs.html">
<div class="icon bg-info">
<i class="fab fa-java"></i>
</div>
<h3 class="text-body">Java</h3>
<p>(5100 jobs)</p>
</a>
</div>
<div class="col-lg-3 col-md-6 col-xs-12 f-category p-3">
<a href="browse-jobs.html">
<div class="icon bg-info">
<i class="fas fa-shield-alt"></i>
</div>
<h3 class="text-body">Data Security</h3>
<p>(5079 jobs)</p>
</a>
</div>
<div class="col-lg-3 col-md-6 col-xs-12 f-category p-3">
<a href="browse-jobs.html">
<div class="icon bg-info">
<i class="fab fa-react"></i>
</div>
<h3 class="text-body">React.js</h3>
<p>(3235 jobs)</p>
</a>
</div>
<div class="col-lg-3 col-md-6 col-xs-12 f-category p-3">
<a href="browse-jobs.html">
<div class="icon bg-info">
<i class="fab fa-laravel"></i>
</div>
<h3 class="text-body">Php/Laravel</h3>
<p>(1800 jobs)</p>
</a>
</div>
<div class="col-lg-3 col-md-6 col-xs-12 f-category p-3">
<a href="browse-jobs.html">
<div class="icon bg-info">
<i class="far fa-file-code"></i>
</div>
<h3 class="text-body">Web Developer</h3>
<p>(4286 jobs)</p>
</a>
</div>
</div>
</div>



<div class="container">
    <div class="row">

      <div class="col-md-7">
      <h2 class="mb-5">Recent Jobs</h2>
      <div class="thirdSection">
        <table class="table table-hover">
          <tbody>
             @foreach($jobs as $job)
            <tr>
              <td><img src="{{asset('uploads/logo')}}/{{$job->company->logo}}" width="80"></td>
              <td>
              <span style="font-size: 1.3em;">{{$job->position}}</span>
              <ul class="list-inline mt-3">
              <li class="list-inline-item text-muted"><i class="fa fa-map-marker-alt" aria-hidden="true"></i>&nbsp;&nbsp;{{$job->address}}</li>
              <li class="list-inline-item text-muted"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;{{$job->created_at->diffForHumans()}}</li>
              </ul>
            </td>

            <td>
              @if($job->type=='Fulltime')
              <a class="btn btn-success btn-sm" href="{{route('jobs.show', [$job->id,$job->slug])}}">
                {{$job->type}}</a>
              @elseif($job->type=='Parttime')
              <a class="btn btn-danger btn-sm" href="{{route('jobs.show', [$job->id,$job->slug])}}">
                  {{$job->type}}</a>
              @else
              <a class="btn btn-warning btn-sm" href="{{route('jobs.show', [$job->id,$job->slug])}}">
                  {{$job->type}}</a>
              @endif


            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
        <div class="mt-5">
          <a href="{{route('alljobs')}}"><button class="btn btn-info btn-lg" style="width: 100%;">Browse All Jobs</button></a>
        </div>
    </div>


    <div class="col-md-4 ml-3">
    <h2 class="mb-5">Jobs Spotlight</h2>
    <div class="controls-top float-right">
    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
    </div>
    <div id="multi-item-example" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
      @foreach($spotlight as $job)
      <div class="card p-3 carousel-item{{ $loop->first ? ' active' : '' }}">
        <div class="card-body">
          <div class="text-center mb-5">
            <img src="{{asset('uploads/logo')}}/{{$job->company->logo}}" width="200">
          </div>
          <h3>{{$job->position}}</h3>

          <ul class="list-inline">
            <li class="list-inline-item"><i class="fa fa-map-marker-alt" aria-hidden="true"></i>&nbsp;{{$job->company->cname}}</li>
            <li class="list-inline-item"><i class="fa fa-map-marker-alt" aria-hidden="true"></i>&nbsp;{{$job->address}}</li>
            <span>
             @if($job->type=='Fulltime')
           <a class="btn btn-success btn-sm" href="{{route('jobs.show', [$job->id,$job->slug])}}">
             {{$job->type}}</a>
           @elseif($job->type=='Parttime')
           <a class="btn btn-danger btn-sm" href="{{route('jobs.show', [$job->id,$job->slug])}}">
               {{$job->type}}</a>
           @else
           <a class="btn btn-warning btn-sm" href="{{route('jobs.show', [$job->id,$job->slug])}}">
               {{$job->type}}</a>
           @endif
         </span>
          </ul>
          <p>{{str_limit($job->description,200)}}</p>
          <a class="btn btn-info" href="{{route('jobs.show', [$job->id,$job->slug])}}">
              View Jobs</a>
        </div>
      </div>
      @endforeach
    </div>
    </div>
    </div>
    </div>
    </div>

  <div class="container fourthSection mt-5">
      <div class="row h-100  align-items-center">
        <div class="rightColumn col-lg-6 col-xl-6">

        </div>
        <div class="leftColumn col-lg-6 col-xl-6">
          <h1 class="ml-2 font-source mb-5">Million of Jobs, Find the one that's right for you!</h1>
          <h5 class="ml-2  font-roboto text-muted">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 600,000 companies worldwide. The right job is out there.</h5>
        </div>
      </div>
    </div>



    <div class="container-fluid fifthSection">
    <div class="row text-center h-100">
          <div class="recruiter col-md-6">
            <div class="content-inner mt-5 p-3 text-white">
              <h5>I'm</h5>
              <h3>Recruiter</h3>
              <p>Post a job to tell us about your project. We'll quickly match you with <br> the right freelancers find place best.</p>
              <a href="#" class="btn btn-light rounded" style="border-radius: 40px;">Post a Job</a>
            </div>
          <div class="img-thumb">
          <i class="fas fa-briefcase"></i>
          </div>
          </div>

            <div class="jobseeker col-md-6">
            <div class="content-inner p-3 mt-5 text-white">
              <h5>I'm</h5>
              <h3>Jobseeker!</h3>
              <p>Search all the open positions on the web. We'll quickly match you with <br> the right job according to your criteria.</p>
              <a href="#" class="btn btn-light rounded" style="border-radius: 40px;">Browser Jobs</a>
              </div>
            <div class="img-thumb">
            <i class="fas fa-user-tie"></i>
            </div>
            </div>
</div>
</div>
@endsection

<style>


.fifthSection {
    height: 30vh;
}

.recruiter {
  background-color: rgb(67, 168, 77);

}

.content-inner {

}

.jobseeker {
  background-color: rgb(39, 43, 108);

}
.recruiter .img-thumb i {
  position: absolute;
  left: 40;
  bottom: 0;
  font-size: 6em;
  color: rgba(255, 255, 255, 0.6);
}

.jobseeker .img-thumb i {
  position: absolute;
  right: 40;
  bottom: 0;
  font-size: 6em;
  color: rgba(255, 255, 255, 0.6);
}

table th, .table td {
    padding: 2rem !important;
}

.thirdSection {
  height: 600px;
  overflow-y: scroll;
}

.controls-top {
  margin: -76px -1px 0 0px;
}

.controls-top i {
  font-size: 1.5em;
}


.f-category .icon{
width: 64px;
height: 64px;
display: inline-block;
border-radius: 50%;
margin-top: 5px;
margin-bottom: 15px;
}

.f-category{
border: 1px solid rgba(224, 231, 224, 1);
}

.f-category .icon i {
    font-size: 30px;
    color: #fff;
    line-height: 64px;
}

.f-category a:hover{
    text-decoration: none;
    /* width: 70px;
    height: 70px;
    transition: all ease-in-out 200ms; */
}

.firstSection {
height: 100vh;
background-color: #fbfbfb;
/* background-attachment: fixed; */
}

.gambar-kanan {
background: url(images/testscreen.svg);
background-repeat: no-repeat;
background-size: 75%;
background-position: center;
height: 600px;

}

.gambar-kiri {
  right: -150px;
}

.form-control {
   height:50px !important;
   border-radius: 10px !important;
   margin-left: 10px;
   position: relative;
   width: 250px;
}

.searchBtn {
   height:50px !important;
   border-radius: 10px !important;
   margin-left: 10px;
   width: 100px;
}



.gambar-kiri h5 {
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 1.1em;
}

.gambar-kiri h1 {
  font-family: 'Source Sans Pro', sans-serif;
  font-size: 4em;
  width: 60%;
}

.redText {
  color: rgb(231, 35, 35);
}

.fourthSection {
height: 60vh;
background-color: #fbfbfb;
/* background-attachment: fixed; */
}

.rightColumn {
  background: url(images/findjob.svg);
  background-repeat: no-repeat;
  background-size: 80%;
  background-position: center;
  height: 500px;

}




.leftColumn h1 {

    font-size: 2.5em;
}

.leftColumn h5 {

    font-size: 1.2em;
}

.list-inline li{
  font-size: 1em;
}

.list-inline p {
  font-size: 1.1em;
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
