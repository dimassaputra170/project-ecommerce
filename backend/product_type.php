<?php include_once 'templates/header.php'; ?>
<?php include_once 'templates/navbar.php'; ?>

<a href="product_type_add.php" class="btn btn-primary btn-md mb-3">Add Product Type</a>
<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="">
            <i class="fas fa-table me-1"></i>
            Data Product Type
        </div>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($product_types as $p) : ?>
                    <tr>
                        <td><?= $p["id"]; ?></td>
                        <td><?= $p["name"]; ?></td>
                        <td>
                            <a href="product_type_edit.php?id=<?= $p['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="product_type_delete.php?id=<?= $p['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include_once 'templates/footer.php' ?>