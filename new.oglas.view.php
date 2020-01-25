<?php
require 'connection.php';
session_start();

$sql = "SELECT category FROM oglasi";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query);
?>

<?php require 'includes/top.php'; ?>
<?php require 'includes/navbar.php'; ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3"><?php require 'includes/left.php'; ?></div>
		<div class="col-sm-6">
			<h4 class="text-center">Novi oglas</h4>
			<form action="new.oglas.php" method="POST">
				<input type="text" name="title" placeholder="Naslov oglasa" class="form-control"><br>
				<input type="text" name="text" placeholder="Tekst oglasa" class="form-control"><br>
				<select name="category" class="form-control">
					<?php foreach($result as $row) : ?>
					<option value="<?php echo $row['category']; ?>" cla
						form-control><?php echo $row['category']; ?></option>
					<?php endforeach; ?>
				</select><br>
				<input type="number" name="price" placeholder="Cena" class="form-control"><br>
				<button type="submit" class="btn btn-primary form-control">Postavi oglas</button>
			</form>
		</div>
		<div class="col-sm-3"><?php require 'includes/right.php'; ?></div>
	</div>
</div>
<?php require 'includes/bottom.php'; ?>