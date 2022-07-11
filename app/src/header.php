<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="./assets/images/favicon.png" type="image/png">
	<title><?= $site ?></title>
	<link rel="stylesheet" href="./assets/css/main.css?v=0.2">

	<!-- Recaptcha Here -->
	<!-- <script src="https://www.google.com/recaptcha/api.js?render=<?= $recaptcha_client_secret ?>"></script>
	<script>
		grecaptcha.ready(function() {
			grecaptcha.execute('<?= $recaptcha_client_secret ?>', {
				action: 'contact'
			}).then(function(token) {
				document.getElementById('recaptchaResponse').value = token;
			});
		});
	</script> -->
</head>

<body>
	<header>
		<div class="header-top-bar">
			<div class="container">
				<div class="row justify-content-center justify-content-lg-between align-items-center">
					<div class="col-9 col-md-7 col-lg-4 col-xxl-auto pb-4 pb-md-5 pb-lg-0">
						<a href="./">
							<?= renderImg("logo.png", "logo") ?>
						</a>
					</div>
					<div class="col-auto">
						<div class="row justify-content-center justify-content-lg-end no-gutters align-items-center position-relative gx-1 gx-md-3 gx-lg-2 gx-xl-3">
							<div class="col-auto">
								<a href="tel:<?= $phone_number ?>" class="btn btn-block btn-dark rounded-pill text-white px-3 py-2 py-md-3 px-md-5 h14">
									Call Us 24/7 <b><?= $phone_number ?></b>
								</a>
							</div>
							<div class="col-auto">
								<a href="#form" class="btn btn-block btn-dark rounded-pill text-white px-3 py-2 py-md-3 px-md-5 h14">
									Book Online
								</a>
							</div>
							<div class="col-auto">
								<div class="cross-btn-wrapper">
									<a href="javascript:void(0)" class="cross-btn">
										<span class="text">Click here for a FREE Onsite Home Quote</span>
										<span class="icon"><?= renderImg("x-mark.png", "icons", "cross") ?></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="banner">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-7">
						<div class="hero-heading">
							Rainwater systems to suit your home &amp; your lifestyle
						</div>
						<div class="sub-heading">
							We are a Sydney Based Water Tank Company, Australian Made
						</div>
					</div>
					<div class="col py-4 py-md-5">
						<div class="h9 line-height-3">Off Grid Water supply made easy. Grow healthier, stronger plants in your backyard & reduce water bills, Supplied & Installed </div>
						<div class="banner-button-wrapper">
							<a href="#form" class="btn btn-primary rounded-pill banner-button">
								Add Value to Your Home
								<div class="slide-out">Go Green <svg width="30" height="14" viewBox="0 0 30 14" fill="#0076FF" xmlns="http://www.w3.org/2000/svg">
										<path d="M28.7431 6.29768L23.0817 0.636262C22.7428 0.297492 22.2332 0.196167 21.7905 0.379522C21.3478 0.562876 21.0591 0.994815 21.059 1.47398V5.06183C21.059 5.22543 20.9264 5.35806 20.7628 5.35806H2.43017C1.44857 5.35806 0.652832 6.1538 0.652832 7.13539C0.652832 8.11699 1.44857 8.91273 2.43017 8.91273H20.7628C20.9264 8.91273 21.059 9.04535 21.059 9.20895V12.7968C21.0591 13.276 21.3478 13.7079 21.7905 13.8913C22.2332 14.0746 22.7428 13.9733 23.0817 13.6345L28.7431 7.97311C29.2056 7.51041 29.2056 6.76038 28.7431 6.29768Z" fill="#0076FF" />
									</svg>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="tank-animation-wrapper">
				<div class="container">
					<div class="tank-animation">
						<div class="row h-100 justify-content-center">
							<div class="col-lg-6 px-md-5">
								<div class="d-flex justify-content-center h-100 flex-column" data-aos="slide-right">
									<div class="h9 fw-800 text-white px-4 py-5 px-md-0 pt-lg-0">We have saved millions of litres for:</div>
									<div class="row g-4 g-xl-3 g-xxl-2 justify-content-between align-items-center px-4 pb-4 p-lg-0">
										<div class="col-6 col-md col-xxl-auto text-center"><?= renderImg("kingspan.png", "logo") ?></div>
										<div class="col-6 col-md col-xxl-auto text-center"><?= renderImg("nsw-education.png", "logo") ?></div>
										<div class="col-6 col-md col-xxl-auto text-center"><?= renderImg("emerald-hill.png", "logo") ?></div>
										<div class="col-6 col-md col-xxl-auto text-center"><?= renderImg("jordan-springs.png", "logo") ?></div>
									</div>
								</div>
							</div>
							<div class="col-md-8 col-lg-6">
								<div class="h-100" data-aos="slide-up"><?= renderImg("tank.png", "lib", "tank-img") ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>