
<?php
require('../functions.php');


//Get the id of the slide, if there is one.
if(isset($_REQUEST['slide_id'])){
	$slide_id = $_REQUEST['slide_id'];
}

//Get the id of the deck, if there is one.
if(isset($_REQUEST['deck_id'])){
	$deck_id = $_REQUEST['deck_id'];
}

//Get the new title of the slide, if there is one.
if(isset($_REQUEST['title'])){
	$title = $_REQUEST['title'];
}

//Get the new content of the , if there is one.
if(isset($_REQUEST['content'])){
	$content = $_REQUEST['content'];
}


//Task switcher
if(isset($_REQUEST['task'])){
	$task = $_REQUEST['task'];
	
	switch($task){
		case 'create' : 
			createNewSlide($deck_id);
			break;
		case 'edit' : 
			include('../views/header.php'); 
			include('../views/masthead.php'); 
			buildSlideEditor($id); 
			include('../views/footer.php');
			break;
		case 'save':
			saveSlide($title, $content);
			break;
		case 'play' : 
			include('../views/header.php'); 
			buildSlide($id);
			include('../views/footer.php');
			break;
	}
	
}else{
	echo 'no slide here';
}


function saveSlide(){
	$slide_id = $_REQUEST['slide_id'];
	$title = $_REQUEST['title'];
	$content = $_REQUEST['content'];
	
	//echo $title.'-'.$content.'-'.$slide_id;
	
	$query = 'UPDATE slides SET title="'.$title.'", content="'.$content.'" WHERE id='.$slide_id;
	$update = mysql_query($query);
	
	if(!$update){
		echo 'error';
	}else{
		echo 'success';
	}
	

}




?>