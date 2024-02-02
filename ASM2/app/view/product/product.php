<?php
require 'unchange/head.php';
require 'unchange/header.php';
require 'app/view/auth.php';
?>
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container d-flex align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Centered</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="product-details-top mb-2">
                <div class="row">
                    <?php if (isset($product) && !empty($product)) : ?>
                        <div class="col-md-5">
                            <div class="product-gallery product-gallery-vertical">
                                <div class="row">
                                    <figure class="product-main-image">
                                        <img id="product-zoom" src="../<?= $product['img'] ?>" data-zoom-image="../<?= $product['img'] ?>" alt="product image">

                                        <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                            <i class="icon-arrows"></i>
                                        </a>
                                    </figure><!-- End .product-main-image -->
                                    <div id="product-zoom-gallery" class="product-image-gallery">
                                            <a class="product-gallery-item active" href="#" data-image="../<?= $product['img'] ?>" data-zoom-image="../<?= $product['img'] ?>">
                                                <img src="../<?= $product['img'] ?>" alt="product side">
                                            </a>
                                    </div>
                                </div><!-- End .row -->
                            </div><!-- End .product-gallery -->
                        </div><!-- End .col-md-6 -->
                        <div class="col-md-6">
                            <div class="product-details product-details-centered">
                                <h1 class="product-title"><?= $product['name'] ?></h1><!-- End .product-title -->

                                <div class="product-price">
                                    <?= $product['price'] ?> Đồng
                                </div><!-- End .product-price -->

                                <div class="product-content">
                                    <p><?= $product['des'] ?></p>
                                </div><!-- End .product-content -->

                                <div class="product-details-action">
                                    <div class="details-action-col">
                                        <div class="product-details-quantity">
                                            <input type="number" id="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                        </div><!-- End .product-details-quantity -->

                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .details-action-col -->

                                    <div class="details-action-wrapper">
                                        <a href="#" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                                        <a href="#" class="btn-product btn-compare" title="Compare"><span>Add to Compare</span></a>
                                    </div><!-- End .details-action-wrapper -->
                                </div><!-- End .product-details-action -->

                                <div class="product-details-footer">
                                    <div class="product-cat">
                                        <span>Category:<?= $product['type'] ?></span>
                                    </div><!-- End .product-cat -->
                                </div><!-- End .product-details-footer -->
                            </div><!-- End .product-details -->
                        </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .product-details-top -->
        <?php endif; ?>
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->

<?php
require 'unchange/footer.php';
require 'unchange/js.php';
?>