<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<a class="navbar-brand" href="index.php">Valjevo oglasi</a>
	<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a class="nav-link" href="index.php">HOME</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="contact.view.php">KONTAKT</a>
		</li>
		<?php if(isset($_SESSION['id'])) : ?>
		<li class="nav-item">
			<a class="nav-link" href="user.view.php"><?php echo strtoupper($_SESSION['username']); ?></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="logout.php">ODJAVA</a>
		</li>
		<?php else : ?>
		<li class="nav-item">
			<a class="nav-link" href="login.view.php">PRIJAVA</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="register.view.php">REGISTRACIJA</a>
		</li>
		<?php endif ?>
	</ul>
</nav>