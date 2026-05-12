<?php
if (session_status() === PHP_SESSION_NONE) session_start();
require_once __DIR__ . '/config.php';

// Safety fallback constants for staging/live uploads.
// These prevent blank pages when older config.php files do not contain newly added settings.
if (!defined('SITE_NAME')) define('SITE_NAME', 'Sakshi Group of Institutions');
if (!defined('SITE_URL')) define('SITE_URL', 'https://gyanlabs.in/scop');
if (!defined('ADMISSION_EMAIL')) define('ADMISSION_EMAIL', 'admissions@scopkanpur.org');
if (!defined('ADMISSION_PHONE')) define('ADMISSION_PHONE', '+91-7522000251');
if (!defined('ADMISSION_PHONE_DISPLAY')) define('ADMISSION_PHONE_DISPLAY', '+91-7522000251 to +91-7522000255');
if (!defined('WHATSAPP_NUMBER')) define('WHATSAPP_NUMBER', '917522000251');
if (!defined('CAPTCHA_ENABLED')) define('CAPTCHA_ENABLED', true);
if (!defined('CSRF_TOKEN_NAME')) define('CSRF_TOKEN_NAME', 'scop_csrf_token');

require_once __DIR__ . '/db.php';
require_once __DIR__ . '/data.php';

function h($value) { return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); }
function asset($path) { return h($path); }
function page_url($path='') { return rtrim(SITE_URL, '/') . '/' . ltrim($path, '/'); }
function current_lang() { return ($_GET['lang'] ?? $_SESSION['lang'] ?? 'en') === 'hi' ? 'hi' : 'en'; }
function set_lang() { if (isset($_GET['lang'])) $_SESSION['lang'] = current_lang(); }
function t($en, $hi='') { return current_lang()==='hi' && $hi ? $hi : $en; }
function csrf_token() { if (empty($_SESSION['csrf'])) $_SESSION['csrf'] = bin2hex(random_bytes(32)); return $_SESSION['csrf']; }
function verify_csrf($token) { return isset($_SESSION['csrf']) && hash_equals($_SESSION['csrf'], (string)$token); }
function new_captcha() { if (!CAPTCHA_ENABLED) return ''; if (!empty($_SESSION['captcha_question']) && !empty($_SESSION['captcha_answer'])) return $_SESSION['captcha_question']; $a = random_int(3, 9); $b = random_int(2, 8); $_SESSION['captcha_answer'] = (string)($a + $b); $_SESSION['captcha_question'] = $a . ' + ' . $b; return $_SESSION['captcha_question']; }
function verify_captcha($answer) { if (!CAPTCHA_ENABLED) return true; return isset($_SESSION['captcha_answer']) && trim((string)$answer) === $_SESSION['captcha_answer']; }
function img_src($src) { return file_exists(__DIR__ . '/../' . $src) ? $src : 'assets/img/placeholder.svg'; }
function nav_active($file) { return basename($_SERVER['PHP_SELF']) === $file ? 'active' : ''; }

function renderMiniCta($title='Need Admission Guidance?', $course='') { ob_start(); ?>
<div class="mini-cta rounded-4 p-4 shadow-soft">
  <h4 class="mb-2"><?= h($title) ?></h4>
  <p class="mb-3">Share your details. Our admission team will guide you for eligibility, documents, fees, scholarship inquiry and the right course.</p>
  <a href="#enquiry" class="btn btn-primary btn-lg"><i class="fa-solid fa-phone-volume me-2"></i>Request Callback</a>
  <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" class="btn btn-outline-dark btn-lg ms-sm-2 mt-2 mt-sm-0"><i class="fa-brands fa-whatsapp me-2"></i>WhatsApp</a>
</div>
<?php return ob_get_clean(); }

function renderLeadForm($source='Website', $course='') {
    $captcha = new_captcha();
    $coursesList = ['B. Pharm','D. Pharm','B.Sc Nursing','G.N.M.','B.Ed.','ITI Fitter','ITI Electrician','ITI Electronics Mechanic','ITI Draughtsman – Civil','ITI Draughtsman – Mechanical'];
    ob_start(); ?>
<form method="post" action="api/lead-submit.php" class="lead-form compact-form needs-validation" novalidate>
    <input type="hidden" name="csrf" value="<?= h(csrf_token()) ?>">
    <input type="hidden" name="source" value="<?= h($source) ?>">
    <input type="text" name="website" class="hp-field" tabindex="-1" autocomplete="off" aria-hidden="true">
    <div class="row g-2 g-md-3">
        <div class="col-md-6"><input required name="student_name" class="form-control" placeholder="Student Name"></div>
        <div class="col-md-6"><input required name="mobile" class="form-control" pattern="[0-9+\-\s]{10,15}" placeholder="Mobile Number"></div>
        <div class="col-md-6"><input name="email" type="email" class="form-control" placeholder="Email Address"></div>
        <div class="col-6 col-md-3"><input name="city" class="form-control" placeholder="City"></div>
        <div class="col-6 col-md-3"><input name="pincode" class="form-control" placeholder="Pincode"></div>
        <div class="col-6"><input name="percentage_10" class="form-control" placeholder="10th %"></div>
        <div class="col-6"><input name="percentage_12" class="form-control" placeholder="12th %"></div>
        <div class="col-md-6"><select name="stream" class="form-select"><option value="">12th Stream</option><option>Maths</option><option>Biology</option><option>Other</option><option>Not Applicable</option></select></div>
        <div class="col-md-6"><select required name="course_interested" class="form-select"><option value="">Course Interested In</option><?php foreach($coursesList as $c): ?><option <?= $course===$c?'selected':'' ?>><?= h($c) ?></option><?php endforeach; ?></select></div>
        <div class="col-md-6"><select name="scholarship" class="form-select"><option value="">Looking for Scholarship?</option><option>No</option><option>Yes</option></select></div>
        <div class="col-md-6"><input required name="captcha" class="form-control" placeholder="Security Check: <?= h($captcha) ?> = ?"></div>
        <div class="col-12"><textarea name="message" class="form-control" rows="3" placeholder="Message / Requirement"></textarea></div>
        <div class="col-12"><label class="form-check consent-line"><input required class="form-check-input" type="checkbox" name="consent" value="1"> <span class="form-check-label">I agree to be contacted by phone, WhatsApp, SMS, or email for admission guidance.</span></label></div>
        <div class="col-12"><button class="btn btn-primary btn-lg w-100" type="submit"><i class="fa-solid fa-paper-plane me-2"></i>Submit Admission Inquiry</button></div>
    </div>
</form>
<?php return ob_get_clean(); }


function get_site_downloads() {
    global $downloads;
    $pdo = db();
    if ($pdo) {
        try {
            $rows = $pdo->query("SELECT title, file_path AS file, file_type AS type FROM downloads WHERE active=1 ORDER BY sort_order ASC, id DESC")->fetchAll();
            if ($rows) return $rows;
        } catch (Throwable $e) {}
    }
    return $downloads;
}



function language_link($lang) {
    $params = $_GET;
    $params['lang'] = $lang === 'hi' ? 'hi' : 'en';
    $path = basename($_SERVER['PHP_SELF'] ?? 'index.php');
    return $path . '?' . http_build_query($params);
}

function translate_html_output($html) {
    if (current_lang() !== 'hi') return $html;
    $map = [
        'Home' => 'होम',
        'About Us' => 'हमारे बारे में',
        'About Overview' => 'परिचय',
        'Vision & Mission' => 'विजन और मिशन',
        'Governing Body' => 'गवर्निंग बॉडी',
        'Why SGoI' => 'SGoI क्यों',
        'Message from Chairperson' => 'चेयरपर्सन का संदेश',
        'Message from Secretary' => 'सेक्रेटरी का संदेश',
        'Message from Principal' => 'प्रिंसिपल का संदेश',
        'Our Legacy' => 'हमारी विरासत',
        'Programs' => 'कोर्सेज',
        'Admissions' => 'एडमिशन',
        'Admission Overview' => 'एडमिशन अवलोकन',
        'Admission Details' => 'एडमिशन विवरण',
        'Admission Process' => 'एडमिशन प्रक्रिया',
        'Online Application' => 'ऑनलाइन आवेदन',
        'Download' => 'डाउनलोड',
        'Downloads' => 'डाउनलोड',
        'Pay Your Fee Online' => 'ऑनलाइन फीस जमा करें',
        'Placements' => 'प्लेसमेंट',
        'Placement Overview' => 'प्लेसमेंट अवलोकन',
        'Facilities' => 'सुविधाएँ',
        'Facilities Overview' => 'सुविधाओं का अवलोकन',
        'Department Labs' => 'विभागीय लैब्स',
        'Infrastructure' => 'इन्फ्रास्ट्रक्चर',
        'Library' => 'लाइब्रेरी',
        'Transport' => 'ट्रांसपोर्ट',
        'Hostel Boys & Girls' => 'बॉयज और गर्ल्स हॉस्टल',
        'Seminar Hall' => 'सेमिनार हॉल',
        'Gallery' => 'गैलरी',
        'Blog' => 'ब्लॉग',
        'Contact' => 'संपर्क',
        'Apply Now' => 'अभी आवेदन करें',
        'Admission Open' => 'एडमिशन ओपन',
        'Apply / Request Callback' => 'आवेदन / कॉलबैक अनुरोध',
        'Explore Courses' => 'कोर्स देखें',
        'Explore Departments' => 'विभाग देखें',
        'Request Callback' => 'कॉलबैक अनुरोध',
        'WhatsApp' => 'व्हाट्सऐप',
        'Submit Admission Inquiry' => 'एडमिशन पूछताछ भेजें',
        'Student Name' => 'विद्यार्थी का नाम',
        'Mobile Number' => 'मोबाइल नंबर',
        'Email Address' => 'ईमेल पता',
        'City' => 'शहर',
        'Pincode' => 'पिनकोड',
        'Course Interested In' => 'किस कोर्स में रुचि है',
        'Looking for Scholarship?' => 'स्कॉलरशिप चाहिए?',
        'Message / Requirement' => 'संदेश / आवश्यकता',
        '12th Stream' => '12वीं स्ट्रीम',
        'Pharmacy' => 'फार्मेसी',
        'Nursing' => 'नर्सिंग',
        'Education' => 'एजुकेशन',
        'I.T.I.' => 'आई.टी.आई.',
        'B.Ed.' => 'बी.एड.',
        'B. Pharm' => 'बी.फार्म',
        'D. Pharm' => 'डी.फार्म',
        'B.Sc Nursing' => 'बी.एससी नर्सिंग',
        'G.N.M.' => 'जी.एन.एम.',
        'ITI Fitter' => 'आईटीआई फिटर',
        'ITI Electrician' => 'आईटीआई इलेक्ट्रीशियन',
        'ITI Electronics Mechanic' => 'आईटीआई इलेक्ट्रॉनिक्स मैकेनिक',
        'ITI Draughtsman – Civil' => 'आईटीआई ड्राफ्ट्समैन – सिविल',
        'ITI Draughtsman – Mechanical' => 'आईटीआई ड्राफ्ट्समैन – मैकेनिकल',
        'Read Article' => 'लेख पढ़ें',
        'View Full Gallery' => 'पूरी गैलरी देखें',
        'View Placement Page' => 'प्लेसमेंट पेज देखें',
        'Explore All Labs' => 'सभी लैब्स देखें',
        'Admission Helpdesk' => 'एडमिशन हेल्पडेस्क',
        'Select your interest and request a callback.' => 'अपनी रुचि चुनें और कॉलबैक अनुरोध करें।',
        'Free Guidance' => 'नि:शुल्क मार्गदर्शन',
        'Confused about the right course?' => 'सही कोर्स चुनने में उलझन है?',
        'Need Admission Guidance?' => 'एडमिशन मार्गदर्शन चाहिए?',
        'Sakshi Group' => 'साक्षी ग्रुप',
        'of Institutions' => 'ऑफ इंस्टीट्यूशन्स',
    ];
    return strtr($html, $map);
}

function admin_require_login() { if (empty($_SESSION['admin'])) { header('Location: login.php'); exit; } }
function is_super_admin() { return !empty($_SESSION['admin']) && ($_SESSION['admin']['role'] ?? '') === 'super_admin'; }
function fallback_leads() { $file = __DIR__ . '/../storage/leads.json'; if (!file_exists($file)) return []; $json = json_decode(file_get_contents($file), true); return is_array($json) ? $json : []; }
?>
