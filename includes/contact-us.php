<?php  include('connection.php');  ?>

<div class="container-fluid">
    <h2 class="text-center">Contact</h2><br><br>
	<div class="row">
		<div class="col-sm-5">
	       <h4>Contact us and we'll get back to you within 24 hours.</h4><br>
            <p><span class="glyphicon glyphicon-map-marker contact-icon"></span>Reach us at this address</p>
			<p><span class="glyphicon glyphicon-phone contact-icon"></span>Contact no. 011-975364856</p>
			<p><span class="glyphicon glyphicon-envelope contact-icon"></span>gk55gupta@gmail.com</p><br>
        </div>            
<!-- ---------------------- Contact Form ------------------------ -->            
        <form class="col-sm-7" action="" method="post">
            <div class="row">
			     <div class="col-sm-6 form-group">
                     <input type="text" class="form-control" placeholder="name" name="y">
                </div>
				<div class="col-sm-6 form-group">
					<input type="email" class="form-control" placeholder="email"name="email">
				</div>
            </div>
            <textarea class="form-control" placeholder="Comments" rows="5" name="comments"></textarea><br>
			<div class="row">
				<div class="col-sm-12 form-group">
					<button class="btn btn-default pull-right" type="submit" name="x">Send</button>
				</div>
            </div>
		</form>
    </div>
</div>