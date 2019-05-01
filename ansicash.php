<?php
/*please note that before  using this API register on  >>>>>>ansifact.co.zw/

WE need the following information from you
1)Merchant number
2)Merhant code
3)your company name and address


_____________________________________________________________

Once you register you will be given an access key called the merchant key that will act as a permission  for you to use our services



For more information contact 0782631555/0786391149
_________________________________________________________________________________________

*/


?>



<?php


class ecocash
{


public function initialize_transaction($amount,$subscriber)
{
	
$request_url = "https://api.ansifact.co.zw/ecocash_check";
$post_url = "https://api.ansifact.co.zw/ecocash_api";
$merchant_key ="0854190324-024ANSI1103914739131779";
$return_url ="http://localhost/ansifact/partners/";




$data = 'phone=' . $subscriber . '&amount=' . $amount. '&return_url=' . $return_url. '&merchant_key=' . $merchant_key;
$ch = curl_init($post_url);
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$result= curl_exec( $ch );
$info = curl_getinfo($ch);
curl_close($ch);
$response = json_decode($result,true);

return $response;
}



public function Check_transaction_status($hashcode,$subscriber)
{
$request_url = "https://api.ansifact.co.zw/ecocash_check";
$post_url = "https://api.ansifact.co.zw/ecocash_api";
$merchant_key="0854190324-024ANSI1103914739131779";
$return_url ="http://localhost/ansifact/partners/";



$data = 'phone=' . $subscriber . '&hash_code=' . $hashcode. '&return_url=' . $return_url. '&merchant_key=' . $merchant_key;
$ch = curl_init($request_url);
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$result= curl_exec( $ch );
$info = curl_getinfo($ch);
curl_close($ch);


$response = ($result);

return $response;
/*
POSSIBLE TRANSACTION STATUS
___________________________


1)COMPLETED ---------->The user confirmed the payment
_______________________________________________________
2)ERROR----------------->There is an error that causes the transaction not to succeed
_________________________________________________________________________________________
3)TRANSACTION TIMED OUT------------------>Ecocash offers 90minutes before transaction gets teminated if the subscriber fail to respond in time
__________________________________________________________________________________________________________
4)PENDING SUBSCRIBER VALIDATION--------------Waiting for the subscriber to confirm
_______________________________________________________________________________________

*/


}

}



?>

