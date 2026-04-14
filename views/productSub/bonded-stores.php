<?php
$page_title = "Bonded Stores Supply";
$page_description = "Complete range of bonded store supplies including duty-free essentials, beverages, and personal care items, in full compliance with customs and maritime regulations.";
$page_image = $base_url . "/assets/images/products/BondedStores/1.png";

// Detailed Specs for Information Density
$page_specs = [
    "Product Types" => "Beverages, Tobacco, Confectionery, Toiletries",
    "Compliance" => "Full Customs & Port Authority Clearance",
    "Security" => "Sealed & Controlled Handling Procedures",
    "Lead Time" => "Vessel Schedule Aligned",
    "Documentation" => "Complete Bonded Inventory Control"
];

$page_tags = ["Duty-Free", "Customs Compliant", "Branded Goods", "Crew Welfare", "Sealed Delivery"];

// High-impact imagery for showcase
$page_gallery = [
    $base_url . "/assets/images/products/BondedStores/2.png",
    $base_url . "/assets/images/products/BondedStores/3.png",
    $base_url . "/assets/images/products/BondedStores/4.png",
    $base_url . "/assets/images/products/BondedStores/5.png"
];

$page_overview_title = "Duty-Free, Compliant & Branded Bonded Supplies";
$page_overview_text = "
    <p class='mb-4'>Sabari Marine Enterprise provides a complete range of bonded store supplies to meet crew welfare and onboard convenience requirements, in full compliance with customs and maritime regulations. Our bonded offerings include premium cigarettes, confectionery, personal care items, toiletries, beverages, and other approved duty-free essentials sourced from reliable and authorized suppliers.</p>
    <p>We manage the entire bonded supply process — from sourcing and documentation to customs coordination and onboard delivery — ensuring a smooth, compliant, and hassle-free experience for vessel operators and port agents.</p>
";

$page_additional_text = "
    <h5 class='fw-bold text-dark mb-3'>Regulatory Standards & Crew Satisfaction</h5>
    <p>Our bonded supply system is designed to meet both regulatory standards and crew expectations. Every order is carefully processed with accurate paperwork, proper sealing, and controlled handling to ensure compliance with port and customs authorities.</p>
    <p>With efficient port coordination and a strong bonded supplier network, Sabari Marine Enterprise delivers premium bonded goods directly to your vessel — quickly, reliably, and with complete peace of mind. Our service helps enhance crew satisfaction while maintaining strict adherence to international maritime and customs requirements.</p>
";

$page_features = [
    [
        "title" => "Branded Selection",
        "desc" => "Wide selection of approved duty-free items from leading international and trusted brands.",
        "icon" => "bi-stars"
    ],
    [
        "title" => "Customs Compliance",
        "desc" => "Full customs documentation and regulatory coordination for a hassle-free delivery experience.",
        "icon" => "bi-file-earmark-check"
    ],
    [
        "title" => "Secure Handling",
        "desc" => "Sealed delivery procedures and secure handling to maintain integrity and compliance.",
        "icon" => "bi-lock-fill"
    ],
    [
        "title" => "Inventory Control",
        "desc" => "Transparent billing and bonded inventory control for accurate vessel management.",
        "icon" => "bi-clipboard-data"
    ]
];

include __DIR__ . '/product-template.php';
