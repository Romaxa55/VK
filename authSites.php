<?php

require_once 'vendor/autoload.php';
$vk = new \Zelenin\VK;

$client_id = '';
$client_secret = '';
$scope = 'notify,friends,photos,audio,video,docs,notes,pages,status,offers,wall,groups,notifications,stats,ads,offline';
$redirect_uri = 'http://.../authSites.php?access_token';

$response = $vk->authSites( $client_id, $client_secret, $scope, $redirect_uri, 'page' );

print_r( $response );