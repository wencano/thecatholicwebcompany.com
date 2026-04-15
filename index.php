<?php

require_once __DIR__ . '/config.php';

// Aggressive no-cache headers (intentionally strict for low-traffic site).
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
header('Expires: 0');

$cache_buster = (string) round(microtime(true) * 1000000) . '-' . mt_rand(1000, 9999);

// Variant selection
$variant = $_GET['variant'] ?? 'original';
if (!array_key_exists($variant, $variants)) {
    $variant = 'original';
}

// Routing — strip subfolder base so it works inside XAMPP
$base_dir = str_replace($_SERVER['DOCUMENT_ROOT'], '', __DIR__);
$base_dir = str_replace('\\', '/', $base_dir); // Windows compat
$full_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = substr($full_path, strlen($base_dir)) ?: '/';
$path = rtrim($path, '/');
if ($path === '' || $path === '/index' || $path === '/index.php') {
    $path = '/';
}

$routes = [
    '/' => ['file' => 'home', 'title' => 'Home'],
    '/services' => ['file' => 'services', 'title' => 'Our Services'],
    '/catholic-web-company-services' => ['file' => 'services', 'title' => 'Our Services'],
    '/portfolio' => ['file' => 'portfolio', 'title' => 'Portfolio'],
    '/catholic-website-design-portfolio' => ['file' => 'portfolio', 'title' => 'Portfolio'],
    '/church-internet' => ['file' => 'church-internet', 'title' => 'The Church & Internet'],
    '/internet-catholic-church' => ['file' => 'church-internet', 'title' => 'The Church & Internet'],
    '/about' => ['file' => 'about', 'title' => 'About Us'],
    '/about-the-catholic-web-company' => ['file' => 'about', 'title' => 'About Us'],
    '/contact' => ['file' => 'contact', 'title' => 'Contact Us'],
    '/contact-the-catholic-web-company' => ['file' => 'contact', 'title' => 'Contact Us'],
    '/tcwcinfo' => ['file' => 'tcwcinfo', 'title' => 'TCWC Info'],
];

if (!isset($routes[$path])) {
    http_response_code(404);
    $page_title = 'Page Not Found';
    $page_file = null;
} else {
    $page_title = $routes[$path]['title'];
    $page_file = $routes[$path]['file'];
}

$current_path = $path;

// Helper to build URLs preserving variant
function url($path) {
    global $variant, $base_dir;
    $full = $base_dir . $path;
    $sep = (strpos($full, '?') !== false) ? '&' : '?';
    return $full . $sep . 'variant=' . $variant;
}

// CSS/asset path helper
function asset($path) {
    global $base_dir, $cache_buster;
    $full = $base_dir . $path;
    $sep = (strpos($full, '?') !== false) ? '&' : '?';
    return $full . $sep . 'v=' . rawurlencode($cache_buster);
}

// Render
ob_start();
if ($page_file) {
    require __DIR__ . '/pages/' . $page_file . '.php';
} else {
    echo '<section class="section"><div class="container"><h1>404 — Page Not Found</h1><p>The page you are looking for does not exist.</p><p><a href="' . url('/') . '">Return Home</a></p></div></section>';
}
$page_content = ob_get_clean();

require __DIR__ . '/templates/layout.php';
