<?php
session_start();
$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel='stylesheet' href= "/GHB/Base/style.inc.css">
<link rel='icon' type='image/x-icon' href='favicon.ico'>
<script src='/GHB/Base/script.inc.js'></script>
<!--meta's-->
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width'/>
<title> GHB </title>
</head>
<body>
<header>

<nav>
<ul>
<li><div id='search'><form action='/GHB/Base/search.inc.php' method='POST' name='searchbar'><input type='text' name='search' placeholder='Search..'  onchange='change()'><button type='submit' name='submit'>Go!</button></form></div></li>
<li><a href='/GHB/Base/logoutPrc.inc.php'>LOGOUT</a></li>
<li><a href='/GHB/Signup/signup.php'>SIGNUP</a></li>
<li><a href='/GHB/Store/Store.php'>STORE</a></li>
<li><a href='/GHB/Comment/comment.php'>COMMENTS</a></li>

<li><a href='/GHB/About/about.php'>ABOUT</a></li>
<li><a href='/GHB/Login/login.php'>LOGIN</a></li>
<li><a href='/GHB/Home/home.php'>HOME</a></li>

</ul>
</nav>

</header>
