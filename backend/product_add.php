<?php include_once 'templates/header.php'; ?>
<?php include_once 'templates/navbar.php'; ?>

<?php
if (isset($_POST['add'])) {

    $products = $pdo->query("INSERT INTO product (sku, name, purchase_price, sell_price, stock, min_stock, product_type_id,restock_id) VALUES ('" . $_POST['sku'] . "', '" . $_POST['name'] . "', '" . $_POST['purchase_price'] . "', '" . $_POST['sell_price'] . "', '" . $_POST['stock'] . "', '" . $_POST['min_stock'] . "', '" . $_POST['product_type_id'] . "', '" . 1 . "')");

    header("Location: product.php");
}
?>

<div class="row-cols-md-2">
    <div class="container mb-5">
        <div class="card">
            <div class="container-fluid px-5 py-2">
                <h2 class="py-4 text-center">Add Product</h2>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="sku" class="form-label">SKU</label>
                        <input type="text" class="form-control" id="sku" name="sku" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Product</label>
                        <input type="text" class="form-control" id="nama" name="name" required>
                    </div>
                    <div class=" mb-3">
                        <label for="purchase_price" class="form-label">Purchase Price</label>
                        <input type="number" class="form-control" id="purchase_price" name="purchase_price" required>
                    </div>
                    <div class=" mb-3">
                        <label for="sell_price" class="form-label">Sell Price</label>
                        <input type="number" class="form-control" id="sell_price" name="sell_price" required>
                    </div>
                    <div class=" mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock" required>
                    </div>
                    <div class=" mb-3">
                        <label for="min_stock" class="form-label">Min Stock</label>
                        <input type="number" class="form-control" id="min_stock" name="min_stock" required>
                    </div>

                    <div class="mb-3">
                        <label for="product_type" class="form-label">Product Type</label>
                        <select class="form-select" aria-label="Default select example" name="product_type_id" id="product_type" required>
                            <option value="">Select Product Type</option>
                            <?php foreach ($product_types as $pt) : ?>
                                <option value="<?= $pt['id']; ?>"><?= $pt['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class=" modal-footer my-4">
                        <a href="product.php" type="button" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-dark ms-2" name="add">Add Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>