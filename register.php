<?php

require 'connection.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users VALUES (NULL, '$username', '$email', '$password')";
$query = mysqli_query($conn, $sql);
if($query) {
	header('Location: login.view.php');
} else {
	header('Location: register.view.php');
}