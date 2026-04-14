<?php
// Header include
include 'components/header.php';

// Content Variables
$title = isset($page_title) ? $page_title : "Product Category";
$description = isset($page_description) ? $page_description : "Premium marine supplies and vessel solutions by Sabari Marine Enterprise.";
$main_image = isset($page_image) ? $page_image : $base_url . "/assets/images/sabari013.jpg";
$gallery = isset($page_gallery) ? $page_gallery : [];

// Default technical specs if not provided
$specs = isset($page_specs) ? $page_specs : [
    "Origin" => "Local & International Sourcing",
    "Certification" => "ISO 9001:2015 / Maritime Health Verified",
    "Availability" => "24/7 Supply in all Indian Ports",
    "Lead Time" => "2-6 Hours (Port Side)"
];

$tags = isset($page_tags) ? $page_tags : ["Marine Grade", "Certified Supply", "Eco-Friendly", "Global Standard"];
?>

<!-- Premium Showcase Header -->
<section class="showcase-header text-center">
    <div class="container" data-aos="fade-up">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>/">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>/products">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
            </ol>
        </nav>
        <h1 class="display-3 fw-bold text-dark mb-4"><?php echo $title; ?></h1>
        <p class="lead text-muted mx-auto" style="max-width: 800px;">
            <?php echo $description; ?>
        </p>
    </div>
</section>

<!-- Product Showcasing Section -->
<section class="py-2 bg-white">
    <div class="container py-lg-5">

        <!-- Info Highlights Bar -->
        <!-- <div class="info-data-card mb-5" data-aos="fade-up">
            <div class="row g-0 text-center">
                <div class="col-6 col-md-3 info-stat-box">
                    <div class="h3 mb-1">500+</div>
                    <div class="small text-muted text-uppercase fw-bold">Items Stocked</div>
                </div>
                <div class="col-6 col-md-3 info-stat-box">
                    <div class="h3 mb-1">Instant</div>
                    <div class="small text-muted text-uppercase fw-bold">Port Quote</div>
                </div>
                <div class="col-6 col-md-3 info-stat-box">
                    <div class="h3 mb-1">100%</div>
                    <div class="small text-muted text-uppercase fw-bold">Safe Handling</div>
                </div>
                <div class="col-6 col-md-3 info-stat-box border-0">
                    <div class="h3 mb-1">24/7</div>
                    <div class="small text-muted text-uppercase fw-bold">Global Support</div>
                </div>
            </div>
        </div> -->

        <div class="row g-5">
            <!-- Left Side: Main Image and Compliance Tags -->
            <div class="col-lg-7" data-aos="fade-right">
                <!-- Main Image - Sticky -->
                <div class="sticky-lg-top" style="top: 100px; z-index: 1;">
                <div class="mb-4">
                    <div class="showcase-main-img-wrapper">
                        <img src="<?php echo $main_image; ?>" alt="<?php echo $title; ?> Main Display">
                        <!-- <div class="showcase-badge">
                            <i class="bi bi-shield-fill-check text-primary fs-4"></i>
                            <span>Maritime Certified</span>
                        </div> -->
                    </div>
                </div>

                <!-- Compliance & Quality Tags - Also Sticky (will stick when image scrolls out) -->
                <div class="" >
                    <div class="p-4 bg-light rounded-4 border border-primary border-opacity-10">
                        <h5 class="fw-bold text-dark mb-3">Compliance & Quality Tags</h5>
                        <div class="tag-cloud">
                            <?php foreach ($tags as $tag): ?>
                                <span class="info-tag"><?php echo $tag; ?></span>
                            <?php endforeach; ?>
                        </div>
                        <p class="small text-muted mt-3 mb-0">These certifications ensure that all <?php echo strtolower($title); ?> meet the rigorous standards of global maritime logistics.</p>
                    </div>
                </div>
                </div>
            </div>

            <!-- Right Side: Content and Detailed Information -->
            <div class="col-lg-5" data-aos="fade-left">
                <div class="ps-lg-4">
                    <h6 class="text-primary text-uppercase fw-bold letter-spacing-2 mb-3">Service Intelligence</h6>
                    <h2 class="display-6 fw-bold text-dark mb-4"><?php echo isset($page_overview_title) ? $page_overview_title : "Reliability Redefined"; ?></h2>

                    <div class="text-muted mb-4 fs-5">
                        <?php if (isset($page_overview_text)): ?>
                            <?php echo $page_overview_text; ?>
                        <?php else: ?>
                            <p>Sabari Marine Enterprise bridges the operational gap between global standards and local logistics. We provide precise sourcing and rapid delivery cycles.</p>
                        <?php endif; ?>
                    </div>

                    <!-- Technical Specifications Table -->
                    <h4 class="fw-bold text-dark mb-3 mt-5">Supply Specifications</h4>
                    <table class="info-table mb-4">
                        <?php foreach ($specs as $key => $val): ?>
                            <tr>
                                <td><?php echo $key; ?></td>
                                <td><?php echo $val; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>

                    <!-- Operational Visuals Integrated Between Content -->
                    <h4 class="fw-bold text-dark mb-4 mt-5">Field Visuals</h4>
                    <div class="content-gallery-grid">
                        <?php if (count($gallery) >= 2): ?>
                            <div class="gallery-item-small shadow-sm">
                                <img src="<?php echo $gallery[0]; ?>" alt="Gallery 1">
                            </div>
                            <div class="gallery-item-small shadow-sm">
                                <img src="<?php echo $gallery[1]; ?>" alt="Gallery 2">
                            </div>
                        <?php else: ?>
                            <div class="gallery-item-small shadow-sm"><img src="<?php echo $base_url; ?>/assets/images/sabari0118.jpg"></div>
                            <div class="gallery-item-small shadow-sm"><img src="<?php echo $base_url; ?>/assets/images/sabari0119.jpg"></div>
                        <?php endif; ?>
                    </div>

                    <div class="text-muted mt-5">
                        <?php if (isset($page_additional_text)): ?>
                            <?php echo $page_additional_text; ?>
                        <?php else: ?>
                            <p>Our commitment to excellence ensures no vessel ever faces downtime due to supply constraints.</p>
                        <?php endif; ?>
                    </div>

                    <div class="mt-5 p-4 bg-dark text-white rounded-5 shadow-lg position-relative overflow-hidden">
                        <div class="position-absolute top-0 end-0 p-3 opacity-10">
                            <i class="bi bi-geo-alt-fill display-1"></i>
                        </div>
                        <div class="position-relative z-1">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-truck text-primary fs-2 me-3"></i>
                                <h5 class="fw-bold text-white mb-0">Port Coverage & Hubs</h5>
                            </div>
                            <p class="small text-white-50">Strategically located near Mumbai, Kandla, and Chennai ports to ensure sub-2-hour delivery response for all <?php echo strtolower($title); ?>.</p>
                            <div class="d-flex gap-2 mt-4">
                                <a href="<?php echo $base_url; ?>/contact" class="btn btn-primary flex-grow-1 rounded-pill py-3 fw-bold">Inquire Port Availability</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Parallax/Wide Image and Feature Blocks -->
        <div class="row g-5 mt-5 pt-lg-5 align-items-center">
            <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-right">
                <h4 class="fw-bold text-dark mb-4">Strategic Advantages</h4>
                <div class="row g-4">
                    <?php
                    $default_feats = [
                        ["title" => "Quality Control", "icon" => "bi-award", "desc" => "International standard quality management in every delivery."],
                        ["title" => "Scaleable Network", "icon" => "bi-truck", "desc" => "Ability to handle entire fleet provisioning across the coastline."]
                    ];
                    $feats = isset($page_features) ? $page_features : $default_feats;
                    foreach ($feats as $f):
                    ?>
                        <div class="col-md-12">
                            <div class="showcase-feature-item">
                                <i class="bi <?php echo isset($f['icon']) ? $f['icon'] : 'bi-check-circle'; ?>"></i>
                                <h5 class="fw-bold mb-2"><?php echo $f['title']; ?></h5>
                                <p class="small text-muted mb-0"><?php echo isset($f['desc']) ? $f['desc'] : "Meeting global benchmarks for performance and safety."; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-lg-7 order-1 order-lg-2" data-aos="fade-left">
                <div class="parallax-img-section shadow-lg">
                    <?php if (isset($gallery[2])): ?>
                        <img src="<?php echo $gallery[2]; ?>" alt="Gallery 3">
                    <?php else: ?>
                        <img src="<?php echo $base_url; ?>/assets/images/sabari0117.jpg" alt="Default">
                    <?php endif; ?>
                </div>

                <div class="row g-4 mt-1">
                    <div class="col-md-6">
                        <div class="gallery-item-small shadow-sm">
                            <?php if (isset($gallery[3])): ?>
                                <img src="<?php echo $gallery[3]; ?>" alt="Gallery 4">
                            <?php else: ?>
                                <img src="<?php echo $base_url; ?>/assets/images/about/sabari0112.jpg" alt="Default">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-4 bg-light rounded-4 h-100 d-flex flex-column justify-content-center border">
                            <h4 class="fw-bold text-dark mb-2">Fleet Solutions</h4>
                            <p class="text-muted small">Specialized procurement for vessel management companies.</p>
                            <a href="<?php echo $base_url; ?>/contact" class="btn btn-outline-dark rounded-pill px-4 py-2 mt-2 fw-bold">Speak to Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include 'components/footer.php'; ?>