<?php
	if(!isset($_SESSION)){
		session_start();
	}else if(isset($_SESSION['user'])) {
		header('Location: pages/');
	}
?>

<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta name="description" content="bootstrap material admin template">
		<meta name="author" content="">
		
		<title>Portal RRGraph</title>
		
		<link rel="apple-touch-icon" href="dist/assets/images/apple-touch-icon.png">
		<link rel="shortcut icon" href="dist/assets/images/favicon.ico">
		
		<!-- Stylesheets -->
		<link rel="stylesheet" href="dist/global/css/bootstrap.min.css">
		<link rel="stylesheet" href="dist/global/css/bootstrap-extend.min.css">
		<link rel="stylesheet" href="dist/assets/css/site.min.css">
		
		<!-- Plugins -->
		<link rel="stylesheet" href="dist/global/vendor/animsition/animsition.css">
		<link rel="stylesheet" href="dist/global/vendor/asscrollable/asScrollable.css">
		<link rel="stylesheet" href="dist/global/vendor/switchery/switchery.css">
		<link rel="stylesheet" href="dist/global/vendor/intro-js/introjs.css">
		<link rel="stylesheet" href="dist/global/vendor/slidepanel/slidePanel.css">
		<link rel="stylesheet" href="dist/global/vendor/flag-icon-css/flag-icon.css">
		<link rel="stylesheet" href="dist/global/vendor/waves/waves.css">
			<link rel="stylesheet" href="dist/global/css/login-v2.min.`css">
		
		
		<!-- Fonts -->
		<link rel="stylesheet" href="dist/global/fonts/material-design/material-design.min.css">
		<link rel="stylesheet" href="dist/global/fonts/brand-icons/brand-icons.min.css">
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
		
		<script src="dist/global/vendor/breakpoints/breakpoints.js"></script>
		<script>
			Breakpoints();
		</script>
	</head>
	<body class="animsition page-login-v2 layout-full page-dark">
		
		<div class="page" data-animsition-in="fade-in" data-animsition-out="fade-out">
			<div class="page-content">
				<div class="page-brand-info">
					<div class="brand">
						<img class="brand-img" src="dist/assets/images/logo@2x.png" alt="...">
						<h2 class="brand-text font-size-40">Portal RRGraph</h2>
					</div>
					<p class="font-size-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>

				<div class="page-login-main">
					<div class="brand hidden-md-up">
						<img class="brand-img" src="dist/assets/images/logo-colored@2x.png" alt="...">
						<h3 class="brand-text font-size-40">Portal RRGraph</h3>
					</div>
					<h3 class="font-size-24">Masuk <i class="icon md-sign-in"></i></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

					<form method="post" action="config/cek_login.php" autocomplete="off">
						<div class="form-group form-material floating" data-plugin="formMaterial">
							<input type="text" class="form-control empty" id="inputEmail" name="username">
							<label class="floating-label" for="inputEmail">Username / ID Pegawai</label>
						</div>
						<div class="form-group form-material floating" data-plugin="formMaterial">
							<input type="password" class="form-control empty" id="inputPassword" name="password">
							<label class="floating-label" for="inputPassword">Password</label>
						</div>
						<button type="submit" class="btn btn-primary btn-block">Masuk</button>
					</form>

					<p>Tidak Punya Akun ? <a href="pages/daftar/">Daftar</a></p>

					<footer class="page-copyright">
						<p>RRGraph</p>
						<p>© 2019. All RIGHT RESERVED.</p>
					</footer>
				</div>

			</div>
		</div>

		<script src="dist/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
		<script src="dist/global/vendor/jquery/jquery.js"></script>
		<script src="dist/global/vendor/popper-js/umd/popper.min.js"></script>
		<script src="dist/global/vendor/bootstrap/bootstrap.js"></script>
		<script src="dist/global/vendor/animsition/animsition.js"></script>
		<script src="dist/global/vendor/mousewheel/jquery.mousewheel.js"></script>
		<script src="dist/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
		<script src="dist/global/vendor/asscrollable/jquery-asScrollable.js"></script>
		<script src="dist/global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
		<script src="dist/global/vendor/waves/waves.js"></script>
		
		<!-- Plugins -->
		<script src="dist/global/vendor/switchery/switchery.js"></script>
		<script src="dist/global/vendor/intro-js/intro.js"></script>
		<script src="dist/global/vendor/screenfull/screenfull.js"></script>
		<script src="dist/global/vendor/slidepanel/jquery-slidePanel.js"></script>
				<script src="dist/global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Scripts -->
		<script src="dist/global/js/Component.js"></script>
		<script src="dist/global/js/Plugin.js"></script>
		<script src="dist/global/js/Base.js"></script>
		<script src="dist/global/js/Config.js"></script>
		
		<script src="dist/assets/js/Section/Menubar.js"></script>
		<script src="dist/assets/js/Section/GridMenu.js"></script>
		<script src="dist/assets/js/Section/Sidebar.js"></script>
		<script src="dist/assets/js/Section/PageAside.js"></script>
		<script src="dist/assets/js/Plugin/menu.js"></script>
		
		<script src="dist/global/js/config/colors.js"></script>
		<script src="dist/assets/js/config/tour.js"></script>
		<script>Config.set('assets', 'dist/assets');</script>
		
		<!-- Page -->
		<script src="dist/assets/js/Site.js"></script>
		<script src="dist/global/js/Plugin/asscrollable.js"></script>
		<script src="dist/global/js/Plugin/slidepanel.js"></script>
		<script src="dist/global/js/Plugin/switchery.js"></script>
				<script src="dist/global/js/Plugin/jquery-placeholder.js"></script>
				<script src="dist/global/js/Plugin/material.js"></script>
		
		<script>
			(function(document, window, $){
				'use strict';
		
				var Site = window.Site;
				$(document).ready(function(){
					Site.run();
				});
			})(document, window, jQuery);
		</script>
		
	</body>
</html>