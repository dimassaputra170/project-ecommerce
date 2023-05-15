<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="assets/css/styles.css" rel="stylesheet" />
</head>
<?php
include_once '../database.php';

$query_products = $pdo->query("SELECT * FROM product");
$products = $query_products->fetchAll(PDO::FETCH_ASSOC);

$query_product_types = $pdo->query("SELECT * FROM product_type");
$product_types = $query_product_types->fetchAll(PDO::FETCH_ASSOC);

$query_customers = $pdo->query("SELECT customer.*, card.name as card FROM customer JOIN card ON customer.card_id = card.id");
$customers = $query_customers->fetchAll(PDO::FETCH_ASSOC);

$query_orders = $pdo->query("SELECT `order`.*, product.name as product, customer.name as customer_name FROM `order` JOIN product ON `order`.product_id = product.id JOIN customer ON `order`.customer_id = customer.id");
$orders = $query_orders->fetchAll(PDO::FETCH_ASSOC);
?>