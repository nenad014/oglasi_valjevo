<h3 class="display-5 text-center">Pretraga</h3>
<form action="seach.view.php" method="GET" class="form-inline">
	<input class="form-control" type="text" name="search" placeholder="Pretraga">
	<button class="btn btn-info" type="submit">Pretraga</button>
</form>
<br>
<h3 class="display-5 text-center">Najnoviji oglasi</h3>
<hr>
<?php
require 'connection.php';

$sql = "SELECT * FROM oglasi ORDER BY date DESC LIMIT 5";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

foreach ($result as $row) :
?>
<h5><a href="oglas.view.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h5>
<p><a href="category.php?name=<?php echo $row['category']; ?>"><button type="button" class="btn btn-outline-warning"><?php echo $row['category']; ?></button></a>   <?php echo $row['date']; ?></p>
<?php endforeach; ?>