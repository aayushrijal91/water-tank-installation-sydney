<footer>
	<div class="footer-top">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md col-lg-8">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424143.27896679414!2d150.65110359237903!3d-33.847925485021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney%20NSW!5e0!3m2!1sen!2sau!4v1657090821935!5m2!1sen!2sau" width="100%" height="282" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="col-12 col-md-auto col-lg px-xl-6 px-xxl-8 pt-4 pt-md-0">
					<div class="fw-900 h15">Contact Us Today</div>
					<div class="py-3 py-md-4 h25">
						<div>23 Charles Street,</div>
						<div>St Marys NSW</div>
						<div>2760</div>
					</div>
					<div><a href="tel:<?= $phone_number ?>" class="btn p-0 text-white line-height-1 h17 fw-600">Call <span class="fw-900"><?= $phone_number ?></span></a></div>
					<div><a href="sms:<?= $phone_number ?>" class="btn p-0 text-white line-height-1 h17 fw-600">SMS <span class="fw-900"><?= $phone_number ?></span></a></div>
					<div class="pt-4"><a href="mailto:info@transformwater.com.au" class="btn fw-900 h24 p-0 text-white">info@transformwater.com.au</a></div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row justify-content-center justify-content-lg-between align-items-center py-3 py-lg-4">
				<div class="col-auto">
					<div class="row gx-0 gx-md-3 no-gutters justify-content-center">
						<div class="col-auto text-center">Copyright <?= date('Y') ?></div>
						<div class="col-auto px-1 px-md-3 text-primary fw-800">|</div>
						<div class="col-auto text-center"><?= $site ?></div>
						<div class="col-auto px-1 px-md-3 text-primary fw-800">|</div>
						<div class="col-auto text-center">All Rights Reserved
						</div>
					</div>
				</div>
				<div class="col-auto py-4 py-lg-0">
					<?= renderImg("payment-options.png", "icons") ?>
				</div>
				<div class="col-auto">
					<div class="row no-gutters justify-content-center justify-content-lg-end align-items-center">
						<div class="col-auto"><u>Terms &amp; Conditions</u></div>
						<div class="col-auto px-1 px-md-3 text-primary fw-800">|</div>
						<div class="col-auto"><u>Privacy Policies</u></div>
						<div class="col-auto ps-lg-4 pt-4 pt-md-0">
							<a href="https://www.aiims.com.au/like-our-work/" target="_blank">
								<?= renderImg("aiims.png", "logo") ?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<a href="javascript:" id="return-to-top">
	<div class="d-flex justify-content-center align-items-center h-100 w-100">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#ffffff" class="bi bi-arrow-up" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
		</svg>
	</div>
</a>
<script type="text/javascript" src="./assets/js/app.js?v=0.3"></script>
</body>

</html>