<?php require 'includes/top.php'; ?>
<?php require 'includes/navbar.php'; ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-6 offset-3">
				<h1 class="text-center">Prijava</h1>
				<br>
				<form action="login.php" method="POST">
					<input type="email" name="email" placeholder="email" class="form-control"><br>
					<input type="password" name="password" placeholder="password" class="form-control"><br>
					<button type="submit" class="form-control btn btn-info">Prijava</button>
				</form>
			</div>
		</div>
	</div>
<?php require 'includes/bottom.php'; ?>