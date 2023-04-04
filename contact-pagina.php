<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="..\css\style.css">
</head>

<?php 
require_once ("php-add-ons\header.php");
?>


<body>
	<main>
	
<div class="container-contact">
		<div class="content-contact">
			<h1>Contact opnemen</h1>
			<p>Als u vragen heeft kan u doormiddel</p>
			<p>van het contact formulier rechts contact opnemen.</p>

		</div>
		<div class="form-container-contact">
			<form action="contact-action.php" method="POST" autocomplete="off">
				<label for="name">Naam:</label>
				<input type="text" id="name" name="name" required>
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>
				<label for="message">Bericht:</label>
				<textarea id="message" name="message" rows="5" required></textarea>
				<input type="submit" value="Verstuur">
			</form>
			
		</div>
	</div>
	</main>
</body>
<footer>
    <?php

   require_once('php-add-ons\hooter.php')

    ?>
  </footer>
</body>
</html>