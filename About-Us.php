<!DOCTYPE php>
<php>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.">
	<meta name="keywords" content="">
	<meta name="author" content="Vinay Kumar Saini">
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Neonderthaw&family=Rubik+Beastly&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
    	<?php include_once('header.php');?>
    	<div class="row">
    		<nav class="navbar navbar-expand-sm bg-light">
    			<div class="col-sm-6">
    				<a class="navbar-brand text-reset"href="#">About Us</a>
    			</div>
    			<div class="col-sm-6 text-end">
    				<ul class="list-inline">
    	    	        <li class="list-inline-item"><a class="text-reset text-decoration-none"href="index.php">Home</a></li>
    	    	        <li class="list-inline-item"><a href="#"><i class="fas fa-less-than"></i><i class="fas fa-less-than"></i></a></li>
    	    	        <li class="list-inline-item"><a class="text-decoration-none"href="#">about us</a></li>
    	            </ul>
    			</div>
    		</nav>
    	</div>
    	<h2 class="text-center mt-5">About Us</h2>
    	<p class="text-center">About our business Firm</p>
    	<div class="row">
    	    <div class="col-sm-12 col-md-12 col-lg-6">
    	    	<div class="row">
    	    		<div class="col-sm-12">
    		            <img src="images/about.jpg" class="img-fluid picture">
    		        </div>
    		    </div>
    	    </div>
    	    <div class="col-sm-12 col-md-12 col-lg-6 ps-0">
    		    <h4>What is the Ekka?</h4>
    		    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    	    </div>
    	</div>
    	<div class="row bg-light mt-5 pb-5">
	    	<h2 class=" text-center pt-5">Client Review</h2>
	        <p class="text-center">What say client about us</p>
	        <div class="col-sm-8 ml mx-auto"style="background-image: linear-gradient(#9e88a2, #fbb97c);">
	        	<div class="d-flex align-items-center py-5 mh-100">
	        		<a class="carousel-control-prev text-decoration-none " href="#mycarousel" role="button" data-bs-slide="prev">
        				<div class="d-flex flex-column justify-content-center me-2 ms-auto left">PREV<span class="fas fa-arrow-left"></span> </div> <span class="sr-only">Previous</span>
    				</a>
    				<div class="container">
        				<div id="mycarousel" class="carousel slide" data-bs-ride="carousel">
				            <ol class="carousel-indicators">
				                <li data-bs-target="#mycarousel" data-bs-slide-to="0" class="active"></li>
				                <li data-bs-target="#mycarousel" data-bs-slide-to="1"></li>
				                <li data-bs-target="#mycarousel" data-bs-slide-to="2"></li>
				            </ol>
            				<div class="carousel-inner">
				                <div class="carousel-item active">
				                    <div class="row">
				                        <div class="col-lg-6 "> <img src="images/insta2.png" class="d-block w-100" alt="..."> </div>
				                        <div class="col-lg-6 ">
				                            <div class=" d-flex flex-column justify-content-center my-5 px-3">
				                                <p class="text-center">"Incredible services and amazing customer support"</p>
				                                <div class="d-flex align-items-center justify-content-center"> <span class="fas fa-minus pe-1"></span>
				                                    <p class="m-0">John Doe</p>
				                                </div>
				                                <p class="text-center">General Manager<br>
				                                	<span>
					                                	<i class="fas fa-star text-warning"></i>
										                <i class="fas fa-star text-warning"></i>
										                <i class="fas fa-star text-warning"></i>
										                <i class="fas fa-star text-warning"></i>
									            	</span>
				                                </p>
				                            </div>
				                        </div>
				                    </div>
				                </div>
				                <div class="carousel-item">
				                    <div class="row">
				                        <div class="col-lg-6 "> <img src="images/insta4.png" class="d-block w-100" alt="..."> </div>
				                        <div class="col-lg-6 ">
				                            <div class=" d-flex flex-column justify-content-center my-5 px-3">
				                                <p class="text-center">"Incredible services and amazing customer support"</p>
				                                <div class="d-flex align-items-center justify-content-center"> <span class="fas fa-minus pe-1"></span>
				                                    <p class="m-0">Jenny Doe</p>
				                                </div>
				                                <p class="text-center">General Manager<br>
				                                	<span>
					                                	<i class="fas fa-star text-warning"></i>
										                <i class="fas fa-star text-warning"></i>
										                <i class="fas fa-star text-warning"></i>
										                <i class="fas fa-star text-warning"></i>
									            	</span>
				                                </p>
				                            </div>
				                        </div>
				                    </div>
				                </div>
				                <div class="carousel-item">
				                    <div class="row">
				                        <div class="col-lg-6 "> <img src="images/insta5.png" class="d-block w-100" alt="..."> </div>
				                        <div class="col-lg-6 ">
				                            <div class=" d-flex flex-column justify-content-center my-5 px-3">
				                                <p class="text-center">"Incredible services and amazing customer support"</p>
				                                <div class="d-flex align-items-center justify-content-center"> <span class="fas fa-minus pe-1"></span>
				                                    <p class="m-0">Jenny Doe</p>
				                                </div>
				                                <p class="text-center">General Manager<br>
				                                	<span>
					                                	<i class="fas fa-star text-warning"></i>
										                <i class="fas fa-star text-warning"></i>
										                <i class="fas fa-star text-warning"></i>
										                <i class="fas fa-star text-warning"></i>
									            	</span>
				                                </p>
				                            </div>
				                        </div>
				                    </div>
				                </div>
            				</div>
        				</div>
    				</div>
    				<a class="carousel-control-next text-decoration-none " href="#mycarousel" role="button" data-bs-slide="next">
        				<div class="d-flex flex-column justify-content-center right ms-2 me-auto">
        					NEXT <span class="fas fa-arrow-right"></span>
        				</div>
        				<span class="sr-only">Next</span>
    				</a>
				</div>
	    	</div>
	    </div>
    	<div class="row bg-dark mt-5">
	    	<p class="text-light text-center pt-2">Win a contest! Get this limited-edition <a class="text-reset"href="About-Us.php">View Detail</a></p>
	    </div>
	    <div class="row mt-5">
	        <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="card-body text-center border hover-shadow">
                    	<i class="fas fa-shipping-fast fs-1"></i>
		                <h6 class="card-title">Free Shipping</h6>
		                <p class="card-text">Free shipping on all us order or order above $200</p>
	                </div>
	        </div>
	        <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="card-body text-center border hover-shadow">
                    	<i class="fas fa-headset fs-1"></i>
		                <h6 class="card-title">24/7 Support</h6>
		                <p class="card-text">Contact us 24 hours a day,7 days a week</p>
	                </div>
	        </div>
	        <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="card-body text-center border hover-shadow">
                    	<i class="fas fa-undo-alt fs-1"></i>
		                <h6 class="card-title">30 Days Return</h6>
		                <p class="card-text">Simply return it within 30 days for an exchange</p>
	                </div>
	        </div>
	        <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="card-body text-center border hover-shadow">
                    	<i class="fas fa-user-shield fs-1"></i>
		                <h6 class="card-title">Payment Secure</h6>
		                <p class="card-text">Contact us 24 hours a day,7 days a week</p>
	                </div>
	        </div>
	    </div>
	    <h2 class="text-center mt-5">Instagram Feed</h2>
	    <p class="text-center">Share your store with us</p>
	    <div class="row">
	    	<div class="col-sm-12">
	    		<div class="row">
				    <div class="container rounded">
				        <div class="rollers position-relative overflow-hidden">
				            <div class="start-roller"></div>
				            <div class="wrapper">
				                <div class="items-container roll-LL">
				                    <div class="item"> <img src="images/insta1.png" alt="" class="company"> </div>
				                    <div class="item"> <img src="images/insta2.png" alt="" class="company"> </div>
				                    <div class="item"> <img src="images/insta3.png" alt="" class="company"> </div>
				                    <div class="item"> <img src="images/insta4.png" alt="" class="company"> </div>
				                    <div class="item"> <img src="images/insta5.png" alt="" class="company"> </div>
				                    <div class="item"> <img src="images/insta4.png" alt="" class="company"> </div>
				                </div>
				                <div class="items-container roll-RL">
				                    <div class="item"> <img src="images/insta1.png" alt="" class="company"> </div>
				                    <div class="item"> <img src="images/insta2.png" alt="" class="company"> </div>
				                    <div class="item"> <img src="images/insta3.png" alt="" class="company"> </div>
				                    <div class="item"> <img src="images/insta4.png" alt="" class="company"> </div>
				                    <div class="item"> <img src="images/insta5.png" alt="" class="company"> </div>
				                    <div class="item"> <img src="images/insta4.png" alt="" class="company"> </div>
				                </div>
				            </div>
				            <div class="end-roller"></div>
				        </div>
				    </div>
	    		</div>
	    	</div>
	    </div>
		<?php include_once('footer.php');?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</php>