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
<title> GHB </title>
</head>
<body>
<header>

<nav>
<ul>
<li><div id="search"><form action="../Includes/searchPrc.inc.php" method="POST" name="searchbar"><input type="text" name="search" placeholder="Search.."  onchange="change()"><button type="submit" name="submit">Go!</button></form></div></li>
<li><a href="../Includes/logoutPrc.inc.php">LOGOUT</a></li>
<li><a href="../Pages/signup.php">SIGNUP</a></li>
<li><a href="../Pages/Store.php">STORE</a></li>
<li><a href="../Pages/comment.php">COMMENTS</a></li>

<li><a href="../Pages/about.php">ABOUT</a></li>
<li><a href="../Pages/login.php">LOGIN</a></li>
<li><a href="../Pages/home.php">HOME</a></li>

</ul>
</nav>

</header>
