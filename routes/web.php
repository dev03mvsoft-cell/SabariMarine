<?php
if(!defined('SECURE_ACCESS')) exit('Forbidden');
// Main Site Routes
$routes = [
    'home' => '',
    'about' => 'about',
    'products' => 'products',
    'gallery' => 'gallery',
    'contact' => 'contact'
];

// Product Dropdown Items
$product_categories = [
    'Provisions & Basic Stores' => [
        'Bonded Stores Supply' => 'products/bonded-stores',
        'Fresh Provisions & Food Items' => 'products/fresh-provisions',
        'Ship Store Supplies' => 'products/ship-stores',
        'Medicine & Dispensary Supplies' => 'products/medicine-stores',
        'Lifeboat Food Rations & Drinking Water' => 'products/lifeboat-rations'
    ],
    'Technical & Deck Supplies' => [
        'Marine Charts, Publications & Navigation Aids' => 'products/marine-charts',
        'Steel Pipes & Fittings' => 'products/steel-pipes',
        'Lashing & Cargo Securing Equipment' => 'products/lashing-equipment',
        'Packing & Dunnage Supply' => 'products/dunnage-supply',
        'Tested & Certified Marine Battery Solutions' => 'products/marine-batteries'
    ],
    'Safety & Machinery' => [
        'Compressors, Oils & Refrigeration System Spares' => 'products/air-compressors',
        'Crane Parts & Hydraulic Motors' => 'products/crane-parts',
        'Life-Saving Appliances (LSA) & Liferafts' => 'products/lsa-liferafts',
        'Pyrotechnics & Fire Fighting Equipment (LSA / FFA)' => 'products/pyrotechnics'
    ]
];
