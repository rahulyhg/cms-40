<?php 
include("includes/header_login.php"); 
if($_SESSION['captcha']==1) {
	$captcha='
	<div class="form-group">
		 <!-- Capcha -->
		<label>
		<span><img style="margin:-10px 10px;" width="250" id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" /></span>
		<br><br>
		<input type="text" class="form-control placeholder-no-fix" name="captcha_code" size="10" maxlength="6" value="c&oacute;digo de seguridad" />
		<br>
		<a style="margin:3px 10px; color:red" href="#" onclick="document.getElementById(\'captcha\').src = \'securimage/securimage_show.php?\' + Math.random(); return false">[ Cambiar im&aacute;gen ]</a>
		 <label>
		 <input type="hidden" name="captcha_challenge" value="1" />
		<!-- Captcha end -->
	</div>
	';
} else {
	$captcha="";
}
?>

<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="index.php">
	<img src="images/logo-big.png" alt=""/>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="login.php" method="post">
		<h3 class="form-title">Acceso al sistema</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			Introduce tu usuario y password. </span>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Usuario</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autofocus autocomplete="off" placeholder="Username" name="login"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="passwd"/>
			</div>
		</div>
		<?php echo $captcha ;?>
		<div class="form-actions">
			<button type="submit" class="btn green pull-right">
			Login <i class="m-icon-swapright m-icon-white"></i>
			</button>
            <br>
		</div>
		<div class="forget-password">
			<h4>¿Olvidaste tu contraseña?</h4>
			<p>
				Solo da click <a href="forgot.php" id="forget-password">
				aquí </a> para recuperar tu contraseña.
			</p>
		</div>
	</form>
	<!-- END LOGIN FORM -->
	
<?php include("includes/footer_login.php"); ?>