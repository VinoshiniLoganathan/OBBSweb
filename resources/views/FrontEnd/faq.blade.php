<!DOCTYPE html>
<html lang="en">
	
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
		<meta charset="UTF-8"/>
		<meta name="description" content="description"/>
		<meta name="keywords" content="keywords"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<link rel="shortcut icon" href="img/favicon.ico"/>
		<link rel="stylesheet" href="{{ URL::asset('FrontEnd/css/styles.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('FrontEnd/fonts/font-awesome') }}">
		<link rel="stylesheet" href="{{ URL::asset('FrontEnd/img') }}">
		<link rel="stylesheet" href="{{ URL::asset('FrontEnd/js/common.min') }}">
		<link rel="stylesheet" href="{{ URL::asset('FrontEnd/js/libs.min') }}">
		<title>OBBS</title>
		<!-- styles-->
		{{-- <link rel="stylesheet" href="css/styles.min.css"/> --}}
		<!-- web-font loader-->
		<script>
			WebFontConfig = {

				google: {

					families: ['Quicksand:300,400,500,700', 'Permanent+Marker:400'],

				}

			}

			function font() {

				var wf = document.createElement('script')

				wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
				wf.type = 'text/javascript'
				wf.async = 'true'

				var s = document.getElementsByTagName('script')[0]

				s.parentNode.insertBefore(wf, s)

			}

			font()
		</script>
	</head>
	<body>
		<div class="page-wrapper">
			<!-- mobile menu start-->
			<div class="mobile-nav">
				<div class="mobile-nav__inner">
					<div class="mobile-nav__item">
						<nav class="menu-holder">
							<ul class="mobile-menu">
								<li class="mobile-menu__item"><a class="mobile-menu__link" href="#">item</a></li>
								<li class="mobile-menu__item"><a class="mobile-menu__link" href="#">item</a></li>
								<li class="mobile-menu__item"><a class="mobile-menu__link" href="#">item</a></li>
								<li class="mobile-menu__item"><a class="mobile-menu__link" href="#">item</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- mobile menu end-->
			<!-- aside dropdown start-->
			<div class="aside-dropdown">
				<div class="aside-dropdown__inner"><span class="aside-dropdown__close">
					<svg class="icon">
						<use xlink:href="#close"></use>
					</svg></span>
					<div class="aside-dropdown__item d-lg-none d-block">
						<ul class="aside-menu">
							<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="/home"><span>Home</span></a>
								<!-- sub menu start    -->
								{{-- <ul class="aside-menu__sub-list">
									<li><a href="../index.html"><span>01 Home Color Style</span></a></li>
									<li><a href="../front_2.html"> <span>02 Home Color Style</span></a></li>
									<li><a href="../front_3.html"><span>03 Home Color Style</span></a></li>
									<li><a href="index.html"><span>04 Home Monochrome</span></a></li>
									<li><a href="front_2.html"><span>05 Home Monochrome</span></a></li>
									<li><a href="front_3.html"><span>06 Home Monochrome</span></a></li>
								</ul> --}}
								<!-- sub menu end-->
							</li>
							<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="/about"><span>About Us</span></a>
								<!-- sub menu start    -->
								{{-- <ul class="aside-menu__sub-list">
									<li><a href="about.html"><span>About</span></a></li>
									<li><a href="typography.html"> <span>Typography</span></a></li>
									<li><a href="donors.html"><span>Donors & Partners</span></a></li>
									<li><a href="volunteer.html"><span>Become a Volunteer</span></a></li>
									<li><a href="events.html"><span>Events</span></a></li>
									<li><a href="event-details.html"><span>Event Details</span></a></li>
									<li><a href="stories.html"><span>Stories</span></a></li>
									<li><a href="storie-details.html"><span>Storie Details</span></a></li>
									<li><a href="blog.html"><span>Blog</span></a></li>
									<li><a href="blog-post.html"><span>Blog Post</span></a></li>
									<li><a href="gallery.html"><span>Gallery</span></a></li>
									<li><a href="pricing.html"><span>Pricing Plans</span></a></li>
									<li class="item--active"><a href="faq.html"><span>FAQ</span></a></li>
									<li><a href="404.html"><span>404 Page</span></a></li>
								</ul> --}}
								<!-- sub menu end-->
							</li>
							<li class="aside-menu__item aside-menu__item--has-child aside-menu__item--active"><a class="aside-menu__link" href="/faq"><span>FAQ</span></a>
								<!-- sub menu start-->
								{{-- <ul class="aside-menu__sub-list">
									<li><a href="causes.html"><span>Causes 1</span></a></li>
									<li><a href="causes_2.html"> <span>Causes 2</span></a></li>
									<li><a href="causes_3.html"><span>Causes 3</span></a></li>
									<li><a href="cause-details.html"><span>Cause Details</span></a></li>
								</ul> --}}
								<!-- sub menu end-->
							</li>
							{{-- <li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Shop</span></a>
								<!-- sub menu start-->
								<ul class="aside-menu__sub-list">
									<li><a href="shop.html"><span>Catalog Page</span></a></li>
									<li><a href="shop-product.html"><span>Shop Product</span></a></li>
									<li><a href="shop-cart.html"><span>Shop Cart</span></a></li>
									<li><a href="shop-checkout.html"><span>Shop Checkout</span></a></li>
									<li><a href="shop-account.html"><span>Shop Account</span></a></li>
								</ul>
								<!-- sub menu end-->
							</li>
							<li class="aside-menu__item"><a class="aside-menu__link" href="contacts.html"><span>Contacts</span></a></li>
							<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Elements</span></a> --}}
								<!-- sub menu start    -->
								<ul class="aside-menu__sub-list">
									<li><a href="alerts.html"><span>Alerts</span></a></li>
									<li><a href="team.html"><span>Team</span></a></li>
									<li><a href="testimonials.html"><span>Testimonials</span></a></li>
									<li><a href="accordion.html"><span>Accordion</span></a></li>
									<li><a href="tabs.html"><span>Tabs</span></a></li>
									<li><a href="pricing-plan.html"><span>Pricing Plan</span></a></li>
									<li><a href="counters.html"><span>Counters</span></a></li>
									<li><a href="icons.html"><span>Icons</span></a></li>
								</ul>
								<!-- sub menu end-->
							</li>
						</ul>
					</div>
					{{-- <div class="aside-dropdown__item">
						<!-- aside menu start-->
						<ul class="aside-menu">
							<li class="aside-menu__item"><a class="aside-menu__link" href="#">Documents</a></li>
							<li class="aside-menu__item"><a class="aside-menu__link" href="#">Information</a></li>
							<li class="aside-menu__item"><a class="aside-menu__link" href="#">Additional Pages</a></li>
							<li class="aside-menu__item"><a class="aside-menu__link" href="#">Elements</a></li>
							<li class="aside-menu__item"><a class="aside-menu__link" href="#">Contacts</a></li>
						</ul>
						<!-- aside menu end-->
						<div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link" href="mailto:support@helpo.org">support@helpo.org</a></div>
						<div class="aside-inner"><span class="aside-inner__title">Phone numbers</span><a class="aside-inner__link" href="tel:+180012345678">+ 1800 - 123 456 78</a><a class="aside-inner__link" href="tel:+18009756511">+ 1800 - 975 65 11</a></div>
						<ul class="aside-socials">
							<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						</ul>
					</div> --}}
					<div class="aside-dropdown__item"><a class="button button--squared" href="#"> <span>Donate</span></a></div>
				</div>
			</div>
			<!-- aside dropdown end-->
			<!-- header start-->
			<header class="header header--front">
				<div class="container-fluid">
					<div class="row no-gutters justify-content-between">
						<div class="col-auto d-flex align-items-center">
							{{-- <div class="dropdown-trigger d-none d-sm-block">
								<div class="dropdown-trigger__item"></div>
							</div> --}}
							<div class="header-logo"><a class="header-logo__link" href="/home"><img class="header-logo__img" src="img/blogo.jpg" alt="logo"/></a></div>
						</div>
						<div class="col-auto">
							<!-- main menu start-->
							<nav>
								<ul class="main-menu">
									<li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link" href="/home"><span>Home</span></a>
										<!-- sub menu start-->
										{{-- <ul class="main-menu__sub-list">
											<li><a href="../index.html"><span>01 Home Color Style</span></a></li>
											<li><a href="../front_2.html"><span>02 Home Color Style</span></a></li>
											<li><a href="../front_3.html"><span>03 Home Color Style</span></a></li>
											<li><a href="index.html"><span>04 Home Monochrome</span></a></li>
											<li><a href="front_2.html"><span>05 Home Monochrome</span></a></li>
											<li><a href="front_3.html"><span>06 Home Monochrome</span></a></li>
										</ul> --}}
										<!-- sub menu end-->
									</li>
									<li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link" href="/about"><span>About Us</span></a>
										<!-- sub menu start-->
										{{-- <ul class="main-menu__sub-list sub-list--style-2">
											<li><a href="about.html"><span>About</span></a></li>
											<li><a href="typography.html"> <span>Typography</span></a></li>
											<li><a href="donors.html"><span>Donors & Partners</span></a></li>
											<li><a href="volunteer.html"><span>Become a Volunteer</span></a></li>
											<li><a href="events.html"><span>Events</span></a></li>
											<li><a href="event-details.html"><span>Event Details</span></a></li>
											<li><a href="stories.html"><span>Stories</span></a></li>
											<li><a href="storie-details.html"><span>Story Details</span></a></li>
											<li><a href="blog.html"><span>Blog</span></a></li>
											<li><a href="blog-post.html"><span>Blog Post</span></a></li>
											<li><a href="gallery.html"><span>Gallery</span></a></li>
											<li><a href="pricing.html"><span>Pricing Plans</span></a></li>
											<li class="item--active"><a href="faq.html"><span>FAQ</span></a></li>
											<li><a href="404.html"><span>404 Page</span></a></li>
										</ul> --}}
										<!-- sub menu end-->
									</li>
									<li class="main-menu__item main-menu__item--has-child main-menu__item--active"><a class="main-menu__link" href="/faq"><span>Contact Us</span></a>
										<!-- sub menu start-->
										{{-- <ul class="main-menu__sub-list">
											<li><a href="causes.html"><span>Causes 1</span></a></li>
											<li><a href="causes_2.html"> <span>Causes 2</span></a></li>
											<li><a href="causes_3.html"><span>Causes 3</span></a></li>
											<li><a href="cause-details.html"><span>Cause Details</span></a></li>
										</ul> --}}
										<!-- sub menu end-->
									</li>
									{{-- <li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link" href="javascript:void(0);"><span>Shop</span></a>
										<!-- sub menu start-->
										<ul class="main-menu__sub-list">
											<li><a href="shop.html"><span>Catalog Page</span></a></li>
											<li><a href="shop-product.html"><span>Shop Product</span></a></li>
											<li><a href="shop-cart.html"><span>Shop Cart</span></a></li>
											<li><a href="shop-checkout.html"><span>Shop Checkout</span></a></li>
											<li><a href="shop-account.html"><span>Shop Account</span></a></li>
										</ul>
										<!-- sub menu end-->
									</li>
									<li class="main-menu__item"><a class="main-menu__link" href="contacts.html"><span>Contacts</span></a></li>
									<li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link" href="javascript:void(0);"><span>Elements</span></a> --}}
										<!-- sub menu start-->
										<ul class="main-menu__sub-list">
											<li><a href="alerts.html"><span>Alerts</span></a></li>
											<li><a href="team.html"><span>Team</span></a></li>
											<li><a href="testimonials.html"><span>Testimonials</span></a></li>
											<li><a href="accordion.html"><span>Accordion</span></a></li>
											<li><a href="tabs.html"><span>Tabs</span></a></li>
											<li><a href="pricing-plan.html"><span>Pricing Plan</span></a></li>
											<li><a href="counters.html"><span>Counters</span></a></li>
											<li><a href="icons.html"><span>Icons</span></a></li>
										</ul>
										<!-- sub menu end-->
									</li>
								</ul>
							</nav>
							<!-- main menu end-->
						</div>
						<div class="col-auto d-flex align-items-center">
							<!-- lang select start-->
							{{-- <ul class="lang-select lang-select--inner">
								<li class="lang-select__item lang-select__item--active"><span>En</span>
									<ul class="lang-select__sub-list">
										<li><a href="#">French</a></li>
										<li><a href="#">Spanish</a></li>
										<li><a href="#">Deutsch</a></li>
										<li><a href="#">Russian</a></li>
									</ul>
								</li>
							</ul> --}}
							<!-- lang select end				-->
							<a class="button button--squared" href="/donor_login"><span>Donor</span></a>
							<a class="button button--squared" href="/hosp_login"><span>Hospital</span></a>
							{{-- <div class="dropdown-trigger d-block d-sm-none">
								<div class="dropdown-trigger__item"></div>
							</div> --}}
						</div>
					</div>
				</div>
			</header>
			<!-- header end-->
			<main class="main">
				<section class="promo">
					{{-- <picture>
						<source srcset="img/faq.jpg" media="(min-width: 992px)"/><img class="img--bg" src="img/faq.jpg" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span>Compassion</span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
										<h1 class="promo-primary__title"><span>FAQ</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div> --}}
					<div class="promo-slider">
						<div class="promo-slider__item promo-slider__item--style-1">
							<picture>
								<source srcset="img/aboutt.jpg" media="(min-width: 992px)"/><img class="img--bg" src="img/aboutt.jpg" alt="img"/>
							</picture>
							<div class="align-container__item"><span class="promo-primary__pre-title"></span>
								<h1 class="promo-primary__title"><br><span>Contact Us</span>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-12">
										<div class="align-container">
											<div class="align-container__item">
												<div class="promo-slider__wrapper-1">
													<h2 class="promo-slider__title"><span>Some people need help and we give it!</span></h2>
												</div>
												<div class="promo-slider__wrapper-2">
													<p class="promo-slider__subtitle">Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish</p>
												</div>
												<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="#">Discover</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- faq start-->
				<section class="section faq">
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-12">
								<div class="heading heading--primary"><span class="heading__pre-title">Faq</span>
									<h2 class="heading__title no-margin-bottom"><span>General</span> <span>Questions</span></h2>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-8 col-xl-9">
								<div class="accordion accordion--primary">
									<div class="accordion__title-block">
										<h6 class="accordion__title">Health in other Countries?</h6><span class="accordion__close"></span>
									</div>
									<div class="accordion__text-block">
										<p>Burma danio black bass straptail southern Dolly Varden orbicular velvetfish trumpetfish; bluntnose minnow. Hatchetfish pricklefish sixgill ray sawfish scaly dragonfish! Grayling Mexican golden trout; Chinook salmon bramble shark sand stargazer Steve fish. Scat zebra pleco graveldiver river shark tripod fish; flagtail bala shark warbonnet.</p>
									</div>
								</div>
								<div class="accordion accordion--primary">
									<div class="accordion__title-block">
										<h6 class="accordion__title">Water Delivery in Africa?</h6><span class="accordion__close"></span>
									</div>
									<div class="accordion__text-block">
										<p>Burma danio black bass straptail southern Dolly Varden orbicular velvetfish trumpetfish; bluntnose minnow. Hatchetfish pricklefish sixgill ray sawfish scaly dragonfish! Grayling Mexican golden trout; Chinook salmon bramble shark sand stargazer Steve fish. Scat zebra pleco graveldiver river shark tripod fish; flagtail bala shark warbonnet.</p>
									</div>
								</div>
								<div class="accordion accordion--primary">
									<div class="accordion__title-block">
										<h6 class="accordion__title">We Build and Create?</h6><span class="accordion__close"></span>
									</div>
									<div class="accordion__text-block">
										<p>Burma danio black bass straptail southern Dolly Varden orbicular velvetfish trumpetfish; bluntnose minnow. Hatchetfish pricklefish sixgill ray sawfish scaly dragonfish! Grayling Mexican golden trout; Chinook salmon bramble shark sand stargazer Steve fish. Scat zebra pleco graveldiver river shark tripod fish; flagtail bala shark warbonnet.</p>
									</div>
								</div>
								<div class="accordion accordion--primary">
									<div class="accordion__title-block">
										<h6 class="accordion__title">How to became a volounteer?</h6><span class="accordion__close"></span>
									</div>
									<div class="accordion__text-block">
										<p>Burma danio black bass straptail southern Dolly Varden orbicular velvetfish trumpetfish; bluntnose minnow. Hatchetfish pricklefish sixgill ray sawfish scaly dragonfish! Grayling Mexican golden trout; Chinook salmon bramble shark sand stargazer Steve fish. Scat zebra pleco graveldiver river shark tripod fish; flagtail bala shark warbonnet.</p>
									</div>
								</div>
								<div class="accordion accordion--primary">
									<div class="accordion__title-block">
										<h6 class="accordion__title">Health in other Countries?</h6><span class="accordion__close"></span>
									</div>
									<div class="accordion__text-block">
										<p>Burma danio black bass straptail southern Dolly Varden orbicular velvetfish trumpetfish; bluntnose minnow. Hatchetfish pricklefish sixgill ray sawfish scaly dragonfish! Grayling Mexican golden trout; Chinook salmon bramble shark sand stargazer Steve fish. Scat zebra pleco graveldiver river shark tripod fish; flagtail bala shark warbonnet.</p>
									</div>
								</div>
								<div class="accordion accordion--primary">
									<div class="accordion__title-block">
										<h6 class="accordion__title">We Build and Create?</h6><span class="accordion__close"></span>
									</div>
									<div class="accordion__text-block">
										<p>Burma danio black bass straptail southern Dolly Varden orbicular velvetfish trumpetfish; bluntnose minnow. Hatchetfish pricklefish sixgill ray sawfish scaly dragonfish! Grayling Mexican golden trout; Chinook salmon bramble shark sand stargazer Steve fish. Scat zebra pleco graveldiver river shark tripod fish; flagtail bala shark warbonnet.</p>
									</div>
								</div>
								<div class="accordion accordion--primary">
									<div class="accordion__title-block">
										<h6 class="accordion__title">How to became a volounteer?</h6><span class="accordion__close"></span>
									</div>
									<div class="accordion__text-block">
										<p>Burma danio black bass straptail southern Dolly Varden orbicular velvetfish trumpetfish; bluntnose minnow. Hatchetfish pricklefish sixgill ray sawfish scaly dragonfish! Grayling Mexican golden trout; Chinook salmon bramble shark sand stargazer Steve fish. Scat zebra pleco graveldiver river shark tripod fish; flagtail bala shark warbonnet.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-xl-3">
								<div class="faq-aside"><img class="img--bg" src="img/faq_aside.jpg" alt="img"/>
									<h5 class="faq-aside__title">Any Question?</h5>
									<p>Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn</p><a class="faq-aside__link" href="#">ASk Question</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- faq end-->
			</main>
			<!-- footer start-->
			<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-lg-3">
							<div class="footer-logo"><a class="footer-logo__link" href="/home"><img class="footer-logo__img" src="img/blogo.jpg" alt="logo"/></a></div>
							<!-- footer socials start-->
							<ul class="footer-socials">
								<li class="footer-socials__item"><a class="footer-socials__link" href=><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="footer-socials__item"><a class="footer-socials__link" href=><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="footer-socials__item"><a class="footer-socials__link" href=><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li class="footer-socials__item"><a class="footer-socials__link" href=><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
							<!-- footer socials end-->
						</div>
						<div class="col-sm-6 col-lg-3">
							<h4 class="footer__title">Contacts</h4>
							<div class="footer-contacts">
								{{-- <p class="footer-contacts__address">Elliott Ave, Parkville VIC 3052, Melbourne Canada</p> --}}
								<p class="footer-contacts__phone">Phone: <a href="tel:+31859644725">+31 85 964 47 25</a></p>
								<p class="footer-contacts__mail">Email: <a href="mailto:support@helpo.org">support@helpo.org</a></p>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<h4 class="footer__title">Menu & Links</h4>
							<!-- footer nav start-->
							<nav>
								<ul class="footer-menu">
									<li class="footer-menu__item"><a class="footer-menu__link" href="/home">Home</a></li>
									<li class="footer-menu__item footer-menu__item--active"><a class="footer-menu__link" href="/about">About Us</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="/faq">Contact Us</a></li>
								</ul>
							</nav>
							<!-- footer nav end-->
						</div>
						{{-- <div class="col-sm-6 col-lg-3">
							<h4 class="footer__title">Donate</h4>
							<p>Help Us Change the Lives of Children in World</p><a class="button footer__button button--filled" href="#">Donate</a>
						</div> --}}
					</div>
					<div class="row align-items-baseline">
						<div class="col-md-6">
							<p class="footer-copyright">© 2020 Online Blood Bank System</p>
						</div>
						{{-- <div class="col-md-6">
							<div class="footer-privacy"><a class="footer-privacy__link" href="#">Privacy Policy</a><span class="footer-privacy__divider">|</span><a class="footer-privacy__link" href="#">Term and Condision</a></div>
						</div> --}}
					</div>
				</div>
			</footer>
			<!-- footer end-->
		</div>
		<!-- libs-->
		<script src="../../../../ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="js/libs.min.js"></script>
		<!-- scripts-->
		<script src="js/common.min.js"></script>
		<div style="display: none"><?xml version="1.0" encoding="utf-8"?><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><symbol viewBox="0 0 12.8 16" id="bag" xmlns="http://www.w3.org/2000/svg"><path d="M12.797 13.831l-.916-10.317a.441.441 0 00-.438-.402H9.559C9.533 1.391 8.127 0 6.4 0S3.267 1.391 3.241 3.112H1.357a.437.437 0 00-.438.402L.003 13.831 0 13.87C0 15.045 1.076 16 2.4 16h8c1.324 0 2.4-.955 2.4-2.13 0-.013 0-.026-.003-.039zM6.4.883a2.28 2.28 0 012.276 2.228H4.124A2.28 2.28 0 016.4.883zm4 14.234h-8c-.831 0-1.504-.55-1.517-1.227l.876-9.891h1.478V5.34a.44.44 0 00.441.442.44.44 0 00.442-.442V3.998h4.556V5.34a.44.44 0 00.441.442.44.44 0 00.442-.442V3.998h1.478l.88 9.891c-.013.678-.69 1.228-1.517 1.228z" fill-rule="evenodd" clip-rule="evenodd"/></symbol><symbol viewBox="0 0 512 512" id="blood" xmlns="http://www.w3.org/2000/svg"><path d="M157.764 434.559c-57.058-28.643-84.583-102.22-48.983-163.75a7.5 7.5 0 00-2.735-10.249c-3.583-2.069-8.173-.85-10.249 2.736-39.956 69.06-9.481 152.18 55.237 184.67a7.501 7.501 0 106.73-13.407z"/><path d="M469.999 392.714a7.5 7.5 0 007.501-7.501V368.89c0-6.556-5.272-11.895-11.806-11.902h-51.751v-51.804c-.008-6.481-5.348-11.753-11.902-11.753H388.67c-3.972-17.819-10.632-34.895-19.853-50.835-.083-.144-128.44-222.006-128.526-222.148-19.198-33.08-41.612-19.623-50.492-4.18-.656 1.136-128.933 222.861-130.939 226.328-66.43 114.817 10.682 257.11 138.572 268.632a7.504 7.504 0 008.144-6.798 7.501 7.501 0 00-6.798-8.144C80.996 485.676 11.359 354.653 71.845 250.107L200.31 28.057c1.009-1.745 7.094-13.281 13.563-13.078 5.398.145 10.844 8.744 13.567 13.211l128.39 221.918c7.889 13.636 13.738 28.173 17.443 43.323H334.39c-6.555 0-11.894 5.272-11.901 11.806v51.751h-51.81c-6.074.01-11.085 4.703-11.687 10.689-.04.399-.061.804-.061 1.213v67.651c0 6.555 5.272 11.894 11.806 11.901h51.752v7.257c-24.419 21.571-55.547 36.26-90.231 40.215a7.504 7.504 0 00-6.604 8.303c.47 4.116 4.202 7.076 8.303 6.603 31.259-3.565 61.771-15.303 88.531-35.736v25.163c.008 6.481 5.348 11.753 11.901 11.753h67.65c6.556 0 11.895-5.272 11.902-11.806v-51.751h51.804c6.481-.008 11.753-5.348 11.753-11.901v-16.324a7.5 7.5 0 00-7.501-7.501 7.5 7.5 0 00-7.501 7.501v13.224h-51.653c-6.564 0-11.902 5.34-11.902 11.902v51.654H337.49v-51.653c0-6.564-5.341-11.902-11.903-11.902h-51.654v-61.452h51.654c6.564 0 11.903-5.34 11.903-11.902v-51.657h61.451v51.654c0 6.564 5.34 11.902 11.902 11.902h51.654v13.224a7.503 7.503 0 007.502 7.502z"/></symbol><symbol viewBox="0 0 512.002 512.002" id="bread" xmlns="http://www.w3.org/2000/svg"><path d="M495.535 92.143h-4.457c.344-1.447.545-2.949.545-4.5V67.738c0-10.752-8.748-19.5-19.5-19.5h-11.408a7.5 7.5 0 000 15h11.408c2.439 0 4.5 2.061 4.5 4.5v19.904c0 2.439-2.061 4.5-4.5 4.5h-57.818c-2.439 0-4.5-2.061-4.5-4.5V67.738c0-2.439 2.061-4.5 4.5-4.5h11.408a7.5 7.5 0 000-15h-11.408c-10.752 0-19.5 8.748-19.5 19.5v19.904c0 1.551.201 3.053.545 4.5H287.629c-9.212 0-16.707 7.495-16.707 16.707v180.013c-25.03-8.489-50.928-12.394-76.045-12.394-83.833 0-154.508 42.636-187.491 101.791-21.401 38.38 6.263 85.506 50.106 85.506h119.884c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5H57.493c-32.46 0-52.795-34.88-37.005-63.201 13.073-23.447 32.309-43.48 55.554-58.968v46.363c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5V317.54c12.713-6.936 26.367-12.601 40.668-16.866v72.286a7.5 7.5 0 007.5 7.5 7.5 7.5 0 007.5-7.5v-76.201a221.787 221.787 0 0140.667-5.155v81.356a7.5 7.5 0 007.5 7.5 7.5 7.5 0 007.5-7.5v-81.356a221.809 221.809 0 0140.668 5.155v76.2c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-72.286c14.3 4.265 27.954 9.93 40.668 16.866v55.419c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-46.363c24.616 16.4 43.256 36.911 55.554 58.968 15.808 28.352-4.579 63.201-37.005 63.201H212.378c-4.142 0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5h283.049c9.139 0 16.574-7.436 16.574-16.574V108.607c0-9.079-7.386-16.464-16.466-16.464zm-209.612 16.706c0-.941.765-1.706 1.706-1.706h207.906c.808 0 1.464.657 1.464 1.464v46.037L285.923 261.942V108.849zM497 447.19c0 .868-.706 1.574-1.574 1.574H371.037c9.483-8.735 16.233-21.034 18.146-34.47 2.737-19.237-4.076-33.112-14.606-48.661L497 303.402V447.19zm0-160.614l-131.476 66.833c-19.813-24.581-47.229-45.241-79.601-58.859v-15.781L497 171.472v115.104z"/><path d="M403.594 129.388h-30.552a7.5 7.5 0 000 15h30.552a7.5 7.5 0 000-15z"/></symbol><symbol viewBox="0 0 512 512" id="charity" xmlns="http://www.w3.org/2000/svg"><path d="M511.833 310.027c-8.158-38.269-45.677-65.235-86.638-57.957 10.639-123.887-86.883-231.318-212.203-231.318h-.024l-.029.001C94.34 20.783 0 117.275 0 233.744 0 354.22 98.509 446.943 213.073 446.943c22.075 0 44.019-3.522 65.576-10.536 19.43 20.469 43.935 38.917 71.778 53.909a7.521 7.521 0 0010.189-3.057 7.521 7.521 0 00-3.057-10.189c-98.571-53.076-125.017-132.852-108.589-173.626 18.607-46.07 82.568-50.594 107.262-7.141 1.376 2.421 7.796 8.56 15.846 8.383 6.247-.146 12.028-4.11 15.077-9.002 31.133-49.96 99.33-32.402 109.965 17.481a7.518 7.518 0 008.925 5.788 7.522 7.522 0 005.788-8.926zM162.425 42.355c-22.262 20.549-37.029 50.349-46.474 79.023-18.425-5.258-35.275-12.033-49.856-20.172 26.902-29.675 60.302-49.281 96.33-58.851zM56.303 112.931c16.08 9.278 34.798 16.957 55.322 22.828-8.072 29.433-11.922 60.32-12.472 90.463H15.202c1.532-40.865 15.561-80.232 41.101-113.291zm-.207 241.746c-25.017-32.159-39.367-71.359-40.899-113.411h83.956c.546 30.053 4.257 60.998 12.401 90.484-20.583 5.894-39.35 13.606-55.458 22.927zm9.911 11.652c14.598-8.16 31.475-14.95 49.931-20.217 9.481 28.467 24.256 58.54 46.219 78.774-37.417-9.97-70.723-30.414-96.15-58.557zm139.463 64.649c-36.885-6.393-62.719-52.612-74.917-88.641 23.308-5.413 48.683-8.516 74.917-9.016v97.657zm0-112.701c-27.715.512-54.584 3.842-79.301 9.668-7.279-26.463-11.392-55.947-11.97-86.678h91.271v77.01zm0-92.055h-91.271c.548-29.094 4.286-58.741 11.97-86.678 24.718 5.825 51.588 9.156 79.301 9.667v77.011zm0-92.057c-26.236-.499-51.614-3.604-74.923-9.016 12.129-36.335 37.274-82.924 74.923-88.763v97.779zm154.421-32.959c-14.581 8.14-31.43 14.915-49.856 20.172-9.346-28.376-24.45-58.872-46.477-79.024 36.483 9.632 69.992 29.769 96.333 58.852zm-139.376-64.82c37.773 5.858 62.794 52.424 74.923 88.762-23.31 5.414-48.687 8.518-74.923 9.017V36.386zm36.814 373.798c-11.743 12.055-24.164 19.093-36.813 20.979v-97.839c3.111.06 6.226.148 9.334.282 1.616 27.908 11.689 53.506 27.479 76.578zm54.139-158.792c-41.192-4-77.628 26.35-81.513 67.17-3.144-.13-6.294-.227-9.441-.285v-77.011h91.264a386.803 386.803 0 01-.31 10.126zm-90.953-25.17v-77.011c27.714-.511 54.584-3.842 79.301-9.667 7.279 26.463 11.392 55.947 11.97 86.678h-91.271zm189.096 30.461c-23.949 10.169-34.499 30.393-35.484 31.426-1.808 1.894-2.863 2.147-5.317-.131l-.024-.021c-9.286-15.833-24.084-27.996-42.402-33.598.22-4.346.368-8.719.448-13.092h83.946a200.988 200.988 0 01-1.167 15.416zm-82.78-30.461c-.583-31.975-4.869-62.741-12.472-90.463 20.523-5.871 39.241-13.55 55.322-22.828 25.222 32.632 39.548 71.881 41.102 113.291h-83.952zm178.644 113.05c-4.098-.657-7.961 2.129-8.622 6.23-11.221 69.69-81.629 115.269-111.381 131.631a7.523 7.523 0 007.249 13.183c55.891-30.738 108.926-79.956 118.984-142.421a7.522 7.522 0 00-6.23-8.623z"/></symbol><symbol viewBox="0 0 488.878 488.878" id="check" xmlns="http://www.w3.org/2000/svg"><path d="M143.294 340.058l-92.457-92.456L0 298.439l122.009 122.008.14-.141 22.274 22.274L488.878 98.123l-51.823-51.825z"/></symbol><symbol viewBox="0 0 511.998 511.998" id="church" xmlns="http://www.w3.org/2000/svg"><path d="M443.726 325.008l-88.417-69.347v-33.14c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v21.374l-79.68-62.494a7.504 7.504 0 00-9.259 0l-79.68 62.494v-89.068L255.998 88.7l84.309 66.125v32.692c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5V166.59l13.309 10.439a7.502 7.502 0 009.259-11.803L263.499 75.521V43.999h21.381c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-21.381V7.5c0-4.143-3.357-7.5-7.5-7.5a7.499 7.499 0 00-7.5 7.5v21.496h-21.381c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h21.381V75.52l-114.375 89.706a7.5 7.5 0 009.259 11.803l13.308-10.438v89.068l-88.417 69.347a7.5 7.5 0 009.259 11.803l30.124-23.626v183.814H76.078a7.499 7.499 0 00-7.5 7.5c0 4.143 3.357 7.5 7.5 7.5H435.92c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-31.576V313.185l30.124 23.626a7.502 7.502 0 0010.531-1.272 7.502 7.502 0 00-1.273-10.531zM248.498 496.999h-43.629V378.22c0-18.035 14.673-32.708 32.708-32.708h10.921v151.487zm140.845-.001h-67.214v-67.13c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v67.131H263.5V345.511h10.921c18.035 0 32.708 14.673 32.708 32.709v16.646c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5V378.22c0-26.308-21.401-47.71-47.709-47.71h-36.842c-26.31 0-47.709 21.405-47.709 47.71v118.778h-67.214V301.419l133.344-104.584 133.344 104.584v195.579z"/><path d="M270.885 121.611h-29.773c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h29.773c4.143 0 7.5-3.357 7.5-7.5s-3.356-7.5-7.5-7.5zm0 27.814h-29.773a7.499 7.499 0 00-7.5 7.5c0 4.143 3.357 7.5 7.5 7.5h29.773c4.143 0 7.5-3.357 7.5-7.5a7.498 7.498 0 00-7.5-7.5zm0 111.651h-29.773a7.499 7.499 0 00-7.5 7.5c0 4.143 3.357 7.5 7.5 7.5h29.773c4.143 0 7.5-3.357 7.5-7.5a7.498 7.498 0 00-7.5-7.5zm0 27.812h-29.773a7.499 7.499 0 00-7.5 7.5c0 4.143 3.357 7.5 7.5 7.5h29.773c4.143 0 7.5-3.357 7.5-7.5a7.498 7.498 0 00-7.5-7.5z"/></symbol><symbol fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="gfeather gfeather-clock" viewBox="0 0 24 24" id="clock" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></symbol><symbol viewBox="0 0 47.971 47.971" id="close" xmlns="http://www.w3.org/2000/svg"><path d="M28.228 23.986L47.092 5.122a2.998 2.998 0 000-4.242 2.998 2.998 0 00-4.242 0L23.986 19.744 5.121.88a2.998 2.998 0 00-4.242 0 2.998 2.998 0 000 4.242l18.865 18.864L.879 42.85a2.998 2.998 0 104.242 4.241l18.865-18.864L42.85 47.091c.586.586 1.354.879 2.121.879s1.535-.293 2.121-.879a2.998 2.998 0 000-4.242L28.228 23.986z"/></symbol><symbol viewBox="0 0 510 510" id="comment" xmlns="http://www.w3.org/2000/svg"><path d="M459 0H51C22.95 0 0 22.95 0 51v459l102-102h357c28.05 0 51-22.95 51-51V51c0-28.05-22.95-51-51-51z"/></symbol><symbol viewBox="0 0 512 512" id="donate-1" xmlns="http://www.w3.org/2000/svg"><path d="M210.292 38.074h-31.52a7.5 7.5 0 000 15h31.52a7.5 7.5 0 000-15zm5.824 403.437h-43.17c-10.025 0-18.181 8.156-18.181 18.182v7.007c0 10.025 8.156 18.181 18.181 18.181h43.17c10.025 0 18.181-8.156 18.181-18.181v-7.007c0-10.026-8.156-18.182-18.181-18.182zm3.18 25.189c0 1.724-1.457 3.18-3.18 3.18h-43.17c-1.724 0-3.18-1.456-3.18-3.18v-7.007c0-1.724 1.457-3.181 3.18-3.181h43.17c1.724 0 3.18 1.457 3.18 3.181v7.007zm42.26-136.646H127.507a7.5 7.5 0 000 15h134.049c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5zm-.001 40.752H127.507a7.5 7.5 0 000 15h134.049a7.5 7.5 0 10-.001-15zm205.517 19.405l-28.916-28.915 16.321-9.043c7.146-3.963 5.88-14.512-1.892-16.514h-.001l-75.343-19.401c-7.617-1.962-14.731 5.161-12.772 12.765l19.393 75.309c2.002 7.797 12.583 9.053 16.545 1.894l9.022-16.282 28.3 28.3c4.261 4.261 11.378 4.286 15.916-.25l13.239-13.239c4.081-4.087 4.167-10.646.188-14.624zm-21.511 14.731l-30.484-30.485c-4.634-4.633-12.365-3.263-15.5 2.396l-4.998 9.022-13.674-53.101 53.102 13.674-9.724 5.387c-5.325 2.951-6.574 10.229-2.213 14.591l31.004 31.004-7.513 7.512zM175.074 202.706h-14.747v-.001c-3.416 0-5.665 1.833-5.665 3.916v53.074c0 2.083 2.249 3.916 5.665 3.916h14.747c11.499 0 20.496-5.332 20.496-19.663v-21.579c0-14.33-8.998-19.663-20.496-19.663zm7.499 41.242c0 5.666-2.833 8.333-7.499 8.333h-7.414v-38.243h7.414c4.666-.001 7.499 2.665 7.499 8.331v21.579zm40.991-41.243c-11.498 0-20.413 5.332-20.413 19.663v22.079c0 14.331 8.916 19.663 20.413 19.663s20.496-5.332 20.496-19.663v-22.079c0-14.33-8.999-19.663-20.496-19.663zm7.498 41.743c0 5.749-2.833 8.333-7.498 8.333-4.666 0-7.415-2.583-7.415-8.333v-22.079c0-5.749 2.749-8.333 7.415-8.333 4.665 0 7.498 2.583 7.498 8.333v22.079zm57.404-41.743c-3.249 0-6.498 1.166-6.498 3.915v28.329l-13.498-25.746c-3.166-6.082-4.915-6.499-9.582-6.499-3.249 0-6.498 1.25-6.498 3.999v52.907c0 5.332 12.998 5.332 12.998 0v-28.327l15.83 28.828c1.583 2.916 4.249 3.499 7.248 3.499 3.249 0 6.499-1.333 6.499-3.999v-52.99c.001-2.749-3.249-3.916-6.499-3.916zm59.57 54.658l-15.58-50.824c-.917-2.917-4.666-4.333-8.499-4.333s-7.582 1.417-8.498 4.333l-15.497 50.824c-.083.333-.167.667-.167.917 0 3.083 4.749 5.332 8.333 5.332 2.082 0 3.749-.667 4.248-2.416l2.833-10.415h17.58l2.833 10.415c.499 1.75 2.166 2.416 4.249 2.416 3.582 0 8.331-2.25 8.331-5.332.001-.25-.082-.583-.166-.917zm-30.161-16.581l6.082-22.329 6.082 22.329h-12.164zm65.986-38.078h-35.993c-2.749 0-3.916 3-3.916 5.749 0 3.166 1.417 5.916 3.916 5.916h11.498v45.242c0 2.666 3.249 3.999 6.499 3.999 3.249 0 6.498-1.333 6.498-3.999V214.37h11.498c2.5 0 3.916-2.75 3.916-5.916 0-2.75-1.167-5.75-3.916-5.75zm44.407 49.574H405.94v-14.164h12.498c2.749 0 3.915-2.666 3.915-4.916 0-2.666-1.416-5.082-3.915-5.082H405.94v-14.081h22.328v.001c2.5 0 3.916-2.666 3.916-5.749 0-2.666-1.166-5.582-3.916-5.582h-29.661c-2.833 0-5.665 1.333-5.665 3.999v52.907c0 2.666 2.832 3.999 5.665 3.999h29.661c2.75 0 3.916-2.916 3.916-5.582 0-3.084-1.416-5.75-3.916-5.75z"/><path d="M459.817 245.747a7.5 7.5 0 00-7.5 7.5v28.752c0 2.439-2.061 4.5-4.5 4.5H142.282c-4.011 0-7.274-3.263-7.274-7.274v-92.43c0-4.008 3.258-7.268 7.264-7.273h305.544c2.439 0 4.5 2.061 4.5 4.5v34.223c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-34.223c0-10.753-8.749-19.501-19.501-19.501H347.064V31.634C347.064 14.191 332.873 0 315.43 0H212.033a7.5 7.5 0 000 15h103.398c9.172 0 16.633 7.461 16.633 16.633V164.52h-17.387V88.848c0-7.522-6.119-13.645-13.645-13.645H88.029c-7.479 0-13.644 6.103-13.644 13.645v326.846c0 7.522 6.12 13.643 13.644 13.643h213.003c7.523 0 13.645-6.12 13.645-13.643V301.5h17.387v178.865c0 9.172-7.461 16.633-16.633 16.633H73.632c-9.172 0-16.633-7.461-16.633-16.633V31.634c0-9.172 7.461-16.633 16.633-16.633H177.03a7.5 7.5 0 000-15H73.632C56.189 0 41.999 14.191 41.999 31.634v448.732C41.999 497.809 56.19 512 73.633 512h241.799c17.442 0 31.634-14.191 31.634-31.634V301.5h100.751c10.753 0 19.501-8.749 19.501-19.501v-28.752a7.501 7.501 0 00-7.501-7.5zM133.266 90.206h166.41v32.561h-166.41V90.206zm-43.879 0h28.878v32.561H89.387V90.206zm210.289 324.132H89.387v-276.57h210.289v26.753H139.507c-10.753 0-19.501 8.749-19.501 19.501v97.977c0 10.753 8.749 19.501 19.501 19.501h160.169v112.838z"/></symbol><symbol viewBox="0 0 512 512" id="donation" xmlns="http://www.w3.org/2000/svg"><path d="M249.391 480.848l-5.955-81.261c-.644-8.765-8.267-15.274-16.937-14.626l-4.06.298c-1.684-16.72-4.663-33.083-8.881-48.743-5.795-21.513-11.132-28.631-35.39-58.71l-.091-.111c-9.117-10.87-16.034-13.592-63.355-40.001-10.804-6.03-20.514-4.362-27.552-.111l-.951-2.285a28.116 28.116 0 001.465-7.138l4.32-59.924c1.125-15.605-10.594-29.147-26.202-30.272-8.141-.594-15.872 2.306-21.525 7.704-17.838-13.303-50.332-.331-43.294 33.012.068.325 32.147 118.269 32.234 118.588 4.603 21.37 20.138 33.048 26.62 37.084.805.499 17.8 9.877 18.63 10.335 25.706 14.18 27.804 15.34 34.941 24.697 6.853 8.987 6.83 17.261 7.275 23.332l-3.786.278c-8.702.639-15.262 8.236-14.623 16.936l5.357 73.138c.61 8.334 7.635 14.862 15.991 14.862h109.893c9.24 0 16.551-7.865 15.876-17.082zM77.051 167.156l-2.834 39.302c-20.513-49.296-18.527-45.451-20.4-49.113 8.282-9.374 24.156-2.983 23.234 9.811zm-9.44 154.378c-11.585-7.277-16.527-15.939-19.88-28.012L15.607 175.388c-.62-3.095-2.482-16.157 9.303-19.475 6.087-1.42 10.482.561 13.937 5.552 1.548 2.237-2.11-6.058 37.249 88.526-3.5 7.964-3.862 19.859 7.323 28.337 12.099 9.172 40.842 31.136 41.131 31.357a7.455 7.455 0 004.545 1.54 7.494 7.494 0 004.557-13.45c-.289-.222-29.054-22.203-41.178-31.393-7.136-5.408-2.456-13.048 2.76-16.16 3.688-2.196 7.558-2.02 12.183.562 46.012 25.678 52.068 28.089 59.133 36.492 24.266 30.094 27.651 35.01 32.535 53.141 3.974 14.75 6.793 30.168 8.402 45.94l-71.854 5.264c-.452-6.156-.485-18.448-10.306-31.327-10.733-14.071-14.383-14.588-57.716-38.76zm166.583 161.107a.896.896 0 01-.681.297H123.62a1.048 1.048 0 01-1.042-.967l-5.357-73.138a.837.837 0 01.771-.892 4085734.798 4085734.798 0 00109.67-8.032c.201 0 .383.068.539.203.174.149.27.342.287.57l5.953 81.259a.904.904 0 01-.247.7zm233.527-336.977c-18.673-17.826-49.575-3.071-47.727 22.57l4.32 59.923a28.071 28.071 0 001.465 7.139l-.951 2.285c-7.037-4.251-16.753-5.918-27.552.111-47.382 26.436-54.259 29.154-63.356 40a9.062 9.062 0 00-.092.112c-24.257 30.081-29.593 37.197-35.388 58.709-4.219 15.66-7.197 32.023-8.881 48.743l-4.061-.298c-8.749-.623-16.298 5.91-16.935 14.626l-5.955 81.261c-.673 9.215 6.638 17.08 15.877 17.08h40.195c4.14 0 7.495-3.355 7.495-7.495s-3.355-7.495-7.495-7.495h-40.195a.896.896 0 01-.681-.297.892.892 0 01-.247-.7l5.955-81.26a.802.802 0 01.286-.57.857.857 0 01.606-.201l109.603 8.03a.835.835 0 01.77.893l-5.357 73.138c-.04.543-.498.967-1.042.967h-34.722c-4.14 0-7.495 3.355-7.495 7.495s3.355 7.495 7.495 7.495h34.722c8.356 0 15.382-6.528 15.991-14.862l5.357-73.137c.64-8.701-5.921-16.3-14.624-16.938l-3.785-.278.38-5.186a33.967 33.967 0 016.895-18.146c8.604-11.281 9.973-10.686 53.261-34.849.105-.058.208-.119.311-.183 6.481-4.036 22.016-15.714 26.62-37.084l32.133-118.17a7.51 7.51 0 00.101-.419c7.047-33.393-25.491-46.29-43.297-33.009zm-9.543 11.682c-1.619 3.165 1.656-3.891-20.4 49.113l-2.834-39.302c-.91-12.634 14.841-19.313 23.234-9.811zm38.21 18.042c-.092.338-32.155 118.224-32.228 118.565-3.207 15.173-13.7 23.763-19.776 27.58-43.332 24.172-46.983 24.688-57.714 38.758-9.536 12.505-9.786 24.25-10.306 31.327l-71.854-5.264c1.609-15.77 4.429-31.19 8.402-45.94 4.884-18.132 8.265-23.043 32.538-53.141 7.063-8.402 13.12-10.814 59.13-36.491 9.705-5.417 15.255 1.44 16.683 3.606.013.021.029.038.042.058.027.042.049.085.078.126 1.692 2.601 3.701 7.594-1.86 11.809-12.124 9.189-40.889 31.17-41.178 31.392a7.494 7.494 0 004.557 13.45 7.463 7.463 0 004.545-1.54c.289-.221 29.032-22.184 41.131-31.356 11.185-8.478 10.823-20.373 7.323-28.338 45.243-108.727 33.54-81.367 37.715-89.307 8.015-10.579 26.687-4.842 22.772 14.706zm-195.047-64.524h-20.043V90.819c0-13.93-11.332-25.262-25.262-25.262s-25.262 11.332-25.262 25.262v20.044H210.73c-13.93 0-25.263 11.332-25.263 25.262s11.333 25.262 25.263 25.262h20.044v20.045c-.001 13.93 11.331 25.262 25.261 25.262s25.262-11.332 25.262-25.262v-20.045h20.044c13.93 0 25.263-11.332 25.263-25.262s-11.334-25.261-25.263-25.261zm0 35.533h-27.538a7.494 7.494 0 00-7.495 7.495v27.54c0 5.664-4.608 10.272-10.272 10.272-5.664 0-10.272-4.608-10.272-10.272v-27.54a7.494 7.494 0 00-7.495-7.495h-27.54c-5.665 0-10.273-4.608-10.273-10.272s4.608-10.272 10.273-10.272h27.539a7.494 7.494 0 007.495-7.495V90.819c0-5.664 4.608-10.272 10.272-10.272 5.664 0 10.272 4.608 10.272 10.272v27.539a7.494 7.494 0 007.495 7.495h27.539c5.665 0 10.273 4.608 10.273 10.272 0 5.665-4.608 10.272-10.273 10.272z"/><path d="M370.268 145.993a7.494 7.494 0 00-8.541 6.277c-7.892 51.672-53.33 90.637-105.692 90.637-58.958 0-106.923-47.965-106.923-106.923S197.077 29.06 256.035 29.06c52.295 0 97.725 38.91 105.67 90.507a7.496 7.496 0 0014.816-2.281C367.472 58.523 316.651 14.07 256.035 14.07c-67.223 0-121.913 54.691-121.913 121.914s54.691 121.913 121.913 121.913a121.867 121.867 0 0079.789-29.734c21.906-18.977 36.368-45.125 40.721-73.63a7.496 7.496 0 00-6.277-8.54z"/></symbol><symbol viewBox="0 0 483.3 483.3" id="envelope" xmlns="http://www.w3.org/2000/svg"><path d="M424.3 57.75H59.1c-32.6 0-59.1 26.5-59.1 59.1v249.6c0 32.6 26.5 59.1 59.1 59.1h365.1c32.6 0 59.1-26.5 59.1-59.1v-249.5c.1-32.6-26.4-59.2-59-59.2zm32.1 308.7c0 17.7-14.4 32.1-32.1 32.1H59.1c-17.7 0-32.1-14.4-32.1-32.1v-249.5c0-17.7 14.4-32.1 32.1-32.1h365.1c17.7 0 32.1 14.4 32.1 32.1v249.5h.1z"/><path d="M304.8 238.55l118.2-106c5.5-5 6-13.5 1-19.1-5-5.5-13.5-6-19.1-1l-163 146.3-31.8-28.4c-.1-.1-.2-.2-.2-.3-.7-.7-1.4-1.3-2.2-1.9L78.3 112.35c-5.6-5-14.1-4.5-19.1 1.1-5 5.6-4.5 14.1 1.1 19.1l119.6 106.9-119.1 111.5c-5.4 5.1-5.7 13.6-.6 19.1 2.7 2.8 6.3 4.3 9.9 4.3 3.3 0 6.6-1.2 9.2-3.6l120.9-113.1 32.8 29.3c2.6 2.3 5.8 3.4 9 3.4s6.5-1.2 9-3.5l33.7-30.2 120.2 114.2c2.6 2.5 6 3.7 9.3 3.7 3.6 0 7.1-1.4 9.8-4.2 5.1-5.4 4.9-14-.5-19.1l-118.7-112.7z"/></symbol><symbol viewBox="0 0 477 477" id="location-pin" xmlns="http://www.w3.org/2000/svg"><path d="M238.4 0C133 0 47.2 85.8 47.2 191.2c0 12 1.1 24.1 3.4 35.9.1.7.5 2.8 1.3 6.4 2.9 12.9 7.2 25.6 12.8 37.7 20.6 48.5 65.9 123 165.3 202.8 2.5 2 5.5 3 8.5 3s6-1 8.5-3c99.3-79.8 144.7-154.3 165.3-202.8 5.6-12.1 9.9-24.7 12.8-37.7.8-3.6 1.2-5.7 1.3-6.4 2.2-11.8 3.4-23.9 3.4-35.9C429.6 85.8 343.8 0 238.4 0zm161.2 222.4c0 .2-.1.4-.1.6-.1.5-.4 2-.9 4.3v.2c-2.5 11.2-6.2 22.1-11.1 32.6-.1.1-.1.3-.2.4-18.7 44.3-59.7 111.9-148.9 185.6-89.2-73.7-130.2-141.3-148.9-185.6-.1-.1-.1-.3-.2-.4-4.8-10.4-8.5-21.4-11.1-32.6v-.2c-.6-2.3-.8-3.8-.9-4.3 0-.2-.1-.4-.1-.7-2-10.3-3-20.7-3-31.2 0-90.5 73.7-164.2 164.2-164.2s164.2 73.7 164.2 164.2c0 10.6-1 21.1-3 31.3z"/><path d="M238.4 71.9c-66.9 0-121.4 54.5-121.4 121.4s54.5 121.4 121.4 121.4 121.4-54.5 121.4-121.4S305.3 71.9 238.4 71.9zm0 215.8c-52.1 0-94.4-42.4-94.4-94.4s42.4-94.4 94.4-94.4 94.4 42.4 94.4 94.4-42.3 94.4-94.4 94.4z"/></symbol><symbol viewBox="0 0 536 641" id="logo" xmlns="http://www.w3.org/2000/svg"><path d="M389.163 594.104c21.216-42.56 27.76-82.583 14.898-114.417-15.892-39.332-52.942-55.33-86.842-41.633-18.471 7.463-30.192 22.563-33.55 45.533-18.264-14.234-37.292-16.91-55.764-9.447-33.9 13.696-49.439 50.94-33.547 90.273 13.259 32.818 47.463 57.544 94.433 73.385-19.532 4.031-32.076 4.269-55.297-3.017-33.571-10.534-59.216-44.228-80.372-72.98-21.157-28.752-31.686-60.359-41.927-84.37-9.8-23.599-17.619-45.557-23.457-65.874-5.824-19.89-19.94-50.82-42.348-92.789-22.394-41.542-35.477-67.378-39.25-77.507C2.367 231.133.391 223.506.212 218.382c-.164-4.697 1.807-9.468 5.912-14.314 4.12-4.42 7.666-6.895 10.64-7.426 2.972-.531 5.975-.209 9.008.968 3.46 1.162 20.097 24.736 49.912 70.722 0 0 42.623 66.327 44.722 68.979 2.099 2.652 18.702 10.088 12.955-14.56-.254-7.26-15.211-43.932-44.873-110.016 0 0-38.191-79.468-41.144-90.587-2.953-11.12-2.336-16.271-2.336-16.271.675-5.154 2.454-9.278 5.338-12.371 2.899-2.666 6.88-4.943 11.942-6.83 5.505-1.475 9.767-1.837 12.785-1.088a24.903 24.903 0 019.165 5.452c2.666 2.9 5.863 8.773 9.591 17.62 4.17 9.26 16.295 32.137 36.376 68.63 20.08 36.493 32.714 61.703 37.902 75.63 0 0 6.478 18.05 8.422 20.868 1.944 2.818 10.51 9.573 8.145-5.415-.164-4.697-4.632-22.496-13.405-53.399-8.345-30.918-19.225-67.09-32.64-108.519 0 0-13.763-40.882-16.738-52.642-2.975-11.76-4.313-14.78-3.639-25.261.674-10.482 2.25-13.362 11.664-18.792 6.277-3.62 13.803-3.938 22.577-.955 5.359 2.403 9.773 6.514 13.244 12.334 5.206 8.73 5.973 10.627 12.412 23.656 6.453 13.455 15.392 36.87 26.815 70.245 6.82 19.928 14.195 38.504 20.419 55.586 4.2 11.527 7.64 22.524 10.488 32.685 7.155 25.527 10.502 33.657 10.943 34.764.442 1.107 2.56 3.37 4.31 2.99 1.75-.383 4.661-.237 4.68-4.249.012-2.674-2.364-15.63-7.128-38.87-4.751-25.912-11.727-54.312-20.926-85.2-8.773-30.902-18.702-63.001-20.797-74.043-2.095-11.043-2.364-18.729-.805-23.058 1.558-4.33 4.84-8.292 9.842-11.887 5.019-3.168 10.76-4.01 17.222-2.525 6.463 1.484 11.904 4.287 16.322 8.408 4.86 4.533 14.54 23.387 20.05 34.31 5.51 10.923 11.84 26.948 18.989 48.074 7.149 21.126 14.446 46.523 21.894 76.189 5.259 20.052 11.475 42.264 18.649 66.635l18.318 42.201 17.375 43.473c4.98 15.324 9.37 25.617 13.174 30.879 5.705 7.893 12.73 9.602 15.703 9.07 2.974-.53 6.093-2.99 9.36-7.38 3.707-3.977 10.869-19.19 21.485-45.64 10.617-26.45 19.198-43.85 25.745-52.201 6.547-8.352 13.352-15.43 20.415-21.234 7.063-5.805 14.171-10.328 21.324-13.57 7.58-3.258 14.998-5.013 22.255-5.267 7.257-.253 12.638.842 16.142 3.284 3.52 2.87 5.118 5.807 4.796 8.81.104 2.99-2.645 9.926-8.249 20.81-5.604 10.884-13.036 30.595-22.297 59.135-9.246 28.967-14.398 46.675-15.455 53.125-.615 6.861-1.46 13.031-1.273 17.402.188 4.37-13.22 76-27.64 109.298s-17.823 43.646-29.37 64.839c-5.602 10.283-21.768 26.819-41.761 42.22z"/></symbol><symbol viewBox="0 0 512.001 512.001" id="man" xmlns="http://www.w3.org/2000/svg"><path d="M472.809 467.412l-50.096-77.655 50.094-77.589a7.51 7.51 0 00-.432-8.748l-24.819-31.206c-1.339-1.683-3.559-2.836-5.878-2.836h-32.837a7.51 7.51 0 00-7.51 7.51 7.51 7.51 0 007.51 7.51h19.056l-10.442 16.187h-52.269l-.939-1.455-9.504-14.732h19.055c4.148 0 7.51-3.362 7.51-7.51s-3.361-7.51-7.51-7.51H340.96c-2.276 0-4.506 1.116-5.873 2.829l-81.372-31.514v-21.018c14.24-11.075 24.114-27.492 26.594-46.22 17.362-1.227 30.129-15.305 30.129-31.914a31.8 31.8 0 00-7.737-20.806V92.958C302.703 41.701 261.003 0 209.745 0s-92.958 41.701-92.958 92.958v28.507c-5.009 5.679-7.734 12.666-7.734 20.078 0 16.594 12.742 30.682 30.119 31.913 2.496 19.04 12.63 36.085 28.115 47.334v19.908L77.725 275.42a8.255 8.255 0 00-.141.056c-1.616.665-39.59 16.786-39.59 61.134v156.241c0 10.56 8.591 19.151 19.151 19.151h135.17c4.148 0 7.51-3.362 7.51-7.51s-3.361-7.51-7.51-7.51h-79.842V381.479a7.51 7.51 0 00-7.51-7.51 7.51 7.51 0 00-7.51 7.51v32.704a19.136 19.136 0 00-4.131-.461H53.013V336.61c0-33.764 28.493-46.479 30.237-47.224l53.822-20.866 23.647 47.393.001.001c3.589 7.188 12.772 9.528 19.368 4.845l30.437-21.618 30.437 21.617c6.581 4.674 15.772 2.362 19.369-4.846l23.646-47.39 41.315 16.001-15.03 18.898a7.51 7.51 0 00-.432 8.748l50.094 77.589-15.46 23.964h-16.683c-1.42 0-2.799.167-4.131.461v-32.704c0-4.147-3.361-7.51-7.51-7.51s-7.51 3.362-7.51 7.51v115.503h-81.272c-4.148 0-7.51 3.362-7.51 7.51s3.361 7.51 7.51 7.51h136.598c10.745 0 19.151-8.763 19.152-19.15v-41.754l8.211-12.717 35.119 54.393a7.51 7.51 0 009.722 2.616l33.75-17.217c3.962-2.021 5.306-7.028 2.899-10.761zM93.322 428.739a4.135 4.135 0 014.131 4.131v64.109H57.145a4.135 4.135 0 01-4.131-4.131v-64.109h40.308zm202.099-287.197c0 8.155-5.825 15.316-14.48 16.728v-33.454c8.511 1.39 14.48 8.452 14.48 16.726zM138.553 158.27c-8.657-1.411-14.481-8.567-14.481-16.728 0-8.011 6.646-14.533 14.481-16.348v33.076zm.406-48.378c-2.352.27-5.059.902-7.152 1.61V92.958h-.001c0-42.975 34.963-77.939 77.939-77.939 42.976 0 77.939 34.963 77.939 77.939v18.03a33.541 33.541 0 00-6.743-1.304v-.72c0-2.761-.229-4.276-1.897-6.708l-.006-.009c-2.354-3.424-7.211-8.268-21.711-23.854a13.3 13.3 0 00-17.049-2.079c-25.557 16.694-57.356 25.688-87.405 23.53-6.448-.486-12.332 3.783-13.914 10.048zm14.614 54.296v-49.245c31.692 1.848 65.661-7.309 93.724-25.279 10.708 11.5 16.719 17.752 18.626 20.09 0 65.164.013 52.488-.036 55.835-.75 29.884-25.274 53.864-55.231 53.864-34.052-.001-57.083-26.334-57.083-55.265zm19.608 143.055l-22.039-44.169 21.277-8.241 27.23 33.611-26.468 18.799zm9.125-64.127v-14.017c17.228 6.924 38.104 7.549 56.391-.47v14.549l-28.171 34.773-28.22-34.835zm65.567 64.126l-26.5-18.819 27.224-33.604 21.315 8.255-22.039 44.168zm159.892 8.363l-16.445 25.492-16.445-25.492h32.89zm-82.392-7.056l14.95-18.794 42.059 65.194-13.52 20.957-43.489-67.357zm-1.722 124.322a4.136 4.136 0 014.131-4.132h6.996l-11.127 17.248v-13.116zm44.438 59.977c-.001 2.256-1.853 4.131-4.132 4.131h-40.306v-13.238l22.828 11.645c3.464 1.765 7.674.56 9.721-2.616l11.888-18.413v18.491zm-20.826-13.921l-20.305-10.358 115.358-178.814 14.949 18.796-110.002 170.376zm88.114 0l-35.118-54.393 13.512-20.929 41.911 64.964-20.305 10.358z"/></symbol><symbol viewBox="0 0 473.806 473.806" id="phone-call" xmlns="http://www.w3.org/2000/svg"><path d="M374.456 293.506c-9.7-10.1-21.4-15.5-33.8-15.5-12.3 0-24.1 5.3-34.2 15.4l-31.6 31.5c-2.6-1.4-5.2-2.7-7.7-4-3.6-1.8-7-3.5-9.9-5.3-29.6-18.8-56.5-43.3-82.3-75-12.5-15.8-20.9-29.1-27-42.6 8.2-7.5 15.8-15.3 23.2-22.8 2.8-2.8 5.6-5.7 8.4-8.5 21-21 21-48.2 0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5-6-6.2-12.3-12.6-18.8-18.6-9.7-9.6-21.3-14.7-33.5-14.7s-24 5.1-34 14.7l-.2.2-34 34.3c-12.8 12.8-20.1 28.4-21.7 46.5-2.4 29.2 6.2 56.4 12.8 74.2 16.2 43.7 40.4 84.2 76.5 127.6 43.8 52.3 96.5 93.6 156.7 122.7 23 10.9 53.7 23.8 88 26 2.1.1 4.3.2 6.3.2 23.1 0 42.5-8.3 57.7-24.8.1-.2.3-.3.4-.5 5.2-6.3 11.2-12 17.5-18.1 4.3-4.1 8.7-8.4 13-12.9 9.9-10.3 15.1-22.3 15.1-34.6 0-12.4-5.3-24.3-15.4-34.3l-54.9-55.1zm35.8 105.3c-.1 0-.1.1 0 0-3.9 4.2-7.9 8-12.2 12.2-6.5 6.2-13.1 12.7-19.3 20-10.1 10.8-22 15.9-37.6 15.9-1.5 0-3.1 0-4.6-.1-29.7-1.9-57.3-13.5-78-23.4-56.6-27.4-106.3-66.3-147.6-115.6-34.1-41.1-56.9-79.1-72-119.9-9.3-24.9-12.7-44.3-11.2-62.6 1-11.7 5.5-21.4 13.8-29.7l34.1-34.1c4.9-4.6 10.1-7.1 15.2-7.1 6.3 0 11.4 3.8 14.6 7l.3.3c6.1 5.7 11.9 11.6 18 17.9 3.1 3.2 6.3 6.4 9.5 9.7l27.3 27.3c10.6 10.6 10.6 20.4 0 31-2.9 2.9-5.7 5.8-8.6 8.6-8.4 8.6-16.4 16.6-25.1 24.4-.2.2-.4.3-.5.5-8.6 8.6-7 17-5.2 22.7l.3.9c7.1 17.2 17.1 33.4 32.3 52.7l.1.1c27.6 34 56.7 60.5 88.8 80.8 4.1 2.6 8.3 4.7 12.3 6.7 3.6 1.8 7 3.5 9.9 5.3.4.2.8.5 1.2.7 3.4 1.7 6.6 2.5 9.9 2.5 8.3 0 13.5-5.2 15.2-6.9l34.2-34.2c3.4-3.4 8.8-7.5 15.1-7.5 6.2 0 11.3 3.9 14.4 7.3l.2.2 55.1 55.1c10.3 10.2 10.3 20.7.1 31.3zm-154.2-286.1c26.2 4.4 50 16.8 69 35.8s31.3 42.8 35.8 69c1.1 6.6 6.8 11.2 13.3 11.2.8 0 1.5-.1 2.3-.2 7.4-1.2 12.3-8.2 11.1-15.6-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3 3.7-15.6 11s3.5 14.4 10.9 15.6zm217.2 96.3c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2 3.7-15.5 11-1.2 7.4 3.7 14.3 11.1 15.6 46.6 7.9 89.1 30 122.9 63.7 33.8 33.8 55.8 76.3 63.7 122.9 1.1 6.6 6.8 11.2 13.3 11.2.8 0 1.5-.1 2.3-.2 7.3-1.1 12.3-8.1 11-15.4z"/></symbol><symbol fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="qfeather qfeather-map-pin" viewBox="0 0 24 24" id="placeholder" xmlns="http://www.w3.org/2000/svg"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></symbol><symbol viewBox="0 0 16 16" id="previous" xmlns="http://www.w3.org/2000/svg"><path d="M0 7.9L6 3v3h2c8 0 8 8 8 8s-1-4-7.8-4H6v2.9l-6-5z"/></symbol><symbol viewBox="0 0 31.357 31.357" id="question" xmlns="http://www.w3.org/2000/svg"><path d="M15.255 0c5.424 0 10.764 2.498 10.764 8.473 0 5.51-6.314 7.629-7.67 9.62-1.018 1.481-.678 3.562-3.475 3.562-1.822 0-2.712-1.482-2.712-2.838 0-5.046 7.414-6.188 7.414-10.343 0-2.287-1.522-3.643-4.066-3.643-5.424 0-3.306 5.592-7.414 5.592-1.483 0-2.756-.89-2.756-2.584C5.339 3.683 10.084 0 15.255 0zm-.211 24.406a3.492 3.492 0 013.475 3.476 3.49 3.49 0 01-3.475 3.476 3.49 3.49 0 01-3.476-3.476 3.491 3.491 0 013.476-3.476z"/></symbol><symbol viewBox="0 0 348.333 348.334" id="remove" xmlns="http://www.w3.org/2000/svg"><path d="M336.559 68.611L231.016 174.165l105.543 105.549c15.699 15.705 15.699 41.145 0 56.85-7.844 7.844-18.128 11.769-28.407 11.769-10.296 0-20.581-3.919-28.419-11.769L174.167 231.003 68.609 336.563c-7.843 7.844-18.128 11.769-28.416 11.769-10.285 0-20.563-3.919-28.413-11.769-15.699-15.698-15.699-41.139 0-56.85l105.54-105.549L11.774 68.611c-15.699-15.699-15.699-41.145 0-56.844 15.696-15.687 41.127-15.687 56.829 0l105.563 105.554L279.721 11.767c15.705-15.687 41.139-15.687 56.832 0 15.705 15.699 15.705 41.145.006 56.844z"/></symbol><symbol viewBox="0 0 481.6 481.6" id="share" xmlns="http://www.w3.org/2000/svg"><path d="M381.6 309.4c-27.7 0-52.4 13.2-68.2 33.6l-132.3-73.9c3.1-8.9 4.8-18.5 4.8-28.4 0-10-1.7-19.5-4.9-28.5l132.2-73.8c15.7 20.5 40.5 33.8 68.3 33.8 47.4 0 86.1-38.6 86.1-86.1S429 0 381.5 0s-86.1 38.6-86.1 86.1c0 10 1.7 19.6 4.9 28.5l-132.1 73.8c-15.7-20.6-40.5-33.8-68.3-33.8-47.4 0-86.1 38.6-86.1 86.1s38.7 86.1 86.2 86.1c27.8 0 52.6-13.3 68.4-33.9l132.2 73.9c-3.2 9-5 18.7-5 28.7 0 47.4 38.6 86.1 86.1 86.1s86.1-38.6 86.1-86.1-38.7-86.1-86.2-86.1zm0-282.3c32.6 0 59.1 26.5 59.1 59.1s-26.5 59.1-59.1 59.1-59.1-26.5-59.1-59.1 26.6-59.1 59.1-59.1zM100 299.8c-32.6 0-59.1-26.5-59.1-59.1s26.5-59.1 59.1-59.1 59.1 26.5 59.1 59.1-26.6 59.1-59.1 59.1zm281.6 154.7c-32.6 0-59.1-26.5-59.1-59.1s26.5-59.1 59.1-59.1 59.1 26.5 59.1 59.1-26.5 59.1-59.1 59.1z"/></symbol><symbol viewBox="0 0 512 512" id="shirt" xmlns="http://www.w3.org/2000/svg"><path d="M256.022 164.026c-22.168-31.041-72.379-15.809-72.34 23.296.041 40.218 35.007 71.043 67.718 86.483a10.937 10.937 0 009.387-.012c32.679-15.507 67.582-46.404 67.541-86.62-.042-38.611-49.381-54.68-72.306-23.147zm.055 95.387c-28.048-13.708-57.362-39.556-57.395-72.105-.027-25.68 34.091-34.27 46.571-12.311 4.021 7.085 15.957 8.831 21.568-.169 14.365-23.089 46.48-11.644 46.506 12.364.035 32.545-29.227 58.454-57.25 72.221z"/><path d="M508.068 147.558l-79.259-84.265-.077-.082c-8.358-8.622-20.071-12.224-106.129-50.94a7.854 7.854 0 00-3.077-.66H191.921c-1.06 0-2.199.265-3.077.66-99.385 44.712-93.451 42.028-94.467 42.59-10.464 5.778-7.78 4.223-90.976 92.677a6.97 6.97 0 00-.375.431c-4.851 6.014-3.502 13.611 1.436 19.599l.017-.014c1.85 2.277 11.566 14.063 66.106 80.208 4.853 5.885 12.135 7.023 20.196.33.119-.099.235-.202.349-.309l19.703-18.54v253.7c0 9.62 7.826 17.446 17.445 17.446h110.228c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5H128.277a2.448 2.448 0 01-2.445-2.446V172.846c0-12.024.323-10.745-28.566-102.094 3.849-2.984-1.16-.312 90.152-41.391 13.606 35.662 50.953 58.519 70.794 57.318 12.048-.717 50.608-17.551 65.816-57.323 62.142 27.887 82.507 36.175 90.643 41.63-28.695 90.74-29.327 89.701-29.327 101.86v310.618a1.928 1.928 0 01-1.927 1.926H273.505c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h109.912c9.333 0 16.927-7.593 16.927-16.926V228.458c.264.248 20.609 19.404 20.887 19.635 6.17 5.121 15.103 5.158 21.86-3.031l-.021-.018c5.45-6.55 57.439-69.604 64.943-78.762 5.301-5.343 5.313-13.369.055-18.724zm-396.4 25.288v35.774c-2.583 1.156-4.574 3.016-5.528 3.914l-25.081 23.6a7.868 7.868 0 01-.568-.621l-64.784-78.567 69.664-74.063c26.345 83.307 26.297 80.856 26.297 89.963zm148.61-101.639c-11.329 3.394-44.786-13.577-57.807-44.596H308.98c-8.972 21.333-27.004 36.986-48.702 44.596zM430.672 236.4c-26.623-25.052-26.965-25.779-30.328-27.378v-36.176c0-9.072-.098-6.497 26.297-89.963l69.664 74.063c-68.299 82.837-65.014 78.928-65.633 79.454z"/><path d="M270.867 177.348c-7.454 11.998-23.925 10.275-29.756.002-10.152-17.86-37.686-10.752-37.662 9.953.036 35.108 37.478 58.493 48.952 64.823a7.501 7.501 0 007.295-.027c18.266-10.256 48.902-32.325 48.868-64.905-.024-19.646-26.047-28.571-37.697-9.846zm-14.87 59.546c-18.767-11.247-37.528-29.533-37.549-49.606-.006-5.354 7.079-7 9.62-2.528 11.435 20.141 42.09 22.156 55.537.509 3.747-6.024 9.954-2.575 9.959 1.942.023 23.573-23.936 41.434-37.567 49.683z"/><path d="M340.134 198.888a7.5 7.5 0 00-8.993 5.625c-7.854 34.083-40.436 60.361-68.309 73.586a15.686 15.686 0 01-13.459.02c-34.033-16.063-70.415-48.35-70.457-90.792-.038-38.012 43.788-57.847 72.44-35.086a7.5 7.5 0 009.366-.029c11.418-9.187 26.128-12.019 40.352-7.772 14.387 4.295 25.269 14.89 29.856 29.067a7.5 7.5 0 1014.272-4.618c-12.074-37.31-56.638-53.03-89.199-31.764-39.047-25.376-92.133 2.481-92.087 50.217.05 49.444 40.869 86.319 79.058 104.344a30.638 30.638 0 0026.287-.035c40.209-19.081 68.806-50.396 76.496-83.77a7.5 7.5 0 00-5.623-8.993z"/></symbol><symbol viewBox="0 0 489.418 489.418" id="warning" xmlns="http://www.w3.org/2000/svg"><path d="M244.709 389.496c18.736 0 34.332-14.355 35.91-33.026l24.359-290.927a60.493 60.493 0 00-15.756-46.011C277.783 7.09 261.629 0 244.709 0s-33.074 7.09-44.514 19.532a60.485 60.485 0 00-15.755 46.011l24.359 290.927c1.578 18.671 17.174 33.026 35.91 33.026zm0 21.412c-21.684 0-39.256 17.571-39.256 39.256 0 21.683 17.572 39.254 39.256 39.254s39.256-17.571 39.256-39.254c0-21.685-17.572-39.256-39.256-39.256z"/></symbol></svg></div>
	</body>

<!-- Mirrored from demo.artureanec.com/html/helpo/mono/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jun 2020 15:35:40 GMT -->
</html>