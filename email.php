<?php
include 'formapi.php';

$url = 'https://api.sendgrid.com/';

$params = array(
    'api_user'  => "jainadi011",
    'api_key'   => "vishal9212",
    'to'        => $emailid,
    'subject'   => 'Invited to Repository',
    'html'      => $username.' wants to invite you to the Repository '.$repository."\n\n".'http://github.com/'.$username.'/'.$repository,
    'text'      => $username.' wants to invite you to the Repository '.$repository."\n\n".'http://github.com/'.$username.'/'.$repository,
    'from'      => 'no-reply-Jarvis@mycoolie.com'
  );

print_r($params);

$request =  $url.'api/mail.send.json';

// Generate curl request
$session = curl_init($request);

// Tell curl to use HTTP POST
curl_setopt ($session, CURLOPT_POST, true);

// Tell curl that this is the body of the POST
curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

// Tell curl not to return headers, but do return the response
curl_setopt($session, CURLOPT_HEADER, false);
// Tell PHP not to use SSLv3 (instead opting for TLS)
curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
curl_setopt($session, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

// obtain response
$response = curl_exec($session);
curl_close($session);

// print everything out
print_r($response);

header('Location : home.php');
?>

