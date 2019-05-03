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
              <td><img src="{{asset('images/placeholder.jpg')}}" width="80"></td>
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
