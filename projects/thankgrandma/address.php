<?php include('header.php');

$card = $_POST['card'];
$note = $_POST['note'];

?>

<div id="main_content">
	<form action="payment.php" method="post">
		<input type="hidden" name="card" value="<?php echo $card; ?>" />
		<input type="hidden" name="note" value="<?php echo $note; ?>" />
		<label for="address1">Address1:<input type="text" id="address1" name="address1" /></label>
		<label for="address2">Address2:<input type="text" id="address2" name="address2" /></label>
		<label for="city">City/Town:<input type="text" id="city" name="city" /></label>
		<label for="state">State:<input type="text" id="state" name="state" /></label>
		<label for="zip">Zip Code:<input type="text" id="zip" name="zip" /></label>
		<div class="page_nav">
			<a class="left" href="note.php"><div class="midbutton left">Go Back</div></a>
			<a class="right" href="#"><input type="submit" class="midbutton right" value="Next" /></a>
		</div>
	</form>
</div>

<?php include('footer.php'); ?>
