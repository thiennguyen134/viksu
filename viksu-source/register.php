<?php
include_once('header1.php');
include_once('header2.php');
include_once('funcs.php');

$ename='';
$sname='';
$email='';
$yritys='';
$CompSize='';
$CompArea='';
$password='';
$dbname='';
$retyped_password ='';
if (isset($_POST['rekisteri'])) {
	if(isset($_POST['enimi'])) $ename         = sanitizeString($_POST['enimi']);
	if(isset($_POST['snimi'])) $sname         = sanitizeString($_POST['snimi']);
	if(isset($_POST['email'])){
		$email            = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		if(!(isEmail($email))) $email='';
	}
	if(isset($_POST['yritys'])) $yritys           = sanitizeString($_POST['yritys']);
	if(isset($_POST['CompSize'])) $CompSize         = sanitizeString($_POST['CompSize']);
	if(isset($_POST['CompArea'])) $CompArea         = sanitizeString($_POST['CompArea']);
    if(isset($_POST['password'])) $password         = create_password_hash(sanitizeString($_POST['password']));
    if(isset($_POST['password2'])) $retyped_password = sanitizeString($_POST['password2']);
	if(strlen(trim($yritys))>0) $dbname='db_'.trim($yritys);
	else  $dbname='db_'.random_string(8);
}
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
	echo"<center>\n";
		echo"<div class=\"w3-panel w3-card w3-white\" style=\"width:380px;padding-top:15px;padding-bottom:30px;\">\n";
			echo"<h2>Rekisteröinti</h2>\n";
			echo"<form action=\"/vilinew/register.php\" method=\"post\" id=\"registerfrm\" name=\"registerfrm\">\n";
				echo"<input name=\"page\" value=\"sivu2\" type=\"hidden\">\n";
				echo"<input name=\"state\" value=\"register\" type=\"hidden\">\n";
				echo"<table class=\"w3-table\" style=\"width:350px;\">\n";
					echo"<tbody>\n";
						echo"<tr><td style=\"width:105px;padding-right:1px;text-align:right;\">Etunimi</td><td><input name=\"enimi\" value=\"".$ename."\" placeholder=\"etunimi\" type=\"text\"></td></tr>\n";
						echo"<tr><td style=\"width:105px;padding-right:1px;text-align:right;\">Sukunimi</td><td><input name=\"snimi\" value=\"".$sname."\" placeholder=\"sukunimi\" type=\"text\">\n";
						echo"</td></tr>\n";
						echo"<tr><td style=\"width:105px;padding-right:1px;text-align:right;\">Sähköposti</td><td><input name=\"email\" value=\"".$email."\" placeholder=\"email\" type=\"text\"  required>\n";
						echo"</td></tr>\n";
						echo"<tr><td style=\"width:105px;padding-right:1px;text-align:right;\">Yritys</td><td><input name=\"yritys\" value=\"".$yritys."\" type=\"text\"></td></tr>\n";
						
						echo"<tr><td style=\"width:105px;padding-right:1px;text-align:right;\">Yrityksen koko</td><td>\n";
							echo"<select class=\"w3-select w3-border\" name=\"CompSize\" id=\"CompSize\">\n";
								echo"<option value=\"\" disabled selected>Valitse...</option>n";
								echo"<option value=\"1\">Option 1</option>\n";
								echo"<option value=\"2\">Option 2</option>\n";
								echo"<option value=\"3\">Option 3</option>\n";
							echo"</select>\n";
						echo"</td></tr>\n";
						echo"<tr><td style=\"width:105px;padding-right:1px;text-align:right;\">Maakunta</td><td>\n";
							echo"<select class=\"w3-select w3-border\" name=\"CompArea\" id=\"CompArea\">\n";
								echo"<option value=\"\" disabled selected>Valitse...</option>n";
								echo"<option value=\"1\">Option 1</option>\n";
								echo"<option value=\"2\">Option 2</option>\n";
								echo"<option value=\"3\">Option 3</option>\n";
							echo"</select>\n";
						echo"</td></tr>\n";
						echo"<tr><td style=\"width:105px;padding-right:1px;text-align:right;\">salasana</td><td><input name=\"password\" value=\"\" placeholder=\"Password\" type=\"password\" required>\n";
						echo"</td></tr>\n";
						echo"<tr><td style=\"width:105px;padding-right:1px;text-align:right;\">salasana uudelleen</td><td><input name=\"password2\" value=\"\" placeholder=\"Password\" type=\"password\" required>\n";
						echo"</td></tr>\n";
						echo"<tr><td colspan=\"2\"><center><button type=\"submit\" name=\"rekisteri\" value=\"register\" class=\"w3-btn w3-white w3-border w3-border-green w3-round-xlarge\">&nbsp;Rekisteröidy&nbsp;</button></center></td></tr>\n";
					echo"</tbody>\n";
				echo"</table>\n";
			echo"</form>\n";
			echo"<script>\n";
			echo"$(\"#registerfrm\").validate();\n";
			echo"</script>\n";
			echo"<br>\n";
			if (isset($_POST['rekisteri'])) {
				if ($email == '' || $password == '' || $retyped_password == '') {
                    echo '<h2>Fields Left Blank</h2>', '<p>Some Fields were left blank. Please fill up all fields.</p>';
                }else{
					if(verify_password_hash($password,$retyped_password)){
						echo "<h2>Passwords Don't Match</h2>", "<p>The Passwords you entered didn't match</p>";
					}else{
						$sql='select * from users where email='.$email;
						$result=$mysqli->query($sql);
						if($result->num_rows >0) {
							echo '<h2>Email already exists</h2>\n';
						}else{
							
							if($CompSize==''){
								$sql="insert into users(email,fname,lname,company,CompArea,dbname,password,salt)VALUES('$email','$ename','$sname','$yritys','$CompArea','$dbname','$password','')";
							}else{
								$sql="insert into users(email,fname,lname,company,CompArea,comp_size,dbname,password,salt)VALUES('$email','$ename','$sname','$yritys','$CompArea',$CompSize,'$dbname','$password','')";
							}							
							$result = $mysqli->query($sql);
							
							if(!$result){								
								die('Could not enter data: ' . $mysqli->error);
							}else{
								create_usertbl($mysqli,$dbname);
								echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
								echo"<br><a href='login.php'>Kirjaudu</b>\n";
							
							}							
						}
					}
				}
			}
		echo"</div>\n";
	echo"</center>\n";	
echo"</div>\n";
include_once('footer.php');
?>