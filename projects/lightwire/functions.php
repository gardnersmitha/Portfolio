<?php
require_once('config.php');

function getLinks(){
	db_connect();
	
	$links = mysql_query("SELECT * FROM links ORDER BY id DESC") or die(mysql_error());
	
	while($link = mysql_fetch_object($links)){
		buildLink($link);
	}
}

function buildLink($link){
	$date = date("r", $link->time);
	$html ='
		<li class="link">
			<a class="link_title" href="'.$link->url.'" target="_blank">'.$link->title.'</a>
			<p class="link_info">Added by '.$link->user.'. at '.$date.'</p>
		</li>
	';
	
	echo $html;
}

?>