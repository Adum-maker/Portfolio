@include ('layouts.head');

<!--==================== Menu ====================-->
<menu>
	@include ('layouts.menu');
</menu>

<section class="ftco-section" id="project-section">
	<div class="container-fluid px-md-5">
		<div class="row justify-content-center py-5 mt-5">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Projects</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 text-center d-flex ftco-animate">
				<a class="services-1 shadow">
					<span class="icon">
						<i class="flaticon-camp"></i>
					</span>
					<div class="desc">
						<h3 class="mb-4">YelpCamp</h3>
						<p><strong>NodeJS • Express • MongoDB</strong></p>
						<p  text-dark>A web based application that allows user to view Campgrounds and add their own. <br> Used
							Node JS along with Express to make the application. MongoDB for the database.</p>
					</div>
				</a>
			</div>
			<div class="col-md-4 text-center d-flex mx-auto ftco-animate">
				<a href="https://employe-system.netlify.app/" target="_blank" class="services-1 shadow">
					<span class="icon">
						<i class="fas fa-briefcase"></i>
					</span>
					<div class="desc">
						<h3 class="mb-4">Employee Management System</h3>
						<p><strong>HTML • CSS • JavaScript </strong></p>
						<p>This employee management system serves as a basic but efficient solution for storing and
							displaying employee details and salary information. It offers a straightforward interface
							for managing employee records and provides a convenient way to view and search for specific
							employee information in a table format.<br>All without using a Database</p>
					</div>
				</a>
			</div>
			<div class="col-md-4 text-center d-flex mx-auto ftco-animate">
				<a href="https://guest-management-system.netlify.app" target="_blank" class="services-1 shadow">
					<span class="icon">
						<i class="fas fa-hotel"></i>
					</span>
					<div class="desc">
						<h3 class="mb-4">Guest Management System</h3>
						<p><strong>HTML • CSS • JavaScript</strong></p>
						<p>A system for managing guest information in a hotel.</p>
					</div>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 text-center d-flex mx-auto ftco-animate">
				<a href="https://glowing-loginform.netlify.app/" target="_blank" class="services-1 shadow">
					<span class="icon">
						<i class="fas fa-sign-in-alt"></i>
					</span>
					<div class="desc">
						<h3 class="mb-4">Login Form</h3>
						<p><strong>HTML • CSS</strong></p>
						<p>The login form created using HTML and CSS offers a visually appealing and user-friendly
							interface for users to authenticate themselves securely. It combines form validation, modern
							design elements, and responsive design to provide a seamless login experience for users
							across various devices.</p>
					</div>
				</a>
			</div>
			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="https://adum-weather.netlify.app/" target="_blank" class="services-1 shadow">
					<span class="icon">
						<i class="fas fa-cloud-sun"></i>
					</span>
					<div class="desc">
						<h3 class="mb-4">Weather App</h3>
						<p><strong>HTML • CSS • JavaScript</strong></p>
						<p>The weather app provides real-time weather information with a user-friendly interface. It
							displays current weather conditions, forecasts, and allows location-based searches for
							accurate results.</p>
					</div>
				</a>
			</div>

			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="https://github.com/ahsankhan26/Bomberman-Replica" target="_blank" class="services-1 shadow">
					<span class="icon">
						<i class="flaticon-bomberman"></i>
					</span>
					<div class="desc">
						<h3 class="mb-4">SNES Bomberman Replica Game</h3>
						<p><strong>C# • Unity</strong></p>
						<p>Video game using Unity 2D game development environment and C# Scripts for
							interactivity.<br>The game was intended to be multiplayer competing against each other.
						</p>
					</div>
				</a>
			</div>
		</div>
	</div>
	</div>
</section>

@include('layouts.footer');

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
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