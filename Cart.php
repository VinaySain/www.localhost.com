<!DOCTYPE php>
<php>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.">
	<meta name="keywords" content="">
	<meta name="author" content="Vinay Kumar Saini">
	<title>CART</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body>
    <div class="container">
    	<?php include_once('top_w.php');?>
    	<?php include_once('header.php');?>
    	<div class="row">
    		<nav class="navbar navbar-expand-sm bg-light">
    			<div class="col-sm-6">
    				<a class="navbar-brand text-reset"href="#">Cart</a>
    			</div>
    			<div class="col-sm-6 text-end">
    				<ul class="list-inline">
    	    	        <li class="list-inline-item"><a class="text-reset text-decoration-none"href="index.php">Home</a></li>
    	    	        <li class="list-inline-item"><a href="#"><i class="fas fa-less-than"></i><i class="fas fa-less-than"></i></a></li>
    	    	        <li class="list-inline-item"><a class="text-decoration-none"href="#">Cart</a></li>
    	            </ul>
    			</div>
    		</nav>
    	</div>
    	<div class="row mt-5">
    		<div class="col-sm-8 ps-0">
    			<table class="table border">
    				<thead>
    					<tr>
    						<th>Product</th>
    						<th>Price</th>
    						<th>Quantity</th>
    						<th>Total</th>
    					</tr>
    				</thead>
    				<tbody>
    					<tr>
    						<td><img src="images/Stylish.png"><span>Stylish Baby Shoes</span></td>
    						<td>$56.00</td>
    						<td><input type="number"value="0"min="1"max="20"step="1"></td>
    						<td>$56.00</td>
    						<td><a class="text-reset"href="#"><i class="far fa-trash-alt"></i></a></td>
    					</tr>
    					<tr>
    						<td><img src="images/Unisex.png"><span>Unisex Fully Solid Hoodie</span></td>
    						<td>$75.00</td>
    						<td><input type="number"value="0"min="1"max="20"step="1"></td>
    						<td>$75.00</td>
    						<td><a class="text-reset"href="#"><i class="far fa-trash-alt"></i></a></td>
    					</tr>
    					<tr>
    						<td><img src="images/Beautiful.png" class="img-fluid"> <span>Beautiful T-shirt For Women</span></td>
    						<td>$48.00</td>
    						<td><input type="number"value="0"min="1"max="20"step="1"></td>
    						<td>$48.00</td>
    						<td><a class="text-reset"href="#"><i class="far fa-trash-alt"></i></a></td>
    					</tr>
    					<tr>
    						<td><img src="images/Wool.png"><span>Wool Hat For Women</span></td>
    						<td>$95.00</td>
    						<td><input type="number"value="0"min="1"max="20"step="1"></td>
    						<td>$95.00</td>
    						<td><a class="text-reset"href="#"><i class="far fa-trash-alt"></i></a></td>
    					</tr>
    				</tbody>
    			</table>
    			<div class="row">
    			    <div class="col-sm-6">
    				    <a class="text-reset text-decoration-none"href="#">Continue Shipping</a>
    			    </div>
    			    <div class="col-sm-6 text-end">
    				    <button class="btn rounded-0" type="button">CHECK OUT</button>
    			    </div>
    			</div>
    		</div>
    		<div class="col-sm-4 border">
    			<form>
    				<label for="Summary"class="form-label"aria-label="Default select example">Summary</label>
    				<select class="form-select">
    					<option selected>Estimate Shipping</option>
    				</select>
    				<label for="Country"class="form-label"aria-label="Default select example">Country</label>
    				<select class="form-select">
    					<option selected>United States</option>
    				</select>
    				<label for="State/Province"class="form-label"aria-label="Default select example">State/Province</label>
    				<select class="form-select">
    					<option selected>Please Select a region,state</option>
    				</select>
    				<label for="Zip/Postal Code"class="form-label"aria-label="Default select example">Zip/Postal Code</label>
    				<select class="form-select">
    					<option selected>Zip/Postal Code</option>
    				</select>
    			</form>
    			<div class="row pt-3 border-bottom">
    			    <div class="col-sm-6">
    				    <ul class="list-inline">
    					    <li>Sub Total</li>
    					    <li>Delivery Charges</li>
    					    <li>Coupon Discount</li>
    				    </ul>
    			    </div>
    			    <div class="col-sm-6 text-end">
    				    <ul class="list-inline">
    					    <li>$80.00</li>
    					    <li>$80.00</li>
    					    <li class="text-danger">Apply Coupan</li>
    				    </ul>
    			    </div>
    		    </div>
    		    <div class="row">
    		    	<div class="col-sm-6">
    		    		<h6>Total Amount</h6>
    		    	</div>
    		    	<div class="col-sm-6 text-end">
    		    		<h6>$80.00</h6>
    		    	</div>
    		    </div>
    	    </div>
    	</div>
    	<h2 class="text-center mt-5">New Arrivals</h2>
    	<p class="text-center">Browse the Collection of Top Products </p>
        <div class="row">
	        <div class="col-sm-3">
		        <div class="position-relative">
		        	<img class="img-fluid hover-shadow" src="images/image.jpg">
		        	<p class="position-absolute rounded-pill rounded-start start-0 top-0 mt-2 text-light px-1 bg-danger">20%</p>
		        </div>
		        <a class="text-reset text-decoration-none"href="#"><h6 class="card-title">Round Neck T-Shirt</h6></a>
		            <i class="fas fa-star text-warning"></i>
		            <i class="fas fa-star text-warning"></i>
		            <i class="fas fa-star text-warning"></i>
		            <i class="fas fa-star text-warning"></i>
		            <i class="far fa-star"></i>
		        <p class="card-text fw-bold"> <span class="text-decoration-line-through fw-light">$27.00</span> $22.00</p>
		        <div class="row">
		        	<div class="col-sm-6">
                        <a href="#"><i class="fas fa-circle text-info"></i></a></li>
		                <a href="#"><i class="fas fa-circle text-danger"></i></a></li>
		            </div>
		            <div class="col-sm-6 text-end">
		        	    <a class="text-reset text-decoration-none bg-light px-1" href="#">S</a>
		        	    <a class="text-reset text-decoration-none bg-light px-1" href="#">M</a>
		        	    <a class="text-reset text-decoration-none bg-light px-1" href="#">XL</a>
		            </div>
		        </div>
	        </div>
	        <div class="col-sm-3">
		        <div class="position-relative">
		        	<img class="img-fluid hover-shadow" src="images/image1.jpg">
		        	<p class="position-absolute rounded-pill rounded-start start-0 top-0 mt-2 text-light px-1 bg-danger">20%</p>
		        	<p class="position-absolute fa-rotate-90 rounded end-0 top-0 mt-3 me-2 text-light px-1 bg-success">SALE</p>
		        </div>
		        <a class="text-reset text-decoration-none"href="#"><h6>Full Sleeve Shirt</h6></a>
		            <i class="fas fa-star text-warning"></i>
		            <i class="fas fa-star text-warning"></i>
		            <i class="fas fa-star text-warning"></i>
		            <i class="fas fa-star text-warning"></i>
		            <i class="far fa-star"></i>
		        <p class="fw-bold"><span class="text-decoration-line-through fw-light">$15.00</span>$12.00</p>
		        <div class="row">
		            <div class="col-sm-6">
		                <a href="#"><i class="fas fa-circle text-info"></i></a>
		                <a href="#"><i class="fas fa-circle text-secondary"></i></a>
		            </div>
		            <div class="col-sm-6 text-end">
		        	    <a class="text-reset text-decoration-none bg-light px-1" href="#">S</a>
		        	    <a class="text-reset text-decoration-none bg-light px-1" href="#">M</a>
		        	    <a class="text-reset text-decoration-none bg-light px-1" href="#">XL</a>
		            </div>
	            </div>
	        </div>
	        <div class="col-sm-3">
	        	<div class="position-relative">
		            <img class="img-fluid hover-shadow" src="images/image2.jpg">
		            <p class="position-absolute rounded-pill rounded-start start-0 top-0 mt-2 text-light px-1 bg-danger">20%</p>
		            <p class="position-absolute fa-rotate-90 rounded end-0 top-0 mt-3 me-2 text-light px-1 bg-success">SALE</p>
		        </div>   
		        <a class="text-reset text-decoration-none"href="#"><h6>Cute Baby Toy's</h6></a>
		            <i class="fas fa-star text-warning"></i>
		            <i class="fas fa-star text-warning"></i>
		            <i class="fas fa-star text-warning"></i>
		            <i class="fas fa-star text-warning"></i>
		            <i class="far fa-star"></i>
		        <p class="fw-bold"><span class="text-decoration-line-through fw-light">$40.00</span>$30.00</p>
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
		        <div class="position-relative">
		        	<img class="img-fluid hover-shadow" src="images/image3.jpg">
		            <p class="position-absolute rounded-pill rounded-start start-0 top-0 mt-2 text-light px-1 bg-danger">20%</p>
		        	<p class="position-absolute fa-rotate-90 rounded end-0 top-0 mt-3 me-2 text-light px-1 bg-primary">NEW</p>
		        </div>
		        <a class="text-reset text-decoration-none"href="#"><h6 class="card-title">Jumbo Carry Bag</h6></a>
		            <i class="fas fa-star text-warning"></i>
		            <i class="fas fa-star text-warning"></i>
		            <i class="fas fa-star text-warning"></i>
		            <i class="fas fa-star text-warning"></i>
		            <i class="far fa-star"></i>
		        <p class="card-text fw-bold"><span class="text-decoration-line-through fw-light">$50.00</span> $40.00</p>
		        <a href="#"><i class="fas fa-circle text-warning"></i></a>
	        </div>
	    </div>
	    <div class="row bg-dark mt-5">
	    	<p class="text-light text-center pt-2">Win a contest! Get this limited-edition <a class="text-reset"href="Cart.php">View Detail</a></p>
	    </div>
		<?php include_once('footer.php');?>
    </div>
</body>
</php>