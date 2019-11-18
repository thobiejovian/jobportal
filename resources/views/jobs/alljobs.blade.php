@extends('layouts.nav-landing-page')

@section('content')
<div class="container">
    <div class="row">
      <form action="{{route('alljobs')}}" method="GET">

      <div class="form-inline">
          <div class="form-group">
              <label>Keyword&nbsp;</label>
              <input type="text" name="position" class="form-control">&nbsp;&nbsp;&nbsp;
          </div>
          <div class="form-group">
              <label>address</label>
              <input type="text" name="address" class="form-control">&nbsp;&nbsp;
          </div>
          <div class="form-group">
              <label>Employment &nbsp;</label>
              <select class="form-control" name="type">
                      <option value="">-select-</option>
                      <option value="Fulltime">fulltime</option>
                      <option value="Parttime">parttime</option>
                      <option value="Internship">internship</option>

                  </select>
                  &nbsp;&nbsp;
          </div>
          <!-- <div class="form-group">
              <label>category</label>
              <select name="category_id" class="form-control">
                  <option value="">-select-</option>

                      @foreach(App\Category::all() as $cat)
                          <option value="{{$cat->id}}">{{$cat->name}}</option>
                      @endforeach
                  </select>
                  &nbsp;&nbsp;
          </div> -->



          <div class="form-group">
              <button type="submit" class="btn btn-outline-success">Search</button>
          </div>
      </div>
      </form>
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
                View Jobs</a></td>
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
  height: calc(100vh - 120px);
  margin-top: 120px;
}

</style>
