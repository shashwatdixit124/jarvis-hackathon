<?php

	$sendto = $_POST['sendto'];
	$url = "https://api.github.com/users/".$sendto."/events/public";
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
	for ($i=0; $flag == 0 ; $i++) 
		if(isset($data[$i]["payload"]["commits"]))
		{
			$emailid =  $data[$i]["payload"]["commits"][0]["author"]["email"];
			$flag=1;
			break;
		}
		else
			$flag = 0;

?>