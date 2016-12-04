<?php
include "../Includes/header.inc.php";
?>

<br/><br/><br/><br/><br/>

<h2 align="center">SIGN UP</h2>

<form align="center" action="../Includes/../Includes/signupPrc.inc.php" method="POST">				
	<input type="text" name="firstname" placeholder="Firstname"> <br/>							
	<input type="text" name="lastname" placeholder="Lastname"> <br/>							
	<input type="text" name="username" placeholder="Username"> <br/>							
	<input type="password" name="password" placeholder="Password"> <br/>								
	<button type="submit">Sign Up</button>						
</form>
<!--<p class='uerror' align='center'>Unfortunatly my current webserver isn't up to date so you won't be able to sign up</p>-->
<?php
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if (strpos($url, 'error=empty') !== false){
		echo "<p align='center' class='uerror'><br/>Fill out all signup fields</p>";
	} elseif (strpos($url, 'error=username') !== false) {
		echo "<p align='center' class='uerror'><br/>Username already exits</p>";
	}
?>
<?php
include "../Includes/footer.inc.php";
?>