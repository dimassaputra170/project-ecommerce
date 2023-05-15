<?php include_once 'templates/header.php'; ?>
<?php include_once 'templates/navbar.php'; ?>
<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="">
            <i class="fas fa-table me-1"></i>
            Data Order
        </div>
        <a href="order_add.php" class="btn btn-primary btn-md">Add Order</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Order Number</th>
                    <th>Date</th>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Total Price</th>
                    <th>Customer</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order) : ?>
                    <tr>
                        <td><?= $order["id"]; ?></td>
                        <td><?= $order["order_number"]; ?></td>
                        <td><?= $order["date"]; ?></td>
                        <td><?= $order["product"]; ?></td>
                        <td><?= $order["qty"]; ?></td>
                        <td>Rp. <?= number_format($order["total_price"], 0, ',', '.'); ?></td>
                        <td><?= $order["customer_name"]; ?></td>
                        <td>
                            <a href="order_edit.php?id=<?= $order['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="order_delete.php?id=<?= $order['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>

<?php include_once 'templates/footer.php' ?>