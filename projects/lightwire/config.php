<?php
/*
//  LOCAL SETTINGS
//  ======================
$here = "http://localhost:8888/death2qr/";
*/


//  MEDIA TEMPLE SETTINGS
//  ======================
$here = "http://austingardnersmith.me/projects/lightwire/";



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
$dbpass = "db113309";
$dbname = "db113309_lightwire";



//Actually connect
	mysql_connect($dbhost , $dbuser , $dbpass) or die(mysql_error());
	mysql_select_db($dbname) or die(mysql_error());
}


?>

