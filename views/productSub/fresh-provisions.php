<?php
$page_title = "Fresh Provisions & Food Items";
$page_description = "Sabari Marine Enterprise provides a complete range of premium-quality food and provision supplies designed to meet the daily and long-voyage needs of vessel crews.";
$page_image = $base_url . "/assets/images/products/food/sabarifood1.png";

// Detailed Specs for Information Density
$page_specs = [
    "Product Types" => "Fresh, Frozen, Chilled, Dry, Beverages",
    "Sourcing" => "Daily Market & Certified Farm Direct",
    "Storage" => "Cold Chain Integrated Hubs",
    "Certification" => "HACCP & ISO 22000 Compliant",
    "Portfolio" => "500+ Unique SKU Stocked Daily",
    "Service Area" => "All Major Indian Commercial Ports"
];

$page_tags = ["Farm Fresh", "Temperature Controlled", "International Cuisine", "Rapid Delivery", "Hygienic Handling"];

// High-impact imagery for showcase
$page_gallery = [
    $base_url . "/assets/images/products/food/sabarifood6.png",
    $base_url . "/assets/images/products/food/sabarifood7.png",
    $base_url . "/assets/images/products/food/sabarifood8.png",
    $base_url . "/assets/images/products/food/sabarifood9.png"
];

$page_overview_title = "Strategic Provisioning & Food Store Management";
$page_overview_text = "
    <p class='mb-4'>We understand that crew welfare begins with high-quality nourishment. Our sourcing network connects local agricultural hubs directly to your vessel, eliminating delays and ensuring maximum shelf life for all perishable goods.</p>
    <p>From farm-fresh organic produce to international gourmet items, we cater to all dietary requirements and culinary preferences found onboard modern merchant fleets.</p>
";

$page_additional_text = "
    <h5 class='fw-bold text-dark mb-3'>Operational Hygiene & Packaging</h5>
    <p>Every delivery is subjected to rigorous hygiene checks. Our cold chain remains unbroken from the moment of purchase until the items are securely stored in your vessel's galley lockers. We use maritime-grade packaging to withstand high humidity and temperature fluctuations during port-side transfers.</p>
";

$page_features = [
    [
        "title" => "Fresh Harvest Network",
        "desc" => "Direct partnerships with regional farms to ensure 'Morning-Picked' delivery standards for all leafy greens and fruits.",
        "icon" => "bi-basket2-fill"
    ],
    [
        "title" => "Cold Storage Excellence",
        "desc" => "State-of-the-art reefer trucks and hub storage maintaining sub-zero temperatures for premium meats and dairy.",
        "icon" => "bi-thermometer-snow"
    ]
];

include __DIR__ . '/product-template.php';
