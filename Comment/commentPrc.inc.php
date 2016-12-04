<?php

include 'dhb.inc.php';

function setComments($conn) {
	if (isset($_POST['commentSubmit'])) {

			$uid = $_POST['uid'];
			$date = $_POST['date'];
			$message = $_POST['message'];

			$sql = "INSERT INTO comments (uid, date, message) 
			VALUES ('$uid', '$date', '$message')";

			$result = mysqli_query($conn, $sql);
	}
}

function getComments($conn) {
	$sql = "SELECT * FROM comments";
	$result = mysqli_query($conn, $sql);
	while ($row = $result->fetch_assoc()) {

		echo "<div id='commuid'>";
			echo $row['uid']."<br/>";
			echo $row['date']."<br/>";
		echo "</div>";


		echo "<div id='comments'>
			<p>".nl2br($row['message'])."</p><br/><br/>";
		echo "</div>";

	}	
}