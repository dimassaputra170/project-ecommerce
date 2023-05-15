<?php

include_once '../database.php';

$product_delete = $pdo->query("DELETE FROM product WHERE id='$_GET[id]'");

header("Location: product.php");
