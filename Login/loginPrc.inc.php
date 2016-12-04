<?php
session_start();
include 'dhb.inc.php';

$lusername = $_POST['lusername'];
$lpassword = $_POST['lpassword'];



$sql = "SELECT * FROM user WHERE username='$lusername'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$hash_pwd = $row['password'];
$dehash = password_verify($lpassword, $hash_pwd);

if ($dehash == 0) {
	header("Location: login.php?error=userpassincorrect");
	exit();
} else {

$sql = "SELECT * FROM user WHERE username='$lusername' AND password='$hash_pwd'";
$result = $conn->query($sql);

	$_SESSION['id'] = $row['id'];
	$_SESSION['firstname'] = $row['firstname'];
	$_SESSION['lastname'] = $row['lastname'];

header("Location: login.php");
}
