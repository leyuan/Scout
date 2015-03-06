<?php
require_once('./lib/Stripe.php');

$stripe = array(
  "secret_key"      => "sk_live_5EAH7LO8CggozO3vjDln2mkt",
  "publishable_key" => "pk_live_WKvcF0LgKCPDmWHBFCzrOOo4"
);

Stripe::setApiKey($stripe['secret_key']);
?>