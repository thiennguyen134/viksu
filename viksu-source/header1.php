<?php

header('Cache-control: private'); 
date_default_timezone_set('Europe/Helsinki');
ini_set("default_charset", 'utf-8');

define("HOST", "mysql");     // The host you want to connect to.
// defined in the docker compose for mysql image
define("USER", "dbuser");    // The database username.
define("PASSWORD", "dbpass");    // The database password.
define("DATABASE", "viksu");    // The database name.


include_once('funcs.php');
include("config.php");
include("Auth.php");
sec_session_start();


try{
	$dbh = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	$e.
	die('\nError message:'.$e->getMessage());
}

$config = new PHPAuth\Config($dbh);
$auth   = new PHPAuth\Auth($dbh, $config);

global $language;
global $langtxt;
$page="sivu0";
$prevpage="sivu0";
$language='fi';

$valid_options = array();
	$valid_options[] = 'sivu0';
	$valid_options[] = 'sivu1';
	$valid_options[] = 'sivu2';
	$valid_options[] = 'sivu3';
	$valid_options[] = 'sivu4';
	$valid_options[] = 'sivu5';
	$valid_options[] = 'sivu6';
	$valid_options[] = 'sivu7';
	$valid_options[] = 'sivu8';
	$valid_options[] = 'sivu9';
	$valid_options[] = 'sivu10';
	$valid_options[] = 'sivu11';
	$valid_options[] = 'sivu12';
	$valid_options[] = 'sivu13';
	


if ($_SERVER['REQUEST_METHOD'] == 'POST') {		 
	foreach($_POST as $key => $value) {
		if (!is_array($_POST[$key])){
			$_POST[$key]=filter_var(Clear_input($value),FILTER_SANITIZE_STRING);
		}else{
			foreach($_POST[$key] as $key2 => $value2) {
				if (!is_array($_POST[$key][$key2])){
					$_POST[$key][$key2]=filter_var(Clear_input($value2),FILTER_SANITIZE_STRING);
				}else{
					$_POST[$key][$key2]=filter_var_array(Clear_input($value2),FILTER_SANITIZE_STRING);					
					if($_POST[$key][$key2]!='') $_SESSION[$key][$key2]=$_POST[$key][$key2];
				}
			}
		}
	}
	if(isset($_POST['page'])){	
		if(in_array($_POST['page'], $valid_options))
		{
			$page = $_POST['page']; //$name = strip_tags( trim( $_POST[ ‘name’ ] ) );
		}
	}
	if(isset($_POST['language'])){			
		$language = strip_tags(trim( $_POST['language']));
		$_SESSION['language'] = $language;
		setcookie('language', $language, time() + (3600 * 24 * 30));
	}else if(isSet($_GET['language']))
	{
		$language = $_SESSION['language'];
		$_SESSION['language'] = $language;
		setcookie('language', $language, time() + (3600 * 24 * 30));
	}else if(isSet($_SESSION['language'])){
		$language = $_SESSION['language'];
		$_SESSION['language'] = $language;
		setcookie('language', $language, time() + (3600 * 24 * 30));
	}else if(isSet($_COOKIE['language'])){
		$language = $_COOKIE['language'];
		$_SESSION['language'] = $language;
		setcookie('language', $language, time() + (3600 * 24 * 30));
	}else{
		$language = 'fi';
		$_SESSION['language'] = $language;
		setcookie('language', $language, time() + (3600 * 24 * 30));
	}
}else if ($_SERVER['REQUEST_METHOD'] == 'GET') {		 
	foreach($_GET as $key => $value) {
		if (!is_array($_GET[$key])){
			$_GET[$key]=filter_var(Clear_input($value),FILTER_SANITIZE_STRING);
			if($_GET[$key]!='') $_SESSION[$key]=$_GET[$key];
		}else{
			foreach($_GET[$key] as $key2 => $value2) {
				if (!is_array($_GET[$key][$key2])){
					$_GET[$key][$key2]=filter_var(Clear_input($value),FILTER_SANITIZE_STRING);
					if($_GET[$key][$key2]!='') $_SESSION[$key][$key2]=$_GET[$key][$key2];
				}else{
					$_GET[$key][$key2]=filter_var_array(Clear_input($value2),FILTER_SANITIZE_STRING);
					$_SESSION[$key][$key2]=$_GET[$key][$key2];
				}
			}
		}
	}
	if(isset($_GET['page'])){	
		if(in_array($_GET['page'], $valid_options))
		{
			$page = $_GET['page']; //$name = strip_tags( trim( $_POST[ ‘name’ ] ) );
		}
	}		 
	if(isset($_GET['language'])){			
		$language = strip_tags(trim( $_GET['language']));
		$_SESSION['language'] = $language;
		setcookie('language', $language, time() + (3600 * 24 * 30));
	}else if(isSet($_SESSION['language'])){
		$language = $_SESSION['language'];
		$_SESSION['language'] = $language;
		setcookie('language', $language, time() + (3600 * 24 * 30));
	}else if(isSet($_COOKIE['language'])){
		$language = $_COOKIE['language'];
		$_SESSION['language'] = $language;
		setcookie('language', $language, time() + (3600 * 24 * 30));
	}else{
		$language = 'fi';
		$_SESSION['language'] = $language;
		setcookie('language', $language, time() + (3600 * 24 * 30));
	}
}
if(isset($_SESSION['language'])) $language = $_SESSION['language'];
else $language = 'fi';
$queryl = "SELECT * FROM tekstit where kieli='fi'";
try {
	if($resultl = $dbh->prepare($queryl)){
		$resultl->execute();
		$langtxt = $resultl->fetch(PDO::FETCH_ASSOC);	
	}
} catch (PDOException $e) {
  printf("Query failed: %s\n", $e->getMessage());
  exit;
}

$_SESSION['page']=$page;



error_reporting(E_ERROR);
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE) ;
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if($mysqli->connect_errno)
{
  // Database does not exist, you lack permissions, or some other possible error.
    if(preg_match($mysqli->connect_error, "Access denied for user"))
    {
        print("Access denied, or database does not exist.");
    }
    else
    {
        print("Error: " . $mysqli->connect_error);
    }
}
/*
else{
echo 'Success... ' . $mysqli->host_info . "\n";	
}
*/


echo"<!DOCTYPE html>\n";
if($language=='fi'){
	echo"<html lang=\"fi\">\n";
}else{
	echo"<html lang=\"en\">\n";
}
echo"<head>\n";
echo"  <title>ViLi</title>\n";
echo"  <meta charset=\"UTF-8\">\n";
echo"  <meta name=\"description\" content=\"ViLi\">\n";
echo"  <meta name=\"UKK-instituutti\" content=\"ViLi\">\n";
echo"  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n";
echo"<meta name=\"author\" content=\"UKK-institute\">\n";
echo"<meta name=\"robots\" content=\"noindex, nofollow\" />\n";
echo"  <link rel=\"stylesheet\" href=\"./css/w3.css\">\n";
echo"  <link rel=\"stylesheet\" href=\"./css/tyylit.css\">\n";
echo"  <link rel=\"stylesheet\" href=\"./css/font-awesome.css\">\n";
echo"  <link rel=\"stylesheet\" href=\"./js/jqueryui/jquery-ui.css\">\n";
echo"  <link rel=\"stylesheet\" href=\"./js/jqueryui/jquery-ui.theme.css\">\n";
echo"  <link rel=\"stylesheet\" href=\"./js/jqueryui/jquery.datepick.css\">\n";

echo"  <script src=\"./js/jquery-3.2.1.js\"></script>\n";
echo"  <script src=\"./js/jqueryui/jquery-ui.js\"></script>\n";
echo"  <script src=\"./js/html5shiv-printshiv.js\"></script>\n";
if($language=='fi'){
	echo"  <script src=\"./js/datepicker-fi.js\"></script>\n";
}else{
	echo"  <script src=\"./js/datepicker-en-GB.js\"></script>\n";
}
echo"<!--[if lt IE 9]>\n";
	echo"    <script src=\"./js/html5shiv.js\"></script>\n";
echo"  <![endif]-->\n";
	echo"<script>\n";
		echo"    document.createElement('header');\n";
		echo"    document.createElement('nav');\n";
		echo"    document.createElement('section');\n";
		echo"    document.createElement('article');\n";
		echo"    document.createElement('aside');\n";
		echo"    document.createElement('footer');\n";
	echo"</script>\n";	

?>