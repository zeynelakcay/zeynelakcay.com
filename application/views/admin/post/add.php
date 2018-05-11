<div id="page-wrapper">
    <div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">Yeni Post Ekle</h1>
	</div>
	<!-- /.col-lg-12 -->
    </div>
    <style>
	.form-group{overflow: hidden}
    </style>
    <!-- /.row -->
    <div class="row">
	<div class="col-lg-12">
	    <div class="panel panel-default">
		<div class="panel-heading">
		    Post Ekle
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
			<form role="form" method="post" action="/Admin/Post/add">
			    <div class="form-group">
				<div class="col-lg-6">
				    <label>Başlık</label>
				    <input type="text" name="title" value=""  class="form-control">
				</div>
				<div class="col-lg-6">
				    <label>Seo Url</label>
				    <input type="text" name="link"  value="" class="form-control">
				</div>
			    </div>
			    <div class="form-group">
				<div class="col-lg-3">
				    <label>Tarih</label>
				    <input type="date" name="write_date" value=""  class="form-control">
				</div>
				<div class="col-lg-3">
				    <label>Sıralama</label>
				    <input type="number" name="order" class="form-control">
				</div>
				<div class="col-lg-3">
				    <label>Durumu</label>
				    <select name="status" class="form-control">
					<option selected value="1">Aktif</option>
					<option value="0">Pasif</option>  
				    </select>
				</div>
				<div class="col-lg-3">
				    <label>Yazar</label>
				    <input type="text" name="author"  value="" class="form-control">
				</div>
			    </div>
			    <div class="form-group">
				<div class="col-lg-12">
				    <label>İçerik</label>
				    <textarea name="content" class="form-control" id="post_add_content" rows="3">

				    </textarea>
				</div>
			    </div>
			    <div class="form-group">
				<div class="col-lg-6">
				    <label>Tag</label>
				    <input type="text" name="tag" value="" name="title" class="form-control">
				</div>
				<div class="col-lg-6">
				    <label>Kategori</label>
				    <select name="category_id" class="form-control">
					<option value="0"> PHP</option>
					<option value="1"> Genel</option>
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
<script>
    CKEDITOR.replace('post_add_content');
</script>