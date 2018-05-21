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
	    <p>Evet kim bu uşak, hemen cevaplayayım bu soruyu, Zeynel Akçay Trabzon Doğumludur. Devamı gelecek ...</p>
        </div>
    </div>
    <div class="row">
	<?php
	foreach ($instagram_images as $instagram_image)
	{
	    ?>
    	<div class="col-lg-4 col-md-10 mx-auto">
    	    <figure class="figure">
    		<img height="300px" src="<?php echo $instagram_image['src']; ?>" class="figure-img img-fluid rounded" alt="">
    	    </figure>
    	</div>
	<?php } ?>
    </div>
</div>

<hr>