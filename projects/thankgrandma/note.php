<?php include('header.php'); 

$card = $_POST['card'];

?>

<div id="main_content">
	<form action="address.php" method="post">
		<input type="hidden" name="card" value="<?php echo $card; ?>" />
		<label for="note">Enter your note:<textarea id="note" name="note"></textarea></label>
		<div class="page_nav">
			<a class="left" href="card.php"><div class="midbutton left">Go Back</div></a>
			<a class="right" href="#"><input type="submit" class="midbutton right" value="Next" /></a>
		</div>
	</form>
</div>

<?php include('footer.php'); ?>
