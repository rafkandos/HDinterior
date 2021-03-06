<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HD Interior - Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="shortcut icon" href="{{asset('admin/img/logo.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('admin/img/logo.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <style type="text/css">
        .popup{
            /*width: 900px;*/
            margin: auto;
            text-align: center;
        }
        .popup img{
            /*width: 200px;
            height: 200px;*/
            cursor: pointer;
            transition: 1.4s;
        }
        .showz{
            z-index: 1100;
            display: none;
            
        }
        .showz .overlay{
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,.66);
            position: absolute;
            top: 0;
            left: 0;
        }
        .showz .overlay .closes{
            float: right;
            font-size: 40px;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            padding: 15px;
            cursor: pointer;
            /*text-shadow: 0 1px 0 #fff;
            filter: alpha(opacity=20);
            opacity: .2;*/
        }
        .showz .img-show{
            /*width: 600px;
            height: 400px;*/
            width: 60%;
            height: 75%;
            background: #FFF;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            overflow: hidden
        }
        .img-show span{
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 99;
            cursor: pointer;
        }
        .img-show img{
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }
        .boxes{
            width: 40px;
            height: 40px;
            /*color: transparent;
            border: 2px solid #fff;
            border-radius: 10px;*/
            margin-top: 10px;
            cursor: pointer;
        }
        #bower{
            display: none;
        }
        #myBtn {
          display: none; /* Hidden by default */
          position: fixed; /* Fixed/sticky position */
          bottom: 20px; /* Place the button at the bottom of the page */
          right: 30px; /* Place the button 30px from the right */
          z-index: 99; /* Make sure it does not overlap */
          border: none; /* Remove borders */
          outline: none; /* Remove outline */
          background-color: #2a54f5; /* Set a background color */
          color: white; /* Text color */
          cursor: pointer; /* Add a mouse pointer on hover */
          padding: 15px; /* Some padding */
          border-radius: 7px; /* Rounded corners */
          font-size: 18px; /* Increase font size */
        }
        @media screen and (max-width: 600px) {
            #bower{
                display: block;
            }
        }
    </style>

  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    <a class="navbar-brand" href="index.html">
            <!-- <img src="images/logo.png" class="img-fluid" width="130px">  -->
            <span style="color: #ff0000">HD</span> interior
        </a>
	    <a class="navbar-toggler text-dark" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span>
	    </a>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="/" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="home#about" class="nav-link">About</a></li>
	        	<li class="nav-item active"><a href="#" class="nav-link">Project</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="home-slider js-fullheight owl-carousel">
      <div class="slider-item js-fullheight" style="background-image:url(images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center">
            	<h1 class="mb-3 mt-5 bread">Our Project</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Project</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="section-wrapper portfolio-section mt-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-5 mt-3">
                    <div class="section-title text-uppercase font-weight-bold text-center">
                        <h2 class="font-weight-bold">what we've done</h2>
                        <hr style="background-color:red; margin-top: -5px; height:1.5px; width:100px;">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="row mt-4">
                      @foreach($type as $t)
                        <div class="col-md-4 mt-3">
                          <a href="project/{{$t->type_name}}">
                            <img src="data_file/{{$t->image}}" alt="{{$t->type_name}}" style="width:100%; border-radius:20px;">
                          </a>
                        </div>
                      @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section" style="margin-top:100px;">
      <div class="container">
        <div class="row">
          <div class="col-md">
            <div class="ftco-footer-widget">
              <h2 class="ftco-heading-2 font-weight-bold">
                <span style="color:red;">HD</span> Interior
              </h2>
              <p style="margin-top:-20px;">
                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
              </p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2 font-weight-bold">Links</h2>
              <ul class="list-unstyled" style="margin-top:-20px;">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 font-weight-bold">Services</h2>
              <ul class="list-unstyled" style="margin-top:-20px;">
                <li><a href="#">Architectural Design</a></li>
                <li><a href="#">Interior Design</a></li>
                <li><a href="#">Exterior Design</a></li>
                <li><a href="#">Lighting Design</a></li>
                <li><a href="#">AutoCAD Service</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2 font-weight-bold">Have a Questions?</h2>
            	<div class="block-23 mb-3" style="margin-top:-20px;">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    <div class="showz">
        <div class="overlay" onclick="imgClose()">
            <span class="closes">&times;</span>
        </div>
        <div class="img-show">
            <img src="">
        </div>
    </div>

    <!-- <a href="#desc" id="myBtn" title="Go to top">
        <img src="img/download.png" style="width: 20px;-ms-transform: rotate(20deg); /* IE 9 */
            -webkit-transform: rotate(20deg); /* Safari 3-8 */
            transform: rotate(180deg);">
    </a> -->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>