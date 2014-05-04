<?php
require_once('db_config.php');

db_connect();

$task = $_GET['task'];

switch($task){
	case 'new' : createNewCard(); break;
	case 'update' : updateCard(); break;
	default : break;
}

function createNewCard(){
	$myid = '1'; //TEMP for dev
	$card = $_POST['card'];
	$note = $_POST['note'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	//$zip = '02540';
	//$curr_date = '2011-06-07';
	
/*	
	$query = '
		INSERT INTO cards
		(
			user_id,
			card,
			note,
			address1,
			address2,
			city,
			state,
			zip
		)
		VALUES('.
			$myid.','.
			$card.','.
			$note.','.
			$address1.','.
			$address2.','.
			$city.','.
			$state.','.
			$zip.'
		)
	';
	*/
	
	$query = 'INSERT INTO CARDS (`user_id`,`zip`) VALUES ('.$myid.','.$zip.')';
	
	$result = mysql_query($query);
	
	if(!$result){
		echo 'failed to create new record';
	}else{
		echo 'successfully created new record';
	}	
}

function updateCard(){
	echo 'updateCard() triggered';
}
?>