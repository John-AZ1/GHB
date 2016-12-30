<?php
include "../Base/header.inc.php";
?>
<br/><br/><br/>
<h1>GHB</h1>

<?php
if (isset($_SESSION['firstname']) and isset($_SESSION['lastname'])) {
	echo "<p align='left'>Welcome, <br/><br/>".$_SESSION['firstname']." ".$_SESSION['lastname']."</p>";
} else {
	echo "<p align='left'>Welcome, <br/><br/>You are not logged in</p>";
}
?>


<iframe src="Frames/frame.php" width="400px" height="420px" name="myframe"></iframe>
<iframe src="Frames/gregen.html" width="400px" height="420px" name="gregen"></iframe>
<iframe src="#" width="400px" height="420px"></iframe>
<iframe src="#" width="400px" height="420px"></iframe>
<iframe src="#" width="400px" height="420px"></iframe>
<iframe src="#" width="400px" height="420px"></iframe>

<script>
</script>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<p class="end">The End is Nearing</p>

<br/><br/><br/><br/><br/><br/>

<?php
include "../Base/footer.inc.php";
?>
