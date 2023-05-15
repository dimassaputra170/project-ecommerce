<?php include_once 'templates/header.php'; ?>
<section class="bg-dark d-flex align-items-center" style="min-height: 100vh;">
    <div class="container mb-5 bg-light rounded py-5" style="max-width: 700px;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center">Register</h1>
                <form action="Login.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="email" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi bi-eye-slash-fill" id="togglePassword"></i></button>
                        </div>
                        <label for="password" class="form-label">Confirm Password</label>
                        <div class="input-group">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi bi-eye-slash-fill" id="togglePassword"></i></button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <a href="login.php" class="btn btn-secondary">Back</a>
                        <a href="login.php" class="btn btn-dark">register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>