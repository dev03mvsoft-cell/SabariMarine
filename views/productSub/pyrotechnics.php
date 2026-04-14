<?php
$page_title = "Pyrotechnics & Fire Fighting Equipment (LSA / FFA)";
$page_description = "SOLAS-approved pyrotechnic devices and fire-fighting equipment, from flares and smoke signals to fire detection gear, ensuring full emergency preparedness.";
$page_image = $base_url . "/assets/images/products/Pyrotechnics/1.png";

// Detailed Specs for Information Density
$page_specs = [
    "Compliance" => "SOLAS, LSA Code & FFA Code",
    "Pyrotechnics" => "Flares, Smoke Signals, MOB Markers",
    "FFA Range" => "Portable & Fixed Fire Extinguishing Gear",
    "Certification" => "Manufacturer & Class Certified Units",
    "Documentation" => "Full Traceability for Inspections"
];

$page_tags = ["SOLAS Approved", "Emergency Signaling", "Fire Safety", "MOB Markers", "FFA Compliance"];

// High-impact imagery for showcase
$page_gallery = [
    $base_url . "/assets/images/products/Pyrotechnics/2.png",
    $base_url . "/assets/images/products/Pyrotechnics/3.png",
    $base_url . "/assets/images/products/Pyrotechnics/4.png",
    $base_url . "/assets/images/products/Pyrotechnics/5.png"
];

$page_overview_title = "SOLAS-Compliant Emergency & Fire Safety Solutions";
$page_overview_text = "
    <p class='mb-4'>Sabari Marine Enterprise supplies a comprehensive range of SOLAS-approved pyrotechnic devices and fire-fighting equipment to support full emergency preparedness and regulatory compliance onboard. Our product range includes line throwing appliances, rocket parachute flares, hand flares, smoke signals, man-overboard (MOB) markers, lifebuoy lights, and a wide selection of fire-fighting and fire detection equipment.</p>
    <p>All LSA and FFA products are supplied in strict accordance with SOLAS, LSA Code, and FFA Code requirements to ensure vessel safety and inspection readiness. Our team ensures all equipment is correctly certified, properly packed, and delivered with full traceability.</p>
";

$page_additional_text = "
    <h5 class='fw-bold text-dark mb-3'>Operational Traceability & Support</h5>
    <p>We support ship owners and operators in maintaining compliance by providing timely replacements for expired or discharged units, documentation support, and inspection-ready supplies. Our focus is on providing reliable emergency solutions that help protect lives and safeguard maritime assets.</p>
    <p>With Sabari Marine Enterprise, you gain a reliable partner for LSA and FFA equipment — helping maintain international maritime safety obligations at every port across major Indian commercial hubs.</p>
";

$page_features = [
    [
        "title" => "Emergency Signaling",
        "desc" => "Rocket parachute flares, hand flares, and smoke signals meeting official LSA code for maritime signaling.",
        "icon" => "bi-fire"
    ],
    [
        "title" => "MOB & Lifebuoy Safety",
        "desc" => "Man-overboard (MOB) markers and lifebuoy lights designed for rapid deployment and high visibility.",
        "icon" => "bi-life-preserver"
    ],
    [
        "title" => "Fire Fighting Gear",
        "desc" => "A wide selection of portable and fixed fire extinguishing equipment and specialized FFA safety gear.",
        "icon" => "bi-extinguisher"
    ],
    [
        "title" => "Certified Compliance",
        "desc" => "All units supplied with valid manufacturer and class certification to ensure audit and port state control readiness.",
        "icon" => "bi-patch-check"
    ]
];

include __DIR__ . '/product-template.php';
