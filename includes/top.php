<?php 
include 'libs/menu.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Forum</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<div id="wrapper">
		<!-- entête du site -->
		<header id="site-header">
			<h1>Forum Webforce 3</h1>		
			<!-- navigation principale -->
			<nav id="nav-site">
				<?php echo build_html_menu(include('conf/menu.php')); ?>
			</nav>		
		</header>
		<div id="main">