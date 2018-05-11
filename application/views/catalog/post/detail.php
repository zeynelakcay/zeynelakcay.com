<!-- Page Header -->
<header class="masthead" style="background-image: url('/application/views/catalog/theme/img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
	    <div class="col-lg-8 col-md-10 mx-auto">
		<div class="post-heading">
		    <h1><?php echo $post['title']; ?></h1>
		    <span class="meta">Yazan
			<a href="/hakkimda"><?php echo $post['author']; ?></a>
			Tarih <?php echo $post['write_date']; ?></span>
		</div>
	    </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
	    <div class="col-lg-8 col-md-10 mx-auto">
		<?php echo $post['content']; ?>

		<p>Taglar:
		    <?php $tags = explode(",", $post['tag']) ?>
		    <?php
		    foreach ($tags as $tag)
		    {
			?>
    		    <a href="#"><?php echo $tag; ?></a>  
		    <?php } ?>
		</p>
	    </div>
        </div>
    </div>
</article>

<hr>