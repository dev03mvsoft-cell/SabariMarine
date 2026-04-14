<?php
$page_title = "Marine Charts, Publications & Navigation Aids";
$page_description = "Internationally approved navigational charts, maritime publications, and support materials to help vessels maintain full regulatory compliance and safe passage planning.";
$page_image = $base_url . "/assets/images/products/MarineCharts/1.png";

// Detailed Specs for Information Density
$page_specs = [
    "Chart Types" => "BA Charts, Official Nautical & Digital Products",
    "Publications" => "IMO, ITU, ICS & Witherby Global Standards",
    "Compliance" => "SOLAS V / Regulation Compliant",
    "Updates" => "Latest Editions & Correction Services",
    "Formats" => "Printed & Digital (e-Books) Available"
];

$page_tags = ["Nautical Charts", "IMO Publications", "Passage Planning", "Safe Navigation", "Audit Ready"];

// High-impact imagery for showcase
$page_gallery = [
    $base_url . "/assets/images/products/MarineCharts/2.png",
    $base_url . "/assets/images/products/MarineCharts/3.png",
    $base_url . "/assets/images/products/MarineCharts/4.png",
    $base_url . "/assets/images/products/MarineCharts/5.png"
];

$page_overview_title = "Accurate, Updated & Regulation-Compliant Navigation Resources";
$page_overview_text = "
    <p class='mb-4'>Sabari Marine Enterprise supplies a complete range of internationally approved navigational charts, maritime publications, and navigation support materials to help vessels maintain full regulatory compliance and safe passage planning. Our offerings include official nautical charts, sailing directions, tide tables, ITU publications, IMO reference books, and essential navigation-related consumables.</p>
    <p>All materials are provided in accordance with current international maritime regulations to support accurate navigation, audit readiness, and operational safety. Our team ensures that all charts and publications are supplied in their latest editions, helping you navigate with absolute confidence.</p>
";

$page_additional_text = "
    <h5 class='fw-bold text-dark mb-3'>Comprehensive Maritime Intelligence</h5>
    <p>Modern shipping requires dynamic and accurate data. Beyond physical charts, we provide digital navigation products and full documentation support for port entry and inspections. Our focus is on ensuring your bridge is always 'inspection-ready' with up-to-date sailing directions and manuals.</p>
    <p>With Sabari Marine Enterprise, your vessel operation receives organized, compliant, and dependable navigation solutions — helping vessels operate safely, efficiently, and without interruption across all global routes.</p>
";

$page_features = [
    [
        "title" => "Official Navigation Data",
        "desc" => "Official nautical charts and digital products sourced directly from authorized hydrographic distributors.",
        "icon" => "bi-map"
    ],
    [
        "title" => "Regulatory Publications",
        "desc" => "Latest editions of IMO, ITU, and ISM reference materials to ensure full compliance during audits.",
        "icon" => "bi-book-half"
    ],
    [
        "title" => "Passage Support",
        "desc" => "Specialized support for passage planning, tide tables, and sailing directions for all major ports.",
        "icon" => "bi-compass"
    ],
    [
        "title" => "Bridge Consumables",
        "desc" => "Essential navigation printer consumables, plotter accessories, and bridge-specific stationery.",
        "icon" => "bi-printer"
    ]
];

include __DIR__ . '/product-template.php';
