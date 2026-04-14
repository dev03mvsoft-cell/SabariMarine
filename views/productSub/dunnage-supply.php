<?php
$page_title = "Packing & Dunnage Supply";
$page_description = "Comprehensive range of packing and dunnage materials designed to protect cargo and ensure safe handling, storage, and transportation at sea.";
$page_image = $base_url . "/assets/images/products/PackingDunnage/1.png";

// Detailed Specs for Information Density
$page_specs = [
    "Standards" => "ISPM-15 Compliant & Heat-Treated",
    "Material Range" => "Wooden, Plastic, Reusable Alternatives",
    "Protocols" => "Vapor & Moisture Protection Integrated",
    "Applications" => "Containerized, Breakbulk & Project Cargo",
    "Availability" => "Daily Stock in All Major Indian Ports"
];

$page_tags = ["ISPM-15 Certified", "Cargo Protection", "Moisture Barrier", "Custom Crating", "Export Grade"];

// High-impact imagery for showcase
$page_gallery = [
    $base_url . "/assets/images/products/PackingDunnage/2.png",
    $base_url . "/assets/images/products/PackingDunnage/3.png",
    $base_url . "/assets/images/products/PackingDunnage/4.png",
    $base_url . "/assets/images/products/PackingDunnage/5.png"
];

$page_overview_title = "Compliant, Durable & Cargo-Safe Packing Solutions";
$page_overview_text = "
    <p class='mb-4'>Sabari Marine Enterprise provides a comprehensive range of packing and dunnage materials designed to protect cargo and ensure safe handling, storage, and transportation at sea. Our solutions are suitable for containerized, breakbulk, and project cargo, helping to minimize movement, absorb impact, and prevent cargo damage during transit.</p>
    <p>Our product range includes treated wooden dunnage, pallets, blocking and bracing materials, moisture protection products, and export-grade packaging components — all selected to meet marine and international shipping requirements.</p>
";

$page_additional_text = "
    <h5 class='fw-bold text-dark mb-3'>Export Compliance & Cargo Integrity</h5>
    <p>Our packing and dunnage materials are designed to meet both marine operational needs and export compliance standards. By using high-quality, certified materials, we help protect sensitive, heavy, and high-value cargo from shifting, moisture, and impact damage.</p>
    <p>Trusted by fleet operators, cargo handlers, and logistics teams, Sabari Marine Enterprise delivers reliable, compliant, and cost-effective packing and dunnage solutions — ensuring cargo safety from port to destination.</p>
";

$page_features = [
    [
        "title" => "ISPM-15 Certification",
        "desc" => "Fully compliant heat-treated wood and pallets suitable for international export and regulated shipping lanes.",
        "icon" => "bi-tree-fill"
    ],
    [
        "title" => "Moisture & Vapor Control",
        "desc" => "Advanced moisture barriers and anti-corrosion packaging to protect sensitive cargo from the high-humidity marine environment.",
        "icon" => "bi-droplet-half"
    ],
    [
        "title" => "Custom Crating Support",
        "desc" => "Specialized machinery packing and custom crating solutions for irregular project cargo and heavy equipment.",
        "icon" => "bi-hammer"
    ],
    [
        "title" => "Vibration & Shock Absorption",
        "desc" => "High-grade shock-absorbing materials designed to mitigate vibration impact during rough sea transit.",
        "icon" => "bi-bounding-box"
    ]
];

include __DIR__ . '/product-template.php';
