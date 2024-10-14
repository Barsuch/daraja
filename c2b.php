<?php
$ch = curl_init('https://sandbox.safaricom.co.ke/mpesa/c2b/v1/registerurl');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer beZ2jpt3OmAuDWRFxTMzm08msaAt',
    'Content-Type: application/json'
]);
curl_setopt($ch, CURLOPT_POST, 1);
$postfileds = array(
  "ShortCode"=>600992,
  "CommandID"=>"CustomerBuyGoodsOnline",
  "amount"=>100,
  "MSISDN"=>254708081346,
  "BillRefNumber"=>""
);
curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($postfileds));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response     = curl_exec($ch);
curl_close($ch);
echo $response;