<div id="page-wrapper">
    <div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">Yeni Post Ekle</h1>
	</div>
    </div>
    <style>
	.form-group{overflow: hidden}
    </style>
    <div class="row">
	<div class="col-lg-12">
	    <div class="panel panel-default">
		<div class="panel-heading">
		    Post Güncelle
		</div>
		<div class="panel-body">
		    <?php
		    if (isset($form_validation_error))
		    {
			?>
    		    <div class="alert alert-warning alert-dismissable">
    			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			    <?php echo $form_validation_error; ?>
    		    </div>
		    <?php } ?>
		    <?php
		    if (isset($set_post_success))
		    {
			?>
    		    <div class="alert alert-success alert-dismissable">
    			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			    <?php echo $set_post_success; ?>
    		    </div>
		    <?php } ?>
		    <?php
		    if (isset($set_post_error))
		    {
			?>
    		    <div class="alert alert-warning alert-dismissable">
    			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			    <?php echo $set_post_error; ?>
    		    </div>
		    <?php } ?>

		    <div class="row">
			<form role="form" method="post" action="/Admin/Post/edit/<?php echo $post['post_id']; ?>">
			    <div class="form-group">
				<div class="col-lg-6">
				    <label>Başlık</label>
				    <input type="text" name="title" value="<?php echo $post['title']; ?>"  class="form-control">
				</div>
				<div class="col-lg-6">
				    <label>Seo Url</label>
				    <input type="text" name="link"  value="<?php echo $post['link']; ?>" class="form-control">
				</div>
			    </div>
			    <div class="form-group">
				<div class="col-lg-3">
				    <label>Tarih</label>
				    <input type="date" name="write_date" value="<?php echo $post['write_date']; ?>"  class="form-control">
				</div>
				<div class="col-lg-3">
				    <label>Sıralama</label>
				    <input type="number" name="order" value="<?php echo $post['order']; ?>" class="form-control">
				</div>
				<div class="col-lg-3">
				    <label>Durumu</label>
				    <select name="status" class="form-control">
					<option
					<?php
					if ($post['status'] == 1)
					{
					    ?> selected<?php } ?> value="1">Aktif</option>
					<option	<?php
					if ($post['status'] == 0)
					{
					    ?> selected<?php } ?> value="0">Pasif</option>
				    </select>
				</div>
				<div class="col-lg-3">
				    <label>Yazar</label>
				    <input type="text" name="author"  value="<?php echo $post['author']; ?>" class="form-control">
				</div>
			    </div>
			    <div class="form-group">
				<div class="col-lg-12">
				    <label>İçerik</label>
				    <textarea name="content" class="form-control" id="post_edit_content" rows="3">
					<?php echo $post['content']; ?>
				    </textarea>
				</div>
			    </div>
			    <div class="form-group">
				<div class="col-lg-6">
				    <label>Tag</label>
				    <input type="text" name="tag" value="<?php echo $post['tag']; ?>" name="title" class="form-control">
				</div>
				<div class="col-lg-6">
				    <label>Kategori</label>
				    <select name="category_id" class="form-control">
					<?php
					foreach ($categories as $category)
					{
					    ?>
    					<option <?php
					    if ($post['category_id'] == $category['category_id'])
					    {
						echo 'selected';
					    }
					    ?> value="<?php echo $category['category_id']; ?>"> <?php echo $category['title']; ?></option>
<?php } ?>
				    </select>
				</div>
			    </div>
			    <!--			    <div class="form-group">
							    <label>File input</label>
							    <input type="file">
							</div>-->

			    <div class="form-group">
				<div class="col-lg-12">
				    <button type="submit" class="btn btn-default">Kayıt Et</button>
				    <button type="reset" class="btn btn-default">Temizle</button>
				</div>
			    </div>

			</form>
			<!-- /.col-lg-6 (nested) -->
		    </div>
		    <!-- /.row (nested) -->
		</div>
		<!-- /.panel-body -->
	    </div>
	    <!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

<script src="/application/views/ckeditor/ckeditor.js"></script>
<script src="/application/views/ckfinder/ckfinder.js"></script>
<script>
    CKEDITOR.replace('post_edit_content', {
	filebrowserBrowseUrl: '/application/views/ckfinder/ckfinder.html',
	filebrowserImageBrowseUrl: '/application/views/ckfinder/ckfinder.html?type=Images',
	filebrowserFlashBrowseUrl: '/application/views/ckfinder/ckfinder.html?type=Flash',
	filebrowserUploadUrl: '/application/views/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
	filebrowserImageUploadUrl: '/application/views/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
	filebrowserFlashUploadUrl: '/application/views/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
	extraPlugins: 'codesnippet',
	codeSnippet_theme: 'monokai_sublime'
    });


</script>