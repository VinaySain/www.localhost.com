<!DOCTYPE php>
<php>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.">
	<meta name="keywords" content="">
	<meta name="author" content="Vinay Kumar Saini">
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

</head>
<body>
    <div class="container">
    	<?php include_once('header.php');?>
    	<div class="row">
    		<nav class="navbar navbar-expand-sm bg-light">
    			<div class="col-sm-6">
    				<a class="navbar-brand text-reset"href="#">Login</a>
    			</div>
    			<div class="col-sm-6 text-end">
    				<ul class="list-inline">
    	    	        <li class="list-inline-item"><a class="text-reset text-decoration-none"href="index.php">Home</a></li>
    	    	        <li class="list-inline-item"><a href="#"><i class="fas fa-less-than"></i><i class="fas fa-less-than"></i></a></li>
    	    	        <li class="list-inline-item"><a class="text-decoration-none"href="#">Login</a></li>
    	            </ul>
    			</div>
    		</nav>
    	</div>
    	<h2 class="text-center mt-5">Log In</h2>
    	<p class="text-center">Best place to buy and sell digital products</p>
    	<div class="col-sm-5 ml mx-auto border">
    		<div class="my-3 mx-3">
    			<label for="Email Address" class="form-label">Email Address*</label>
    			<input type="email address" class="form-control"name="Email Address" placeholder="Enter your email add...">
    		</div>
    		<div class="my-3 mx-3">
    			<label for="pwd" class="form-label">Password*</label>
    			<input type="password" class="form-control"name="pswd" placeholder="Enter your password">
    			<a class="text-decoration-none text-reset"href="#">Forget Password?</a>
    		</div>
    		<div class="my-3 text-center">
    		    <button class="btn text-center rounded-0 px-4" type="button"> LOGIN </button>
    		</div>
    		<div class="my-3 text-center">
    		    <button class="btn text-center rounded-0" type="button"> REGISTER</button>
    		</div>
    	</div>
    	<div class="row bg-dark mt-5">
	    	<p class="text-light text-center pt-2">Win a contest! Get this limited-edition <a class="text-reset"href="Login.php">View Detail</a></p>
	    </div>
		<?php include_once('footer.php');?>
    </div>
</body>
</php>