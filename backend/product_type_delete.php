<?php

include_once '../database.php';

$product_delete = $pdo->query("DELETE FROM product_type WHERE id='$_GET[id]'");

header("Location: product_type.php");
