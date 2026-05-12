<?php
// =============================
// SCOP Website Configuration
// Update these values after uploading to hosting/cPanel.
// =============================
define('SITE_NAME', 'Sakshi Group of Institutions');
//define('SITE_URL', 'https://gyablabs.in/scop'); // If installed in /scop, use https://scopkanpur.org
define('SITE_URL', 'https://localhost/scop'); // If installed in /scop, use https://scopkanpur.org

define('ADMISSION_EMAIL', 'admissions@scopkanpur.org');
define('ADMISSION_PHONE_DISPLAY', '+91-7522000251 to +91-7522000255');
define('WHATSAPP_NUMBER', '917522000251');
define('META_WHATSAPP_NUMBER', '917522000253');

// Database settings. Import database/install.sql and update below.
define('DB_HOST', 'localhost');
define('DB_NAME', 'u916439385_scop_admission');
define('DB_USER', 'u916439385_scop');
define('DB_PASS', 'RedOC03B.k');

// Fallback admin login works only if database is not connected.
define('FALLBACK_ADMIN_EMAIL', 'admin@scopkanpur.org');
define('FALLBACK_ADMIN_PASSWORD', 'Admin@12345');

// Security
define('ENABLE_DEMO_FALLBACK_STORAGE', true); // stores leads in /storage/leads.json if DB not configured
define('CAPTCHA_ENABLED', false);
define('LEAD_RATE_LIMIT_SECONDS', 25);

// Optional APIs. Add real credentials when available.
define('CHAT_MITRA_API_KEY', '');
define('META_WHATSAPP_TOKEN', '');
define('SMTP_HOST', '');
define('SMTP_USER', '');
define('SMTP_PASS', '');
?>
