<!DOCTYPE html>
<html>
<head>
<title>About Event Maharaj</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Crimson+Text&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('css/about.css')}}">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<body>

<!-- navbar -->
<div class="heading">
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column text-center">
	 <nav class="masthead mb-auto">
	    <div class="inner">
	      <img src="{{asset('images/logo.png')}}" width="25%">
	      <nav class="nav nav-masthead justify-content-center top-margin">
	        <a class="nav-link" href="{{asset(route('index'))}}">Homepage</a>
	        <a class="nav-link" href="{{asset(route('services'))}}">Services</a>
	        <a class="nav-link" href="{{asset(route('portfolio'))}}">Portfolio</a>
	      </nav>
	    </div>
	 </nav>
  </div>
</div>

<!-- carousel-->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="{{asset('images/about.jpg')}}" width="100%">
    </div>
  </div>
</div>

<!-- about -->
<div class="container">
  <div class="row justify-content-center text-center div-margin">
	<div class="col-md-6">
		<h1 class="font-cinzel">About Us</h1>
		<p class="line-spacing content-margin font-crimson style-font">India’s diversified culture & traditions gives us a new reason to celebrate everyday and all of us has the desire of celebrating in an elegant and a majestic manner. If you wish to create a special day that reflects you — we invite you to connect with Event Maharaj.

		Founded in 2018, by Isha Poddar, Shivam Poddar & Yash Poddar in Guwahati, Assam. Event Maharaj is a complete service provider and a professional event planner that specializes in private and social events. Be it a 1000+ Dinner Gala or a Small Intimate Private Party, we can take it all under our  brand. Event Maharaj prioritise tailoring the event content around your requirements and creating an event unique to you. We believe in peculiar, creative and interesting events. We aim to provide an end-to-end event management solution that enables the client to offload a significant part of the management process on to us and enjoy every bit of their event.</p>
		<h1 class="line-spacing content-margin font-dancing">We love events!</h1>
		<p class="line-spacing content-margin font-crimson style-font">Our commitment is to see each event passionately and personally, from start to finish while keeping in priority the goals, vision, budget and client's needs in mind at all times. 
		Let our team help you to create a be-spoke event and make it more interesting and memorable. The sky is the limit! Every event is a new beginning, a new challenge and we aim to fulfill your event making it ours. All you have to do is walk in with your requirements! We ensure to give it a shape and fill your celebration with bright hues and memories to be cherished for a lifetime.

		Contact our team for a hassle free event planning experience!</p>
	</div>
  </div>
</div>


<!-- footer -->
<footer class="container position-ref padding-footer text-center div-margin text-footer">
      <div class="row">
	      	<div class="col-md-4 font-crimson">
	      		Shivam Poddar 9435664461<br>
	      		Yash Poddar 9864470089<br>
	      		Isha Poddar 8282826722
	      	</div>
	      	<div class="col-md-4 footer-logo-margin">
	      		<img src="{{asset('images/logo.png')}}" width="80%">
	      	</div>
	      	<div class="col-md-4 font-crimson">
	      		At 1st floor, Hemprabha Kutir, Old Post Office Lane, Rehabari, A.K. Azad Road, <br> Guwahati-781008
	      	</div>
      </div>  
</footer>

<!-- homeparallex -->
<div class="slides parallex div-margin">
      <div class="parallex-rgba">
      	<div class="flex-center position-ref full-height">
          <div class="main-content">
              <div class="title m-b-md">
                  <img src="{{asset('images/logo1.png')}}" width="50%" >
              </div>
              <div class="links">
                  <a href="{{asset(route('about.us'))}}">ABOUT</a>|
                  <a href="{{asset(route('services'))}}">SERVICE</a>|
                  <a href="{{asset(route('portfolio'))}}">PORTFOLIO</a>
              </div>
          </div>
      </div>
      </div>
</div>

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
