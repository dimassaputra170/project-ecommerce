<?php

include_once '../database.php';

$product_delete = $pdo->query("DELETE FROM `order` WHERE id='$_GET[id]'");

header("Location: order.php");
