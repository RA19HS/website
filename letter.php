<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<title>letter</title>
		<meta name='autor' content='R.A.'>
		<meta name='keywords' content='contact, weblog, blog, R.A.'>
		<meta name='description' content='Leave a letter'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<link rel='stylesheet' href='global.css'>
		<style>
body{background-color:white;}
.F{min-width:321px;width:31%;padding:13px;background-color:rgb(220,220,210);border-radius:7px;}
.SENT{font-weight:bold;color:lime;text-shadow:0 0 5px yellow;}
textarea{box-sizing:border-box;width:100%;margin:7px 0;border:1px solid gray;border-radius:4px;
	background-color:rgb(255,241,173);padding:13px;resize:vertical;transition:background-color 0.21s,border 0.21s;}
textarea:focus{background-color:rgb(255,229,153);border:1px solid red;}textarea:hover{border:1px solid black;}
input[type='submit']{box-sizing:border-box;width:100%;margin:7px 0;background-color:black;color:white;border:none;
	padding:8px;font-weight:bold;border-radius:4px;opacity:0.6;transition:opacity 0.21s;}input:hover{opacity:1.0;}
		</style>
	</head>
	<body>
		<?php $PAGE="letter"; include 'template.php';?>
		<?php
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				if(empty($_POST["letter"])){
					$error="It's empty!";
					include 'letter_form.php';
				}
				else{
					echo "<span class='SENT'>Sent; Thanks.</span>";
					$mailbox=fopen("MATHcircle_mailbox_007","a");
					fwrite($mailbox,date("Y-m-d l H:i:s")."::\n");
					fwrite($mailbox,$_POST["letter"]);
					fwrite($mailbox,"\nEND OF MAIL. *******\n\n");
					fclose($mailbox);
				}
			}
			else include 'letter_form.php';
		?>
	</body>
</html>
