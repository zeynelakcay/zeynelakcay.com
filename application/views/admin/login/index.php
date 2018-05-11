<!DOCTYPE html>
<html lang="en">

    <head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

    <title>Zeynel Akçay Blog - Yönetim Paneli</title>

    <!-- Bootstrap Core CSS -->
    <link href="/application/views/admin/theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- MetisMenu CSS -->
    <link href="/application/views/admin/theme/vendor/metisMenu/metisMenu.min.css" rel="stylesheet"/>

    <!-- Custom CSS -->
    <link href="/application/views/admin/theme/dist/css/sb-admin-2.css" rel="stylesheet"/>

    <!-- Custom Fonts -->
    <link href="/application/views/admin/theme/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">
    <div class="row">
	<div class="col-md-4 col-md-offset-4">
	    <div class="login-panel panel panel-default">
		<div class="panel-heading">
		    <h3 class="panel-title">Zeynel Akçay Blog Yönetim</h3>
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
		    if (isset($login_error))
		    {
			?>
    		    <div class="alert alert-danger alert-dismissable">
    			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			    <?php echo $login_error; ?>
    		    </div>
		    <?php } ?>
		    <form role="form" action="/Admin/Login/verify" method="POST">
			<fieldset>
			    <div class="form-group">
				<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
			    </div>
			    <div class="form-group">
				<input class="form-control" placeholder="Şifre" name="password" type="password" value="">
			    </div>
			    <!-- Change this to a button or input when using this as a form -->
			    <button type="submit" class="btn btn-lg btn-success btn-block">Giriş</button>
			</fieldset>
		    </form>
		</div>
	    </div>
	</div>
    </div>
</div>

<!-- jQuery -->
<script src="/application/views/admin/theme/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/application/views/admin/theme/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/application/views/admin/theme/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/application/views/admin/theme/dist/js/sb-admin-2.js"></script>

</body>

</html>
