<?php

session_start();
include 'dhb.inc.php';

$firstname = $_POST['firstname'];
	
$lastname = $_POST['lastname'];
	
$username = $_POST['username'];
	
$password = $_POST['password'];

if (empty($firstname)) {
	header("Location: ../Page/signup.php?error=empty");
	exit();
}
if (empty($lastname)) {
	header("Location: ../Page/signup.php?error=empty");
	exit();
}
if (empty($username)) {
	header("Location: ../Page/signup.php?error=empty");
	exit();
}
if (empty($password)) {
	header("Location: ../Page/signup.php?error=empty");
	exit();
}
else {
$sql = "SELECT username FROM user WHERE username='$username'";
$result = $conn->query($sql);
$usernamecheck = mysqli_num_rows($result);
if ($usernamecheck > 0) {
	header("Location: ../Page/signup.php?error=username");
	exit();
} else {

		

		$encrypted_password = password_hash($password, PASSWORD_DEFAULT);

	$sql = "INSERT INTO user (firstname, lastname, username, password)
	VALUES ('$firstname', '$lastname', '$username', '$encrypted_password')";
	$result = mysqli_query($conn, $sql);

header("Location: ../Pages/signup.php");

}
}
?>