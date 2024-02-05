@include ('layouts.head');

<menu>
	@include ('layouts.menu');
</menu>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
	<div class="container">
		<div class="row justify-content-center mb-4 pb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<h2 class="mb-4">Contact Me</h2>
			</div>
		</div>

		<div class="row d-flex justify-content-center contact-info mb-5">
			<div class="col-md-6 col-lg-3 d-flex ftco-animate">
				<div class="align-self-stretch box text-center p-4 shadow">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-phone2"></span>
					</div>
					<div>
						<h3 class="mb-4">Contact Number</h3>
						<p><a>+254740648091</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 d-flex ftco-animate">
				<div class="align-self-stretch box text-center p-4 shadow">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-paper-plane"></span>
					</div>
					<div>
						<h3 class="mb-4">Email Address</h3>
						<p><a href="">adummaker02@gmail.com</a></p>
					</div>
				</div>
			</div>
		</div>

		<div class="row no-gutters block-9">
			<div class="col-md-6 order-md-last d-flex">
				<form method="GET" action="" class="bg-light p-4 p-md-5 contact-form">
					<div class="form-group">
						<input type="text" class="form-control" name="name" id="contactName" placeholder="Your Name" required>
						{!! ($errors->has('name') ? $errors->first('name', '<p class="text-danger">:message</p>') : '') !!}
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Your Email" required>
						{!! ($errors->has('email') ? $errors->first('email', '<p class="text-danger">:message</p>') : '') !!}
					</div>
					<div class="form-group">
						<textarea id="" cols="30" rows="7" class="form-control" name="message" id="message" placeholder="Message" required></textarea>
						{!! ($errors->has('message') ? $errors->first('message', '<p class="text-danger">:message</p>') : '') !!}
					</div>

					<div class="form-group">
						<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
						<input type="hidden" name="_next" value="//adum.me" />
					</div>
				</form>

			</div>

			<div class="col-md-6 d-flex">
				<div class="img" style="background-image: url(images/contact.jpg);"></div>
			</div>
		</div>
	</div>
</section>
@include ('layouts.footer');


	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="js/particles.min.js"></script>
	<script src="js/app.js"></script>
	<script src="js/main.js"></script>

