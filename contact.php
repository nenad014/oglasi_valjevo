<?php
require 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$title = $_POST['title'];
$message = $_POST['message'];

$sql = "INSERT INTO poruke VALUES(NULL, '$name', '$email', '$title', '$message')";
$query = mysqli_query($conn, $sql);
if($query) {
	header('Location: index.php');
} else {
	header('Location: contact.view.php');
}