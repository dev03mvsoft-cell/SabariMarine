<?php if(!defined('SECURE_ACCESS')) exit('Forbidden'); ?>
<?php include 'components/header.php'; ?>

<main>
    <div id="hero-split" class="position-relative overflow-hidden">
        <div class="container ">
            <div class="row align-items-center min-vh-100">
                <!-- Text Content -->
                <div class="col-lg-6" data-aos="fade-right">
                    <div id="slider-content">
                        <div class="meta">Marine Excellence</div>
                        <h2 id="slide-title">Marine Supply <br>Expertise</h2>

                        <!-- Hidden data for JS slider -->
                        <div class="d-none">
                            <span data-slide-title="0">Marine Supply<br>Expertise</span>
                            <span data-slide-title="1">Global Port<br>Support</span>
                            <span data-slide-title="2">Quality Vessel<br>Provisions</span>
                            <span data-slide-title="3">Seamless Coastal<br>Logistics</span>
                            <span data-slide-title="4">Operational<br>Excellence</span>
                        </div>

                        <div class="meta">Our Mission</div>
                        <div id="slide-status">Professional provisions and technical stores delivered with precision.</div>

                        <!-- Hidden data for JS slider -->
                        <div class="d-none">
                            <span data-slide-status="0">Professional provisions and technical stores delivered with precision.</span>
                            <span data-slide-status="1">Comprehensive supply solutions across all major Indian ports.</span>
                            <span data-slide-status="2">Certified deck, engine, and cabin stores for every voyage.</span>
                            <span data-slide-status="3">Strategic 24/7 delivery network targeting zero vessel downtime.</span>
                            <span data-slide-status="4">Ensuring maritime efficiency through reliable supply standards.</span>
                        </div>


                    </div>
                </div>

                <!-- Circular Slider Image -->
                <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left">
                    <div class="hero-image-wrapper position-relative">
                        <div id="slider" class="circular-slider shadow-2xl">
                            <!-- Images handled by Three.js slider -->
                            <img src="<?php echo $base_url; ?>/assets/images/home/hero1.png" alt="Provisions Check" />
                            <img src="<?php echo $base_url; ?>/assets/images/home/hero2.png" alt="Marine 2" />
                            <img src="<?php echo $base_url; ?>/assets/images/home/hero_indian_engineer.jpg" alt="Marine 3" />
                            <img src="<?php echo $base_url; ?>/assets/images/home/hero_indian_logistics.jpg" alt="Marine 4" />
                            <img src="<?php echo $base_url; ?>/assets/images/home/hero_indian_captain.jpg" alt="Marine 5" />
                        </div>

                        <!-- Custom Pagination inside the wrapper or nearby -->
                        <div id="pagination" class="mt-4 d-none d-lg-flex justify-content-start">
                            <button class="active mx-2" data-slide="0"></button>
                            <button class="mx-2" data-slide="1"></button>
                            <button class="mx-2" data-slide="2"></button>
                            <button class="mx-2" data-slide="3"></button>
                            <button class="mx-2" data-slide="4"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<style>
    .cert-box {
        background: #fff;
        border: 1px solid rgba(0, 0, 0, 0.05) !important;
        transition: border-color 0.3s ease;
    }

    .cert-box:hover {
        border-color: rgba(11, 5, 125, 0.1) !important;
    }

    .cert-img-container {
        position: relative;
        overflow: hidden;
        display: inline-block;
        border-radius: 8px;
    }

    .cert-box img {
        transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        filter: grayscale(0.2);
        margin-bottom: 0;
        cursor: pointer;
    }

    /* SHINE SCAN EFFECT */
    .cert-img-container::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 50%;
        height: 100%;
        background: linear-gradient(to right,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0.6) 50%,
                rgba(255, 255, 255, 0) 100%);
        transform: skewX(-25deg);
        transition: none;
    }

    .cert-box img:hover {
        transform: scale(1.15);
        filter: grayscale(0);
    }

    .cert-img-container:hover::after {
        left: 150%;
        transition: left 0.8s ease-in-out;
    }

    .cert-box .cert-name {
        font-size: 0.85rem;
        font-weight: 600;
        color: #0b057d;
        margin-top: 15px;
        opacity: 0.7;
        transition: all 0.4s ease;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        line-height: 1.4;
    }

    .cert-box:hover .cert-name {
        opacity: 1;
        color: #0b057d;
    }

    /* MOBILE OPTIMIZATION */
    @media (max-width: 576px) {
        .cert-box {
            padding: 20px 10px !important;
        }

        .cert-box img {
            max-width: 100%;
            height: auto;
            max-height: 120px !important;
        }

        .cert-box .cert-name {
            font-size: 0.7rem;
            letter-spacing: 0.2px;
        }
    }
</style>



<!-- certifactions -->
<!-- certifications -->
<section class="position-relative overflow-hidden py-5">
    <div class="container">
        <div class="row px-2 px-md-5 justify-content-center align-items-center g-3 g-md-4">

            <!-- IMPA -->
            <div class="col-6 col-md-4 text-center" data-aos="fade-right">
                <div class="border rounded-3 p-3 p-md-4 shadow-sm h-100 cert-box d-flex flex-column align-items-center justify-content-center">
                    <div class="cert-img-container">
                        <img src="/assets/images/certifactions/impa.png"
                            class="img-fluid"
                            alt="IMPA"
                            style="max-height: 140px; width: auto;">
                    </div>
                    <p class="cert-name mb-0">International Marine Purchasing Association</p>
                </div>
            </div>

            <!-- ISO -->
            <div class="col-6 col-md-4 text-center" data-aos="fade-up">
                <div class="border rounded-3 p-3 p-md-4 shadow-sm h-100 cert-box d-flex flex-column align-items-center justify-content-center">
                    <div class="cert-img-container">
                        <img src="/assets/images/certifactions/iso.png"
                            class="img-fluid"
                            alt="ISO"
                            style="max-height: 140px; width: auto;">
                    </div>
                    <p class="cert-name mb-0">International Organization for Standardization</p>
                </div>
            </div>

            <!-- ISSA -->
            <div class="col-6 col-md-4 text-center" data-aos="fade-left">
                <div class="border rounded-3 p-3 p-md-4 shadow-sm h-100 cert-box d-flex flex-column align-items-center justify-content-center">
                    <div class="cert-img-container">
                        <img src="/assets/images/certifactions/issa.png"
                            class="img-fluid"
                            alt="ISSA"
                            style="max-height: 140px; width: auto;">
                    </div>
                    <p class="cert-name mb-0">International Ship Suppliers Association (ISSA)</p>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- About Section -->
<section class="about-section py-5 position-relative overflow-hidden">
    <!-- Vertical Dotted Lines Decor -->
    <div class="vertical-lines-decor d-none d-lg-flex right-decor">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>

    <div class="container py-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-right">
                <div class="about-collage-wrapper" data-aos="fade-right">
                    <div class="collage-grid">
                        <div class="grid-item item-1 rounded-3">
                            <img src="<?php echo $base_url; ?>/assets/images/products/BondedStores/13.png" class="img-fluid rounded-3 w-100 h-100 object-fit-cover" alt="Marine Cooking">
                        </div>
                        <div class="grid-item item-2 rounded-3">
                            <img src="<?php echo $base_url; ?>/assets/images/home/vessel_life_eating.jpg" class="img-fluid rounded-3 w-100 h-100 object-fit-cover" alt="Crew Welfare">
                        </div>
                        <div class="grid-item item-3 rounded-3">
                            <img src="<?php echo $base_url; ?>/assets/images/gallery/sabari016.jpg" class="img-fluid rounded-3 w-100 h-100 object-fit-cover" alt="Engine Operations">
                        </div>
                        <div class="grid-item item-4 rounded-3">
                            <img src="<?php echo $base_url; ?>/assets/images/products/BondedStores/14.png" class="img-fluid rounded-3 w-100 h-100 object-fit-cover" alt="Deck Maintenance">
                        </div>
                        <div class="grid-item item-5 rounded-3">
                            <img src="<?php echo $base_url; ?>/assets/images/home/provisions_manager.jpg" class="img-fluid rounded-3 w-100 h-100 object-fit-cover" alt="Provisions Expert">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 ps-lg-5" data-aos="fade-left">
                <div class="about-content">
                    <h6 class=" text-uppercase fw-bold letter-spacing-2 mb-3 badge-dotted">Professional Excellence</h6>
                    <h2 class="display-5 fw-bold mb-4" style="color: #0b057d;">Driving Innovation in Marine Services</h2>
                    <p class="lead text-muted mb-4">
                        <strong>Sabari Marine Enterprises</strong> is a trusted name in the <strong>Indian maritime supply industry</strong>, specializing in <strong>bonded stores, ship chandlery, provisions, ship stores</strong>, and <strong>end-to-end logistics solutions</strong> for vessels calling at Indian ports.
                    </p>
                    <p class="lead text-muted mb-4">
                        Established in <strong>1992</strong>, Sabari Marine Enterprises is a professionally managed organization built on strong principles of <strong>compliance, reliability, and service excellence</strong>. We provide consistent, <strong>high-quality supply solutions</strong> to both foreign-going and coastal vessels, supporting the operational requirements of the global maritime industry. With a strong <strong>operational network covering major and minor ports across India</strong>, we cater to shipowners, ship managers, charterers, ship agencies, and international suppliers who demand <strong>professionalism, transparency, and timely execution</strong>.
                    </p>
                    <p class="lead text-muted mb-4">
                        Our experienced team understands the <strong>critical nature of vessel operations and port schedules</strong>, enabling us to deliver <strong>time-bound solutions</strong> without compromise on <strong>quality or regulatory adherence</strong>.
                    </p>

                    <div class="row mb-4">
                        <div class="col-md-6 mb-3">
                            <ul class="list-unstyled custom-list text-muted">
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Marine Engineering</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Logistics Excellence</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Technical Consulting</li>
                            </ul>
                        </div>
                        <div class="col-md-6 mb-3">
                            <ul class="list-unstyled custom-list text-muted">
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> 24/7 Support</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Safety First Protocol</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Sustainable Practices</li>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo $base_url; ?>/about" class="btn btn-primary btn-lg rounded-pill px-5 shadow-sm hover-up">
                        Learn More About Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Products Section -->
<section class="products-section py-5 bg-light position-relative overflow-hidden">
    <!-- Vertical Dotted Lines Decor (Left) -->
    <div class="vertical-lines-decor d-none d-lg-flex left-decor">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>

    <div class="container py-lg-5">
        <div class="text-center mb-5" data-aos="fade-up">
            <h6 class="text-dark text-uppercase fw-bold letter-spacing-2 mb-2 badge-dotted">Our Solutions</h6>
            <h2 class="display-5 fw-bold" style="color: #0b057d;">Comprehensive Marine Supplies</h2>
        </div>

        <div class="swiper products-slider pb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                <!-- Product 1 -->
                <div class="swiper-slide">
                    <a href="<?php echo $base_url; ?>/products/fresh-provisions" class="text-decoration-none">
                        <div class="product-card">
                            <div class="card-image">
                                <img src="<?php echo $base_url; ?>/assets/images/home/card_provisions_professional.jpg" alt="Provisions">
                                <div class="overlay"></div>
                                <div class="card-icon">
                                    <i class="bi bi-basket3-fill"></i>
                                </div>
                            </div>
                            <div class="card-content">
                                <h3>Provisions</h3>
                                <div class="hover-content">
                                    <p>Fresh, frozen, and dry provisions sourced from certified suppliers ensuring quality and hygiene.</p>
                                    <span class="details-link">View Details <i class="bi bi-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Product 2 -->
                <div class="swiper-slide">
                    <a href="<?php echo $base_url; ?>/products/bonded-stores" class="text-decoration-none">
                        <div class="product-card">
                            <div class="card-image">
                                <img src="<?php echo $base_url; ?>/assets/images/home/hero3.png" alt="Bonded Stores">
                                <div class="overlay"></div>
                                <div class="card-icon">
                                    <i class="bi bi-box-seam-fill"></i>
                                </div>
                            </div>
                            <div class="card-content">
                                <h3>Bonded Stores</h3>
                                <div class="hover-content">
                                    <p>Wide range of duty-free goods including beverages, cigarettes, and confectionery.</p>
                                    <span class="details-link">View Details <i class="bi bi-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Product 3 -->
                <div class="swiper-slide">
                    <a href="<?php echo $base_url; ?>/products/dunnage-supply" class="text-decoration-none">
                        <div class="product-card">
                            <div class="card-image">
                                <img src="<?php echo $base_url; ?>/assets/images/home/card_deck_stores_professional.jpg" alt="Deck Stores">
                                <div class="overlay"></div>
                                <div class="card-icon">
                                    <i class="bi bi-anchor-fill"></i>
                                </div>
                            </div>
                            <div class="card-content">
                                <h3>Deck Stores</h3>
                                <div class="hover-content">
                                    <p>Essential deck equipment, paints, brushes, and maintenance supplies.</p>
                                    <span class="details-link">View Details <i class="bi bi-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Product 4 -->
                <div class="swiper-slide">
                    <a href="<?php echo $base_url; ?>/products/steel-pipes" class="text-decoration-none">
                        <div class="product-card">
                            <div class="card-image">
                                <img src="<?php echo $base_url; ?>/assets/images/home/card_engine_stores_professional.jpg" alt="Engine Stores">
                                <div class="overlay"></div>
                                <div class="card-icon">
                                    <i class="bi bi-gear-fill"></i>
                                </div>
                            </div>
                            <div class="card-content">
                                <h3>Engine Stores</h3>
                                <div class="hover-content">
                                    <p>High-quality tools, bearings, screws, and engine room consumables.</p>
                                    <span class="details-link">View Details <i class="bi bi-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Product 5 -->
                <div class="swiper-slide">
                    <a href="<?php echo $base_url; ?>/products/lsa-liferafts" class="text-decoration-none">
                        <div class="product-card">
                            <div class="card-image">
                                <img src="<?php echo $base_url; ?>/assets/images/home/card_safety_equipment_professional.jpg" alt="Safety Equipment">
                                <div class="overlay"></div>
                                <div class="card-icon">
                                    <i class="bi bi-shield-fill-check"></i>
                                </div>
                            </div>
                            <div class="card-content">
                                <h3>Safety Equipment</h3>
                                <div class="hover-content">
                                    <p>Lifesaving appliances, fire fighting equipment, and protective gear.</p>
                                    <span class="details-link">View Details <i class="bi bi-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!-- Customs-Approved Special Bonded Warehouse Section -->
<section class="bonded-warehouse-section py-5 position-relative overflow-hidden">
    <!-- Vertical Dotted Lines Decor (Right) -->
    <div class="vertical-lines-decor d-none d-lg-flex right-decor">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>

    <div class="container py-lg-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="warehouse-content">
                    <h6 class="text-dark text-uppercase fw-bold letter-spacing-2 mb-3 badge-dotted">Customs-Approved License Holder</h6>
                    <h2 class="display-5 fw-bold mb-4" style="color: #0b057d;">Special Bonded Warehouse</h2>
                    <p class="lead text-dark fw-medium mb-4" style="font-size: 1.25rem; line-height: 1.6;">
                        We are proud to be a <strong>Customs-approved Special Bonded Warehouse license holder</strong>, a distinction that enables us to <strong>directly import</strong> bonded products from internationally reputed breweries and distilleries across the world.
                    </p>
                    <p class="text-dark mb-4" style="font-size: 1.1rem;">
                        Our bonded warehouse, located at <strong>Kandla & Vizhinjam Ports</strong>, is fully compliant with Indian Customs regulations and allows us to:
                    </p>
                    <div class="warehouse-features mb-4">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="d-flex align-items-start mb-3">
                                    <div class="feature-icon-box-small me-2">
                                        <i class="bi bi-box-seam-fill"></i>
                                    </div>
                                    <p class="text-dark fw-semibold small mb-0">Robust Inventory of premium products</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start mb-3">
                                    <div class="feature-icon-box-small me-2">
                                        <i class="bi bi-lightning-charge-fill"></i>
                                    </div>
                                    <p class="text-dark fw-semibold small mb-0">Faster supply turnaround</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start mb-3">
                                    <div class="feature-icon-box-small me-2">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <p class="text-dark fw-semibold small mb-0">Competitive pricing</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start mb-3">
                                    <div class="feature-icon-box-small me-2">
                                        <i class="bi bi-shield-check"></i>
                                    </div>
                                    <p class="text-dark fw-semibold small mb-0">Full compliance & traceability</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-card p-4 rounded-4 bg-light border-0">
                        <h5 class="fw-bold mb-3" style="color: #0b057d;">Bonded Products Portfolio</h5>
                        <div class="row g-2">
                            <div class="col-md-12 mb-2">
                                <div class="portfolio-item d-flex align-items-center bg-white p-2 rounded shadow-sm">
                                    <i class="bi bi-circle-fill text-warning me-2"></i>
                                    <span class="text-dark fw-bold">Assorted Imported Provisions</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portfolio-item d-flex align-items-center mb-1">
                                    <i class="bi bi-patch-check-fill me-2" style="color: #0b057d;"></i>
                                    <span class="text-dark small fw-medium">International Liquor Brands</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portfolio-item d-flex align-items-center mb-1">
                                    <i class="bi bi-patch-check-fill me-2" style="color: #0b057d;"></i>
                                    <span class="text-dark small fw-medium">Globally Recognized Wines</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portfolio-item d-flex align-items-center mb-1">
                                    <i class="bi bi-patch-check-fill me-2" style="color: #0b057d;"></i>
                                    <span class="text-dark small fw-medium">Assorted Beers</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portfolio-item d-flex align-items-center mb-1">
                                    <i class="bi bi-patch-check-fill me-2" style="color: #0b057d;"></i>
                                    <span class="text-dark small fw-medium">Reputed Cigarettes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="">
                    <div class="image-box">
                        <img src="<?php echo $base_url; ?>/assets/images/products/BondedStores/8.png" alt="Special Bonded Warehouse" class="img-fluid rounded-4 shadow-lg">
                        <div class="experience-badge shadow-sm">
                            <span class="number">30+</span>
                            <span class="text">Years of Trust</span>
                        </div>
                    </div>
                    <div class="accent-frame"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Sabari Marine? -->
<section class="why-choose-section py-5 position-relative overflow-hidden">
    <!-- Vertical Dotted Lines Decor -->
    <div class="vertical-lines-decor d-none d-lg-flex left-decor">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>

    <div class="container py-lg-5">
        <div class="row align-items-center">
            <!-- Content Side -->
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                <div class="why-choose-content">
                    <h6 class="text-dark text-uppercase fw-bold letter-spacing-2 mb-3 badge-dotted">Why Choose Us</h6>
                    <h2 class="display-5 fw-bold mb-4" style="color: #0b057d;">Excellence in Every Supply</h2>
                    <p class="lead text-muted mb-5">
                        Sabari Marine Enterprise is a leading provider of ship chandlery services, delivering a wide range of products with precision and professionalism.
                    </p>

                    <div class="features-grid">
                        <div class="feature-item d-flex mb-4">
                            <div class="icon-wrapper flex-shrink-0 me-3">
                                <i class="bi bi-trophy-fill text-primary fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2 text-dark">Proven Industry Expertise</h5>
                                <p class="text-muted mb-0">Strong maritime domain knowledge enabling us to understand vessel requirements and port operations.</p>
                            </div>
                        </div>

                        <div class="feature-item d-flex mb-4">
                            <div class="icon-wrapper flex-shrink-0 me-3">
                                <i class="bi bi-shield-fill-check text-primary fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2 text-dark">Consistent Quality & Compliance</h5>
                                <p class="text-muted mb-0">Sourcing from trusted suppliers with strict quality control for safety and freshness.</p>
                            </div>
                        </div>

                        <div class="feature-item d-flex mb-4">
                            <div class="icon-wrapper flex-shrink-0 me-3">
                                <i class="bi bi-clock-history text-primary fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2 text-dark">On-Time, Every Time</h5>
                                <p class="text-muted mb-0">Streamlined logistics ensuring timely delivery to minimize vessel downtime.</p>
                            </div>
                        </div>

                        <div class="feature-item d-flex mb-4">
                            <div class="icon-wrapper flex-shrink-0 me-3">
                                <i class="bi bi-sliders text-primary fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2 text-dark">Customized Supply Solutions</h5>
                                <p class="text-muted mb-0">Flexible packages tailored to vessel type, crew size, and voyage duration.</p>
                            </div>
                        </div>
                        <!-- Collapsible/Extra items could go here if needed, keeping it clean for now -->
                    </div>
                </div>
            </div>

            <!-- Collage Side -->
            <div class="col-lg-6" data-aos="fade-left">
                <div class="collage-wrapper">
                    <div class="collage-container">
                        <div class="collage-item item-1">
                            <img src="<?php echo $base_url; ?>/assets/images/products/ShipStoreSupplies/7.png" alt="Technical Excellence">
                        </div>
                        <div class="collage-item item-2">
                            <img src="<?php echo $base_url; ?>/assets/images/products/Compressors/7.png" alt="Machinery Spares">
                        </div>
                        <div class="collage-item item-3">
                            <img src="<?php echo $base_url; ?>/assets/images/products/CraneParts/7.png" alt="Deck Equipment">
                        </div>
                        <div class="collage-item item-4">
                            <img src="<?php echo $base_url; ?>/assets/images/products/LifeSaving/7.png" alt="Safety Solutions">
                        </div>
                        <div class="collage-item item-5">
                            <img src="<?php echo $base_url; ?>/assets/images/products/Battery/7.png" alt="Marine Power">
                        </div>
                        <div class="collage-item item-6">
                            <img src="<?php echo $base_url; ?>/assets/images/products/Pyrotechnics/7.png" alt="Emergency Gear">
                        </div>
                    </div>
                    <!-- Absolute decor elements -->
                    <div class="decor-circle"></div>
                    <div class="decor-dots"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pan-India Operational Presence -->
<section class="pan-india-section py-5 bg-white position-relative overflow-hidden">
    <!-- Vertical Dotted Lines Decor -->
    <div class="vertical-lines-decor d-none d-lg-flex right-decor">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>

    <div class="container py-lg-5">
        <div class="row justify-content-center mb-5 text-center" data-aos="fade-up">
            <div class="col-lg-10">
                <h6 class="text-dark text-uppercase fw-bold letter-spacing-2 mb-3 badge-dotted">Strategic Maritime Hubs</h6>
                <h2 class="display-5 fw-bold mb-4" style="color: #0b057d;">Pan-India Operational Presence</h2>
                <p class="lead text-muted mx-auto" style="max-width: 900px;">
                    <strong>Sabari Marine Enterprises</strong> operates extensively across the <strong>Indian coastline</strong>, ensuring seamless service availability at strategic maritime hubs, including major and minor ports.
                </p>
            </div>
        </div>

        <div class="row align-items-center g-5">
            <!-- Left Side: Globe Animation -->
            <div class="col-lg-6">
                <div class="globe-animation-wrapper">
                    <!-- Technical Corner Accents -->
                    <div class="frame-corner corner-tl"></div>
                    <div class="frame-corner corner-tr"></div>
                    <div class="frame-corner corner-bl"></div>
                    <div class="frame-corner corner-br"></div>

                    <!-- Central Globe -->
                    <div class="globe-container" data-aos="zoom-in" data-aos-duration="1500">
                        <div class="globe-map">
                            <img src="<?php echo $base_url; ?>/assets/images/home/india_map_presence.jpg" alt="Maritime Globe" class="earth-globe-img">
                        </div>
                    </div>

                    <!-- Base Orbit Ring -->
                    <div class="orbit-ring"></div>

                    <!-- Location Tags Pinned Around (Orbiting) -->
                    <div class="port-labels">
                        <div class="port-label label-west">
                            <div class="port-info-wrapper">
                                <span class="port-dot"></span>
                                <div class="port-info-mini">West Coast</div>
                            </div>
                        </div>
                        <div class="port-label label-maharashtra">
                            <div class="port-info-wrapper">
                                <span class="port-dot"></span>
                                <div class="port-info-mini">Nhava Sheva</div>
                            </div>
                        </div>
                        <div class="port-label label-south">
                            <div class="port-info-wrapper">
                                <span class="port-dot"></span>
                                <div class="port-info-mini">Trivandrum</div>
                            </div>
                        </div>
                        <div class="port-label label-east-south">
                            <div class="port-info-wrapper">
                                <span class="port-dot"></span>
                                <div class="port-info-mini">Tamil Nadu</div>
                            </div>
                        </div>
                        <div class="port-label label-east-mid">
                            <div class="port-info-wrapper">
                                <span class="port-dot"></span>
                                <div class="port-info-mini">Andhra</div>
                            </div>
                        </div>
                        <div class="port-label label-east-north">
                            <div class="port-info-wrapper">
                                <span class="port-dot"></span>
                                <div class="port-info-mini">Odisha & WB</div>
                            </div>
                        </div>
                        <div class="port-label label-minor">
                            <div class="port-info-wrapper">
                                <span class="port-dot"></span>
                                <div class="port-info-mini">Minor Ports</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Professional Data Presentation -->
            <div class="col-lg-6">
                <div class="port-data-container ps-lg-5" data-aos="fade-left">
                    <div class="section-badge mb-3">Our Operational Network</div>
                    <h3 class="fw-bold mb-4" style="color: #0b057d;">Coastal Coverage & Hubs</h3>

                    <div class="port-regions-list">
                        <!-- West Coast -->
                        <div class="region-item mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="d-flex align-items-center mb-2">
                                <div class="region-icon me-3">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <h5 class="fw-bold mb-0">Western Maritime Corridor</h5>
                            </div>
                            <p class="text-muted small ps-5 mb-0">
                                <strong class="text-dark">Gujarat:</strong>
                                <span class="location-tag">Kandla</span>, <span class="location-tag">Mundra</span>, <span class="location-tag">Sikka</span>, <span class="location-tag">Vadinar</span>, <span class="location-tag">Bedi</span>, <span class="location-tag">Pipavav</span>, <span class="location-tag">Okha</span>, <span class="location-tag">Porbandar</span>, <span class="location-tag">Navlakhi</span>.<br>
                                <strong class="text-dark mt-1 d-inline-block">Maharashtra:</strong>
                                <span class="location-tag">Nhava Sheva (JNPT)</span>, <span class="location-tag">Mumbai Port</span>.
                            </p>
                        </div>

                        <!-- South & East -->
                        <div class="region-item mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="d-flex align-items-center mb-2">
                                <div class="region-icon me-3">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <h5 class="fw-bold mb-0">Southern & Eastern Hubs</h5>
                            </div>
                            <p class="text-muted small ps-5 mb-0">
                                <strong class="text-dark">Kerala:</strong> <span class="location-tag">Vizhinjam (Trivandrum)</span>.<br>
                                <strong class="text-dark mt-1 d-inline-block">Tamil Nadu:</strong> <span class="location-tag">Chennai</span>, <span class="location-tag">Tuticorin</span>, <span class="location-tag">Ennore</span>.<br>
                                <strong class="text-dark mt-1 d-inline-block">Andhra:</strong> <span class="location-tag">Vizag</span>, <span class="location-tag">Kakinada</span>, <span class="location-tag">Krishnapatnam</span>.
                            </p>
                        </div>

                        <!-- North East -->
                        <div class="region-item mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="d-flex align-items-center mb-2">
                                <div class="region-icon me-3">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <h5 class="fw-bold mb-0">North-Eastern Seaboard</h5>
                            </div>
                            <p class="text-muted small ps-5 mb-0">
                                <strong class="text-dark">Odisha:</strong> <span class="location-tag">Paradip</span>, <span class="location-tag">Dhamra</span>.<br>
                                <strong class="text-dark mt-1 d-inline-block">West Bengal:</strong> <span class="location-tag">Haldia</span>, <span class="location-tag">Kolkata Port</span>.
                            </p>
                        </div>

                        <!-- Minor Ports -->
                        <div class="region-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="d-flex align-items-center mb-2">
                                <div class="region-icon me-3">
                                    <i class="bi bi-layers-fill"></i>
                                </div>
                                <h5 class="fw-bold mb-0">Pan-India Minor Ports</h5>
                            </div>
                            <p class="text-muted small ps-5 mb-0">
                                Comprehensive logistics and supply coverage across <strong>all notified minor ports</strong> along the 7,500km+ Indian coastline.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>


<!-- Strategic Goals Section -->
<!-- Goals Section -->
<section class="goals-section py-5 bg-light position-relative overflow-hidden">
    <!-- Vertical Dotted Lines Decor -->
    <div class="vertical-lines-decor d-none d-lg-flex right-decor">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>

    <div class="container py-lg-5">
        <div class="row justify-content-center mb-5 text-center">
            <div class="col-lg-8">
                <span class="text-dark text-uppercase fw-bold letter-spacing-2 mb-3 badge-dotted">Strategic Roadmap</span>
                <h2 class="display-5 fw-bold text-dark">Our Goals</h2>
            </div>
        </div>

        <div class="row g-4">
            <!-- Goal 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="goal-step-card h-100">
                    <div class="step-number">01</div>
                    <div class="goal-icon-wrapper mb-4 text-primary">
                        <i class="bi bi-box-seam fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Quality Provisions</h5>
                    <p class="text-secondary mb-0">To consistently deliver high-quality marine provisions and vessel supplies that meet international standards.</p>
                </div>
            </div>

            <!-- Goal 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="goal-step-card h-100">
                    <div class="step-number">02</div>
                    <div class="goal-icon-wrapper mb-4 text-primary">
                        <i class="bi bi-globe fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Expand Coverage</h5>
                    <p class="text-secondary mb-0">To expand service coverage across key ports and maritime hubs.</p>
                </div>
            </div>

            <!-- Goal 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="goal-step-card h-100">
                    <div class="step-number">03</div>
                    <div class="goal-icon-wrapper mb-4 text-primary">
                        <i class="bi bi-people-fill fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Strengthen Partnerships</h5>
                    <p class="text-secondary mb-0">To strengthen long-term partnerships with ship owners, operators, and fleet managers.</p>
                </div>
            </div>

            <!-- Goal 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="goal-step-card h-100">
                    <div class="step-number">04</div>
                    <div class="goal-icon-wrapper mb-4 text-primary">
                        <i class="bi bi-arrow-repeat fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Improve Processes</h5>
                    <p class="text-secondary mb-0">To continuously improve operational processes for faster turnaround and higher efficiency.</p>
                </div>
            </div>

            <!-- Goal 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="goal-step-card h-100">
                    <div class="step-number">05</div>
                    <div class="goal-icon-wrapper mb-4 text-primary">
                        <i class="bi bi-graph-up-arrow fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Sustainable Growth</h5>
                    <p class="text-secondary mb-0">To invest in people, systems, and supplier networks to support sustainable business growth.</p>
                </div>
            </div>

            <!-- Goal 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="goal-step-card h-100">
                    <div class="step-number">06</div>
                    <div class="goal-icon-wrapper mb-4 text-primary">
                        <i class="bi bi-award-fill fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Service Excellence</h5>
                    <p class="text-secondary mb-0">To build a reputation as a preferred marine supply partner known for trust, transparency, and service excellence.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ Section -->
<section class="faq-section py-3 position-relative overflow-hidden">
    <div class="faq-bg"></div>
    <!-- Vertical Dotted Lines Decor (Right) -->
    <div class="vertical-lines-decor d-none d-lg-flex right-decor">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>


    <div class="container py-lg-5 rounded-pill " style="background: rgba(255, 255, 255, 0.83);">
        <div class="text-center mb-5" data-aos="fade-up">
            <h6 class="text-dark text-uppercase fw-bold letter-spacing-2 mb-2 badge-dotted">FAQ</h6>
            <h2 class="display-5 fw-bold" style="color: #0b057d;">Common Questions</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <div class="accordion accordion-flush" id="marineFaq">
                    <!-- FAQ 1 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                What range of marine supplies do you provide?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#marineFaq">
                            <div class="accordion-body text-muted">
                                Sabari Marine Enterprise provides a comprehensive range of ship chandlery services, including fresh and frozen provisions, bonded stores, deck and engine supplies, safety equipment, and technical spares.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                How do you ensure the quality of provisions?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#marineFaq">
                            <div class="accordion-body text-muted">
                                We source our products only from certified and trusted suppliers. Our staff conducts rigorous quality checks at every stage, from sourcing to delivery, ensuring all provisions meet international maritime hygiene and safety standards.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Which ports do you currently serve?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#marineFaq">
                            <div class="accordion-body text-muted">
                                While we are based in Kochi, we have a strong network covering major Indian ports. Our streamlined logistics ensure that we can meet your vessel's requirements at several key locations with minimal delay.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Do you offer emergency 24/7 delivery services?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#marineFaq">
                            <div class="accordion-body text-muted">
                                Yes, we understand maritime operations never sleep. Our dedicated logistics team is available 24/7 to handle urgent requests and ensure your vessel receives its supplies on time, regardless of the schedule.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                How can I request a quote for supplies?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#marineFaq">
                            <div class="accordion-body text-muted">
                                You can easily request a quote by visiting our 'Contact Us' page or emailing us directly with your vessel's inventory list. Our team typically responds with a detailed and competitive proposal within a few hours.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Unique 3D Contact Section -->
<section class="contact-unique-section py-5 position-relative overflow-hidden" id="contact">
    <!-- Floating 3D Background Elements -->
    <div class="floating-supplies-bg">
        <img src="<?php echo $base_url; ?>/assets/images/contact/supplies_3d.png" class="supplies-main-img" alt="Marine Supplies 3D">
        <div class="glow-orb orb-1"></div>
        <div class="glow-orb orb-2"></div>
    </div>

    <div class="container position-relative py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="glass-form-container" data-aos="zoom-in-up" data-aos-duration="1200">
                    <div class="row g-0 align-items-center">
                        <!-- Form Info Side -->
                        <div class="col-lg-5 p-4 p-md-5 bg-primary text-white contact-info-panel rounded-start-5 d-none d-lg-block">
                            <h6 class="text-uppercase fw-bold mb-4 opacity-75 letter-spacing-2">Why Sabari Marine?</h6>
                            <h2 class="display-6 fw-bold mb-4">Your Trusted Partner at Sea</h2>
                            <p class="mb-5 opacity-75">From critical engine spares to the freshest provisions, we ensure your vessel is always ready for its next journey.</p>

                            <div class="contact-quick-links">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="icon-circle me-3"><i class="bi bi-geo-alt-fill"></i></div>
                                    <span>97/1,Ground Floor,Sector No.1,Near Balavatika Circle,Oslo,Gandhidham,Kutch,Gujarat 370201</span>
                                </div>
                                <div class="d-flex align-items-center mb-4">
                                    <div class="icon-circle me-3"><i class="bi bi-telephone-fill"></i></div>
                                    <span>+91 94283 69805</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="icon-circle me-3"><i class="bi bi-envelope-heart-fill"></i></div>
                                    <span>sales@sabarimarine.in</span>
                                </div>
                            </div>
                        </div>

                        <!-- Actual Form Side -->
                        <div class="col-lg-7 p-4 p-md-5 glass-form-body">
                            <div class="text-center text-lg-start mb-4">
                                <h6 class="text-primary text-uppercase fw-bold letter-spacing-2 mb-2">Contact Us Today</h6>
                                <h2 class="h1 fw-bold mb-0" style="color: #0b057d;">Start a Conversation</h2>
                            </div>

                            <form action="<?php echo $base_url; ?>/submit-contact" method="POST" class="modern-contact-form" id="homeContactForm">
                                <input type="hidden" name="recaptcha_response" id="homeRecaptchaResponse">
                                <!-- Honeypot Field -->
                                <div style="display:none;">
                                    <label>Keep blank</label>
                                    <input type="text" name="hp_field" id="hp_field_home">
                                </div>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="input-group-modern">
                                            <input type="text" name="name" placeholder="Your Name" required>
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group-modern">
                                            <input type="email" name="email" placeholder="Email Address" required>
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group-modern">
                                            <input type="text" name="service" placeholder="Service Needed (e.g., Provisions, Spares)">
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group-modern">
                                            <textarea name="message" placeholder="Tell us about your requirements..." rows="4" required></textarea>
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn-3d-submit">
                                            <span class="btn-text">Send Message</span>
                                            <span class="btn-icon"><i class="bi bi-arrow-right-short"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <script>
                                document.getElementById('homeContactForm').addEventListener('submit', function(e) {
                                    e.preventDefault();

                                    // Key Check
                                    const siteKey = 'YOUR_RECAPTCHA_SITE_KEY';
                                    if (siteKey === 'YOUR_RECAPTCHA_SITE_KEY') {
                                        alert('Error: reCAPTCHA Site Key is not configured. Message cannot be sent.');
                                        return;
                                    }

                                    grecaptcha.ready(function() {
                                        grecaptcha.execute(siteKey, {
                                            action: 'submit'
                                        }).then(function(token) {
                                            document.getElementById('homeRecaptchaResponse').value = token;
                                            document.getElementById('homeContactForm').submit();
                                        });
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'components/footer.php'; ?>