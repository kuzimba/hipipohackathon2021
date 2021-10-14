<?php


$data = array(
			"homeTransactionId" => "c3b2e35c-f3ba-40e2-a13a-7e63b191cb5e",
			"from" => array ("idType" =>  "MSISDN","idValue" => "589408120") ,
			"to" => array ("idType" =>  "MSISDN","idValue" => "329294234") ,
			"amountType" => "RECEIVE",
			"currency"=>"UGX",
			"amount"=>"3000",
			"note"=>"Note sent to Payee.",
			);

$postdata = json_encode($data);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, 'jcash-sdk-scheme-adapter-outbound.sandbox.mojaloop.io/transfers');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Accept: application/json',
    'Content-Type: application/json'
));
curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
// Receive server response ...
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);
//print_r ($result);



// Further processing ...
if ($server_output == "OK") { 
		echo "SUCCESS";
	} else { 
		echo "FAILD"; 
	}



?>