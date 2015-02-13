<?php
  require_once(dirname(__FILE__) . '/config.php');

  echo "charge <br />";
  var_dump($_POST);
  $token  = $_POST['stripeToken'];
  $total_dollars = $_POST['total_dollars'];
  $total_cents = $total_dollars * 100;

  $customer = Stripe_Customer::create(array(
      'email' => $_POST['customer_email'],
      'card'  => $token
  ));

  $charge = Stripe_Charge::create(array(
      'customer' => $customer->id,
      'amount'   => $total_cents,
      'currency' => 'cad'
  ));

  echo '<h1>Successfully charged $'.$total_dollars.'.00!</h1>';
?>