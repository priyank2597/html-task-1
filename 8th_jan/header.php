<?php
	error_reporting(-1);
	ini_set('display_errors', 'On');


?>


<!DOCTYPE html>
<html>
<head>
	
	<?php

	include('include.php');

	?>
</head>
<body>
	<nav class="navbar navbar-inverse hidden-md hidden-lg" id="mn_menu" style="background-color: yellow;">
		<div class="container-fluid">
			
			<div>
				<p class="navbar-title-color navbar-header-margin navbar-brand">Start bootstrap</p>
			</div>




			<div style="float:right;" >
				<div id="mySidenav" class="sidenav ">

					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					<a href="index.php">Home</a>
					<a href="about.php">About</a>
					<a href="services.php">Services</a>
					<a href="clients.php">Clients</a>
					<a href="contact.php">Contact</a>
					
				</div>
				<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
			</div>
		</div>
	</nav>



	<nav class="navbar navbar-inverse hidden-sm hidden-xs" style="background-color: pink;" id="max_menu">
		<div class="container-fluid">
			<div class="navbar-header" >

			</div>
			<ul class="nav navbar-nav" style="float:right">
				<li <?php if($id == 'home_md_nav') { ?> class="active" <?php } ?> id="home_md_nav"><a href="index.php">Home</a></li>
				<li <?php if($id == 'about_md_nav') { ?> class="active" <?php } ?> id="about_md_nav"><a href="about.php" >About</a></li>
				<li <?php if($id == 'servies_md_nav') { ?> class="active" <?php } ?> id="servies_md_nav"><a href="services.php">Services</a></li>
				<li <?php if($id == 'client_md_nav') { ?> class="active" <?php } ?> id="client_md_nav"><a href="clients.php">Clients</a></li>
				<li <?php if($id == 'contact_md_nav') { ?> class="active" <?php } ?> id="contact_md_nav"><a href="contact.php">Contact</a></li>
			</ul>
		</div>
	</nav>


