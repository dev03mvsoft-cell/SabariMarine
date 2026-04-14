<?php
// Define Security Constant
define('SECURE_ACCESS', true);

// Initialize Security Guard
require_once __DIR__ . '/middleware/SecurityGuard.php';
$security = SecurityGuard::getInstance();

// Automatically detect the project base path (e.g., /sabariMerine or empty)
$project_base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');

// Get the current URL path without query parameters
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Normalize path: Remove project base and trim slashes
if ($project_base !== '' && strpos($request_uri, $project_base) === 0) {
    $request = substr($request_uri, strlen($project_base));
} else {
    $request = $request_uri;
}
$request = rtrim($request, '/');

// Route Hijacking Protection: Sanitize request string to prevent path traversal
$request = filter_var($request, FILTER_SANITIZE_URL);
$request = str_replace(['..', './', '../'], '', $request);

// Define routes mapping
$routes = [
    '' => 'views/home.php',
    '/about' => 'views/about.php',
    '/products' => 'views/products.php',
    '/gallery' => 'views/gallery.php',
    '/contact' => 'views/contact.php',

    // Product Sub-pages
    '/products/fresh-provisions' => 'views/productSub/fresh-provisions.php',
    '/products/ship-stores' => 'views/productSub/ship-stores.php',
    '/products/bonded-stores' => 'views/productSub/bonded-stores.php',
    '/products/medicine-stores' => 'views/productSub/medicine-stores.php',
    '/products/lifeboat-rations' => 'views/productSub/lifeboat-rations.php',
    '/products/marine-charts' => 'views/productSub/marine-charts.php',
    '/products/steel-pipes' => 'views/productSub/steel-pipes.php',
    '/products/lashing-equipment' => 'views/productSub/lashing-equipment.php',
    '/products/dunnage-supply' => 'views/productSub/dunnage-supply.php',
    '/products/marine-batteries' => 'views/productSub/marine-batteries.php',
    '/products/air-compressors' => 'views/productSub/air-compressors.php',
    '/products/crane-parts' => 'views/productSub/crane-parts.php',
    '/products/lsa-liferafts' => 'views/productSub/lsa-liferafts.php',
    '/products/pyrotechnics' => 'views/productSub/pyrotechnics.php',

    // Form Handlers
    '/submit-contact' => 'handlers/contact-handler.php'
];

// Router logic
if (array_key_exists($request, $routes)) {
    // Inject variables for includes and assets
    $base_url = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
    $base_path = "";
    $CURRENT_ROUTE = $request;
    require $routes[$request];
} else {
    // Fallback to 404
    http_response_code(404);
    echo "<h1>404 - Page Not Found</h1>";
    echo "<p>The requested route '$request' does not exist.</p>";
}
