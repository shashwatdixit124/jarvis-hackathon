<?php
	$username = $_POST['username'];
	$url = 'https://api.github.com/users/'.$username.'/events/public';
	echo $url;

	
	
?>