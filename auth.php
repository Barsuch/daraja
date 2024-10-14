<?php
//Authorization Request in PHP
$ch = curl_init('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
curl_setopt($ch, CURLOPT_HTTPHEADER,
['Authorization: Basic VzVwREFMdlZvQ0s0R0d0ZndFUFFSZm1XbWFiUG5wcThZaDVybnd1dUdyckdtQWFmOmN2dkFMWEhzbUJheXpYRkxHem1YR2tMaEEyZ0JmR2d3emhzeGNTeXJubE9JbFdCYVk5Q0htNkpYMGt1eEo3Ym8=']);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
echo json_decode($response);
?>