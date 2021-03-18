<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Syndash - Bootstrap4 Admin Template</title>
	<!--favicon-->
	<link rel="icon" href="/admin/assets/images/favicon-32x32.png" type="image/png" />
	<!-- Vector CSS -->
	<link href="/admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	<!--plugins-->
	<link href="/admin/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="/admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="/admin/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="/admin/assets/css/pace.min.css" rel="stylesheet" />
	<script src="/admin/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/admin/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&amp;family=Roboto&amp;display=swap" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="/admin/assets/css/icons.css" />
	<!-- App CSS -->
	<link rel="stylesheet" href="/admin/assets/css/app.css" />
	<link rel="stylesheet" href="/admin/assets/css/dark-sidebar.css" />
	<link rel="stylesheet" href="/admin/assets/css/dark-theme.css" />
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--sidebar-wrapper-->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div class="">
					<img src="/assets/coin.jpeg" class="logo-icon-2" alt="" />
				</div>
				<div>
					<h4 class="logo-text">Coinstation</h4>
				</div>
				<a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
				</a>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="{{ route('admin.home') }}" >
						<div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
                <li>
					<a href="{{ route('admin.profil') }}">
						<div class="parent-icon icon-color-2"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">Mon Profil</div>
					</a>
				</li>
				<li>
					<a href="{{ route('admin.transaction','depot') }}">
						<div class="parent-icon icon-color-2"><i class="bx bx-envelope"></i>
						</div>
						<div class="menu-title">Demande de depot</div>
					</a>
				</li>
                <li>
					<a href="{{ route('admin.transaction.verfication','depot') }}">
						<div class="parent-icon icon-color-2"><i class="bx bx-envelope"></i>
						</div>
						<div class="menu-title">Depot effectué</div>
					</a>
				</li>
				<li>
					<a href="{{ route('admin.transaction','retrait') }}">
						<div class="parent-icon icon-color-3"> <i class="bx bx-conversation"></i>
						</div>
						<div class="menu-title">Demande de retrait</div>
					</a>
				</li>
                <li>
					<a href="{{ route('admin.transaction.verfication','retrait') }}">
						<div class="parent-icon icon-color-3"> <i class="bx bx-conversation"></i>
						</div>
						<div class="menu-title"> retraits effectués</div>
					</a>
				</li>



                <li>
					<a href="{{ route('admin.Search') }}">
						<div class="parent-icon icon-color-3"> <i class="bx bx-search"></i>
						</div>
						<div class="menu-title">Rechercher un utilisateur</div>
					</a>
				</li>
				<li>
					<a href="{{ route('admin.inscription') }}">
						<div class="parent-icon icon-color-5"><i class="bx bx-group"></i>
						</div>
						<div class="menu-title">Les inscrits</div>
					</a>
				</li>
				<li>
					<a href="to-do.html">
						<div class="parent-icon icon-color-6"><i class="bx bx-task"></i>
						</div>
						<div class="menu-title">Todo List</div>
					</a>
				</li>
				<li>
					<a href="invoice.html">
						<div class="parent-icon icon-color-7"><i class="bx bx-file"></i>
						</div>
						<div class="menu-title">Invoice</div>
					</a>
				</li>
				<li>
					<a href="fullcalender.html">
						<div class="parent-icon icon-color-8"> <i class="bx bx-calendar-check"></i>
						</div>
						<div class="menu-title">Calendar</div>
					</a>
				</li>
			</ul>
		</div>
		<header class="top-header">
			<nav class="navbar navbar-expand">
				<div class="left-topbar d-flex align-items-center">
					<a href="javascript:;" class="toggle-btn">	<i class="bx bx-menu"></i>
					</a>
				</div>
				<div class="flex-grow-1 search-bar">
					<div class="input-group">
						<div class="input-group-prepend search-arrow-back">
							<button class="btn btn-search-back" type="button"><i class="bx bx-arrow-back"></i>
							</button>
						</div>
						<input type="text" class="form-control" placeholder="search" />
						<div class="input-group-append">
							<button class="btn btn-search" type="button"><i class="lni lni-search-alt"></i>
							</button>
						</div>
					</div>
				</div>
				<div class="right-topbar ml-auto">
					<ul class="navbar-nav">
						<li class="nav-item dropdown dropdown-user-profile">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
								<div class="media user-box align-items-center">
									<div class="media-body user-info">
										<p class="user-name mb-0">Coinstation</p>
										<p class="designattion mb-0">Available</p>
									</div>
									<img src="/assets/coin.jpeg" class="user-img" alt="user avatar">
								</div>
							</a>

						</li>

					</ul>
				</div>
			</nav>
		</header>
		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
                    @yield('container')
                </div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->

	</div>

	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="custom-control custom-radio">
					<input type="radio" id="darkmode" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="darkmode">Dark Mode</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" id="lightmode" name="customRadio" checked class="custom-control-input">
					<label class="custom-control-label" for="lightmode">Light Mode</label>
				</div>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="DarkSidebar">
				<label class="custom-control-label" for="DarkSidebar">Dark Sidebar</label>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="ColorLessIcons">
				<label class="custom-control-label" for="ColorLessIcons">Color Less Icons</label>
			</div>
		</div>
	</div>
	<!--end switcher-->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="/admin/assets/js/jquery.min.js"></script>
	<script src="/admin/assets/js/popper.min.js"></script>
	<script src="/admin/assets/js/bootstrap.min.js"></script>
	<!--plugins-->
	<script src="/admin/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="/admin/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="/admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!-- Vector map JavaScript -->
	<script src="/admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="/admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="/admin/assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
	<script src="/admin/assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
	<script src="/admin/assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
	<script src="/admin/assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
	<script src="/admin/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="/admin/assets/js/index.js"></script>

	<!-- App JS -->
	<script src="/admin/assets/js/app.js"></script>
	<script>
		new PerfectScrollbar('.dashboard-social-list');
		new PerfectScrollbar('.dashboard-top-countries');
	</script>
</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 08:00:18 GMT -->
</html>
