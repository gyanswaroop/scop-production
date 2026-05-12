<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

function ok($label, $value=true) {
    echo '<tr><td>'.htmlspecialchars($label).'</td><td style="color:'.($value?'green':'red').'">'.($value?'OK':'MISSING / FAILED').'</td></tr>';
}

echo '<!doctype html><html><head><meta charset="utf-8"><title>SCOP Local Debug</title><style>body{font-family:Arial;padding:30px}table{border-collapse:collapse;width:100%;max-width:900px}td,th{border:1px solid #ddd;padding:10px}code{background:#f5f5f5;padding:2px 5px}</style></head><body>';
echo '<h1>SCOP Local Homepage Debug</h1>';
echo '<p>This page checks whether required homepage files are available.</p>';
echo '<table><tr><th>Check</th><th>Status</th></tr>';
ok('includes/config.php', file_exists(__DIR__.'/includes/config.php'));
ok('includes/functions.php', file_exists(__DIR__.'/includes/functions.php'));
ok('includes/data.php', file_exists(__DIR__.'/includes/data.php'));
ok('includes/header.php', file_exists(__DIR__.'/includes/header.php'));
ok('includes/footer.php', file_exists(__DIR__.'/includes/footer.php'));
ok('assets/css/style.css', file_exists(__DIR__.'/assets/css/style.css'));
ok('assets/js/main.js', file_exists(__DIR__.'/assets/js/main.js'));
ok('assets/img/ui/hero-admissions.svg', file_exists(__DIR__.'/assets/img/ui/hero-admissions.svg'));
echo '</table>';

echo '<h2>Loading PHP Includes</h2>';
try {
    require_once __DIR__ . '/includes/functions.php';
    echo '<p style="color:green">functions.php loaded successfully.</p>';
    echo '<ul>';
    echo '<li>SITE_URL: <code>'.htmlspecialchars(defined('SITE_URL') ? SITE_URL : 'not defined').'</code></li>';
    echo '<li>ADMISSION_PHONE_DISPLAY: <code>'.htmlspecialchars(defined('ADMISSION_PHONE_DISPLAY') ? ADMISSION_PHONE_DISPLAY : 'not defined').'</code></li>';
    echo '<li>WHATSAPP_NUMBER: <code>'.htmlspecialchars(defined('WHATSAPP_NUMBER') ? WHATSAPP_NUMBER : 'not defined').'</code></li>';
    echo '<li>Departments loaded: <code>'.(isset($departments) && is_array($departments) ? count($departments) : 'not loaded').'</code></li>';
    echo '<li>Courses loaded: <code>'.(isset($courses) && is_array($courses) ? count($courses) : 'not loaded').'</code></li>';
    echo '</ul>';
} catch (Throwable $e) {
    echo '<p style="color:red"><b>Error:</b> '.htmlspecialchars($e->getMessage()).'</p>';
    echo '<p><b>File:</b> '.htmlspecialchars($e->getFile()).' line '.(int)$e->getLine().'</p>';
}

echo '<p><a href="index.php">Open Homepage</a> | <a href="admin/login.php">Open Admin Login</a></p>';
echo '</body></html>';
