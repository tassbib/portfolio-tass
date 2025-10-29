<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>🔍 Laravel Debug</h1>";
echo "<p>✅ PHP Version: " . phpversion() . "</p>";

// Test 1: Autoload
try {
    require __DIR__.'/../vendor/autoload.php';
    echo "<p>✅ Autoload OK</p>";
} catch (Exception $e) {
    die("<p style='color:red'>❌ Autoload Error: " . $e->getMessage() . "</p>");
}

// Test 2: Bootstrap
try {
    $app = require_once __DIR__.'/../bootstrap/app.php';
    echo "<p>✅ Bootstrap OK</p>";
} catch (Exception $e) {
    die("<p style='color:red'>❌ Bootstrap Error: " . $e->getMessage() . "</p>");
}

// Test 3: Kernel
try {
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    echo "<p>✅ Kernel OK</p>";
} catch (Exception $e) {
    die("<p style='color:red'>❌ Kernel Error: " . $e->getMessage() . "</p>");
}

// Test 4: Request
try {
    $response = $kernel->handle(
        $request = Illuminate\Http\Request::capture()
    );
    echo "<p>✅ Request OK - Laravel fonctionne !</p>";
    echo "<hr>";
    $response->send();
} catch (Exception $e) {
    echo "<p style='color:red'>❌ Request Error: " . $e->getMessage() . "</p>";
    echo "<pre style='background:#f5f5f5;padding:10px'>" . $e->getTraceAsString() . "</pre>";
}
