<div id="page-wrapper">
    <div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">Hakkımda</h1>
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
		    Hakkımda
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
			<form role="form" method="post" action="/Admin/About/index">
			    <div class="form-group">
				<div class="col-lg-12">
				    <label>Hakkımda</label>
				    <textarea name="about" class="form-control" id="about_content" rows="3"><?php echo $about['about']; ?>

				    </textarea>
				</div>
			    </div>


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
    CKEDITOR.replace('about_content');
</script>