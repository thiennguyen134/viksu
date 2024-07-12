<?php
echo"<div class=\"w3-bar w3-white w3-padding w3-card-2\" style=\"letter-spacing:4px;\">\n";
	echo"<div class=\"w3-right w3-hide-small\">\n";
		if($language=='fi'){
			echo"<a href=\"?language=en\" class=\"w3-bar-item w3-button\">in English</a>\n";
			echo"<a href=\"logout.php?language=".$language."\" class=\"w3-bar-item w3-button\">Kirjaudu ulos</a>\n";
			echo"<a href=\"?page=ohje\" class=\"w3-bar-item w3-button\">Ohje</a>\n";
		}else{
			echo"<a href=\"?language=fi\" class=\"w3-bar-item w3-button\">suomeksi</a>\n";
			echo"<a href=\"logout.php?language=".$language."\" class=\"w3-bar-item w3-button\">Logout/a>\n";
			echo"<a href=\"?page=ohje\" class=\"w3-bar-item w3-button\">Help</a>\n";
		}
	echo"</div>\n";
echo"</div>\n";


?>