@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your Job</div>

                <div class="card-body">
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
                        <td>
                          @if(empty(Auth::user()->company->logo))
                          <img src="{{asset('images/placeholder.jpg')}}" class="img-fluid"  alt="">
                          @else
                            <img src="{{asset('uploads/logo')}}/{{Auth::user()->company->logo}}" class="img-fluid"  alt="">
                            @endif



                        </td>
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
                          Apply</a>
                          <a class="btn btn-dark btn-sm" href="{{route('job.edit', [$job->id])}}">
                          Edit</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
