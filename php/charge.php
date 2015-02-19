<?php
  require_once(dirname(__FILE__) . '/config.php');
  include_once('db_conn.php');

  // echo "charge <br />";
  // var_dump($_POST);
  $token  = $_POST['stripeToken'];
  $total_dollars = $_POST['total_dollars'];
  $total_cents = $total_dollars * 100;

  $customer = Stripe_Customer::create(array(
      'email' => $_POST['email'],
      'card'  => $token
  ));

  $charge = Stripe_Charge::create(array(
      'customer' => $customer->id,
      'amount'   => $total_cents,
      'currency' => 'cad'
  ));

  $name = $_POST["name"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $zip = $_POST["zip"];

  $query = "INSERT INTO Card_order (Name, Email, Address, Zip) 
  Values ('".$name."','".$email."','".$address."','".$zip."')";
  $result = mysql_query($query);

  if($result) {
    echo '<p>Successfully charged $'.$total_dollars.'.00! <br /> Thank you! </p>';
    echo "<p>We will get your card delivered as soon as possible!</p>";
  } else {
    echo $query."<br />";
    echo mysql_errno() . ": " . mysql_error() . "<br />";
    echo "Something is going wrong, please send us an email instead, thanks!";
  }
  
?>