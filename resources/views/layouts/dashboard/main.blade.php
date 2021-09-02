<!DOCTYPE html>
<html lang="en">
<head>
    <title>DashboardKit Bootstrap 5 Admin Template</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="{{ asset('../') }}/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="{{ asset('../') }}/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="DashboardKit is modern yet powerful Bootstrap 5 Admin Template comes with thousands of UI components & 180+ pages."/>
    <meta name="keywords" content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template"/>
    <meta name="author" content="DashboardKit"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.svg" type="image/x-icon">

    @yield('css')
    <!-- font css -->
    <link rel="stylesheet" href="{{ asset('../') }}/assets/fonts/feather.css">
    <link rel="stylesheet" href="{{ asset('../') }}/assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('../') }}/assets/fonts/material.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('../') }}/assets/css/style.css" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('../') }}/assets/css/customizer.css">
    

</head>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ Mobile header ] start -->
	<div class="pc-mob-header pc-header">
		<div class="pcm-logo">
			<img src="{{ asset('../') }}/assets/images/logo.svg" alt="" class="logo logo-lg">
		</div>
		<div class="pcm-toolbar">
			<a href="#!" class="pc-head-link" id="mobile-collapse">
				<div class="hamburger hamburger--arrowturn">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
				<!-- <i data-feather="menu"></i> -->
			</a>
			<a href="#!" class="pc-head-link" id="headerdrp-collapse">
				<i data-feather="align-right"></i>
			</a>
			<a href="#!" class="pc-head-link" id="header-collapse">
				<i data-feather="more-vertical"></i>
			</a>
		</div>
	</div>
	<!-- [ Mobile header ] End -->

	<!-- [ navigation menu ] start -->
	<nav class="pc-sidebar ">
		<div class="navbar-wrapper">
			<div class="m-header">
				<a href="{{ url('admin-dashboard') }}" class="b-brand">
					<!-- ========   change your logo hear   ============ -->
					<h3 style="color: #fff">Servalley</h3>
					<img src="{{ asset('../') }}/assets/images/logo-sm.svg" alt="" class="logo logo-sm">
				</a>
			</div>
			<div class="navbar-content">
				<ul class="pc-navbar">
					<li class="pc-item pc-caption">
						<label>Navigation</label>
					</li>
					<li class="pc-item pc-hasmenu">
						<a class="pc-link" href="{{ url('admin-dashboard') }}">    <i data-feather="settings"></i> Dashboard</a>
					</li>
					<li class="pc-item pc-hasmenu">
						<a class="pc-link" href="{{ url('admin-category') }}">    <i data-feather="settings"> </i>Categories</a>
					</li>
					<li class="pc-item pc-hasmenu">
						<a class="pc-link" href="{{ url('admin-providers') }}">    <i data-feather="settings"> </i>Providers</a>
					</li>
					<li class="pc-item pc-hasmenu">
						<a class="pc-link" href="{{ url('admin-users') }}">    <i data-feather="settings"></i> Users</a>
					</li>
					

				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="pc-header ">
		<div class="header-wrapper">
			<div class="me-auto pc-mob-drp">
				<ul class="list-unstyled">
					<li class="dropdown pc-h-item">
						<a class="pc-head-link active dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							Level
						</a>
						<div class="dropdown-menu pc-h-dropdown">
							<a href="#!" class="dropdown-item">
								<i class="material-icons-two-tone">account_circle</i>
								<span>My Account</span>
							</a>
							<div class="pc-level-menu">
								<a href="#!" class="dropdown-item">
									<i class="material-icons-two-tone">list_alt</i>
									<span class="float-end"><i data-feather="chevron-right" class="me-0"></i></span>
									<span>Level2.1</span>
								</a>
								<div class="dropdown-menu pc-h-dropdown">
									<a href="#!" class="dropdown-item">
										<i class="fas fa-circle"></i>
										<span>My Account</span>
									</a>
									<a href="#!" class="dropdown-item">
										<i class="fas fa-circle"></i>
										<span>Settings</span>
									</a>
									<a href="#!" class="dropdown-item">
										<i class="fas fa-circle"></i>
										<span>Support</span>
									</a>
									<a href="#!" class="dropdown-item">
										<i class="fas fa-circle"></i>
										<span>Lock Screen</span>
									</a>
									<a href="{{ url('/logout') }}" class="dropdown-item">
										<i class="fas fa-circle"></i>
										<span>Logout</span>
									</a>
								</div>
							</div>
							<a href="#!" class="dropdown-item">
								<i class="material-icons-two-tone">settings</i>
								<span>Settings</span>
							</a>
							<a href="#!" class="dropdown-item">
								<i class="material-icons-two-tone">support</i>
								<span>Support</span>
							</a>
							<a href="#!" class="dropdown-item">
								<i class="material-icons-two-tone">https</i>
								<span>Lock Screen</span>
							</a>
							<a href="{{ url('/logout') }}" class="dropdown-item">
								<i class="material-icons-two-tone">chrome_reader_mode</i>
								<span>Logout</span>
							</a>
						</div>
					</li>
					<li class="dropdown pc-h-item pc-mega-menu">
						<a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							Mega
						</a>
						<div class="dropdown-menu pc-h-dropdown pc-mega-dmenu">
							<div class="row g-0">
								<div class="col">
									<h6 class="mega-title">Primitives</h6>
									<ul class="pc-mega-list">
										<li><a href="#!" class="dropdown-item"><i class="material-icons-two-tone">account_circle</i><span>My Account</span></a></li>
										<li><a href="#!" class="dropdown-item"><i class="material-icons-two-tone">settings</i><span>Settings</span></a></li>
										<li><a href="#!" class="dropdown-item"><i class="material-icons-two-tone">support</i><span>Support</span></a></li>
										<li><a href="#!" class="dropdown-item"><i class="material-icons-two-tone">https</i><span>Lock Screen</span></a></li>
										<li><a href="#!" class="dropdown-item"><i class="material-icons-two-tone">chrome_reader_mode</i><span>Logout</span></a></li>
										<li><a href="#!" class="dropdown-item"><i class="material-icons-two-tone">movie_creation</i><span>Button</span></a></li>
										<li><a href="#!" class="dropdown-item"><i class="material-icons-two-tone">devices_other</i><span>Avatars</span></a></li>
									</ul>
								</div>
								<div class="col">
									<h6 class="mega-title">UI Components</h6>
									<ul class="pc-mega-list">
										<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Alerts</a></li>
										<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Accordions</a></li>
										<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Avatars</a></li>
										<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Badges</a></li>
										<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Breadcrumbs</a></li>
										<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Button</a></li>
										<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Buttons Groups</a></li>
									</ul>
								</div>
								<div class="col">
									<h6 class="mega-title">UI Components</h6>
									<ul class="pc-mega-list">
										<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Menus</a></li>
										<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Media Sliders / Carousel</a></li>
										<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Modals</a></li>
										<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Pagination</a></li>
										<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Progress Bars &amp; Graphs</a></li>
										<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Search Bar</a></li>
										<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Tabs</a></li>
									</ul>
								</div>
								<div class="col">
									<h6 class="mega-title">Advance Components</h6>
									<ul class="pc-mega-list">
										<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Advanced Stats</a></li>
										<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Advanced Cards</a></li>
										<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Lightbox</a></li>
										<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Notification</a></li>
										<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Pnotify</a></li>
									</ul>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="ms-auto">
				<ul class="list-unstyled">
					
					<li class="dropdown pc-h-item">
						<a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							<img src="{{ asset('../') }}/assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar">
							<span>
								<span class="user-name">Joseph William</span>
								<span class="user-desc">Administrator</span>
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
						
							<a href="{{ url('/logout') }}" class="dropdown-item">
								<i class="material-icons-two-tone".></i>
								<span>Logout</span>
							</a>
						</div>
					</li>
				</ul>
			</div>

		</div>
	</header>

	<!-- Modal -->
	<div class="modal notification-modal fade" id="notification-modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
					<ul class="nav nav-pill tabs-light mb-3" id="pc-noti-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="pc-noti-home-tab" data-bs-toggle="pill" href="#pc-noti-home" role="tab" aria-controls="pc-noti-home" aria-selected="true">Notification</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pc-noti-news-tab" data-bs-toggle="pill" href="#pc-noti-news" role="tab" aria-controls="pc-noti-news" aria-selected="false">News<span class="badge bg-danger ms-2 d-none d-sm-inline-block">4</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pc-noti-settings-tab" data-bs-toggle="pill" href="#pc-noti-settings" role="tab" aria-controls="pc-noti-settings" aria-selected="false">Setting<span class="badge bg-success ms-2 d-none d-sm-inline-block">Update</span></a>
						</li>
					</ul>
					<div class="tab-content pt-4" id="pc-noti-tabContent">
						<div class="tab-pane fade show active" id="pc-noti-home" role="tabpanel" aria-labelledby="pc-noti-home-tab">
							<div class="media">
								<img src="{{ asset('../') }}/assets/images/user/avatar-1.jpg" alt="images" class="img-fluid avtar avtar-l">
								<div class="media-body ms-3 align-self-center">
									<div class="float-end">
										<div class="btn-group card-option">
											<button type="button" class="btn shadow-none">
												<i data-feather="heart" class="text-danger"></i>
											</button>
											<button type="button" class="btn shadow-none px-0 dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i data-feather="more-horizontal"></i>
											</button>
											<div class="dropdown dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#!"><i data-feather="refresh-cw"></i> reload</a>
												<a class="dropdown-item" href="#!"><i data-feather="trash"></i> remove</a>
											</div>
										</div>
									</div>
									<h6 class="mb-0 d-inline-block">Ashoka T.</h6>
									<p class="mb-0 d-inline-block f-12 text-muted"> • 06/20/2019 at 6:43 PM </p>
									<p class="my-3">Cras sit amet nibh libero in gravida nulla Nulla vel metus scelerisque ante sollicitudin.</p>
									<div class="p-3 border rounded">
										<div class="media align-items-center">
											<div class="media-body">
												<h6 class="mb-1 f-14">Death Star original maps and blueprint.pdf</h6>
												<p class="mb-0 text-muted">by<a href="#!"> Ashoka T </a>.</p>
											</div>
											<div class="btn-group d-none d-sm-inline-flex">
												<button type="button" class="btn shadow-none">
													<i data-feather="download-cloud"></i>
												</button>
												<button type="button" class="btn shadow-none px-0 dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i data-feather="more-horizontal"></i>
												</button>
												<div class="dropdown dropdown-menu dropdown-menu-end">
													<a class="dropdown-item" href="#!"><i data-feather="refresh-cw"></i> reload</a>
													<a class="dropdown-item" href="#!"><i data-feather="trash"></i> remove</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<hr class="mb-4">
							<div class="media">
								<img src="{{ asset('../') }}/assets/images/user/avatar-2.jpg" alt="images" class="img-fluid avtar avtar-l">
								<div class="media-body ms-3 align-self-center">
									<div class="float-end">
										<div class="btn-group card-option">
											<button type="button" class="btn shadow-none px-0 dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i data-feather="more-horizontal"></i>
											</button>
											<div class="dropdown dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#!"><i data-feather="refresh-cw"></i> reload</a>
												<a class="dropdown-item" href="#!"><i data-feather="trash"></i> remove</a>
											</div>
										</div>
									</div>
									<h6 class="mb-0 d-inline-block">Ashoka T.</h6>
									<p class="mb-0 d-inline-block  f-12 text-muted"> • 06/20/2019 at 6:43 PM </p>
									<p class="my-3">Cras sit amet nibh libero in gravida nulla Nulla vel metus scelerisque ante sollicitudin.</p>
									<img src="{{ asset('../') }}/assets/images/slider/img-slide-3.jpg" alt="images" class="img-fluid wid-90 rounded m-r-10 m-b-10">
									<img src="{{ asset('../') }}/assets/images/slider/img-slide-7.jpg" alt="images" class="img-fluid wid-90 rounded m-r-10 m-b-10">
								</div>
							</div>
							<hr class="mb-4">
							<div class="media mb-3">
								<img src="{{ asset('../') }}/assets/images/user/avatar-3.jpg" alt="images" class="img-fluid avtar avtar-l">
								<div class="media-body ms-3 align-self-center">
									<div class="float-end">
										3 <i data-feather="heart" class="text-danger fill-danger"></i>
									</div>
									<h6 class="mb-0 d-inline-block">Ashoka T.</h6>
									<p class="mb-0 d-inline-block  f-12 <text-muted></text-muted>"> • 06/20/2019 at 6:43 PM </p>
									<p class="my-3">Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur.</p>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pc-noti-news" role="tabpanel" aria-labelledby="pc-noti-news-tab">
							<div class="pb-3 border-bottom mb-3 media">
								<a href="#!"><img src="{{ asset('../') }}/assets/images/news/img-news-2.jpg" class="wid-90 rounded" alt="..."></a>
								<div class="media-body ms-3">
									<p class="float-end mb-0 text-success"><small>now</small></p>
									<a href="#!"><h6>This is a news image</h6></a>
									<p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
								</div>
							</div>
							<div class="pb-3 border-bottom mb-3 media">
								<a href="#!"><img src="{{ asset('../') }}/assets/images/news/img-news-1.jpg" class="wid-90 rounded" alt="..."></a>
								<div class="media-body ms-3">
									<p class="float-end mb-0 text-muted"><small>3 mins ago</small></p>
									<a href="#!"><h6>Industry's standard dummy</h6></a>
									<p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
									<a href="#" class="bg-light">Html</a>
									<a href="#" class="bg-light">UI/UX designed</a>
								</div>
							</div>
							<div class="pb-3 border-bottom mb-3 media">
								<a href="#!"><img src="{{ asset('../') }}/assets/images/news/img-news-2.jpg" class="wid-90 rounded" alt="..."></a>
								<div class="media-body ms-3">
									<p class="float-end mb-0 text-muted"><small>5 mins ago</small></p>
									<a href="#!"><h6>Ipsum has been the industry's</h6></a>
									<p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
									<a href="#" class="bg-light">JavaScript</a>
									<a href="#" class="bg-light">Scss</a>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pc-noti-settings" role="tabpanel" aria-labelledby="pc-noti-settings-tab">
							<h6 class="mt-2"><i data-feather="monitor" class="me-2"></i>Desktop settings</h6>
							<hr>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="pcsetting1" checked>
								<label class="custom-control-label f-w-600 pl-1" for="pcsetting1">Allow desktop notification</label>
							</div>
							<p class="text-muted ms-5">you get lettest content at a time when data will updated</p>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="pcsetting2">
								<label class="custom-control-label f-w-600 pl-1" for="pcsetting2">Store Cookie</label>
							</div>
							<h6 class="mb-0 mt-5"><i data-feather="save" class="me-2"></i>Application settings</h6>
							<hr>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="pcsetting3">
								<label class="custom-control-label f-w-600 pl-1" for="pcsetting3">Backup Storage</label>
							</div>
							<p class="text-muted mb-4 ms-5">Automaticaly take backup as par schedule</p>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="pcsetting4">
								<label class="custom-control-label f-w-600 pl-1" for="pcsetting4">Allow guest to print file</label>
							</div>
							<h6 class="mb-0 mt-5"><i data-feather="cpu" class="me-2"></i>System settings</h6>
							<hr>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="pcsetting5" checked>
								<label class="custom-control-label f-w-600 pl-1" for="pcsetting5">View other user chat</label>
							</div>
							<p class="text-muted ms-5">Allow to show public user message</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light-danger btn-sm" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-light-primary btn-sm">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!-- [ Header ] end -->

<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->


        @yield('content')
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="{{ asset('../') }}/assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="{{ asset('../') }}/assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="{{ asset('../') }}/assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="{{ asset('../') }}/assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="{{ asset('../') }}/assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Js -->
    <script src="{{ asset('../') }}/assets/js/vendor-all.min.js"></script>
    <script src="{{ asset('../') }}/assets/js/plugins/bootstrap.min.js"></script>
    <script src="{{ asset('../') }}/assets/js/plugins/feather.min.js"></script>
    <script src="{{ asset('../') }}/assets/js/pcoded.min.js"></script>
    <script src="{{ asset('../') }}/assets/js/plugins/sweetalert2.all.min.js"></script>
    <!-- <script src="{{ asset('../') }}/https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script> -->
    <!-- <script src="{{ asset('../') }}/assets/js/plugins/clipboard.min.js"></script> -->
    <!-- <script src="{{ asset('../') }}/assets/js/uikit.min.js"></script> -->


	 @yield('js')

<!-- <div class="pct-customizer">
    <div class="pct-c-btn">
        <button class="btn btn-light-danger" id="pct-toggler">
            <i data-feather="settings"></i>
        </button>
        <button class="btn btn-light-primary" data-bs-toggle="tooltip" title="Document" data-placement="left">
            <i data-feather="book"></i>
        </button>
        <button class="btn btn-light-success" data-bs-toggle="tooltip" title="Buy Now" data-placement="left">
            <i data-feather="shopping-bag"></i>
        </button>
        <button class="btn btn-light-info" data-bs-toggle="tooltip" title="Support" data-placement="left">
            <i data-feather="headphones"></i>
        </button>
    </div>
    <div class="pct-c-content ">
        <div class="pct-header bg-primary">
            <h5 class="mb-0 text-white f-w-500">DashboardKit Customizer</h5>
        </div>
        <div class="pct-body">
            <h6 class="mt-2"><i data-feather="credit-card" class="me-2"></i>Header settings</h6>
            <hr class="my-2">
            <div class="theme-color header-color">
                <a href="#!" class="" data-value="bg-default"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-primary"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-danger"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-warning"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-info"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-success"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-dark"><span></span><span></span></a>
            </div>
            <h6 class="mt-4"><i data-feather="layout" class="me-2"></i>Sidebar settings</h6>
            <hr class="my-2">
            <div class="form-check form-switch">
                <input type="checkbox" class="form-check-input" id="cust-sidebar">
                <label class="form-check-label f-w-600 pl-1" for="cust-sidebar">Light Sidebar</label>
            </div>
            <div class="form-check form-switch mt-2">
                <input type="checkbox" class="form-check-input" id="cust-sidebrand">
                <label class="form-check-label f-w-600 pl-1" for="cust-sidebrand">Color Brand</label>
            </div>
            <div class="theme-color brand-color d-none">
                <a href="#!" class="active" data-value="bg-primary"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-danger"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-warning"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-info"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-success"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-dark"><span></span><span></span></a>
            </div>
            <h6 class="mt-4"><i data-feather="sun" class="me-2"></i>Layout settings</h6>
            <hr class="my-2">
            <div class="form-check form-switch mt-2">
                <input type="checkbox" class="form-check-input" id="cust-darklayout">
                <label class="form-check-label f-w-600 pl-1" for="cust-darklayout">Dark Layout</label>
            </div>
        </div>
    </div>
</div> -->

<script>
    $('#pct-toggler').on('click', function() {
        $('.pct-customizer').toggleClass('active');
    });
    $('#cust-sidebrand').change(function() {
        if ($(this).is(":checked")) {
            $('.theme-color.brand-color').removeClass('d-none');
            $('.m-header').addClass('bg-dark');
        } else {
            $('.m-header').removeClassPrefix('bg-');
            $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo-dark.svg');
            $('.theme-color.brand-color').addClass('d-none');
        }
    });
    $('.brand-color > a').on('click', function() {
        var temp = $(this).attr('data-value');
        if (temp == "bg-default") {
            $('.m-header').removeClassPrefix('bg-');
        } else {
            $('.m-header').removeClassPrefix('bg-');
            $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo.svg');
            $('.m-header').addClass(temp);
        }
    });
    $('.header-color > a').on('click', function() {
        var temp = $(this).attr('data-value');
        if (temp == "bg-default") {
            $('.pc-header').removeClassPrefix('bg-');
        } else {
            $('.pc-header').removeClassPrefix('bg-');
            $('.pc-header').addClass(temp);
        }
    });
    $('#cust-sidebar').change(function() {
        if ($(this).is(":checked")) {
            $('.pc-sidebar').addClass('light-sidebar');
            $('.pc-horizontal .topbar').addClass('light-sidebar');
        } else {
            $('.pc-sidebar').removeClass('light-sidebar');
            $('.pc-horizontal .topbar').removeClass('light-sidebar');
        }
    });
    $('#cust-darklayout').change(function() {
        if ($(this).is(":checked")) {
            $("#main-style-link").attr("href", "assets/css/style-dark.css");
        } else {
            $("#main-style-link").attr("href", "assets/css/style.css");
        }
    });
    $.fn.removeClassPrefix = function(prefix) {
        this.each(function(i, it) {
            var classes = it.className.split(" ").map(function(item) {
                return item.indexOf(prefix) === 0 ? "" : item;
            });
            it.className = classes.join(" ");
        });
        return this;
    };
</script>

<!-- custom-chart js -->
</body>
</html>
