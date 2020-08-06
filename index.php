<!DOCTYPE html>
 <html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <title>Flex - Responsive HTML Template</title>
    	<meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
Flex Template 
http://www.templatemo.com/tm-406-flex
-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/templatemo_style.css">


        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
		
		<script>
		
				* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

		.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

		.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

		</script>
    </head>
    <body>
       


        <div class="site-main" id="sTop">
            <div class="site-header">
                <div class="container">
                  
                </div> <!-- /.container -->
                <div class="main-header">
                    <div class="container">
                        <div id="menu-wrapper">
                            <div class="row">
                                <div class="logo-wrapper col-md-2 col-sm-2">
                                    <h1>
                                        <a href="#">Election</a>
                                    </h1>
                                </div> <!-- /.logo-wrapper -->
                                <div class="col-md-10 col-sm-10 main-menu text-right">
                                    <div class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></div>
                                    <ul class="menu-first">
                                        <li class="active"><a href="#">Home</a></li>
                                        <li>
								<?php echo '<a href="login1.php">login</a>';?></li>
                                     
										<!--<li><a href="#document">Presentaion</a></li>-->
										
                                       										 
                                        <li><?php echo '<a href="bargraph.php">Results</a>';?></li>                             
                                    </ul>                                    
                                </div> <!-- /.main-menu -->
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->                        
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->
            <div class="site-slider">
                <div class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
								
                                <div class="mySlides faded">
									<img src="image/q2.jpg" alt="">
								</div>
                                <div class="slider-caption visible-md visible-lg">
                                   <h2> Election<h2>
                                 </div>
                            
                                <div class="mySlides faded">
									<img src="image/q5.jpg" alt="">
								</div>
                                <div class="slider-caption visible-md visible-lg">
                                     <h2>Election</h2>
                                </div>
                            
                                <div class="mySlides faded">
									<img src="image/q3.jpg" alt="">
								</div>
									<div class="slider-caption visible-md visible-lg">
                                    <h2>Election</h2>
                                </div>
							</li>
						</ul>
					</div> <!-- /.flexslider -->
                </div> <!-- /.slider -->
			</div> <!-- /.site-slider -->
        </div> <!-- /.site-main -->
		
		<br>
		<div style="text-align:center">
									<span class="dot"></span> 
									<span class="dot"></span> 
									<span class="dot"></span> 
								</div>
				
	<script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("dot");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
		}
		slideIndex++;
		if (slideIndex > slides.length) {slideIndex = 1}    
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
			setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>
    </body>
</html>