<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pet Supplies</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
</head>
<?php include_once 'database.php';

$query_products = $pdo->prepare('SELECT * FROM product ORDER BY id DESC');
$query_products->execute();
$products = $query_products->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET['id'])) {
    $query_product = $pdo->prepare('SELECT * FROM product WHERE id = ?');
    $query_product->execute([$_GET['id']]);
    $product = $query_product->fetch(PDO::FETCH_ASSOC);
}

$query_products = $pdo->query("SELECT * FROM product");
$products = $query_products->fetchAll(PDO::FETCH_ASSOC);

$query_customers = $pdo->query("SELECT customer.*, card.name as card FROM customer JOIN card ON customer.card_id = card.id");
$customers = $query_customers->fetchAll(PDO::FETCH_ASSOC);
?>