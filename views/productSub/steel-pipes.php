<?php
$page_title = "Steel Pipes & Fittings";
$page_description = "High-grade marine steel pipes, valves, and fittings in various dimensions and specifications for engine and deck maintenance.";
$page_image = $base_url . "/assets/images/products/SteelPipes/1.png";

// Detailed Specs for Information Density
$page_specs = [
    "Material" => "Galvanized Steel, Stainless Steel, Carbon Steel",
    "Standards" => "JIS, DIN, ANSI & ISO Global Standards",
    "Product Types" => "Seamless Pipes, Elbows, Flanges, Couplings",
    "Certification" => "Material Certificates & Pressure Tested",
    "Inventory" => "Full Range of Schedule & Pressure Ratings"
];

$page_tags = ["Marine Grade Steel", "Seamless Pipes", "Pressure Fittings", "Corrosion Resistant", "Class Approved"];

// High-impact imagery for showcase
$page_gallery = [
    $base_url . "/assets/images/products/SteelPipes/2.png",
    $base_url . "/assets/images/products/SteelPipes/3.png",
    $base_url . "/assets/images/products/SteelPipes/4.png",
    $base_url . "/assets/images/products/SteelPipes/5.png"
];

$page_overview_title = "Durable, Precision-Engineered & Class-Approved Steel Solutions";
$page_overview_text = "
    <p class='mb-4'>Sabari Marine Enterprise supplies a comprehensive range of high-grade marine steel pipes, valves, and fittings designed to meet the rigorous demands of vessel engine rooms and deck operations. Our inventory includes seamless and welded pipes, elbows, tees, reducers, flanges, and various coupling systems in diverse dimensions and material specifications.</p>
    <p>Every product is sourced from reputable manufacturers and is selected to withstand high-pressure environments, extreme temperatures, and the corrosive nature of marine conditions. We ensure that all supplies meet international maritime standards and are accompanied by the necessary material certificates for regulatory compliance.</p>
";

$page_additional_text = "
    <h5 class='fw-bold text-dark mb-3'>Quality Assurance & Technical Reliability</h5>
    <p>Our technical supply team ensures every fitting and pipe section matches your vessel's specific technical requirements and schedule ratings. By providing organized and precision-matched steel supplies, we help reduce maintenance complexity and ensure the long-term integrity of your vessel's piping systems.</p>
    <p>Trusted by technical managers and chief engineers, Sabari Marine Enterprise delivers dependable, resilient, and professionally managed steel store solutions — supporting safe and efficient vessel maintenance at every major Indian port.</p>
";

$page_features = [
    [
        "title" => "Diverse Material Inventory",
        "desc" => "Extensive stock of galvanized, stainless, and carbon steel components in various diameters and wall thicknesses.",
        "icon" => "bi-boxes"
    ],
    [
        "title" => "Pressure Rated Fittings",
        "desc" => "High-quality flanges, elbows, and tees designed for critical high-pressure and temperature-sensitive systems.",
        "icon" => "bi-gear-wide-connected"
    ],
    [
        "title" => "Standard Compliance",
        "desc" => "Products matched to JIS, DIN, and ANSI standards to ensure perfect compatibility with existing vessel infrastructure.",
        "icon" => "bi-check-circle-fill"
    ],
    [
        "title" => "Custom Cutting & Prep",
        "desc" => "Available precision cutting and preparation services to meet specific onboard installation requirements.",
        "icon" => "bi-scissors"
    ]
];

include __DIR__ . '/product-template.php';
