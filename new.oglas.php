<?php
session_start();

require 'connection.php';

if(isset($_SESSION['id'])) {
	$id = $_SESSION['id'];
	$title = $_POST['title'];
	$text = $_POST['text'];
	$category = $_POST['category'];
	$date = date("Y-m-d");
	$price = $_POST['price'];

	$sql = "INSERT INTO oglasi VALUES(NULL, '$title', '$text', '$category', '$date' , '$price', '$id')";
	$query = mysqli_query($conn, $sql);
	if($query) {
		header('Location: user.view.php');
	} else {
		header('Location: new.oglas.view.php');
	}
} else {
	header('Location: index.php');
}
