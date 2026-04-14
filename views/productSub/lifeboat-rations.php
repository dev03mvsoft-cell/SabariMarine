<?php
$page_title = "Lifeboat Food Rations & Drinking Water";
$page_description = "SOLAS-approved emergency food rations and potable drinking water packs specifically designed for lifeboats, life rafts, and survival equipment.";
$page_image = $base_url . "/assets/images/products/lifeboat/1.png";

// Detailed Specs for Information Density
$page_specs = [
    "Compliance" => "SOLAS & LSA Code Requirements",
    "Shelf Life" => "5 Years (Typical) / Sealed Packaging",
    "Packaging" => "Tamper-Evident & Moisture Resistant",
    "Certification" => "DNV/USCG/International Standards",
    "Traceability" => "Batch Details & Expiry Certification"
];

$page_tags = ["Emergency Sustenance", "Sealed Water Packs", "Survival Rations", "SOLAS Compliance", "Audit Ready"];

// High-impact imagery for showcase
$page_gallery = [
    $base_url . "/assets/images/products/lifeboat/2.png",
    $base_url . "/assets/images/products/lifeboat/3.png",
    $base_url . "/assets/images/products/lifeboat/4.png",
    $base_url . "/assets/images/products/lifeboat/5.png"
];

$page_overview_title = "Certified Emergency Survival Provision Solutions";
$page_overview_text = "
    <p class='mb-4'>Sabari Marine Enterprise supplies SOLAS-approved emergency food rations and potable drinking water packs specifically designed for lifeboats, life rafts, and survival equipment. These essential survival provisions are manufactured and packaged to ensure long shelf life, durability, and safety under extreme marine conditions.</p>
    <p>All rations and water units are delivered in sealed, tamper-evident packaging and are supported by full documentation, including batch details, expiry dates, and certification for regulatory compliance.</p>
";

$page_additional_text = "
    <h5 class='fw-bold text-dark mb-3'>Compliance, Documentation & Readiness</h5>
    <p>Our emergency survival provisions are trusted by ship owners and fleet managers to ensure vessels remain fully prepared for emergency situations. We support inspection readiness and safety compliance by providing timely replacements and complete certification for vessel records and inspections.</p>
    <p>With Sabari Marine Enterprise, your vessel is equipped with approved, reliable, and inspection-ready lifeboat rations and water supplies — helping protect crew welfare and maintain full SOLAS compliance at every port call across major Indian ports.</p>
";

$page_features = [
    [
        "title" => "SOLAS Approved Sustenance",
        "desc" => "Complete lifeboat food rations and emergency drinking water packs meeting official SOLAS standards.",
        "icon" => "bi-award"
    ],
    [
        "title" => "Sealed Protection",
        "desc" => "Long shelf-life, moisture-resistant sealed packaging with tamper-proof and contamination-protected pouches.",
        "icon" => "bi-shield-lock"
    ],
    [
        "title" => "Batch Traceability",
        "desc" => "Supplied with full batch details and expiry certification to simplify inventory management and safety audits.",
        "icon" => "bi-journal-check"
    ],
    [
        "title" => "Rapid Stock Replacement",
        "desc" => "Fast delivery of replacement units for expired or damaged stock at all major Indian commercial ports.",
        "icon" => "bi-truck"
    ]
];

include __DIR__ . '/product-template.php';
