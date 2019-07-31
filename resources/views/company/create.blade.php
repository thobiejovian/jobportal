@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-3 left-sidebar">
			<ul class="list-group">
				<li class="list-group-item"><a href="#" class="text-success">Company Logo</a></li>
				<li class="list-group-item">list</li>
				<li class="list-group-item">list</li>
				<li class="list-group-item">list</li>
			</ul>
		</div>
		<div class="col-md-9 right-sidebar">
			<div class="card">
				<div class="card-header">
					<h3>Your Company Logo</h3>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-3">
							@if(empty(Auth::user()->company->logo))
			        <img src="{{asset('images/placeholder.jpg')}}" class="img-fluid"  alt="">
			        @else
			          <img src="{{asset('uploads/logo')}}/{{Auth::user()->company->logo}}" class="img-fluid"  alt="">
			        @endif
						</div>

					<div class="col-md-8">
						<form action="{{route('employer.logo')}}" method="POST" enctype="multipart/form-data">@csrf
							<div class="input-group">
  <div class="form-group">
    <input type="file" class="form-control-file" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" name="logo">
    
			<button class="btn btn-info" type="submit">Upload</button>
  </div>

</div>
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- <div class="container">
	<div class="row">


      <div class="col-md-2 text-center">
        @if(empty(Auth::user()->company->logo))
        <img src="{{asset('images/placeholder.jpg')}}" class="img-fluid"  alt="">
        @else
          <img src="{{asset('uploads/logo')}}/{{Auth::user()->company->logo}}" class="img-fluid"  alt="">
          @endif
  <form action="{{route('employer.logo')}}" method="POST" enctype="multipart/form-data">@csrf

    <div class="card mt-5">
      <div class="card-header">Update Company Logo
      </div>
      <div class="card-body">
				<div class="input-group">
  			<div class="input-group-prepend">

  	</div>
  	<div class="custom-file">
    	<input type="file" class="form-control custom-file-input" name="logo">
    	<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
			<button class="btn btn-info" type="submit">Upload</button>
  	</div>
				</div>
      </div>
    </div>
      </div>
  </form>



      <div class="col-md-5 col-lg-5 col-xl-5 personal-info">
        <div class="card">


        <div class="card-header">
        <h3>Update Your Profile</h3>
        </div>

      <form action="{{route('company.store')}}" method="POST">@csrf

        <div class="card-body">

          <div class="form-group">
            						<label class="control-label">Address</label>

            					  <input class="form-control" type="text" name="address" value="{{Auth::user()->company->address}}">

          </div>

          <div class="form-group">
                        <label class="control-label">Phone</label>

                        <input class="form-control" type="text" name="phone" value="{{Auth::user()->company->phone}}">

          </div>

          <div class="form-group">
                        <label class="control-label">Website</label>

                        <input class="form-control" type="text" name="website" value="{{Auth::user()->company->website}}">

          </div>

          <div class="form-group">
            						<label class="control-label">Slogan</label>

            					  <input class="form-control" type="text" name="slogan" value="{{Auth::user()->company->slogan}}">

          </div>


          <div class="form-group">
            						<label class="control-label">Description</label>

            					  <textarea class="form-control" type="text" name="description" value="{{Auth::user()->company->description}}"></textarea>

          </div>




          <div class="form-group">
          <button class="btn btn-info" type="submit">Update</button>

          </div>
          </div>
          </div>

					@if(Session::has('message'))
					<div class="alert alert-success">
						{{Session::get('message')}}
					</div>
					@endif
				</div>

</form>

       <div class="col-md-4 col-lg-4 col-xl-4">

        <div class="card text-center">
       <div class="card-header">
         <h4>Your Company Information</h4>
       </div>

          <div class="card-body">
              <p>Company Name: {{Auth::user()->company->cname}}</p>
              <p>Phone: {{Auth::user()->company->phone}}</p>
              <p>Website: <a href="{{Auth::user()->company->website}}">{{Auth::user()->company->website}}</a></p>
              <p>Slogan: {{Auth::user()->company->slogan}}</p>
							<p>Company Page: <a href="company/{{Auth::user()->company->slug}}">View</a> </p>



							             @if(!empty(Auth::user()->company->cover_photo))
							            <p><a href="{{Storage::url(Auth::user()->company->resume)}}">Resume</a></p>

							            @else
							            <p>Please upload Resume</p>
							            @endif
            </div>
        </div>

   <form action="{{route('cover.photo')}}" method="POST" enctype="multipart/form-data">@csrf
        <div class="card text-center mt-4">
       <div class="card-header">
         <h4>Update Your Cover Photo</h4>
       </div>

          <div class="card-body upload-btn-wrapper1">


              <input class="mt-4" type="file" name="cover_photo"/>

              <button class="btn btn-info mt-4">Update new Cover Photo</button>

            </div>
        </div>
</form>


  </div>
</div> -->

@endsection



<style>



</style>
