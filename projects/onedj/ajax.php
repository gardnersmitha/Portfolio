<?php


$task = $_POST['task'];


switch($task){

	case 'upload' : callUploadForm(); break;
	default: break;

}


function callUploadForm(){
	?>
	
		<form action="upload.php" type="POST" id="upload_form">
			<label for="url_upload">Song URL: <input id="url_upload" type="text" name="url" /></label>
			<label for="file_upload">Song File: <input id="file_upload" type="button" name="url" value="Choose File"/></label>
		</form>

	<?php

}


?>

