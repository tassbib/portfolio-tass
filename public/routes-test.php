<?php
require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

echo "<h1>🔍 Test des Routes</h1>";

// Test route par route
$routes = [
    '/',
    '/about',
    '/contact',
    '/projects',
];

foreach ($routes as $route) {
    echo "<h3>Test: $route</h3>";
    try {
        $request = Illuminate\Http\Request::create($route, 'GET');
        $response = $kernel->handle($request);
        
        if ($response->getStatusCode() == 200) {
            echo "<p style='color:green'>✅ OK (200)</p>";
        } else {
            echo "<p style='color:orange'>⚠️ Status: " . $response->getStatusCode() . "</p>";
        }
    } catch (Exception $e) {
        echo "<p style='color:red'>❌ ERREUR: " . $e->getMessage() . "</p>";
        echo "<pre style='font-size:11px'>" . $e->getFile() . ":" . $e->getLine() . "</pre>";
    }
    echo "<hr>";
}
