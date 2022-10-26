<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="RedstarHospital" />
	<title>Login Tracer Study Poltekpar Palembang</title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link rel="stylesheet" href="../assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
	<link href="../assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="../assets/css/pages/login.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="../assets/img/favicon.ico" />
</head>

<body>
	<div class="main" style="background-image: url(image/bg.png);background-size: cover;height: 100%;left: 0;position: fixed;top: 0;background-position: center center !important;z-index: 1;width: 100%;background-repeat: no-repeat;">
		<!-- Sing in  Form -->
		<section class="sign-in">
			<div class="container" style="background-color: #00000052">
				<div class="signin-content">
					<div class="signin-image" style="border-radius: 20px;">
						<figure><img style="border-radius: 20px;" src="../image/logo.png"></figure>

					</div>
					<div class="signin-form">
						<h2 style="color: white;" class="form-title">Login</h2>
						<form class="register-form" id="login-form" action="/login/checklogin" method="post">
							<div class="form-group">
								<div class="">
									<input id="uname" name="uname" type="text" placeholder="User Name" class="form-control input-height" />
								</div>
							</div>
							<div class="form-group">
								<div class="">
									<input id="pwd" name="pwd" type="password" placeholder="Password" class="form-control input-height" />
								</div>
							</div>
							<!-- <div class="form-group">
								<input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
								<label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
									me</label>
							</div> -->
							<div class="form-group form-button">
								<button class="btn btn-round btn-primary" name="signin" id="signin" type="submit">Login</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- start js include path -->
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- end js include path -->
</body>

</html>