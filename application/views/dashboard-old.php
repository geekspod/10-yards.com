<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive employee Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-employee-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-employee-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

	<!-- begin::Head -->
	<head>

		<!--begin::Base Path (base relative path for assets of this page) -->
		<base href="../">

		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title>10-yards | Employee | Dashboard</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="<?php echo base_url(); ?>employee/assets/css/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Page Vendors Styles -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="<?php echo base_url(); ?>employee/assets/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />


		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="<?php echo base_url(); ?>employee/assets/css/fa-solid-900.tff" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/fa-solid-900.woff" type="text/css" />

		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/summernote.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/animate.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/toastr.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/morris.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/icons/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>employee/assets/css/all.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/ionicons.min.css">

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="<?php echo base_url(); ?>employee/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="<?php echo base_url(); ?>employee/assets/css/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="<?php echo base_url(); ?>login/dashboard">
					<img alt="Logo" src="<?php echo base_url(); ?>login/dashboard" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<div class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></div>
				<div class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></div>
				<div class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></div>
			</div>
		</div>

		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- begin:: Aside -->
				<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
				<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

					<!-- begin:: Aside Menu -->
					<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
						<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
							<ul class="kt-menu__nav">
								<li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true"><a href="<?php echo base_url(); ?>login/dashboard" class="kt-menu__link"><i class="kt-menu__link-icon flaticon2-protection"></i><span class="kt-menu__link-text">Dashboard</span></a></li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-list-3"></i><span class="kt-menu__link-text">Categories</span><span class="kt-menu__link-badge"><span class="kt-badge kt-badge--brand">5</span></span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true">
											<span class="kt-menu__link"><span class="kt-menu__link-text">Actions</span><span class="kt-menu__link-badge">
											<span class="kt-badge kt-badge--brand">2</span></span></span></li>
											<!-- <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text"><?php echo $categories[0];?></span><i class="kt-menu__ver-arrow la la-angle-right"></i></a> -->
												<!-- <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">User</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Order</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Post</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Product</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Customer</span></a></li>
													</ul>
												</div> -->
											</li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="login/cultural_scan_questions_view" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text"><?php echo $categories[0];?></span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="login/nayatel_value_statements	" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text"><?php echo $categories[1];?></span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="login/personal_values_assessment	" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text"><?php echo $categories[2];?></span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="login/personality_assessment_questions" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text"><?php echo $categories[3];?></span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="login/work_personality_index_form" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text"><?php echo $categories[4];?></span></a></li>

										</ul>
									</div>
								</li>
								<!-- <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-calendar-6"></i><span class="kt-menu__link-text">Reports</span></a></li>
								<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-hourglass-1"></i><span class="kt-menu__link-text">Backup</span></a></li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-analytics-2"></i><span class="kt-menu__link-text">Config</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Config</span></span></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Import</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Backup</span></a></li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-medical-records-1"></i><span class="kt-menu__link-text">Console</span></a></li>
								<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-gear"></i><span class="kt-menu__link-text">System</span></a></li>
								<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-attention"></i><span class="kt-menu__link-text">Logs</span></a></li> -->
							</ul>
						</div>
					</div>

					<!-- end:: Aside Menu -->
				</div>

				<!-- end:: Aside -->
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid kt-grid--ver  kt-header--fixed ">

						<!-- begin:: Aside -->
						<div class="kt-header__brand kt-grid__item  " id="kt_header_brand">
							<div class="kt-header__brand-logo">
								<a href="<?php echo base_url(); ?>login/dashboard">
									<img alt="Logo" src="<?php echo base_url(); ?>employee/assets/css/logo-6.png" />
								</a>
							</div>
						</div>

						<!-- end:: Aside -->

						<!-- begin:: Title -->
						<h3 class="kt-header__title kt-grid__item">
							Dashboard
						</h3>

						<!-- end:: Title -->

						<!-- begin: Header Menu -->
						<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
						<div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">
							<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
								<ul class="kt-menu__nav ">
									<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="<?php echo base_url(); ?>login/dashboard" class="kt-menu__link "><span class="kt-menu__link-text">Dashboard</span></a></li>
									<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Pages</span><i class="kt-menu__hor-arrow la la-angle-down"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
										<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
											<ul class="kt-menu__subnav">
												<li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Create New Post</span></a></li>
												<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Generate Reports</span><span class="kt-menu__link-badge"><span class="kt-badge kt-badge--success">2</span></span></a></li>
												<li class="kt-menu__item  kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="#" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Manage Orders</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
													<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
														<ul class="kt-menu__subnav">
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Latest Orders</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Pending Orders</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Processed Orders</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Delivery Reports</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Payments</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Customers</span></a></li>
														</ul>
													</div>
												</li>
												<li class="kt-menu__item  kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="#" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Customer Feedbacks</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
													<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
														<ul class="kt-menu__subnav">
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Customer Feedbacks</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Supplier Feedbacks</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Reviewed Feedbacks</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Resolved Feedbacks</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Feedback Reports</span></a></li>
														</ul>
													</div>
												</li>
												<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Register Member</span></a></li>
											</ul>
										</div>
									</li>
									<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Reports</span><i class="kt-menu__hor-arrow la la-angle-down"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
										<div class="kt-menu__submenu  kt-menu__submenu--fixed kt-menu__submenu--left" style="width:1000px">
											<div class="kt-menu__subnav">
												<ul class="kt-menu__content">
													<li class="kt-menu__item ">
														<h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Finance Reports</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="kt-menu__inner">
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-map"></i><span class="kt-menu__link-text">Annual Reports</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-user"></i><span class="kt-menu__link-text">HR Reports</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-clipboard"></i><span class="kt-menu__link-text">IPO Reports</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-graphic-1"></i><span class="kt-menu__link-text">Finance Margins</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-graphic-2"></i><span class="kt-menu__link-text">Revenue Reports</span></a></li>
														</ul>
													</li>
													<li class="kt-menu__item ">
														<h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Project Reports</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="kt-menu__inner">
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Coca Cola CRM</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Delta Airlines Booking Site</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Malibu Accounting</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Vineseed Website Rewamp</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Zircon Mobile App</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Mercury CMS</span></a></li>
														</ul>
													</li>
													<li class="kt-menu__item ">
														<h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">HR Reports</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="kt-menu__inner">
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Staff Directory</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Client Directory</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Salary Reports</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Staff Payslips</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Corporate Expenses</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Project Expenses</span></a></li>
														</ul>
													</li>
													<li class="kt-menu__item ">
														<h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Reporting Apps</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="kt-menu__inner">
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Report Adjusments</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Sources & Mediums</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Reporting Settings</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Conversions</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Report Flows</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Audit & Logs</span></a></li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</li>
									<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Apps</span><i class="kt-menu__hor-arrow la la-angle-down"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
										<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
											<ul class="kt-menu__subnav">
												<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">eCommerce</span></a></li>
												<li class="kt-menu__item  kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="#" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Audience</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
													<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
														<ul class="kt-menu__subnav">
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-users"></i><span class="kt-menu__link-text">Active Users</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-interface-1"></i><span class="kt-menu__link-text">User Explorer</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-lifebuoy"></i><span class="kt-menu__link-text">Users Flows</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-graphic-1"></i><span class="kt-menu__link-text">Market Segments</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-graphic"></i><span class="kt-menu__link-text">User Reports</span></a></li>
														</ul>
													</div>
												</li>
												<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Marketing</span></a></li>
												<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Campaigns</span><span class="kt-menu__link-badge"><span class="kt-badge kt-badge--success">3</span></span></a></li>
												<li class="kt-menu__item  kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="#" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Cloud Manager</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
													<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
														<ul class="kt-menu__subnav">
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-add"></i><span class="kt-menu__link-text">File Upload</span><span class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">3</span></span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-signs-1"></i><span class="kt-menu__link-text">File Attributes</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-folder"></i><span class="kt-menu__link-text">Folders</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-cogwheel-2"></i><span class="kt-menu__link-text">System Settings</span></a></li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<!-- end: Header Menu -->

						<!-- begin:: Header Topbar -->
						<div class="kt-header__topbar">

							<!--begin: Search -->
							<div class="kt-header__topbar-item kt-header__topbar-item--search dropdown" id="kt_quick_search_toggle">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
									<span class="kt-header__topbar-icon"><i class="flaticon2-search-1"></i></span>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
									<div class="kt-quick-search kt-quick-search--inline" id="kt_quick_search_inline">
										<form method="get" class="kt-quick-search__form">
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
												<input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
												<div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
											</div>
										</form>
										<div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
										</div>
									</div>
								</div>
							</div>

							<!--end: Search -->

							<!--begin: Notifications -->
							<div class="kt-header__topbar-item dropdown">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
									<span class="kt-header__topbar-icon kt-header__topbar-icon--success"><i class="flaticon2-bell-alarm-symbol"></i></span>
									<span class="kt-hidden kt-badge kt-badge--danger"></span>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
									<form>

										<!--begin: Head -->
										<div class="kt-head kt-head--skin-dark kt-head--fit-x kt-head--fit-b" style="background-image: url(<?php echo base_url(); ?>employee/assets/media/misc/bg-1.jpg)">
											<h3 class="kt-head__title">
												User Notifications
												&nbsp;
												<span class="btn btn-success btn-sm btn-bold btn-font-md">23 new</span>
											</h3>
											<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-success kt-notification-item-padding-x" role="tablist">
												<li class="nav-item">
													<a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications" role="tab" aria-selected="true">Alerts</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#topbar_notifications_events" role="tab" aria-selected="false">Events</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs" role="tab" aria-selected="false">Logs</a>
												</li>
											</ul>
										</div>

										<!--end: Head -->
										<div class="tab-content">
											<div class="tab-pane active show" id="topbar_notifications_notifications" role="tabpanel">
												<div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon2-line-chart kt-font-success"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																New order has been received
															</div>
															<div class="kt-notification__item-time">
																2 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon2-box-1 kt-font-brand"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																New customer is registered
															</div>
															<div class="kt-notification__item-time">
																3 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon2-chart2 kt-font-danger"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																Application has been approved
															</div>
															<div class="kt-notification__item-time">
																3 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon2-image-file kt-font-warning"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																New file has been uploaded
															</div>
															<div class="kt-notification__item-time">
																5 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon2-bar-chart kt-font-info"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																New user feedback received
															</div>
															<div class="kt-notification__item-time">
																8 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon2-pie-chart-2 kt-font-success"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																System reboot has been successfully completed
															</div>
															<div class="kt-notification__item-time">
																12 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon2-favourite kt-font-danger"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																New order has been placed
															</div>
															<div class="kt-notification__item-time">
																15 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item kt-notification__item--read">
														<div class="kt-notification__item-icon">
															<i class="flaticon2-safe kt-font-primary"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																Company meeting canceled
															</div>
															<div class="kt-notification__item-time">
																19 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon2-psd kt-font-success"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																New report has been received
															</div>
															<div class="kt-notification__item-time">
																23 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon-download-1 kt-font-danger"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																Finance report has been generated
															</div>
															<div class="kt-notification__item-time">
																25 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon-security kt-font-warning"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																New customer comment recieved
															</div>
															<div class="kt-notification__item-time">
																2 days ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon2-pie-chart kt-font-success"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																New customer is registered
															</div>
															<div class="kt-notification__item-time">
																3 days ago
															</div>
														</div>
													</a>
												</div>
											</div>
											<div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
												<div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon2-psd kt-font-success"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																New report has been received
															</div>
															<div class="kt-notification__item-time">
																23 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon-download-1 kt-font-danger"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																Finance report has been generated
															</div>
															<div class="kt-notification__item-time">
																25 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon2-line-chart kt-font-success"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																New order has been received
															</div>
															<div class="kt-notification__item-time">
																2 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon2-box-1 kt-font-brand"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																New customer is registered
															</div>
															<div class="kt-notification__item-time">
																3 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon2-chart2 kt-font-danger"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																Application has been approved
															</div>
															<div class="kt-notification__item-time">
																3 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon2-image-file kt-font-warning"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																New file has been uploaded
															</div>
															<div class="kt-notification__item-time">
																5 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon2-bar-chart kt-font-info"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																New user feedback received
															</div>
															<div class="kt-notification__item-time">
																8 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon2-pie-chart-2 kt-font-success"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																System reboot has been successfully completed
															</div>
															<div class="kt-notification__item-time">
																12 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon2-favourite kt-font-brand"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																New order has been placed
															</div>
															<div class="kt-notification__item-time">
																15 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item kt-notification__item--read">
														<div class="kt-notification__item-icon">
															<i class="flaticon2-safe kt-font-primary"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																Company meeting canceled
															</div>
															<div class="kt-notification__item-time">
																19 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon2-psd kt-font-success"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																New report has been received
															</div>
															<div class="kt-notification__item-time">
																23 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon-download-1 kt-font-danger"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																Finance report has been generated
															</div>
															<div class="kt-notification__item-time">
																25 hrs ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon-security kt-font-warning"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																New customer comment recieved
															</div>
															<div class="kt-notification__item-time">
																2 days ago
															</div>
														</div>
													</a>
													<a href="#" class="kt-notification__item">
														<div class="kt-notification__item-icon">
															<i class="flaticon2-pie-chart kt-font-success"></i>
														</div>
														<div class="kt-notification__item-details">
															<div class="kt-notification__item-title">
																New customer is registered
															</div>
															<div class="kt-notification__item-time">
																3 days ago
															</div>
														</div>
													</a>
												</div>
											</div>
											<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
												<div class="kt-grid kt-grid--ver" style="min-height: 200px;">
													<div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">
														<div class="kt-grid__item kt-grid__item--middle kt-align-center">
															All caught up!
															<br>No new notifications.
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>

							<!--end: Notifications -->

							<!--begin: Quick actions -->
							<!-- <div class="kt-header__topbar-item dropdown">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
									<span class="kt-header__topbar-icon kt-header__topbar-icon--warning"><i class="flaticon2-gear"></i></span>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
									<form> -->

										<!--begin: Head -->
										<!-- <div class="kt-head kt-head--skin-dark" style="background-image: url(<?php echo base_url(); ?>employee/assets/media/misc/bg-1.jpg)">
											<h3 class="kt-head__title">
												User Quick Actions
												<span class="kt-space-15"></span>
												<span class="btn btn-success btn-sm btn-bold btn-font-md">23 tasks pending</span>
											</h3>
										</div> -->

										<!--end: Head -->

										<!--begin: Grid Nav -->
										<!-- <div class="kt-grid-nav kt-grid-nav--skin-light">
											<div class="kt-grid-nav__row">
												<a href="#" class="kt-grid-nav__item">
													<span class="kt-grid-nav__icon">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect id="bound" x="0" y="0" width="24" height="24" />
																<path d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
																<path d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z" id="C" fill="#000000" />
															</g>
														</svg> </span>
													<span class="kt-grid-nav__title">Accounting</span>
													<span class="kt-grid-nav__desc">eCommerce</span>
												</a>
												<a href="#" class="kt-grid-nav__item">
													<span class="kt-grid-nav__icon">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect id="bound" x="0" y="0" width="24" height="24" />
																<path d="M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
																<path d="M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z" id="Combined-Shape" fill="#000000" />
															</g>
														</svg> </span>
													<span class="kt-grid-nav__title">employeeistration</span>
													<span class="kt-grid-nav__desc">Console</span>
												</a>
											</div>
											<div class="kt-grid-nav__row">
												<a href="#" class="kt-grid-nav__item">
													<span class="kt-grid-nav__icon">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect id="bound" x="0" y="0" width="24" height="24" />
																<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" id="Combined-Shape" fill="#000000" />
																<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" id="Path" fill="#000000" opacity="0.3" />
															</g>
														</svg> </span>
													<span class="kt-grid-nav__title">Projects</span>
													<span class="kt-grid-nav__desc">Pending Tasks</span>
												</a>
												<a href="#" class="kt-grid-nav__item">
													<span class="kt-grid-nav__icon">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<polygon id="Shape" points="0 0 24 0 24 24 0 24" />
																<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" />
															</g>
														</svg> </span>
													<span class="kt-grid-nav__title">Customers</span>
													<span class="kt-grid-nav__desc">Latest cases</span>
												</a>
											</div>
										</div> -->

										<!--end: Grid Nav -->
									<!-- </form>
								</div>
							</div> -->

							<!--end: Quick actions -->

							<!-- begin: Cart -->
							<!-- <div class="kt-header__topbar-item dropdown">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
									<span class="kt-header__topbar-icon"><i class="flaticon2-shopping-cart-1"></i></span>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
									<form> -->

										<!-- begin:: Mycart -->
										<!-- <div class="kt-mycart">
											<div class="kt-mycart__head kt-head" style="background-image: url(<?php echo base_url(); ?>employee/assets/media/misc/bg-1.jpg);">
												<div class="kt-mycart__info">
													<span class="kt-mycart__icon"><i class="flaticon2-shopping-cart-1 kt-font-success"></i></span>
													<h3 class="kt-mycart__title">My Cart</h3>
												</div>
												<div class="kt-mycart__button">
													<button type="button" class="btn btn-success btn-sm" style=" ">2 Items</button>
												</div>
											</div>
											<div class="kt-mycart__body kt-scroll" data-scroll="true" data-height="245" data-mobile-height="200">
												<div class="kt-mycart__item">
													<div class="kt-mycart__container">
														<div class="kt-mycart__info">
															<a href="#" class="kt-mycart__title">
																Samsung
															</a>
															<span class="kt-mycart__desc">
																Profile info, Timeline etc
															</span>
															<div class="kt-mycart__action">
																<span class="kt-mycart__price">$ 450</span>
																<span class="kt-mycart__text">for</span>
																<span class="kt-mycart__quantity">7</span>
																<a href="#" class="btn btn-label-success btn-icon">&minus;</a>
																<a href="#" class="btn btn-label-success btn-icon">&plus;</a>
															</div>
														</div>
														<a href="#" class="kt-mycart__pic">
															<img src="<?php echo base_url(); ?>employee/assets/css/product9.jpg" title="">
														</a>
													</div>
												</div>
												<div class="kt-mycart__item">
													<div class="kt-mycart__container">
														<div class="kt-mycart__info">
															<a href="#" class="kt-mycart__title">
																Panasonic
															</a>
															<span class="kt-mycart__desc">
																For PHoto & Others
															</span>
															<div class="kt-mycart__action">
																<span class="kt-mycart__price">$ 329</span>
																<span class="kt-mycart__text">for</span>
																<span class="kt-mycart__quantity">1</span>
																<a href="#" class="btn btn-label-success btn-icon">&minus;</a>
																<a href="#" class="btn btn-label-success btn-icon">&plus;</a>
															</div>
														</div>
														<a href="#" class="kt-mycart__pic">
															<img src="<?php echo base_url(); ?>employee/assets/css/product13.jpg" title="">
														</a>
													</div>
												</div>
												<div class="kt-mycart__item">
													<div class="kt-mycart__container">
														<div class="kt-mycart__info">
															<a href="#" class="kt-mycart__title">
																Fujifilm
															</a>
															<span class="kt-mycart__desc">
																Profile info, Timeline etc
															</span>
															<div class="kt-mycart__action">
																<span class="kt-mycart__price">$ 520</span>
																<span class="kt-mycart__text">for</span>
																<span class="kt-mycart__quantity">6</span>
																<a href="#" class="btn btn-label-success btn-icon">&minus;</a>
																<a href="#" class="btn btn-label-success btn-icon">&plus;</a>
															</div>
														</div>
														<a href="#" class="kt-mycart__pic">
															<img src="<?php echo base_url(); ?>employee/assets/css/product16.jpg" title="">
														</a>
													</div>
												</div>
												<div class="kt-mycart__item">
													<div class="kt-mycart__container">
														<div class="kt-mycart__info">
															<a href="#" class="kt-mycart__title">
																Candy Machine
															</a>
															<span class="kt-mycart__desc">
																For PHoto & Others
															</span>
															<div class="kt-mycart__action">
																<span class="kt-mycart__price">$ 784</span>
																<span class="kt-mycart__text">for</span>
																<span class="kt-mycart__quantity">4</span>
																<a href="#" class="btn btn-label-success btn-icon">&minus;</a>
																<a href="#" class="btn btn-label-success btn-icon">&plus;</a>
															</div>
														</div>
														<a href="#" class="kt-mycart__pic">
															<img src="<?php echo base_url(); ?>employee/assets/css/product15.jpg" title="" alt="">
														</a>
													</div>
												</div>
											</div>
											<div class="kt-mycart__footer">
												<div class="kt-mycart__section">
													<div class="kt-mycart__subtitel">
														<span>Sub Total</span>
														<span>Taxes</span>
														<span>Total</span>
													</div>
													<div class="kt-mycart__prices">
														<span>$ 840.00</span>
														<span>$ 72.00</span>
														<span class="kt-font-brand">$ 912.00</span>
													</div>
												</div>
												<div class="kt-mycart__button kt-align-right">
													<button type="button" class="btn btn-primary btn-sm">Place Order</button>
												</div>
											</div>
										</div> -->

										<!-- end:: Mycart -->
									<!-- </form>
								</div>
							</div> -->

							<!--end: Cart -->

							<!--begin: Language bar -->
							<!-- <div class="kt-header__topbar-item kt-header__topbar-item--langs">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
									<span class="kt-header__topbar-icon kt-header__topbar-icon--brand">
										<img class="" src="<?php echo base_url(); ?>employee/assets/css/012-uk.svg" alt="" />
									</span>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim">
									<ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
										<li class="kt-nav__item kt-nav__item--active">
											<a href="#" class="kt-nav__link">
												<span class="kt-nav__link-icon"><img src="<?php echo base_url(); ?>employee/assets/css/020-flag.svg" alt="" /></span>
												<span class="kt-nav__link-text">English</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<span class="kt-nav__link-icon"><img src="<?php echo base_url(); ?>employee/assets/css/016-spain.svg" alt="" /></span>
												<span class="kt-nav__link-text">Spanish</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<span class="kt-nav__link-icon"><img src="<?php echo base_url(); ?>employee/assets/css/017-germany.svg" alt="" /></span>
												<span class="kt-nav__link-text">German</span>
											</a>
										</li>
									</ul>
								</div>
							</div> -->

							<!--end: Language bar -->

							<!--begin: User bar -->
							<div class="kt-header__topbar-item kt-header__topbar-item--user">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
									<span class="kt-hidden kt-header__topbar-welcome">Hi,</span>
									<span class="kt-hidden kt-header__topbar-username">Nick</span>
									<img class="kt-hidden" alt="Pic" src="<?php echo base_url(); ?>employee/assets/css/uzair.jpg" />
									<span class="kt-header__topbar-icon kt-hidden-"><i class="flaticon2-user-outline-symbol"></i></span>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

									<!--begin: Head -->
									<div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(<?php echo base_url(); ?>employee/assets/media/misc/bg-1.jpg)">
										<div class="kt-user-card__avatar">
											<img class="kt-hidden" alt="Pic" src="<?php echo base_url(); ?>employee/assets/css/300_25.jpg" />

											<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
											<span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">E</span>
										</div>
										<div class="kt-user-card__name">
											Employee Dashboard
										</div>
										<div class="kt-user-card__badge">
											<span class="btn btn-success btn-sm btn-bold btn-font-md"></span>
										</div>
									</div>

									<!--end: Head -->

									<!--begin: Navigation -->
									<div class="kt-notification">
										<a href="#" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-calendar-3 kt-font-success"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
											Welcome	<?php echo $dashboard_data['name'];?>
												</div>
												<div class="kt-notification__item-time">
													Email:<?php echo $dashboard_data['email'];?>
												</div>
											</div>
										</a>
										<a href="#" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-mail kt-font-warning"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
                                                Department:<?php echo $dashboard_data['department'];?>
												</div>
												<div class="kt-notification__item-time">
													
												</div>
											</div>
										</a>
										<a href="#" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-rocket-1 kt-font-danger"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
                                                No of Years in Nayatel:<?php echo $dashboard_data['tenure'];?>
												</div>
												<div class="kt-notification__item-time">
                                                Job Title:<?php echo $dashboard_data['job_title'];?>
												</div>
											</div>
										</a>
										<a href="#" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-hourglass kt-font-brand"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
                                                Location:<?php echo $dashboard_data['location'];?>
												</div>
												<div class="kt-notification__item-time">
													Pakistan
												</div>
											</div>
										</a>
										<a href="#" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-cardiogram kt-font-warning"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
                                                Report To:<?php echo $dashboard_data['reporting'];?>
												</div>
												<div class="kt-notification__item-time">
													 <!-- <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2 pending</span> -->
												</div>
											</div>
										</a>
										<div class="kt-notification__custom kt-space-between">
											<a href="<?php echo base_url(); ?>login/dashboard" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
											<a href="<?php echo base_url(); ?>login/dashboard class="btn btn-clean btn-sm btn-bold">Upgrade Plan</a>
										</div>
									</div>

									<!--end: Navigation -->
								</div>
							</div>

							<!--end: User bar -->

							<!--begin: Quick panel toggler -->
							<!-- <div class="kt-header__topbar-item kt-header__topbar-item--quickpanel" data-toggle="kt-tooltip" title="Quick panel" data-placement="top">
								<div class="kt-header__topbar-wrapper">
									<span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn"><i class="flaticon2-cube-1"></i></span>
								</div>
							</div> -->

							<!--end: Quick panel toggler -->
						</div>

						<!-- end:: Header Topbar -->
					</div>

					<!-- end:: Header -->
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
						<div class="kt-subheader-search ">
							<div class="kt-container  kt-container--fluid ">
								<h3 class="kt-subheader-search__title">
Employee Dashboard	
								<span class="kt-subheader-search__desc">Nayatel</span>
								</h3>
								<form class="kt-form">
									<div class="kt-grid kt-grid--desktop kt-grid--ver-desktop">
										<div class="kt-grid__item kt-grid__item--middle">
											<div class="row kt-margin-r-10">
												<div class="col-lg-6">
													<div class="kt-input-icon kt-input-icon--pill kt-input-icon--right">
														<input type="text" class="form-control form-control-pill" placeholder="Employee Name">
														<span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-puzzle-piece"></i></span></span>
													</div>
												</div>
												<div class="col-lg-3">
													<div class="kt-input-icon kt-input-icon--pill kt-input-icon--right">
														<input type="text" class="form-control form-control-pill" placeholder="From">
														<span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-calendar-check-o"></i></span></span>
													</div>
												</div>
												<div class="col-lg-3">
													<div class="kt-input-icon kt-input-icon--pill kt-input-icon--right">
														<input type="text" class="form-control form-control-pill" placeholder="To">
														<span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-calendar-check-o"></i></span></span>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-grid__item kt-grid__item--middle">
											<div class="kt-margin-top-20 kt--visible-tablet-and-mobile"></div>
											<button type="button" class="btn btn-pill btn-upper btn-bold btn-font-sm kt-subheader-search__submit-btn">Search Employee</button>
											<a href="#" class="kt-subheader-search__link kt-link">Advance Search</a>
										</div>
									</div>
								</form>
							</div>
						</div>

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

							<!--Begin::Dashboard 6-->

							<!--begin:: Widgets/Stats-->
							<div class="kt-portlet">
								<div class="kt-portlet__body  kt-portlet__body--fit">
									<div class="row row-no-padding row-col-separator-xl">
										<div class="col-md-12 col-lg-6 col-xl-3">

											<!--begin::Total Profit-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Total Profit
														</h4>
														<span class="kt-widget24__desc">
															All Customs Value
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-brand">
														$18M
													</span>
												</div>
												<div class="progress progress--sm">
													<div class="progress-bar kt-bg-brand" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="kt-widget24__action">
													<span class="kt-widget24__change">
														Change
													</span>
													<span class="kt-widget24__number">
														78%
													</span>
												</div>
											</div>

											<!--end::Total Profit-->
										</div>
										<div class="col-md-12 col-lg-6 col-xl-3">

											<!--begin::New Feedbacks-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															New Feedbacks
														</h4>
														<span class="kt-widget24__desc">
															Customer Review
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-warning">
														1349
													</span>
												</div>
												<div class="progress progress--sm">
													<div class="progress-bar kt-bg-warning" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="kt-widget24__action">
													<span class="kt-widget24__change">
														Change
													</span>
													<span class="kt-widget24__number">
														84%
													</span>
												</div>
											</div>

											<!--end::New Feedbacks-->
										</div>
										<div class="col-md-12 col-lg-6 col-xl-3">

											<!--begin::New Orders-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															New Orders
														</h4>
														<span class="kt-widget24__desc">
															Fresh Order Amount
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-danger">
														567
													</span>
												</div>
												<div class="progress progress--sm">
													<div class="progress-bar kt-bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="kt-widget24__action">
													<span class="kt-widget24__change">
														Change
													</span>
													<span class="kt-widget24__number">
														69%
													</span>
												</div>
											</div>

											<!--end::New Orders-->
										</div>
										<div class="col-md-12 col-lg-6 col-xl-3">

											<!--begin::New Users-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															New Users
														</h4>
														<span class="kt-widget24__desc">
															Joined New User
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-success">
														276
													</span>
												</div>
												<div class="progress progress--sm">
													<div class="progress-bar kt-bg-success" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="kt-widget24__action">
													<span class="kt-widget24__change">
														Change
													</span>
													<span class="kt-widget24__number">
														90%
													</span>
												</div>
											</div>

											<!--end::New Users-->
										</div>
									</div>
								</div>
							</div>

							<!--end:: Widgets/Stats-->

							<!--Begin::Row-->
							<div class="row">
								<div class="col-xl-6">

									<!--begin:: Widgets/Sale Reports-->
									<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Sales Reports
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_widget11_tab1_content" role="tab">
															Last Month
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget11_tab2_content" role="tab">
															All Time
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="kt-portlet__body">

											<!--Begin::Tab Content-->
											<div class="tab-content">

												<!--begin::tab 1 content-->
												<div class="tab-pane active" id="kt_widget11_tab1_content">

													<!--begin::Widget 11-->
													<div class="kt-widget11">
														<div class="table-responsive">
															<table class="table">
																<thead>
																	<tr>
																		<td style="width:1%">#</td>
																		<td style="width:40%">Application</td>
																		<td style="width:14%">Sales</td>
																		<td style="width:15%">Change</td>
																		<td style="width:15%">Status</td>
																		<td style="width:15%" class="kt-align-right">Total</td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single">
																				<input type="checkbox"><span></span>
																			</label>
																		</td>
																		<td>
																			<a href="#" class="kt-widget11__title">Loop</a>
																			<span class="kt-widget11__sub">CRM System</span>
																		</td>
																		<td>19,200</td>
																		<td>$63</td>
																		<td><span class="kt-badge kt-badge--inline kt-badge--brand">new</span></td>
																		<td class="kt-align-right kt-font-brand kt-font-bold">$34,740</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<a href="#" class="kt-widget11__title">Selto</a>
																			<span class="kt-widget11__sub">Powerful Website Builder</span>
																		</td>
																		<td>24,310</td>
																		<td>$39</td>
																		<td><span class="kt-badge kt-badge--inline kt-badge--success">approved</span></td>
																		<td class="kt-align-right kt-font-brand kt-font-bold">$46,010</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<a href="#" class="kt-widget11__title">Jippo</a>
																			<span class="kt-widget11__sub">The Best Selling App</span>
																		</td>
																		<td>9,076</td>
																		<td>$105</td>
																		<td><span class="kt-badge kt-badge--inline kt-badge--warning">pending</span></td>
																		<td class="kt-align-right kt-font-brand kt-font-bold">$67,800</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<a href="#" class="kt-widget11__title">Verto</a>
																			<span class="kt-widget11__sub">Web Development Tool</span>
																		</td>
																		<td>11,094</td>
																		<td>$16</td>
																		<td><span class="kt-badge kt-badge--inline kt-badge--danger">on hold</span></td>
																		<td class="kt-align-right kt-font-brand kt-font-bold">$18,520</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="kt-widget11__action kt-align-right">
															<button type="button" class="btn btn-label-brand btn-bold btn-sm">Import Report</button>
														</div>
													</div>

													<!--end::Widget 11-->
												</div>

												<!--end::tab 1 content-->

												<!--begin::tab 2 content-->
												<div class="tab-pane" id="kt_widget11_tab2_content">

													<!--begin::Widget 11-->
													<div class="kt-widget11">
														<div class="table-responsive">
															<table class="table">
																<thead>
																	<tr>
																		<td style="width:1%">#</td>
																		<td style="width:40%">Application</td>
																		<td style="width:14%">Sales</td>
																		<td style="width:15%">Change</td>
																		<td style="width:15%">Status</td>
																		<td style="width:15%" class="kt-align-right">Total</td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single">
																				<input type="checkbox"><span></span>
																			</label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Loop</span>
																			<span class="kt-widget11__sub">CRM System</span>
																		</td>
																		<td>19,200</td>
																		<td>$63</td>
																		<td><span class="kt-badge kt-badge--inline kt-badge--danger">pending</span></td>
																		<td class="kt-align-right kt-font-brand  kt-font-bold">$23,740</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Selto</span>
																			<span class="kt-widget11__sub">Powerful Website Builder</span>
																		</td>
																		<td>24,310</td>
																		<td>$39</td>
																		<td><span class="kt-badge kt-badge--inline kt-badge--success">new</span></td>
																		<td class="kt-align-right kt-font-success  kt-font-bold">$46,010</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Jippo</span>
																			<span class="kt-widget11__sub">The Best Selling App</span>
																		</td>
																		<td>9,076</td>
																		<td>$105</td>
																		<td><span class="kt-badge kt-badge--inline kt-badge--brand">approved</span></td>
																		<td class="kt-align-right kt-font-danger kt-font-bold">$15,800</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Verto</span>
																			<span class="kt-widget11__sub">Web Development Tool</span>
																		</td>
																		<td>11,094</td>
																		<td>$16</td>
																		<td><span class="kt-badge kt-badge--inline kt-badge--info">done</span></td>
																		<td class="kt-align-right kt-font-warning kt-font-bold">$8,520</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="kt-widget11__action kt-align-right">
															<button type="button" class="btn btn-label-success btn-bold btn-sm">Generate Report</button>
														</div>
													</div>

													<!--end::Widget 11-->
												</div>

												<!--end::tab 2 content-->

												<!--begin::tab 3 content-->
												<div class="tab-pane" id="kt_widget11_tab3_content">
												</div>

												<!--end::tab 3 content-->
											</div>

											<!--End::Tab Content-->
										</div>
									</div>

									<!--end:: Widgets/Sale Reports-->
								</div>
								<div class="col-xl-6">

									<!--begin:: Widgets/Order Statistics-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Order Statistics
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
													Export
												</a>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">

													<!--begin::Nav-->
													<ul class="kt-nav">
														<li class="kt-nav__head">
															Export Options
															<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect id="bound" x="0" y="0" width="24" height="24" />
																		<circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																		<rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																		<rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																	</g>
																</svg> </span>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-drop"></i>
																<span class="kt-nav__link-text">Activity</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																<span class="kt-nav__link-text">FAQ</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-link"></i>
																<span class="kt-nav__link-text">Settings</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-new-email"></i>
																<span class="kt-nav__link-text">Support</span>
																<span class="kt-nav__link-badge">
																	<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
																</span>
															</a>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__foot">
															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
														</li>
													</ul>

													<!--end::Nav-->
												</div>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fluid">
											<div class="kt-widget12">
												<div class="kt-widget12__content">
													<div class="kt-widget12__item">
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Annual Taxes EMS</span>
															<span class="kt-widget12__value">$400,000</span>
														</div>
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Finance Review Date</span>
															<span class="kt-widget12__value">July 24,2019</span>
														</div>
													</div>
													<div class="kt-widget12__item">
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Avarage Revenue</span>
															<span class="kt-widget12__value">$60M</span>
														</div>
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Revenue Margin</span>
															<div class="kt-widget12__progress">
																<div class="progress kt-progress--sm">
																	<div class="progress-bar kt-bg-brand" role="progressbar" style="width: 40%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
																<span class="kt-widget12__stat">
																	40%
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="kt-widget12__chart" style="height:250px;">
													<canvas id="kt_chart_order_statistics"></canvas>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Order Statistics-->
								</div>
							</div>

							<!--End::Row-->

							<!--Begin::Row-->
							<div class="row">
								<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">

									<!--begin:: Widgets/Download Files-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Download Files
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
													Latest
												</a>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">

													<!--begin::Nav-->
													<ul class="kt-nav">
														<li class="kt-nav__head">
															Export Options
															<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect id="bound" x="0" y="0" width="24" height="24" />
																		<circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																		<rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																		<rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																	</g>
																</svg> </span>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-drop"></i>
																<span class="kt-nav__link-text">Activity</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																<span class="kt-nav__link-text">FAQ</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-link"></i>
																<span class="kt-nav__link-text">Settings</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-new-email"></i>
																<span class="kt-nav__link-text">Support</span>
																<span class="kt-nav__link-badge">
																	<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
																</span>
															</a>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__foot">
															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
														</li>
													</ul>

													<!--end::Nav-->
												</div>
											</div>
										</div>
										<div class="kt-portlet__body">

											<!--begin::k-widget4-->
											<div class="kt-widget4">
												<div class="kt-widget4__item">
													<div class="kt-widget4__pic kt-widget4__pic--icon">
														<img src="<?php echo base_url(); ?>employee/assets/css/doc.svg" alt="">
													</div>
													<a href="#" class="kt-widget4__title">
														Documentation
													</a>
													<div class="kt-widget4__tools">
														<a href="#" class="btn btn-clean btn-icon btn-sm">
															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
														</a>
													</div>
												</div>
												<div class="kt-widget4__item">
													<div class="kt-widget4__pic kt-widget4__pic--icon">
														<img src="<?php echo base_url(); ?>employee/assets/css/jpg.svg" alt="">
													</div>
													<a href="#" class="kt-widget4__title">
														Project Launch Event
													</a>
													<div class="kt-widget4__tools">
														<a href="#" class="btn btn-clean btn-icon btn-sm">
															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
														</a>
													</div>
												</div>
												<div class="kt-widget4__item">
													<div class="kt-widget4__pic kt-widget4__pic--icon">
														<img src="<?php echo base_url(); ?>employee/assets/css/pdf.svg" alt="">
													</div>
													<a href="#" class="kt-widget4__title">
														Full Developer Manual For 4.7
													</a>
													<div class="kt-widget4__tools">
														<a href="#" class="btn btn-clean btn-icon btn-sm">
															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
														</a>
													</div>
												</div>
												<div class="kt-widget4__item">
													<div class="kt-widget4__pic kt-widget4__pic--icon">
														<img src="<?php echo base_url(); ?>employee/assets/css/javascript.svg" alt="">
													</div>
													<a href="#" class="kt-widget4__title">
														Make JS Great Again
													</a>
													<div class="kt-widget4__tools">
														<a href="#" class="btn btn-clean btn-icon btn-sm">
															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
														</a>
													</div>
												</div>
												<div class="kt-widget4__item">
													<div class="kt-widget4__pic kt-widget4__pic--icon">
														<img src="<?php echo base_url(); ?>employee/assets/css/zip.svg" alt="">
													</div>
													<a href="#" class="kt-widget4__title">
														Download Ziped version OF 5.0
													</a>
													<div class="kt-widget4__tools">
														<a href="#" class="btn btn-clean btn-icon btn-sm">
															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
														</a>
													</div>
												</div>
												<div class="kt-widget4__item">
													<div class="kt-widget4__pic kt-widget4__pic--icon">
														<img src="<?php echo base_url(); ?>employee/assets/css/pdf.svg" alt="">
													</div>
													<a href="#" class="kt-widget4__title">
														Finance Report 2016/2017
													</a>
													<div class="kt-widget4__tools">
														<a href="#" class="btn btn-clean btn-icon btn-sm">
															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
														</a>
													</div>
												</div>
											</div>

											<!--end::Widget 9-->
										</div>
									</div>

									<!--end:: Widgets/Download Files-->
								</div>
								<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">

									<!--begin:: Widgets/New Users-->
									<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													New Users
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab1_content" role="tab">
															Today
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget4_tab2_content" role="tab">
															Month
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_widget4_tab1_content">
													<div class="kt-widget4">
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic">
																<img src="<?php echo base_url(); ?>employee/assets/css/100_4.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Anna Strong
																</a>
																<p class="kt-widget4__text">
																	Visual Designer,Google Inc
																</p>
															</div>
															<a href="#" class="btn btn-sm btn-label-brand btn-bold">Follow</a>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic">
																<img src="<?php echo base_url(); ?>employee/assets/css/100_14.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Milano Esco
																</a>
																<p class="kt-widget4__text">
																	Product Designer, Apple Inc
																</p>
															</div>
															<a href="#" class="btn btn-sm btn-label-warning btn-bold">Follow</a>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic">
																<img src="<?php echo base_url(); ?>employee/assets/css/100_11.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Nick Bold
																</a>
																<p class="kt-widget4__text">
																	Web Developer, Facebook Inc
																</p>
															</div>
															<a href="#" class="btn btn-sm btn-label-danger btn-bold">Follow</a>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic">
																<img src="<?php echo base_url(); ?>employee/assets/css/100_1.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Wiltor Delton
																</a>
																<p class="kt-widget4__text">
																	Project Manager, Amazon Inc
																</p>
															</div>
															<a href="#" class="btn btn-sm btn-label-success btn-bold">Follow</a>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic">
																<img src="<?php echo base_url(); ?>employee/assets/css/100_5.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Nick Stone
																</a>
																<p class="kt-widget4__text">
																	Visual Designer, Github Inc
																</p>
															</div>
															<a href="#" class="btn btn-sm btn-label-primary btn-bold">Follow</a>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="kt_widget4_tab2_content">
													<div class="kt-widget4">
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic">
																<img src="<?php echo base_url(); ?>employee/assets/css/100_2.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Kristika Bold
																</a>
																<p class="kt-widget4__text">
																	Product Designer,Apple Inc
																</p>
															</div>
															<a href="#" class="btn btn-sm btn-label-success">Follow</a>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic">
																<img src="<?php echo base_url(); ?>employee/assets/css/100_13.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Ron Silk
																</a>
																<p class="kt-widget4__text">
																	Release Manager, Loop Inc
																</p>
															</div>
															<a href="#" class="btn btn-sm btn-label-brand">Follow</a>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic">
																<img src="<?php echo base_url(); ?>employee/assets/css/100_9.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Nick Bold
																</a>
																<p class="kt-widget4__text">
																	Web Developer, Facebook Inc
																</p>
															</div>
															<a href="#" class="btn btn-sm btn-label-danger">Follow</a>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic">
																<img src="<?php echo base_url(); ?>employee/assets/media/users/100_2.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Wiltor Delton
																</a>
																<p class="kt-widget4__text">
																	Project Manager, Amazon Inc
																</p>
															</div>
															<a href="#" class="btn btn-sm btn-label-success">Follow</a>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic">
																<img src="<?php echo base_url(); ?>employee/assets/css/100_8.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Nick Bold
																</a>
																<p class="kt-widget4__text">
																	Web Developer, Facebook Inc
																</p>
															</div>
															<a href="#" class="btn btn-sm btn-label-info">Follow</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/New Users-->
								</div>
								<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">

									<!--begin:: Widgets/Latest Updates-->
									<div class="kt-portlet kt-portlet--height-fluid ">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Latest Updates
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
													Today
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">

													<!--begin::Nav-->
													<ul class="kt-nav">
														<li class="kt-nav__head">
															Export Options
															<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect id="bound" x="0" y="0" width="24" height="24" />
																		<circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																		<rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																		<rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																	</g>
																</svg> </span>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-drop"></i>
																<span class="kt-nav__link-text">Activity</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																<span class="kt-nav__link-text">FAQ</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-link"></i>
																<span class="kt-nav__link-text">Settings</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-new-email"></i>
																<span class="kt-nav__link-text">Support</span>
																<span class="kt-nav__link-badge">
																	<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
																</span>
															</a>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__foot">
															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
														</li>
													</ul>

													<!--end::Nav-->
												</div>
											</div>
										</div>

										<!--full height portlet body-->
										<div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
											<div class="kt-widget4 kt-widget4--sticky">
												<div class="kt-widget4__items kt-portlet__space-x kt-margin-t-15">
													<div class="kt-widget4__item">
														<span class="kt-widget4__icon">
															<i class="flaticon2-graphic  kt-font-brand"></i>
														</span>
														<a href="#" class="kt-widget4__title">
															Metronic employee Theme
														</a>
														<span class="kt-widget4__number kt-font-brand">+500</span>
													</div>
													<div class="kt-widget4__item">
														<span class="kt-widget4__icon">
															<i class="flaticon2-analytics-2  kt-font-success"></i>
														</span>
														<a href="#" class="kt-widget4__title">
															Green Maker Team
														</a>
														<span class="kt-widget4__number kt-font-success">-64</span>
													</div>
													<div class="kt-widget4__item">
														<span class="kt-widget4__icon">
															<i class="flaticon2-drop  kt-font-danger"></i>
														</span>
														<a href="#" class="kt-widget4__title">
															Make Apex Great Again
														</a>
														<span class="kt-widget4__number kt-font-danger">+1080</span>
													</div>
													<div class="kt-widget4__item">
														<span class="kt-widget4__icon">
															<i class="flaticon2-pie-chart-4 kt-font-warning"></i>
														</span>
														<a href="#" class="kt-widget4__title">
															A Programming Language
														</a>
														<span class="kt-widget4__number kt-font-warning">+19</span>
													</div>
												</div>
												<div class="kt-widget4__chart kt-margin-t-15">
													<canvas id="kt_chart_latest_updates" style="height: 150px;"></canvas>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Latest Updates-->
								</div>
								<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">

									<!--begin:: Widgets/Finance Summary-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Finance Summary
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-brand btn-sm  btn-bold dropdown-toggle" data-toggle="dropdown">
													Latest
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">

													<!--begin::Nav-->
													<ul class="kt-nav">
														<li class="kt-nav__head">
															Export Options
															<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect id="bound" x="0" y="0" width="24" height="24" />
																		<circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																		<rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																		<rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																	</g>
																</svg> </span>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-drop"></i>
																<span class="kt-nav__link-text">Activity</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																<span class="kt-nav__link-text">FAQ</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-link"></i>
																<span class="kt-nav__link-text">Settings</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-new-email"></i>
																<span class="kt-nav__link-text">Support</span>
																<span class="kt-nav__link-badge">
																	<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
																</span>
															</a>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__foot">
															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
														</li>
													</ul>

													<!--end::Nav-->
												</div>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="kt-widget12">
												<div class="kt-widget12__content">
													<div class="kt-widget12__item">
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Annual Companies Taxes EMS</span>
															<span class="kt-widget12__value">$500,000</span>
														</div>
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Next Tax Review Date</span>
															<span class="kt-widget12__value">July 24,2017</span>
														</div>
													</div>
													<div class="kt-widget12__item">
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Total Annual Profit Before Tax</span>
															<span class="kt-widget12__value">$3,800,000</span>
														</div>
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Type Of Market Share</span>
															<span class="kt-widget12__value">Grossery</span>
														</div>
													</div>
													<div class="kt-widget12__item">
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Avarage Product Price</span>
															<span class="kt-widget12__value">$60,70</span>
														</div>
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Satisfication Rate</span>
															<span class="kt-widget12__progress">
																<div class="progress progress-sm">
																	<div class="progress-bar kt-bg-brand" role="progressbar" style="width: 63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
																<span class="kt-widget12__stat">
																	63%
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Finance Summary-->
								</div>
								<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">

									<!--begin:: Widgets/Audit Log-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Latest Log
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab11_content" role="tab">
															Today
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget4_tab12_content" role="tab">
															Week
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget4_tab13_content" role="tab">
															Month
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_widget4_tab11_content">
													<div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">
														<div class="kt-list-timeline">
															<div class="kt-list-timeline__items">
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
																	<span class="kt-list-timeline__text">12 new users registered</span>
																	<span class="kt-list-timeline__time">Just now</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
																	<span class="kt-list-timeline__text">System shutdown <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">pending</span></span>
																	<span class="kt-list-timeline__time">14 mins</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
																	<span class="kt-list-timeline__text">New invoice received</span>
																	<span class="kt-list-timeline__time">20 mins</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
																	<span class="kt-list-timeline__time">1 hr</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
																	<span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
																	<span class="kt-list-timeline__time">2 hrs</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
																	<span class="kt-list-timeline__text">Production server down</span>
																	<span class="kt-list-timeline__time">3 hrs</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
																	<span class="kt-list-timeline__text">Production server up</span>
																	<span class="kt-list-timeline__time">5 hrs</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
																	<span href="" class="kt-list-timeline__text">New order received <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>
																	<span class="kt-list-timeline__time">7 hrs</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
																	<span class="kt-list-timeline__text">12 new users registered</span>
																	<span class="kt-list-timeline__time">Just now</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
																	<span class="kt-list-timeline__text">System shutdown <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">pending</span></span>
																	<span class="kt-list-timeline__time">14 mins</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
																	<span class="kt-list-timeline__text">New invoice received</span>
																	<span class="kt-list-timeline__time">20 mins</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
																	<span class="kt-list-timeline__time">1 hr</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
																	<span class="kt-list-timeline__text">New invoice received</span>
																	<span class="kt-list-timeline__time">20 mins</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
																	<span class="kt-list-timeline__time">1 hr</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
																	<span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
																	<span class="kt-list-timeline__time">2 hrs</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
																	<span class="kt-list-timeline__text">Production server down</span>
																	<span class="kt-list-timeline__time">3 hrs</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
																	<span class="kt-list-timeline__text">Production server up</span>
																	<span class="kt-list-timeline__time">5 hrs</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
																	<span href="" class="kt-list-timeline__text">New order received <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>
																	<span class="kt-list-timeline__time">7 hrs</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="kt_widget4_tab12_content">
													<div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">
														<div class="kt-list-timeline">
															<div class="kt-list-timeline__items">
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
																	<span class="kt-list-timeline__text">New invoice received</span>
																	<span class="kt-list-timeline__time">20 mins</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
																	<span class="kt-list-timeline__time">1 hr</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
																	<span class="kt-list-timeline__text">New invoice received</span>
																	<span class="kt-list-timeline__time">20 mins</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
																	<span class="kt-list-timeline__text">12 new users registered</span>
																	<span class="kt-list-timeline__time">Just now</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
																	<span class="kt-list-timeline__text">System shutdown <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">pending</span></span>
																	<span class="kt-list-timeline__time">14 mins</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
																	<span class="kt-list-timeline__text">New invoice received</span>
																	<span class="kt-list-timeline__time">20 mins</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
																	<span class="kt-list-timeline__time">1 hr</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
																	<span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
																	<span class="kt-list-timeline__time">2 hrs</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
																	<span class="kt-list-timeline__time">1 hr</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
																	<span class="kt-list-timeline__text">New invoice received</span>
																	<span class="kt-list-timeline__time">20 mins</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
																	<span class="kt-list-timeline__time">1 hr</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
																	<span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
																	<span class="kt-list-timeline__time">2 hrs</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
																	<span class="kt-list-timeline__text">Production server down</span>
																	<span class="kt-list-timeline__time">3 hrs</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
																	<span class="kt-list-timeline__text">Production server up</span>
																	<span class="kt-list-timeline__time">5 hrs</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
																	<span href="" class="kt-list-timeline__text">New order received <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>
																	<span class="kt-list-timeline__time">7 hrs</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="kt_widget4_tab13_content">
													<div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">
														<div class="kt-list-timeline">
															<div class="kt-list-timeline__items">
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
																	<span href="" class="kt-list-timeline__text">New order received <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>
																	<span class="kt-list-timeline__time">7 hrs</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
																	<span class="kt-list-timeline__text">New invoice received</span>
																	<span class="kt-list-timeline__time">20 mins</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
																	<span class="kt-list-timeline__time">1 hr</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
																	<span class="kt-list-timeline__text">New invoice received</span>
																	<span class="kt-list-timeline__time">20 mins</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
																	<span class="kt-list-timeline__text">12 new users registered</span>
																	<span class="kt-list-timeline__time">Just now</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
																	<span class="kt-list-timeline__text">System shutdown <span class="kt-badge kt-badge--warning kt-badge--inline kt-badge--pill">pending</span></span>
																	<span class="kt-list-timeline__time">14 mins</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
																	<span class="kt-list-timeline__text">New invoice received</span>
																	<span class="kt-list-timeline__time">20 mins</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
																	<span class="kt-list-timeline__time">1 hr</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
																	<span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
																	<span class="kt-list-timeline__time">2 hrs</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">settled</span></span>
																	<span class="kt-list-timeline__time">1 hr</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
																	<span class="kt-list-timeline__text">New invoice received</span>
																	<span class="kt-list-timeline__time">20 mins</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">settled</span></span>
																	<span class="kt-list-timeline__time">1 hr</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
																	<span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
																	<span class="kt-list-timeline__time">2 hrs</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
																	<span class="kt-list-timeline__text">Production server down</span>
																	<span class="kt-list-timeline__time">3 hrs</span>
																</div>
																<div class="kt-list-timeline__item">
																	<span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
																	<span class="kt-list-timeline__text">Production server up</span>
																	<span class="kt-list-timeline__time">5 hrs</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Audit Log-->
								</div>
								<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">

									<!--begin:: Widgets/Blog-->
									<div class="kt-portlet kt-portlet--height-fluid kt-widget19">
										<div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
											<div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(<?php echo base_url(); ?>employee/assets/media/products/product4.jpg)">
												<h3 class="kt-widget19__title kt-font-light">
													Introducing New Feature
												</h3>
												<div class="kt-widget19__shadow"></div>
												<div class="kt-widget19__labels">
													<a href="#" class="btn btn-label-light-o2 btn-bold btn-pill">Recent</a>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="kt-widget19__wrapper">
												<div class="kt-widget19__content">
													<div class="kt-widget19__userpic">
														<img src="<?php echo base_url(); ?>employee/assets/css/user1.jpg" alt="">
													</div>
													<div class="kt-widget19__info">
														<a href="#" class="kt-widget19__username">
															Anna Krox
														</a>
														<span class="kt-widget19__time">
															UX/UI Designer, Google
														</span>
													</div>
													<div class="kt-widget19__stats">
														<span class="kt-widget19__number kt-font-brand">
															18
														</span>
														<a href="#" class="kt-widget19__comment">
															Comments
														</a>
													</div>
												</div>
												<div class="kt-widget19__text">
													Lorem Ipsum is simply dummy text of the printing and typesetting scrambled a type specimen book text of the dummy text of the printing printing and typesetting industry scrambled dummy text of the printing.
												</div>
											</div>
											<div class="kt-widget19__action">
												<a href="#" class="btn btn-sm btn-label-brand btn-bold">Read More...</a>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Blog-->
								</div>
							</div>

							<!--End::Row-->

							<!--Begin::Row-->
							<div class="row">
								<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">

									<!--begin:: Widgets/Download Files-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Download Files
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
													Latest
												</a>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">

													<!--begin::Nav-->
													<ul class="kt-nav">
														<li class="kt-nav__head">
															Export Options
															<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect id="bound" x="0" y="0" width="24" height="24" />
																		<circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																		<rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																		<rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																	</g>
																</svg> </span>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-drop"></i>
																<span class="kt-nav__link-text">Activity</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																<span class="kt-nav__link-text">FAQ</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-link"></i>
																<span class="kt-nav__link-text">Settings</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-new-email"></i>
																<span class="kt-nav__link-text">Support</span>
																<span class="kt-nav__link-badge">
																	<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
																</span>
															</a>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__foot">
															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
														</li>
													</ul>

													<!--end::Nav-->
												</div>
											</div>
										</div>
										<div class="kt-portlet__body">

											<!--begin::k-widget4-->
											<div class="kt-widget4">
												<div class="kt-widget4__item">
													<div class="kt-widget4__pic kt-widget4__pic--icon">
														<img src="<?php echo base_url(); ?>employee/assets/media/files/doc.svg" alt="">
													</div>
													<a href="#" class="kt-widget4__title">
														Metronic Documentation
													</a>
													<div class="kt-widget4__tools">
														<a href="#" class="btn btn-clean btn-icon btn-sm">
															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
														</a>
													</div>
												</div>
												<div class="kt-widget4__item">
													<div class="kt-widget4__pic kt-widget4__pic--icon">
														<img src="<?php echo base_url(); ?>employee/assets/media/files/jpg.svg" alt="">
													</div>
													<a href="#" class="kt-widget4__title">
														Project Launch Event
													</a>
													<div class="kt-widget4__tools">
														<a href="#" class="btn btn-clean btn-icon btn-sm">
															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
														</a>
													</div>
												</div>
												<div class="kt-widget4__item">
													<div class="kt-widget4__pic kt-widget4__pic--icon">
														<img src="<?php echo base_url(); ?>employee/assets/media/files/pdf.svg" alt="">
													</div>
													<a href="#" class="kt-widget4__title">
														Full Developer Manual For 4.7
													</a>
													<div class="kt-widget4__tools">
														<a href="#" class="btn btn-clean btn-icon btn-sm">
															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
														</a>
													</div>
												</div>
												<div class="kt-widget4__item">
													<div class="kt-widget4__pic kt-widget4__pic--icon">
														<img src="<?php echo base_url(); ?>employee/assets/media/files/javascript.svg" alt="">
													</div>
													<a href="#" class="kt-widget4__title">
														Make JS Great Again
													</a>
													<div class="kt-widget4__tools">
														<a href="#" class="btn btn-clean btn-icon btn-sm">
															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
														</a>
													</div>
												</div>
												<div class="kt-widget4__item">
													<div class="kt-widget4__pic kt-widget4__pic--icon">
														<img src="<?php echo base_url(); ?>employee/assets/media/files/zip.svg" alt="">
													</div>
													<a href="#" class="kt-widget4__title">
														Download Ziped version OF 5.0
													</a>
													<div class="kt-widget4__tools">
														<a href="#" class="btn btn-clean btn-icon btn-sm">
															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
														</a>
													</div>
												</div>
												<div class="kt-widget4__item">
													<div class="kt-widget4__pic kt-widget4__pic--icon">
														<img src="<?php echo base_url(); ?>employee/assets/media/files/pdf.svg" alt="">
													</div>
													<a href="#" class="kt-widget4__title">
														Finance Report 2016/2017
													</a>
													<div class="kt-widget4__tools">
														<a href="#" class="btn btn-clean btn-icon btn-sm">
															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
														</a>
													</div>
												</div>
											</div>

											<!--end::Widget 9-->
										</div>
									</div>

									<!--end:: Widgets/Download Files-->
								</div>
								<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">

									<!--begin:: Widgets/New Users-->
									<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													New Users
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab1_content" role="tab">
															Today
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget4_tab2_content" role="tab">
															Month
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_widget4_tab1_content">
													<div class="kt-widget4">
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic">
																<img src="<?php echo base_url(); ?>employee/assets/media/users/100_4.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Anna Strong
																</a>
																<p class="kt-widget4__text">
																	Visual Designer,Google Inc
																</p>
															</div>
															<a href="#" class="btn btn-sm btn-label-brand btn-bold">Follow</a>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic">
																<img src="<?php echo base_url(); ?>employee/assets/media/users/100_14.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Milano Esco
																</a>
																<p class="kt-widget4__text">
																	Product Designer, Apple Inc
																</p>
															</div>
															<a href="#" class="btn btn-sm btn-label-warning btn-bold">Follow</a>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic">
																<img src="<?php echo base_url(); ?>employee/assets/media/users/100_11.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Nick Bold
																</a>
																<p class="kt-widget4__text">
																	Web Developer, Facebook Inc
																</p>
															</div>
															<a href="#" class="btn btn-sm btn-label-danger btn-bold">Follow</a>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic">
																<img src="<?php echo base_url(); ?>employee/assets/media/users/100_1.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Wiltor Delton
																</a>
																<p class="kt-widget4__text">
																	Project Manager, Amazon Inc
																</p>
															</div>
															<a href="#" class="btn btn-sm btn-label-success btn-bold">Follow</a>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic">
																<img src="<?php echo base_url(); ?>employee/assets/media/users/100_5.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Nick Stone
																</a>
																<p class="kt-widget4__text">
																	Visual Designer, Github Inc
																</p>
															</div>
															<a href="#" class="btn btn-sm btn-label-primary btn-bold">Follow</a>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="kt_widget4_tab2_content">
													<div class="kt-widget4">
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic">
																<img src="<?php echo base_url(); ?>employee/assets/media/users/100_2.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Kristika Bold
																</a>
																<p class="kt-widget4__text">
																	Product Designer,Apple Inc
																</p>
															</div>
															<a href="#" class="btn btn-sm btn-label-success">Follow</a>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic">
																<img src="<?php echo base_url(); ?>employee/assets/media/users/100_13.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Ron Silk
																</a>
																<p class="kt-widget4__text">
																	Release Manager, Loop Inc
																</p>
															</div>
															<a href="#" class="btn btn-sm btn-label-brand">Follow</a>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic">
																<img src="<?php echo base_url(); ?>employee/assets/media/users/100_9.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Nick Bold
																</a>
																<p class="kt-widget4__text">
																	Web Developer, Facebook Inc
																</p>
															</div>
															<a href="#" class="btn btn-sm btn-label-danger">Follow</a>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic">
																<img src="<?php echo base_url(); ?>employee/assets/media/users/100_2.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Wiltor Delton
																</a>
																<p class="kt-widget4__text">
																	Project Manager, Amazon Inc
																</p>
															</div>
															<a href="#" class="btn btn-sm btn-label-success">Follow</a>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic">
																<img src="<?php echo base_url(); ?>employee/assets/media/users/100_8.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Nick Bold
																</a>
																<p class="kt-widget4__text">
																	Web Developer, Facebook Inc
																</p>
															</div>
															<a href="#" class="btn btn-sm btn-label-info">Follow</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/New Users-->
								</div>
								<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">

									<!--begin:: Widgets/Last Updates-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Latest Updates
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
													Today
												</a>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

													<!--begin::Nav-->
													<ul class="kt-nav">
														<li class="kt-nav__head">
															Export Options
															<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect id="bound" x="0" y="0" width="24" height="24" />
																		<circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																		<rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																		<rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																	</g>
																</svg> </span>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-drop"></i>
																<span class="kt-nav__link-text">Activity</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																<span class="kt-nav__link-text">FAQ</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-link"></i>
																<span class="kt-nav__link-text">Settings</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-new-email"></i>
																<span class="kt-nav__link-text">Support</span>
																<span class="kt-nav__link-badge">
																	<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
																</span>
															</a>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__foot">
															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
														</li>
													</ul>

													<!--end::Nav-->
												</div>
											</div>
										</div>
										<div class="kt-portlet__body">

											<!--begin::widget 12-->
											<div class="kt-widget4">
												<div class="kt-widget4__item">
													<span class="kt-widget4__icon">
														<i class="flaticon-pie-chart-1 kt-font-info"></i>
													</span>
													<a href="#" class="kt-widget4__title kt-widget4__title--light">
														Metronic v6 has been arrived!
													</a>
													<span class="kt-widget4__number kt-font-info">+500</span>
												</div>
												<div class="kt-widget4__item">
													<span class="kt-widget4__icon">
														<i class="flaticon-safe-shield-protection  kt-font-success"></i>
													</span>
													<a href="#" class="kt-widget4__title kt-widget4__title--light">
														Metronic community meet-up 2019 in Rome.
													</a>
													<span class="kt-widget4__number kt-font-success">+1260</span>
												</div>
												<div class="kt-widget4__item">
													<span class="kt-widget4__icon">
														<i class="flaticon2-line-chart kt-font-danger"></i>
													</span>
													<a href="#" class="kt-widget4__title kt-widget4__title--light">
														Metronic Angular 8 version will be landing soon...
													</a>
													<span class="kt-widget4__number kt-font-danger">+1080</span>
												</div>
												<div class="kt-widget4__item">
													<span class="kt-widget4__icon">
														<i class="flaticon2-pie-chart-1 kt-font-primary"></i>
													</span>
													<a href="#" class="kt-widget4__title kt-widget4__title--light">
														ale! Purchase Metronic at 70% off for limited time
													</a>
													<span class="kt-widget4__number kt-font-primary">70% Off!</span>
												</div>
												<div class="kt-widget4__item">
													<span class="kt-widget4__icon">
														<i class="flaticon2-rocket kt-font-brand"></i>
													</span>
													<a href="#" class="kt-widget4__title kt-widget4__title--light">
														Metronic VueJS version is in progress. Stay tuned!
													</a>
													<span class="kt-widget4__number kt-font-brand">+134</span>
												</div>
												<div class="kt-widget4__item">
													<span class="kt-widget4__icon">
														<i class="flaticon2-notification kt-font-warning"></i>
													</span>
													<a href="#" class="kt-widget4__title kt-widget4__title--light">
														Black Friday! Purchase Metronic at ever lowest 90% off for limited time
													</a>
													<span class="kt-widget4__number kt-font-warning">70% Off!</span>
												</div>
												<div class="kt-widget4__item">
													<span class="kt-widget4__icon">
														<i class="flaticon2-file kt-font-success"></i>
													</span>
													<a href="#" class="kt-widget4__title kt-widget4__title--light">
														Metronic React version is in progress.
													</a>
													<span class="kt-widget4__number kt-font-success">+13%</span>
												</div>
											</div>

											<!--end::Widget 12-->
										</div>
									</div>

									<!--end:: Widgets/Last Updates-->
								</div>
								<div class="col-xl-6 col-lg-6 order-lg-1 order-xl-1">

									<!--Begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Recent Activities
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="dropdown dropdown-inline">
													<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="flaticon-more-1"></i>
													</button>
													<div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">

														<!--begin::Nav-->
														<ul class="kt-nav">
															<li class="kt-nav__head">
																Export Options
																<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect id="bound" x="0" y="0" width="24" height="24" />
																			<circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																			<rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																			<rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																		</g>
																	</svg> </span>
															</li>
															<li class="kt-nav__separator"></li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-drop"></i>
																	<span class="kt-nav__link-text">Activity</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																	<span class="kt-nav__link-text">FAQ</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-link"></i>
																	<span class="kt-nav__link-text">Settings</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-new-email"></i>
																	<span class="kt-nav__link-text">Support</span>
																	<span class="kt-nav__link-badge">
																		<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
																	</span>
																</a>
															</li>
															<li class="kt-nav__separator"></li>
															<li class="kt-nav__foot">
																<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
																<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
															</li>
														</ul>

														<!--end::Nav-->
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body">

											<!--Begin::Timeline 3 -->
											<div class="kt-timeline-v2">
												<div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">10:00</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text  kt-padding-top-5">
															Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
															incididunt ut labore et dolore magna
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">12:45</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-success"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															AEOL Meeting With
														</div>
														<div class="kt-list-pics kt-list-pics--sm kt-padding-l-20">
															<a href="#"><img src="<?php echo base_url(); ?>employee/assets/media/users/100_4.jpg" title=""></a>
															<a href="#"><img src="<?php echo base_url(); ?>employee/assets/media/users/100_13.jpg" title=""></a>
															<a href="#"><img src="<?php echo base_url(); ?>employee/assets/media/users/100_11.jpg" title=""></a>
															<a href="#"><img src="<?php echo base_url(); ?>employee/assets/media/users/100_14.jpg" title=""></a>
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">14:00</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-padding-top-5">
															Make Deposit <a href="#" class="kt-link kt-link--brand kt-font-bolder">USD 700</a> To ESL.
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">16:00</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-warning"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-padding-top-5">
															Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
															incididunt ut labore et dolore magna elit enim at minim<br>
															veniam quis nostrud
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">17:00</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-info"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-padding-top-5">
															Placed a new order in <a href="#" class="kt-link kt-link--brand kt-font-bolder">SIGNATURE MOBILE</a> marketplace.
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">16:00</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-padding-top-5">
															Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
															incididunt ut labore et dolore magna elit enim at minim<br>
															veniam quis nostrud
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">17:00</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-padding-top-5">
															Received a new feedback on <a href="#" class="kt-link kt-link--brand kt-font-bolder">FinancePro App</a> product.
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">15:30</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-padding-top-5">
															New notification message has been received on <a href="#" class="kt-link kt-link--brand kt-font-bolder">LoopFin Pro</a> product.
														</div>
													</div>
												</div>
											</div>

											<!--End::Timeline 3 -->
										</div>
									</div>

									<!--End::Portlet-->
								</div>
								<div class="col-xl-6 col-lg-6 order-lg-1 order-xl-1">

									<!--Begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Recent Notifications
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_widget3_tab1_content" role="tab">
															Today
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget3_tab2_content" role="tab">
															Month
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_widget3_tab1_content">

													<!--Begin::Timeline 3 -->
													<div class="kt-timeline-v3">
														<div class="kt-timeline-v3__items">
															<div class="kt-timeline-v3__item kt-timeline-v3__item--info">
																<span class="kt-timeline-v3__item-time">09:00</span>
																<div class="kt-timeline-v3__item-desc">
																	<span class="kt-timeline-v3__item-text">
																		Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
																	</span><br>
																	<span class="kt-timeline-v3__item-user-name">
																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
																			By Bob
																		</a>
																	</span>
																</div>
															</div>
															<div class="kt-timeline-v3__item kt-timeline-v3__item--warning">
																<span class="kt-timeline-v3__item-time">10:00</span>
																<div class="kt-timeline-v3__item-desc">
																	<span class="kt-timeline-v3__item-text">
																		Lorem ipsum dolor sit amit
																	</span><br>
																	<span class="kt-timeline-v3__item-user-name">
																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
																			By Sean
																		</a>
																	</span>
																</div>
															</div>
															<div class="kt-timeline-v3__item kt-timeline-v3__item--brand">
																<span class="kt-timeline-v3__item-time">11:00</span>
																<div class="kt-timeline-v3__item-desc">
																	<span class="kt-timeline-v3__item-text">
																		Lorem ipsum dolor sit amit eiusmdd tempor
																	</span><br>
																	<span class="kt-timeline-v3__item-user-name">
																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
																			By James
																		</a>
																	</span>
																</div>
															</div>
															<div class="kt-timeline-v3__item kt-timeline-v3__item--success">
																<span class="kt-timeline-v3__item-time">12:00</span>
																<div class="kt-timeline-v3__item-desc">
																	<span class="kt-timeline-v3__item-text">
																		Lorem ipsum dolor
																	</span><br>
																	<span class="kt-timeline-v3__item-user-name">
																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
																			By James
																		</a>
																	</span>
																</div>
															</div>
															<div class="kt-timeline-v3__item kt-timeline-v3__item--danger">
																<span class="kt-timeline-v3__item-time">14:00</span>
																<div class="kt-timeline-v3__item-desc">
																	<span class="kt-timeline-v3__item-text">
																		Lorem ipsum dolor sit amit,consectetur eiusmdd
																	</span><br>
																	<span class="kt-timeline-v3__item-user-name">
																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
																			By Derrick
																		</a>
																	</span>
																</div>
															</div>
															<div class="kt-timeline-v3__item kt-timeline-v3__item--info">
																<span class="kt-timeline-v3__item-time">15:00</span>
																<div class="kt-timeline-v3__item-desc">
																	<span class="kt-timeline-v3__item-text">
																		Lorem ipsum dolor sit amit,consectetur
																	</span><br>
																	<span class="kt-timeline-v3__item-user-name">
																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
																			By Iman
																		</a>
																	</span>
																</div>
															</div>
															<div class="kt-timeline-v3__item kt-timeline-v3__item--brand">
																<span class="kt-timeline-v3__item-time">17:00</span>
																<div class="kt-timeline-v3__item-desc">
																	<span class="kt-timeline-v3__item-text">
																		Lorem ipsum dolor sit consectetur eiusmdd tempor
																	</span><br>
																	<span class="kt-timeline-v3__item-user-name">
																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
																			By Aziko
																		</a>
																	</span>
																</div>
															</div>
														</div>
													</div>

													<!--End::Timeline 3 -->
												</div>
												<div class="tab-pane" id="kt_widget3_tab2_content">

													<!--Begin::Timeline 3 -->
													<div class="kt-timeline-v3">
														<div class="kt-timeline-v3__items">
															<div class="kt-timeline-v3__item kt-timeline-v3__item--info">
																<span class="kt-timeline-v3__item-time kt-font-success">09:00</span>
																<div class="kt-timeline-v3__item-desc">
																	<span class="kt-timeline-v3__item-text">
																		Contrary to popular belief, Lorem Ipsum is not simply random text.
																	</span><br>
																	<span class="kt-timeline-v3__item-user-name">
																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
																			By Bob
																		</a>
																	</span>
																</div>
															</div>
															<div class="kt-timeline-v3__item kt-timeline-v3__item--warning">
																<span class="kt-timeline-v3__item-time kt-font-warning">10:00</span>
																<div class="kt-timeline-v3__item-desc">
																	<span class="kt-timeline-v3__item-text">
																		There are many variations of passages of Lorem Ipsum available.
																	</span><br>
																	<span class="kt-timeline-v3__item-user-name">
																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
																			By Sean
																		</a>
																	</span>
																</div>
															</div>
															<div class="kt-timeline-v3__item kt-timeline-v3__item--brand">
																<span class="kt-timeline-v3__item-time kt-font-primary">11:00</span>
																<div class="kt-timeline-v3__item-desc">
																	<span class="kt-timeline-v3__item-text">
																		Contrary to popular belief, Lorem Ipsum is not simply random text.
																	</span><br>
																	<span class="kt-timeline-v3__item-user-name">
																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
																			By James
																		</a>
																	</span>
																</div>
															</div>
															<div class="kt-timeline-v3__item kt-timeline-v3__item--success">
																<span class="kt-timeline-v3__item-time kt-font-success">12:00</span>
																<div class="kt-timeline-v3__item-desc">
																	<span class="kt-timeline-v3__item-text">
																		The standard chunk of Lorem Ipsum used since the 1500s is reproduced.
																	</span><br>
																	<span class="kt-timeline-v3__item-user-name">
																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
																			By James
																		</a>
																	</span>
																</div>
															</div>
															<div class="kt-timeline-v3__item kt-timeline-v3__item--danger">
																<span class="kt-timeline-v3__item-time kt-font-warning">14:00</span>
																<div class="kt-timeline-v3__item-desc">
																	<span class="kt-timeline-v3__item-text">
																		Latin words, combined with a handful of model sentence structures.
																	</span><br>
																	<span class="kt-timeline-v3__item-user-name">
																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
																			By Derrick
																		</a>
																	</span>
																</div>
															</div>
															<div class="kt-timeline-v3__item kt-timeline-v3__item--info">
																<span class="kt-timeline-v3__item-time kt-font-info">15:00</span>
																<div class="kt-timeline-v3__item-desc">
																	<span class="kt-timeline-v3__item-text">
																		Contrary to popular belief, Lorem Ipsum is not simply random text.
																	</span><br>
																	<span class="kt-timeline-v3__item-user-name">
																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
																			By Iman
																		</a>
																	</span>
																</div>
															</div>
															<div class="kt-timeline-v3__item kt-timeline-v3__item--brand">
																<span class="kt-timeline-v3__item-time kt-font-danger">17:00</span>
																<div class="kt-timeline-v3__item-desc">
																	<span class="kt-timeline-v3__item-text">
																		Lorem Ipsum is therefore always free from repetition, injected humour.
																	</span><br>
																	<span class="kt-timeline-v3__item-user-name">
																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
																			By Aziko
																		</a>
																	</span>
																</div>
															</div>
														</div>
													</div>

													<!--End::Timeline 3 -->
												</div>
											</div>
										</div>
									</div>

									<!--End::Portlet-->
								</div>
							</div>

							<!--End::Row-->

							<!--End::Dashboard 6-->
						</div>

						<!-- end:: Content -->
					</div>

					<!-- begin:: Footer -->
					<div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
						<div class="kt-container  kt-container--fluid ">
							<div class="kt-footer__copyright">
								2019&nbsp;&copy;&nbsp;<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Keenthemes</a>
							</div>
							<div class="kt-footer__menu">
								<a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">About</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Team</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Contact</a>
							</div>
						</div>
					</div>

					<!-- end:: Footer -->
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Quick Panel -->
		<div id="kt_quick_panel" class="kt-quick-panel">
			<a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
			<div class="kt-quick-panel__nav">
				<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
					<li class="nav-item active">
						<a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_logs" role="tab">Audit Logs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
					</li>
				</ul>
			</div>
			<div class="kt-quick-panel__content">
				<div class="tab-content">
					<div class="tab-pane fade show kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">
						<div class="kt-notification">
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-line-chart kt-font-success"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New order has been received
									</div>
									<div class="kt-notification__item-time">
										2 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-box-1 kt-font-brand"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New customer is registered
									</div>
									<div class="kt-notification__item-time">
										3 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-chart2 kt-font-danger"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										Application has been approved
									</div>
									<div class="kt-notification__item-time">
										3 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-image-file kt-font-warning"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New file has been uploaded
									</div>
									<div class="kt-notification__item-time">
										5 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-bar-chart kt-font-info"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New user feedback received
									</div>
									<div class="kt-notification__item-time">
										8 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-pie-chart-2 kt-font-success"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										System reboot has been successfully completed
									</div>
									<div class="kt-notification__item-time">
										12 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-favourite kt-font-danger"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New order has been placed
									</div>
									<div class="kt-notification__item-time">
										15 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item kt-notification__item--read">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-safe kt-font-primary"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										Company meeting canceled
									</div>
									<div class="kt-notification__item-time">
										19 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-psd kt-font-success"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New report has been received
									</div>
									<div class="kt-notification__item-time">
										23 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon-download-1 kt-font-danger"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										Finance report has been generated
									</div>
									<div class="kt-notification__item-time">
										25 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon-security kt-font-warning"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New customer comment recieved
									</div>
									<div class="kt-notification__item-time">
										2 days ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-pie-chart kt-font-warning"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New customer is registered
									</div>
									<div class="kt-notification__item-time">
										3 days ago
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="tab-pane fade kt-scroll" id="kt_quick_panel_tab_logs" role="tabpanel">
						<div class="kt-notification-v2">
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon-bell kt-font-brand"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										5 new user generated report
									</div>
									<div class="kt-notification-v2__item-desc">
										Reports based on sales
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-box kt-font-danger"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										2 new items submited
									</div>
									<div class="kt-notification-v2__item-desc">
										by Grog John
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon-psd kt-font-brand"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										79 PSD files generated
									</div>
									<div class="kt-notification-v2__item-desc">
										Reports based on sales
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-supermarket kt-font-warning"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										$2900 worth producucts sold
									</div>
									<div class="kt-notification-v2__item-desc">
										Total 234 items
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon-paper-plane-1 kt-font-success"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										4.5h-avarage response time
									</div>
									<div class="kt-notification-v2__item-desc">
										Fostest is Barry
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-information kt-font-danger"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										Database server is down
									</div>
									<div class="kt-notification-v2__item-desc">
										10 mins ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-mail-1 kt-font-brand"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										System report has been generated
									</div>
									<div class="kt-notification-v2__item-desc">
										Fostest is Barry
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-hangouts-logo kt-font-warning"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										4.5h-avarage response time
									</div>
									<div class="kt-notification-v2__item-desc">
										Fostest is Barry
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="tab-pane kt-quick-panel__content-padding-x fade kt-scroll" id="kt_quick_panel_tab_settings" role="tabpanel">
						<form class="kt-form">
							<div class="kt-heading kt-heading--sm kt-heading--space-sm">Customer Care</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Notifications:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--success kt-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_1">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Case Tracking:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--success kt-switch--sm">
										<label>
											<input type="checkbox" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Support Portal:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--success kt-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
							<div class="kt-heading kt-heading--sm kt-heading--space-sm">Reports</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Generate Reports:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Report Export:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Allow Data Collection:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_4">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
							<div class="kt-heading kt-heading--sm kt-heading--space-sm">Memebers</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Member singup:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--brand">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Allow User Feedbacks:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--brand">
										<label>
											<input type="checkbox" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Enable Customer Portal:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--brand">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_6">
											<span></span>
										</label>
									</span>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- end::Quick Panel -->

		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->

		<!-- begin::Sticky Toolbar -->
		<ul class="kt-sticky-toolbar" style="margin-top: 30px;">
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success" id="kt_demo_panel_toggle" data-toggle="kt-tooltip" title="Check out more demos" data-placement="right">
				<a href="#" class=""><i class="flaticon2-drop"></i></a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--brand" data-toggle="kt-tooltip" title="Layout Builder" data-placement="left">
				<a href="<?php echo base_url(); ?>login/dashboard" target="_blank"><i class="flaticon2-gear"></i></a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--warning" data-toggle="kt-tooltip" title="Documentation" data-placement="left">
				<a href="https://keenthemes.com/metronic/?page=docs" target="_blank"><i class="flaticon2-telegram-logo"></i></a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--danger" id="kt_sticky_toolbar_chat_toggler" data-toggle="kt-tooltip" title="Chat Example" data-placement="left">
				<a href="#" data-toggle="modal" data-target="#kt_chat_modal"><i class="flaticon2-chat-1"></i></a>
			</li>
		</ul>

		<!-- end::Sticky Toolbar -->

		<!-- begin::Demo Panel -->
		<div id="kt_demo_panel" class="kt-demo-panel">
			<div class="kt-demo-panel__head">
				<h3 class="kt-demo-panel__title">
					Select A Demo

					<!--<small>5</small>-->
				</h3>
				<a href="#" class="kt-demo-panel__close" id="kt_demo_panel_close"><i class="flaticon2-delete"></i></a>
			</div>
			<div class="kt-demo-panel__body">
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 1
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="<?php echo base_url(); ?>employee/assets/media/demos/preview/demo1.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo1/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 2
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="<?php echo base_url(); ?>employee/assets/media/demos/preview/demo2.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo2/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 3
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="<?php echo base_url(); ?>employee/assets/media/demos/preview/demo3.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo3/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 4
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="<?php echo base_url(); ?>employee/assets/media/demos/preview/demo4.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo4/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 5
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="<?php echo base_url(); ?>employee/assets/media/demos/preview/demo5.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo5/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item kt-demo-panel__item--active">
					<div class="kt-demo-panel__item-title">
						Demo 6
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="<?php echo base_url(); ?>employee/assets/media/demos/preview/demo6.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="<?php echo base_url(); ?>login/dashboard" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 7
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="<?php echo base_url(); ?>employee/assets/media/demos/preview/demo7.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo7/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 8
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="<?php echo base_url(); ?>employee/assets/media/demos/preview/demo8.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo8/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 9
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="<?php echo base_url(); ?>employee/assets/media/demos/preview/demo9.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo9/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 10
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="<?php echo base_url(); ?>employee/assets/media/demos/preview/demo10.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo10/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 11
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="<?php echo base_url(); ?>employee/assets/media/demos/preview/demo11.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo11/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 12
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="<?php echo base_url(); ?>employee/assets/media/demos/preview/demo12.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo12/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 13
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="<?php echo base_url(); ?>employee/assets/media/demos/preview/demo13.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 14
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="<?php echo base_url(); ?>employee/assets/media/demos/preview/demo14.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<a href="https://1.envato.market/EA4JP" target="_blank" class="kt-demo-panel__purchase btn btn-brand btn-elevate btn-bold btn-upper">
					Buy Metronic Now!
				</a>
			</div>
		</div>

		<!-- end::Demo Panel -->

		<!--Begin:: Chat-->
		<div class="modal fade- modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="kt-chat">
						<div class="kt-portlet kt-portlet--last">
							<div class="kt-portlet__head">
								<div class="kt-chat__head ">
									<div class="kt-chat__left">
										<div class="kt-chat__label">
											<a href="#" class="kt-chat__title">Jason Muller</a>
											<span class="kt-chat__status">
												<span class="kt-badge kt-badge--dot kt-badge--success"></span> Active
											</span>
										</div>
									</div>
									<div class="kt-chat__right">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="flaticon-more-1"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-md">

												<!--begin::Nav-->
												<ul class="kt-nav">
													<li class="kt-nav__head">
														Messaging
														<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-group"></i>
															<span class="kt-nav__link-text">New Group</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-open-text-book"></i>
															<span class="kt-nav__link-text">Contacts</span>
															<span class="kt-nav__link-badge">
																<span class="kt-badge kt-badge--brand  kt-badge--rounded-">5</span>
															</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-bell-2"></i>
															<span class="kt-nav__link-text">Calls</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-dashboard"></i>
															<span class="kt-nav__link-text">Settings</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-protected"></i>
															<span class="kt-nav__link-text">Help</span>
														</a>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__foot">
														<a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
														<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
													</li>
												</ul>

												<!--end::Nav-->
											</div>
										</div>
										<button type="button" class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
											<i class="flaticon2-cross"></i>
										</button>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="kt-scroll kt-scroll--pull" data-height="410" data-mobile-height="300">
									<div class="kt-chat__messages kt-chat__messages--solid">
										<div class="kt-chat__message kt-chat__message--success">
											<div class="kt-chat__user">
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="<?php echo base_url(); ?>employee/assets/css/100_12.jpg" alt="image">
												</span>
												<a href="#" class="kt-chat__username">Jason Muller</span></a>
												<span class="kt-chat__datetime">2 Hours</span>
											</div>
											<div class="kt-chat__text">
												How likely are you to recommend our company<br> to your friends and family?
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">30 Seconds</span>
												<a href="#" class="kt-chat__username">You</span></a>
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="<?php echo base_url(); ?>employee/assets/media/users/300_21.jpg" alt="image">
												</span>
											</div>
											<div class="kt-chat__text">
												Hey there, we’re just writing to let you know that you’ve<br> been subscribed to a repository on GitHub.
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--success">
											<div class="kt-chat__user">
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="<?php echo base_url(); ?>employee/assets/media/users/100_12.jpg" alt="image">
												</span>
												<a href="#" class="kt-chat__username">Jason Muller</span></a>
												<span class="kt-chat__datetime">30 Seconds</span>
											</div>
											<div class="kt-chat__text">
												Ok, Understood!
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">Just Now</span>
												<a href="#" class="kt-chat__username">You</span></a>
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="<?php echo base_url(); ?>employee/assets/media/users/300_21.jpg" alt="image">
												</span>
											</div>
											<div class="kt-chat__text">
												You’ll receive notifications for all issues, pull requests!
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--success">
											<div class="kt-chat__user">
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="<?php echo base_url(); ?>employee/assets/media/users/100_12.jpg" alt="image">
												</span>
												<a href="#" class="kt-chat__username">Jason Muller</span></a>
												<span class="kt-chat__datetime">2 Hours</span>
											</div>
											<div class="kt-chat__text">
												You were automatically <b class="kt-font-brand">subscribed</b> <br>because you’ve been given access to the repository
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">30 Seconds</span>
												<a href="#" class="kt-chat__username">You</span></a>
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="<?php echo base_url(); ?>employee/assets/media/users/300_21.jpg" alt="image">
												</span>
											</div>
											<div class="kt-chat__text">
												You can unwatch this repository immediately <br>by clicking here: <a href="#" class="kt-font-bold kt-link"></a>
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--success">
											<div class="kt-chat__user">
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="<?php echo base_url(); ?>employee/assets/media/users/100_12.jpg" alt="image">
												</span>
												<a href="#" class="kt-chat__username">Jason Muller</span></a>
												<span class="kt-chat__datetime">30 Seconds</span>
											</div>
											<div class="kt-chat__text">
												Discover what students who viewed Learn <br>Figma - UI/UX Design Essential Training also viewed
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">Just Now</span>
												<a href="#" class="kt-chat__username">You</span></a>
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="<?php echo base_url(); ?>employee/assets/media/users/300_21.jpg" alt="image">
												</span>
											</div>
											<div class="kt-chat__text">
												Most purchased Business courses during this sale!
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kt-portlet__foot">
								<div class="kt-chat__input">
									<div class="kt-chat__editor">
										<textarea placeholder="Type here..." style="height: 50px"></textarea>
									</div>
									<div class="kt-chat__toolbar">
										<div class="kt_chat__tools">
											<a href="#"><i class="flaticon2-link"></i></a>
											<a href="#"><i class="flaticon2-photograph"></i></a>
											<a href="#"><i class="flaticon2-photo-camera"></i></a>
										</div>
										<div class="kt_chat__actions">
											<button type="button" class="btn btn-brand btn-md  btn-font-sm btn-upper btn-bold kt-chat__reply">reply</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--ENd:: Chat-->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#22b9ff",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="<?php echo base_url(); ?>employee/assets/js/jquery.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/popper.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/js.cookie.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/moment.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/tooltip.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/sticky.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="<?php echo base_url(); ?>employee/assets/js/jquery.form.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/jquery.blockUI.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/bootstrap-datepicker.init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/bootstrap-timepicker.init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/daterangepicker.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/bootstrap-switch.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/bootstrap-switch.init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/select2.full.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/ion.rangeSlider.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/typeahead.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/handlebars.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/nouislider.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/owl.carousel.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/autosize.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/clipboard.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/dropzone.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/summernote.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/markdown.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/bootstrap-markdown.init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/bootstrap-notify.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/bootstrap-notify.init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/jquery.validate.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/additional-methods.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/jquery-validation.init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/toastr.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/raphael.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/morris.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/Chart.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/idle-timer.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/jquery.waypoints.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/jquery.counterup.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/promise.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/sweetalert2.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/sweetalert2.init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/lib.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/jquery.input.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/repeater.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/purify.js" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="<?php echo base_url(); ?>employee/assets/js/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<script src="<?php echo base_url(); ?>employee/assets/js/fullcalendar.bundle.js" type="text/javascript"></script>
		<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>employee/assets/js/gmaps.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="<?php echo base_url(); ?>employee/assets/js/dashboard.js" type="text/javascript"></script>


		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>