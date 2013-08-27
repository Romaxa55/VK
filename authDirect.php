<?php

require_once 'vendor/autoload.php';
$vk = new \Zelenin\VK;

$client_id = '';
$client_secret = '';
$username = '';
$password = '';
$scope = 'nohttps,all';
$test_redirect_uri = 0;

$response = $vk->authDirect( $client_id, $client_secret, $username, $password, $scope, $test_redirect_uri );

print_r( $response );