<?php
    if(isset($_POST["x"])){
        $customerName = $_POST["y"];
    }
?>
<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Code2Win</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">About</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Portfolio</a></li>
					<li><a href="#">Plans</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>	
</nav>