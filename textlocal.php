<?php
$otp = mt_rand(1, 4);
// Account details
$apiKey = urlencode('pKQ3IZn8v2Y-9OINMDxEJa362VfP9XBSZOn7HFRwXJ');

// Message details
$numbers = array($_SESSION['mobileno']);
$sender = urlencode('TXTLCL');
$message = rawurlencode('Your otp is ' . $otp);

$numbers = implode(',', $numbers);

// Prepare data for POST request
$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message, 'test' => true);

// Send the POST request with cURL
$ch = curl_init('https://api.textlocal.in/send/');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Process your response here
$res = json_decode($response);
if (property_exists($res, 'errors')) {
// 	echo "<h4>Error: " . $res->errors[0]->message . "</h4>";
// } else {
	$_SESSION['otp'] = $otp;
	header('Location: otpinput.html');
}
?>