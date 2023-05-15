<?php

include_once '../database.php';

$product_delete = $pdo->query("DELETE FROM customer WHERE id='$_GET[id]'");

header("Location: customer.php");
