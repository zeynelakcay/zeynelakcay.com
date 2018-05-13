<div id="page-wrapper">
    <div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">Yeni Kategori Ekle</h1>
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
		    Kategori Ekle
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
			<form role="form" method="post" action="/Admin/Category/add">
			    <div class="form-group">
				<div class="col-lg-6">
				    <label>Başlık</label>
				    <input type="text" name="title" value=""  class="form-control">
				</div>
				<div class="col-lg-6">
				    <label>Seo Url</label>
				    <input type="text" name="seo_title"  value="" class="form-control">
				</div>
			    </div>
			    <div class="form-group">
				<div class="col-lg-2">
				    <label>Sıralama</label>
				    <input type="number" name="order" class="form-control">
				</div>
				<div class="col-lg-2">
				    <label>Durumu</label>
				    <select name="status" class="form-control">
					<option selected value="1"><span class="danger">Aktif</span></option>
					<option value="0">Pasif</option>
				    </select>
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
