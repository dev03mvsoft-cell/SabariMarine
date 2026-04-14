<?php
$page_title = "Tested & Certified Marine Battery Solutions";
$page_description = "High-performance, marine-grade batteries engineered for long service life and reliable power for critical onboard systems and emergency equipment.";
$page_image = $base_url . "/assets/images/products/Battery/1.png";

// Detailed Specs for Information Density
$page_specs = [
    "Compliance" => "SOLAS & IMO Compliant",
    "Battery Types" => "Sealed, Maintenance-Free Operation",
    "Application" => "Emergency Lighting, Radio, Navigation Systems",
    "Standard" => "International Maritime Safety Verified",
    "Documentation" => "Full Testing & Handling records"
];

$page_tags = ["Marine-Grade Power", "Maintenance Free", "Emergency Backup", "Navigation Systems", "Certified Quality"];

// High-impact imagery for showcase
$page_gallery = [
    $base_url . "/assets/images/products/Battery/2.png",
    $base_url . "/assets/images/products/Battery/3.png",
    $base_url . "/assets/images/products/Battery/4.png",
    $base_url . "/assets/images/products/Battery/5.png"
];

$page_overview_title = "Reliable Power for Critical Marine Systems";
$page_overview_text = "
    <p class='mb-4'>Sabari Marine Enterprise supplies high-performance, marine-grade batteries engineered to deliver reliable power for critical onboard systems. Our batteries are designed for long service life and sealed, maintenance-free operation — making them ideal for demanding marine environments where consistent performance is essential.</p>
    <p>All battery products are tested and certified to meet international maritime safety and performance standards, ensuring suitability for SOLAS and IMO-compliant vessels from commercial shipping to offshore platforms.</p>
";

$page_additional_text = "
    <h5 class='fw-bold text-dark mb-3'>Operational Reliability & Compliance</h5>
    <p>From emergency power systems to essential communication equipment, our marine battery solutions ensure dependable, uninterrupted power when it matters most. We provide proper handling, rigorous testing, and complete documentation for every unit delivered.</p>
    <p>With strong sourcing and efficient port-side coordination, Sabari Marine Enterprise ensures timely availability and delivery across major Indian ports — helping keep your vessels safe, compliant, and fully operational.</p>
";

$page_features = [
    [
        "title" => "Certified Marine Grade",
        "desc" => "Certified for use on SOLAS and IMO-regulated vessels, meeting rigorous international safety standards.",
        "icon" => "bi-shield-check"
    ],
    [
        "title" => "Maintenance-Free Design",
        "desc" => "Long-life, sealed battery solutions designed to perform reliably in harsh marine and offshore conditions.",
        "icon" => "bi-gear-wide-connected"
    ],
    [
        "title" => "System Critical Support",
        "desc" => "Ideal for emergency lighting, radios, communication equipment, and navigation-critical systems.",
        "icon" => "bi-broadcast"
    ],
    [
        "title" => "Replacement Planning",
        "desc" => "Expert support for battery selection and replacement planning to avoid vessel downtime.",
        "icon" => "bi-calendar-check"
    ]
];

include __DIR__ . '/product-template.php';
