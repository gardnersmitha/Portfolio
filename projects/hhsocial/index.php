<?php

require_once('functions.php');

?>


<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title> HH Social Repository | Links for Hill Holliday's Social Channels </title>
	<meta name="description" content="links to and from the best articles in current fiber optics: business, politics, policies and technology">
	<meta name="author" content="austin gardner-smith">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	<link rel="stylesheet" href="style.css?v=2">
	<link rel="stylesheet" href="tools.css?v=2">

	<script src="js/libs/modernizr-1.7.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
</head>
<body>
	<div id="mainframe">
		<header>
			<span>HH Social Bookmarklets</span>
			<a id="bookmarklet_link" href="javascript:function%20lwbm1()%7Bvar%20d=document,z=d.createElement('scr'+'ipt'),b=d.body,l=d.location;try%7Bif(!b)throw(0);z.setAttribute('src',l.protocol+'//austingardnersmith.me/projects/lightwire/bookmark.php?u='+encodeURIComponent(l.href)+'&t='+(new%20Date().getTime())+'&n=ags&o='+encodeURIComponent(d.title));b.appendChild(z);%7Dcatch(e)%7Balert('Please%20wait%20until%20the%20page%20has%20loaded.');%7D%7Dlwbm1();void(0)">Lightwire</a>
		</header>
		<section id="links">
			<ul id="link_list">
				<?php getLinks(); ?>
			</ul>
		</section>
		<footer>
			<p>
			HH
			</p>
		</footer>		
	
	</div><!-- //end #mainframe -->
	
	<!-- Scripts loaded under here -->
	<!-- <p id="jquery-test" href="#" class="info">jQuery is not loaded (http://localhost/ needed)</p> -->
	<script src="js/ticker.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.5.1.min.js"%3E%3C/script%3E'))</script>
	<script src="js/script.js"></script>
	<!--[if lt IE 7 ]>
	<script src="js/libs/dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('img, .png_bg');</script>
	<![endif]-->
	<script type="text/javascript">
	var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-26993820-1']); _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); })();
	</script>
</body>
</html>

