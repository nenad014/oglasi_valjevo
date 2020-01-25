<?php
require 'connection.php';
$sql = "SELECT DISTINCT category FROM oglasi";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<h3 class="display-5 text-center">Kategorije</h3>
<br>
<ul class="nav flex-column">
	<?php
		foreach($result as $row) :
	?>
	<li class="nav-item">
		<a class="nav-link" href="category.php?name=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
	</li>

	<?php endforeach; ?>
</ul>