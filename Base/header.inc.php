<?php
session_start();
$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel='stylesheet' href= "/GHB/Base/style.inc.css">
<link id="pagelayout" rel='stylesheet' href= "/GHB/Base/computer.layout.css">
<link rel='icon' type='image/x-icon' href='favicon.ico'>
<script src='/GHB/Base/script.inc.js'></script>
<script>
window.onresize = screen_resize;
screen_resize();
</script>
<!--meta's-->
<meta charset='UTF-8'>
<!--<meta name='viewport' content='width=device-width'/>-->
<title> GHB </title>
</head>
<body>
<header>

<nav>

<div id='search'>

  <img src="/GHB/Base/searchpic2.png" id="srchimg"></img>
  <form action='/GHB/Base/search.inc.php' method='POST' name='searchbar'>
    <input type='text' name='search' placeholder='Search..'  onchange='change()'>
    <button type='submit' name='submit'>Go!</button>
  </form>

</div>

<a href='/GHB/Base/logoutPrc.inc.php'>LOGOUT</a>
<a href='../Signup/signup.php'>SIGNUP</a>
<a href='../Store/Store.php'>STORE</a>
<a href='../Comment/comment.php'>COMMENTS</a>

<a href='../About/about.php'>ABOUT</a>
<a href='../Login/login.php'>LOGIN</a>
<a href='../Home/home.php'>HOME</a>

</nav>

</header>
