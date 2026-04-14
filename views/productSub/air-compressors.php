<?php
$page_title = "Compressors, Oils & Refrigeration System Spares";
$page_description = "Marine-grade air compressors, lubricating oils, and OEM-compatible spare parts for refrigeration, air conditioning, and accommodation system compressors.";
$page_image = $base_url . "/assets/images/products/Compressors/1.png";

// Detailed Specs for Information Density
$page_specs = [
    "Components" => "Compressors, Seals, Gaskets, Valves",
    "Compatibility" => "Major International OEM Brands",
    "Fluids" => "Lubricating Oils & Hydraulic Fluids",
    "Systems" => "Engine Room, Deck & AC Systems",
    "Quality" => "Factory-Tested with Warranty Support"
];

$page_tags = ["OEM Compatible", "Machinery Spares", "Service Kits", "Technical Sourcing", "Rapid Delivery"];

// High-impact imagery for showcase
$page_gallery = [
    $base_url . "/assets/images/products/Compressors/2.png",
    $base_url . "/assets/images/products/Compressors/3.png",
    $base_url . "/assets/images/products/Compressors/4.png",
    $base_url . "/assets/images/products/Compressors/5.png"
];

$page_overview_title = "Certified Marine Technical Spares with Assured Performance";
$page_overview_text = "
    <p class='mb-4'>Sabari Marine Enterprise supplies high-quality marine-grade air compressors, lubricating oils, and OEM-compatible spare parts for refrigeration, air conditioning, and accommodation system compressors. Our solutions are designed to support continuous, efficient operation of critical onboard machinery in demanding marine environments.</p>
    <p>We cater to engine room, deck, and accommodation system requirements, helping vessels maintain optimal performance, energy efficiency, and system reliability. Our team ensures accurate part matching and reliable supply for both routine maintenance and emergency repairs.</p>
";

$page_additional_text = "
    <h5 class='fw-bold text-dark mb-3'>Technical Expertise & Reliability</h5>
    <p>With access to a wide supplier network and strong technical sourcing capabilities, we ensure all spares are quality-checked and supplied with proper documentation to support vessel records and audits. Our focus is on minimizing downtime and supporting safe, long-term equipment reliability.</p>
    <p>At Sabari Marine Enterprise, we combine inventory strength and efficient port logistics to deliver dependable machinery spares — ensuring your vessel remains fully operational across all Indian ports.</p>
";

$page_features = [
    [
        "title" => "OEM Compatibility",
        "desc" => "Parts and service kits fully compatible with major international OEM brands, ensuring seamless integration.",
        "icon" => "bi-gear-wide-connected"
    ],
    [
        "title" => "Integrated Lubrication",
        "desc" => "Supply of high-performance lubricating oils specifically for compressors and auxiliary machinery.",
        "icon" => "bi-droplet-fill"
    ],
    [
        "title" => "Repair & Service Kits",
        "desc" => "Comprehensive valves, seals, gaskets, and filters bundled into convenient service kits for routine maintenance.",
        "icon" => "bi-tools"
    ],
    [
        "title" => "Breakdown Support",
        "desc" => "Fast sourcing and technical part identification to support urgent machinery repairs and breakdown requirements.",
        "icon" => "bi-lightning-charge"
    ]
];

include __DIR__ . '/product-template.php';
