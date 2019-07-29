@extends('layouts.nav-landing-page')

@section('content')


<div class="container firstSection">
  <div class="row h-75 align-items-center">
    <div class="gambar-kiri col-lg-6 col-xl-6">
      <h5 class="font-roboto">We have <span class="redText">100.000</span> great job offers you deserve!</h5>
      <h1 class="font-source">Easiest way to find your dream job</h1>
      <form action="{{route('alljobs')}}" method="GET">
        <div class="form-row align-items-center my-4">
          <div class="col-lg-5 my-1">
            <label class="sr-only" for="inlineFormInputName">Name</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-key"></i>
                </div>
              </div>
              <input placeholder="Keyword or Company" type="text" name="title" class="form-control">
            </div>
          </div>
          <div class="col-lg-5 my-1">
            <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-search"></i>
                </div>
              </div>
              <input placeholder="City" type="text" name="address" class="form-control">
            </div>
          </div>

          <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary searchBtn">Search</button>
          </div>
        </div>
      </form>
    </div>
    <div class="gambar-kanan col-lg-6 col-xl-6 h-75">

    </div>
  </div>
</div>





<div class="container py-5 my-5">
  <div class="section-header text-center">
    <h2 class="section-title">Browse Categories</h2>
    <p class="mb-5">Most popular categories of portal, sorted by popularity</p>
  </div>
  <div class="row justify-content-center text-center">
    <div class="col-lg-3 col-md-6 col-xs-12 f-category p-5 border border-white bg-info">
      <a href="browse-jobs.html">
        <div class="icon">
          <i class="fab fa-3x text-white mb-3 fa-python" style="width: 40px;"></i>
        </div>
        <h3 class="text-body">Python</h3>
        <p class="text-white m-0">(4286 jobs)</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-6 col-xs-12 f-category p-5 border border-white bg-info">
      <a href="browse-jobs.html">
        <div class="icon">
          <i class="fas fa-3x text-white mb-3 fa-database"></i>
        </div>
        <h3 class="text-body">Data Science</h3>
        <p class="text-white m-0">(2000 jobs)</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-6 col-xs-12 f-category p-5 border border-white bg-info">
      <a href="browse-jobs.html">
        <div class="icon">
          <i class="fab fa-3x text-white mb-3 fa-js"></i>
        </div>
        <h3 class="text-body">Javascript</h3>
        <p class="text-white m-0">(1450 jobs)</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-6 col-xs-12 f-category p-5 border border-white bg-info">
      <a href="browse-jobs.html">
        <div class="icon">
          <i class="fab fa-3x text-white mb-3 fa-java"></i>
        </div>
        <h3 class="text-body">Java</h3>
        <p class="text-white m-0">(5100 jobs)</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-6 col-xs-12 f-category p-5 border border-white bg-info">
      <a href="browse-jobs.html">
        <div class="icon">
          <i class="fas fa-3x text-white mb-3 fa-shield-alt"></i>
        </div>
        <h3 class="text-body">Data Security</h3>
        <p class="text-white m-0">(5079 jobs)</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-6 col-xs-12 f-category p-5 border border-white bg-info">
      <a href="browse-jobs.html">
        <div class="icon">
          <i class="fab fa-3x text-white mb-3 fa-react"></i>
        </div>
        <h3 class="text-body">React.js</h3>
        <p class="text-white m-0">(3235 jobs)</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-6 col-xs-12 f-category p-5 border border-white bg-info">
      <a href="browse-jobs.html">
        <div class="icon">
          <i class="fab fa-3x text-white mb-3 fa-laravel"></i>
        </div>
        <h3 class="text-body">Php/Laravel</h3>
        <p class="text-white m-0">(1800 jobs)</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-6 col-xs-12 f-category p-5 border border-white bg-info">
      <a href="browse-jobs.html">
        <div class="icon">
          <i class="far fa-3x text-white mb-3 fa-file-code"></i>
        </div>
        <h3 class="text-body">Web Developer</h3>
        <p class="text-white m-0">(4286 jobs)</p>
      </a>
    </div>
  </div>
</div>



<div class="container mb-5">
  <div class="row">

    <div class="col-lg-8 px-3">
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


          <div class="col-lg-4 px-3 mt-sm-5 mt-lg-0">
            <h2 class="mb-5 d-inline-block">Jobs Spotlight</h2>
            <div class="controls-top float-right d-inline-block">
              <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-2x fa-chevron-left"></i></a>
              <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-2x fa-chevron-right"></i></a>
              </div>
              <div id="multi-item-example" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  @foreach($spotlight as $job)
                  <div class="card p-3 carousel-item{{ $loop->first ? ' active' : '' }}">
                    <div class="card-body">
                      <div class="text-center mb-5">
                        <img src="{{asset('uploads/logo')}}/{{$job->company->logo}}" class="img-fluid">
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

                <div class="container fourthSection mt-5 mb-5a">
                  <div class="row h-100  align-items-center">
                    <div class="rightColumn col-lg-6 col-xl-6 h-100">

                    </div>
                    <div class="leftColumn col-lg-6 col-xl-6">
                      <h1 class="ml-2 font-source mb-5">Million of Jobs, Find the one that's right for you!</h1>
                      <h5 class="ml-2  font-roboto text-muted">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 600,000 companies worldwide. The right job is out there.</h5>
                    </div>
                  </div>
                </div>



                <div class="container-fluid fifthSection p-0">
                  <div class="row text-center no-gutters">
                    <div class="recruiter bg-success col-md-6">
                      <div class="content-inner my-3 py-5 text-white ">
                        <h5>I'm</h5>
                        <h3>Recruiter</h3>
                        <p>Post a job to tell us about your project. We'll quickly match you with <br> the right freelancers find place best.</p>
                        <a href="#" class="btn btn-light rounded" style="border-radius: 40px;">Post a Job</a>

                        <div class="img-thumb-left text-left position-absolute">
                          <i class="fas fa-7x text-light mb-3 fa-briefcase"></i>
                        </div>
                      </div>

                    </div>

                    <div class="jobseeker col-md-6 bg-info">
                      <div class="content-inner py-5 my-3 text-white">
                        <h5>I'm</h5>
                        <h3>Jobseeker!</h3>
                        <p>Search all the open positions on the web. We'll quickly match you with <br> the right job according to your criteria.</p>
                        <a href="#" class="btn btn-light rounded" style="border-radius: 40px;">Browser Jobs</a>

                        <div class="img-thumb-right text-right position-absolute">
                          <i class="fas fa-7x text-light mb-3 fa-user-tie"></i>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                @endsection

<style>
  .gambar-kanan {
    background: url(images/testscreen.svg);
    background-repeat: no-repeat;
    background-size: 100%;
    background-position: center;
  }
  .rightColumn {
    background: url(images/findjob.svg);
    background-repeat: no-repeat;
    background-size: 80%;
    background-position: center;
  }

  .img-thumb-left {
    bottom: 0;
    left: 30;
  }

  .img-thumb-right {
    bottom: 0;
    right: 30;
  }
</style>
