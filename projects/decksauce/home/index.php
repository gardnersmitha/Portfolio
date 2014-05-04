<?php

include('../views/header.php'); 
include('../views/masthead.php'); 
require_once('../functions.php');


?>


<section id="gutter">
	<h2>Decks</h2>
	<ul>
		<?php getDecks(); ?>
	</ul>
	<div class="create_deck">New Deck</div>
</section>


<section id="panel">
	<div id="default_message">
		<a href="#">Select a deck</a><br/> OR <br/> <a href="../deck/index.php?task=create">Create a new one now</a>.
	</div>
</section>












<?php

include('../views/footer.php');

?>