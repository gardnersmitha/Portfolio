<!doctype html>
    
<!-- 

============================================
@ Document Title:
@ Created By: Austin Gardner-Smith
@ Created On: 00/00/2010
@ Description: 
@ Copyright ©Austin Gardner-Smith, 2010
============================================

-->
    
<html lang="en" class="no-js">
    

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="en-us" />
    
    <title>oneDJ | shared music streaming</title>
    
    <link rel="stylesheet" type="text/css" href="css/tools.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
	
	<link rel="shortcut icon" href="/favicon.ico">
  	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	
	<script type="text/javascript" src="js/tools.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->

<!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->

	<header>
		<div class="wrap">
			<div id="logo"><h1>oneDJ</h1></div>
			<div id="upload"><h1>upload</h1></div>
		</div>
	</header>
	<div id="mainframe">
		<div class="gutter">
			<ul>
			<?php for($i=0; $i<5; $i++){ ?>
				<li class="gutter_item">
					<span class="title"><h2>Song Title</h2></span>
					<span class="action"></span>
				</li>
			<?php } ?>
			</ul>
		</div>
		<div class="panel">
		
		</div>
	</div>
	<footer></footer>
</body>
</html>
