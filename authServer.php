<?php

require_once 'vendor/autoload.php';
$vk = new \Zelenin\VK;

$client_id = '';
$client_secret = '';

$response = $vk->authServer( $client_id, $client_secret );

print_r( $response );