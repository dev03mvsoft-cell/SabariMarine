<?php
$page_title = "Ship Store Supplies (Engine, Deck, Cabin, Electrical, Safety & Stationery)";
$page_description = "Complete range of marine ship store supplies covering critical departments onboard to support safe and efficient vessel operations.";
$page_image = $base_url . "/assets/images/products/ShipStoreSupplies/1.png";

// Detailed Specs for Information Density
$page_specs = [
    "Department" => "Engine, Deck, Cabin, Electrical, Safety",
    "Standards" => "IMPA & ISSA Compliant",
    "Pricing" => "Competitive & Transparent",
    "Network" => "Major Indian Ports Integrated",
    "Team" => "Experienced Maritime Specialists"
];

$page_tags = ["IMPA Coding", "ISSA Catalog", "Safety Gear", "Technical Stores", "One-Stop Chandler"];

// High-impact imagery for showcase
$page_gallery = [
    $base_url . "/assets/images/products/ShipStoreSupplies/2.png",
    $base_url . "/assets/images/products/ShipStoreSupplies/3.png",
    $base_url . "/assets/images/products/ShipStoreSupplies/4.png",
    $base_url . "/assets/images/products/ShipStoreSupplies/5.png"
];

$page_overview_title = "Compliant, Cost-Efficient & Reliable Marine Store Solutions";
$page_overview_text = "
    <p class='mb-4'>Sabari Marine Enterprise offers a complete range of marine ship store supplies, covering all critical departments onboard to support safe, efficient, and compliant vessel operations. From technical and operational essentials to crew welfare and administrative items, we act as a reliable one-stop marine chandler for comprehensive ship store requirements.</p>
    <p>Our supply portfolio includes engine room consumables, deck equipment, cabin and galley items, electrical stores, safety and fire-fighting equipment, as well as office and stationery supplies. Every product is sourced from approved vendors and selected to meet international marine standards and vessel specifications.</p>
";

$page_additional_text = "
    <h5 class='fw-bold text-dark mb-3'>Operational Excellence & Compliance</h5>
    <p>Our experienced marine supply team ensures all items are correctly matched to catalog codes, properly packed, and delivered in full compliance with vessel and regulatory requirements. With strong local sourcing and efficient port coordination, we help reduce vessel downtime while maintaining quality and cost control.</p>
    <p>Trusted by ship owners, operators, and fleet managers, Sabari Marine Enterprise delivers organized, compliant, and dependable ship store solutions — helping vessels operate safely, efficiently, and without interruption.</p>
";

$page_features = [
    [
        "title" => "Comprehensive Store Supply",
        "desc" => "Complete engine, deck, cabin, and electrical store supplies matched to IMPA & ISSA catalog references.",
        "icon" => "bi-box-seam"
    ],
    [
        "title" => "Safety & Emergency Equipment",
        "desc" => "Fire safety, PPE, and emergency equipment provisioning to ensure vessel and crew safety.",
        "icon" => "bi-shield-check"
    ],
    [
        "title" => "Crew Welfare Stores",
        "desc" => "Galley, cabin, and crew welfare consumables to support a comfortable life at sea.",
        "icon" => "bi-house-heart"
    ],
    [
        "title" => "Stationery & Admin Supplies",
        "desc" => "Office, chart room, and vessel stationery supplies for smooth administrative operations.",
        "icon" => "bi-journal-text"
    ]
];

include __DIR__ . '/product-template.php';
