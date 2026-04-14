<?php
$page_title = "Lashing & Cargo Securing Equipment";
$page_description = "High-strength lashing belts, chains, and cargo securing systems designed for safe and compliant transport of project, containerized, and breakbulk cargo.";
$page_image = $base_url . "/assets/images/products/LashingCargo/1.png";

// Detailed Specs for Information Density
$page_specs = [
    "Core Range" => "Lashing Belts, Chains, Turnbuckles, Shackles",
    "Certification" => "High-Strength Industrial & Marine Grade",
    "Applications" => "Containerized, Breakbulk & Project Cargo",
    "Material" => "Heavy-Duty Corrosion Resistant Steel",
    "Standard" => "International Cargo Securing Compliance"
];

$page_tags = ["Cargo Safety", "Heavy-Duty Lashing", "Sea Fastening", "Project Cargo", "Secure Transit"];

// High-impact imagery for showcase
$page_gallery = [
    $base_url . "/assets/images/products/LashingCargo/2.png",
    $base_url . "/assets/images/products/LashingCargo/3.png",
    $base_url . "/assets/images/products/LashingCargo/4.png",
    $base_url . "/assets/images/products/LashingCargo/5.png"
];

$page_overview_title = "Heavy-Duty, Certified & Reliable Lashing Solutions";
$page_overview_text = "
    <p class='mb-4'>Sabari Marine Enterprise supplies a complete range of high-strength lashing and cargo securing equipment designed to ensure safe, stable, and compliant transport of cargo at sea. Our product portfolio includes lashing belts, chains, shackles, turnbuckles, hooks, tensioners, and complete cargo securing systems suitable for a wide variety of vessel and cargo types.</p>
    <p>All equipment is selected for durability and performance in harsh marine and offshore environments, where load security and safety are critical. Our solutions help minimize risk and maximize protection for high-value maritime assets.</p>
";

$page_additional_text = "
    <h5 class='fw-bold text-dark mb-3'>Risk Mitigation & Onboard Safety</h5>
    <p>Our lashing and securing equipment helps minimize cargo movement, reduce risk, and enhance onboard safety during long voyages and rough sea conditions. Each item is carefully selected to meet strength and safety requirements for demanding marine transport operations.</p>
    <p>Trusted by ship operators, cargo managers, and logistics professionals, Sabari Marine Enterprise delivers dependable cargo securing solutions — supporting safe voyages, regulatory compliance, and cargo protection from port to port.</p>
";

$page_features = [
    [
        "title" => "Integrated Securing Systems",
        "desc" => "Complete cargo securing kits including high-strength belts, chains, and hooks for diverse cargo profiles.",
        "icon" => "bi-link-45deg"
    ],
    [
        "title" => "Certified Performance",
        "desc" => "Certified lashing gear compliant with international standards, ensuring reliability under extreme loads.",
        "icon" => "bi-shield-check"
    ],
    [
        "title" => "Project Cargo Expertise",
        "desc" => "Specialized equipment suitable for machinery, heavy project cargo, and irregular offshore loads.",
        "icon" => "bi-truck-flatbed"
    ],
    [
        "title" => "Rapid Port Delivery",
        "desc" => "Fast availability and delivery at major Indian ports to meet tight vessel schedules and loading windows.",
        "icon" => "bi-speedometer"
    ]
];

include __DIR__ . '/product-template.php';
