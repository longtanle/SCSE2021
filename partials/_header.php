<!-- views/layout/header.ejs -->

<!-- Header -->
<header id="header-full-top" class="hidden-xs header-full">
    <div class="container">
    <div class="row">
	    <div class="col-lg-8">
	        <div class="header-full-title">
	        <h1 class="animated fadeInRight"><a href="/"><strong> <?php echo $json_a['name'] ?><span> <?php echo $json_a['year'] ?></span></strong></a></h1>
	        <!--<img src="assets/img/conf/name.png" class="img-responsive animated fadeInRight" alt="Image"> -->
	            <p class="animated fadeInRight"><b><?php echo $json_a['fullname'] ?></b></p>
	        </div>
	    </div>
	    <div class="col-lg-4 hidden-xs hidden-sm hidden-md">
		    <div class="clock"></div>
		</div> 
	</div>
    </div> <!-- container -->
</header> <!-- header-full -->
