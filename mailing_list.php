<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<title>mailing list</title>
		<meta name='autor' content='R.A.'>
		<meta name='keywords' content='mailing list, email, weblog, blog, R.A.'>
		<meta name='description' content='Subscribe to our mailing list'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<link rel='stylesheet' href='global.css'>
		<style>
body{background-color:white;}
		</style>
	</head>
	<body>
		<?php $PAGE="mailing list"; include 'template.php';?>
		<?php
			if($_SERVER["REQUEST_METHOD"=="POST"){
				if(empty($_POST["email"])){
					$error="It's empty!";
					include 'mailing_list_form.php';
				}
				else{
					echo "<span class='SUBED'>Subscribed; Thanks.</span>";
					$mailing_list=fopen("MATHcircle_mailing_list_007","a");
					fwrite($mailing_list,date("Y-m-d l H:i:s")."::\n");
					fwrite($mailing_list,$_POST["email"]);
					fwrite($mailing_list,"\nEND OF SUBSCRIBE. *******\n\n");
					fclose($mailing_list);
				}
			}
			else include 'mailing_list_form.php';
		?>
	</body>
</html>
