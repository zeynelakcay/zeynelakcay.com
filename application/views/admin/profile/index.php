<div id="page-wrapper">
    <div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">Profil Güncelle</h1>
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
		    <span class="btn-danger">Profil Güncelle</span>
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
			<form role="form" method="post" action="<?php echo base_url(); ?>Admin/Profile/index/<?php echo $user['user_id']; ?>">
			    <div class="form-group">
				<div class="col-lg-4">
				    <label>İsim</label>
				    <input type="text" name="name" value="<?php echo $user['name']; ?>"  class="form-control">
				</div>
				<div class="col-lg-4">
				    <label>İsim</label>
				    <input type="text" name="surname" value="<?php echo $user['surname']; ?>"  class="form-control">
				</div>
				<div class="col-lg-4">
				    <label>Tel</label>
				    <input type="text" name="phone" value="<?php echo $user['phone']; ?>" class="form-control">
				</div>
			    </div>
			    <div class="form-group">
				<div class="col-lg-4">
				    <label>E-mail</label>
				    <input type="email" name="email" value="<?php echo $user['email']; ?>"  class="form-control">
				</div>
				<div class="col-lg-4">
				    <label>Şifre</label>
				    <input type="text" name="password" value="<?php echo $user['password']; ?>" class="form-control">
				</div>  
			    </div>
			    <div class="form-group">
				<div class="col-lg-12">
				    <button type="submit" class="btn btn-default">Güncelle</button>
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
