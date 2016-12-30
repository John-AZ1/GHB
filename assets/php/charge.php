<?php
  require_once(dirname(__FILE__) . '/config.php');

  $token  = $_POST['stripeToken'];



  $customer = Stripe\Customer::create(array(
      'email' => 'customer@example.com',
      'source'  => $token
  ));



  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 5000,
      'currency' => 'aud'
  ));

 header("Location: ".dirname(__FILE__)."/Store/Store.php");
