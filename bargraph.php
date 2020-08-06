<!DOCTYPE html>
<html>
  <head>
    <title>ChartJS - BarGraph</title>
    <style type="text/css">
      #chart-container {
        width: 640px;
        height: auto;
      }
    </style>
	<link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
	<nav class="navbar navbar-dark bg-dark"></nav>
  <div class="container mt-5">
	
	<div class="row">
		<div class="col-lg-6">
		<button  VALUE="Back" onClick="history.go(-1);"><img src="image/btn2.png"></button>
		</div>
		<div class="col-lg-6">
		<button id="tt" onclick="window.location.href='http://localhost/project/bargraph2.php'"><img src="image/btn1.png"></button>
		</div>	
	</div>	
	
    <div id="chart-container">
		<div class="row">
			<div >
				
				<h1>Bar chat Results</h1>
				<div class="col-6">
				<canvas id="mycanvas"></canvas>
				
			</div>
		</div>		
    </div>
	
	
	</div>
    <!-- javascript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
	
	</div>
  </body>
</html>