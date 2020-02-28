<!-- html -->
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
              <ul class="nav justify-content-end home-list">
                    <li class="nav-item">
                      <a class="nav-link active" href="#">gmail</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">insta</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">fb</a>
                    </li>
              </ul> 
              <div class="flex-center position-ref full-height home-links">
                  <div class="main-content">
                      <div class="title m-b-md">
                          EVENT MAHARAJ
                      </div>
                      <div class="links">
                          <a href="{{asset(route('about.us'))}}">ABOUT</a>|
                          <a href="{{asset(route('services'))}}">SERVICE</a>|
                          <a href="{{asset(route('portfolio'))}}">PORTFOLIO</a>
                      </div>
                  </div>
              </div>
        </div>
    </body>

</html>

<!-- css -->
 html, body {
                background-color: #fff;
                color: black;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 90vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .main-content{
               text-align: center; 
            }
            .title {
                font-size: 40px;
                font-family: 'Crimson Text', serif;
            }
            .links{
                color: white;
            }
            .links > a {
                color: white;
                padding-left: 10px;
                padding-right: 10px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                font-family: 'Cinzel', serif;
            }
            .links a:hover{
               color:#ffc107;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .home-links{
                background-color: rgba(0,0,0,0.5); 
                padding-bottom: 50px;
            }
            .home-list{
                padding-bottom: 30px; 
                background-color: rgba(0,0,0,0.5);
            }
           .slides{
                width:100%;
                height:100vh;
                background-size: cover;
                background-position: center center;
                animation:slide 40s infinite;
                background-repeat: no-repeat;
            }
            @keyframes slide{
                0%,100%{
                    background-image: url('../images/home3.jpg');
                }
                25%{
                    background-image: url('../images/home3.jpg');
                }
                25.01%{
                    background-image: url('../images/home3.jpg');
                }
                50%{
                    background-image: url('../images/home3.jpg');
                }
                50.01%{
                    background-image: url('../images/home3.jpg');
                }
                75%{
                    background-image: url('../images/home3.jpg'));
                }
                75.01%{
                    background-image: url('../images/home3.jpg');
                }
                100%{
                    background-image: url('../images/home3.jpg'));
                }
                
            }