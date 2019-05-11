
@extends('layouts.app')

@section('content')
        <div class="container">
        <div class="row section-first" style="margin-right: 0; margin-left: 0;">

          <div class="row headerJob mr-2" style="margin-right: 0; margin-left: 0;">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
              @if(empty($company->logo))
              <img src="{{asset('images/placeholder.jpg')}}" class="img-fluid"  alt="">
              @else
                <img src="{{asset('uploads/logo')}}/{{$company->logo}}" class="img-fluid"  alt="">
                @endif
            </div>

          <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 mb-3">
            <h3 class="mb-5">{{$company->cname}}</h3>
            <ul class="list-inline">
              <li class="list-inline-item">
              <span class="fas fa-map-marker-alt"></span>
              <span>{{$company->city}}</span>
              </li>

              <!-- <li class="list-inline-item">
              <span class="fas fa-clock"></span>
              <span>{{$company->type}}</span>
              </li> -->
            </ul>
          </div>
          </div>

          <div class="row companyContainer">


            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 mt-5 descJob" style="margin-right: 0; margin-left: 0; padding-right: 0; padding-left: 0;">
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

              </div>
          <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 mt-5 descJob" style="margin-right: 0; margin-left: 0; padding-right: 0; padding-left: 0;">
            <div class="card" style="padding-right: 0; padding-left: 0;">
              <div class="card-header">
              <h3>About Us</h3>
            </div>
            <div class="card-body">
                <p>
                  {{$company->description}}
                </p>
                <!-- <p>
                  {{$company->description}}
                </p>
                <p>
                  {{$company->description}}
                </p> -->
                </div>
                </div>

            </div>

                                  <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 mt-5 descJob" style="margin-right: 0; margin-left: 0; padding-right: 0; padding-left: 0;">
                                    <div class="card" style="padding-right: 0; padding-left: 0;">
                                      <div class="card-header">
                                      <h3>About Us</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>
                                          {{$company->description}}
                                        </p>
                                        <!-- <p>
                                          {{$company->description}}
                                        </p>
                                        <p>
                                          {{$company->description}}
                                        </p> -->
                                        </div>
                                        </div>

                                    </div>




                                              <div class="col-md-4 col-lg-4 col-xl-4 card ml-4 recentJob text-center order-12">

                                                  <h3>Most Recent Job</h3>

                                                                        @foreach($company->jobs as $job)

                                                                          <ul class="list-inline">
                                                                            <li class="list-inline-item"><a href="#">{{$job->position}}</a></li>


                                                                              <li class="list-inline-item">  <img src="/images/placeholder.jpg" alt="" class="img-fluid mb-3 mt-3" style="width: 80px; height: 80px;"></li>
                                                                            <li class="list-inline-item">
                                                                              <span class="fas fa-map-marker-alt"></span>
                                                                              <span>{{$company->city}}</span>
                                                                            </li>
                                                                            <li class="list-inline-item">
                                                                              <span class="fas fa-calendar-alt"></span>
                                                                              <span>Published: {{$job->created_at->diffForHumans()}}</span>
                                                                            </li>

                                                                          </ul>
                                                                          <hr>


                                                                          @endforeach
                                                                      </div>





              </div>




</div>
</div>






@endsection

<style>

li {
  list-style: none;
  padding-right: 10px;

}

ul {
  padding-left: 0;

}


.companyContainer {
}

.headerJob {
  border-style: solid;
  border-width: 1px;
  width: 1050px;
  padding: 10px 20px;
  border-color: rgb(215, 214, 215);
}

.descJob {
  /* border-style: solid;
  border-width: 1px; */
  /* border-color: rgb(215, 214, 215); */

}







</style>
