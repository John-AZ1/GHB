<?php
session_start();
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="../Includes/style.inc.css">
<link rel="icon" type="image/x-icon" href="../Images/favicon.ico">
<script src="../Includes/script.inc.js"></script>
<!--meta's-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width"/>
<title> GHB </title>
</head>
<body>
	<div class="inset">
		<h2 class="pch2"> PICHANGE </h2> 

		<img id="chgimg" src="../Images/img (1).jpg" alt=" Image Unavalible">
			<br/>
		<button id="chgimgnext" onclick="chgimgpjs('../Images/img ('+imgx+').'+imgty2, 'chgimg')" class="nxtprv">Prev</button>
		<button id="chgimgprev" onclick="chgimgjs('../Images/img ('+imgy+').'+imgty, 'chgimg')" class="nxtprv">Next</button>
		<br><br>
		<div id="container">

<div id="box1">
	<img id="not1" src="../Images/img (3).png" onmouseover="inlarge('not1')" onmouseout="deinlarge('not1')" onclick="gopic('../Images/img ('imgnum').'imgty'', 3)">
</div>
<div id="box2">
	<img id="is1" src="../Images/img (1).jpg" onmouseover="inlarge('is1')" onmouseout="deinlarge('is1')" onclick="gopic('../Images/img ('imgnum').'imgty'', 1)">
</div>
<div id="box3">
	<img id="not2" src="../Images/img (2).jpg" onmouseover="inlarge('not2')" onmouseout="deinlarge('not2')" onclick="gopic('../Images/img ('imgnum').'imgty2'', 2)">
</div>

		</div>

	</div>

</body>
</html>