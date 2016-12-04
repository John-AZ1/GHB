<?php
$lusername = $_POST['lusername'];
$lpassword = $_POST['lpassword'];
?>
<!--First and lastname in header code -->
<?php
if (isset($_SESSION['firstname']) and isset($_SESSION['lastname'])) {
	echo "<br/><p align='left' class='welcome'>Welcome <br/>".$_SESSION['firstname']."br/>".$_SESSION['lastname']."</p>";
} else {
	echo "<br/><p align='left' class='welcome'>Welcome <br/>You are not logged in</p>";
}
?>
<script> setInterval(printTime, 1000); </script>
<script>
if (var time > 129) {
	document.write("<p>Good evening,</p>");
} else {
	document.write("<p>Good morning,</p>")
}
</script>