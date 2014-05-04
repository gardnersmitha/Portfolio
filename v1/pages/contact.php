<?php 
$root = '../';
require_once('../header.php'); 
?>

<div class="contact">
	<section id="contact-form">
		<form id="contact" action="" method="POST">
			<div>
				<label for="name">Your Name:</label><br/>
				<input type="text" name="name" />
			</div>
			<div>
				<label for="email">Your Email:</label><br/>
				<input type="text" name="email" />
			</div>
			<div>
				<label for="info">What Can I Do For You?</label><br/>
				<textarea name="info"></textarea>
			</div>
			<div>
				<input type="submit" value="Send" />
			</div>
		</form>
	</section>
</div>




<?php require_once('../footer.php'); ?>