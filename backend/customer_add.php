<?php include_once 'templates/header.php'; ?>
<?php include_once 'templates/navbar.php'; ?>
<?php if (isset($_POST['add'])) {
    $customer_add = $pdo->query("INSERT INTO customer (name, gender,phone,email,address, card_id) VALUES ('" . $_POST['name'] . "', '" . $_POST['gender'] . "', '" . $_POST['phone'] . "', '" . $_POST['email'] . "', '" . $_POST['address'] . "', '" . 1 . "')");
    header("Location: customer.php");
} ?>

<div class="row-cols-md-2">
    <div class="container mb-5">
        <div class="card">
            <div class="container-fluid px-5 py-2">
                <h2 class="py-4 text-center">Add Customer</h2>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select name="gender" id="gender" class="form-select" required>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>

                    <div class=" modal-footer my-4">
                        <a href="customer.php" type="button" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-dark ms-2" name="add">Add Customer</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>