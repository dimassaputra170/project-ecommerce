<?php include_once 'templates/header.php'; ?>
<?php include_once 'templates/navbar.php'; ?>

<main id="main">

    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Product Details</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Product Details</li>
                </ol>
            </div>

        </div>
    </section>
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="assets/img/royalcanin.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/bodyfat.jpeg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/whiskas.jpeg" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Product Details</h3>
                        <ul>
                            <li><strong>Name</strong>: <?= $product["name"]; ?></li>
                            <li><strong>Price</strong>: <?= $product["sell_price"]; ?></li>
                            <li><strong>Stock</strong>: <?= $product["stock"]; ?></li>
                            <li>
                                <a href="index.php" style="margin-right: 0.5rem;" class="text-secondary">
                                    Back
                                </a>
                                <a href="checkout.php">
                                    Buy Product
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main>



<?php include_once 'templates/footer.php' ?>