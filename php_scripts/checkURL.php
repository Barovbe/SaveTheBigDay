<?php session_start(); ?>
<?php include "securetext.php" ?>
<?php
	$url = secure($_POST["URL"]);
	$url_headers = @get_headers($url);
	$exists = true;
	if(!$url_headers || $url_headers[0] == 'HTTP/1.1 404 Not Found') {
	    $exists = false;
	}

	$exists

?>