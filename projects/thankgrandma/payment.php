<?php include('header.php');

$card = $_POST['card'];
$note = $_POST['note'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];



?>

<div id="main_content">
	<form action="functions.php?task=new" method="post">
		<input type="hidden" name="card" value="<?php echo $card; ?>" />
		<input type="hidden" name="note" value="<?php echo $note; ?>" />
		<input type="hidden" name="address1" value="<?php echo $address1; ?>" />
		<input type="hidden" name="address2" value="<?php echo $address2; ?>" />
		<input type="hidden" name="city" value="<?php echo $city; ?>" />
		<input type="hidden" name="state" value="<?php echo $state; ?>" />
		<input type="hidden" name="zip" value="<?php echo $zip; ?>" />
		<div class="panel">
			<div class="img" id="card2"></div>
		</div>
		<div class="panel">
			<p>
				<?php echo $note; ?>
			</p>
			<p>
				<?php echo $address1.'<br/>'.$address2.'<br/>'.$city.', '.$state.'<br/>'.$zip; ?>
			</p>
		</div>
		<div class="page_nav">
			<a class="left" href="note.php"><div class="midbutton left">Go Back</div></a>
			<a class="right" href="#"><input type="submit" class="midbutton right" value="Next" /></a>
		</div>
	</form>
</div>

<?php include('footer.php'); ?>