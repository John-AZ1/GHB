<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_RK82Clmvsm29mzsLSrzCCkGD",
  "publishable_key" => "pk_test_2PSNAbLzRy3GtqJyLLZDQWLZ"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>