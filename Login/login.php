<?php
include "../Includes/header.inc.php"; 
?>

<br/><br/><br/><br/><br/>
<h2 align="center">Login</h2>

<form align='center' action="../Includes/loginPrc.inc.php" method="POST">
<input type="text" name="lusername" placeholder="Username" onchange="change()"> <br/>
<input type="password" name="lpassword" placeholder="Password"> <br/>
<button type="submit">Login</button>
</form>

<?php
$lurl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

if (isset($_SESSION['id'])) {
	echo "<br/><p align='center'> You are logged in and your id is ".$_SESSION['id']."</p>";
} 
	
elseif (strpos($lurl, 'error=userpassincorrect') !== false){
		echo "<p align='center' class='uerror'><br/>Your username or password is incorrect</p>";
	} 
else {
	echo "<p align='center' class='uerror'><br/>You are not logged in</p>";
}

include "../Includes/footer.inc.php";
?>