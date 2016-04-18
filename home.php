<?php
	$username = $_POST['username'];
	session_start();
	$_SESSION['username']= $username;
	$url = "https://api.github.com/users/".$username."/repos";
	//$json = file_get_contents($url);
	//$data = json_decode($json);
	//echo $data;

	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
	$contents = curl_exec($ch);
	//echo $contents;
	$flag=0;
	$data =  json_decode($contents, true);
	

?>
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
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
					<li><a href="#services">Invite</a></li>
					<li><a href="#team">About</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	
	<section id="services" class="section section-padded">
		<div class="container">
			<?php
				for ($i=0; $i <= 100; $i++) 
					if(isset($data[$i]["name"]))
					{
						echo  '<div class="col-md-4">'.
									'<div class="intro-table intro-table-hover">'.
										'<h5 class="white heading hide-hover">Repository Id :'.$data[$i]["id"].'</h5>'.
										'<div class="bottom">'.
											'<h4 class="white heading small-heading no-margin regular">'.$data[$i]["name"].'</h4>'.
											'<a href="#" onClick="setValue('.$data[$i]["name"].')" data-toggle="modal" data-target="#invitemodal" class="btn btn-white-fill expand">Invite</a>'.
										'</div>'.
									'</div>'.
								'</div>';
						
					}
			?>
		</div>
	</section>

<div class="modal fade" id="invitemodal" role="dialog">
    <div class="modal-dialog">
		<div class="modal-content">

		    <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h3 class="modal-title">Invite</h3>
		    </div>

		    <div class="modal-body">
		        <form method="POST" action="email.php" role="form">

		        <div id="form-group">
		        	<label for="user-name">Username : </label>
					<input type="text" id="user-name" required class="form-control" name="sendto" placeholder="  Username">
					<label for="user-name">Repo : </label>
					<input type="text" id="text" required class="form-control" name="repoSent" placeholder="  Repository">
			<p id="para"></p>	
 				</div>
				<br>
		    </div>
		    <div class="modal-footer">
					<input type="submit" class="btn btn-blue btn-block" name="submit" value="Submit"><br/><br/>
				</form>
		        
		    </div>

		</div>
	</div>
</div>

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
	
	<script>
	function setValue(name)
	{
		console.log(name);
		document.getElementById('para').innerHtml = name;
		console.log(document.getElementById('para').value);
	}
	</script>
	<script src="https://code.jquery.com/jquery-2.2.3.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
