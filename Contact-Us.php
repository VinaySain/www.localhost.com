<!DOCTYPE php>
<php>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.">
	<meta name="keywords" content="">
	<meta name="author" content="Vinay Kumar Saini">
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body>
	<div class="container">
		<?php include_once('top_w.php');?>
		<?php include_once('header.php');?>
    	<div class="row">
    		<nav class="navbar navbar-expand-sm bg-light">
    			<div class="col-sm-6">
    				<a class="navbar-brand text-reset"href="#">Contact Us</a>
    			</div>
    			<div class="col-sm-6 text-end">
    				<ul class="list-inline">
    	    	       <li class="list-inline-item"><a class="text-reset text-decoration-none"href="index.php">Home</a></li>
    	    	       <li class="list-inline-item"><a href="#"><i class="fas fa-less-than"></i><i class="fas fa-less-than"></i></a></li>
    	    	       <li class="list-inline-item"><a class="text-decoration-none"href="#">Contact Us</a></li>
    	            </ul>
    			</div>
    		</nav>
    	</div>
    	<div class="row mt-5">
    		<div class="col-sm-6 border my-3">
    			<form>
    				<div class="my-3">
    				    <label for="FirstName" class="form-label">First Name*</label>
    				    <input type="text" class="form-control"name="FirstName" placeholder="Enter your first name">
    				</div>
    				<div>
    					<label for="LastName" class="form-label">Last Name*</label>
    				    <input type="text" class="form-control"name="LastName" placeholder="Enter your last name">
    				</div>
    				<div class="my-3">
    					<label for="Email" class="form-label">Email*</label>
    				    <input type="text" class="form-control"name="Email" placeholder="Enter your email address">
    				</div>
    				<div>
    					<label for="phone number" class="form-label">Phone Number*</label>
    				    <input type="text" class="form-control"name="Email" placeholder="Enter your phone number">
    				</div>
    				<div class="my-3">
    					<label for="Comments/Questions" class="form-label">Comments/Questions*</label>
    					<textarea class="form-control"rows="5" name="comment"placeholder="Please leave your comments here.." type="text"></textarea>
    				</div>
    				<button class="btn btn-primary" type="button">SUBMIT</button>
    			</form>
    		</div>
    		<div class="col-sm-6 my-3">
    			<div class="row">
    				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6505815.107120395!2d-122.30826039895238!3d37.23186665752767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54cbed2773bf7027%3A0xb19926344ac3a924!2sEastern%20California%2C%20CA%2C%20USA!5e0!3m2!1sen!2sin!4v1643038837141!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    			</div>
    			<div>
    			    <h2>Contact Us</h2>
    			    <p class="fw-bold">
    			       <a href="#"><i class="fas fa-map-marker-alt"></i></a>
    			       Address:
    			       <span class="fw-light"> 71 Piligrim Avenue Chevy Chase,east california.east california. MD 20815,USA</span>
    			    </p>
    			    <p class="fw-bold"><a class="text-decoration-none text-reset"href="tel:+44 255483366"><i class="fas fa-phone-alt text-primary"></i> Call Us:<span class="fw-light"> +44 255483366</span></a></p>
    			    <p class="fw-bold"><a class="text-decoration-none text-reset"href="mailto:example@ec-email.com"><i class="fas fa-envelope text-primary"></i> Email:<span class="fw-light"> example@ec-email.com</span></a></p>
    			</div>
    		</div>
    	</div>
    	<div class="row bg-dark mt-5">
	    	<p class="text-light text-center pt-2">Win a contest! Get this limited-edition <a class="text-reset"href="index.php">View Detail</a></p>
	    </div>
		<?php include_once('footer.php');?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </div>
</body>
</php>