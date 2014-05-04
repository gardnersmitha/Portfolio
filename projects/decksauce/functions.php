<?php
error_reporting(0);
require_once('config.php');
db_connect();
	
//eventually pass this a user id on login.
function getDecks(){
	global $environment_root;
	$result = mysql_query('SELECT * FROM decks WHERE owner = 16');
	$html = null;
		
	while ($row = mysql_fetch_assoc($result)){
		$id = $row['id'];
		$title = $row['title'];
		//
		$html .= '
		
		<li class="gutter_item deck" id="deck#'.$id.'">
			<span class="gutter_item_txt">'.$title.'</span>
			<span class="gutter_item_act"><a href="'.$environment_root.'deck/index.php?deck_id='.$id.'&task=edit">EDIT</a></span>
		</li>
		';
	}
	
	echo $html;
	
}

function getSlides($deck_id){

	$result = mysql_query('SELECT * FROM slides WHERE deck_id ='.$deck_id);
	$html = null;
		
	while ($row = mysql_fetch_assoc($result)){
		$id = $row['id'];
		$title = $row['title'];
    

		$html .= '
		
		<li class="gutter_item slide" id="deck#'.$deck_id.'#slide#'.$id.'">
			<span class="gutter_item_txt">'.$title.'</span>
			<span class="gutter_item_act"></span>
		</li>
		
		';
	}
	
	echo $html;
}



function createNewDeck(){
		
		$title = $_REQUEST['title'];
		//$owner = $_REQUEST['user_id'];
		
		$owner = 16;
		$insert = 'INSERT INTO decks (title, owner) VALUES ("'.$title.'", "'.$owner.'")';
		mysql_query($insert);
		$result = mysql_insert_id();
	
		if(!$result){
			echo 'Could not enter data.';
		}else{
			$url = '../deck/index.php?deck_id='.$result.'&task=edit';
			$html = '
			<div id="default_message">
				Your deck is ready. Wait two seconds or click <a id="redirect" href="'.$url.'">here</a>.
			</div>
			';
			
			echo $html;
		}
		
		
		
		
}


function createNewSlide($deck_id){
		
		//$title = $_REQUEST['title'];
		$title = 'Untitled Slide';
		
		$insert = 'INSERT INTO slides (deck_id, title ) VALUES ("'.$deck_id.'", "'.$title.'")';
		mysql_query($insert);
		$result = mysql_insert_id();
		
		if(!$result){
			echo 'Could not enter data.';
		}else{
			echo $result;
		}
}


function buildDeck($deck_id){
		
		$result = mysql_query('SELECT * FROM slides WHERE deck_id = '.$deck_id);
		
		while ($slide = mysql_fetch_assoc($result)){
			
			$html ='
				<article class="slide" id="slide#'.$slide['id'].'">
					<section class="content">
					<h2>'.$slide['title'].'</h2>
					<p>'.$slide['content'].'</p>
					</section>
					<section class="controls id="controlslide#'.$slide['id'].'" >
						<div class="control edit">
						Edit this slide
						</div>
					</section>
				</article>
			';
			
			
			
			echo $html;
			
		}
}

function buildSlideEditor($slide_id){
	global $environment_root;
	
	
	$call = mysql_query('SELECT * FROM slides WHERE id='.$slide_id);
	$slide = mysql_fetch_assoc($call);
	
	
	?>	
		<article class="slide">
			<section class="content">
			<form id="slide_editor" action="">
				<input type="text" value="<?php echo $slide['title']; ?>" name="title" id="slide_title_input" />
				<!--
				<input type="text" name="bullet1" id="slide_bullet1_input" />
				<input type="text" name="bullet2" id="slide_bullet2_input" />
				<input type="text" name="bullet2" id="slide_bullet3_input" />
				-->
				<textarea id="slide_content_input" name="content"><?php echo $slide['content']; ?></textarea>
				
			</form>
			</section>
			<section class="controls" id="controlslide#<?php echo $slide['id']; ?>">
				<div class="control save" onclick="saveSlide(this)">
						Save
				</div>
			</section>
		</article>
	
	<?php
	
	
	

}


function buildDeckEditor($deck_id,$slide_id){
	
	if($slide_id >= 1){
		$content = buildSlideEditor($slide_id);
		echo $content;
	}else{
		
?>

	<section id="gutter">
		<h2>Slides</h2>
		<ul>
			<?php getSlides($deck_id); ?>
		</ul>
		<div class="create_slide" id="deck#<?php echo $deck_id; ?>">New Slide</div>
	</section>
	
	
	<section id="panel">
		<div id="default_message">
			<a href="#">Select a slide</a><br/> OR <br/> <a href="index.php?task=create">Create a new one now</a>.
		</div>
	</section>
	
	
<?php
	}
}





?>