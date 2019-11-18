@extends('layouts.nav-landing-page')

@section('content')
{!! Charts::assets() !!}
<div class="container">
    <div class="row">
        <div class="col-md-6 my-auto">
        {!! $chart->render() !!}
        </div>

        <div class="col-md-6">
        {!! $categoryChart->render() !!}
        </div>

    </div>
</div>
@endsection

<style>

main {
  height: calc(100vh - 72.2px);
  margin-top: 72.2px;
}


/* .right-image-emp-jobs{
  background: url(../images/employerjob.svg);
  background-repeat: no-repeat;
  background-size: 80%;
  background-position: center;
  position:relative;
  height: 600px;
} */



</style>
