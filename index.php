<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jarvis : Invite Developers to Your Repository</title>
	<meta name="description" content="Jarvis provides functionality to invite people to look at your repository" />
	<meta name="keywords" content="free , github , invite , share , developers , repository" />
	<meta name="author" content="Jarvis-Hackathon" />
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/jarvis.css">
</head>

<body>
	<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#intro">Home</a></li>
					<li><a href="#services">Invite</a></li>
					<li><a href="#team">About</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Sign In</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="light white">Invite Others to look at your Work.</h3>
							<h1 class="white typed">Mail your repository's link to Developers.</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Invite</h2>
				<h4 class="light muted">Enter Username to Invite to your Repository</h4>
			</div>
			<div class="forms">
				<form method="POST" action="formapi.php">
					<input type="text" name="username" placeholder="Github Username">
					<input type="submit" value="Invite">
				</form>
			</div>
		</div>
		<div class="cut cut-bottom">
			
		</div>
	</section>
	<section id="team" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">About Us</h2>
				<h4 class="light muted">We're a dream team!</h4>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="team text-center">
						
						<img src="" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Shashwat Dixit</h4>
							<h5 class="muted regular">15UCS124</h5>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="team text-center">
						
						<img src="" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Nishant Garg</h4>
							<h5 class="muted regular">14UCS077</h5>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<footer>
		
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
