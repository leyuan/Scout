<?php
require_once('./lib/Stripe.php');

$stripe = array(
  "secret_key"      => "sk_test_1grnuW58X4lbvciRRSBWcfPK",
  "publishable_key" => "pk_test_WrsERm79wYCRYqd8sPGc4Wei"
);

Stripe::setApiKey($stripe['secret_key']);
?>