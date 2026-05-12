<?php
require_once __DIR__ . '/functions.php';
set_lang();
if (current_lang()==='hi' && empty($GLOBALS['__scop_hi_buffer_started'])) {
  $GLOBALS['__scop_hi_buffer_started'] = true;
  ob_start('translate_html_output');
}
$metaTitle = $metaTitle ?? SITE_NAME . ' | Admission Open';
$metaDescription = $metaDescription ?? 'Explore Pharmacy, Nursing, B.Ed. and ITI courses with admission guidance, labs, placements, facilities and career-focused education in Kanpur.';
?>
<!doctype html>
<html lang="<?= current_lang()==='hi'?'hi':'en' ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= h($metaTitle) ?></title>
  <meta name="description" content="<?= h($metaDescription) ?>">
  <meta property="og:title" content="<?= h($metaTitle) ?>">
  <meta property="og:description" content="<?= h($metaDescription) ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= h(SITE_URL) ?>">
  <link rel="icon" href="assets/img/logos/sakshi-Group-80x80.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/style.css?v=9.0">
  <script type="application/ld+json">{"@context":"https://schema.org","@type":"CollegeOrUniversity","name":"Sakshi Group of Institutions","email":"<?= ADMISSION_EMAIL ?>","telephone":"<?= ADMISSION_PHONE_DISPLAY ?>","address":{"@type":"PostalAddress","streetAddress":"309, Ishwari Ganj - Palara Rd","addressLocality":"Kanpur","addressRegion":"Uttar Pradesh","postalCode":"208017","addressCountry":"IN"}}</script>
</head>
<body class="<?= h($bodyClass ?? '') ?>">
<div class="top-strip auto-top-strip">
  <div class="container-fluid px-lg-5 position-relative">
    <div class="top-marquee" aria-label="Quick contact and approvals">
      <div class="top-scroll-track">
        <?php for($i=0;$i<2;$i++): ?>
        <span><i class="fa-solid fa-phone"></i> <?= ADMISSION_PHONE_DISPLAY ?></span>
        <span><i class="fa-solid fa-envelope"></i> <?= ADMISSION_EMAIL ?></span>
        <span><i class="fa-solid fa-location-dot"></i> Kanpur, Uttar Pradesh</span>
        <span><i class="fa-solid fa-award"></i> Approved: PCI · BTE · AKTU · ABVMU · CSJMU · NCVT</span>
        <span><i class="fa-brands fa-whatsapp"></i> WhatsApp: +91-7522000251</span>
        <span><i class="fa-solid fa-bullhorn"></i> Admission Open for Pharmacy · Nursing · B.Ed. · ITI</span>
        <?php endfor; ?>
      </div>
    </div>
    <a class="lang-pill" href="<?= h(language_link(current_lang()==='hi'?'en':'hi')) ?>"><?= current_lang()==='hi'?'English':'हिन्दी' ?></a>
  </div>
</div>
<nav class="navbar navbar-expand-xl sticky-top site-nav">
  <div class="container-fluid px-lg-5">
    <a class="navbar-brand brand-lockup" href="index.php">
      <img src="assets/img/logos/sakshi-Group-80x80.png" onerror="this.src='assets/img/placeholder.svg'" alt="Sakshi Group Logo">
      <span><strong>Sakshi Group</strong><small>of Institutions</small></span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div id="nav" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto mb-2 mb-xl-0 align-items-xl-center">
        <li class="nav-item"><a class="nav-link <?= nav_active('index.php') ?>" href="index.php">Home</a></li>
        <li class="nav-item dropdown nav-3d"><a class="nav-link dropdown-toggle <?= nav_active('about.php') ?>" href="about.php" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">About Us</a>
          <ul class="dropdown-menu dropdown-elevated">
            <li><a class="dropdown-item" href="about.php">About Overview</a></li>
            <li><a class="dropdown-item" href="about.php#vision-mission">Vision & Mission</a></li>
            <li><a class="dropdown-item" href="about.php#governing-body">Governing Body</a></li>
            <li><a class="dropdown-item" href="about.php#why-sgoi">Why SGoI</a></li>
            <li><a class="dropdown-item" href="chairperson-message.php">Message from Chairperson</a></li>
            <li><a class="dropdown-item" href="secretary-message.php">Message from Secretary</a></li>
            <li><a class="dropdown-item" href="principal-message.php">Message from Principal</a></li>
            <li><a class="dropdown-item" href="legacy.php">Our Legacy</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown nav-3d"><a class="nav-link dropdown-toggle <?= nav_active('department.php') . nav_active('course.php') ?>" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Programs</a>
          <div class="dropdown-menu mega-menu dropdown-elevated p-3">
            <div class="row g-3">
              <?php foreach($departments as $deptSlug=>$deptData): ?>
              <div class="col-md-6 col-lg-3">
                <a class="mega-title" href="department-<?= h($deptSlug==='education'?'bed':$deptSlug) ?>.php"><i class="fa-solid <?= h($deptData['icon']) ?> me-2"></i><?= h($deptData['name']) ?></a>
                <?php foreach($deptData['courses'] as $courseSlug): if(!isset($courses[$courseSlug])) continue; ?>
                  <a class="mega-link" href="course.php?slug=<?= h($courseSlug) ?>"><?= h($courses[$courseSlug]['title']) ?></a>
                <?php endforeach; ?>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown nav-3d"><a class="nav-link dropdown-toggle <?= nav_active('admissions.php') ?>" href="admissions.php" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Admissions</a>
          <ul class="dropdown-menu dropdown-elevated">
            <li><a class="dropdown-item" href="admissions.php">Admission Overview</a></li>
            <li><a class="dropdown-item" href="admissions.php#pay-fee">Pay Your Fee Online</a></li>
            <li><a class="dropdown-item" href="admissions.php#details">Admission Details</a></li>
            <li><a class="dropdown-item" href="admissions.php#process">Admission Process</a></li>
            <li><a class="dropdown-item" href="admissions.php#online-application">Online Application</a></li>
            <li><a class="dropdown-item" href="admissions.php#downloads">Download</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown nav-3d"><a class="nav-link dropdown-toggle <?= nav_active('placements.php') ?>" href="placements.php" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Placements</a>
          <ul class="dropdown-menu dropdown-elevated">
            <li><a class="dropdown-item" href="placements.php">Placement Overview</a></li>
            <li><a class="dropdown-item" href="placements-pharmacy.php">Pharmacy Placements</a></li>
            <li><a class="dropdown-item" href="placements-nursing.php">Nursing Placements</a></li>
            <li><a class="dropdown-item" href="placements-iti.php">ITI Placements</a></li>
            <li><a class="dropdown-item" href="placements-bed.php">B.Ed. Placements</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown nav-3d"><a class="nav-link dropdown-toggle <?= nav_active('facilities.php') . nav_active('labs.php') . nav_active('infrastructure.php') ?>" href="facilities.php" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Facilities</a>
          <ul class="dropdown-menu dropdown-elevated">
            <li><a class="dropdown-item" href="facilities.php">Facilities Overview</a></li>
            <li><a class="dropdown-item" href="infrastructure.php">Infrastructure</a></li>
            <li><a class="dropdown-item" href="labs.php">Department Labs</a></li>
            <li><a class="dropdown-item" href="pharmacy-labs.php">Pharmacy Labs</a></li>
            <li><a class="dropdown-item" href="nursing-labs.php">Nursing Labs</a></li>
            <li><a class="dropdown-item" href="iti-labs.php">ITI Labs</a></li>
            <li><a class="dropdown-item" href="bed-labs.php">B.Ed. Labs</a></li>
            <li><a class="dropdown-item" href="facilities.php#library">Library</a></li>
            <li><a class="dropdown-item" href="facilities.php#transport">Transport</a></li>
            <li><a class="dropdown-item" href="facilities.php#hostel">Hostel Boys & Girls</a></li>
            <li><a class="dropdown-item" href="facilities.php#seminar-hall">Seminar Hall</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown nav-3d"><a class="nav-link dropdown-toggle <?= nav_active('gallery.php') ?>" href="gallery.php" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Gallery</a>
          <ul class="dropdown-menu dropdown-elevated">
            <li><a class="dropdown-item" href="gallery.php">All Gallery</a></li>
            <li><a class="dropdown-item" href="gallery-pharmacy.php">Pharmacy Gallery</a></li>
            <li><a class="dropdown-item" href="gallery-nursing.php">Nursing Gallery</a></li>
            <li><a class="dropdown-item" href="gallery-iti.php">ITI Gallery</a></li>
            <li><a class="dropdown-item" href="gallery-bed.php">B.Ed. Gallery</a></li>
            <li><a class="dropdown-item" href="gallery-events.php">Events Gallery</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link <?= nav_active('alumni.php') ?>" href="alumni.php">Alumni</a></li>
        <li class="nav-item"><a class="nav-link <?= nav_active('blog.php') ?>" href="blog.php">Blog</a></li>
        <li class="nav-item"><a class="nav-link <?= nav_active('contact.php') ?>" href="contact.php">Contact</a></li>
      </ul>
      <a class="btn btn-apply ms-xl-3" href="admissions.php#online-application">Apply Now</a>
    </div>
  </div>
</nav>
<main>
