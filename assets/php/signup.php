<?php

session_start();
include '../Base/dhb.inc.php';

$firstname = $_POST['firstname'];

$lastname = $_POST['lastname'];

$username = $_POST['username'];

$password = $_POST['password'];

if (empty($firstname)) {
	header("Location: signup.php?error=fempty");
	exit();
}
if (empty($lastname)) {
	header("Location: signup.php?error=lempty");
	exit();
}
if (empty($username)) {
	header("Location: signup.php?error=uempty");
	exit();
}
if (empty($password)) {
	header("Location: signup.php?error=pempty");
	exit();
}
else {
$sql = "SELECT username FROM user WHERE username='$username'";
$result = $conn->query($sql);
$usernamecheck = mysqli_num_rows($result);
if ($usernamecheck > 0) {
	header("Location: signup.php?error=username");
	exit();
} else {



		$encrypted_password = password_hash($password, PASSWORD_DEFAULT);

	$sql = "INSERT INTO user (firstname, lastname, username, password)
	VALUES ('$firstname', '$lastname', '$username', '$encrypted_password')";
	$result = mysqli_query($conn, $sql);

header("Location: signup.php");

}
}
?>
