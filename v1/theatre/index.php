<!DOCTYPE html>

<!-- 

============================================
@ Document Title: theatre/index.php
@ Created By: Austin Gardner-Smith
@ Created On: 06/28/2011
@ Description: Theatre Page Template
@ Copyright ©Austin Gardner-Smith, 2011
============================================

-->
   
<?php 
	$root = '../'; 
	require_once('../functions.php');
?>
    

<html lang="en">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="en-us" />

    <title>Austin Gardner-Smith | Digital Native, Web Creative</title>
    
    <link rel="stylesheet" type="text/css" href="<?php echo $root; ?>css/tools.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $root; ?>css/style2.css"/>
	
	<script type="text/javascript" src="<?php echo $root; ?>js/tools.js"></script>
	<script type="text/javascript" src="<?php echo $root; ?>js/script.js"></script>
	
</head>

<body class="theatre">
	<div id="mainframe">
		<header>
		ags
		</header>
		<nav id="main_nav">
			<ul>
				<li><a href="/" title="Go home">home</a></li>
				<li><a href="/blog" title="Read ze blog">blog</a></li>
				<li><a href="/hotsheet" title="Get linked">hotsheet</a></li>
				<li><a href="/theatre" title="Watch ze movies">theatre</a></li>
			</ul>
		</nav>
		
		<section id="stage">
			<div id="player"></div>
		</section>	
		
<?php require_once('../footer.php'); ?>