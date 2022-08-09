<!DOCTYPE php>
<php>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.">
	<meta name="keywords" content="">
	<meta name="author" content="Vinay Kumar Saini">
	<title>SHOP</title>
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
    				<a class="navbar-brand text-reset"href="#">Shop</a>
    			</div>
    			<div class="col-sm-6 text-end">
    				<ul class="list-inline">
    	    	        <li class="list-inline-item"><a class="text-reset text-decoration-none"href="index.php">Home</a></li>
    	    	        <li class="list-inline-item"><a href="#"><i class="fas fa-less-than"></i><i class="fas fa-less-than"></i></a></li>
    	    	        <li class="list-inline-item"><a class="text-decoration-none"href="#">Shop</a></li>
    	            </ul>
    			</div>
    		</nav>
    	</div>
    	<div class="row mt-5">
    		<div class="col-sm-6 pe-4">
    			<div class="row bg-light">
    			    <div class=" col-sm-6 py-5">
    			        <h2>Smart Watche</h2>
    			        <p>BEST COLLECTION</p>
    			        <p><a class="text-decoration-none"href="#">SHOP NOW</a></p>
    			    </div>
    			    <div class="col-sm-6">
    				    <img src="images/Collection.png" class="img-fluid">
    			    </div>
    			</div>
    		</div>
    		<div class="col-sm-6">
    			<div class="row bg-light">
    			    <div class="py-5">
    			        <h3>THE BEST DEAL ON TOP BRANDS</h3>
    			        <p class="pt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    			    </div>
    			</div>
    		</div>
    	</div>
    	<div class="row mt-5">
    		<div class="col-sm-3">
    			<h6 class="bg-light p-3">Filter Products By</h6>
    			<div class="row mt-3">
    				<form class="form-control">
    					<label for="category" class="form-label">Category</label>
    					<div class="mb-3 form-check">
    						<input type="checkbox" class="form-check-input">
    						<label for="clothes" class="form-check-label">Clothes</label>
    					</div>
    					<div class="mb-3 form-check">
    						<input type="checkbox" class="form-check-input">
    						<label for="bag" class="form-check-label">Bag</label>
    					</div>
    					<div class="mb-3 form-check">
    						<input type="checkbox" class="form-check-input">
    						<label for="bag" class="form-check-label">Shoes</label>
    					</div>
    					<div class="mb-3 form-check">
    						<input type="checkbox" class="form-check-input">
    						<label for="bag" class="form-check-label">Cosmetic</label>
    					</div>
    					<div class="mb-3 form-check">
    						<input type="checkbox" class="form-check-input">
    						<label for="bag" class="form-check-label">Electrics</label>
    					</div>
    					<div class="mb-3 form-check">
    						<input type="checkbox" class="form-check-input">
    						<label for="bag" class="form-check-label">Phone</label>
    					</div>
    					<div class="border-bottom pb-4">
    					    <a href="#"><i class="fas fa-plus text-light bg-primary p-1"></i></a> <span>More Categories</span>
    				    </div>
    					<label for="size" class="form-label pt-2">Size</label>
    					<div class="mb-3 form-check">
    						<input type="checkbox" class="form-check-input">
    						<label for="s" class="form-check-label">S</label>
    					</div>
    					<div class="mb-3 form-check">
    						<input type="checkbox" class="form-check-input">
    						<label for="m" class="form-check-label">M</label>
    					</div>
    					<div class="mb-3 form-check">
    						<input type="checkbox" class="form-check-input">
    						<label for="l" class="form-check-label">L</label>
    					</div>
    					<div class="mb-3 form-check">
    						<input type="checkbox" class="form-check-input">
    						<label for="xl" class="form-check-label">XL</label>
    					</div>
    					<div class="mb-3 form-check">
    						<input type="checkbox" class="form-check-input">
    						<label for="xxl" class="form-check-label">XXL</label>
    					</div>
    				</form>
    			</div>
    		</div>
    		<div class="col-sm-9">
    			<div class="row bg-light">
    				<div class="col-sm-6 p-2">
    					<a class="text-white" href="#"><i class="fas fa-border-all p-2 fs-5 bg-primary"></i></a>
    					<a class="text-reset" href="#"><i class="fas fa-list-ul p-2 fs-5 bg-white"></i></a>
    				</div>
    				<div class="col-sm-6 bg-light text-gray p-2 text-end row">
                        <p class="p-2 mb-0  col-sm-6 col-form-label col-form-label-sm">Sort By</p>
                        <div class="col-md-6">
                            <select class="form-select border-0 text-muted">
                                <option selected="">Position</option>
                            </select>
                        </div>
                    </div>
    			</div>
    			<div class="row mt-3">
	                <div class="col-sm-4">
		                <div class="position-relative"><img class="img-fluid" src="images/image.jpg"><p class="position-absolute rounded-end start-0 top-0 mt-2 text-light p-1 bg-danger">20%</p></div>
		                <a class="text-reset text-decoration-none"href="#"><h6 class="card-title">Round Neck T-Shirt</h6></a>
		                <i class="fas fa-star text-warning"></i>
		                <i class="fas fa-star text-warning"></i>
		                <i class="fas fa-star text-warning"></i>
		                <i class="fas fa-star text-warning"></i>
		                <i class="far fa-star"></i>
		                <p class="card-text fw-bold"> <span class="text-decoration-line-through fw-light">$27.00</span> $22.00</p>
		                <div class="row">
		        	        <div class="col-sm-6">
                                <a href="#"><i class="fas fa-circle text-info"></i></a>
		                        <a href="#"><i class="fas fa-circle text-danger"></i></a>
		                    </div>
		                    <div class="col-sm-6 text-end">
		        	            <a class="text-reset text-decoration-none bg-light px-1" href="#">S</a>
		        	            <a class="text-reset text-decoration-none bg-light px-1" href="#">M</a>
		        	            <a class="text-reset text-decoration-none bg-light px-1" href="#">X</a>
		        	            <a class="text-reset text-decoration-none bg-light px-1" href="#">XL</a>
		                    </div>
		                </div>
	                </div>
	                <div class="col-sm-4">
		                <div class="position-relative"><img class="img-fluid" src="images/image1.jpg"><p class="position-absolute rounded end-0 top-0 mt-2 me-2 text-light p-1 bg-success">SALE</p></div>
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
	                <div class="col-sm-4">
		                <img class="img-fluid" src="images/image2.jpg">   
		                <a class="text-reset text-decoration-none"href="#"><h6>Cute Baby Toy's</h6></a>
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
	                <div class="col-sm-4 pt-5">
		                <div class="position-relative"><img class="img-fluid" src="images/image33.jpg"><p class="position-absolute rounded end-0 top-0 mt-2 me-2 text-light p-1 bg-primary">NEW</p></div>
		                <a class="text-reset text-decoration-none"href="#"><h6 class="card-title">Jumbo Carry Bag</h6></a>
		                <i class="fas fa-star text-warning"></i>
		                <i class="fas fa-star text-warning"></i>
		                <i class="fas fa-star text-warning"></i>
		                <i class="fas fa-star text-warning"></i>
		                <i class="far fa-star"></i>
		                <p class="card-text fw-bold"><span class="text-decoration-line-through fw-light">$50.00</span> $40.00</p>
		                <a href="#"><i class="fas fa-circle text-warning"></i></a>
	                </div>
	                <div class="col-sm-4 pt-5">
		                <div class="position-relative"><img class="img-fluid" src="images/image4.jpg"><p class="position-absolute rounded-end start-0 top-0 mt-2 text-light p-1 bg-danger">15%</p></div>
		                <a class="text-reset text-decoration-none"href="#"><h6>Designer Leather Purses</h6></a>
		                <i class="fas fa-star text-warning"></i>
		                <i class="fas fa-star text-warning"></i>
		                <i class="fas fa-star text-warning"></i>
		                <i class="fas fa-star text-warning"></i>
		                <i class="far fa-star"></i>
		                <p class="fw-bold"><span class="text-decoration-line-through fw-light">$40.00</span> $30.00</p>
		                <a href="#"><i class="fas fa-circle text-primary"></i></a>
		                <a href="#"><i class="fas fa-circle text-warning"></i></a>
		                <a href="#"><i class="fas fa-circle text-danger"></i></a>
		                <a href="#"><i class="fas fa-circle text-success"></i></a>
	                </div>
	                <div class="col-sm-4 pt-5">
		                <img class="img-fluid" src="images/image5.jpg">
		                <a class="text-reset text-decoration-none"href="#"><h6>Canvas Cowboy Hat</h6></a>
		                <i class="fas fa-star text-warning"></i>
		                <i class="fas fa-star text-warning"></i>
		                <i class="fas fa-star text-warning"></i>
		                <i class="fas fa-star text-warning"></i>
		                <i class="far fa-star"></i>
		                <p class="fw-bold"><span class="text-decoration-line-through fw-light">$12.00</span> $12.00</p>
		                <a href="#"><i class="fas fa-circle text-info"></i></a>
		                <a href="#"><i class="fas fa-circle text-secondary"></i></a>
		                <a href="#"><i class="fas fa-circle text-secondary"></i></a>
		                <a href="#"><i class="fas fa-circle text-danger"></i></a>
	                </div>
	                <div class="col-sm-4 pt-5">
        	            <div class="position-relative"><img class="img-fluid" src="images/image6.jpg"><p class="position-absolute rounded end-0 top-0 mt-2 me-2 text-light p-1 bg-primary">NEW</p></div>
                        <a class="text-reset text-decoration-none"href="#"><h6>Leather Belt for Men</h6></a>
                        <i class="fas fa-star text-warning"></i>
		                <i class="fas fa-star text-warning"></i>
		                <i class="fas fa-star text-warning"></i>
		                <i class="fas fa-star text-warning"></i>
		                <i class="far fa-star"></i>
		                <p class="card-text fw-bold"><span class="text-decoration-line-through fw-light">$15.00</span> $10.00</p>
		                <div class="row">
		        	        <div class="col-sm-6">
		                        <a href="#"><i class="fas fa-circle text-success"></i></a>
		                        <a href="#"><i class="fas fa-circle text-warning"></i></a>
		                    </div>
		                    <div class="col-sm-6 text-end">
		            	        <a class="text-reset text-decoration-none bg-light px-1" href="#">32</a>
		        	            <a class="text-reset text-decoration-none bg-light px-1" href="#">34</a>
		        	            <a class="text-reset text-decoration-none bg-light px-1" href="#">36</a>
		        	        </div>
		                </div>
                    </div>
	                <div class="col-sm-4 pt-5">
		                <div class="position-relative"><img class="img-fluid" src="images/image7.jpg"><p class="position-absolute rounded-end start-0 top-0 mt-2 text-light p-1 bg-danger">30%</p><p class="position-absolute rounded end-0 top-0 mt-2 me-2 text-light p-1 bg-primary">NEW</p></div>
		                <a class="text-reset text-decoration-none"href="#"><h6>Digital Smart Watches</h6></a>
		                <i class="fas fa-star text-warning"></i>
		                <i class="fas fa-star text-warning"></i>
		                <i class="fas fa-star text-warning"></i>
		                <i class="fas fa-star text-warning"></i>
		                <i class="far fa-star"></i>
		                <p class="fw-bold"><span class="text-decoration-line-through fw-light">$100.00</span> $80.00</p>
		                <a href="#"><i class="fas fa-circle text-info"></i></a>
		                <a href="#"><i class="fas fa-circle text-primary"></i></a>
		                <a href="#"><i class="fas fa-circle text-secondary"></i></a>
	                </div>
	                <div class="col-sm-4 pt-5">
		                <div class="position-relative"><img class="img-fluid" src="images/image i.jpg"><p class="position-absolute rounded-end start-0 top-0 mt-2 text-light p-1 bg-danger">20%</p></div>
		                <a class="text-reset text-decoration-none"href="#"><h6 class="card-title">Round Neck T-Shirt</h6></a>
		                <i class="fas fa-star text-warning"></i>
		                <i class="fas fa-star text-warning"></i>
		                <i class="fas fa-star text-warning"></i>
		                <i class="fas fa-star text-warning"></i>
		                <i class="far fa-star"></i>
		                <p class="card-text fw-bold"> <span class="text-decoration-line-through fw-light">$27.00</span> $22.00</p>
		                <div class="row">
		        	        <div class="col-sm-6">
                                <a href="#"><i class="fas fa-circle text-info"></i></a>
		                        <a href="#"><i class="fas fa-circle text-danger"></i></a>
		                    </div>
		                    <div class="col-sm-6 text-end">
		        	            <a class="text-reset text-decoration-none bg-light px-1" href="#">S</a>
		        	            <a class="text-reset text-decoration-none bg-light px-1" href="#">M</a>
		        	            <a class="text-reset text-decoration-none bg-light px-1" href="#">X</a>
		        	            <a class="text-reset text-decoration-none bg-light px-1" href="#">XL</a>
		                    </div>
		                </div>
	                </div>
	            </div>
    		    <div class="row mt-3">
    			    <div class="col-sm-6">
    				    <p class="fs-5 opacity-50 ">Showing 1-12 of 21 item(s)</p>
    			    </div>
    			    <div class="col-sm-6">
    				    <ul class="pagination pagination-sm justify-content-end ">
    		                <li class="page-item active"><a class="page-link" href="#">1</a></li>
    		                <li class="page-item"><a class="page-link border-0" href="#">2</a></li>
    		                <li class="page-item"><a class="page-link border-0" href="#">3</a></li>
    		                <li class="page-item"><a class="page-link border-0" href="#">4</a></li>
    		                <li class="page-item"><a class="page-link border-0" href="#">5</a></li>
    		                <li class="page-item"><a class="page-link rounded" href="#">Next</a></li>
    	                </ul>
    			    </div>
    		    </div>
    		</div>
    	</div>
    	
    	<div class="row bg-dark mt-5">
	    	<p class="text-light text-center pt-2">Win a contest! Get this limited-edition <a class="text-reset"href="Shop.php">View Detail</a></p>
	    </div>
		<?php include_once('footer.php');?>
    </div>
</body>
</php>