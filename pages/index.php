<?php
	if (!isset($_SESSION)) {
		session_start();
	} else {}
	
	if(!$_SESSION['user']){
		header('Location: ../');
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
		
		<title>Portal | RRGraph</title>
		
		<link rel="apple-touch-icon" href="../dist/assets/images/apple-touch-icon.png">
		<link rel="shortcut icon" href="../dist/assets/images/favicon.ico">
		
		<!-- Stylesheets -->
		<link rel="stylesheet" href="../dist/global/css/bootstrap.min.css">
		<link rel="stylesheet" href="../dist/global/css/bootstrap-extend.min.css">
		<link rel="stylesheet" href="../dist/assets/css/site.min.css">
		
		<!-- Plugins -->
		<link rel="stylesheet" href="../dist/global/vendor/animsition/animsition.css">
		<link rel="stylesheet" href="../dist/global/vendor/asscrollable/asScrollable.css">
		<link rel="stylesheet" href="../dist/global/vendor/switchery/switchery.css">
		<link rel="stylesheet" href="../dist/global/vendor/intro-js/introjs.css">
		<link rel="stylesheet" href="../dist/global/vendor/slidepanel/slidePanel.css">
		<link rel="stylesheet" href="../dist/global/vendor/flag-icon-css/flag-icon.css">
		<link rel="stylesheet" href="../dist/global/vendor/waves/waves.css">
				<link rel="stylesheet" href="../dist/assets/examples/css/dashboard/v1.css">
				<link rel="stylesheet" href="../dist/assets/examples/css/tables/datatable.css">
				<link rel="stylesheet" href="../dist/global/vendor/datatables.net-bs4/dataTables.bootstrap4.css">
				<link rel="stylesheet" href="../dist/global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css">
		
		
		<!-- Fonts -->
		<link rel="stylesheet" href="../dist/global/fonts/material-design/material-design.min.css">
		<link rel="stylesheet" href="../dist/global/fonts/brand-icons/brand-icons.min.css">
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
		
		<!-- Scripts -->
		<script src="../dist/global/vendor/breakpoints/breakpoints.js"></script>
		<script>
			Breakpoints();
		</script>
	</head>
	<body class="animsition dashboard">
		<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
		
			<div class="navbar-header">
				<button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
					data-toggle="menubar">
					<span class="sr-only">Toggle navigation</span>
					<span class="hamburger-bar"></span>
				</button>
				<button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
					data-toggle="collapse">
					<i class="icon md-more" aria-hidden="true"></i>
				</button>
				<div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
					<img class="navbar-brand-logo" src="../dist/assets/images/logo.png" title="Remark">
					<span class="navbar-brand-text hidden-xs-down"> Remark</span>
				</div>
				<button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
					data-toggle="collapse">
					<span class="sr-only">Toggle Search</span>
					<i class="icon md-search" aria-hidden="true"></i>
				</button>
			</div>
		
			<div class="navbar-container container-fluid">
				<!-- Navbar Collapse -->
				<div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
					<!-- Navbar Toolbar -->
					<ul class="nav navbar-toolbar">
						<li class="nav-item hidden-float" id="toggleMenubar">
							<a class="nav-link" data-toggle="menubar" href="#" role="button">
								<i class="icon hamburger hamburger-arrow-left">
									<span class="sr-only">Toggle menubar</span>
									<span class="hamburger-bar"></span>
								</i>
							</a>
						</li>
					</ul>
					<!-- End Navbar Toolbar -->
		
					<!-- Navbar Toolbar Right -->
					<ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
						<li class="nav-item dropdown">
							<a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
								aria-expanded="false" data-animation="scale-up" role="button">
								<i class="icon md-notifications" aria-hidden="true"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
								<div class="dropdown-menu-header">
									<h5>NOTIFICATIONS</h5>
								</div>
								<div class="list-group">
									<div data-role="container">
										<div data-role="content">
											<a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
												<div class="media">
													<div class="pr-10">
														<i class="icon md-receipt bg-red-600 white icon-circle" aria-hidden="true"></i>
													</div>
													<div class="media-body">
														<h6 class="media-heading">A new order has been placed</h6>
														<time class="media-meta" datetime="2017-06-12T20:50:48+08:00">5 hours ago</time>
													</div>
												</div>
											</a>
											<a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
												<div class="media">
													<div class="pr-10">
														<i class="icon md-account bg-green-600 white icon-circle" aria-hidden="true"></i>
													</div>
													<div class="media-body">
														<h6 class="media-heading">Completed the task</h6>
														<time class="media-meta" datetime="2017-06-11T18:29:20+08:00">2 days ago</time>
													</div>
												</div>
											</a>
											<a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
												<div class="media">
													<div class="pr-10">
														<i class="icon md-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
													</div>
													<div class="media-body">
														<h6 class="media-heading">Settings updated</h6>
														<time class="media-meta" datetime="2017-06-11T14:05:00+08:00">2 days ago</time>
													</div>
												</div>
											</a>
											<a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
												<div class="media">
													<div class="pr-10">
														<i class="icon md-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
													</div>
													<div class="media-body">
														<h6 class="media-heading">Event started</h6>
														<time class="media-meta" datetime="2017-06-10T13:50:18+08:00">3 days ago</time>
													</div>
												</div>
											</a>
											<a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
												<div class="media">
													<div class="pr-10">
														<i class="icon md-comment bg-orange-600 white icon-circle" aria-hidden="true"></i>
													</div>
													<div class="media-body">
														<h6 class="media-heading">Message received</h6>
														<time class="media-meta" datetime="2017-06-10T12:34:48+08:00">3 days ago</time>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="dropdown-menu-footer">
									<a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
										<i class="icon md-settings" aria-hidden="true"></i>
									</a>
									<a class="dropdown-item" href="javascript:void(0)" role="menuitem">
										All notifications
									</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
								data-animation="scale-up" role="button">
								<span class="avatar avatar-online">
									<img src="../dist/global/portraits/5.jpg" alt="...">
									<i></i>
								</span>
							</a>
							<div class="dropdown-menu" role="menu">
								<a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-account" aria-hidden="true"></i> Profile</a>
								<a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-card" aria-hidden="true"></i> Billing</a>
								<a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-settings" aria-hidden="true"></i> Settings</a>
								<div class="dropdown-divider" role="presentation"></div>
								<a class="dropdown-item" href="../config/logout.php" role="menuitem"><i class="icon md-power" aria-hidden="true"></i> Logout</a>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>

		<?php require 'sidebar/sidebar.php'; ?>

		<?php
			extract($_GET);
			if(empty($_GET['halaman'])){
				require 'dashboard/dashboard.php';
			} else if($_GET['halaman'] == 'beranda'){
				require 'dashboard/dashboard.php';
			} else if($_GET['halaman'] == 'job_title'){
				require 'job_title/view/job_title.php';
			} else if($_GET['halaman'] == 'golongan_darah'){
				require 'golongan_darah/view/gol_darah.php';
			} else if($_GET['halaman'] == 'pendidikan'){
				require 'pendidikan/view/pendidikan.php';
			} else if($_GET['halaman'] == 'izin'){
				require 'izin/view/izin.php';
			} else if($_GET['halaman'] == 'kalender'){
				require 'kalender/view/kalender.php';
			} else {
				require 'helper/404.php';
			}
		
		?>
		<footer class="site-footer">
			<div class="site-footer-legal">© 2018  
			<div class="site-footer-right">
				<?php echo $_SESSION['user']; ?>
			</div>
		</footer>
		<!-- Core  -->
		<script src="../dist/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
		<script src="../dist/global/vendor/jquery/jquery.js"></script>
		<script src="../dist/global/vendor/popper-js/umd/popper.min.js"></script>
		<script src="../dist/global/vendor/bootstrap/bootstrap.js"></script>
		<script src="../dist/global/vendor/animsition/animsition.js"></script>
		<script src="../dist/global/vendor/mousewheel/jquery.mousewheel.js"></script>
		<script src="../dist/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
		<script src="../dist/global/vendor/asscrollable/jquery-asScrollable.js"></script>
		<script src="../dist/global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
		<script src="../dist/global/vendor/waves/waves.js"></script>
		
		<!-- Plugins -->
		<script src="../dist/global/vendor/switchery/switchery.js"></script>
		<script src="../dist/global/vendor/intro-js/intro.js"></script>
		<script src="../dist/global/vendor/screenfull/screenfull.js"></script>
		<script src="../dist/global/vendor/slidepanel/jquery-slidePanel.js"></script>
			<script src="../dist/global/vendor/chartist/chartist.min.js"></script>
			<script src="../dist/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js"></script>
			<script src="../dist/global/vendor/jvectormap/jquery-jvectormap.min.js"></script>
			<script src="../dist/global/vendor/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
			<script src="../dist/global/vendor/matchheight/jquery.matchHeight-min.js"></script>
			<script src="../dist/global/vendor/peity/jquery.peity.min.js"></script>
			<script src="../dist/global/vendor/datatables.net/jquery.dataTables.js"></script>
			<script src="../dist/global/vendor/datatables.net-bs4/dataTables.bootstrap4.js"></script>
			<script src="../dist/global/vendor/datatables.net-responsive/dataTables.responsive.js"></script>
			<script src="../dist/global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
			
			<script type="text/javascript">
				
			</script>

		<!-- Scripts -->
		<script src="../dist/global/js/Component.js"></script>
		<script src="../dist/global/js/Plugin.js"></script>
		<script src="../dist/global/js/Base.js"></script>
		<script src="../dist/global/js/Config.js"></script>
		
		<script src="../dist/assets/js/Section/Menubar.js"></script>
		<script src="../dist/assets/js/Section/GridMenu.js"></script>
		<script src="../dist/assets/js/Section/Sidebar.js"></script>
		<script src="../dist/assets/js/Section/PageAside.js"></script>
		<script src="../dist/assets/js/Plugin/menu.js"></script>
		
		<script src="../dist/global/js/config/colors.js"></script>
		<script src="../dist/assets/js/config/tour.js"></script>
		<script>Config.set('assets', '../dist/assets');</script>
		
		
		<!-- Page -->
		<script src="../dist/assets/js/Site.js"></script>
		<script src="../dist/global/js/Plugin/asscrollable.js"></script>
		<script src="../dist/global/js/Plugin/slidepanel.js"></script>
		<script src="../dist/global/js/Plugin/switchery.js"></script>
			<script src="../dist/global/js/Plugin/matchheight.js"></script>
			<script src="../dist/global/js/Plugin/jvectormap.js"></script>
			<script src="../dist/global/js/Plugin/peity.js"></script>
	
			<script src="../dist/assets/examples/js/dashboard/v1.js"></script>
		
	</body>
</html>