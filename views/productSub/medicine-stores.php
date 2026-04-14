<?php
$page_title = "Medicine & Dispensary Supplies";
$page_description = "Marine-approved medical supplies and dispensary items to support onboard health, safety, and regulatory compliance, from first aid kits to complete ship medical chests.";
$page_image = $base_url . "/assets/images/products/Medicine/1.png";

// Detailed Specs for Information Density
$page_specs = [
    "Compliance" => "WHO/IMGS & International Maritime Guidelines",
    "Sourcing" => "Licensed Pharmaceutical Suppliers",
    "Inventory" => "Complete Ship Medical Chest Replenishment",
    "Handling" => "Cold-Chain Compatible (if required)",
    "Documentation" => "Certified Quality & Compliance Records"
];

$page_tags = ["Medical Chest", "First Aid", "Certified Pharma", "Emergency Care", "MARPOL Compliant"];

// High-impact imagery for showcase
$page_gallery = [
    $base_url . "/assets/images/products/Medicine/2.png",
    $base_url . "/assets/images/products/Medicine/3.png",
    $base_url . "/assets/images/products/Medicine/4.png",
    $base_url . "/assets/images/products/Medicine/5.png"
];

$page_overview_title = "Certified, Urgent & Regulation-Compliant Medical Solutions";
$page_overview_text = "
    <p class='mb-4'>Sabari Marine Enterprise provides marine-approved medical supplies and dispensary items to support onboard health, safety, and regulatory compliance. We supply everything from essential first aid items to complete ship medical chests and emergency medical stock, ensuring vessels are fully equipped to handle routine care and urgent medical situations at sea.</p>
    <p>All medical supplies are sourced from authorized and certified vendors to meet international maritime health and safety standards. Our precision in replenishment ensures that your vessel remains compliant with global health regulations at all times.</p>
";

$page_additional_text = "
    <h5 class='fw-bold text-dark mb-3'>Integrity & Rapid Response</h5>
    <p>Our team ensures accurate packing, proper labeling, and secure handling of all medical items to maintain product integrity and compliance. We understand the critical nature of medical readiness onboard, which is why we prioritize rapid processing and timely delivery to support crew health and vessel safety.</p>
    <p>With Sabari Marine Enterprise, you receive dependable, compliant, and professionally managed medical supply services — helping you maintain full readiness and peace of mind at sea.</p>
";

$page_features = [
    [
        "title" => "Medical Chest Replenishment",
        "desc" => "Complete ship medical chests and first aid kits organized as per international maritime medical guidelines.",
        "icon" => "bi-plus-circle-fill"
    ],
    [
        "title" => "Regulatory Compliance",
        "desc" => "Sourced from approved and licensed pharmaceutical suppliers with proper documentation and compliance records.",
        "icon" => "bi-file-earmark-medical"
    ],
    [
        "title" => "Cold-Chain Logistics",
        "desc" => "Available cold-chain handling for temperature-sensitive medicines to ensure potency and safety.",
        "icon" => "bi-thermometer-snow"
    ],
    [
        "title" => "Emergency Response",
        "desc" => "Fast response for urgent medical requirements, providing emergency medicines and consumables on priority.",
        "icon" => "bi-lightning-fill"
    ]
];

include __DIR__ . '/product-template.php';
