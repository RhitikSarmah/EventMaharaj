<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css?family=Crimson+Text&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Admin Panel</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style type="text/css">
	.col-md-6{
		margin-top: 20px;
	}
	.nav-link{
    color:white;
  }
</style>

<body>


<ul class="nav bg-danger">
  <li class="nav-item">
    <a class="nav-link active" href={{asset(route('index'))}}>Home</a>
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

<div>
  <form action="{{route('search')}}">
   @csrf
      <input type="search" name="search" placeholder="Search Photo Name">
      <button type="submit">Search</button> 
  </form>
</div>

<!-- Events -->
<div class="container">
	<div class="row">
	@foreach($portfolio as $images)
		  <div class="col-md-6">
		      <img src="{{asset($images->image)}}" width="300" height="200">
		      <p>{{$images->name}}</p>
		      <form method="POST" action="{{asset(route('images.delete',$images->id))}}">
		      	@csrf
		      	<button type="submit" class="btn btn-danger btn-lg">Delete</button>
		      </form>
		  </div>
  @endforeach
</div>
</div>


</body>
</html>
