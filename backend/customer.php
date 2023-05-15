<?php include_once 'templates/header.php'; ?>
<?php include_once 'templates/navbar.php'; ?>
<a href="customer_add.php" class="btn btn-primary btn-md mb-3">Add Customer</a>
<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="">
            <i class="fas fa-table me-1"></i>
            Data Customer
        </div>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Card</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $cust) : ?>
                    <tr>
                        <td><?= $cust["name"]; ?></td>
                        <td><?= $cust["gender"]; ?></td>
                        <td><?= $cust["phone"]; ?></td>
                        <td><?= $cust["email"]; ?></td>
                        <td><?= $cust["address"]; ?></td>
                        <td><?= $cust["card"]; ?></td>
                        <td>
                            <a href="customer_edit.php?id=<?= $cust['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="customer_delete.php?id=<?= $cust['id']; ?>" class="btn btn-danger">Delete</a>
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