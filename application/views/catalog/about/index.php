<!-- Page Header -->
<header class="masthead" style="background-image: url('/application/views/catalog/theme/img/zeynel-akcay-hakkimda.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
	    <div class="col-lg-8 col-md-10 mx-auto">
		<div class="page-heading">
		    <h1>Hakkımda</h1>
		</div>

	    </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
	    <p><?php echo $about['about']; ?></p>
        </div>
    </div>
    <div class="row">
	<div class="col-lg-8 col-md-10 mx-auto">
	    <div class="page-heading">
		<h2>İnstagram'dan Kareler #zeynelakcay</h2>
	    </div>
	</div>
    </div>
    <br>
    <br>
    <div class="row">
	<?php
	foreach ($instagram_images as $instagram_image)
	{
	    ?>
    	<div class="col-md-2">  
    	    <img  src="<?php echo $instagram_image['src']; ?>" class="figure-img img-fluid rounded" alt="">
    	</div>
	<?php } ?>
    </div>
</div>

<hr>