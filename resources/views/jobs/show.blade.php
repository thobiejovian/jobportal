@extends('layouts.app')

@section('content')
        <div class="container">
        <div class="row" style="margin-right: 0; margin-left: 0;">
          @if(Session::has('message'))
          <div class="alert alert-success">
            {{Session::get('message')}}
          </div>
          @endif
          <div class="row headerJob mr-2" style="margin-right: 0; margin-left: 0;">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <img src="/images/placeholder.jpg" alt="" class="img-fluid" style="width: 140px; height: 120px;">
            </div>

          <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 mb-3">
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
              <span>Published: {{$job->created_at->diffForHumans()}}</span>
              </li>
            </ul>
          </div>

          <div class="button-bar-container col-md-4 col-lg-4 col-xl-4">

            @if(Auth::check()&&Auth::user()->user_type=='jobseeker')
            @if(!$job->checkApplication())
            <apply-component :jobid={{$job->id}}></apply-component>
               @endif

          </div>
          <div class="button-bar-container col-md-4 col-lg-4 col-xl-4" >
               <favourite-component :jobid={{$job->id}} :favourited={{$job->checkSaved()?'true':'false'}}></favourite-component>
               @endif
          </div>
          <div class="button-bar-container col-md-2 col-lg-2 col-xl-2">
               <button class="btn btn-info shareBut  btn-block"><i class="fas fa-share-alt"></i></button>
          </div>
          <div class="button-bar-container col-md-2 col-lg-2 col-xl-2" >
               <button class="btn btn-info printBut  btn-block"><i class="fas fa-print"></i></button>
          </div>
          </div>

          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">
            <div class="card">
              <div class="card-body">
                <img src="/images/placeholder.jpg" alt="" class="img-fluid mb-3 mt-3" style="width: 140px; height: 100px;">
                <a href="{{route('company.index', [$job->company->id, $job->company->slug])}}"><h2>{{$job->company->cname}}</h2></a>
                <a href="#" class="btn btn-info btn-block mb-1">Company Profile</a>
                <a href="#" class="btn btn-info btn-block">Jobs</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row  mt-5 descJob" style="margin-right: 0; margin-left: 0;">
          <div class="col-md-8 col-lg-8 col-xl-8">
                    <p>
                      <h3>Description</h3>
                      {{$job->description}}
                    </p>
          </div>
        </div>

        <div class="row  mt-5 qualJob" style="margin-right: 0; margin-left: 0;">
          <div class="col-md-8 col-lg-8 col-xl-8">
                    <p>
                      <h3>Duties</h3>
                      {{$job->roles}}</p>


          </div>
        </div>

<!-- buat di lain hari -->
<!-- @if(Auth::check()&&Auth::user()->user_type=='jobseeker')
<button type="button" name="button"></button>
@endif -->

        </div>
@endsection

<style>

li {
  list-style: none;
  padding-right: 20px;

}

ul {
  padding-left: 0;

}

.shareBut {
  min-height: 36px;
}

.printBut {
  min-height: 36px;
}

.headerJob {
  border-style: solid;
  border-width: 1px;
  width: 800px;
  padding: 10px 20px;
  border-color: rgb(215, 214, 215);
}

.descJob {
  border-style: solid;
  border-width: 1px;
  width: 800px;
  padding: 10px 20px;
  border-color: rgb(215, 214, 215);
}


.qualJob {
  border-style: solid;
  border-width: 1px;
  width: 800px;
  padding: 10px 20px;
  border-color: rgb(215, 214, 215);
}



</style>
