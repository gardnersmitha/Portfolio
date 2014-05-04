<?php

require_once('config.php');


//Parse our variables from the bookmarklet

$url = $_GET['u'];
$time = $_GET['t'];
$user = $_GET['n'];
$title = $_GET['o'];

createLink($url,$title,$user,$time);

function createLink($url,$title,$user,$time){
	db_connect();
	$response = mysql_query("
		INSERT INTO links VALUES(
			'',
			'$url',
			'$title',
			'$user',
			'$time'
		);
	");
	
	if(!$response){
		$return = 'Couldn\'t save link...';
	}else{
		$return = 'Link #'.mysql_insert_id().' has been saved.';
	}
	
	echo 'alert("'.$return.'");';
}


?>

