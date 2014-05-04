
<?php
require('../functions.php');


//Get the id of the deck, if there is one.
if(isset($_REQUEST['deck_id'])){
	$deck_id = $_REQUEST['deck_id'];
}

if(isset($_REQUEST['slide_id'])){
	$slide_id = $_REQUEST['slide_id'];
}


//Task switcher
if(isset($_REQUEST['task'])){
	$task = $_REQUEST['task'];
}else{
	echo 'no deck here';
}
	
	switch($task){
		case 'create' : 
			createNewDeck();
			break;
		case 'edit' : 
			if($slide_id){
				buildDeckEditor($deck_id,$slide_id); 
			}else{
				include('../views/header.php'); 
				include('../views/masthead.php'); 
				buildDeckEditor($deck_id,$slide_id); 
				include('../views/footer.php');
			}
			break;
		case 'preview' : 
			//include('../views/header.php'); 
			buildDeck($_REQUEST['deck_id']);
			//include('../views/footer.php');
			break;
		case 'play' : 
			include('../views/header.php'); 
			buildDeck($_REQUEST['deck_id']);
			include('../views/footer.php');
			break;
	}



?>