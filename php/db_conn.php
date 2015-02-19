<?php

$link = mysql_connect( 'localhost', 'root', '9eyu20' );
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("scout");
?>