<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
	<title>No Plagiarism</title>
	<script type="text/javascript" src="functions.js"></script>
</head>
<body>
	
	<!-- ÜLEMINE MENÜÜ --->
	<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
	<div class="navbar-header">
	
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="">No Plagiarism</a>
	</div>

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<?php
				if($_SESSION["logged_in_user_group_id"] != "2"){
					echo '<li><a href="data.php">Tellimuse esitamine</a></li>';
				} 
			?>
			<li><a href="requests.php">Tööpakkumised</a></li>
			<li><a href="offers.php">Ajakirjanike pakkumised</a></li>
			<li><a href="feedback.php">Tagasiside</a></li>
			<?php
				if($_SESSION["logged_in_user_group_id"] == "1"){
					echo '<li><a href="history.php">Ajalugu</a></li>';
				}
			?>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href=""><?=$_SESSION['logged_in_user_email'];?></a></li>
			<li><a href="?logout=1">[logi välja]</a></li>
		</ul>
	</div>
	</div>
	</div>
	</nav><br><br><br>

<?php
	if(!isSet($_SESSION["logged_in_user_id"])){
		header("Location: login.php");
		exit();
	}
	
	if(isSet($_GET["logout"])){
		$User->logoutUser();
		session_destroy();
		header("Location: login.php");
	}
?>