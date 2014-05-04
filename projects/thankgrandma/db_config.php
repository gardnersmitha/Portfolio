<?php

$GLOBAL['environment_root'] = 'http://localhost/SVN/decksauce/';



function db_connect()
{

	$result = mysql_connect('localhost', "root", "root" );

	if(!$result)
	{
		echo "could not connect to db";
		return false;
	}
	if( !mysql_select_db( "thankgrandma" ))
	{
		echo "could not select thankgrandma";
		return false;
	}else{
		mysql_select_db( "thankgrandma" );
	}
	
	return $result;
}
?>