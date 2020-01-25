<?php
require 'connection.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);

if($result) {
	$_SESSION['id'] = $result['id'];
	$_SESSION['username'] = $result['username'];
	header('Location: index.php');
} else {
	header('Location: login.view.php');
}