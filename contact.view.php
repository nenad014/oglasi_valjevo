<?php
require 'connection.php';
session_start();
?>
<?php require 'includes/top.php'; ?>
<?php require 'includes/navbar.php'; ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3"><?php require 'includes/left.php'; ?></div>
			<div class="col-sm-6">
				<h1 class="display-4 text-center">KONTAKT</h1>
				<form action="contact.php" method="POST">
					<input type="text" name="name" placeholder="Unesite Vaše ime" class="form-control"><br>
					<input type="email" name="email" placeholder="Unesite Vašu email adresu" class="form-control"><br>
					<input type="text" name="title" placeholder="Unesite naslov poruke" class="form-control"><br>
					<textarea name="message" class="form-control" rows="5" placeholder="Unesite Vašu poruku"></textarea><br>
					<button type="submit" class="form-control btn btn-primary">Pošalji</button>
				</form>				
			</div>
			<div class="col-sm-3"><?php require 'includes/right.php'; ?></div>
		</div>
	</div>
<?php require 'includes/bottom.php'; ?>