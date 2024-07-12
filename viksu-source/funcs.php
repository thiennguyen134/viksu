<?php
function sec_session_start() {
    $session_name = 'sec_session_id';   // Set a custom session name
    $secure = true;    
    $httponly = true;
    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        exit();
    }
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"],
        $cookieParams["path"],
        $cookieParams["domain"],
        $secure,
        $httponly);
    // Sets the session name to the one set above.
    session_name($session_name);
    session_start();            // Start the PHP session
    session_regenerate_id();    // regenerated the session, delete the old one.
}

function prs($ss){
	
	if($ss=='post'){
		echo"<br>POST<br><pre>\n";
		print_r($_POST);
	}
	if($ss=='get'){
		echo"<br>GET<br><pre>\n";
		print_r($_GET);
	}
	if($ss=='sess'){
		echo"<br>SES<br><pre>\n";
		print_r($_SESSION);
	}
	if($ss=='req'){
		echo"<br>SES<br><pre>\n";
		print_r($_SESSION);
	}
	echo"</pre><br>\n";
}
function isEmail($email) {
    return preg_match('|^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]{2,})+$|i', $email);
};
function cleanme(&$array){
	foreach ($array as $key => $value)
    {
        if (is_array($array[$key])){			
				cleanme($array[$key]);
		} else {
			echo $array[$key]=sanitizeString($value);
		}
	}
	
}
function sanitizeString($var)
{
	$var = trim($var);
    $var = stripslashes($var);
    $var = strip_tags($var);
    //$var = htmlentities($var);  vai
	$var = htmlspecialchars($var);
    return $var;
}

function sanitizeMySQL($connection, $var)
{
    $var = $connection->real_escape_string($var);
    $var = sanitizeString($var);
    return $var;
}

function Clear_input($data) {
	  if (is_array($data)){
	  
		foreach ($data as $key => $value) {
			$data[$key]=trim($value);
			$data[$key]=stripslashes($data[$key]);
			$data[$key] = htmlspecialchars($data[$key]);			
		}
		
	  }else{
		$data = trim($data);		
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
	  }
	  return $data;
	}
function getCurrentLanguage()
{
	if(isset($_REQUEST['language']))
	{	
		return $_SESSION['language'] = $_REQUEST['language'];
	}
	if(isset($_SESSION['language']))
	{
		return $_SESSION['language'];
	}
	return 'fi'; //oletus kieli
}

function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }
    return $key;
}
function create_password_hash($strPassword, $numAlgo = 1, $arrOptions = array())
{
    if (function_exists('password_hash')) {
        // php >= 5.5
        $hash = password_hash($strPassword, $numAlgo, $arrOptions);
    } else {
        $salt = mcrypt_create_iv(22, MCRYPT_DEV_URANDOM);
        $salt = base64_encode($salt);
        $salt = str_replace('+', '.', $salt);
        $hash = crypt($strPassword, '$2y$10$' . $salt . '$');
    }
    return $hash;
}

function verify_password_hash($strPassword, $strHash)
{
    if (function_exists('password_verify')) {
        // php >= 5.5
        $boolReturn = password_verify($strPassword, $strHash);
    } else {
        $strHash2 = crypt($strPassword, $strHash);
        $boolReturn = $strHash == $strHash2;
    }
    return $boolReturn;
}


function create_usertbl($vilidb,$usertbl){
	$query = "SELECT 1 FROM ".$usertbl;
	$result = mysqli_query($vilidb, $query);	
	if(empty($result)){
		$sqluser="CREATE TABLE `".$usertbl."1` (\n";
			$sqluser.="	`id` INT(11) NOT NULL AUTO_INCREMENT,\n";
			$sqluser.="`CreationDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,\n";
			$sqluser.="`EditDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,\n";
			$sqluser.="`ViliUserId` INT(11) UNSIGNED NULL DEFAULT NULL,\n";
			$sqluser.="`hallinto1_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`hallinto2_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`hallinto3_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`hallinto4_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`hallinto5_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`hallinto6_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`hallinto7_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`talous1_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`talous2_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`talous3_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`talous4_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`talous5_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`talous6_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`olosuhde1_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`olosuhde2_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`olosuhde3_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`olosuhde4_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`ymparisto1_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`ymparisto2_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`ymparisto3_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`ymparisto4_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`ymparisto5_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`ymparisto6_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`ymparisto7_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`ymparisto8_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tapahtuma1_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tapahtuma2_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tapahtuma3_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tapahtuma4_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tapahtuma5_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`varusteet1_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`varusteet2_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`varusteet3_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`varusteet4_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`varusteet5_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tyo_ylin_1_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tyo_ylin_2_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tyo_ylin_3_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tyo_ylin_4_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tyo_esim_1_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tyo_esim_2_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tyo_esim_3_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tyo_esim_4_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tyo_esim_5_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tyo_esim_6_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tyo_esim_7_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tyo_tekija_1_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tyo_tekija_2_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tyo_tekija_3_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tyo_tekija_4_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tyo_tekija_5_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`tyo_tekija_6_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`ykstalous_1_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`ykstalous_2_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`ykstalous_3_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`yksterveys_1_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`yksterveys_2_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`yksterveys_3_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`yksvarusteet_1_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`yksvarusteet_2_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`yksvarusteet_3_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`yksosaaminen_1_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`yksosaaminen_2_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`yksosaaminen_3_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`yksosaaminen_4_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`yksosaaminen_5_chk` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`OrganOtherInputs0` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`OrganOtherInputs1` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`OrganOtherInputs2` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`OrganOtherInputs3` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`OrganOtherInputs4` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`OrganOtherInputs5` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`CommOtherInputs0` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`CommOtherInputs1` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`CommOtherInputs2` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`CommOtherInputs3` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`CommOtherInputs4` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`CommOtherInputs5` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`IndivOtherInputs0` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`IndivOtherInputs1` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`IndivOtherInputs2` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`IndivOtherInputs3` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`IndivOtherInputs4` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="`IndivOtherInputs5` CHAR(5) NULL DEFAULT NULL,\n";
			$sqluser.="PRIMARY KEY (`id`)\n";
			$sqluser.=")\n";
			$sqluser2='';
			$sqluser2="CREATE TABLE `".$usertbl."2` (\n";
			$sqluser2.="	`id` INT(11) NOT NULL AUTO_INCREMENT,\n";
			$sqluser2.="`CreationDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,\n";
			$sqluser2.="`EditDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,\n";
			$sqluser2.="`ViliUserId` INT(11) UNSIGNED NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto1_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto1_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto1_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto1_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto1_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto1_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto1_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto1_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto1_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto2_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto2_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto2_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto2_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto2_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto2_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto2_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto2_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto2_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto3_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto3_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto3_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto3_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto3_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto3_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto3_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto3_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto3_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto4_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto4_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto4_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto4_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto4_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto4_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto4_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto4_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto4_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto5_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto5_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto5_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto5_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto5_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto5_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto5_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto5_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto5_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto6_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto6_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto6_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto6_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto6_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto6_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto6_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto6_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto6_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto7_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto7_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto7_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto7_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto7_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto7_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto7_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto7_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`hallinto7_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous1_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`talous1_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`talous1_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous1_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous1_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous1_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous1_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous1_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous1_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous2_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`talous2_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`talous2_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous2_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous2_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous2_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous2_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous2_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous2_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous3_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`talous3_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`talous3_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous3_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous3_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous3_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous3_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous3_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous3_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous4_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`talous4_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`talous4_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous4_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous4_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous4_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous4_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous4_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous4_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous5_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`talous5_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser2.="`talous5_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous5_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous5_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous5_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous5_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous5_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="`talous5_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser2.="PRIMARY KEY (`id`)\n";
			$sqluser2.=")\n";
			$sqluser3='';
			$sqluser3="CREATE TABLE `".$usertbl."3` (\n";
			$sqluser3.="	`id` INT(11) NOT NULL AUTO_INCREMENT,\n";
			$sqluser3.="`CreationDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,\n";
			$sqluser3.="`EditDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,\n";
			$sqluser3.="`ViliUserId` INT(11) UNSIGNED NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde1_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde1_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde1_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde1_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde1_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde1_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde1_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde1_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde1_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde2_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde2_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde2_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde2_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde2_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde2_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde2_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde2_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde2_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde3_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde3_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde3_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde3_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde3_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde3_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde3_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde3_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`olosuhde3_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto1_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto1_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto1_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto1_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto1_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto1_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto1_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto1_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto1_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto2_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto2_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto2_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto2_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto2_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto2_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto2_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto2_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto2_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto3_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto3_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto3_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto3_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto3_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto3_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto3_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto3_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto3_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto4_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto4_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto4_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto4_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto4_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto4_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto4_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto4_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto4_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto5_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto5_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto5_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto5_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto5_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto5_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto5_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto5_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto5_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto6_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto6_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto6_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto6_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto6_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto6_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto6_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto6_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto6_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto7_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto7_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto7_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto7_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto7_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto7_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto7_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto7_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto7_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto8_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto8_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto8_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto8_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto8_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto8_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto8_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto8_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`ymparisto8_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma1_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma1_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma1_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma1_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma1_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma1_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma1_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma1_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma1_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma2_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma2_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma2_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma2_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma2_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma2_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma2_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma2_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma2_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma3_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma3_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma3_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma3_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma3_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma3_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma3_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma3_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma3_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma4_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma4_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma4_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma4_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma4_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma4_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma4_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma4_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma4_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma5_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma5_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma5_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma5_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma5_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma5_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma5_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma5_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`tapahtuma5_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet1_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet1_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet1_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet1_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet1_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet1_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet1_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet1_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet1_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet2_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet2_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet2_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet2_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet2_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet2_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet2_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet2_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet2_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet3_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet3_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet3_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet3_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet3_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet3_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet3_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet3_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet3_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet4_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet4_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet4_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet4_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet4_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet4_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet4_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet4_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet4_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet5_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet5_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet5_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet5_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet5_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet5_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet5_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet5_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="`varusteet5_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser3.="PRIMARY KEY (`id`)\n";
			$sqluser3.=")\n";
			$sqluser4='';
			$sqluser4="CREATE TABLE `".$usertbl."4` (\n";
			$sqluser4.="	`id` INT(11) NOT NULL AUTO_INCREMENT,\n";
			$sqluser4.="`CreationDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,\n";
			$sqluser4.="`EditDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,\n";
			$sqluser4.="`ViliUserId` INT(11) UNSIGNED NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_1_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_1_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_1_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_1_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_1_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_1_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_1_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_1_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_1_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_2_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_2_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_2_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_2_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_2_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_2_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_2_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_2_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_2_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_3_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_3_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_3_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_3_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_3_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_3_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_3_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_3_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_3_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_4_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_4_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_4_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_4_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_4_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_4_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_4_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_4_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_ylin_4_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_1_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_1_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_1_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_1_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_1_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_1_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_1_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_1_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_1_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_2_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_2_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_2_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_2_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_2_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_2_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_2_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_2_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_2_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_3_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_3_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_3_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_3_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_3_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_3_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_3_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_3_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_3_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_4_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_4_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_4_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_4_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_4_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_4_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_4_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_4_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_4_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_5_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_5_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_5_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_5_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_5_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_5_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_5_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_5_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_5_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_6_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_6_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_6_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_6_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_6_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_6_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_6_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_6_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_6_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_7_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_7_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_7_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_7_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_7_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_7_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_7_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_7_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_esim_7_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_1_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_1_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_1_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_1_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_1_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_1_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_1_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_1_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_1_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_2_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_2_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_2_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_2_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_2_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_2_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_2_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_2_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_2_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_3_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_3_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_3_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_3_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_3_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_3_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_3_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_3_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_3_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_4_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_4_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_4_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_4_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_4_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_4_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_4_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_4_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_4_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_5_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_5_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_5_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_5_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_5_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_5_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_5_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_5_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_5_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_6_date_a` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_6_date_l` DATE NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_6_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_6_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_6_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="`tyo_tekija_6_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser4.="`tyo_tekija_6_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser4.="`tyo_tekija_6_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser4.="`tyo_tekija_6_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser4.="PRIMARY KEY (`id`)\n";
			$sqluser4.=")\n";
			$sqluser5='';
			$sqluser5="CREATE TABLE `".$usertbl."5` (\n";
			$sqluser5.="	`id` INT(11) NOT NULL AUTO_INCREMENT,\n";
			$sqluser5.="`CreationDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,\n";
			$sqluser5.="`EditDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,\n";
			$sqluser5.="`ViliUserId` INT(11) UNSIGNED NULL DEFAULT NULL,\n";						
									$sqluser5.="`ykstalous_1_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_1_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_1_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_1_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_1_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_1_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_1_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_1_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_1_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_2_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_2_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_2_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_2_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_2_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_2_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_2_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_2_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_2_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_3_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_3_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_3_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_3_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_3_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_3_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_3_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_3_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`ykstalous_3_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_1_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_1_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_1_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_1_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_1_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_1_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_1_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_1_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_1_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_2_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_2_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_2_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_2_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_2_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_2_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_2_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_2_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_2_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_3_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_3_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_3_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_3_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_3_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_3_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_3_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_3_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksterveys_3_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_1_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_1_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_1_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_1_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_1_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_1_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_1_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_1_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_1_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_2_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_2_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_2_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_2_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_2_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_2_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_2_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_2_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_2_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_3_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_3_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_3_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_3_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_3_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_3_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_3_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_3_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksvarusteet_3_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_1_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_1_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_1_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_1_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_1_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_1_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_1_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_1_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_1_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_2_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_2_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_2_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_2_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_2_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_2_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_2_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_2_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_2_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_3_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_3_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_3_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_3_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_3_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_3_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_3_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_3_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_3_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_4_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_4_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_4_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_4_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_4_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_4_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_4_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_4_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_4_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_5_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_5_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_5_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_5_toteuttajat` VARCHAR(80) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_5_kustannusarvio` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_5_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_5_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_5_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser5.="`yksosaaminen_5_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser5.="PRIMARY KEY (`id`)\n";
			$sqluser5.=")\n";
			$sqluser6='';
			$sqluser6="CREATE TABLE `".$usertbl."6` (\n";
			$sqluser6.="	`id` INT(11) NOT NULL AUTO_INCREMENT,\n";
			$sqluser6.="`CreationDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,\n";
			$sqluser6.="`EditDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,\n";
			$sqluser6.="`ViliUserId` INT(11) UNSIGNED NULL DEFAULT NULL,\n";	
									$sqluser6.="`OrganOtherInputs0_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs0_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs1_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs1_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs0_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs0_toteuttajat` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs0_kustannusarvio` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs0_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs0_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs0_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs0_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs1_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs1_toteuttajat` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs1_kustannusarvio` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs1_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs1_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs1_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs1_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs2_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs2_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs2_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs2_toteuttajat` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs2_kustannusarvio` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs2_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs2_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs2_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs2_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs3_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs3_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs3_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs3_toteuttajat` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs3_kustannusarvio` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs3_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs3_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs3_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs3_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs4_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs4_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs4_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs4_toteuttajat` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs4_kustannusarvio` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs4_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs4_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs4_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs4_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs5_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs5_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs5_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs5_toteuttajat` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs5_kustannusarvio` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs5_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs5_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs5_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`OrganOtherInputs5_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs0_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs0_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs0_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs0_toteuttajat` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs0_kustannusarvio` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs0_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs0_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs0_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs0_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs1_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs1_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs1_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs1_toteuttajat` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs1_kustannusarvio` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs1_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs1_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs1_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs1_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs2_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs2_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs2_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs2_toteuttajat` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs2_kustannusarvio` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs2_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs2_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs2_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs2_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs3_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs3_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs3_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs3_toteuttajat` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs3_kustannusarvio` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs3_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs3_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs3_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs3_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs4_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs4_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs4_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs4_toteuttajat` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs4_kustannusarvio` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs4_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs4_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs4_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs4_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs5_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs5_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs5_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs5_toteuttajat` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs5_kustannusarvio` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs5_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs5_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs5_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`CommOtherInputs5_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs0_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs0_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs0_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs0_toteuttajat` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs0_kustannusarvio` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs0_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs0_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs0_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs0_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs1_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs1_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs1_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs1_toteuttajat` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs1_kustannusarvio` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs1_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs1_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs1_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs1_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs2_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs2_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs2_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs2_toteuttajat` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs2_kustannusarvio` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs2_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs2_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs2_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs2_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs3_date_a` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs3_date_l` DATE NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs3_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs3_toteuttajat` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs3_kustannusarvio` VARCHAR(250) NULL DEFAULT NULL,\n";
									$sqluser6.="`IndivOtherInputs3_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
				$sqluser6.="`IndivOtherInputs3_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
				$sqluser6.="`IndivOtherInputs3_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
				$sqluser6.="`IndivOtherInputs3_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
				$sqluser6.="`IndivOtherInputs4_date_a` DATE NULL DEFAULT NULL,\n";
				$sqluser6.="`IndivOtherInputs4_date_l` DATE NULL DEFAULT NULL,\n";
				$sqluser6.="`IndivOtherInputs4_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
				$sqluser6.="`IndivOtherInputs4_toteuttajat` VARCHAR(250) NULL DEFAULT NULL,\n";
				$sqluser6.="`IndivOtherInputs4_kustannusarvio` VARCHAR(250) NULL DEFAULT NULL,\n";
				$sqluser6.="`IndivOtherInputs4_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
				$sqluser6.="`IndivOtherInputs4_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
				$sqluser6.="`IndivOtherInputs4_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
				$sqluser6.="`IndivOtherInputs4_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
				$sqluser6.="`IndivOtherInputs5_date_a` DATE NULL DEFAULT NULL,\n";
				$sqluser6.="`IndivOtherInputs5_date_l` DATE NULL DEFAULT NULL,\n";
				$sqluser6.="`IndivOtherInputs5_jarjestelyt` VARCHAR(250) NULL DEFAULT NULL,\n";
				$sqluser6.="`IndivOtherInputs5_toteuttajat` VARCHAR(250) NULL DEFAULT NULL,\n";
				$sqluser6.="`IndivOtherInputs5_kustannusarvio` VARCHAR(250) NULL DEFAULT NULL,\n";
					$sqluser6.="`IndivOtherInputs5_tot` VARCHAR(50) NULL DEFAULT NULL,\n";
				$sqluser6.="`IndivOtherInputs5_tot_osa_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
				$sqluser6.="`IndivOtherInputs5_tot_ei_txt` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser6.="`IndivOtherInputs5_kustannukset` VARCHAR(50) NULL DEFAULT NULL,\n";
			$sqluser6.="PRIMARY KEY (`id`)\n";
		$sqluser6.=")\n";
		
				
		if ($vilidb->query($sqluser)===true){
			if ($vilidb->query($sqluser2)===true){
				if ($vilidb->query($sqluser3)===true){
					if ($vilidb->query($sqluser4)===true){
						if ($vilidb->query($sqluser5)===true){
							if ($vilidb->query($sqluser6)===true){
								echo"<br>usertaulu onnistui!<br><br>\n";
							}else{
								echo"<br>usertaulu EI6<br>".$sqluser."<br>\n";
							}
						}else{
							echo"<br>usertaulu EI5<br>".$sqluser."<br>\n";
						}
					}else{
						echo"<br>usertaulu EI4<br>".$sqluser."<br>\n";
					}
				}else{
					echo"<br>usertaulu EI3<br>".$sqluser."<br>\n";
				}
			}else{
				echo"<br>usertaulu EI2<br>".$sqluser."<br>\n";
			}
		}else{
			echo"<br>usertaulu EI1<br>".$sqluser."<br>\n";
		}
								
		$sqluserqry='';
		$sqluserqry="CREATE TABLE `".$usertbl."qry` (`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,`date` DATE,";
		$sqluserqry.="`kysely` SET('alku','loppu') NOT NULL DEFAULT 'alku',PRIMARY KEY (`id`))\n";
		$sqluserqry.="COLLATE='latin1_swedish_ci';\n";
		if ($vilidb->query($sqluserqry)===true){									
			echo"<br>taulu onnistui!<br><br>\n";
		}else{
			echo"<br>".$sqluserqry;
		}
									/* LUO TAULU */
		$sqluserqry='';
		/*
		$sqluserqry="ALTER TABLE `".$usertbl."qry`";
		foreach($qryfields AS $qkey => $qvalue) {
			$sqluserqry.=" ADD COLUMN `".$qvalue."` SMALLINT(5) UNSIGNED NULL DEFAULT NULL`,\n";
		}
		$sqluserqry2=substr($sqluserqry,0,-1);
		$sqluserqry2.=";";
		$sqluserqry='';
		if ($vilidb->query($sqluserqry2)===true){									
			echo"<br>taulu onnistui2!<br><br>\n";
		}
		*/
	}
	
}
/* ******************************************************** */
/* ******************************************************** */
function partitionHeader($hh,$imageP){
		global $langtxt;
		switch ($hh)
		{	
		case 'org':
			echo"<section class='tasot'>\n";
			echo"<header class='OrganizationBlock'>\n";
			echo"<img src=\"".$imageP."/Organisaatiotaso-valkoinen.png\" alt=\"logo\" style=\"padding-right:10px;\">\n";
			echo"<span style=\"line-height:36px;padding-top:15px;line-height:24px;text-align:left;\">\n";
			echo"	<h4>".$langtxt['TasoO']."</h4><br style=\"line-height:24px;\">\n";
			echo"	<h5>".$langtxt['TasoOa']."</h5>\n";
			echo"</span>\n";
			echo"</header>\n";	
			echo"<article>\n";
			echo"<div class=\"tooltip\">".$langtxt['PAGE_ohje3']."</div>\n";		
		break;
		case 'comm':
			echo"</article>\n";
			echo"</section>\n";
			echo"<section class='tasot'>\n";
			echo"<header class='CommunityBlock'>\n";
			echo"<img src=\"".$imageP."/Tyoyhteisotaso-valkoinen.png\" alt=\"logo\" style=\"padding-right:30px;\">\n";
			echo"<span style=\"line-height:36px;padding-top:15px;line-height:24px;text-align:left;\">\n";
			echo"	<h4>".$langtxt['TasoT']."</h4><br style=\"line-height:24px;\">\n";
			echo"	<h5>".$langtxt['TasoTa']."</h5>\n";
			echo"</span>\n";
			echo"</header>\n";	
			echo"<article>\n";
			echo"<div class=\"tooltip\">".$langtxt['PAGE_ohje3']."</div>\n";
		break;
		case 'indiv':
			echo"</article>\n";
			echo"</section>\n";
			echo"<section class='tasot'>\n";
			echo"<header class='IndividualBlock'>\n";
			echo"<img src=\"".$imageP."/Yksilotaso-valkoinen.png\" alt=\"logo\" style=\"padding-right:10px;\">\n";
			echo"<span style=\"line-height:36px;padding-top:15px;line-height:24px;text-align:left;\">\n";
			echo"	<h4>".$langtxt['TasoY']."</h4><br style=\"line-height:24px;\">\n";
			echo"	<h5>".$langtxt['TasoYa']."</h5>\n";
			echo"</span>\n";
			echo"</header>\n";	
			echo"<article>\n";
			echo"<div class=\"tooltip\">".$langtxt['PAGE_ohje3']."</div>\n";
		break;
		}		
	}
function partitionHeader2($hh,$imageP){
		global $langtxt;
		switch ($hh)
		{	
		case 'org':
			echo"<section class='tasot'>\n";
			echo"<header class='OrganizationBlock'>\n";
			echo"<img src=\"".$imageP."/Organisaatiotaso-valkoinen.png\" alt=\"logo\" style=\"padding-right:10px;\">\n";
			echo"<span style=\"line-height:36px;padding-top:15px;line-height:24px;text-align:left;\">\n";
			echo"	<h4>".$langtxt['TasoO']."</h4><br style=\"line-height:24px;\">\n";
			echo"	<h5>".$langtxt['TasoOa']."</h5>\n";
			echo"</span>\n";
			echo"</header>\n";	
			echo"<article>\n";
			
		break;
		case 'comm':
			echo"</article>\n";
			echo"</section>\n";
			echo"<section class='tasot'>\n";
			echo"<header class='CommunityBlock'>\n";
			echo"<img src=\"".$imageP."/Tyoyhteisotaso-valkoinen.png\" alt=\"logo\" style=\"padding-right:30px;\">\n";
			echo"<span style=\"line-height:36px;padding-top:15px;line-height:24px;text-align:left;\">\n";
			echo"	<h4>".$langtxt['TasoT']."</h4><br style=\"line-height:24px;\">\n";
			echo"	<h5>".$langtxt['TasoTa']."</h5>\n";
			echo"</span>\n";
			echo"</header>\n";	
			echo"<article>\n";
			
		break;
		case 'indiv':
			echo"</article>\n";
			echo"</section>\n";
			echo"<section class='tasot'>\n";
			echo"<header class='IndividualBlock'>\n";
			echo"<img src=\"".$imageP."/Yksilotaso-valkoinen.png\" alt=\"logo\" style=\"padding-right:10px;\">\n";
			echo"<span style=\"line-height:36px;padding-top:15px;line-height:24px;text-align:left;\">\n";
			echo"	<h4>".$langtxt['TasoY']."</h4><br style=\"line-height:24px;\">\n";
			echo"	<h5>".$langtxt['TasoYa']."</h5>\n";
			echo"</span>\n";
			echo"</header>\n";	
			echo"<article>\n";
			
		break;
		}		
	}
function partitionChbox($v3){
	global $langtxt;
	$fieldtxt='';
	$chktmp='';
	if(isset($_SESSION[$v3."_chk"])&&($_SESSION[$v3."_chk"]=='on')) $chktmp='checked';
	if(isset($langtxt[$v3])){
		$fieldtxt="<tr><td style=\"width:45px;height:30px;padding-top: 5px;padding-bottom: 0px;\"><input class=\"boxi\" id=\"".$v3."_chk\" name=\"".$v3."_chk\" type=\"checkbox\" ".$chktmp.">\n";
		$fieldtxt.="</td><td valign=\"top\" style=\"height:25px;margin:0px;word-wrap: break-word;padding-top: 2px;\">".$langtxt[$v3];
		if(isset($langtxt[$v3.'_info'])){
			$fieldtxt.="<p class=\"w3-tooltip\" style=\"display:inline\">&nbsp;&nbsp;<i class=\"fa fa-info-circle\" style=\"font-size:24px;color:red\"></i><span class=\"w3-text w3-tag\"><b>".$langtxt[$v3.'_info']."</b></span></p>\n";
		}
		if(isset($langtxt[$v3.'_linkki'])){
			$fieldtxt.="<p style=\"display:inline\">&nbsp;&nbsp;<span class=\"w3-text\" style=\"display:inline\">(<a target=\"_blank\" href=\"".$langtxt[$v3.'_linkki']."\">".$langtxt[$v3.'_linkkitxt']."</a>)</span></p>\n";
		}
		$fieldtxt.="</td></tr>\n";
	}	
	return $fieldtxt;
}
function addQuotes($str){
    return "'$str'";
}
Function browser_type (){
	$iPod = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
	$iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
	$iPad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
	$webkit = stripos($_SERVER['HTTP_USER_AGENT'],"webkit");
	$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
	$webOS = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");

//do something with this information
	if( $iPod || $iPhone ){
	//browser reported as an iPhone/iPod touch -- do something here
		return "iPhone";
	}else if($iPad){
		//browser reported as an iPad -- do something here
		return $iPad;
	}else if($webkit){
		//browser reported as an webkit -- do something here
		return "webkit";
	}else if($Android){
		//browser reported as an Android device -- do something here
		return $Android;
	}else if($webOS){
		//browser reported as a webOS device -- do something here
		return $webOS;
	}else {
		return $_SERVER['HTTP_USER_AGENT'];
	}
}

function fix_sql_date($date){
$browser = browser_type();
if ($browser == "iPhone"){
return $date; //returns as yyyy/mm/dd (same as mysql date)
}
if ($browser == "webkit"){
return $date; //returns as yyyy/mm/dd (same as mysql date)
}
$date = explode('-',$date);
return $date[2].'.'.$date[1].'.'.$date[0]; //reformat string to dd.mm.yyyy
}
/* ******************************************************** */
/* ******************************************************** */
function login($email, $password, $mysqli2) {
    // Using prepared statements means that SQL injection is not possible.
	$sql="SELECT user_id, email, password,dbname FROM users WHERE email = '".$email."' LIMIT 1;";
	$result = $mysqli2->query($sql);
	if(!$result){			
		die('Could not enter data: ' . $mysqli2->error);
	}else{	
        if ($result->num_rows == 1) {
            // If the user exists we check if the account is locked
            // from too many login attempts 
			$stmt=$result->fetch_assoc();
			
            if (checkbrute($stmt['user_id'], $mysqli2) == true) {               
                return false;				
            } else {
                // Check if the password in the database matches
                // the password the user submitted. We are using
                // the password_verify function to avoid timing attacks.			
				
                if (password_verify($password, $stmt['password'])) {
                    $user_browser = $_SERVER['HTTP_USER_AGENT'];
                    // XSS protection as we might print this value
                    $user_id = preg_replace("/[^0-9]+/", "", $user_id);
					
                    $_SESSION['user_id'] = $stmt['user_id'];
                    // XSS protection as we might print this value
                    //$username = preg_replace("/[^a-zA-Z0-9_\-]+/","",$username);
                    //$_SESSION['username'] = $username;
					$_SESSION['username'] = $email;
                    $_SESSION['login_string'] = hash('sha512', $stmt['password'] . $user_browser);
                    // Login successful.
					
                    return true;
                } else {
                    // Password is not correct
                    // We record this attempt in the database
                    $now = time();					
                    $mysqli2->query("INSERT INTO attempts(user_id, time)
                                    VALUES ('$user_id', '$now')");
                    return false;
                }
            }
        } else {
            // No user exists.
            return false;
        }
    }
}
function checkbrute($user_id, $mysqli) {
    // Get timestamp of current time
    $now = time();
    // All login attempts are counted from the past 2 hours.
    $valid_attempts = $now - (2 * 60 * 60); 
    if ($result=$mysqli->query("SELECT time FROM attempts WHERE user_id = ".$user_id." AND time > '".$valid_attempts."'")) {
        
        // If there have been more than 5 failed logins
        if ($result->num_rows > 5) {
            return true;
        } else {
            return false;
        }
    }
}

function login_check($mysqli) {
    // Check if all session variables are set
/*
    if (isset($_SESSION['user_id'],
                        $_SESSION['username'],
                        $_SESSION['login_string'])) {
        $user_id = $_SESSION['user_id'];
        $login_string = $_SESSION['login_string'];
        $username = $_SESSION['username'];
        // Get the user-agent string of the user.
        $user_browser = $_SERVER['HTTP_USER_AGENT'];
        if ($result = $mysqli->query("SELECT password FROM users WHERE user_id = ". $user_id." LIMIT 1")) {                       
            if ($result->num_rows == 1) {
                // If the user exists get variables from result.               
                $stmt=$result->fetch_assoc();
                $login_check = hash('sha512', $stmt['password']. $user_browser);
                if (hash_equals($login_check, $login_string) ){
                    // Logged In!!!!
                     return true;			   
                } else {
                    // Not logged in
                     return false;
			 
                }
            } else {
                // Not logged in
                return false;
			  
            }
        } else {
            // Not logged in
             return false;			
        }
    } else {
        // Not logged in
        return false;
			  
    }
	*/
	
}
?>