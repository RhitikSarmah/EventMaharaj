<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Event Maharaj</title>
         
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/brands.min.js">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
         <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
         <link href="https://fonts.googleapis.com/css?family=Crimson+Text&display=swap" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">

    </head>
    <body>

        <div class="slides">
              <div class="index">
                <ul class="nav justify-content-end home-list">
                    <li class="nav-item">
                      <a class="nav-link active" href="#"><img src="{{asset('images/mail.png')}}" width="30px"></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><img src="{{asset('images/INSTA.png')}}" width="30px"></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><img src="{{asset('images/FB.png')}}" width="30px"></a>
                    </li>
              </ul> 
              <div class="flex-center position-ref full-height home-links">
                  <div class="main-content">
                      <div class="title m-b-md">
                          <img src="{{asset('images/logo1.png')}}" width="50%" >
                      </div>
                      <div class="links home-nav">
                          <a href="{{asset(route('about.us'))}}">ABOUT</a>|
                          <a href="{{asset(route('services'))}}">SERVICE</a>|
                          <a href="{{asset(route('portfolio'))}}">PORTFOLIO</a>
                      </div>
                  </div>
              </div>
              </div>
        </div>
    </body>

</html>
