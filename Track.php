<!DOCTYPE php>
<php>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.">
	<meta name="keywords" content="">
	<meta name="author" content="Vinay Kumar Saini">
	<title>TRACK ORDER</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body>
    <div class="container">
    	<?php include_once('header.php');?>
    	<div class="row">
    		<nav class="navbar navbar-expand-sm bg-light">
    			<div class="col-sm-6">
    				<a class="navbar-brand text-reset"href="#">Track Order</a>
    			</div>
    			<div class="col-sm-6 text-end">
    				<ul class="list-inline">
    	    	        <li class="list-inline-item"><a class="text-reset text-decoration-none"href="index.php">Home</a></li>
    	    	        <li class="list-inline-item"><a href="#"><i class="fas fa-less-than"></i><i class="fas fa-less-than"></i></a></li>
    	    	        <li class="list-inline-item"><a class="text-decoration-none"href="#">Track Order</a></li>
    	            </ul>
    			</div>
    		</nav>
    	</div>
    	<div class="row mt-5 bg-light">
    		<div class="col-sm-12 pt-5">
    			<div class="row px-5">
    		        <div class="col-sm-6">
    			        <h3>Order #6152</h3>
    		        </div>
    		        <div class="col-sm-6 text-end">
    			        <p>Expected arrival 14-02-2021-2022 <br>Grasshoppers.<span class="text-primary">V534HB</span></p>
    		        </div>
    		        <div class="progresses">
    		        	<ul>
    		        		<li>
    		        			<img src="images/proceed.png"><br>
    		        			<i class="fa fa-check"></i><br>
    		        			<p>Order <br>Processed</p>
    		        		</li>
    		        		<li>
    		        			<img src="images/proceed1.png"></i><br>
    		        			<i class="fa fa-check"></i><br>
    		        			<p>Order <br>Designing</p>
    		        		</li>
    		        		<li>
    		        			<img src="images/proceed2.png"><br>
    		        			<i class="fa fa-check"></i><br>
    		        			<p>Order <br>Shipped</p>
    		        		</li>
    		        		<li>
    		        			<img src="images/proceed3.png"><br>
    		        			<i class="far fa-circle"></i><br>
    		        			<p>Order <br>Enroute</p>
    		        		</li>
    		        		<li>
    		        			<img src="images/proceed4.png"><br>
    		        			<i class="far fa-circle"></i><br>
    		        			<p>Order <br>Arrived</p>
    		        		</li>
    		        	</ul>
    		        </div>
    		    </div>
    	    </div>
    	</div>
    	<div class="row bg-dark mt-5">
	    	<p class="text-light text-center pt-2">Win a contest! Get this limited-edition <a class="text-reset"href="Track.php">View Detail</a></p>
	    </div>
		<?php include_once('footer.php');?>
    </div>
</body>
</php>