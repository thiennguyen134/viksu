<?php
include_once('header1.php');

$varArray=array();
$varArray['org'][0][0]='hallinto1';
$varArray['org'][0][1]='hallinto2';
$varArray['org'][0][2]='hallinto3';
$varArray['org'][0][3]='hallinto4';
$varArray['org'][0][4]='hallinto5';
$varArray['org'][0][5]='hallinto6';
$varArray['org'][0][6]='hallinto7';

$varArray['org'][1][0]='talous1';
$varArray['org'][1][1]='talous2';
$varArray['org'][1][2]='talous3';
$varArray['org'][1][3]='talous4';
$varArray['org'][1][4]='talous5';

$varArray['org'][2][0]='olosuhde1';
$varArray['org'][2][1]='olosuhde2';
$varArray['org'][2][2]='olosuhde3';

$varArray['org'][3][0]='ymparisto1';
$varArray['org'][3][1]='ymparisto2';
$varArray['org'][3][2]='ymparisto3';
$varArray['org'][3][3]='ymparisto4';
$varArray['org'][3][4]='ymparisto5';
$varArray['org'][3][5]='ymparisto6';
$varArray['org'][3][6]='ymparisto7';
$varArray['org'][3][7]='ymparisto8';

$varArray['org'][4][0]='tapahtuma1';
$varArray['org'][4][1]='tapahtuma2';
$varArray['org'][4][2]='tapahtuma3';
$varArray['org'][4][3]='tapahtuma4';
$varArray['org'][4][4]='tapahtuma5';

$varArray['org'][5][0]='varusteet1';
$varArray['org'][5][1]='varusteet2';
$varArray['org'][5][2]='varusteet3';
$varArray['org'][5][3]='varusteet4';
$varArray['org'][5][4]='varusteet5';

//$varArray['org'][6][0]='OrganOtherCount';
$varArray['org'][6][0]='OrganOtherInputs';

$varArray['tyo'][0][0]='tyo_ylin_1';
$varArray['tyo'][0][1]='tyo_ylin_2';
$varArray['tyo'][0][2]='tyo_ylin_3';
$varArray['tyo'][0][3]='tyo_ylin_4';
$varArray['tyo'][1][0]='tyo_esim_1';
$varArray['tyo'][1][1]='tyo_esim_2';
$varArray['tyo'][1][2]='tyo_esim_3';
$varArray['tyo'][1][3]='tyo_esim_4';
$varArray['tyo'][1][4]='tyo_esim_5';
$varArray['tyo'][1][5]='tyo_esim_6';
$varArray['tyo'][1][6]='tyo_esim_7';
$varArray['tyo'][2][0]='tyo_tekija_1';
$varArray['tyo'][2][1]='tyo_tekija_2';
$varArray['tyo'][2][2]='tyo_tekija_3';
$varArray['tyo'][2][3]='tyo_tekija_4';
$varArray['tyo'][2][4]='tyo_tekija_5';
$varArray['tyo'][2][5]='tyo_tekija_6';
//$varArray['tyo'][3][0]='CommOtherCount';
$varArray['tyo'][3][0]='CommOtherInputs';

$varArray['yks'][0][0]='ykstalous_1';
$varArray['yks'][0][1]='ykstalous_2';
$varArray['yks'][0][2]='ykstalous_3';
$varArray['yks'][1][0]='yksterveys_1';
$varArray['yks'][1][1]='yksterveys_2';
$varArray['yks'][1][2]='yksterveys_3';
$varArray['yks'][2][0]='yksvarusteet_1';
$varArray['yks'][2][1]='yksvarusteet_2';
$varArray['yks'][2][2]='yksvarusteet_3';
$varArray['yks'][3][0]='yksosaaminen_1';
$varArray['yks'][3][1]='yksosaaminen_2';
$varArray['yks'][3][2]='yksosaaminen_3';
$varArray['yks'][3][3]='yksosaaminen_4';
$varArray['yks'][3][4]='yksosaaminen_5';
//$varArray['yks'][4][0]='IndivOtherCount';
$varArray['yks'][4][0]='IndivOtherInputs';

$otherArray=array();
$otherArray['org'][0]='OrganOtherInputs0';
$otherArray['org'][1]='OrganOtherInputs1';
$otherArray['org'][2]='OrganOtherInputs2';
$otherArray['org'][3]='OrganOtherInputs3';
$otherArray['org'][4]='OrganOtherInputs4';
$otherArray['tyo'][0]='CommOtherInputs0';
$otherArray['tyo'][1]='CommOtherInputs1';
$otherArray['tyo'][2]='CommOtherInputs2';
$otherArray['tyo'][3]='CommOtherInputs3';
$otherArray['tyo'][4]='CommOtherInputs4';
$otherArray['yks'][0]='IndivOtherInputs0';
$otherArray['yks'][1]='IndivOtherInputs1';
$otherArray['yks'][2]='IndivOtherInputs2';
$otherArray['yks'][3]='IndivOtherInputs3';
$otherArray['yks'][4]='IndivOtherInputs4';



$qryfields=array();
$qryfields[0]='field1';
$qryfields[1]='field2';
$qryfields[2]='field3';
$qryfields[3]='field4';
$qryfields[4]='field5';
$qryfields[5]='field6';
$qryfields[6]='field7';
$qryfields[7]='field8';
$qryfields[8]='field9';
$qryfields[9]='field10';
$qryfields[10]='field11';
$qryfields[11]='field12';
$qryfields[12]='field13';
$qryfields[13]='field14';
$qryfields[14]='field15';
$qryfields[15]='field16';
$qryfields[16]='field17';
$qryfields[17]='field18';
$qryfields[18]='field19';
$qryfields[19]='field20';
$qryfields[20]='field21';
$qryfields[21]='field22';
$qryfields[22]='field23';
$qryfields[23]='field24';
$qryfields[24]='field25';
$qryfields[25]='field26';
$qryfields[26]='field27';
$qryfields[27]='field28';
$qryfields[28]='field29';
$qryfields[29]='field30';
$qryfields[30]='field31';
$qryfields[31]='field32';
$qryfields[32]='field33';
$qryfields[33]='field34';
$qryfields[34]='field35';
$qryfields[35]='field36';
$qryfields[36]='field37';
$qryfields[37]='field38';
$qryfields[38]='field39';
$qryfields[39]='field40';
$qryfields[40]='field41';
$qryfields[41]='field42';
$qryfields[42]='field43';
$qryfields[43]='field44';
$qryfields[44]='field45';
$qryfields[45]='field46';
$qryfields[46]='field47';
$qryfields[47]='field48';
$qryfields[48]='field49';

		if(isset($_POST['state'])){
				$_SESSION['state']=sanitizeString($_POST['state']);
		}
		
		switch ($_SESSION['state']) {
			case "register":
				if(isset($_POST['email'])){
					filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
					$email=sanitizeString($_POST['email']);
				}
			break;
			case "login":
				if(isset($_POST['email'])){
					$email= filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
					if(!(isEmail($email))) $email='';
					$auth->login($email, $_POST['password']);					
				}	
						
			break;			
		}
/* KIRJAUTUNUT SISÄÄN */	

	
		if (!$auth->isLogged()) {
			header('Location: login.php');                
			exit();		
		}else{		
			$_SESSION['state']='edit';
			
			/*  TALLENNUS */
	
			if(isset($_POST)){
				foreach($_POST as $key => $value) {
						if (!is_array($value)){
							$value=filter_var(sanitizeString($value),FILTER_SANITIZE_STRING);
							
							if(($key!='thispage')&&($key!='page')&&($key!='nextpage')&&(isset($_POST[$key]))){								
								if($value!='') $_SESSION[$key]=$value;
							}
						}
						
						else{
							foreach($_POST[$key] as $key2 => $value2) {
								if (!is_array($value2)){									
									$value2=filter_var(sanitizeString($value2),FILTER_SANITIZE_STRING);									
									if(($key!='thispage')&&($key!='page')&&($key!='nextpage')&&($key!='password')&&($key!='login')){										
										$_SESSION[$key][$key2]=$value2;										
									}
								}else{
									foreach($_POST[$key][key2] as $key3 => $value3) {
										if (!is_array($_POST[$key][$key2][$key3])){											
											$value3=filter_var(sanitizeString($value3),FILTER_SANITIZE_STRING);
											if(($key!='thispage')&&($key!='page')&&($key!='nextpage')&&($key!='password')&&($key!='login')){
												$_SESSION[$key][$key2][$key3]=$value3;
											}
										}
									}
								}
							}
						}
						
					}
			}
		
			$Ootherc=0;
			if(isset($_SESSION['OrganOtherInputs'][0])){
				$_SESSION['OrganOtherCount']=count($_SESSION['OrganOtherInputs']);	
				$Ootherc=$_SESSION['OrganOtherCount'];	
				if($_SESSION['OrganOtherInputs'][0]==''){
					$Ootherc=0;
					$_SESSION['OrganOtherCount']=0;
				}
			}
			$Cotherc=0;
			if(isset($_SESSION['CommOtherInputs'][0])){
				$_SESSION['CommOtherCount']=count($_SESSION['CommOtherInputs']);				
				$Cotherc=$_SESSION['CommOtherCount'];
				if($_SESSION['CommOtherInputs'][0]==''){
					$Cotherc=0;
					$_SESSION['CommOtherCount']=0;
				}
			}
			$Iotherc=0;
			if(isset($_SESSION['IndivOtherInputs'][0])){
				$_SESSION['IndivOtherCount']=count($_SESSION['IndivOtherInputs']);
				$Iotherc=$_SESSION['IndivOtherCount'];
				if($_SESSION['IndivOtherInputs'][0]==''){
					$Iotherc=0;
					$_SESSION['IndivOtherCount']=0;
				}
			}
echo"<br>SES1:";
			prs('sess');				

			switch ($_SESSION['page']) {
				case 'sivu1':
				default:
					include_once('header2b.php');
					include_once('header2c.php');
					echo"<div class=\"w3-container w3-white w3-padding w3-section\" style=\"margin-bottom: 2px !important;letter-spacing:4px;padding-bottom: 2px;border-bottom: 4px solid #324c62;\">\n";				
						echo"<div class=\"w3-bar\" style=\"background-color: #324c62;height:5px;\">\n";				
						echo"</div>\n";
						echo"<div class=\"w3-bar\" style=\"background-color: #ffffff;height:5px;\">\n";				
						echo"</div>\n";
						echo"<div class=\"emptyrowBlack\">\n";
							echo"<h2>Viisaan liikkumisen työpaikka</h2>\n";
							echo"<h3>Työkalu suunnitteluun, toteutukseen ja arviointiin</h3>\n";
						echo"</div>\n";
						/* ****************************************************************************** */
						
						echo"<div class=\"w3-container w3-white w3-cell\" style=\"margin-top: 2px !important;padding-bottom: 2px;padding-top: 2px;\">\n";
							echo"<div class=\"w3-container w3-white w3-cell\" style=\"line-height:1.1;text-align: left;\">\n";
								echo" <h4>Suunnitelma ja toteutus</h4>\n";															
								echo"<form action=\"\" method=\"post\" id=\"sivu3new\" name=\"sivu3new\" class=\"organisaatiofrm\">\n";
									echo"<input type=\"hidden\" name=\"page\" id=\"page\" value=\"sivu2\">\n"; 
									echo"<input type=\"hidden\" name=\"state\" id=\"state\" value=\"new\">\n";
									echo"<p style=\"letter-spacing:2px;\"><input type=\"submit\" class=\"submitLink w3button\" value=\"Tee uusi\"></p>\n";						
								echo"</form>\n";
								echo"<form action=\"\" method=\"post\" id=\"sivu3edit\" name=\"sivu3edit\" class=\"organisaatiofrm\">\n";
									echo"<input type=\"hidden\" name=\"page\" id=\"page\" value=\"sivu3\">\n"; 
									echo"<input type=\"hidden\" name=\"state\" id=\"state\" value=\"edit\">\n";
									echo"<p style=\"letter-spacing:2px;\"><input type=\"submit\" class=\"submitLink w3button\" value=\"Avaa aiempi\"></p>\n";						
								echo"</form>\n";
							echo"</div>\n";
							echo"<div class=\"w3-container w3-white w3-cell\" style=\"text-align: left;\">\n";
								echo"<h4>Arviointi</h4>\n";
								echo"<form action=\"\" method=\"post\" id=\"sivu6f\" name=\"sivu6f\" class=\"organisaatiofrm\">\n";
									echo"<input type=\"hidden\" name=\"page\" id=\"page\" value=\"sivu6\">\n"; 
									echo"<input type=\"hidden\" name=\"state\" id=\"state\" value=\"edit\">\n";
									echo"<p style=\"letter-spacing:2px;\"><input type=\"submit\" class=\"submitLink w3button\" value=\"Toteutuminen\"></p>\n";						
								echo"</form>\n";
								echo"<form action=\"\" method=\"post\" id=\"sivu7f\" name=\"sivu7f\" class=\"organisaatiofrm\">\n";
									echo"<input type=\"hidden\" name=\"page\" id=\"page\" value=\"sivu7\">\n"; 
									echo"<input type=\"hidden\" name=\"state\" id=\"state\" value=\"edit\">\n";
									echo"<p style=\"letter-spacing:2px;\"><input type=\"submit\" class=\"submitLink w3button\" value=\"Toteutuneet kustannukset\"></p>\n";						
								echo"</form>\n";								
								echo"<div class=\"w3-dropdown-hover\" style=\"line-height:1.1;text-align: left;padding-left: 0px;\">\n";
									echo"<button class=\"w3-button\">Vaikutukset</button>\n";
									echo"<div class=\"w3-dropdown-content w3-bar-block w3-border\" style=\"line-height:1.1;text-align: left;\">\n";
										echo"<form action=\"\" method=\"post\" id=\"sivu8f\" name=\"sivu8f\" class=\"organisaatiofrm\">\n";
											echo"<input type=\"hidden\" name=\"page\" id=\"page\" value=\"sivu8\">\n"; 
											echo"<input type=\"hidden\" name=\"state\" id=\"state\" value=\"edit\">\n";
											echo"<p style=\"letter-spacing:2px;\"><input type=\"submit\" class=\"submitLink w3button\" value=\"Kysely\"></p>\n";						
										echo"</form>\n";
										echo"<form action=\"\" method=\"post\" id=\"sivu9f\" name=\"sivu9f\" class=\"organisaatiofrm\">\n";
											echo"<input type=\"hidden\" name=\"page\" id=\"page\" value=\"sivu9\">\n"; 
											echo"<input type=\"hidden\" name=\"state\" id=\"state\" value=\"edit\">\n";
											echo"<p style=\"letter-spacing:2px;\"><input type=\"submit\" class=\"submitLink w3button\" value=\"Vastaukset\"></p>\n";						
										echo"</form>\n";								
										
									echo"</div>\n";
								echo"</div>\n";
							echo"</div>\n";
							echo"<div class=\"w3-container w3-white w3-cell w3-mobile\" style=\"text-align: left;\">\n";
								echo"  <h4><a href=\"?page=sivu8\" class=\"w3-bar-item w3-button\" style=\"padding-top: 2px\">Raportti</a></h4></p>\n";
							echo"</div>\n";
						echo"</div>\n";
					echo"</div>\n";
					echo"<div class=\"w3-container w3-white w3-padding w3-section\" style=\"letter-spacing:4px;border-bottom: 4px solid #324c62;border-top: 4px solid #324c62;\">\n";	
						echo"<center>\n";	
							echo"<img style=\"margin-left:20px;padding-top:10px;padding-bottom:5px;width:735px;display:block\" src=\"./img/vilifront.jpg\">\n";
						echo"</center>\n";
					echo"</div>\n"; 
					
						/* ****************************************************************************** */
					echo"<div class=\"w3-bar\" style=\"background-color: #324c62;height:5px;\">\n";				
					echo"</div>\n";
				break;
				case 'sivu2': //valinnat
					include_once('header2b.php');
					include_once('header2c.php');					
					
					echo"<div class=\"w3-container w3-white w3-padding w3-section\" style=\"margin-bottom: 2px !important;letter-spacing:4px;padding-bottom: 2px;border-bottom: 4px solid #324c62;\">\n";				
						echo"SIVU2<br>";
						echo"<div class=\"w3-container\" style=\"background-color: #FFFFFF;padding:0px;margin:0px;\">\n";
					echo"<form action=\"\" method=\"post\" id=\"sivu4frm\" name=\"sivu4frm\" class=\"organisaatiofrm\">\n";
						echo"<input type=\"hidden\" name=\"page\" id=\"page\" value=\"sivu4\">\n";						
						echo"<div style=\"height:30px;\">\n";
							echo"<div class=\"ui-nodisc-icon ui-alt-icon\" style=\"height:25px;\">\n";
								echo"<button type=\"submit\" name=\"bckbtn\" id=\"bckbtn\" class=\"ui-btn w3-circle ui-btn-icon-notext ui-btn-inline\"><i class=\"fa fa-arrow-circle-o-left\" style=\"font-size:24px;color:black\"></i></button>\n";
								echo"<button type=\"submit\" name=\"nextpage\" id=\"nextpage\" class=\"ui-btn w3-circle ui-btn-icon-notext ui-btn-inline\"><i class=\"fa fa-arrow-circle-o-right\" style=\"font-size:24px;color:black\"></i></button>\n";
							echo"</div>\n";
						echo"</div>\n";
						echo"<br>\n";
						/* ************************ */						
						foreach($varArray as $key => $value)
						{				
							if (is_array($value))			
							{							
								foreach ($value as $key2 => $value2)
								{
									if (is_array($value2))
									{								
										foreach ($value2 as $key3 => $value3)
										{							
											if($key=="org"){
												if($key2==0){
													if($key3==0){
														partitionHeader('org','./img');										
														echo"<div class=\"Orgheaderrow\">\n";
														if(isset($langtxt[$value3.'h'])){
															echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
														}
														echo"</div>\n";
														echo"<div class=\"w3-responsive\" style=\"font-family: sans-serif;letter-spacing: 2px;\">\n";
														echo"<table class=\"w3-table\" id=\"tableManagement".$key.'_'.$key2."\" name=\"tableManagement".$key.'_'.$key2."\" style=\"font-size: 1em;line-height: 1.3;\">\n";
														$tablenum=$key.'_'.$key2;
														echo partitionChbox($value3);
													}else{
														echo partitionChbox($value3);													
													}
												}else{													
													if(($key3==0)&&($value3!='OrganOtherInputs')){
														echo"</table>\n";
														echo"</div>\n";
														echo"<script type=\"text/javascript\">\n";
														echo"	$('#tableManagement".$tablenum." tr').on('click change', function() {\n";
														echo"	  	if ($(this).find('td input:checkbox').prop('checked') === true)\n";
														echo"			$(this).find('td input:checkbox').prop('checked', false);\n";
														echo"	  	else{\n";
														echo"			$(this).find('td input:checkbox').prop('checked', true);\n";
														echo"		}\n";
														echo"	});\n";
														echo"</script>\n";
														
														if(isset($langtxt[$value3.'h'])){
															echo"<div class=\"Orgheaderrow\">\n";
															echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
															echo"</div>\n";
														}
														echo"<div class=\"w3-responsive\">\n";										
														echo"<table class=\"w3-table\" id=\"tableManagement".$key.'_'.$key2."\" name=\"tableManagement".$key.'_'.$key2."\" style=\"font-size: 1em;line-height: 1.3;font-family: sans-serif;letter-spacing: 2px;\">\n";
														$tablenum=$key.'_'.$key2;
														echo partitionChbox($value3);														
													}else{
														if($value3!='OrganOtherInputs'){															
															echo partitionChbox($value3);
															
														}else{
															echo"</table>\n";
															echo"</div>\n";
															echo"<script type=\"text/javascript\">\n";
															echo"	$('#tableManagement".$tablenum." tr').on('click change', function() {\n";
															echo"	  	if ($(this).find('td input:checkbox').prop('checked') === true)\n";
															echo"			$(this).find('td input:checkbox').prop('checked', false);\n";
															echo"	  	else{\n";
															echo"			$(this).find('td input:checkbox').prop('checked', true);\n";
															echo"		}\n";
															echo"	});\n";
															echo"</script>\n";
															if($Ootherc==0) $Ootherc2=1; else $Ootherc2=$Ootherc;
															echo"<script type=\"text/javascript\">\n";
																echo"	var counter = ".$Ootherc2."\n";//1;\n";
																echo"	function addInput1(divName){\n";																
																echo"	var limit = 5;\n";
																echo"		 if (counter == limit)  {\n";
																echo"			  alert(\"".$langtxt['otsikko_muutamax']." \" + counter + \" ".$langtxt['otsikko_muutamaxb']."\");\n";
																echo"		 }\n";
																echo"		 else {\n";
																echo"			  var newdiv = document.createElement('div');\n";
																echo"			  newdiv.innerHTML = \"".$langtxt['otsikko_muuta']." \" + (counter + 1) + \" <br><input type='text' name='OrganOtherInputs[]' id='OrganOtherInputs[]'>\";\n";
																echo"			  document.getElementById(divName).appendChild(newdiv);\n";
																echo"			  counter++;\n";
																echo"		 }\n";													
																echo"	}\n";
															echo"</script>\n";
															if(isset($langtxt['otsikko_muuta'])){
																echo"<div class=\"Orgheaderrow\">\n";
																echo"<h3>".$langtxt['otsikko_muuta']."</h3>\n";
																echo"</div>\n";
															}
															for ($x1 = 1; $x1 <= $Ootherc2; $x1++) {															
																	$chktmp='';																	
																	if(isset($_SESSION['OrganOtherInputs'][$x1-1])){
																		$ttxt1=$_SESSION['OrganOtherInputs'][$x1-1];
																		$chktmp=$ttxt1;
																	}else{
																		$ttxt1=$langtxt['otsikko_muuta'].$x1;
																		$chktmp='';
																	}
																	if($x1==1){
																		echo"		<div id=\"dynamicInput1\" style=\"text-align: left;margin-left:20px;\">\n";		
																	}else{
																		echo"<br>";
																	}
																	echo"			<br>".$ttxt1."<br><input type=\"text\" name=\"OrganOtherInputs[]\" id=\"OrganOtherInputs[]\" value=\"".$chktmp."\">\n";
																	if($x1==$Ootherc2){
																		echo"		</div>\n";
																	}
																if($x1===$Ootherc2){
																	echo"		<div id=\"dynamicInputbtn1\" style=\"text-align: left;margin-left:20px;\">\n";	
																	echo"			<input type=\"button\" class=\"w3-btn w3-white w3-margin-top w3-margin-bottom w3-border w3-round-xlarge\" id=\"dynamicInputBtn1\" value=\"".$langtxt['kysymys_muutaInsBtn']."\" onClick=\"addInput1('dynamicInput1');\">\n";
																	
																	echo"		</div>\n";
																	echo"		<div style=\"font-size:12px;font-weight:normal;;margin-left:20px;text-align:left\">".$langtxt['otsikko_muutac']."<br></div>\n";
																	echo"</div><br>\n";
																}
															}
														}
													}
												}
											} // ORG-loppuu
											if($key=="tyo"){
												if($key2==0){
													if($key3==0){														
														partitionHeader('comm','./img');									
														echo"<div class=\"Communityheaderrow\">\n";
														if(isset($langtxt[$value3.'h'])){
															echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
														}
														echo"</div>\n";
														echo"<div class=\"w3-responsive\">\n";
														echo"<table class=\"w3-table\" id=\"tableManagement".$key.'_'.$key2."\" name=\"tableManagement".$key.'_'.$key2."\" style=\"font-size: 1em;line-height: 1.3;font-family: sans-serif;letter-spacing: 2px;\">\n";
														$tablenum=$key.'_'.$key2;
														echo partitionChbox($value3);
													}else{
														echo partitionChbox($value3);													
													}
												}else{													
													if(($key3==0)&&($value3!='CommOtherInputs')){
														echo"</table>\n";
														echo"</div>\n";
														echo"<script type=\"text/javascript\">\n";
														echo"	$('#tableManagement".$tablenum." tr').on('click change', function() {\n";
														echo"	  	if ($(this).find('td input:checkbox').prop('checked') === true)\n";
														echo"			$(this).find('td input:checkbox').prop('checked', false);\n";
														echo"	  	else{\n";
														echo"			$(this).find('td input:checkbox').prop('checked', true);\n";
														echo"		}\n";
														echo"	});\n";
														echo"</script>\n";
														
														if(isset($langtxt[$value3.'h'])){
															echo"<div class=\"Communityheaderrow\">\n";
															echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
															echo"</div>\n";
														}
														echo"<div class=\"w3-responsive\">\n";										
														echo"<table class=\"w3-table\" id=\"tableManagement".$key.'_'.$key2."\" name=\"tableManagement".$key.'_'.$key2."\" style=\"font-size: 1em;line-height: 1.3;font-family: sans-serif;letter-spacing: 2px;\">\n";
														$tablenum=$key.'_'.$key2;
														echo partitionChbox($value3);														
													}else{
														if($value3!='CommOtherInputs'){															
															echo partitionChbox($value3);
															
														}else{
															echo"</table>\n";
															echo"</div>\n";
															echo"<script type=\"text/javascript\">\n";
															echo"	$('#tableManagement".$tablenum." tr').on('click change', function() {\n";
															echo"	  	if ($(this).find('td input:checkbox').prop('checked') === true)\n";
															echo"			$(this).find('td input:checkbox').prop('checked', false);\n";
															echo"	  	else{\n";
															echo"			$(this).find('td input:checkbox').prop('checked', true);\n";
															echo"		}\n";
															echo"	});\n";
															echo"</script>\n";
															if($Cotherc==0) $Cotherc2=1; else $Cotherc2=$Cotherc;
															echo"<script type=\"text/javascript\">\n";
																echo"	var counter2 = ".$Cotherc2."\n";//1;\n";
																echo"	function addInput2(divName){\n";																
																echo"	var limit = 5;\n";
																echo"		 if (counter2 == limit)  {\n";
																echo"			  alert(\"".$langtxt['otsikko_muutamax']." \" + counter2 + \" ".$langtxt['otsikko_muutamaxb']."\");\n";
																echo"		 }\n";
																echo"		 else {\n";
																echo"			  var newdiv2 = document.createElement('div');\n";
																echo"			  newdiv2.innerHTML = \"".$langtxt['otsikko_muuta']." \" + (counter2 + 1) + \" <br><input type='text' name='CommOtherInputs[]' id='CommOtherInputs[]'>\";\n";
																echo"			  document.getElementById(divName).appendChild(newdiv2);\n";
																echo"			  counter2++;\n";
																echo"		 }\n";													
																echo"	}\n";
															echo"</script>\n";
															if(isset($langtxt['otsikko_muuta'])){
																echo"<div class=\"Communityheaderrow\">\n";
																echo"<h3>".$langtxt['otsikko_muuta']."</h3>\n";
																echo"</div>\n";
															}
															for ($x2 = 1; $x2 <= $Cotherc2; $x2++) {															
																	$chktmp='';																	
																	if(isset($_SESSION['CommOtherInputs'][$x2-1])){
																		$ttxt2=$_SESSION['CommOtherInputs'][$x2-1];
																		$chktmp=$ttxt2;
																	}else{
																		$ttxt2=$langtxt['otsikko_muuta'].$x2;
																		$chktmp='';
																	}
																	if($x2==1){
																		echo"		<div id=\"dynamicInput2\" style=\"text-align: left;margin-left:20px;\">\n";		
																	}else{
																		echo"<br>";
																	}
																	echo"			<br>".$ttxt2."<br><input type=\"text\" name=\"CommOtherInputs[]\" id=\"CommOtherInputs[]\" value=\"".$chktmp."\">\n";
																	if($x2==$Cotherc2){
																		echo"		</div>\n";
																	}
																	if($x2===$Cotherc2){
																		echo"		<div id=\"dynamicInputbtn2\" style=\"text-align: left;margin-left:20px;\">\n";	
																		echo"			<input type=\"button\" class=\"w3-btn w3-white w3-margin-top w3-margin-bottom w3-border w3-round-xlarge\" id=\"dynamicInputBtn2\" value=\"".$langtxt['kysymys_muutaInsBtn']."\" onClick=\"addInput2('dynamicInput2');\">\n";
																		
																		echo"		</div>\n";
																		echo"		<div style=\"font-size:12px;font-weight:normal;;margin-left:20px;text-align:left\">".$langtxt['otsikko_muutac']."<br></div>\n";
																		echo"<br>\n";
																	}
															}
														}
													}
												}
											} // TYO-loppuu
											if($key=="yks"){
												if($key2==0){
													if($key3==0){														
														partitionHeader('indiv','./img');									
														echo"<div class=\"Individualrow\">\n";
														if(isset($langtxt[$value3.'h'])){
															echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
														}
														echo"</div>\n";
														echo"<div class=\"w3-responsive\">\n";
														echo"<table class=\"w3-table\" id=\"tableManagement".$key.'_'.$key2."\" name=\"tableManagement".$key.'_'.$key2."\" style=\"font-size: 1em;line-height: 1.3;font-family: sans-serif;letter-spacing: 2px;\">\n";
														$tablenum=$key.'_'.$key2;
														echo partitionChbox($value3);
													}else{
														echo partitionChbox($value3);													
													}
												}else{													
													if(($key3==0)&&($value3!='IndivOtherInputs')){
														echo"</table>\n";
														echo"</div>\n";
														echo"<script type=\"text/javascript\">\n";
														echo"	$('#tableManagement".$tablenum." tr').on('click change', function() {\n";
														echo"	  	if ($(this).find('td input:checkbox').prop('checked') === true)\n";
														echo"			$(this).find('td input:checkbox').prop('checked', false);\n";
														echo"	  	else{\n";
														echo"			$(this).find('td input:checkbox').prop('checked', true);\n";
														echo"		}\n";
														echo"	});\n";
														echo"</script>\n";
														
														if(isset($langtxt[$value3.'h'])){
															echo"<div class=\"Individualrow\">\n";
															echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
															echo"</div>\n";
														}
														echo"<div class=\"w3-responsive\">\n";										
														echo"<table class=\"w3-table\" id=\"tableManagement".$key.'_'.$key2."\" name=\"tableManagement".$key.'_'.$key2."\" style=\"font-size: 1em;line-height: 1.3;font-family: sans-serif;letter-spacing: 2px;\">\n";
														$tablenum=$key.'_'.$key2;
														echo partitionChbox($value3);														
													}else{
														if($value3!='IndivOtherInputs'){															
															echo partitionChbox($value3);
															
														}else{
															echo"</table>\n";
															echo"</div>\n";
															echo"<script type=\"text/javascript\">\n";
															echo"	$('#tableManagement".$tablenum." tr').on('click change', function() {\n";
															echo"	  	if ($(this).find('td input:checkbox').prop('checked') === true)\n";
															echo"			$(this).find('td input:checkbox').prop('checked', false);\n";
															echo"	  	else{\n";
															echo"			$(this).find('td input:checkbox').prop('checked', true);\n";
															echo"		}\n";
															echo"	});\n";
															echo"</script>\n";
															if($Iotherc==0) $Iotherc2=1; else $Iotherc2=$Iotherc;
															echo"<script type=\"text/javascript\">\n";
																echo"	var counter3 = ".$Iotherc2."\n";//1;\n";
																echo"	function addInput3(divName){\n";																
																echo"	var limit = 5;\n";
																echo"		 if (counter3 == limit)  {\n";
																echo"			  alert(\"".$langtxt['otsikko_muutamax']." \" + counter3 + \" ".$langtxt['otsikko_muutamaxb']."\");\n";
																echo"		 }\n";
																echo"		 else {\n";
																echo"			  var newdiv3 = document.createElement('div');\n";
																echo"			  newdiv3.innerHTML = \"".$langtxt['otsikko_muuta']." \" + (counter3 + 1) + \" <br><input type='text' name='IndivOtherInputs[]' id='IndivOtherInputs[]'>\";\n";
																echo"			  document.getElementById(divName).appendChild(newdiv3);\n";
																echo"			  counter3++;\n";
																echo"		 }\n";													
																echo"	}\n";
															echo"</script>\n";
															if(isset($langtxt['otsikko_muuta'])){
																echo"<div class=\"Individualrow\">\n";
																echo"<h3>".$langtxt['otsikko_muuta']."</h3>\n";
																echo"</div>\n";
															}
															for ($x3 = 1; $x3 <= $Iotherc2; $x3++) {															
																	$chktmp='';																	
																	if(isset($_SESSION['IndivOtherInputs'][$x3-1])){
																		$ttxt3=$_SESSION['IndivOtherInputs'][$x3-1];
																		$chktmp=$ttxt3;
																	}else{
																		$ttxt3=$langtxt['otsikko_muuta'].$x3;
																		$chktmp='';
																	}
																	if($x3==1){
																		echo"		<div id=\"dynamicInput3\" style=\"text-align: left;margin-left:20px;\">\n";		
																	}else{
																		echo"<br>";
																	}
																	echo"			<br>".$ttxt3."<br><input type=\"text\" name=\"IndivOtherInputs[]\" id=\"IndivOtherInputs[]\" value=\"".$chktmp."\">\n";
																	if($x3==$Iotherc2){
																		echo"		</div>\n";
																	}
																	if($x3===$Iotherc2){
																		echo"		<div id=\"dynamicInputbtn3\" style=\"text-align: left;margin-left:20px;\">\n";	
																		echo"			<input type=\"button\" class=\"w3-btn w3-white w3-margin-top w3-margin-bottom w3-border w3-round-xlarge\" id=\"dynamicInputBtn3\" value=\"".$langtxt['kysymys_muutaInsBtn']."\" onClick=\"addInput3('dynamicInput3');\">\n";
																		
																		echo"		</div>\n";
																		echo"		<div style=\"font-size:12px;font-weight:normal;;margin-left:20px;text-align:left\">".$langtxt['otsikko_muutac']."<br></div>\n";
																		echo"<br>\n";
																	}
															}
														}
													}
												}
											}// yks-loppuu
										}
									}
								}
							}
						}
						echo"</table>\n";
							
							echo"<div style=\"height:30px;\">\n";
								echo"<div class=\"ui-nodisc-icon ui-alt-icon\" style=\"height:25px;\">\n";
									echo"<button type=\"submit\" name=\"bckbtn2\" id=\"bckbtn2\" class=\"ui-btn w3-circle ui-btn-icon-notext ui-btn-inline\"><i class=\"fa fa-arrow-circle-o-left\" style=\"font-size:24px;color:black\"></i></button>\n";
									echo"<button type=\"submit\" name=\"nextpage2\" id=\"nextpage2\" class=\"ui-btn w3-circle ui-btn-icon-notext ui-btn-inline\"><i class=\"fa fa-arrow-circle-o-right\" style=\"font-size:24px;color:black\"></i></button>\n";
								echo"</div>\n";
							echo"</div>\n";
						echo"</div>\n";
					echo"</article>\n";
					echo"</section>\n";
					echo"</form>\n";
					echo"</div>\n";
					echo"</div>\n";
					echo"<script type=\"text/javascript\">\n";
					echo"$('#bckbtn').click(function(){\n";
					echo"	$('#page').val('sivu1');\n";
					echo"	var n_input = $('#page').val();\n";
					echo"	$('#organisaatiofrm').submit();\n";
					echo"});\n";
					echo"$('#bckbtn2').click(function(){\n";
					echo"	$('#page').val('sivu1');\n";
					echo"	var n_input = $('#page').val();\n";
					echo"	$('#organisaatiofrm').submit();\n";
					echo"});\n";
					echo"$('#nextpage').click(function(){\n";
					echo"	$('#page').val('sivu4');\n";
					echo"	var n_input = $('#page').val();\n";
					echo"	$('#organisaatiofrm').submit();\n";
					echo"});\n";
					echo"$('#nextpage2').click(function(){\n";
					echo"	$('#page').val('sivu4');\n";
					echo"	var n_input = $('#page').val();\n";
					echo"	$('#organisaatiofrm').submit();\n";
					echo"});\n";
					echo"</script>\n";
				break;
				case 'sivu3': // vanhat tiedot
					include_once('header2b.php');
					include_once('header2c.php');
					
					echo"<div class=\"w3-container w3-white w3-padding w3-section\" style=\"margin-bottom: 2px !important;letter-spacing:4px;padding-bottom: 2px;border-bottom: 4px solid #324c62;\">\n";				
						echo"SIVU3<br>";
						echo"<div class=\"w3-container\" style=\"background-color: #FFFFFF;padding:0px;margin:0px;\">\n";
					echo"<form action=\"\" method=\"post\" id=\"sivu5frm\" name=\"sivu5frm\" class=\"organisaatiofrm\">\n";
						echo"<input type=\"hidden\" name=\"page\" id=\"page\" value=\"sivu4\">\n";	
						foreach($_SESSION as $key => $value) {
							if($key!='page'){
								echo"<input type=\"hidden\" name=\"".$key."\" id=\"".$key."\" value=\"".$value."\">\n";
							}
						}
						echo"<div style=\"height:30px;\">\n";
							echo"<div class=\"ui-nodisc-icon ui-alt-icon\" style=\"height:25px;\">\n";
								echo"<button type=\"submit\" name=\"bckbtn\" id=\"bckbtn\" class=\"ui-btn w3-circle ui-btn-icon-notext ui-btn-inline\"><i class=\"fa fa-arrow-circle-o-left\" style=\"font-size:24px;color:black\"></i></button>\n";
								echo"<button type=\"submit\" name=\"nextpage\" id=\"nextpage\" class=\"ui-btn w3-circle ui-btn-icon-notext ui-btn-inline\"><i class=\"fa fa-arrow-circle-o-right\" style=\"font-size:24px;color:black\"></i></button>\n";
							echo"</div>\n";
						echo"</div>\n";
						echo"<br>\n";
						/* ************************ */						
						foreach($varArray as $key => $value)
						{				
							if (is_array($value))			
							{							
								foreach ($value as $key2 => $value2)
								{
									if (is_array($value2))
									{								
										foreach ($value2 as $key3 => $value3)
										{							
											if($key=="org"){
												if($key2==0){
													if($key3==0){
														partitionHeader('org','./img');										
														echo"<div class=\"Orgheaderrow\">\n";
														if(isset($langtxt[$value3.'h'])){
															echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
														}
														echo"</div>\n";
														echo"<div class=\"w3-responsive\">\n";
														echo"<table class=\"w3-table\" id=\"tableManagement".$key.'_'.$key2."\" name=\"tableManagement".$key.'_'.$key2."\" style=\"font-size: 1em;line-height: 1.3;font-family: sans-serif;letter-spacing: 2px;\">\n";
														$tablenum=$key.'_'.$key2;
														echo partitionChbox($value3);
													}else{
														echo partitionChbox($value3);													
													}
												}else{													
													if($key3==0){
														echo"</table>\n";
														echo"</div>\n";
														echo"<script type=\"text/javascript\">\n";
														echo"	$('#tableManagement".$tablenum." tr').on('click change', function() {\n";
														echo"	  	if ($(this).find('td input:checkbox').prop('checked') === true)\n";
														echo"			$(this).find('td input:checkbox').prop('checked', false);\n";
														echo"	  	else{\n";
														echo"			$(this).find('td input:checkbox').prop('checked', true);\n";
														echo"		}\n";
														echo"	});\n";
														echo"</script>\n";
														
														if(isset($langtxt[$value3.'h'])){
															echo"<div class=\"Orgheaderrow\">\n";
															echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
															echo"</div>\n";
														}
														echo"<div class=\"w3-responsive\">\n";										
														echo"<table class=\"w3-table\" id=\"tableManagement".$key.'_'.$key2."\" name=\"tableManagement".$key.'_'.$key2."\">\n";
														$tablenum=$key.'_'.$key2;
														echo partitionChbox($value3);
													}else{
														$chktmp='';
														if($value3!='OrganOtherInputs'){
															echo partitionChbox($value3);
														}else{
															echo"<script type=\"text/javascript\">\n";
																echo"	var counter = ".$Ootherc."\n";//1;\n";
																echo"	function addInput1(divName){\n";																
																echo"	var limit = 5;\n";
																echo"		 if (counter == limit)  {\n";
																echo"			  alert(\"".$langtxt['otsikko_muutamax']." \" + counter + \" ".$langtxt['otsikko_muutamaxb']."\");\n";
																echo"		 }\n";
																echo"		 else {\n";
																echo"			  var newdiv = document.createElement('div');\n";
																echo"			  newdiv.innerHTML = \"".$langtxt['otsikko_muuta']." \" + (counter + 1) + \" <br><input type='text' name='OrganOtherInputs[]' id='OrganOtherInputs[]'>\";\n";
																echo"			  document.getElementById(divName).appendChild(newdiv);\n";
																echo"			  counter++;\n";
																echo"		 }\n";													
																echo"	}\n";
															echo"</script>\n";	
														
															if(isset($langtxt['otsikko_muuta'])){
																echo"<div class=\"Orgheaderrow\">\n";
																echo"<h3>".$langtxt['otsikko_muuta']."</h3>\n";
																echo"</div>\n";
															}
															for ($x1 = 1; $x1 <= $Ootherc; $x1++) {															
																	$chktmp='';																	
																	if(isset($_SESSION['OrganOtherInputs'][$x1-1])){
																		$ttxt1=$_SESSION['OrganOtherInputs'][$x1-1];
																		$chktmp=$ttxt1;
																	}else{
																		$ttxt1=$langtxt['otsikko_muuta'].$x1;
																		$chktmp='';
																	}
																	if($x1==1){
																		echo"		<div id=\"dynamicInput1\" style=\"text-align: left;margin-left:20px;\">\n";		
																	}else{
																		echo"<br>";
																	}
																	echo"			<br>".$ttxt1."<br><input type=\"text\" name=\"OrganOtherInputs[]\" id=\"OrganOtherInputs[]\" value=\"".$chktmp."\">\n";
																	if($x1==$Ootherc){
																		echo"		</div>\n";
																	}
																if($x1===$Ootherc){
																	echo"		<div id=\"dynamicInputbtn1\" style=\"text-align: left;margin-left:20px;\">\n";	
																	echo"			<input type=\"button\" class=\"w3-btn w3-white w3-margin-top w3-margin-bottom w3-border w3-round-xlarge\" id=\"dynamicInputBtn1\" value=\"".$langtxt['kysymys_muutaInsBtn']."\" onClick=\"addInput1('dynamicInput1');\">\n";
																	
																	echo"		</div>\n";
																	echo"		<div style=\"font-size:12px;font-weight:normal;;margin-left:20px;text-align:left\">".$langtxt['otsikko_muutac']."<br></div>\n";
																	echo"</div><br>\n";
																}
															}
														}
													}
												}
											}
											if($key=="tyo"){
												if($key2==0){
													if($key3==0){
														echo"</table>\n";
														echo"</div>\n";
														partitionHeader('comm','./img');										
														echo"<div class=\"Communityheaderrow\">\n";
														if(isset($langtxt[$value3.'h'])){
															echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
														}
														echo"</div>\n";
														echo"<div class=\"w3-responsive\">\n";
														echo"<table class=\"w3-table\" id=\"tableManagement".$key.'_'.$key2."\" name=\"tableManagement".$key.'_'.$key2."\">\n";
														$tablenum=$key.'_'.$key2;
														echo partitionChbox($value3);
													}else{
														echo partitionChbox($value3);													
													}
												}else{													
													if($key3==0){
														echo"</table>\n";
														echo"</div>\n";
														echo"<script type=\"text/javascript\">\n";
														echo"	$('#tableManagement".$tablenum." tr').on('click change', function() {\n";
														echo"	  	if ($(this).find('td input:checkbox').prop('checked') === true)\n";
														echo"			$(this).find('td input:checkbox').prop('checked', false);\n";
														echo"	  	else{\n";
														echo"			$(this).find('td input:checkbox').prop('checked', true);\n";
														echo"		}\n";
														echo"	});\n";
														echo"</script>\n";
														
														if(isset($langtxt[$value3.'h'])){
															echo"<div class=\"Communityheaderrow\">\n";
															echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
															echo"</div>\n";
														}
														echo"<div class=\"w3-responsive\">\n";										
														echo"<table class=\"w3-table\" id=\"tableManagement".$key.'_'.$key2."\" name=\"tableManagement".$key.'_'.$key2."\">\n";
														$tablenum=$key.'_'.$key2;
														echo partitionChbox($value3);
													}else{
														$chktmp='';
														if($value3!='CommOtherInputs'){
															echo partitionChbox($value3);
														}else{
															echo"<script type=\"text/javascript\">\n";
																echo"	var counter2 = ".$Cotherc."\n";//1;\n";
																echo"	function addInput2(divName){\n";																
																echo"	var limit = 5;\n";
																echo"		 if (counter2 == limit)  {\n";
																echo"			  alert(\"".$langtxt['otsikko_muutamax']." \" + counter2 + \" ".$langtxt['otsikko_muutamaxb']."\");\n";
																echo"		 }\n";
																echo"		 else {\n";
																echo"			  var newdiv = document.createElement('div');\n";
																echo"			  newdiv.innerHTML = \"".$langtxt['otsikko_muuta']." \" + (counter2 + 1) + \" <br><input type='text' name='OrganOtherInputs[]' id='OrganOtherInputs[]'>\";\n";
																echo"			  document.getElementById(divName).appendChild(newdiv);\n";
																echo"			  counter2++;\n";
																echo"		 }\n";													
																echo"	}\n";
															echo"</script>\n";	
														
															if(isset($langtxt['otsikko_muuta'])){
																echo"<div class=\"Communityheaderrow\">\n";
																echo"<h3>".$langtxt['otsikko_muuta']."</h3>\n";
																echo"</div>\n";
															}
															for ($x1 = 1; $x1 <= $Cotherc; $x1++) {															
																	$chktmp='';																	
																	if(isset($_SESSION['CommOtherInputs'][$x1-1])){
																		$ttxt1=$_SESSION['CommOtherInputs'][$x1-1];
																		$chktmp=$ttxt1;
																	}else{
																		$ttxt1=$langtxt['otsikko_muuta'].$x1;
																		$chktmp='';
																	}
																	if($x1==1){
																		echo"		<div id=\"dynamicInput2\" style=\"text-align: left;margin-left:20px;\">\n";		
																	}else{
																		echo"<br>";
																	}
																	echo"			<br>".$ttxt1."<br><input type=\"text\" name=\"CommOtherInputs[]\" id=\"CommOtherInputs[]\" value=\"".$chktmp."\">\n";
																	if($x1==$Cotherc){
																		echo"		</div>\n";
																	}
																if($x1===$Cotherc){
																	echo"		<div id=\"dynamicInputbtn2\" style=\"text-align: left;margin-left:20px;\">\n";	
																	echo"			<input type=\"button\" class=\"w3-btn w3-white w3-margin-top w3-margin-bottom w3-border w3-round-xlarge\" id=\"dynamicInputBtn1\" value=\"".$langtxt['kysymys_muutaInsBtn']."\" onClick=\"addInput2('dynamicInput2');\">\n";
																	
																	echo"		</div>\n";
																	echo"		<div style=\"font-size:12px;font-weight:normal;;margin-left:20px;text-align:left\">".$langtxt['otsikko_muutac']."<br></div>\n";
																	echo"</div><br>\n";
																}
															}
														}
													}
												}
											}
											if($key=="yks"){
												if($key2==0){
													if($key3==0){
														echo"</table>\n";
														echo"</div>\n";
														partitionHeader('indiv','./img');										
														echo"<div class=\"Individualrow\">\n";
														if(isset($langtxt[$value3.'h'])){
															echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
														}
														echo"</div>\n";
														echo"<div class=\"w3-responsive\">\n";
														echo"<table class=\"w3-table\" id=\"tableManagement".$key.'_'.$key2."\" name=\"tableManagement".$key.'_'.$key2."\">\n";
														$tablenum=$key.'_'.$key2;
														$chktmp='';
														echo partitionChbox($value3);
													}else{
														echo partitionChbox($value3);													
													}
												}else{													
													if($key3==0){
														echo"</table>\n";
														echo"</div>\n";
														echo"<script type=\"text/javascript\">\n";
														echo"	$('#tableManagement".$tablenum." tr').on('click change', function() {\n";
														echo"	  	if ($(this).find('td input:checkbox').prop('checked') === true)\n";
														echo"			$(this).find('td input:checkbox').prop('checked', false);\n";
														echo"	  	else{\n";
														echo"			$(this).find('td input:checkbox').prop('checked', true);\n";
														echo"		}\n";
														echo"	});\n";
														echo"</script>\n";
														
														if(isset($langtxt[$value3.'h'])){
															echo"<div class=\"Individualrow\">\n";
															echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
															echo"</div>\n";
														}
														echo"<div class=\"w3-responsive\">\n";										
														echo"<table class=\"w3-table\" id=\"tableManagement".$key.'_'.$key2."\" name=\"tableManagement".$key.'_'.$key2."\">\n";
														$tablenum=$key.'_'.$key2;
														echo partitionChbox($value3);
													}else{
														$chktmp='';
														if($value3!='IndivOtherInputs'){
															echo partitionChbox($value3);
														}else{
															echo"<script type=\"text/javascript\">\n";
																echo"	var counter3 = ".$Iotherc."\n";//1;\n";
																echo"	function addInput3(divName){\n";																
																echo"	var limit = 5;\n";
																echo"		 if (counter3 == limit)  {\n";
																echo"			  alert(\"".$langtxt['otsikko_muutamax']." \" + counter3 + \" ".$langtxt['otsikko_muutamaxb']."\");\n";
																echo"		 }\n";
																echo"		 else {\n";
																echo"			  var newdiv = document.createElement('div');\n";
																echo"			  newdiv.innerHTML = \"".$langtxt['otsikko_muuta']." \" + (counter3 + 1) + \" <br><input type='text' name='IndivOtherInputs[]' id='IndivOtherInputs[]'>\";\n";
																echo"			  document.getElementById(divName).appendChild(newdiv);\n";
																echo"			  counter3++;\n";
																echo"		 }\n";													
																echo"	}\n";
															echo"</script>\n";	
														
															if(isset($langtxt['otsikko_muuta'])){
																echo"<div class=\"Individualrow\">\n";
																echo"<h3>".$langtxt['otsikko_muuta']."</h3>\n";
																echo"</div>\n";
															}
															for ($x1 = 1; $x1 <= $Iotherc; $x1++) {															
																	$chktmp='';																	
																	if(isset($_SESSION['IndivOtherInputs'][$x1-1])){
																		$ttxt1=$_SESSION['IndivOtherInputs'][$x1-1];
																		$chktmp=$ttxt1;
																	}else{
																		$ttxt1=$langtxt['otsikko_muuta'].$x1;
																		$chktmp='';
																	}
																	if($x1==1){
																		echo"		<div id=\"dynamicInput3\" style=\"text-align: left;margin-left:20px;\">\n";		
																	}else{
																		echo"<br>";
																	}
																	echo"			<br>".$ttxt1."<br><input type=\"text\" name=\"IndivOtherInputs[]\" id=\"IndivOtherInputs[]\" value=\"".$chktmp."\">\n";
																	if($x1==$Iotherc){
																		echo"		</div>\n";
																	}
																if($x1===$Iotherc){
																	echo"		<div id=\"dynamicInputbtn3\" style=\"text-align: left;margin-left:20px;\">\n";	
																	echo"			<input type=\"button\" class=\"w3-btn w3-white w3-margin-top w3-margin-bottom w3-border w3-round-xlarge\" id=\"dynamicInputBtn3\" value=\"".$langtxt['kysymys_muutaInsBtn']."\" onClick=\"addInput3('dynamicInput3');\">\n";
																	
																	echo"		</div>\n";
																	echo"		<div style=\"font-size:12px;font-weight:normal;;margin-left:20px;text-align:left\">".$langtxt['otsikko_muutac']."<br></div>\n";
																	echo"</div><br>\n";
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
						echo"</table>\n";
						echo"</div>\n";
					echo"</article>\n";
					echo"</section>\n";	
					echo"<div style=\"height:30px;\">\n";
						echo"<div class=\"ui-nodisc-icon ui-alt-icon\" style=\"height:25px;\">\n";
							echo"<button type=\"submit\" name=\"bckbtn2\" id=\"bckbtn2\" class=\"ui-btn w3-circle ui-btn-icon-notext ui-btn-inline\"><i class=\"fa fa-arrow-circle-o-left\" style=\"font-size:24px;color:black\"></i></button>\n";
							echo"<button type=\"submit\" name=\"nextpage2\" id=\"nextpage2\" class=\"ui-btn w3-circle ui-btn-icon-notext ui-btn-inline\"><i class=\"fa fa-arrow-circle-o-right\" style=\"font-size:24px;color:black\"></i></button>\n";
						echo"</div>\n";
					echo"</div>\n";
					echo"</form>\n";
					echo"</div>\n";
					echo"</div>\n";
					echo"<script type=\"text/javascript\">\n";
					echo"$('#bckbtn').click(function(){\n";
					echo"	$('#page').val('sivu1');\n";
					echo"	var n_input = $('#page').val();\n";
					echo"	$('#organisaatiofrm').submit();\n";
					echo"});\n";
					echo"$('#bckbtn2').click(function(){\n";
					echo"	$('#page').val('sivu1');\n";
					echo"	var n_input = $('#page').val();\n";
					echo"	$('#organisaatiofrm').submit();\n";
					echo"});\n";
					echo"$('#nextpage').click(function(){\n";
					echo"	$('#page').val('sivu4');\n";
					echo"	var n_input = $('#page').val();\n";
					echo"	$('#organisaatiofrm').submit();\n";
					echo"});\n";
					echo"$('#nextpage2').click(function(){\n";
					echo"	$('#page').val('sivu4');\n";
					echo"	var n_input = $('#page').val();\n";
					echo"	$('#organisaatiofrm').submit();\n";
					echo"});\n";
					echo"</script>\n";
				break;
				case 'sivu4': //ajankohdat
					include_once('header2b.php');
					include_once('header2c.php');
										
					echo"<script>\n";
						//echo"	 $(document).ready(function () {\n";
						echo"$( function() {\n";
							
							echo"	var locale = '".$language."';\n";
							echo"	if (locale == 'en') {\n";
							echo"		locale = '';\n";
							echo"	}\n";
							echo"	var dateToday = new Date();\n";
							echo"	var yrRange = dateToday.getFullYear() + \":\" + (dateToday.getFullYear() + 2);\n";
							echo"	var defaultFormat = {dateFormat: 'dd.mm.yy',firstDay: 1,yearRange: yrRange,changeYear:true,autoopen: false,showWeek: true};\n";		
							echo"	$.datepicker.setDefaults(defaultFormat);\n";
							echo"	$.datepicker.setDefaults($.datepicker.regional[locale]);\n";
							echo"	var dateFormat = \"dd.mm.yy\",	\n";
							foreach($varArray as $key => $value)
								{
									if (is_array($value))			
									{							
										foreach ($value as $key2 => $value2)
										{
											if (is_array($value2))
											{
												$tmp='';
												$tmp2='';
												$tmp3='';
												$tmp4='';
												foreach ($value2 as $key3 => $value3)
												{	
													if(($value3!='OrganOtherCount')&&($value3!='OrganOtherInputs')&&($value3!='CommOtherCount')&&($value3!='CommOtherInputs')&&($value3!='IndivOtherCount')&&($value3!='IndivOtherInputs')){
														$tmp=$value3."_date_from";
														$tmp2=$value3."_date_to";
														$tmp3=$value3."_date_a";
														$tmp4=$value3."_date_l";
														echo"	  ".$tmp." = $(\"#".$tmp3."\").datepicker({	\n";
														
														echo"		})\n";
														echo"	  .on( \"change\", function() {\n";
														echo"		  ".$tmp2.".datepicker( \"option\", \"minDate\", getDate( this ) );\n";
														echo"	  }),\n";
														echo"	  ".$tmp2." = $(\"#".$tmp4."\").datepicker({	\n";
														
														echo"	  })\n";
														echo"	  .on( \"change\", function() {\n";
														echo"		".$tmp.".datepicker( \"option\", \"maxDate\", getDate( this ) );\n";
														echo"	  });\n";
														echo"	  \n";
													}else{
														if(($value3=='OrganOtherInputs')||($value3=='CommOtherInputs')||($value3=='IndivOtherInputs')){
														// MUUTA SESSIO POIS -> XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
														// MUUTA SESSIO POIS -> XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
															foreach($_SESSION[$value3] as $key4 => $value4){
																	$tmp=$value3.$key4."_date_from";
																	$tmp2=$value3.$key4."_date_to";
																	$tmp3=$value3.$key4."_date_a";
																	$tmp4=$value3.$key4."_date_l";
																	echo"	  ".$tmp." = $(\"#".$tmp3."\").datepicker({	\n";
																	
																	echo"		})\n";
																	echo"	  .on( \"change\", function() {\n";
																	echo"		  ".$tmp2.".datepicker( \"option\", \"minDate\", getDate( this ) );\n";
																	echo"	  }),\n";
																	echo"	  ".$tmp2." = $(\"#".$tmp4."\").datepicker({	\n";
																	
																	echo"	  })\n";
																	echo"	  .on( \"change\", function() {\n";
																	echo"		".$tmp.".datepicker( \"option\", \"maxDate\", getDate( this ) );\n";
																	echo"	  });\n";
																	echo"	  \n";
															}
														}
													}
												}
											}
										}
									}
								}
								echo"	function getDate( element ) {\n";
									echo"	  var date;\n";
									echo"	  try {\n";
									echo"		date = $.datepicker.parseDate( dateFormat, element.value );\n";
									echo"	  } catch( error ) {\n";
									echo"		date = null;\n";
									echo"	  }\n";			 
									echo"	  return date;\n";
								echo"	}	\n";
						echo"});\n";
									
					echo"</script>\n";
					
					echo"<div class=\"w3-container w3-white w3-padding w3-section\" style=\"margin-bottom: 2px !important;letter-spacing:4px;padding-bottom: 2px;border-bottom: 4px solid #324c62;\">\n";				
						echo"SIVU4<br>";
						echo"<div class=\"w3-container\" style=\"background-color: #FFFFFF;padding:0px;margin:0px;\">\n";
							echo"<form action=\"\" method=\"post\" id=\"sivu4frm\" name=\"sivu4frm\" class=\"organisaatiofrm\">\n";
								echo"<input type=\"hidden\" name=\"page\" id=\"page\" value=\"sivu5\">\n";
								foreach($_SESSION as $key => $value) {
									if($key!='page'){
										echo"<input type=\"hidden\" name=\"".$key."\" id=\"".$key."\" value=\"".$value."\">\n";
									}
								}
								echo"<div style=\"height:30px;\">\n";
									echo"<div class=\"ui-nodisc-icon ui-alt-icon\" style=\"height:25px;\">\n";
										echo"<button type=\"submit\" name=\"bckbtn\" id=\"bckbtn\" class=\"ui-btn w3-circle ui-btn-icon-notext ui-btn-inline\"><i class=\"fa fa-arrow-circle-o-left\" style=\"font-size:24px;color:black\"></i></button>\n";
										echo"<button type=\"submit\" name=\"nextpage\" id=\"nextpage\" class=\"ui-btn w3-circle ui-btn-icon-notext ui-btn-inline\"><i class=\"fa fa-arrow-circle-o-right\" style=\"font-size:24px;color:black\"></i></button>\n";
									echo"</div>\n";
								echo"</div><br>\n";
								/* ******************************************************************************* */
								
								foreach($varArray as $key => $value)
								{				
									if (is_array($value))			
									{							
										foreach ($value as $key2 => $value2)
										{
											if (is_array($value2))
											{								
												foreach ($value2 as $key3 => $value3)
												{							
													if($key=="org"){
														if($key2==0){
															if($key3==0){
																partitionHeader('org','./img');										
																echo"<div class=\"Orgheaderrow\">\n";
																if(isset($langtxt[$value3.'h'])){
																	echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
																}
																echo"</div>\n";
																
																echo"<div class=\"w3-responsive\">\n";
																echo"<table class=\"w3-table\" id=\"tableManagement".$key2."\" name=\"tableManagement".$key2."\">\n";
																echo"<tbody style=\"display:table-cell\">\n";
																$tablenum=$key2;
																
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))){
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br><b>".$langtxt[$value3]."</b></a>\n";
																	echo"</b></td></tr>\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_a"])){
																		$ttmp="value=".$_SESSION[$value3.'_date_a'];
																	}
																	echo"<tr><td width=\"155px;\" style=\"padding: 5px;text-align: left;\">".$langtxt['page2_2']."</td><td>\n";
																	echo"<input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_a\" name=\"".$value3."_date_a\" ".$ttmp.">&nbsp;-&nbsp;\n";
																	$chktmp=" value=\"\"";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_l"])){
																		$ttmp="value=".$_SESSION[$value3.'_date_l'];
																	}															
																	echo"<input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_l\" name=\"".$value3."_date_l\" ".$ttmp."></td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_3']."</td><td><textarea id=\"".$value3."_jarjestelyt\" name=\"".$value3."_jarjestelyt\" rows=\"4\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_4']."</td><td><textarea id=\"".$value3."_toteuttajat\" name=\"".$value3."_toteuttajat\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['Menu_TITLE2d']."&nbsp;</td><td><textarea id=\"".$value3."_kustannusarvio\" name=\"".$value3."_kustannusarvio\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																}
															}else{
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))){
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br><b>".$langtxt[$value3]."</b></a>\n";
																	echo"</b></td></tr>\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_a"])){
																		$ttmp=$_SESSION[$value3.'_date_a'];
																	}
																	echo"<tr><td width=\"155px;\" style=\"padding: 5px;text-align: left;\">".$langtxt['page2_2']."</td><td><input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_a\" name=\"".$value3."_date_a\" value=\"".$ttmp."\">&nbsp;-&nbsp;\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_l"])){
																		$ttmp=$_SESSION[$value3.'_date_l'];
																	}
																	echo"<input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_l\" name=\"".$value3."_date_l\" value=\"".$ttmp."\"></td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_3']."</td><td><textarea id=\"".$value3."_jarjestelyt\" name=\"".$value3."_jarjestelyt\" rows=\"4\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_4']."</td><td><textarea id=\"".$value3."_toteuttajat\" name=\"".$value3."_toteuttajat\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['Menu_TITLE2d']."&nbsp;</td><td><textarea id=\"".$value3."_kustannusarvio\" name=\"".$value3."_kustannusarvio\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																}
															}
														}else{
															if($key3==0){
																echo"</tbody>\n";
																echo"</table>\n";													
																echo"</div>\n";
																if(isset($langtxt[$value3.'h'])){
																	echo"<div class=\"Orgheaderrow\">\n";
																	echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
																	echo"</div>\n";
																}
																echo"<div class=\"w3-responsive\">\n";										
																echo"<table class=\"w3-table\" id=\"tableManagement".$key2."\" name=\"tableManagement".$key2."\">\n";
																echo"<tbody style=\"display:table-cell\">\n";
																$tablenum=$key2;
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on')&&($value3!='OrganOtherInputs'))){														
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br>".$langtxt[$value3]."</a>\n";
																	echo"</b></td></tr>\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_a"])){
																		$ttmp=$_SESSION[$value3.'_date_a'];
																	}
																	echo"<tr><td width=\"155px;\" style=\"padding: 5px;text-align: left;\">".$langtxt['page2_2']."</td><td><input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_a\" name=\"".$value3."_date_a\" value=\"".$ttmp."\">&nbsp;-&nbsp;\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_l"])){
																		$ttmp=$_SESSION[$value3.'_date_l'];
																	}
																	echo"<input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_l\" name=\"".$value3."_date_l\" value=\"".$ttmp."\"></td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_3']."</td><td><textarea id=\"".$value3."_jarjestelyt\" name=\"".$value3."_jarjestelyt\" rows=\"4\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_4']."</td><td><textarea id=\"".$value3."_toteuttajat\" name=\"".$value3."_toteuttajat\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['Menu_TITLE2d']."&nbsp;</td><td><textarea id=\"".$value3."_kustannusarvio\" name=\"".$value3."_kustannusarvio\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																}else{
																	if($value3=='OrganOtherInputs'){
																		echo"</tbody>\n";
																		echo"</table>\n";													
																		echo"</div>\n";
																		echo"<div class=\"Orgheaderrow\">\n";
																			echo"<h3>".$langtxt['otsikko_muuta']."</h3>\n";
																		echo"</div>\n";
																		$tablenum=$key2;
																		echo"<div class=\"w3-responsive\">\n";										
																			echo"<table class=\"w3-table\" id=\"tableManagement".$key2."\" name=\"tableManagement".$key2."\">\n";
																				echo"<tbody style=\"display:table-cell\">\n";
																					for ($x1 = 0; $x1 < $_SESSION['OrganOtherCount']; $x1++) {
																						if(isset($_SESSION['OrganOtherInputs'][$x1])){
																							echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																							echo"<a name=\"".$value3.$x1."\">\n";
																							echo"<br>".$_SESSION['OrganOtherInputs'][$x1]."</a>\n";
																							echo"</b></td></tr>\n";
																							$ttmp='';
																							if(isset($_SESSION[$value3.$x1."_date_a"])){
																								$ttmp=$_SESSION[$value3.$x1.'_date_a'];
																							}
																							echo"<tr><td width=\"155px;\" style=\"padding: 5px;text-align: left;\">".$langtxt['page2_2']."</td><td><input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3.$x1."_date_a\" name=\"".$value3.$x1."_date_a\" value=\"".$ttmp."\">&nbsp;-&nbsp;\n";
																							$ttmp='';
																							if(isset($_SESSION[$value3.$x1."_date_l"])){
																								$ttmp=$_SESSION[$value3.$x1.'_date_l'];
																							}
																							echo"<input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3.$x1."_date_l\" name=\"".$value3.$x1."_date_l\" value=\"".$ttmp."\"></td></tr>\n";
																							echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_3']."</td><td><textarea id=\"".$value3.$x1."_jarjestelyt\" name=\"".$value3.$x1."_jarjestelyt\" rows=\"4\" cols=\"50\"></textarea>\n";
																							echo"</td></tr>\n";
																							echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_4']."</td><td><textarea id=\"".$value3.$x1."_toteuttajat\" name=\"".$value3.$x1."_toteuttajat\" rows=\"2\" cols=\"50\"></textarea>\n";
																							echo"</td></tr>\n";
																							echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['Menu_TITLE2d']."&nbsp;</td><td><textarea id=\"".$value3.$x1."_kustannusarvio\" name=\"".$value3.$x1."_kustannusarvio\" rows=\"2\" cols=\"50\"></textarea>\n";
																							echo"</td></tr>\n";
																						}
																					}
																	}
																}
															}else{
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))&&($value3!='OrganOtherInputs')){
																
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br>".$langtxt[$value3]."</a>\n";
																	echo"</b></td></tr>\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_a"])){
																		$ttmp=$_SESSION[$value3.'_date_a'];
																	}
																	echo"<tr><td width=\"155px;\" style=\"padding: 5px;text-align: left;\">".$langtxt['page2_2']."</td><td><input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_a\" name=\"".$value3."_date_a\" value=\"".$ttmp."\">&nbsp;-&nbsp;\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_l"])){
																		$ttmp=$_SESSION[$value3.'_date_l'];
																	}
																	echo"<input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_l\" name=\"".$value3."_date_l\" value=\"".$ttmp."\"></td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_3']."</td><td><textarea id=\"".$value3."_jarjestelyt\" name=\"".$value3."_jarjestelyt\" rows=\"4\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_4']."</td><td><textarea id=\"".$value3."_toteuttajat\" name=\"".$value3."_toteuttajat\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['Menu_TITLE2d']."&nbsp;</td><td><textarea id=\"".$value3."_kustannusarvio\" name=\"".$value3."_kustannusarvio\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																}
															}												
														}
													}else if($key=="tyo"){
														if($key2==0){
															if($key3==0){
																echo"</tbody>\n";
																echo"</table>\n";													
																echo"</div>\n";
																echo"<script type=\"text/javascript\">\n";
																echo"	$('#tableManagement".$tablenum." tr').on('click change', function() {\n";
																echo"	  	if ($(this).find('td input:checkbox').prop('checked') === true)\n";
																echo"			$(this).find('td input:checkbox').prop('checked', false);\n";
																echo"	  	else{\n";
																echo"			$(this).find('td input:checkbox').prop('checked', true);\n";
																echo"		}\n";
																echo"	});\n";
																echo"</script>\n";
																echo"</div>\n";										
																echo"</section>\n";
																partitionHeader('comm','./img');										
																echo"<div class=\"Communityheaderrow\">\n";
																if(isset($langtxt[$value3.'h'])){
																	echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
																}
																echo"</div>\n";
																echo"<div class=\"w3-responsive\">\n";
																echo"<table class=\"w3-table\" id=\"tableManagement".$key2."\" name=\"tableManagement".$key2."\">\n";
																echo"<tbody style=\"display:table-cell\">\n";
																$tablenum=$key2;														
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))){
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br>".$langtxt[$value3]."</a>\n";
																	echo"</b></td></tr>\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_a"])){
																		$ttmp=$_SESSION[$value3.'_date_a'];
																	}
																	echo"<tr><td width=\"155px;\" style=\"padding: 5px;text-align: left;\">".$langtxt['page2_2']."</td><td><input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_a\" name=\"".$value3."_date_a\" value=\"".$ttmp."\" >&nbsp;-&nbsp;\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_l"])){
																		$ttmp=$_SESSION[$value3.'_date_l'];
																	}
																	echo"<input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_l\" name=\"".$value3."_date_l\" value=\"".$ttmp."\" ></td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_3']."</td><td><textarea id=\"".$value3."_jarjestelyt\" name=\"".$value3."_jarjestelyt\" rows=\"4\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_4']."</td><td><textarea id=\"".$value3."_toteuttajat\" name=\"".$value3."_toteuttajat\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['Menu_TITLE2d']."&nbsp;</td><td><textarea id=\"".$value3."_kustannusarvio\" name=\"".$value3."_kustannusarvio\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																}
															}else{
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))){
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br>".$langtxt[$value3]."</a>\n";
																	echo"</b></td></tr>\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_a"])){
																		$ttmp=$_SESSION[$value3.'_date_a'];
																	}
																	echo"<tr><td width=\"155px;\" style=\"padding: 5px;text-align: left;\">".$langtxt['page2_2']."</td><td><input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_a\" name=\"".$value3."_date_a\" value=\"".$ttmp."\" >&nbsp;-&nbsp;\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_l"])){
																		$ttmp=$_SESSION[$value3.'_date_l'];
																	}
																	echo"<input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_l\" name=\"".$value3."_date_l\" value=\"".$ttmp."\"></td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_3']."</td><td><textarea id=\"".$value3."_jarjestelyt\" name=\"".$value3."_jarjestelyt\" rows=\"4\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_4']."</td><td><textarea id=\"".$value3."_toteuttajat\" name=\"".$value3."_toteuttajat\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['Menu_TITLE2d']."&nbsp;</td><td><textarea id=\"".$value3."_kustannusarvio\" name=\"".$value3."_kustannusarvio\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																}
															}
														}else{
															if($key3==0){
																echo"</tbody>\n";
																echo"</table>\n";													
																echo"</div>\n";
																if(isset($langtxt[$value3.'h'])){
																	echo"<div class=\"Communityheaderrow\">\n";
																	echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
																	echo"</div>\n";
																}
																echo"<div class=\"w3-responsive\">\n";										
																echo"<table class=\"w3-table\" id=\"tableManagement".$key2."\" name=\"tableManagement".$key2."\">\n";
																$tablenum=$key2;
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))){
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br>".$langtxt[$value3]."</a>\n";
																	echo"</b></td></tr>\n";															
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_a"])){
																		$ttmp=$_SESSION[$value3.'_date_a'];
																	}
																	echo"<tr><td width=\"155px;\" style=\"padding: 5px;text-align: left;\">".$langtxt['page2_2']."</td><td><input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_a\" name=\"".$value3."_date_a\" value=\"".$ttmp."\" >&nbsp;-&nbsp;\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_l"])){
																		$ttmp=$_SESSION[$value3.'_date_l'];
																	}
																	echo"<input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_l\" name=\"".$value3."_date_l\" value=\"".$ttmp."\" ></td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_3']."</td><td><textarea id=\"".$value3."_jarjestelyt\" name=\"".$value3."_jarjestelyt\" rows=\"4\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_4']."</td><td><textarea id=\"".$value3."_toteuttajat\" name=\"".$value3."_toteuttajat\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['Menu_TITLE2d']."&nbsp;</td><td><textarea id=\"".$value3."_kustannusarvio\" name=\"".$value3."_kustannusarvio\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																}
																if($value3=='CommOtherInputs'){
																		echo"</tbody>\n";
																		echo"</table>\n";													
																		echo"</div>\n";
																		echo"<div class=\"Communityheaderrow\">\n";
																			echo"<h3>".$langtxt['otsikko_muuta']."</h3>\n";
																		echo"</div>\n";
																		$tablenum=$key2;
																		echo"<div class=\"w3-responsive\">\n";		
																	
																			echo"<table class=\"w3-table\" id=\"tableManagement".$key2."\" name=\"tableManagement".$key2."\">\n";
																				echo"<tbody style=\"display:table-cell\">\n";
																					for ($x2 = 0; $x2 < $_SESSION['CommOtherCount']; $x2++) {
																						if(isset($_SESSION['CommOtherInputs'][$x2])){
																							echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																							echo"<a name=\"".$value3.$x2."\">\n";
																							echo"<br>".$_SESSION['CommOtherInputs'][$x2]."</a>\n";
																							echo"</b></td></tr>\n";
																							$ttmp='';
																							if(isset($_SESSION[$value3.$x2."_date_a"])){
																								$ttmp=$_SESSION[$value3.$x2.'_date_a'];
																							}
																							echo"<tr><td width=\"155px;\" style=\"padding: 5px;text-align: left;\">".$langtxt['page2_2']."</td><td><input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3.$x2."_date_a\" name=\"".$value3.$x2."_date_a\" value=\"".$ttmp."\">&nbsp;-&nbsp;\n";
																							$ttmp='';
																							if(isset($_SESSION[$value3.$x2."_date_l"])){
																								$ttmp=$_SESSION[$value3.$x2.'_date_l'];
																							}
																							echo"<input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3.$x2."_date_l\" name=\"".$value3.$x2."_date_l\" value=\"".$ttmp."\"></td></tr>\n";
																							echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_3']."</td><td><textarea id=\"".$value3.$x2."_jarjestelyt\" name=\"".$value3.$x2."_jarjestelyt\" rows=\"4\" cols=\"50\"></textarea>\n";
																							echo"</td></tr>\n";
																							echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_4']."</td><td><textarea id=\"".$value3.$x2."_toteuttajat\" name=\"".$value3.$x2."_toteuttajat\" rows=\"2\" cols=\"50\"></textarea>\n";
																							echo"</td></tr>\n";
																							echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['Menu_TITLE2d']."&nbsp;</td><td><textarea id=\"".$value3.$x2."_kustannusarvio\" name=\"".$value3.$x2."_kustannusarvio\" rows=\"2\" cols=\"50\"></textarea>\n";
																							echo"</td></tr>\n";
																						}
																					}
																	}
																
															}else{
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))&&($value3!='CommOtherInputs')){														
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br>".$langtxt[$value3]."</a>\n";
																	echo"</b></td></tr>\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_a"])){
																		$ttmp=$_SESSION[$value3.'_date_a'];
																	}
																	echo"<tr><td width=\"155px;\" style=\"padding: 5px;text-align: left;\">".$langtxt['page2_2']."</td><td><input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_a\" name=\"".$value3."_date_a\" value=\"".$ttmp."\" >&nbsp;-&nbsp;\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_l"])){
																		$ttmp=$_SESSION[$value3.'_date_l'];
																	}
																	echo"<input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_l\" name=\"".$value3."_date_l\" value=\"".$ttmp."\"></td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_3']."</td><td><textarea id=\"".$value3."_jarjestelyt\" name=\"".$value3."_jarjestelyt\" rows=\"4\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_4']."</td><td><textarea id=\"".$value3."_toteuttajat\" name=\"".$value3."_toteuttajat\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['Menu_TITLE2d']."&nbsp;</td><td><textarea id=\"".$value3."_kustannusarvio\" name=\"".$value3."_kustannusarvio\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																}
															}												
														}
													}else if($key=="yks"){
														if($key2==0){
															if($key3==0){
																echo"</table>\n";														
																echo"</div>\n";										
																echo"</section>\n";
																partitionHeader('indiv','./img');
																echo"<div class=\"Individualrow\">\n";
																if(isset($langtxt[$value3.'h'])){
																	echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
																}
																echo"</div>\n";
																echo"<div class=\"w3-responsive\">\n";
																echo"<table class=\"w3-table\" id=\"tableManagement".$key2."\" name=\"tableManagement".$key2."\">\n";
																echo"<tbody style=\"display:table-cell\">\n";
																$tablenum=$key2;														
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))){
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br>".$langtxt[$value3]."</a>\n";
																	echo"</b></td></tr>\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_a"])){
																		$ttmp=$_SESSION[$value3.'_date_a'];
																	}
																	echo"<tr><td width=\"155px;\" style=\"padding: 5px;text-align: left;\">".$langtxt['page2_2']."</td><td><input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_a\" name=\"".$value3."_date_a\" value=\"".$ttmp."\">&nbsp;-&nbsp;\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_l"])){
																		$ttmp=$_SESSION[$value3.'_date_l'];
																	}
																	echo"<input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_l\" name=\"".$value3."_date_l\" value=\"".$ttmp."\" ></td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_3']."</td><td><textarea id=\"".$value3."_jarjestelyt\" name=\"".$value3."_jarjestelyt\" rows=\"4\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_4']."</td><td><textarea id=\"".$value3."_toteuttajat\" name=\"".$value3."_toteuttajat\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['Menu_TITLE2d']."&nbsp;</td><td><textarea id=\"".$value3."_kustannusarvio\" name=\"".$value3."_kustannusarvio\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																}
															}else{
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))){
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br>".$langtxt[$value3]."</a>\n";
																	echo"</b></td></tr>\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_a"])){
																		$ttmp=$_SESSION[$value3.'_date_a'];
																	}
																	echo"<tr><td width=\"155px;\" style=\"padding: 5px;text-align: left;\">".$langtxt['page2_2']."</td><td><input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_a\" name=\"".$value3."_date_a\" value=\"".$ttmp."\" >&nbsp;-&nbsp;\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_l"])){
																		$ttmp=$_SESSION[$value3.'_date_l'];
																	}
																	echo"<input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_l\" name=\"".$value3."_date_l\" value=\"".$ttmp."\"></td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_3']."</td><td><textarea id=\"".$value3."_jarjestelyt\" name=\"".$value3."_jarjestelyt\" rows=\"4\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_4']."</td><td><textarea id=\"".$value3."_toteuttajat\" name=\"".$value3."_toteuttajat\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['Menu_TITLE2d']."&nbsp;</td><td><textarea id=\"".$value3."_kustannusarvio\" name=\"".$value3."_kustannusarvio\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																}
															}
														}else{
															if($key3==0){
																echo"</tbody>\n";
																echo"</table>\n";													
																echo"</div>\n";
																if(isset($langtxt[$value3.'h'])){
																	echo"<div class=\"Individualrow\">\n";
																	echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
																	echo"</div>\n";
																}
																echo"<div class=\"w3-responsive\">\n";										
																echo"<table class=\"w3-table\" id=\"tableManagement".$key2."\" name=\"tableManagement".$key2."\">\n";
																$tablenum=$key2;
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))){
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br>".$langtxt[$value3]."</a>\n";
																	echo"</b></td></tr>\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_a"])){
																		$ttmp=$_SESSION[$value3.'_date_a'];
																	}
																	echo"<tr><td width=\"155px;\" style=\"padding: 5px;text-align: left;\">".$langtxt['page2_2']."</td><td><input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_a\" name=\"".$value3."_date_a\" value=\"".$ttmp."\">&nbsp;-&nbsp;\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_l"])){
																		$ttmp=$_SESSION[$value3.'_date_l'];
																	}
																	echo"<input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_l\" name=\"".$value3."_date_l\" value=\"".$ttmp."\"></td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_3']."</td><td><textarea id=\"".$value3."_jarjestelyt\" name=\"".$value3."_jarjestelyt\" rows=\"4\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_4']."</td><td><textarea id=\"".$value3."_toteuttajat\" name=\"".$value3."_toteuttajat\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['Menu_TITLE2d']."&nbsp;</td><td><textarea id=\"".$value3."_kustannusarvio\" name=\"".$value3."_kustannusarvio\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																}
																if((isset($langtxt[$value3]))&&($value3=='IndivOtherInputs')&&($_SESSION['IndivOtherCount']>0)){
																		echo"</tbody>\n";
																		echo"</table>\n";													
																		echo"</div>\n";
																		echo"<div class=\"Individualrow\">\n";
																		//echo"<br><pre>\n";
																		//print_r($langtxt);
																		//echo"</pre<br>\n";
																		echo"<h3>".$langtxt['otsikko_muuta']."</h3>\n";
																		echo"</div>\n";																
																		echo"<div class=\"w3-responsive\">\n";										
																		echo"<table class=\"w3-table\" id=\"tableManagement".$key2."\" name=\"tableManagement".$key2."\">\n";
																		echo"<tbody style=\"display:table-cell\">\n";
																		$tablenum=$key2;
																		foreach($_SESSION[$value3] as $key4 => $value4){
																			echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																			echo"<a name=\"".$_SESSION[$value3][$key4]."\">\n";
																			echo"<br>".$_SESSION[$value3][$key4]."</a>\n";
																			echo"</b></td></tr>\n";
																			$ttmp='';
																			if(isset($_SESSION[$value3.$key4."_date_a"])){
																				$ttmp=$_SESSION[$value3.$key4.'_date_a'];
																			}
																			echo"<tr><td width=\"155px;\" style=\"padding: 5px;text-align: left;\">".$langtxt['page2_2']."</td><td><input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3.$key4."_date_a\" name=\"".$value3.$key4."_date_a\" value=\"".$ttmp."\" >&nbsp;-&nbsp;\n";
																			$ttmp='';
																			if(isset($_SESSION[$value3.$key4."_date_l"])){
																				$ttmp=$_SESSION[$value3.$key4.'_date_l'];
																			}
																			echo"<input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3.$key4."_date_l\" name=\"".$value3.$key4."_date_l\" value=\"".$ttmp."\"></td></tr>\n";
																			echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_3']."</td><td><textarea id=\"".$value3.$key4."_jarjestelyt\" name=\"".$value3.$key4."_jarjestelyt\" rows=\"4\" cols=\"50\"></textarea>\n";
																			echo"</td></tr>\n";
																			echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_4']."</td><td><textarea id=\"".$value3.$key4."_toteuttajat\" name=\"".$value3.$key4."_toteuttajat\" rows=\"2\" cols=\"50\"></textarea>\n";
																			echo"</td></tr>\n";
																			echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['Menu_TITLE2d']."&nbsp;</td><td><textarea id=\"".$value3.$key4."_kustannusarvio\" name=\"".$value3.$key4."_kustannusarvio\" rows=\"2\" cols=\"50\"></textarea>\n";
																			echo"</td></tr>\n";
																		}
																	}
																
															}else{
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))&&($value3!='IndivOtherInputs')){														
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br>".$langtxt[$value3]."</a>\n";
																	echo"</b></td></tr>\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_a"])){
																		$ttmp=$_SESSION[$value3.'_date_a'];
																	}
																	echo"<tr><td width=\"155px;\" style=\"padding: 5px;text-align: left;\">".$langtxt['page2_2']."</td><td><input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_a\" name=\"".$value3."_date_a\" value=\"".$ttmp."\" >&nbsp;-&nbsp;\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_l"])){
																		$ttmp=$_SESSION[$value3.'_date_l'];
																	}
																	echo"<input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_l\" name=\"".$value3."_date_l\" value=\"".$ttmp."\" ></td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_3']."</td><td><textarea id=\"".$value3."_jarjestelyt\" name=\"".$value3."_jarjestelyt\" rows=\"4\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_4']."</td><td><textarea id=\"".$value3."_toteuttajat\" name=\"".$value3."_toteuttajat\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['Menu_TITLE2d']."&nbsp;</td><td><textarea id=\"".$value3."_kustannusarvio\" name=\"".$value3."_kustannusarvio\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																}
															}												
														}
													}
													
												}
											}
										}
									}
								}
								echo"</tbody>\n";
								echo"</table>\n";
								echo"</div>\n";	
								echo"<br>\n";
								/* ******************************************************************************* */
								echo"<br>\n";
								echo"<div style=\"height:30px;\">\n";
									echo"<div class=\"ui-nodisc-icon ui-alt-icon\" style=\"height:25px;\">\n";
										echo"<button type=\"submit\" name=\"bckbtn2\" id=\"bckbtn2\" class=\"ui-btn w3-circle ui-btn-icon-notext ui-btn-inline\"><i class=\"fa fa-arrow-circle-o-left\" style=\"font-size:24px;color:black\"></i></button>\n";
										echo"<button type=\"submit\" name=\"nextpage2\" id=\"nextpage2\" class=\"ui-btn w3-circle ui-btn-icon-notext ui-btn-inline\"><i class=\"fa fa-arrow-circle-o-right\" style=\"font-size:24px;color:black\"></i></button>\n";
									echo"</div>\n";
								echo"</div>\n";
							echo"</form>\n";
						echo"</div>\n";
					echo"</div>\n";
						echo"<script type=\"text/javascript\">\n";
							echo"$('#bckbtn').click(function(){\n";
							echo"	$('#page').val('sivu3');\n";
							echo"	var n_input = $('#page').val();\n";
							echo"	$('#organisaatiofrm').submit();\n";
							echo"});\n";
							echo"$('#bckbtn2').click(function(){\n";
							echo"	$('#page').val('sivu3');\n";
							echo"	var n_input = $('#page').val();\n";
							echo"	$('#organisaatiofrm').submit();\n";
							echo"});\n";
							echo"$('#nextpage2').click(function(){\n";
							echo"	$('#page').val('sivu5');\n";
							echo"	var n_input = $('#page').val();\n";
							echo"	$('#organisaatiofrm').submit();\n";
							echo"});\n";
							echo"$('#nextpage').click(function(){\n";
							echo"	$('#page').val('sivu5');\n";
							echo"	var n_input = $('#page').val();\n";
							echo"	$('#organisaatiofrm').submit();\n";
							echo"});\n";
						echo"</script>\n";
				break;
				case 'sivu5': //kello
					include_once('header2b.php');
					include_once('header2c.php');
					echo"SIVU5<br>";					
					
					echo"<div class=\"w3-container w3-white w3-padding w3-section\" style=\"margin-bottom: 2px !important;letter-spacing:4px;padding-bottom: 2px;border-bottom: 4px solid #324c62;\">\n";
						
						echo"<div class=\"w3-row-padding w3-center w3-margin-top\">\n";
							echo"<div class=\"noprint\"><br>\n";
								echo"<div class=\"w3-col w3-container w3-white\" style=\"width:150px\">\n";																												
									echo"<div style=\"text-align:left\"><button class=\"w3-btn w3-white w3-border w3-border-green w3-round-xlarge\"><i class=\"fa fa-print\" style=\"font-size:24px;\" onclick=\"window.print();\"></i>&nbsp;".$langtxt['PAGE_print']."</button></div>\n";
									echo"<br><br>";										
								echo"</div>\n";
								echo"<div class=\"w3-rest w3-container w3-white\">\n";										
									echo"<p>".$langtxt['PAGE_clockh'].$langtxt['PAGE_clockh2']."</p>\n";
								echo"</div>\n";
							echo"</div>\n";
						echo"</div>\n";
						echo"<div class=\"w3-row\">\n";
							echo"  <div class=\"w3-col w3-container w3-white\" style=\"width:250px\">\n";
								echo"<div id=\"left\" style=\"float: left; width: 220px; background: #FFFFFF; \">\n";
									echo"<section style=\"margin-bottom:50px;\"><br>\n";
										echo"<table width=\"200\" align=\"left\" border=\"1px solid #000000\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#FFFFFF\">\n";
											echo"<tbody><tr><td style=\"width:30px;border:none\"><div style=\"float: left;width: 20px;height: 20px;margin: 5px;border: 1px solid rgba(0, 0, 0, .2);background: #BF9FDE;\"></div></td><td style=\"border:none\" class=\"w3-left-align\">Organisaatiotaso</td></tr>\n";
												echo"<tr><td style=\"width:30px;border:none\"><div style=\"float: left;width: 20px;height: 20px;margin: 5px;border: 1px solid rgba(0, 0, 0, .2);background: #ACC68E;\"></div></td><td style=\"border:none\" class=\"w3-left-align\">Työyhteisötaso</td></tr>\n";
												echo"<tr><td style=\"width:30px;border:none\"><div style=\"float: left;width: 20px;height: 20px;margin: 5px;border: 1px solid rgba(0, 0, 0, .2);background: #C9E4ED;\"></div></td><td style=\"border:none\" class=\"w3-left-align\">Yksilötaso</td></tr>\n";
										echo"</tbody></table>\n";
									echo"</section><br><br>\n";
								echo"</div>\n";
							echo"</div>\n";
							echo" <div class=\"w3-rest w3-container w3-white\"><p>\n";
								echo"<div class=\"w3-row-padding w3-center w3-margin-top w3-margin-bottom\">\n";
									echo"<h1>".$langtxt['Vuosikello']."</h1>\n";
								echo"</div>\n";
							echo"</p></div>\n";							
							
							echo"<div>\n";
								echo"<center>\n";
									echo"<canvas id=\"mycanvas2\" width=\"600\" height=\"600\">Selain ei tue HTML5 Canvasia!</canvas>\n";
								echo"</center>\n";
							echo"</div>\n";
							echo"<br><div class=\"emptyrow\"></div><br>\n";
							echo"<div id=\"Dlg_overlay\"></div>\n";
							echo"<div id=\"Dlg_box\">\n";		
							echo"	<div class=\"Dlg_box_header\">&nbsp;</div>\n";
							echo"	<div class=\"Dlg_content\">\n";		
							echo"		<div id=\"Dlg_message\"></div>\n";
							echo"		<a href=\"Javascript:CloseMe();\" class=\"button\">".$lang['PAGE_close']."</a>&nbsp;&nbsp;\n";
							echo"		<a href=\"Javascript:jumpto('hallinto2');\" id=\"dlgfrmlink\">".$lang['PAGE_edit']."</a>\n";		
							echo"	</div>\n";		
							echo"</div>\n";
						echo"</div>\n";
						
						echo"<div class=\"w3-row-padding w3-center w3-margin-top\">\n";
							echo"<div class=\"noprint w3-col l10 m12\"><br>\n";
								echo"<div class=\"w3-section\">\n";
									echo"<div class=\"w3-row\">\n";
										echo"<div class=\"w3-col m4 l4 w3-center w3-white\">\n";
											echo"<form action=\"\" method=\"post\" id=\"kello1frm\" name=\"kello1frm\" class=\"organisaatiofrm\">\n";
													echo"<input type=\"hidden\" name=\"page\" id=\"page\" value=\"sivu1\">\n"; 
													echo"<input type=\"hidden\" name=\"state\" id=\"state\" value=\"edit\">\n";													
													foreach($_SESSION as $key => $value) {
														if($key!='page'){
															echo"<input type=\"hidden\" name=\"".$key."\" id=\"".$key."\" value=\"".$value."\">\n";
														}
													}
													echo"<p style=\"letter-spacing:2px;\"><input type=\"submit\" class=\"w3-btn w3-white w3-border w3-border-green w3-round-xlarge\" value=\"".$langtxt['PAGE_firstpage2']."\"></p>\n";						
											echo"</form>\n";
										echo"</div>\n";
										echo"<div class=\"w3-col m4 l4 w3-center w3-white\">\n";
											echo"<form action=\"\" method=\"post\" id=\"kello2frm\" name=\"kello1frm\" class=\"organisaatiofrm\">\n";
													echo"<input type=\"hidden\" name=\"page\" id=\"page\" value=\"sivu3\">\n"; 
													echo"<input type=\"hidden\" name=\"state\" id=\"state\" value=\"edit\">\n";
													foreach($_SESSION as $key => $value) {
														if($key!='page'){
															echo"<input type=\"hidden\" name=\"".$key."\" id=\"".$key."\" value=\"".$value."\">\n";
														}
													}
													echo"<p style=\"letter-spacing:2px;\"><input type=\"submit\" class=\"w3-btn w3-white w3-border w3-border-green w3-round-xlarge\" value=\"".$langtxt['PAGE_design']."\"></p>\n";						
											echo"</form>\n";
										echo"</div>\n";
										echo"<div class=\"w3-col m4 l4 w3-center w3-white\">\n";
											echo"<form action=\"\" method=\"post\" id=\"kello3frm\" name=\"kello1frm\" class=\"organisaatiofrm\">\n";
													echo"<input type=\"hidden\" name=\"page\" id=\"page\" value=\"sivu4\">\n"; 
													echo"<input type=\"hidden\" name=\"state\" id=\"state\" value=\"edit\">\n";
													foreach($_SESSION as $key => $value) {
														if($key!='page'){
															echo"<input type=\"hidden\" name=\"".$key."\" id=\"".$key."\" value=\"".$value."\">\n";
														}
													}
													echo"<p style=\"letter-spacing:2px;\"><input type=\"submit\" class=\"w3-btn w3-white w3-border w3-border-green w3-round-xlarge\" value=\"".$langtxt['PAGE_calender']."\"></p>\n";						
											echo"</form>\n";
										echo"</div>\n";
									echo"</div>\n";
								echo"</div>\n";
							echo"</div>\n";
						echo"</div>\n";
						
						echo"<div class=\"w3-container w3-section\" style=\"background-color: #FFFFFF;\">\n";
							echo"<div class=\"w3-responsive\">\n";
								echo"<table class=\"w3-table-all w3-card-4\">\n";
									echo"<tr>\n";
									  echo"<th style=\"word-wrap: break-word;\">Kysymys</th>\n";
									  echo"<th style=\"word-wrap: break-word;\">PVM</th>\n";
									  echo"<th style=\"word-wrap: break-word;\">Kustannus (kustannusarvio)</th>\n";
									  echo"<th style=\"word-wrap: break-word;\">J&auml;rjestelyt/Toteuttaja</th>\n";
									  echo"<th style=\"word-wrap: break-word;\">Toteutuminen</th>\n";
									echo"</tr>\n";
									echo"<tr>\n";
									  echo"<td style=\"word-wrap: break-word;\">Jillasdf asdf asdfasdf asdf asdfasd f</td>\n";
									  echo"<td style=\"word-wrap: break-word;\">12.12.1212 - 14.14.1414</td>\n";
									  echo"<td style=\"word-wrap: break-word;\">5021</td>\n";
									  echo"<td style=\"word-wrap: break-word;\">Jillasdf asdf asdfasdf asdf asdfasd f</td>\n";
									  echo"<td style=\"word-wrap: break-word;\">Kyllä</td>\n";
									echo"</tr>\n";
									echo"<tr>\n";
									  echo"<td style=\"word-wrap: break-word;\">Eveasd fasd fasdf asdf asdfasdf</td>\n";
									  echo"<td style=\"word-wrap: break-word;\">12.12.1212 - 14.14.1414</td>\n";
									  echo"<td style=\"word-wrap: break-word;\">999</td>\n";
									  echo"<td style=\"word-wrap: break-word;\">Jillasdf asdf asdfasdf asdf asdfasd f</td>\n";
									  echo"<td style=\"word-wrap: break-word;\">Kyllä</td>\n";
									echo"</tr>\n";
									echo"<tr>\n";
										echo"<td style=\"word-wrap: break-word;\">Adam</td>\n";
										echo"<td style=\"word-wrap: break-word;\">Johnson</td>\n";
										echo"<td style=\"word-wrap: break-word;\">67</td>\n";
										echo"<td style=\"word-wrap: break-word;\">Jillasdf asdf asdfasdf asdf asdfasd f</td>\n";
										echo"<td style=\"word-wrap: break-word;\">Kesken</td>\n";
									echo"</tr>\n";
								echo"</table>\n";
							echo"</div>\n";
						echo"</div>\n";
					echo"</div>\n";
					echo"				<script type=\"text/javascript\">\n";		
						echo"					var myColor = [\"#FFFFFF\",\"#FFFAAA\",\"#FFFFFF\",\"#FFFAAA\",\"#FFFFFF\",\"#FFFFAA\",\"#FFFFFF\",\"#FFFFAA\",\"#FFFFFF\",\"#FFFFAA\",\"#FFFFFF\",\"#FFFFAA\"];\n";
						echo"					var myData = [10,10,10,10,10,10,10,10,10,10,10,10];\n";
						echo"					var selectedchecks=[];\n";
						echo" 					var datat = ". json_encode($organisaatiodata) . ';';
						
						echo"					var middleX=300;\n";
						echo"					var middleY=300;\n";
						echo"					var startPoint=0;\n";
						echo"					var endPoint=0;\n";
						echo"					var pointCount=0;\n";
						echo"					var keha=0;\n";
						echo"					var spacebetween=0;\n";		
						echo"					var startPointx=0;\n";
						echo"					var startPointy=0;\n";
						echo"					keha = (2*Math.PI);\n";
						echo"					spacebetween = (keha/12)/10\n";		
						echo"					vali=(spacebetween); \n";
						echo"					var circler=middleX;\n";
						echo"					var vahennys=35;\n";
						/* FOR kk*/
						
						/* FOR kk loppu*/
						echo"					function popup(message,delmessage,alinks) {\n";
						echo"						// get the screen height and width  \n";
						echo"						var maskHeight = $(document).height();\n";  
						echo"						var maskWidth = $(window).width();\n";
						echo"						// calculate the values for center alignment\n";
						echo"						var dialogTop =  (maskHeight/3) - ($('#Dlg_box').height());  \n";
						echo"						var dialogLeft = (maskWidth/2) - ($('#Dlg_box').width()/2); \n";
						echo"						$('#Dlg_overlay').css({height:maskHeight, width:maskWidth}).show();\n";
						echo"						$('#Dlg_box').css({top:dialogTop, left:dialogLeft}).show();\n";
						echo"						$('#Dlg_message').html(message);\n";
						echo"						$('#dlgfrmlink').attr('href','Javascript:jumpto(\''+alinks+'\')');\n";
						//echo"						$('#dlgfrmlink').location.href = '#' + 'ykstalous_1';\n";
						//echo"						document.querySelector('#dlgfrmlink').setAttribute('href', 'index.php?page=sivu2&prevpage=sivu3#hallinto2');\n";
						
						//echo"						$('#Dlg_del').html(delmessage);\n";
						echo"					}\n";
						echo"					function CloseMe() {\n";
						//echo"						$( \"#Dlg_box\" ).hide();\n";
						echo"						$('#Dlg_box').hide();\n";
						echo"						$('#Dlg_overlay').hide();\n";		
						//echo"						$('#Dlg_box').dialog('close');\n";
						echo"					}\n";

						echo"					function jumpto(anchor){\n";
						echo"						try {\n";	
						echo"							window.location.assign(\"index.php?page=sivu2&prevpage=sivu3&thispage=sivu3#\"+anchor);\n";	
						echo"						} catch(e){\n";
						echo"							console.log(e)\n";
						echo"						}\n";
						echo"					}\n";
						echo"					var tmp='';\n";
						echo"					function intersects(x, y, cx, cy, r) {\n";
						echo"						var dx = x-cx\n";
						echo"						var dy = y-cy\n";
						echo"						return dx*dx+dy*dy <= r*r\n";
						echo"					}\n";
						echo"					function toUTF16(codePoint) {\n";
						echo"						var TEN_BITS = parseInt('1111111111', 2);\n";
						echo"						function u(codeUnit) {\n";
						echo"							tmp=codeUnit.toString(16).toUpperCase();\n";  // poistettu alusta \u+										
						echo"						}\n";
						echo"						if (codePoint <= 0xFFFF) {\n";
						echo"							return u(codePoint);\n";
						echo"						}\n";
						echo"						codePoint -= 0x10000;\n";
						echo"						var leadSurrogate = 0xD800 + (codePoint >> 10);\n";
						echo"						var tailSurrogate = 0xDC00 + (codePoint & TEN_BITS);\n";
						echo"						return u(leadSurrogate) + u(tailSurrogate);\n";
						echo"					}\n";
						echo"					function getTotal(){\n";
						echo"						var myTotal = 0;\n";
						echo"						for (var j = 0; j < myData.length; j++) {\n";
						echo"						myTotal += (typeof myData[j] == 'number') ? myData[j] : 0;\n";
						echo"						}\n";
						echo"						return myTotal;\n";
						echo"					}\n";
						echo"					function Circle(x, y, r){\n";
						echo"					        this.x = x;\n";
						echo"					        this.y = y;\n";
						echo"					        this.r = r;\n";
						echo"					}\n";
						echo"					function plotData2() {\n";
						echo"						var canvas;\n";
						echo"						var ctx;\n";
						echo"						var lastend = 0;\n";
						echo"						var myTotal = getTotal();\n";
						echo"						canvas = document.getElementById(\"mycanvas2\");\n";
						echo"						ctx = canvas.getContext(\"2d\");\n";
						echo"						ctx.clearRect(0, 0, canvas.width, canvas.height);\n";
						echo"						var maxWidth = 320;\n";
						echo"						var lineHeight = 25;\n";
						echo"						var x = (canvas.width - maxWidth) / 2;\n";
						echo"						var y = 250;\n";
						echo"						var text\n";
						echo"						var deg = 0;\n";
						echo"	\n";			
						echo"						text='';\n";		
						echo"						var circler=275;\n";
						
						
						echo"						ctx.globalAlpha = 1.0;\n";
						echo"						ctx.beginPath();\n";
						echo"						ctx.fillStyle = '#BF9FDE';\n";
						echo"						ctx.moveTo(circler+23,circler+23);\n";
						echo"						ctx.arc(circler+26, circler+26, 274, 0, Math.PI * 2, true);\n";		
						echo"						ctx.fill();\n";
						echo"						ctx.stroke();\n";	
						echo"			    		ctx.closePath();\n";
						echo"						ctx.globalAlpha = 1.0;\n";
						echo"						ctx.beginPath();\n";
						echo"						ctx.fillStyle ='#ACC68E'\n";
						echo"						ctx.arc(circler+25, circler+25, 215, 0, Math.PI * 2, true);\n";
						echo"						ctx.fill();\n";		
						echo"						ctx.stroke();\n";	
						echo"			    		ctx.closePath();\n";	
						echo"						ctx.globalAlpha = 1.0;\n";
						echo"						ctx.beginPath();\n";
						echo"						ctx.fillStyle ='#C9E4ED'\n";
						echo"						ctx.arc(circler+25, circler+25, 140, 0, Math.PI * 2, true);\n";
						echo"						ctx.fill();\n";		
						echo"						ctx.stroke();\n";	
						echo"			    		ctx.closePath();\n";
						
						/* Sektorit */
						
						echo"						ctx.fillStyle =\"#FFFFFF\";";
						echo"						for (var i = 0; i < myData.length; i++) {\n";				
						echo"							ctx.beginPath();\n";
						echo"							ctx.globalAlpha = 0.1;\n";
						echo"							ctx.moveTo(circler+25,circler+26);\n";
						echo"							ctx.arc(circler+25,circler+26,circler,lastend,lastend+\n";
						echo"							  (Math.PI*2*(myData[i]/myTotal)),false);\n";		
						echo"							ctx.fill();\n";
						echo"							ctx.linewidth=5;\n";
						echo"							ctx.strokestyle=\"#AAAAAA\";\n";
						echo"						ctx.globalAlpha = 1.0;\n";
						echo"							ctx.lineTo(circler+25,circler+27);\n";
						echo"							ctx.stroke();\n";
						echo"						    ctx.closePath();\n";				
						echo"							lastend += Math.PI*2*(myData[i]/myTotal);\n";
						echo"						}\n";
						
						
						//echo"						ctx.endPath();\n";
						
						echo"						ctx.globalAlpha = 1.0;\n";
						echo"						ctx.beginPath();\n";				
						echo"						ctx.save();\n";
						echo"						ctx.translate( canvas.width / 2, canvas.height / 2 );\n";
						echo"						ctx.rotate( (5*Math.PI) / 2.85 );\n";
						echo"						ctx.font = \"24px serif\";\n";			
						echo"						ctx.textAlign = \"center\";	\n";		
						echo"						ctx.fillStyle = '#000000';\n";			
						echo"						ctx.save;\n";
						echo"						text = 'Marras';\n";
						echo"						ctx.translate(5,1);\n";
						echo"						deg=(Math.pi/4);\n";	
						echo"						ctx.rotate(deg);\n";
						echo"						ctx.fillText(text, 5, -275);\n";
						echo"						ctx.restore();\n";
						echo"\n";						
						echo"						ctx.save();\n";
						echo"						ctx.translate( canvas.width / 2, canvas.height / 2 );\n";
						echo"						ctx.rotate( (5*Math.PI) / 2.6 );\n";
						echo"						ctx.font = \"24px serif\";\n";			
						echo"						ctx.textAlign = \"center\";\n";			
						echo"						ctx.fillStyle = '#000000';\n";			
						echo"						ctx.save;\n";
						echo"						text = 'Joulu';\n";
						echo"						ctx.translate(5,1);\n";
						echo"						deg=(Math.pi/4)+20;\n";	
						echo"						ctx.rotate(deg);\n";
						echo"						ctx.fillText(text, 0, -275);\n";
						echo"						ctx.restore();\n";
						echo"\n";	
						
						echo"						ctx.save();\n";
						echo"						ctx.translate( canvas.width / 2, canvas.height / 2 );\n";
						echo"						ctx.rotate( -(6*Math.PI) / 1.53 );\n";
						echo"						ctx.font = \"24px serif\";\n";			
						echo"						ctx.textAlign = \"center\";\n";			
						echo"						ctx.fillStyle = '#000000';\n";			
						echo"						ctx.save;\n";
						echo"						text = 'Tammi';\n";
						echo"						ctx.translate(305,-270);\n";
						echo"						deg=(Math.pi);	\n";
						echo"						ctx.rotate(deg);\n";
						echo"						ctx.fillText(text, -300, -5);\n";
						echo"						ctx.restore();\n";
						echo"\n";						
						echo"						ctx.save();\n";
						echo"						ctx.translate( canvas.width / 2, canvas.height / 2 );\n";
						echo"						ctx.rotate( -(6*Math.PI) / 1.60 );\n";
						echo"						ctx.font = \"24px serif\";\n";			
						echo"						ctx.textAlign = \"center\";\n";			
						echo"						ctx.fillStyle = '#000000';	\n";		
						echo"						ctx.save;\n";
						echo"						text = 'Helmi';\n";
						echo"						ctx.translate(275,-272);\n";
						echo"						deg=(Math.pi);\n";	
						echo"						ctx.rotate(deg);\n";
						echo"						ctx.fillText(text, -280, -5);\n";
						echo"						ctx.restore();\n";
						echo"\n";						
						echo"						ctx.save();\n";
						echo"						ctx.translate( canvas.width / 2, canvas.height / 2 );\n";
						echo"						ctx.rotate( -(6*Math.PI) / 1.67 );\n";
						echo"						ctx.font = \"24px serif\";\n";			
						echo"						ctx.textAlign = \"center\";\n";			
						echo"						ctx.fillStyle = '#000000';	\n";		
						echo"						ctx.save;\n";
						echo"						text = 'Maalis';\n";
						echo"						ctx.translate(285,-272);\n";
						echo"						deg=(Math.pi);\n";	
						echo"						ctx.rotate(deg);\n";
						echo"						ctx.fillText(text, -280, -5);\n";
						echo"						ctx.restore();\n";
						echo"\n";						
					
						echo"						ctx.save();\n";
						echo"						ctx.translate( canvas.width / 2, canvas.height / 2 );\n";
						echo"						ctx.rotate( -(6*Math.PI) / 1.76 );\n";
						echo"						ctx.font = \"24px serif\";\n";			
						echo"						ctx.textAlign = \"center\";\n";			
						echo"						ctx.fillStyle = '#000000';\n";			
						echo"						ctx.save;\n";
						echo"						text = 'Huhti';\n";
						echo"						ctx.translate(275,-272);\n";
						echo"						deg=(Math.pi);\n";	
						echo"						ctx.rotate(deg);\n";
						echo"						ctx.fillText(text, -280, -5);\n";
						echo"						ctx.restore();\n";
												
						echo"						ctx.save();\n";
						echo"						ctx.translate( canvas.width / 2, canvas.height / 2 );\n";
						echo"						ctx.rotate( -(6*Math.PI) / 1.85 );\n";
						echo"						ctx.font = \"24px serif\";\n";			
						echo"						ctx.textAlign = \"center\";\n";			
						echo"						ctx.fillStyle = '#000000';	\n";		
						echo"						ctx.save;\n";
						echo"						text = 'Touko';\n";
						echo"						ctx.translate(275,-272);\n";
						echo"						deg=(Math.pi);	\n";
						echo"						ctx.rotate(deg);\n";
						echo"						ctx.fillText(text, -280, -5);\n";
						echo"						ctx.restore();\n";
						echo"\n";	
							
						echo"						ctx.save();\n";
						echo"						ctx.translate( canvas.width / 2, canvas.height / 2 );\n";
						echo"						ctx.rotate( -(6*Math.PI) / 1.94 );\n";
						echo"						ctx.font = \"24px serif\";\n";			
						echo"						ctx.textAlign = \"center\";\n";			
						echo"						ctx.fillStyle = '#000000';	\n";		
						echo"						ctx.save;\n";
						echo"						text = 'Kes\u00E4';\n";
						echo"						ctx.translate(275,-272);\n";
						echo"						deg=(Math.pi);	\n";
						echo"						ctx.rotate(deg);\n";
						echo"						ctx.fillText(text, -280, -5);\n";
						echo"						ctx.restore();\n";
						echo"\n";
						
						echo"						ctx.save();\n";
						echo"						ctx.translate( canvas.width / 2, canvas.height / 2 );\n";
						echo"						ctx.rotate( -(6*Math.PI) / 2.06 );\n";
						echo"						ctx.font = \"24px serif\";\n";			
						echo"						ctx.textAlign = \"center\";\n";			
						echo"						ctx.fillStyle = '#000000';\n";			
						echo"						ctx.save;\n";
						echo"						text = 'Hein\u00E4';\n";
						echo"						ctx.translate(275,-272);\n";
						echo"						deg=(Math.pi);	\n";
						echo"						ctx.rotate(deg);\n";
						echo"						ctx.fillText(text, -280, -5);\n";
						echo"						ctx.restore();\n";
						echo"\n";						
						echo"						ctx.save();\n";
						echo"						ctx.translate( canvas.width / 2, canvas.height / 2 );\n";
						echo"						ctx.rotate( -(6*Math.PI) / 2.18 );\n";
						echo"						ctx.font = \"24px serif\";\n";			
						echo"						ctx.textAlign = \"center\";\n";			
						echo"						ctx.fillStyle = '#000000';	\n";		
						echo"						ctx.save;\n";
						echo"						text = 'Elo';\n";
						echo"						ctx.translate(275,-272);\n";
						echo"						deg=(Math.pi);	\n";
						echo"						ctx.rotate(deg);\n";
						echo"						ctx.fillText(text, -280, -5);\n";
						echo"						ctx.restore();\n";
						echo"\n";		
						
						echo"						ctx.save();\n";
						echo"						ctx.translate( canvas.width / 2, canvas.height / 2 );\n";
						echo"						ctx.rotate( -(6*Math.PI) / 2.32 );\n";
						echo"						ctx.font = \"24px serif\";\n";			
						echo"						ctx.textAlign = \"center\";\n";			
						echo"						ctx.fillStyle = '#000000';	\n";		
						echo"						ctx.save;\n";
						echo"						text = 'Syys';\n";
						echo"						ctx.translate(275,-272);\n";
						echo"						deg=(Math.pi);	\n";
						echo"						ctx.rotate(deg);\n";
						echo"						ctx.fillText(text, -280, -5);\n";
						echo"						ctx.restore();\n";
						echo"\n";	
						
						echo"						ctx.save();\n";
						echo"						ctx.translate( canvas.width / 2, canvas.height / 2 );\n";
						echo"						ctx.rotate( -(6*Math.PI) / 2.50 );\n";
						echo"						ctx.font = \"24px serif\";\n";			
						echo"						ctx.textAlign = \"center\";\n";			
						echo"						ctx.fillStyle = '#000000';\n";			
						echo"						ctx.save;\n";
						echo"						text = 'Loka';\n";
						echo"						ctx.translate(275,-272);\n";
						echo"						deg=(Math.pi);	\n";
						echo"						ctx.rotate(deg);\n";
						echo"						ctx.fillText(text, -280, -5);\n";
						echo"						ctx.restore();	\n";					
							 
						echo"					    ctx.closePath();\n";
						echo"						ctx.stroke();\n";		
						
						echo"					}\n";
						
						
						echo"					function Circle2(x, y, r){\n";
						echo"					        this.x = x;\n";
						echo"					        this.y = y;\n";
						echo"					        this.r = r;\n";
						echo"					}\n";
						//echo"					plotData();\n";
						echo"					plotData2();\n";
						echo"				</script>\n";
				break;
				case 'sivu6': //toteutuminen
				echo"PAGE6";
				prs('sess');
					echo"<div class=\"w3-container w3-white w3-padding w3-section\" style=\"margin-bottom: 2px !important;letter-spacing:4px;padding-bottom: 2px;border-bottom: 4px solid #324c62;\">\n";				
						echo"SIVU4<br>";
						echo"<div class=\"w3-container\" style=\"background-color: #FFFFFF;padding:0px;margin:0px;\">\n";
							echo"<form action=\"\" method=\"post\" id=\"sivu4frm\" name=\"sivu4frm\" class=\"organisaatiofrm\">\n";
								echo"<input type=\"hidden\" name=\"page\" id=\"page\" value=\"sivu5\">\n";
								foreach($_SESSION as $key => $value) {
									if($key!='page'){
										echo"<input type=\"hidden\" name=\"".$key."\" id=\"".$key."\" value=\"".$value."\">\n";
									}
								}
								echo"<div style=\"height:30px;\">\n";
									echo"<div class=\"ui-nodisc-icon ui-alt-icon\" style=\"height:25px;\">\n";
										echo"<button type=\"submit\" name=\"bckbtn\" id=\"bckbtn\" class=\"ui-btn w3-circle ui-btn-icon-notext ui-btn-inline\"><i class=\"fa fa-arrow-circle-o-left\" style=\"font-size:24px;color:black\"></i></button>\n";
										echo"<button type=\"submit\" name=\"nextpage\" id=\"nextpage\" class=\"ui-btn w3-circle ui-btn-icon-notext ui-btn-inline\"><i class=\"fa fa-arrow-circle-o-right\" style=\"font-size:24px;color:black\"></i></button>\n";
									echo"</div>\n";
								echo"</div><br>\n";
								/* ******************************************************************************* */
								
								foreach($varArray as $key => $value)
								{				
									if (is_array($value))			
									{							
										foreach ($value as $key2 => $value2)
										{
											if (is_array($value2))
											{								
												foreach ($value2 as $key3 => $value3)
												{							
													if($key=="org"){
														if($key2==0){
															if($key3==0){
																partitionHeader('org','./img');										
																echo"<div class=\"Orgheaderrow\">\n";
																if(isset($langtxt[$value3.'h'])){
																	echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
																}
																echo"</div>\n";
																
																echo"<div class=\"w3-responsive\">\n";
																echo"<table class=\"w3-table\" id=\"tableManagement".$key2."\" name=\"tableManagement".$key2."\">\n";
																echo"<tbody style=\"display:table-cell\">\n";
																$tablenum=$key2;
																
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))){
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br><b>".$langtxt[$value3]."</b></a>\n";
																	echo"</b></td></tr>\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_a"])){
																		$ttmp="value=".$_SESSION[$value3.'_date_a'];
																	}
																	
																}
															}else{
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))){
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br><b>".$langtxt[$value3]."</b></a>\n";
																	echo"</b></td></tr>\n";
																	
																}
															}
														}else{
															if($key3==0){
																echo"</tbody>\n";
																echo"</table>\n";													
																echo"</div>\n";
																if(isset($langtxt[$value3.'h'])){
																	echo"<div class=\"Orgheaderrow\">\n";
																	echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
																	echo"</div>\n";
																}
																echo"<div class=\"w3-responsive\">\n";										
																echo"<table class=\"w3-table\" id=\"tableManagement".$key2."\" name=\"tableManagement".$key2."\">\n";
																echo"<tbody style=\"display:table-cell\">\n";
																$tablenum=$key2;
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on')&&($value3!='OrganOtherInputs'))){														
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br>".$langtxt[$value3]."</a>\n";
																	echo"</b></td></tr>\n";
																	
																}else{
																	if($value3=='OrganOtherInputs'){
																		echo"</tbody>\n";
																		echo"</table>\n";													
																		echo"</div>\n";
																		echo"<div class=\"Orgheaderrow\">\n";
																			echo"<h3>".$langtxt['otsikko_muuta']."</h3>\n";
																		echo"</div>\n";
																		$tablenum=$key2;
																		echo"<div class=\"w3-responsive\">\n";										
																			echo"<table class=\"w3-table\" id=\"tableManagement".$key2."\" name=\"tableManagement".$key2."\">\n";
																				echo"<tbody style=\"display:table-cell\">\n";
																					for ($x1 = 0; $x1 < $_SESSION['OrganOtherCount']; $x1++) {
																						if(isset($_SESSION['OrganOtherInputs'][$x1])){
																							echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																							echo"<a name=\"".$value3.$x1."\">\n";
																							echo"<br>".$_SESSION['OrganOtherInputs'][$x1]."</a>\n";
																							echo"</b></td></tr>\n";																							
																						}
																					}
																	}
																}
															}else{
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))&&($value3!='OrganOtherInputs')){
																
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br>".$langtxt[$value3]."</a>\n";
																	echo"</b></td></tr>\n";
																	
																}
															}												
														}
													}else if($key=="tyo"){
														if($key2==0){
															if($key3==0){
																echo"</tbody>\n";
																echo"</table>\n";													
																echo"</div>\n";
																
																echo"</div>\n";										
																echo"</section>\n";
																partitionHeader('comm','./img');										
																echo"<div class=\"Communityheaderrow\">\n";
																if(isset($langtxt[$value3.'h'])){
																	echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
																}
																echo"</div>\n";
																echo"<div class=\"w3-responsive\">\n";
																echo"<table class=\"w3-table\" id=\"tableManagement".$key2."\" name=\"tableManagement".$key2."\">\n";
																echo"<tbody style=\"display:table-cell\">\n";
																$tablenum=$key2;														
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))){
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br>".$langtxt[$value3]."</a>\n";
																	echo"</b></td></tr>\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_a"])){
																		$ttmp=$_SESSION[$value3.'_date_a'];
																	}
																	echo"<tr><td width=\"155px;\" style=\"padding: 5px;text-align: left;\">".$langtxt['page2_2']."</td><td><input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_a\" name=\"".$value3."_date_a\" value=\"".$ttmp."\" >&nbsp;-&nbsp;\n";
																	
																}
															}else{
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))){
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br>".$langtxt[$value3]."</a>\n";
																	echo"</b></td></tr>\n";
																	
																}
															}
														}else{
															if($key3==0){
																echo"</tbody>\n";
																echo"</table>\n";													
																echo"</div>\n";
																if(isset($langtxt[$value3.'h'])){
																	echo"<div class=\"Communityheaderrow\">\n";
																	echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
																	echo"</div>\n";
																}
																echo"<div class=\"w3-responsive\">\n";										
																echo"<table class=\"w3-table\" id=\"tableManagement".$key2."\" name=\"tableManagement".$key2."\">\n";
																$tablenum=$key2;
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))){
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br>".$langtxt[$value3]."</a>\n";
																	echo"</b></td></tr>\n";															
																	
																}
																if($value3=='CommOtherInputs'){
																		echo"</tbody>\n";
																		echo"</table>\n";													
																		echo"</div>\n";
																		echo"<div class=\"Communityheaderrow\">\n";
																			echo"<h3>".$langtxt['otsikko_muuta']."</h3>\n";
																		echo"</div>\n";
																		$tablenum=$key2;
																		echo"<div class=\"w3-responsive\">\n";		
																	
																			echo"<table class=\"w3-table\" id=\"tableManagement".$key2."\" name=\"tableManagement".$key2."\">\n";
																				echo"<tbody style=\"display:table-cell\">\n";
																					for ($x2 = 0; $x2 < $_SESSION['CommOtherCount']; $x2++) {
																						if(isset($_SESSION['CommOtherInputs'][$x2])){
																							echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																							echo"<a name=\"".$value3.$x2."\">\n";
																							echo"<br>".$_SESSION['CommOtherInputs'][$x2]."</a>\n";
																							echo"</b></td></tr>\n";
																							
																						}
																					}
																	}
																
															}else{
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))&&($value3!='CommOtherInputs')){														
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br>".$langtxt[$value3]."</a>\n";
																	echo"</b></td></tr>\n";
																	
																}
															}												
														}
													}else if($key=="yks"){
														if($key2==0){
															if($key3==0){
																echo"</table>\n";														
																echo"</div>\n";										
																echo"</section>\n";
																partitionHeader('indiv','./img');
																echo"<div class=\"Individualrow\">\n";
																if(isset($langtxt[$value3.'h'])){
																	echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
																}
																echo"</div>\n";
																echo"<div class=\"w3-responsive\">\n";
																echo"<table class=\"w3-table\" id=\"tableManagement".$key2."\" name=\"tableManagement".$key2."\">\n";
																echo"<tbody style=\"display:table-cell\">\n";
																$tablenum=$key2;														
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))){
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br>".$langtxt[$value3]."</a>\n";
																	echo"</b></td></tr>\n";
																	
																}
															}else{
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))){
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br>".$langtxt[$value3]."</a>\n";
																	echo"</b></td></tr>\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_a"])){
																		$ttmp=$_SESSION[$value3.'_date_a'];
																	}
																	
																}
															}
														}else{
															if($key3==0){
																echo"</tbody>\n";
																echo"</table>\n";													
																echo"</div>\n";
																if(isset($langtxt[$value3.'h'])){
																	echo"<div class=\"Individualrow\">\n";
																	echo"<h3>".$langtxt[$value3.'h']."</h3>\n";
																	echo"</div>\n";
																}
																echo"<div class=\"w3-responsive\">\n";										
																echo"<table class=\"w3-table\" id=\"tableManagement".$key2."\" name=\"tableManagement".$key2."\">\n";
																$tablenum=$key2;
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))){
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br>".$langtxt[$value3]."</a>\n";
																	echo"</b></td></tr>\n";
																	
																}
																if((isset($langtxt[$value3]))&&($value3=='IndivOtherInputs')&&($_SESSION['IndivOtherCount']>0)){
																		echo"</tbody>\n";
																		echo"</table>\n";													
																		echo"</div>\n";
																		echo"<div class=\"Individualrow\">\n";
																		//echo"<br><pre>\n";
																		//print_r($langtxt);
																		//echo"</pre<br>\n";
																		echo"<h3>".$langtxt['otsikko_muuta']."</h3>\n";
																		echo"</div>\n";																
																		echo"<div class=\"w3-responsive\">\n";										
																		echo"<table class=\"w3-table\" id=\"tableManagement".$key2."\" name=\"tableManagement".$key2."\">\n";
																		echo"<tbody style=\"display:table-cell\">\n";
																		$tablenum=$key2;
																		foreach($_SESSION[$value3] as $key4 => $value4){
																			echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																			echo"<a name=\"".$_SESSION[$value3][$key4]."\">\n";
																			echo"<br>".$_SESSION[$value3][$key4]."</a>\n";
																			echo"</b></td></tr>\n";
																			
																		}
																	}
																
															}else{
																if((isset($langtxt[$value3]))&&(isset($_SESSION[$value3.'_chk'])&&($_SESSION[$value3.'_chk']=='on'))&&($value3!='IndivOtherInputs')){														
																	echo"<tr><td colspan=\"2\" style=\"padding-left: 5px;\"><b>\n";
																	echo"<a name=\"".$value3."\">\n";
																	echo"<br>".$langtxt[$value3]."</a>\n";
																	echo"</b></td></tr>\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_a"])){
																		$ttmp=$_SESSION[$value3.'_date_a'];
																	}
																	echo"<tr><td width=\"155px;\" style=\"padding: 5px;text-align: left;\">".$langtxt['page2_2']."</td><td><input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_a\" name=\"".$value3."_date_a\" value=\"".$ttmp."\" >&nbsp;-&nbsp;\n";
																	$ttmp='';
																	if(isset($_SESSION[$value3."_date_l"])){
																		$ttmp=$_SESSION[$value3.'_date_l'];
																	}
																	echo"<input type=\"text\" data-role=\"date\" data-inline=\"true\" id=\"".$value3."_date_l\" name=\"".$value3."_date_l\" value=\"".$ttmp."\" ></td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_3']."</td><td><textarea id=\"".$value3."_jarjestelyt\" name=\"".$value3."_jarjestelyt\" rows=\"4\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['page2_4']."</td><td><textarea id=\"".$value3."_toteuttajat\" name=\"".$value3."_toteuttajat\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																	echo"<tr><td width=\"155px;\" style=\"padding: 2px;text-align: left;vertical-align: middle;\">".$langtxt['Menu_TITLE2d']."&nbsp;</td><td><textarea id=\"".$value3."_kustannusarvio\" name=\"".$value3."_kustannusarvio\" rows=\"2\" cols=\"50\"></textarea>\n";
																	echo"</td></tr>\n";
																}
															}												
														}
													}
													
												}
											}
										}
									}
								}
				break;
				case 'sivu7': //kustannukset
				break;
			}
		}
include_once('footer.php');
?>