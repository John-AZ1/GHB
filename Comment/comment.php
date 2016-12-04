<br/><br/><br/><br/><br/>

<h1>Comments</h1>

<?php

include '../Includes/header.inc.php';
include '../Includes/commentPrc.inc.php';


date_default_timezone_set('Australia/Sydney');


 if (isset($_SESSION['firstname'])) {

	$commname = $_SESSION['firstname'];

 } else {

 	$commname = "Anonymous";

 };




echo "<form name='commentsec' action='".setComments($conn)."' method='POST'>
	<input type='hidden' name='uid' value='".$commname."''>
	<input type='hidden' name='date' value='".date('Y-m-d H-i-s')."''>
	<textarea name='message' placeholder='Comments'></textarea><br/>
	<button type='submit' name='commentSubmit'>Comment</button>
</form>";

	getComments($conn);


echo "<br/><br/><br/>";
include '../Includes/footer.inc.php';
?>
