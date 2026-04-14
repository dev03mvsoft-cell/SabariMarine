<?php
$page_title = "Crane Parts & Hydraulic Motors";
$page_description = "A wide range of crane and deck machinery spare parts including hydraulic motors, solenoid valves, and control components for reliable cargo handling.";
$page_image = $base_url . "/assets/images/products/CraneParts/1.png";

// Detailed Specs for Information Density
$page_specs = [
    "Components" => "Hydraulic Motors, Solenoid Valves, Pressure Switches",
    "Systems" => "Cranes, Winches, Windlasses, Deck Machinery",
    "Compatibility" => "OEM & High-Quality Equivalent Spares",
    "Monitoring" => "Sensors, Meters & Control Devices",
    "Service" => "24/7 Breakdown & Emergency Sourcing"
];

$page_tags = ["Deck Machinery", "Hydraulic Power", "Cargo Handling", "Critical Spares", "Vessel Continuity"];

// High-impact imagery for showcase
$page_gallery = [
    $base_url . "/assets/images/products/CraneParts/2.png",
    $base_url . "/assets/images/products/CraneParts/3.png",
    $base_url . "/assets/images/products/CraneParts/4.png",
    $base_url . "/assets/images/products/CraneParts/5.png"
];

$page_overview_title = "Fast, Reliable Support for Critical Deck Equipment";
$page_overview_text = "
    <p class='mb-4'>Sabari Marine Enterprise supplies a wide range of crane and deck machinery spare parts to support reliable operation of lifting and cargo-handling systems onboard. Our product range includes hydraulic motors, solenoid valves, pressure switches, sensors, control components, and related hydraulic and electro-mechanical spares used in cranes, winches, windlasses, and other deck machinery.</p>
    <p>We support both routine maintenance and urgent breakdown requirements to help vessels maintain operational continuity with minimal disruption. Whether your vessel is alongside, at anchorage, or under operational pressure, our team ensures fast and accurate supply.</p>
";

$page_additional_text = "
    <h5 class='fw-bold text-dark mb-3'>Restoring Functionality Safely</h5>
    <p>Our team provides technical assistance for correct part identification and ensures rapid dispatch to reduce vessel downtime. All spares are quality-checked and delivered directly onboard at major Indian ports.</p>
    <p>Trusted by vessel operators and technical managers, Sabari Marine Enterprise delivers dependable deck machinery spare solutions — helping keep your cranes and cargo systems operational, compliant, and ready for service.</p>
";

$page_features = [
    [
        "title" => "Hydraulic Power Solutions",
        "desc" => "Hydraulic motors and components for cranes, winches, and windlasses designed for heavy-duty marine use.",
        "icon" => "bi-gear-wide-connected"
    ],
    [
        "title" => "Control & Monitoring",
        "desc" => "Solenoid valves, pressure switches, sensors, and meters for precise machinery control and monitoring.",
        "icon" => "bi-cpu"
    ],
    [
        "title" => "Emergency Breakdown Sourcing",
        "desc" => "24/7 emergency sourcing for critical breakdown situations to minimize expensive port delays.",
        "icon" => "bi-lightning-fill"
    ],
    [
        "title" => "Technical Part Identification",
        "desc" => "Expert assistance to ensure correct matching of OEM and equivalent spares to your specific deck equipment.",
        "icon" => "bi-check-all"
    ]
];

include __DIR__ . '/product-template.php';
