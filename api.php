<?php

require_once 'vendor/autoload.php';

$access_token = 'XXX';

$vk = new \Zelenin\VK( $access_token );

$response = $vk->api( 'video.get', array(
	'owner_id' => 66748
) );

print_r( $response );