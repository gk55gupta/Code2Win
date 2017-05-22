<?php define("title","Code2Win");  ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php  echo title;  ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
	<link rel="stylesheet" type="text/css" href="css/Exstyle.css">
</head>
<!---------------------- Start of Web Page---------------------->   
<body>
    <?php  
        include('includes/navbar.php');
        include('includes/main-content.php');
    ?>
    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-8">
				<h2>About Us?</h2>
			  <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4> 
			  <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit. Utquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			  <button class="btn btn-primary btn-lg">Get in Touch</button>
			</div>
			<div class="col-sm-4 text-center">
				<span class="glyphicon glyphicon-signal logo"></span>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-grey">
		<div class="row">
			<div class="col-sm-4 text-center padding-0">
				<span class="glyphicon glyphicon-globe logo"></span>
			</div>
			<div class="col-sm-8">	
				<h2>Our Values</h2>
			  <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h4> 
			  <p><strong>VISION:</strong> Our vision consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
	</div>
	</div>
	<div class="container-fluid text-center">
		<h2>SERVICES</h2>
  	<h4>What we offer</h4>
  	<br>
		<div class="row">
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-off img"></span>
				<h4>POWER</h4>
				<p>Lorem ipsum dolor sit amet..</p>
			</div>
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-heart img"></span>
				<h4>LOVE</h4>
				<p>Lorem ipsum dolor sit amet..</p>
			</div>
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-lock img"></span>
				<h4>JOB DONE</h4>
				<p>Lorem ipsum dolor sit amet..</p>
			</div>
		</div>
		<div class="row"> 
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-leaf img"></span>
				<h4>GREEN</h4>
				<p>Lorem ipsum dolor sit amet..</p>
			</div>
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-certificate img"></span>
				<h4>CERTIFIED</h4>
				<p>Lorem ipsum dolor sit amet..</p>
			</div>
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-wrench img"></span>
				<h4>HARD WORK</h4>
				<p>Lorem ipsum dolor sit amet..</p>
			</div>
		</div>
	</div>
    <div class="container-fluid text-center bg-grey">	
		<h2>Feedbacks</h2>
		<div id=myCarousel class="carousel slide text-center" data-ride="carousel">
			<!--indicators-->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<!--Wrapper for slides-->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<h4>"This is a best Place for learning and growth!"<br><span>Nitish Sengar, Software Developer</span></h4>
				</div>
				<div class="item">
					<h4>"One word... WOW!!"<br><span>Abhisek Sharma, Student</span></h4>
				</div>
				<div class="item">
					<h4>"learnig by doing is a great way to learn anything"<br><span>Shirish Gupta, Web Developer</span></h4>
				</div>
				<!--Left And Right Controls-->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>				
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>	
		</div>
	</div>
    <?php   include('includes/contact-us.php'); ?>
</body> 
</html>