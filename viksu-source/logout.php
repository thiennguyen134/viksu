<?php
include_once('header1.php');
include_once('header2.php');


echo"<div class=\"w3-bar\" style=\"background-color: #324c62;\">\n";
echo"fff";
echo"</div>\n";
echo"<div class=\"w3-container w3-white w3-padding w3-section\" style=\"letter-spacing:4px;border-bottom: 4px solid #000000;\">\n";
	echo"<div class=\"w3-container\" style=\"font-size: 110%;width: 560px;margin: 5em auto;background-color: #fff;\n";
	echo"-moz-border-radius: 10px;\n";
	echo"-webkit-border-radius: 10px;\n";
	echo"border-radius: 10px;\n";
	echo"-moz-box-shadow: 0 0 2em #ccc;\n";
	echo"-webkit-box-shadow: 0 0 2em #ccc;\n";
	echo"box-shadow: 0 0 2em #ccc;\">\n";
	
		$_SESSION = array();
		// get session parameters
		$params = session_get_cookie_params();
		// Delete the actual cookie.
		setcookie(session_name(),
				'', time() - 42000,
				$params["path"],
				$params["domain"],
				$params["secure"],
				$params["httponly"]);
		// Destroy session
		session_destroy();
		header('Location: login.php');
	
	echo"</div>\n";
echo"</div>\n";
include_once('footer.php');
?>