<!-- Page Header -->
<header class="masthead" style="background-image: url('/application/views/catalog/theme/img/contact-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
	    <div class="col-lg-8 col-md-10 mx-auto">
		<div class="page-heading">
		    <h1>İletişim</h1>
		    <span class="subheading">Haydi Sor Sor</span>
		</div>
	    </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
	    <p>Ne spam yaparım, nede cevapsız bırakırım, çekinecek birşey yok :)</p>  
	    <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
	    <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
	    <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
	    <form name="sentMessage" id="contactForm" novalidate>
		<div class="control-group">
		    <div class="form-group floating-label-form-group controls">
			<label>İsim</label>
			<input type="text" class="form-control" placeholder="İsim" id="name" required data-validation-required-message="Please enter your name.">
			    <p class="help-block text-danger"></p>
		    </div>
		</div>
		<div class="control-group">
		    <div class="form-group floating-label-form-group controls">
			<label>Email </label>
			<input type="email" class="form-control" placeholder="E-mail" id="email" required data-validation-required-message="Please enter your email address.">
			    <p class="help-block text-danger"></p>
		    </div>
		</div>
		<div class="control-group">
		    <div class="form-group floating-label-form-group controls">
			<label>Mesaj</label>
			<textarea rows="5" class="form-control" placeholder="Mesaj" id="message" required data-validation-required-message="Please enter a message."></textarea>
			<p class="help-block text-danger"></p>
		    </div>
		</div>
		<br>
		<div id="success"></div>
		<div class="form-group">
		    <button type="submit" class="btn btn-primary" id="sendMessageButton">Gönder</button>
		</div>
	    </form>
        </div>
    </div>
</div>

<hr>