<?php
/*
//  LOCAL SETTINGS
//  ======================
$here = "http://localhost:8888/death2qr/";
*/


//  MEDIA TEMPLE SETTINGS
//  ======================
$here = "http://austingardnersmith.me/projects/hhsocial/";



function db_connect(){
/*
//  LOCAL SETTINGS
//  ======================
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "lightwire";
*/

//  MEDIA TEMPLE SETTINGS
//  ======================
$dbhost = "internal-db.s113309.gridserver.com";
$dbuser = "db113309";
$dbpass = "fenwayMT";
$dbname = "db113309_hhsocial";



//Actually connect
	mysql_connect($dbhost , $dbuser , $dbpass) or die(mysql_error());
	mysql_select_db($dbname) or die(mysql_error());
}

// DATE SETTINGS
date_default_timezone_set('America/New_York');


?>

