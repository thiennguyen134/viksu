<?php
include_once('header1.php');
include_once('header2.php');
echo"<div class=\"w3-bar\" style=\"background-color: #324c62;\">\n";
echo"&nbsp;";

echo"</div>\n";
$_SESSION = array();
session_unset();
session_destroy();
sec_session_start();
	if (isset($_GET['error'])) {
           // echo '<p class="error">Error Logging In!</p>';
			
    }
	echo"<div class=\"w3-container w3-white w3-padding w3-section\" style=\"letter-spacing:4px;border-bottom: 4px solid #000000;\">\n";
		echo"<div class=\"w3-container\" style=\"font-size: 110%;width: 560px;margin: 5em auto;background-color: #fff;\n";
		echo"-moz-border-radius: 10px;\n";
		echo"-webkit-border-radius: 10px;\n";
		echo"border-radius: 10px;\n";
		echo"-moz-box-shadow: 0 0 2em #ccc;\n";
		echo"-webkit-box-shadow: 0 0 2em #ccc;\n";
		echo"box-shadow: 0 0 2em #ccc;\">\n";
		echo"<center>\n";
		echo"<div class=\"w3-panel w3-card w3-white\" style=\"width:380px;padding-top:15px;padding-bottom:30px;\">\n";
				echo"<div class=\"background: #ffc;\"><br><h2>Kirjautuminen</h2></div>\n";
				echo"	<br><br>\n";
				echo"	<form action=\"vili.php\" method=\"post\">\n";
				echo"		<input name=\"page\" value=\"sivu0\" type=\"hidden\">\n";
				echo"		<input name=\"state\" value=\"login\" type=\"hidden\">\n";
				echo"		<label for=\"email\">Käyttäjätunnus(s-posti)</label>\n";
				echo"		<div>\n";
				echo"		<input autocapitalize=\"off\" autocorrect=\"off\" id=\"email\" name=\"email\" value=\"\" style=\"direction:ltr\" type=\"text\">\n";
				echo"		</div>\n";
				echo"		<div><label for=\"password\">Salasana</label></div>\n";
				echo"		<div><input name=\"password\" value=\"\" placeholder=\"Password\" type=\"password\"></div><br>\n";
				echo"		<div style=\"display: block;\"><button type=\"submit\" name=\"login\" value=\"login\" class=\"w3-btn w3-white w3-border w3-border-green w3-round-xlarge\">&nbsp;Kirjaudu&nbsp;</button></div>\n";
				echo"	</form>\n";
				echo"	<br><br>\n";
				echo"		<a href=\"register.php\" class=\"w3-bar-item w3-button\"><p style=\"letter-spacing:2px;\">Rekisteröidy</p></a>\n";
				echo"	<br><br>\n";
				echo"</div>\n";
			echo"</div>\n";
		echo"</div>\n";
	echo"</div>\n";

include_once('footer.php');
?>