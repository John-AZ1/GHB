<?php
session_start();
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="style.inc.css">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<script src="script.inc.js"></script>
<!--meta's-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width"/>
<title> GHB </title>
</head>
<body>
<header>

<nav>
<ul>
<li><div id="search"><form action="../Includes/searchPrc.inc.php" method="POST" name="searchbar"><input type="text" name="search" placeholder="Search.."  onchange="change()"><button type="submit" name="submit">Go!</button></form></div></li>
<li><a href="logoutPrc.inc.php">LOGOUT</a></li>
<li><a href="../Signup/signup.php">SIGNUP</a></li>
<li><a href="../Store/Store.php">STORE</a></li>
<li><a href="../Comment/comment.php">COMMENTS</a></li>

<li><a href="../About/about.php">ABOUT</a></li>
<li><a href="../Login/login.php">LOGIN</a></li>
<li><a href="../Home/home.php">HOME</a></li>

</ul>
</nav>

</header>
