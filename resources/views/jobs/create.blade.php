@extends('layouts.app')

@section('content')

<script>
	tinymce.init({
			selector:	'#descTextArea',
      menubar: false,
      plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor'
  ],
  toolbar: 'undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat'
	});

</script>

<script>
	tinymce.init({
			selector:	'#taskTextArea',
      menubar: false,
      plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor'
  ],
  toolbar: 'undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat'
	});

</script>

<script>
	tinymce.init({
			selector:	'#contactTextArea',
      menubar: false,
      plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor'
  ],
  toolbar: 'undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat'
	});

</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              Post a Job
            </div>

            <div class="card-body">


              <form action="{{route('job.store')}}" method="POST">@csrf


          <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">

              @error('title')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>



          <div class="form-group">
              <label for="category">Category</label>
              <select name="category" class="form-control">
                @foreach(App\Category::all() as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
              </select>
          </div>

          <div class="form-group">
              <label for="position">Position</label>
              <input type="text" name="position" class="form-control @error('position') is-invalid @enderror" value="{{ old('position') }}">
              @error('position')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>

          <div class="form-group">
              <label for="address">Address</label>
              <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}">
              @error('address')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>

          <div class="form-group">
              <label for="type">Type</label>
              <select class="form-control" name="type">
                <option value="Fulltime">
                  Fulltime
                </option>
                <option value="Parttime">
                  Parttime
                </option>
                <option value="Working Student">
                  Working Student
                </option>
                <option value="Internship">
                  Internship
                </option>
              </select>
          </div>

					<div class="form-group">
							<label for="description">Description</label>
							<textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}" id="descTextArea"></textarea>
							@error('description')
									<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
									</span>
							@enderror
					</div>



							<div class="form-group">
									<label for="role">Task</label>
									<textarea name="roles" class="form-control @error('roles') is-invalid @enderror" value="{{ old('roles') }}" id="taskTextArea"></textarea>
									@error('roles')
											<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
											</span>
									@enderror
							</div>

							<div class="form-group">
									<label for="role">Contact</label>
									<textarea name="contact" class="form-control @error('roles') is-invalid @enderror" value="{{ old('contact') }}" id="contactTextArea"></textarea>
									@error('contact')
											<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
											</span>
									@enderror
							</div>

          <div class="form-group">
              <label for="status">Status</label>
              <select class="form-control" name="status">
                <option value="1">
                  Live
                </option>
                <option value="2">
                  Draft
                </option>
              </select>
          </div>

          <div class="form-group">
              <label for="title">Last Date</label>
              <input type="date" name="last_date" class="form-control @error('last_date') is-invalid @enderror" value="{{ old('last_date') }}">
              @error('last_date')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>

          <div class="form-group">
              <button class="btn btn-dark" type="submit">Submit</button>
          </div>


          </form>

          </div>

          @if(Session::has('message'))
          <div class="alert alert-success">
            {{Session::get('message')}}
          </div>
          @endif

          </div>

        </div>
    </div>
</div>
@endsection
