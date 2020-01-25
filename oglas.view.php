<?php
require 'connection.php';
session_start();
$id = $_GET['id'];
?>

<?php require 'includes/top.php'; ?>
<?php require 'includes/navbar.php'; ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3"><?php require 'includes/left.php'; ?></div>
		<div class="col-sm-6">
			<?php
			$sql = "SELECT *, users.username FROM oglasi INNER JOIN users ON oglasi.user_id = users.id WHERE oglasi.id = '$id'";
			$query = mysqli_query($conn, $sql);
			$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

			foreach($result as $row) :
			?>
			<div class="card mb-2 mt-2">
				<div class="card-header text-center"><a href="#"><?php echo $row['title']; ?></a></div>
				<div class="card-body text-center"><?php echo $row['text'] ?></div>
				<div class="card-footer text-center"><a href="oglasi.user.view.php?id=<?php echo $row['username']; ?>" class="btn btn-warning btn-sm float-left"><?php echo $row['username']; ?></a>
					<a href="#" class="btn-btn-info btn-sm float-right"><?php echo $row['category']; ?></a></div>
			</div>
			<?php endforeach; ?>
		</div>
		<div class="col-sm-3"><?php require 'includes/right.php'; ?></div>
	</div>
</div>
<?php require 'includes/bottom.php'; ?>