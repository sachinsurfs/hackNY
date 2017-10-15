<?php 
//All my basic functions here
//Author: NQ

	//$fileName = basename($_GET['promv1.zip']);
//check download without extension
	//$filePath = '???/files/' . $fileName;
$filePath = 'promv1.zip';
$fileName = 'promv1';
	
	header("Content-disposition: attachment; filename=" . $fileName);
	header("Content-type: application/zip");
	readfile($filePath);

//twilio throws a few errors
//twilio

require_once "Twilio/autoload.php"; 
use Twilio\Rest\Client;
 
$account_sid = "AC2979bfb637e509d62210b424a34bd230";
$auth_token = "3b2e46ccfe4058773acedfad085c8397";
$twilio_phone_number = "0012034515758";
 
$client = new Client($account_sid, $auth_token);
 
$client->messages->create(
    '0012148014886',
    array(
        "from" => $twilio_phone_number,
        "body" => "Your health data has been processed by Prometheus Company"
    )
);	
	
?>