<?php 
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
			<!--favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="favicon/manifest.json">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
	<title>Look Ma No Hands</title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <script src="js/respond.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<script src="js/validator.js"></script>
	<style>
	.emailErr{
		font-size   : 8pt;
		color 		: red;
	}
	</style>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
		<script src="../src/jquery.boilerplate.js"></script>
    
</head>
<body>
	
		 <nav class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="index.php">Save Lives!!</a>
	        </div>
	        <div id="navbar" class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
	            <li class="active"><a href="index.php">Home</a></li>
	            <li><a href="donate.php">Donate</a></li>
	            <li><a href="volunteer.php">Volunteer</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>

	    <div id="element"></div>
		<script>
			$( function() {
				$( "#element" ).defaultPluginName( {
					propertyName: "a custom value"
				} );
			} );
		</script>

		<p id="demo"></p>

		<script>
		var d = new Date();
		document.getElementById("demo").innerHTML = d.toString();
		</script>



		<div class="container">
			<div class="row">
		    <div class="jumbotron">
			  <h1>Save the World.. Become a Crossing Guard!!</h1>
			  <p>Adult School Crossing Guard Guidelines

				Adult school crossing guards play an important role in the lives of children who walk or bicycle to school. They help children safely cross the street at key locations. They also remind drivers of the presence of pedestrians. The presence of adult crossing guards can lead to more parents feeling comfortable about their children walking or bicycling to school. While the primary role of an adult school crossing guard is to guide children safely across the street, children also remain responsible for their own safety. In this manner, a guard plays another key function — a role model helping children develop the skills necessary to cross streets safely at all times.
				</p>
			  <p><a class="btn btn-primary btn-lg" href="http://www1.nyc.gov/nyc-resources/service/2799/become-a-crossing-guard" role="button">Learn more</a></p>
			</div>
		</div>


		<div class="page-header">
  <h1>Every Action has a Reaction <small>Click on icon below for more information!</small></h1>
</div>
		<hr />
            	<div class="row">
            		<div class="col-md-4" style="text-align: center;"><a href="http://auto.howstuffworks.com/car-driving-safety/accidents-hazardous-conditions/10-safe-driving-tips.htm" title="Driving"><img src="images/motorist_120x120.gif" alt="Driving" border="0" style="width: 220px; height: 220px;" /><br /><strong>Driving</strong></a></div>
            		<div class="col-md-4" style="text-align: center;"><a href="http://exchange.aaa.com/safety/bicycle-safety/riding-skills-tips/" title="Biking"><img src="images/animated-cycling-image-0019.gif" alt="Biking" border="0" style="width: 220px; height: 220px;" /><br /><strong>Biking</strong></a></div>
            		<div class="col-md-4" style="text-align: center;"><a href="https://www.youtube.com/watch?v=i1y4N2htIP4" title="Walking"><img src="images/wjnpazqsqoxlgpu2pphu.gif" alt="Walking" border="0" style="width: 220px; height: 220px;" /><br /><strong>Walking</strong></a></div>
            	</div>
         <hr />  


		<div class="container" style="border-style:solid; color: rgb(157, 229, 179); border-width:1;>
		  <form class="form-inline">
			  <div class="form-group">
			    <label for="exampleInputName2">Name</label>
			    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail2">Email</label>
			    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
			  </div>
			  <button type="submit" class="btn btn-default">Volunteer Submit</button>
			</form>
		</div>

		<div>
			<form action="process.php" method="get">
		<table>
			<tr>
				<td>Email</td>
				<td>
					<input type="text" name="email" id="email" placeholder="Enter your email address"/>
					<br>
					<span class="emailErr"></span>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="auth" id="auth" placeholder="Enter password"/></td>
			</tr>
			<tr>
				<td>Zip Code</td>
				<td>
					<input type="text" name="zip" id="zip" placeholder="ex 12345" maxlength="5">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="button" value="Submit" id="formBtn">
				</td>
			</tr>
		</table>
	</form>

			
		</div>
		



















	     <div class="row">
    	<footer class="col-sm-12">
    		<p class="text-center">&copy; Copyright 2016</p>
    	</footer>
    </div>

<!-- javascript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	
</body>
</html>