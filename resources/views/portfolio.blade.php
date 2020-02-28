<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css?family=Crimson+Text&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Our Portfolio</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('css/portfolio.css')}}">
<body>

<!-- navbar -->
<div style="position:absolute; margin-left: 10px; margin-top: 10px;"><a href="{{asset(route('index'))}}"><img src="{{asset('images/logo.png')}}" width="30%" ></a></div>

<!-- Events -->
@foreach($portfolio as $images)
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="{{asset($images->image)}}">
      <img src="{{asset($images->image)}}" alt="{{asset($images->image)}}" width="600" height="400">
    </a>
  </div>
</div>
@endforeach

</body>
</html>
