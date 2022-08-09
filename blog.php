<!DOCTYPE php>
<php>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.">
	<meta name="keywords" content="">
	<meta name="author" content="Vinay Kumar Saini">
	<title>BLOG</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body>
    <div class="container">
    	<?php include_once('header.php');?>
    	<div class="row">
    		<nav class="navbar navbar-expand-sm bg-light">
    			<div class="col-sm-6">
    				<a class="navbar-brand text-reset"href="#">Blog Page</a>
    			</div>
    			<div class="col-sm-6 text-end">
    				<ul class="list-inline">
    	    	        <li class="list-inline-item"><a class="text-reset text-decoration-none"href="index.php">Home</a></li>
    	    	        <li class="list-inline-item"><a href="#"><i class="fas fa-less-than"></i><i class="fas fa-less-than"></i></a></li>
    	    	        <li class="list-inline-item"><a class="text-decoration-none"href="#">Blog</a></li>
    	            </ul>
    			</div>
    		</nav>
    	</div>
    	<div class="row mt-5">
    		<div class="col-sm-4">
    			<div class="row">
    			    <div class="col-sm-12 px-0">
    				    <input type="text" class="form-control rounded-0"name="search our blog"placeholder="Search Our Blog">
    			    </div>
    		    </div>
    			<div class="row mt-5">
    				<div class="col-sm-12 border">
    					<div class="row border-bottom">
    						<h4>Recent Articles</h4>
    						<h6>The best fashion influencer.</h6>
    						<p>February 10,2021-2022</p>
    					</div>
    					<div class="row border-bottom">
    						<h6>Vougue Shopping Weekend.</h6>
    						<p>March 14s,2021-2022</p>
    					</div>
    					<div class="row border-bottom">
    						<h6>Fashion Market Reveals Her Jacket.</h6>
    						<p>June 09,2021-2022</p>
    					</div>
    					<div class="row border-bottom">
    						<h6>Summer Trending Fashion Market.</h6>
    						<p>July 17,2021-2022</p>
    					</div>
    					<div class="row border-bottom">
    						<h6>Winter 2021 Trending Fashion Market.</h6>
    						<p>August 02,2021-2022</p>
    					</div>
    					<div class="mt-3">
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
    					    <div class="pb-4">
    					        <a href="#"><i class="fas fa-plus text-light bg-primary p-1"></i></a> <span>More Categories</span>
    				        </div>
    				    </div>
    				</div>
    			</div>
    		</div>
    		<div class="col-sm-8">
    			<div class="row">
    			    <div class="col-sm-6">
    				    <img src="images/fashion1.jpg">
    				    <h5>The Best Fashion Influencer</h5>
    				    <h6>By Mr Admin/February 10,2021-2022</h6>
    				    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
    				    <button type="button" class="btn btn-primary rounded-0"data-bs-toggle="modal" data-bs-target="#myModal">READ MORE</button>
    				    <div class="modal" id="myModal">
    				    	<div class="modal-dialog">
    				    		<div class="modal-content bg-light">
    				    			<div class="modal-body">
    				    				<img src="images/fashion1.jpg">
    				    				<h5>The Best Fashion Influencer</h5>
    				    				<h6>By Mr Admin/February 10,2021-2022</h6>
    				    				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
    				    			</div>
    				    			<div class="modal-footer">
    				    				<button type="button" class="btn btn-danger"data-bs-dismiss="modal">Cancel</button>
    				    			</div>
    				    		</div>
    				    	</div>
    				    </div>
    			    </div>
    			    <div class="col-sm-6">
    			    	<img src="images/fashion2.jpg">
    				    <h5>The Best Fashion Influencer</h5>
    				    <h6>By Mr Admin/February 10,2021-2022</h6>
    				    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
    				    <button type="button" class="btn btn-primary rounded-0"data-bs-toggle="modal" data-bs-target="#myModal1">READ MORE</button>
    				    <div class="modal" id="myModal1">
    				    	<div class="modal-dialog">
    				    		<div class="modal-content bg-light">
    				    			<div class="modal-body">
    				    				<img src="images/fashion2.jpg">
    				    				<h5>The Best Fashion Influencer</h5>
    				    				<h6>By Mr Admin/February 10,2021-2022</h6>
    				    				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
    				    			</div>
    				    			<div class="modal-footer">
    				    				<button type="button" class="btn btn-danger"data-bs-dismiss="modal">Cancel</button>
    				    			</div>
    				    		</div>
    				    	</div>
    				    </div>
    			    </div>
    			    <div class="col-sm-6 pt-3">
    				    <img src="images/fashion3.jpg">
    				    <h5>The Best Fashion Influencer</h5>
    				    <h6>By Mr Admin/February 10,2021-2022</h6>
    				    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
    				    <button type="button" class="btn btn-primary rounded-0"data-bs-toggle="modal" data-bs-target="#myModal2">READ MORE</button>
    				    <div class="modal" id="myModal2">
    				    	<div class="modal-dialog">
    				    		<div class="modal-content bg-light">
    				    			<div class="modal-body">
    				    				<img src="images/fashion3.jpg">
    				    				<h5>The Best Fashion Influencer</h5>
    				    				<h6>By Mr Admin/February 10,2021-2022</h6>
    				    				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
    				    			</div>
    				    			<div class="modal-footer">
    				    				<button type="button" class="btn btn-danger"data-bs-dismiss="modal">Cancel</button>
    				    			</div>
    				    		</div>
    				    	</div>
    				    </div>
    			    </div>
    			    <div class="col-sm-6 pt-3">
    				    <img src="images/fashion4.jpg">
    				    <h5>The Best Fashion Influencer</h5>
    				    <h6>By Mr Admin/February 10,2021-2022</h6>
    				    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
    				    <button type="button" class="btn btn-primary rounded-0"data-bs-toggle="modal" data-bs-target="#myModal3">READ MORE</button>
    				    <div class="modal" id="myModal3">
    				    	<div class="modal-dialog">
    				    		<div class="modal-content bg-light">
    				    			<div class="modal-body">
    				    				<img src="images/fashion4.jpg">
    				    				<h5>The Best Fashion Influencer</h5>
    				    				<h6>By Mr Admin/February 10,2021-2022</h6>
    				    				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
    				    			</div>
    				    			<div class="modal-footer">
    				    				<button type="button" class="btn btn-danger"data-bs-dismiss="modal">Cancel</button>
    				    			</div>
    				    		</div>
    				    	</div>
    				    </div>
    			    </div>
    			    <div class="col-sm-6 pt-3">
    				    <img src="images/fashion5.jpg">
    				    <h5>The Best Fashion Influencer</h5>
    				    <h6>By Mr Admin/February 10,2021-2022</h6>
    				    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
    				    <button type="button" class="btn btn-primary rounded-0"data-bs-toggle="modal" data-bs-target="#myModal4">READ MORE</button>
    				    <div class="modal" id="myModal4">
    				    	<div class="modal-dialog">
    				    		<div class="modal-content bg-light">
    				    			<div class="modal-body">
    				    				<img src="images/fashion5.jpg">
    				    				<h5>The Best Fashion Influencer</h5>
    				    				<h6>By Mr Admin/February 10,2021-2022</h6>
    				    				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
    				    			</div>
    				    			<div class="modal-footer">
    				    				<button type="button" class="btn btn-danger"data-bs-dismiss="modal">Cancel</button>
    				    			</div>
    				    		</div>
    				    	</div>
    				    </div>
    			    </div>
    			    <div class="col-sm-6 pt-3">
    				    <img src="images/fashion6.jpg">
    				    <h5>The Best Fashion Influencer</h5>
    				    <h6>By Mr Admin/February 10,2021-2022</h6>
    				    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
    				    <button type="button" class="btn btn-primary rounded-0"data-bs-toggle="modal" data-bs-target="#myModal5">READ MORE</button>
    				    <div class="modal" id="myModal5">
    				    	<div class="modal-dialog">
    				    		<div class="modal-content bg-light">
    				    			<div class="modal-body">
    				    				<img src="images/fashion6.jpg">
    				    				<h5>The Best Fashion Influencer</h5>
    				    				<h6>By Mr Admin/February 10,2021-2022</h6>
    				    				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
    				    			</div>
    				    			<div class="modal-footer">
    				    				<button type="button" class="btn btn-danger"data-bs-dismiss="modal">Cancel</button>
    				    			</div>
    				    		</div>
    				    	</div>
    				    </div>
    			    </div>
    			    <div class="col-sm-12 mt-3">
    			    	<div class="row">
    			    	    <div class="col-sm-6">
    			    	    	<h4 class="text-muted">Showing 1-12 of 21 items(s)</h4>
    			    	    </div>
    			    	    <div class="col-sm-6">
    			    	    	<ul class="list-inline pagination justify-content-end">
    			    	    		<li class="page-item active"><a class="page-link" href="#">1</a></li>
    			    	    		<li class="page-item"><a class="page-link border-0"href="#">2</a></li>
    			    	    		<li class="page-item"><a class="page-link border-0"href="#">3</a></li>
    			    	    		<li class="page-item"><a class="page-link border-0"href="#">4</a></li>
                                    <li class="page-item"><a class="page-link border-0"href="#">5</a></li>
                                    <li class="page-item"><a class="page-link rounded-0"href="#">Next</a></li>
    			    	    	</ul>
    			    	    </div>
    			    	</div>
    			    </div>
    			</div>
    		</div>
    	</div>
    	<div class="row bg-dark mt-5">
	    	<p class="text-light text-center pt-2">Win a contest! Get this limited-edition <a class="text-reset"href="blog.php">View Detail</a></p>
	    </div>
		<?php include_once('footer.php');?>
	</div>
</body>
</php>