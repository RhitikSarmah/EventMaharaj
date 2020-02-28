<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style type="text/css">
  .nav-link{
    color:white;
  }
</style>
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