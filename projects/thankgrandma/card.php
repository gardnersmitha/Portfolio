<?php include('header.php'); ?>

<div id="main_content" class="card">
	<form action="note.php" method="post">
		<div class="panel">
			<div class="img" id="card1"></div>
			<label for="card1radio"><input type="radio" name="card" id="card1radio" value="minimal" />Minimal</label>
		</div>
		<div class="panel">
			<div class="img" id="card2"></div>
			<label for="card2radio"><input type="radio" name="card" id="card2radio" value="classic" />Classic</label>
		</div>
		<div class="panel">
			<div class="img" id="card3"></div>
			<label for="card3radio"><input type="radio" name="card" id="card3radio" value="retro" />Retro</label>
		</div>
		<div class="panel">
			<div class="img" id="card4"></div>
			<label for="card4radio"><input type="radio" name="card" id="card4radio" value="nature" />Nature</label>
		</div>
		<div class="panel">
			<div class="img" id="card5"></div>
			<label for="card5radio"><input type="radio" name="card" id="card5radio" value="fancy" />Fancy</label>
		</div>
		<div class="page_nav">
			<a class="left" href="../"><div class="midbutton left">Cancel</div></a>
			<a class="right" href="#"><input type="submit" class="midbutton right" value="Next" /></a>
		</div>
	</form>
</div>

<?php include('footer.php'); ?>
