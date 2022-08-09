<!DOCTYPE php>
<php>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.">
	<meta name="keywords" content="">
	<meta name="author" content="Vinay Kumar Saini">
	<title>COMPARE</title>
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
    				<a class="navbar-brand text-reset"href="#">Compare</a>
    			</div>
    			<div class="col-sm-6 text-end">
    				<ul class="list-inline">
    	    	        <li class="list-inline-item"><a class="text-reset text-decoration-none"href="index.php">Home</a></li>
    	    	        <li class="list-inline-item"><a href="#"><i class="fas fa-less-than"></i><i class="fas fa-less-than"></i></a></li>
    	    	        <li class="list-inline-item"><a class="text-decoration-none"href="#">Compare</a></li>
    	            </ul>
    			</div>
    		</nav>
    	</div>
    	<div class="row mt-5">
    		<div class="col-sm-3">
    			<h4 class="py-5 px-5">Product Specification</h4>
    		</div>
    		<div class="col-sm-3">
    			<div class="position-relative"><img class="img-fluid" src="images/image1.jpg"><p class="position-absolute rounded-pill rounded-start top-0 mt-2 me-2 text-light p-1 bg-danger">20%</p><a href="#" role="button"class="position-absolute  border-0 end-0 top-0 mt-2 me-2 text-reset"><i class="fas fa-times-circle fs-2"></i></a></div>
		        <a class="text-reset text-decoration-none"href="#"><h6>Full Sleeve Shirt</h6></a>
		        <i class="fas fa-star text-warning"></i>
		        <i class="fas fa-star text-warning"></i>
		        <i class="fas fa-star text-warning"></i>
		        <i class="fas fa-star text-warning"></i>
		        <i class="far fa-star"></i>
		        <p class="fw-bold"><span class="text-decoration-line-through fw-light">$15.00</span> $12.00</p>
		        <div class="row">
		            <div class="col-sm-6">
		                <a href="#"><i class="fas fa-circle text-info"></i></a>
		                <a href="#"><i class="fas fa-circle text-secondary"></i></a>
		            </div>
		            <div class="col-sm-6 text-end">
		        	    <a class="text-reset text-decoration-none bg-light px-1" href="#">S</a>
		        	    <a class="text-reset text-decoration-none bg-light px-1" href="#">M</a>
		        	    <a class="text-reset text-decoration-none bg-light px-1" href="#">X</a>
		        	    <a class="text-reset text-decoration-none bg-light px-1" href="#">XL</a>
		            </div>
	            </div>
    		</div>
    		<div class="col-sm-3">
    			<div class="position-relative"><img class="img-fluid" src="images/image2.jpg"><p class="position-absolute rounded-pill rounded-start top-0 mt-2 me-2 text-light p-1 bg-danger">20%</p><a href="#" role="button"class="position-absolute  border-0 end-0 top-0 mt-2 me-2 text-reset"><i class="fas fa-times-circle fs-2"></i></a></div>
		        <a class="text-reset text-decoration-none"href="#"><h6>Cute Baby Toy`s</h6></a>
		        <i class="fas fa-star text-warning"></i>
		        <i class="fas fa-star text-warning"></i>
		        <i class="fas fa-star text-warning"></i>
		        <i class="fas fa-star text-warning"></i>
		        <i class="far fa-star"></i>
		        <p class="fw-bold"><span class="text-decoration-line-through fw-light">$40.00</span> $30.00</p>
		        <div class="row">
		        	<div class="col-sm-6">
		                <a href="#"><i class="fas fa-circle text-primary"></i></a>
		                <a href="#"><i class="fas fa-circle text-warning"></i></a>
		                <a href="#"><i class="fas fa-circle text-success"></i></a>
		                <a href="#"><i class="fas fa-circle text-danger"></i></a>
                    </div>
                    <div class="col-sm-6 text-end">
                    	<a class="text-reset text-decoration-none bg-light px-1" href="#">S</a>
		        	    <a class="text-reset text-decoration-none bg-light px-1" href="#">M</a>
		        	</div>
		        </div>
    		</div>
    		<div class="col-sm-3">
    			<div class="position-relative"><img class="img-fluid" src="images/image3.jpg"><p class="position-absolute rounded-pill rounded-start top-0 mt-2 me-2 text-light p-1 bg-danger">20%</p><a href="#" role="button"class="position-absolute  border-0 end-0 top-0 mt-2 me-2 text-reset"><i class="fas fa-times-circle fs-2"></i></a></div>
		        <a class="text-reset text-decoration-none"href="#"><h6>Jumbo Carry Bag</h6></a>
		        <i class="fas fa-star text-warning"></i>
		        <i class="fas fa-star text-warning"></i>
		        <i class="fas fa-star text-warning"></i>
		        <i class="fas fa-star text-warning"></i>
		        <i class="far fa-star"></i>
		        <p class="fw-bold"><span class="text-decoration-line-through fw-light">$50.00</span> $40.00</p>
		        <a href="#"><i class="fas fa-circle text-warning"></i></a>
    		</div>
    	</div>
    	<div class="row mt-3">
    		<table class="table mb-0">
    			<tr>
    				<th class="text-center text-white bg-primary">Show Only Difference</th>
    			</tr>
    		</table>
    		<table class="table table-striped table-hover border">
    			<tbody>
    				<tr>
    					<td class="fw-bold">Name</td>
    					<td>Man Shirt</td>
    					<td>Baby Dress</td>
    					<td>Bag</td>
    				</tr>
    				<tr>
    					<td class="fw-bold">Availability</td>
    					<td>In Stock</td>
    					<td>Out Of Stock</td>
    					<td>In Stock</td>
    				</tr>
    				<tr>
    					<td class="fw-bold">Location</td>
    					<td>In Store,Online</td>
    					<td>In Store</td>
    					<td>Online</td>
    				</tr>
    				<tr>
    					<td class="fw-bold">Customization</td>
    					<td>In Stock</td>
    					<td>Stock</td>
    					<td>In Stock</td>
    				</tr>
    				<tr>
    					<td class="fw-bold">Customization</td>
    					<td>In Stock</td>
    					<td>Stock</td>
    					<td>In Stock</td>
    				</tr>
    				<tr>
    					<td class="fw-bold">Brand</td>
    					<td>Gucci</td>
    					<td>Hermes</td>
    					<td>Prada</td>
    				</tr>
    				<tr>
    					<td class="fw-bold">SKU</td>
    					<td>21704</td>
    					<td>21220</td>
    					<td>21207</td>
    				</tr>
    			</tbody>
    		</table>
    	</div>
    	<div class="row bg-dark mt-5">
	    	<p class="text-light text-center pt-2">Win a contest! Get this limited-edition <a class="text-reset"href="Compare.php">View Detail</a></p>
	    </div>
		<?php include_once('footer.php');?>
    </div>
</body>
</php>