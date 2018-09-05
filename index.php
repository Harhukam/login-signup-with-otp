<?php
session_start();
require_once 'class.user.php';
$user_login = new USER();

if($user_login->is_logged_in()!="")
{
$user_login->redirect('home.php');
}

if(isset($_POST['login']))
{
$mob = trim($_POST['mob']);
$otp = trim($_POST['pass']);

if($user_login->login($mob,$otp))
{
$user_login->redirect('home.php');
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="clevex - A fully responsive, HTML5 based admin theme">
	<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, clevex, web design, CSS3">
	<title>User | Login</title>
	<?php include_once'secure/header.php'; ?>
	
</head>
<body class="login-page">
	<div class="login-container">
		<div class="login-content animation bounceInDown">
			<div class="login-header m-b-30">
				<a class="logo" href="components.html" title="clevex">
					<img src="images/logo-color.png" alt="clevex" title="clevex">
				</a>
				
				<span id="feedback"></span>
			</div>

			<div class="login-form"  >
				<form method="post">
					<fieldset>
						<div class="form-group">
							<input name="mob" id="mobile" value="" class="form-control input-lg" placeholder="Mobile Number" type="number" >
						</div>
						<div class="form-group">
							<input name="pass" id="otp" class="form-control input-lg" placeholder="Password" type="password">
						</div>
						<div class="form-group clearfix">
							<div class="checkbox checkbox-primary checkbox-replace pull-left">
								<input id="remember_me" name="remember_me" type="checkbox">
								<label for="remember_me">Remember me</label>
							</div>

						<div class="m-t-10 pull-right">
								<a class="text-primary" href="register.php" title="Register">Create Account</a>
							</div>
						</div>

						<input id="submitBtn" type="submit" name="otp" class="btn btn-primary btn-rounded" value="Send OTP" />
                
                        <input id="verifyBtn" type="submit" name="login" class="btn btn-primary btn-rounded" value="Sign In" />


					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<!--Load JQuery-->
	<?php include_once'secure/footer.php'; ?>
	
		<script src="secure/login.js"></script>
</body>
</html>
