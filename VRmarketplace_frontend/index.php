<?php 
	session_start();
	if(isset($_GET['ln']) /*you can validate the link here*/){
    
	if($_GET['ln'] == 'es'){
		include 'es.php';
	}else if($_GET['ln'] == 'hi'){
		include 'hi.php';
	}else {
		include 'en.php';
	}
 }else{
	 include 'en.php';
 }
	


echo'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>'.VR.'</title>

	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
   
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">


</head><!--/head-->

<body class="homepage">

    <header id="header">


        <nav class="navbar navbar-inverse" role="banner">
            <div class="container-fluid">
                <div class="navbar-header title">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                 <a class="navbar-brand" href="index.html">'.VR.'</a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                       <li class="active" id="home"><a href="index.html">'.HM.'</a></li>
                        <li><a href="about-us.html">'.AU.'</a></li>

						<li><a href="services.html">'.SV.'</a></li>
                      <li><a href="download.html">'.DL.'</a></li>


                        <li><a href="blog.html">'.DB.'</a></li>
                        <li><a href="contact-us.html">'.CU.'</a></li>
 <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">'.TR.' <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
							<li><a href="index.php?ln=en">English</a></li>

                                <li><a href="index.php?ln=es">Spanish</a></li>
                                <li><a href="index.php?ln=hi">Hindi</a></li>

                            </ul>

                        </li>
<li><a href="logout.html">'.LO.'</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

    </header><!--/header-->

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">'.DS.'</h1>
                                    <h2 class="animation animated-item-2">'.ZO.'</h2>

                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">

                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Step into the adventure of landscape of imagination</h1>
                                    <h2 class="animation animated-item-2">The virtual world...</h2>

                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img2.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->


            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->


    




    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>'.QE.'</h2>
                            <p>'.SP.' </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/#conatcat-info-->



    <footer id="footer" class="midnight-blue ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 foot-middle">
                    &copy; 2016 <a target="_blank" href="" title="">'.VR.'</a>'.RI.'
                </div>

            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>'
?>