<?php include_once 'templates/header.php'; ?>
<?php include_once 'templates/navbar.php'; ?>
<?php if (isset($_POST["checkout"])) {
    $product_price = $pdo->query("SELECT sell_price FROM product WHERE id = $_POST[product_id]")->fetch();
    $total_price = $_POST['qty'] * $product_price['sell_price'];
    $insert = $pdo->query("INSERT INTO `order` (order_number, date, qty, total_price, customer_id, product_id) VALUES ('$_POST[order_number]', NOW(), '$_POST[qty]', '$total_price', '$_POST[customer_id]', '$_POST[product_id]')");
    header("location: order.php");
}

?>

<div class="row-cols-md-2">
    <div class="container mb-5">
        <div class="card">
            <div class="container-fluid px-5 py-2">
                <h2 class="py-4 text-center">Add Order</h2>
                <form method="post" class="checkout-form">
                    <div class="row gy-4">

                        <div class="col-md-12">
                            <label for="order_number" class="form-label">Order Number</label>
                            <input type="text" class="form-control" name="order_number" id="order_number" placeholder="Order Number">
                        </div>

                        <div class="col-md-12">
                            <label for="customer" class="form-label">Customer</label>
                            <select class="form-select" name="customer_id" id="customer" required>
                                <option value="">Select Customer</option>
                                <?php foreach ($customers as $c) : ?>
                                    <option value="<?= $c['id']; ?>"><?= $c['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="product" class="form-label">Product</label>
                            <select class="form-select" name="product_id" id="product" required>
                                <option value="">Select Product</option>
                                <?php foreach ($products as $p) : ?>
                                    <option value="<?= $p['id']; ?>"><?= $p['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-md-12 ">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" name="qty" id="quantity" placeholder="Quantity" min="0" required>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit" name="checkout" class="btn btn-primary btn-md">Checkout</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>