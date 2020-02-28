<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style type="text/css">
  .nav-link{
    color:white;
  }
</style>
<ul class="nav bg-danger">
  <li class="nav-item">
    <a class="nav-link active" href="{{asset(route('index'))}}">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{asset(route('photo.upload'))}}">Photo Upload</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{asset(route('admin.panel.view'))}}">Admin Panel</a>
  </li>
     <li class="nav-item">
     <a class="nav-link" href="{{ route('logout') }}"
         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
  </li>
</ul>
<div class="row justify-content-center">
  @if(Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{Session::get('success')}}
  </div>
  @endif
  <div class="col-md-6">
    <form method="POST" action="{{route('photo.uploaded')}}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" name="name">
        <small class="text-danger">{{$errors->first('name')}}</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Image</label>
        <input type="file" class="form-control" name="image">
        <small class="text-danger">{{$errors->first('image')}}</small>
      </div>
      <button type="submit" class="btn btn-danger">Submit</button>
    </form>
  </div>
</div>