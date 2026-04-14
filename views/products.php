<?php include 'components/header.php'; ?>

<section class=" position-relative overflow-hidden">


    <div class="container-fluid text-center mt-5">
        <h1 class="display-3 fw-bold text-black mb-4">Our Products & Supplies</h1>
        <p class="lead text-black mx-auto" style="max-width: 800px;">
            Comprehensive ship chandlery solutions, from fresh provisions to technical engine spares, delivered across all major Indian ports.
        </p>
    </div>
</section>

<section class="container py-5">
    <?php foreach ($product_categories as $category_name => $items): ?>
        <div class="category-block mb-5" data-aos="fade-up">
            <div class="row align-items-center mb-4">
                <div class="col-auto">
                    <div class="category-icon-wrapper bg-primary text-white p-3 rounded-circle shadow-sm">
                        <?php
                        // Assign icons based on category name
                        $icon = "bi-box-seam";
                        if (str_contains($category_name, 'Provisions')) $icon = "bi-basket3";
                        if (str_contains($category_name, 'Technical')) $icon = "bi-gear-wide-connected";
                        if (str_contains($category_name, 'Safety')) $icon = "bi-shield-check";
                        ?>
                        <i class="bi <?php echo $icon; ?> fs-3"></i>
                    </div>
                </div>
                <div class="col">
                    <h2 class="display-6 fw-bold text-dark mb-0"><?php echo $category_name; ?></h2>
                    <div class="h-line bg-primary opacity-25 mt-2" style="width: 100px; height: 3px;"></div>
                </div>
            </div>

            <div class="row g-4">
                <?php foreach ($items as $item_name => $item_link): ?>
                    <div class="col-lg-4 col-md-6">
                        <a href="<?php echo $base_url; ?>/<?php echo $item_link; ?>" class="text-decoration-none h-100 d-block">
                            <div class="product-item-card p-4 bg-white border rounded-4 shadow-sm h-100 hover-up transition-all">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="fw-bold text-dark mb-0 pe-3"><?php echo $item_name; ?></h5>
                                    <i class="bi bi-arrow-right-circle text-primary fs-4"></i>
                                </div>
                                <p class="text-muted mt-3 small mb-0">Explore our comprehensive range of <?php echo strtolower($item_name); ?> tailored for maritime excellence.</p>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</section>

<!-- Premium Call to Action -->
<section class="premium-cta-section py-5 position-relative overflow-hidden">
    <div class="cta-bg-glow"></div>
    <div class="container py-lg-5 position-relative z-1">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" id="cta-animate-target">
                <h6 class="text-uppercase fw-bold letter-spacing-2 mb-3 text-white-50 reveal-text">Ready to partner?</h6>
                <h2 class="display-4 fw-bold mb-4 text-white reveal-text">Need a Custom Supply Quote?</h2>
                <p class="lead mb-5 text-white-50 reveal-text">Our team is available 24/7 to handle your vessel's requirements with precision and speed. Experience the Sabari Marine advantage today.</p>
                <div class="reveal-btn">
                    <a href="<?php echo $base_url; ?>/contact" class="btn btn-primary-gradient btn-lg rounded-pill px-5 py-3 fw-bold shadow-lg hvr-grow">
                        Contact Us Now <i class="bi bi-arrow-right ms-2 mt-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative Elements -->
    <div class="cta-decor-circle circle-1"></div>
    <div class="cta-decor-circle circle-2"></div>

</section>


<?php include 'components/footer.php'; ?>