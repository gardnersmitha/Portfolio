<?php

//AGS.ME
$GLOBAL['environment_root'] = 'http://austingardnersmith.me/projects/decksauce';
//Local
//$GLOBAL['environment_root'] = 'http://localhost/SVN/decksauce/';

/*

function db_connect()
{

	$result = mysql_connect('localhost', "root", "root" );

	if(!$result)
	{
		echo "could not connect to db";
		return false;
	
	}
	if( !mysql_select_db( "decksauce" ))
	{
		echo "could not select decksauce";
		return false;
	}
	
	return $result;
}
*/

//-----------------------------------------------------------

function db_connect()
{

	$result = mysql_connect($_ENV{'DATABASE_SERVER'}, "db113309", "hero1234" );

	if(!$result)
	{
		echo "could not connect to db";
		return false;
	
	}
	if( !mysql_select_db( "db113309_decksauce" ))
	{
		echo "could not select timely_db";
		return false;
	}
	
	return $result;
}


?>
