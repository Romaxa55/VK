<?php

require_once 'vendor/autoload.php';
$vk = new \Zelenin\VK;

$client_id = '';
$scope = 'notify,friends,photos,audio,video,docs,notes,pages,status,offers,wall,groups,notifications,stats,ads,offline,nohttps';
$redirect_uri = 'http://home.zelenin.me/VK/authMobile.php?access_token';

$response = $vk->authMobile( $client_id, $scope, $redirect_uri, 'page' );

?>
<script>
	var hash = window.location.hash.slice( 1 );
	var parts = hash.split( '&' );
	var values, hash_array = {};

	for ( i = 0; i < parts.length; i++ ) {
		values = parts[i].split( '=' );
		hash_array[values[0]] = values[1];
	}

	var access_token = hash_array.access_token;

	document.write( '<p>access token: ' + hash_array.access_token + '</p>' );
	document.write( '<p>expires_in: ' + hash_array.expires_in + '</p>' );
	document.write( '<p>user_id: ' + hash_array.user_id + '</p>' );
	document.write( '<p>secret: ' + hash_array.secret + '</p>' );

</script>