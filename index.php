<?php include_once 'templates/header.php'; ?>
<?php include_once 'templates/navbar.php'; ?>

<main id="main">
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <h1>Welcome to Pet Supplies</h1>
            <h2>Sell and buy pet supplies</h2>
            <a href="#product" class="btn-get-started scrollto">Buy Now</a>
        </div>
    </section>

    <section id="product" class="portfolio section-bg">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Product</h2>
            </div>
            <div class="row portfolio-container" data-aos="fade-up">
                <?php foreach ($products as $p) : ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/icon.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><?= $p['name']; ?></h4>
                                <p>Rp. <?= number_format($p['sell_price'], 0, ',', '.'); ?></p>
                                <div class="portfolio-links">
                                    <a href="detail.php?id=<?= $p['id']; ?>" title="More Details"><i class='bx bx-info-circle'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
</main>

<?php include_once 'templates/footer.php' ?>