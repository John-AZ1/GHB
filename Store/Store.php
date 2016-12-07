<?php

include '../Base/header.inc.php';
require_once('config.php');

?>

<link rel="stylesheet" href="https://checkout.stripe.com/v3/checkout/button.css"></link>
<br><br><br><br><br><br><br><br><br><br><br>
<div id="item1">

	<p style="margin-left: 85px"><b>Horse</b></p>

	<img src="item1/item1.img.jpeg" height="200px" width="180px" position="center" class="item1img" style="padding-left: 23px">

	<script src="https://checkout.stripe.com/checkout.js"></script>

	<button id="customButton" style="margin-left: 23px">Purchase</button>

	<script src="item1/Item1.form.js"></script>

</div>

 <?php include "../Base/footer.inc.php"; ?>
