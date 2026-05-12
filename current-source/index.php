<?php
$metaTitle='Sakshi Group of Institutions Kanpur | Pharmacy, Nursing, B.Ed. & ITI Admissions';
$bodyClass='home-page';
include 'includes/header.php';
$events = [
  ['title'=>'Admission Guidance Week','date'=>'Admissions Open','image'=>'assets/img/headSCoI/Admission-Process.png','desc'=>'Meet the admission team for eligibility, documents, scholarship query and course selection.','link'=>'admissions.php#online-application'],
  ['title'=>'Pharmacy Practical Orientation','date'=>'For B.Pharm & D.Pharm','image'=>'assets/img/labs/pharmaceutics_lab.jpg','desc'=>'Understand practical labs, machine room, pharmacology and pharmacy practice learning.','link'=>'department.php?slug=pharmacy'],
  ['title'=>'Nursing Clinical Exposure Session','date'=>'For B.Sc Nursing & GNM','image'=>'assets/img/hospital_visit_JL_head.jpg','desc'=>'Know how nursing students learn through labs, hospital visits and supervised clinical exposure.','link'=>'department.php?slug=nursing'],
  ['title'=>'ITI Workshop Visit','date'=>'Skill Training','image'=>'assets/img/gallery/iti/ITI1.jpg','desc'=>'Explore workshops for fitter, electrician, electronics mechanic and draughtsman trades.','link'=>'department.php?slug=iti']
];
$placementCards = [
  ['title'=>'Placement Drives','image'=>'assets/img/Placement-Drive-29-04-2023.jpg','desc'=>'Campus placement activities and counselling support for students.'],
  ['title'=>'Industry Connects','image'=>'assets/img/Industrial_Visit_Head.jpg','desc'=>'Industrial exposure, visits and professional learning beyond classroom.'],
  ['title'=>'Hospital Training Exposure','image'=>'assets/img/hospital_visit_JL_head.jpg','desc'=>'Clinical and healthcare visits for nursing and healthcare-oriented students.'],
  ['title'=>'Career Readiness','image'=>'assets/img/headSCoI/Head-Placements.jpg','desc'=>'Resume support, interview preparation, discipline and communication guidance.']
];
$reels = [
  ['tag'=>'Quick Guide','title'=>'How to choose the right course after 12th?','image'=>'assets/img/admission_online.jpg'],
  ['tag'=>'Pharmacy','title'=>'B.Pharm vs D.Pharm explained simply','image'=>'assets/img/admission_cards/B_Pharm.jpg'],
  ['tag'=>'Nursing','title'=>'Clinical training pathway for Nursing students','image'=>'assets/img/admission_cards/B_Sc_Nursing.jpg'],
  ['tag'=>'ITI','title'=>'Skill trades that build practical careers','image'=>'assets/img/admission_cards/fitter.jpg'],
  ['tag'=>'B.Ed.','title'=>'Teaching career after graduation','image'=>'assets/img/admission_cards/b_ed.jpg']
];
?>

<section id="homeHeroCarousel" class="carousel slide home-hero-carousel v6-hero" data-bs-ride="carousel" data-bs-interval="5400">
  <div class="carousel-indicators hero-indicators">
    <button type="button" data-bs-target="#homeHeroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Admissions"></button>
    <button type="button" data-bs-target="#homeHeroCarousel" data-bs-slide-to="1" aria-label="Labs"></button>
    <button type="button" data-bs-target="#homeHeroCarousel" data-bs-slide-to="2" aria-label="Placements"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="hero-slide" style="--hero-img:url('<?= h(img_src('../assets/img/home/MainHead.jpg')) ?>')">
        <div class="hero-overlay solid-overlay"></div>
        <div class="container hero-slide-content">
          <div class="row align-items-center min-vh-row">
            <div class="col-lg-8 col-xl-7">
              <span class="hero-kicker solid"><i class="fa-solid fa-graduation-cap"></i> Admission Open · Pharmacy · Nursing · B.Ed. · ITI</span>
              <h1>Find the right professional course with clear admission guidance.</h1>
              <p class="lead">Explore course-wise eligibility, labs, placements, facilities, scholarship support and direct counselling for students and parents in Kanpur.</p>
              <div class="hero-actions">
                <a href="admissions.php#online-application" class="btn btn-primary btn-lg"><i class="fa-solid fa-paper-plane me-2"></i>Apply / Request Callback</a>
                <a href="#course-swiper" class="btn btn-light-outline btn-lg"><i class="fa-solid fa-layer-group me-2"></i>Explore Courses</a>
                <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" target="_blank" class="btn btn-gold btn-lg"><i class="fa-brands fa-whatsapp me-2"></i>WhatsApp</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="hero-slide" style="--hero-img:url('<?= h(img_src('assets/img/labs/head_labs.jpg')) ?>')">
        <div class="hero-overlay solid-overlay"></div>
        <div class="container hero-slide-content">
          <div class="row align-items-center min-vh-row">
            <div class="col-lg-8 col-xl-7">
              <span class="hero-kicker solid"><i class="fa-solid fa-flask-vial"></i> Separate Labs · Separate Departments</span>
              <h1>Practical learning spaces for every stream.</h1>
              <p class="lead">Pharmacy labs, nursing skill labs, ITI workshops and B.Ed. resource centres are presented separately for better clarity.</p>
              <div class="hero-actions">
                <a href="labs.php" class="btn btn-primary btn-lg"><i class="fa-solid fa-building-columns me-2"></i>Explore Labs</a>
                <a href="facilities.php" class="btn btn-light-outline btn-lg"><i class="fa-solid fa-school me-2"></i>View Facilities</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="hero-slide" style="--hero-img:url('<?= h(img_src('assets/img/Placement-Drive-29-04-2023.jpg')) ?>')">
        <div class="hero-overlay solid-overlay"></div>
        <div class="container hero-slide-content">
          <div class="row align-items-center min-vh-row">
            <div class="col-lg-8 col-xl-7">
              <span class="hero-kicker solid"><i class="fa-solid fa-briefcase"></i> Placement Support · Industry Connect · Career Readiness</span>
              <h1>Career-focused education with practical exposure.</h1>
              <p class="lead">See placement activities, industrial visits, hospital exposure, admission guidance and career prospects department-wise.</p>
              <div class="hero-actions">
                <a href="placements.php" class="btn btn-primary btn-lg"><i class="fa-solid fa-user-tie me-2"></i>View Placements</a>
                <a href="contact.php" class="btn btn-light-outline btn-lg"><i class="fa-solid fa-phone me-2"></i>Contact Admission Team</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#homeHeroCarousel" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
  <button class="carousel-control-next" type="button" data-bs-target="#homeHeroCarousel" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
</section>

<section class="section-sm">
  <div class="container">
    <div class="news-ticker v6-ticker">
      <b><i class="fa-solid fa-bullhorn me-2"></i>Live News</b>
      <div class="ticker-track"><span class="ticker-content">Admission Open for Pharmacy, Nursing, B.Ed. and ITI · Call <?= ADMISSION_PHONE_DISPLAY ?> · Download brochures from Admissions section · Scholarship inquiry and course guidance available · Apply online or request callback</span></div>
    </div>
  </div>
</section>

<section class="section" id="departments">
  <div class="container">
    <div class="section-head with-nav mb-4">
      <div>
        <span class="badge-soft">Find Your Department</span>
        <h2 class="display-serif mt-3 display-5">Every academic group has its own journey.</h2>
        <p class="muted mb-0">Department-wise pages explain labs, principal, brochure, placement cell, library, visits, eligibility and career prospects separately.</p>
      </div>
      <div class="swiper-arrows"><button class="swiper-btn dept-prev"><i class="fa-solid fa-arrow-left"></i></button><button class="swiper-btn dept-next"><i class="fa-solid fa-arrow-right"></i></button></div>
    </div>
    <div class="swiper department-swiper">
      <div class="swiper-wrapper">
        <?php foreach($departments as $slug=>$d): ?>
        <div class="swiper-slide">
          <article class="department-card swipe-card">
            <div class="img-wrap"><img src="<?= img_src($d['image']) ?>" alt="<?= h($d['name']) ?> Department"></div>
            <div class="body"><div class="department-icon"><i class="fa-solid <?= h($d['icon']) ?>"></i></div><h3><?= h($d['name']) ?></h3><p class="muted"><?= h($d['tagline']) ?></p><a href="department.php?slug=<?= h($slug) ?>" class="btn btn-primary w-100">Explore <?= h($d['name']) ?></a></div>
          </article>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-pagination dept-pagination"></div>
    </div>
  </div>
</section>

<section class="section bg-cream" id="course-swiper">
  <div class="container">
    <div class="section-head with-nav mb-4">
      <div>
        <span class="badge-soft">Admission-Focused Course Landing Pages</span>
        <h2 class="display-serif mt-3 display-5">Swipe through courses and open full landing pages.</h2>
        <p class="muted mb-0">Each course card leads to a dedicated page with eligibility, admission process, documents, labs, placements, career prospects and enquiry form.</p>
      </div>
      <div class="swiper-arrows"><button class="swiper-btn course-prev"><i class="fa-solid fa-arrow-left"></i></button><button class="swiper-btn course-next"><i class="fa-solid fa-arrow-right"></i></button></div>
    </div>
    <div class="swiper course-swiper admission-course-swiper">
      <div class="swiper-wrapper">
        <?php foreach($courses as $slug=>$c): ?>
        <div class="swiper-slide">
          <article class="course-card swipe-card course-landing-card">
            <div class="course-img"><img src="<?= img_src($c['image']) ?>" alt="<?= h($c['title']) ?>"><span class="duration"><?= h($c['duration']) ?></span></div>
            <div class="content">
              <span class="badge-soft"><?= h($c['department']) ?></span>
              <h3 class="h4 mt-3"><?= h($c['title']) ?></h3>
              <p class="muted"><?= h($c['summary']) ?></p>
              <ul class="course-mini-list"><li>Eligibility & admission process</li><li>Labs, visits and placement support</li><li>Career prospects & FAQs</li></ul>
              <a href="course.php?slug=<?= h($slug) ?>" class="btn btn-primary w-100 mt-2">Open Course Landing Page</a>
            </div>
          </article>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-pagination course-pagination"></div>
    </div>
  </div>
</section>

<section class="section quick-guide-section">
  <div class="container">
    <div class="section-head with-nav mb-4">
      <div>
        <span class="badge-soft">Reels & Quick Guide</span>
        <h2 class="display-serif mt-3 display-5">Short visual guides for students and parents.</h2>
        <p class="muted mb-0">A reel-style section inspired by quick education explainers. Replace these placeholders with real reels/videos later.</p>
      </div>
      <div class="swiper-arrows"><button class="swiper-btn reel-prev"><i class="fa-solid fa-arrow-left"></i></button><button class="swiper-btn reel-next"><i class="fa-solid fa-arrow-right"></i></button></div>
    </div>
    <div class="swiper reel-swiper">
      <div class="swiper-wrapper">
        <?php foreach($reels as $r): ?>
        <div class="swiper-slide">
          <article class="reel-card">
            <img src="<?= img_src($r['image']) ?>" alt="<?= h($r['title']) ?>">
            <div class="reel-play"><i class="fa-solid fa-play"></i></div>
            <div class="reel-copy"><span><?= h($r['tag']) ?></span><h3><?= h($r['title']) ?></h3></div>
          </article>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section class="section bg-cream">
  <div class="container">
    <div class="section-head with-nav mb-4">
      <div>
        <span class="badge-soft">Placement & Exposure</span>
        <h2 class="display-serif mt-3 display-5">Placement highlights in a scroll format.</h2>
        <p class="muted mb-0">Show placement drives, hospital training, industrial connects and student-readiness activities in a quick visual format.</p>
      </div>
      <a href="placements.php" class="btn btn-outline-dark">View Placement Page</a>
    </div>
    <div class="swiper placement-swiper">
      <div class="swiper-wrapper">
        <?php foreach($placementCards as $p): ?>
        <div class="swiper-slide">
          <article class="placement-card-v8">
            <img src="<?= img_src($p['image']) ?>" alt="<?= h($p['title']) ?>">
            <div class="content"><h3><?= h($p['title']) ?></h3><p><?= h($p['desc']) ?></p></div>
          </article>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section class="section gallery-swiper-section">
  <div class="container">
    <div class="section-head with-nav mb-4">
      <div>
        <span class="badge-soft">Swiper Gallery</span>
        <h2 class="display-serif mt-3 display-5">Life@SGoI, labs, events and activities.</h2>
        <p class="muted mb-0">A swipeable gallery for campus life, sports, annual fest, pharmacy day, pharmacists day and other events.</p>
      </div>
      <div class="swiper-arrows"><button class="swiper-btn gallery-prev"><i class="fa-solid fa-arrow-left"></i></button><button class="swiper-btn gallery-next"><i class="fa-solid fa-arrow-right"></i></button></div>
    </div>
    <div class="swiper gallery-swiper">
      <div class="swiper-wrapper">
        <?php foreach(array_slice($galleryImages,0,12) as $g): ?>
        <div class="swiper-slide">
          <article class="gallery-swipe-card">
            <img src="<?= img_src($g[0]) ?>" alt="<?= h($g[1]) ?>">
            <div class="gallery-caption"><span><?= h($galleryCategories[$g[2]] ?? $g[2]) ?></span><h3><?= h($g[1]) ?></h3></div>
          </article>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="text-center mt-4"><a href="gallery.php" class="btn btn-primary">View Full Gallery</a></div>
  </div>
</section>

<section class="section bg-cream">
  <div class="container">
    <div class="section-head with-nav mb-4">
      <div>
        <span class="badge-soft">Events & Workshops</span>
        <h2 class="display-serif mt-3 display-5">Upcoming and featured activities.</h2>
        <p class="muted mb-0">Use this section for admission events, orientation, workshops, placement drives and department activities.</p>
      </div>
    </div>
    <div class="row g-4">
      <?php foreach($events as $event): ?>
      <div class="col-md-6 col-xl-3">
        <article class="event-card">
          <img src="<?= img_src($event['image']) ?>" alt="<?= h($event['title']) ?>">
          <div class="event-body"><span><?= h($event['date']) ?></span><h3><?= h($event['title']) ?></h3><p><?= h($event['desc']) ?></p><a href="<?= h($event['link']) ?>">Know More <i class="fa-solid fa-arrow-right"></i></a></div>
        </article>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row g-5 lab-feature-row">
      <div class="col-lg-6"><div class="lab-feature-media"><img src="<?= img_src('assets/img/labs/head_labs.jpg') ?>" alt="Department labs at Sakshi Group"></div></div>
      <div class="col-lg-6"><span class="badge-soft">Department Labs</span><h2 class="display-serif mt-3 display-5">Practical infrastructure for every stream.</h2><p class="muted">The website separates Pharmacy labs, Nursing labs, ITI workshops and B.Ed. resource centres so students and parents can understand practical exposure clearly.</p><div class="row g-3 mt-2"><div class="col-sm-6"><div class="feature-card"><i class="fa-solid fa-flask-vial"></i><h5>Pharmacy Labs</h5><p class="muted mb-0">Pharmaceutics, chemistry, pharmacology, analysis and machine room.</p></div></div><div class="col-sm-6"><div class="feature-card"><i class="fa-solid fa-user-nurse"></i><h5>Nursing Labs</h5><p class="muted mb-0">Foundation, MCH, community health, nutrition and skill labs.</p></div></div><div class="col-sm-6"><div class="feature-card"><i class="fa-solid fa-screwdriver-wrench"></i><h5>ITI Workshops</h5><p class="muted mb-0">Fitter, electrician, electronics and drafting practical spaces.</p></div></div><div class="col-sm-6"><div class="feature-card"><i class="fa-solid fa-chalkboard-user"></i><h5>B.Ed. Resources</h5><p class="muted mb-0">Curriculum, psychology, ICT, art craft and physical education centres.</p></div></div></div><a href="labs.php" class="btn btn-outline-dark mt-4">Explore All Labs</a></div>
    </div>
  </div>
</section>

<section class="section blog-scroll-section bg-cream">
  <div class="container">
    <div class="section-head with-nav mb-4">
      <div>
        <span class="badge-soft">Admission Blog</span>
        <h2 class="display-serif mt-3 display-5">Helpful articles with scroll option.</h2>
        <p class="muted mb-0">Use blogs to guide students, improve SEO and drive course-specific inquiries.</p>
      </div>
      <div class="swiper-arrows"><button class="swiper-btn blog-prev"><i class="fa-solid fa-arrow-left"></i></button><button class="swiper-btn blog-next"><i class="fa-solid fa-arrow-right"></i></button></div>
    </div>
    <div class="swiper blog-swiper">
      <div class="swiper-wrapper">
        <?php foreach($blogs as $slug=>$b): ?>
        <div class="swiper-slide">
          <article class="blog-card-scroll">
            <img src="<?= img_src($b['image']) ?>" alt="<?= h($b['title']) ?>">
            <div class="p-4"><span class="badge-soft"><?= h($b['category']) ?></span><h3><?= h($b['title']) ?></h3><p><?= h($b['excerpt']) ?></p><a href="blog-detail.php?slug=<?= h($slug) ?>">Read Article <i class="fa-solid fa-arrow-right"></i></a></div>
          </article>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section class="section cta-photo-section">
  <div class="container">
    <div class="cta-photo-card" style="--cta-img:url('<?= h(img_src('assets/img/headSCoI/Admission-Staff.png')) ?>')">
      <div class="cta-photo-overlay"></div>
      <div class="row g-4 align-items-center">
        <div class="col-lg-6"><span class="badge-light">Need Admission Guidance?</span><h2>Talk to our admission team before choosing a course.</h2><p>Submit your details and our counsellor will help you understand eligibility, documents, admission process, scholarship inquiry and career direction.</p></div>
        <div class="col-lg-5 ms-lg-auto"><div class="form-shell light-form"><?= renderLeadForm('Homepage CTA') ?></div></div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
