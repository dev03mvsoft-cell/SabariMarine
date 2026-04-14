<?php
$page_title = "Life-Saving Appliances (LSA) & Liferafts";
$page_description = "Complete range of life-saving appliances and emergency safety equipment, from certified liferafts to immersion suits, ensuring full SOLAS and IMO compliance.";
$page_image = $base_url . "/assets/images/products/LifeSaving/1.png";

// Detailed Specs for Information Density
$page_specs = [
    "Compliance" => "SOLAS & IMO Core Standards",
    "Product Types" => "New & Certified Pre-Owned Liferafts",
    "Safety Gear" => "Immersion Suits, Life Jackets, Lifebuoys",
    "Servicing" => "Periodic Inspection & Recertification",
    "Documentation" => "Certified by Authorized Marine Safety Bodies"
];

$page_tags = ["LSA Equipment", "SOLAS Compliant", "Safety Readiness", "Emergency Gear", "Inspected & Certified"];

// High-impact imagery for showcase
$page_gallery = [
    $base_url . "/assets/images/products/LifeSaving/2.png",
    $base_url . "/assets/images/products/LifeSaving/3.png",
    $base_url . "/assets/images/products/LifeSaving/4.png",
    $base_url . "/assets/images/products/LifeSaving/5.png"
];

$page_overview_title = "Certified, Inspected & Compliance-Ready Safety Equipment";
$page_overview_text = "
    <p class='mb-4'>Sabari Marine Enterprise supplies a complete range of life-saving appliances and emergency safety equipment to support full vessel safety readiness and regulatory compliance. Our portfolio includes new and certified pre-owned liferafts, immersion suits, life jackets, lifebuoys, and essential LSA spare parts — all selected to meet stringent international maritime safety requirements.</p>
    <p>Every product is supplied in accordance with SOLAS and IMO regulations to ensure maximum protection for crew and passengers during emergency situations. We assist ship owners and operators with servicing, testing, and compliance management to ensure all life-saving appliances remain fully functional and inspection-ready.</p>
";

$page_additional_text = "
    <h5 class='fw-bold text-dark mb-3'>Lifesaving Integrity & Preparedness</h5>
    <p>Our coordinated approach helps reduce compliance risks while improving onboard emergency preparedness. We provide full documentation support for audits and port state control, ensuring your vessel is always prepared for rigorous inspections.</p>
    <p>With Sabari Marine Enterprise, your vessel is equipped with approved, certified, and dependable LSA solutions — helping safeguard lives and maintain full safety compliance at every port call across major Indian ports.</p>
";

$page_features = [
    [
        "title" => "Certified LSA Equipment",
        "desc" => "New and certified liferafts, immersion suits, and lifebuoys from authorized marine safety authorities.",
        "icon" => "bi-shield-check"
    ],
    [
        "title" => "Recertification Support",
        "desc" => "Periodic inspection, testing, and coordination for liferaft repacking and LSA recertification.",
        "icon" => "bi-arrow-repeat"
    ],
    [
        "title" => "Emergency Response",
        "desc" => "Fast turnaround and emergency replacement for damaged, expired, or non-compliant safety equipment.",
        "icon" => "bi-lightning-charge"
    ],
    [
        "title" => "Inspection Documentation",
        "desc" => "Full documentation support for port state control audits and internal safety management system (SMS) compliance.",
        "icon" => "bi-file-earmark-check"
    ]
];

include __DIR__ . '/product-template.php';
