@extends('layouts.nav-landing-page')

@section('content')
<div class="container">
    <div class="row">

      <h2>{{$categoryName->name}}</h2>
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

        {{$jobs->appends(Illuminate\Support\Facades\Input::except('page'))->links()}}
    </div>


</div>


@endsection

<style>

main {
  height: calc(100vh - 72.2px);
  margin-top: 72.2px;
}

</style>
