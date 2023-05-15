<?php include_once 'templates/header.php'; ?>
<?php include_once 'templates/navbar.php'; ?>
<?php $product_type = $pdo->query("SELECT * FROM product_type WHERE id='$_GET[id]'")->fetch(); ?>
<?php if (isset($_POST["edit"])) {
    $product_type_edit = $pdo->query("UPDATE product_type SET name='$_POST[name]' WHERE id='$_POST[id]'");
    header("Location: product_type.php");
} ?>

<div class="row-cols-md-2">
    <div class="container mb-5">
        <div class="card">
            <div class="container-fluid px-5 py-2">
                <h2 class="py-4 text-center">Add Product Type</h2>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $product_type['id']; ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nama" name="name" required value="<?= $product_type['name']; ?>">
                    </div>

                    <div class=" modal-footer my-4">
                        <a href="product_type.php" type="button" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-dark ms-2" name="edit">Edit Product Type</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>