
<!-- Page Header -->
<header class="masthead" style="background-image: url('/application/views/catalog/theme/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
	    <div class="col-lg-8 col-md-10 mx-auto">
		<div class="site-heading">
		    <h1>Zeynel Akçay</h1>
		    <span class="subheading">Bilgisayar Mühendisi</span>
		</div>
	    </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
	    <?php
	    foreach ($posts as $post)
	    {
		?>
    	    <div class="post-preview">
    		<p class="post-meta">Yazar
    		    <a href="#"><?php echo $post['author']; ?></a>
    		    Tarih <?php echo $post['write_date']; ?></p>
    		<a href="/blog/<?php echo $post['link'] . "-" . $post['post_id']; ?>">
    		    <h2 class="post-title">
			    <?php echo $post['title']; ?>
    		    </h2>

    		    <h3 class="post-subtitle">
			    <?php
			    $string = strip_tags($post['content']);

			    if (strlen($string) > 250)
			    {

				// truncate string
				$stringCut = substr($string, 0, 250);

				// make sure it ends in a word so assassinate doesn't become ass...
				$string = substr($stringCut, 0, strrpos($stringCut, ' ')) . '... ';
			    }
			    echo $string;
			    ?>
    		    </h3>
    		</a>

    	    </div>
    	    <hr>
	    <?php } ?>

	    <!-- Pager -->
	    <div class="clearfix">
		<a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
	    </div>
        </div>
    </div>
</div>

<hr>