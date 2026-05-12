<?php
require_once 'includes/functions.php';

$requestedSlug = $_GET['slug'] ?? 'pharmacy';
$slug = isset($departments[$requestedSlug]) ? $requestedSlug : 'pharmacy';
$d = $departments[$slug];

$metaTitle = $d['name'].' Department | Sakshi Group of Institutions Kanpur';
$metaDescription = $d['tagline'].' Explore courses, labs, placement support, eligibility, admission process and student success highlights.';
$bodyClass = 'department-page dept-'.$slug;

$departmentNames = [
  'pharmacy'=>'Pharmacy',
  'nursing'=>'Nursing',
  'iti'=>'I.T.I.',
  'education'=>'B.Ed.'
];

$placedShowcase = [
  'pharmacy' => [
    ['image'=>'assets/img/Placement-Drive-29-04-2023.jpg','tag'=>'Placement Drive','title'=>'Pharmacy Career Connect','desc'=>'Placement and interview-readiness activities for pharmacy students.'],
    ['image'=>'assets/img/gallery/pharmacy/IMG-20230203-WA0031.jpg','tag'=>'Student Activity','title'=>'Practical Pharmacy Exposure','desc'=>'Department activities and practical learning for pharmacy students.'],
    ['image'=>'assets/img/Industrial_Visit_Head.jpg','tag'=>'Industry Exposure','title'=>'Industrial Visit Learning','desc'=>'Industry and practical exposure to understand the pharmacy ecosystem.'],
    ['image'=>'assets/img/gallery/pharmacy/DSC_0242.jpg','tag'=>'Lab Training','title'=>'Lab-Based Learning','desc'=>'Hands-on training through department-specific pharmacy laboratories.'],
  ],
  'nursing' => [
    ['image'=>'assets/img/students/nursing-1.jpg','tag'=>'Student Success','title'=>'Clinical Learning Journey','desc'=>'Nursing students receive exposure through clinical and skill-based learning.'],
    ['image'=>'assets/img/students/nursing-3.jpg','tag'=>'Student Success','title'=>'Patient-Care Readiness','desc'=>'Training focused on discipline, confidence and healthcare responsibility.'],
    ['image'=>'assets/img/hospital_visit_JL_head.jpg','tag'=>'Hospital Exposure','title'=>'Hospital Visit & Clinical Training','desc'=>'Hospital exposure helps nursing students connect theory with real care settings.'],
    ['image'=>'assets/img/gallery/nursing/IMG-20230203-WA0019.jpg','tag'=>'Skill Training','title'=>'Nursing Practical Session','desc'=>'Simulation and practical sessions support professional nursing development.'],
  ],
  'iti' => [
    ['image'=>'assets/img/placements/ITI/Aman_Bajpai.jpg','tag'=>'Placed Student','title'=>'Aman Bajpai','desc'=>'ITI student placement and career success highlight.'],
    ['image'=>'assets/img/placements/ITI/Anup_Maurya.jpg','tag'=>'Placed Student','title'=>'Anup Maurya','desc'=>'Trade-based technical learning leading to career opportunities.'],
    ['image'=>'assets/img/placements/ITI/Jitendra_Sharma.jpg','tag'=>'Placed Student','title'=>'Jitendra Sharma','desc'=>'Practical workshop exposure and employability support.'],
    ['image'=>'assets/img/placements/ITI/Mayank_Srivastava.jpg','tag'=>'Placed Student','title'=>'Mayank Srivastava','desc'=>'ITI placement and skill-building outcome.'],
    ['image'=>'assets/img/placements/ITI/Neeraj_Kumar.jpg','tag'=>'Placed Student','title'=>'Neeraj Kumar','desc'=>'Career-focused ITI training and placement support.'],
    ['image'=>'assets/img/placements/ITI/Rahul_Gautam.jpg','tag'=>'Placed Student','title'=>'Rahul Gautam','desc'=>'Trade-specific practical training with placement guidance.'],
  ],
  'education' => [
    ['image'=>'assets/img/placements/B-Ed/akansha-katiyar.jpg','tag'=>'Placed Student','title'=>'Akansha Katiyar','desc'=>'B.Ed. placement and teaching-career success highlight.'],
    ['image'=>'assets/img/placements/B-Ed/ayush-vaish.jpg','tag'=>'Placed Student','title'=>'Ayush Vaish','desc'=>'Teacher training pathway with placement support.'],
    ['image'=>'assets/img/placements/B-Ed/harsh-katiyar.jpg','tag'=>'Placed Student','title'=>'Harsh Katiyar','desc'=>'School-teaching readiness through B.Ed. training.'],
    ['image'=>'assets/img/placements/B-Ed/Kunal.jpg','tag'=>'Placed Student','title'=>'Kunal','desc'=>'Education-sector career success highlight.'],
    ['image'=>'assets/img/placements/B-Ed/mohini.jpg','tag'=>'Placed Student','title'=>'Mohini','desc'=>'Teaching-career guidance and placement support.'],
    ['image'=>'assets/img/placements/B-Ed/shristi-yadav.jpg','tag'=>'Placed Student','title'=>'Shristi Yadav','desc'=>'B.Ed. student success and career pathway.'],
  ]
];
$successSlides = $placedShowcase[$slug] ?? $placedShowcase['pharmacy'];

$heroSlides = array_merge([
  ['image'=>$d['image'], 'tag'=>$d['name'].' Department', 'title'=>$d['short'], 'desc'=>$d['tagline']],
], array_slice($successSlides, 0, 2));

include 'includes/header.php';
?>

<section class="department-hero-carousel">
  <div id="departmentHeroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5200">
    <div class="carousel-indicators">
      <?php foreach($heroSlides as $i=>$slide): ?>
        <button type="button" data-bs-target="#departmentHeroCarousel" data-bs-slide-to="<?= $i ?>" class="<?= $i===0?'active':'' ?>" aria-current="<?= $i===0?'true':'false' ?>" aria-label="Slide <?= $i+1 ?>"></button>
      <?php endforeach; ?>
    </div>
    <div class="carousel-inner">
      <?php foreach($heroSlides as $i=>$slide): ?>
      <div class="carousel-item <?= $i===0?'active':'' ?>">
        <div class="dept-hero-slide" style="--dept-hero-img:url('<?= h(img_src($slide['image'])) ?>')">
          <div class="dept-hero-overlay"></div>
          <div class="container position-relative">
            <div class="row align-items-center dept-hero-row">
              <div class="col-lg-8 col-xl-7">
                <span class="hero-kicker solid"><i class="fa-solid <?= h($d['icon']) ?>"></i> <?= h($slide['tag']) ?></span>
                <h1><?= h($slide['title']) ?></h1>
                <p><?= h($slide['desc']) ?></p>
                <div class="hero-actions">
                  <a href="#enquiry" class="btn btn-primary btn-lg"><i class="fa-solid fa-paper-plane me-2"></i>Apply / Request Callback</a>
                  <a href="<?= h($d['brochure']) ?>" class="btn btn-light-outline btn-lg" target="_blank"><i class="fa-solid fa-file-arrow-down me-2"></i>Download Brochure</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#departmentHeroCarousel" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
    <button class="carousel-control-next" type="button" data-bs-target="#departmentHeroCarousel" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
  </div>
</section>

<section class="section department-overview-section">
  <div class="container">
    <div class="row g-4 align-items-start">
      <div class="col-lg-7">
        <span class="badge-soft">Department Overview</span>
        <h2 class="display-serif mt-3 display-5">Everything is separate for <?= h($d['name']) ?>.</h2>
        <p class="muted lead-lite">This page presents <?= h($d['name']) ?> as its own academic group with separate courses, labs, principal guidance, brochure, placement support, career prospects, library resources, exposure visits and eligibility details.</p>
      </div>
      <div class="col-lg-5">
        <div class="dept-quick-panel">
          <div><span>Courses</span><strong><?= count($d['courses']) ?></strong></div>
          <div><span>Labs / Resources</span><strong><?= count($d['labs']) ?></strong></div>
          <div><span>Approval</span><strong><?= h($d['name']==='B.Ed.'?'CSJMU':($d['name']==='I.T.I.'?'NCVT':($d['name']==='Nursing'?'ABVMU':'PCI'))) ?></strong></div>
        </div>
      </div>
    </div>
    <div class="row g-3 mt-3">
      <?php $points=[['Principal Guidance',$d['principal'],'fa-user-tie'],['Placement Cell',$d['placement'],'fa-briefcase'],['Library Books',$d['library'],'fa-book-open'],['Visits / Exposure',$d['visits'],'fa-route'],['Eligibility',$d['eligibility'],'fa-list-check'],['Brochure','Download department-specific brochure and admission resources.','fa-file-arrow-down']]; foreach($points as $p): ?>
      <div class="col-md-6 col-xl-4"><div class="feature-card soft-feature"><i class="fa-solid <?= h($p[2]) ?>"></i><h3 class="h5"><?= h($p[0]) ?></h3><p class="muted mb-0"><?= h($p[1]) ?></p></div></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section bg-cream">
  <div class="container">
    <div class="section-head with-nav mb-4">
      <div>
        <span class="badge-soft">Student Success & Placement Carousel</span>
        <h2 class="display-serif mt-3 display-5"><?= h($d['name']) ?> placement and exposure highlights.</h2>
        <p class="muted mb-0">Swipe through available placed-student images, placement drives, clinical exposure, industrial visits and practical learning highlights.</p>
      </div>
      <div class="swiper-arrows"><button class="swiper-btn dept-place-prev"><i class="fa-solid fa-arrow-left"></i></button><button class="swiper-btn dept-place-next"><i class="fa-solid fa-arrow-right"></i></button></div>
    </div>
    <div class="swiper dept-placement-swiper">
      <div class="swiper-wrapper">
        <?php foreach($successSlides as $slide): ?>
        <div class="swiper-slide">
          <article class="placed-student-card">
            <img src="<?= h(img_src($slide['image'])) ?>" alt="<?= h($slide['title']) ?>">
            <div class="placed-copy"><span><?= h($slide['tag']) ?></span><h3><?= h($slide['title']) ?></h3><p><?= h($slide['desc']) ?></p></div>
          </article>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-pagination dept-place-pagination"></div>
    </div>
  </div>
</section>

<section class="section" id="courses">
  <div class="container">
    <div class="section-head with-nav mb-4">
      <div><span class="badge-soft">Courses</span><h2 class="display-serif mt-3 display-5"><?= h($d['name']) ?> course landing pages</h2><p class="muted mb-0">Each course opens as a separate admission-focused landing page with details and inquiry form.</p></div>
      <div class="swiper-arrows"><button class="swiper-btn dept-course-prev"><i class="fa-solid fa-arrow-left"></i></button><button class="swiper-btn dept-course-next"><i class="fa-solid fa-arrow-right"></i></button></div>
    </div>
    <div class="swiper dept-course-swiper">
      <div class="swiper-wrapper">
        <?php foreach($d['courses'] as $cs): if(!isset($courses[$cs])) continue; $c=$courses[$cs]; ?>
        <div class="swiper-slide">
          <article class="course-card swipe-card course-landing-card">
            <div class="course-img"><img src="<?= h(img_src($c['image'])) ?>" alt="<?= h($c['title']) ?>"><span class="duration"><?= h($c['duration']) ?></span></div>
            <div class="content"><span class="badge-soft"><?= h($c['department']) ?></span><h3 class="h4 mt-3"><?= h($c['title']) ?></h3><p class="muted"><?= h($c['summary']) ?></p><ul class="course-mini-list"><li>Eligibility and admission process</li><li>Labs, visits and placement support</li><li>Career prospects and FAQs</li></ul><a href="course.php?slug=<?= h($cs) ?>" class="btn btn-primary w-100 mt-2">Open Course Page</a></div>
          </article>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-pagination dept-course-pagination"></div>
    </div>
  </div>
</section>

<section class="section bg-light-subtle">
  <div class="container">
    <div class="row align-items-end mb-4"><div class="col-lg-8"><span class="badge-soft">Labs & Practical Training</span><h2 class="display-serif mt-3 display-5">Labs for <?= h($d['name']) ?></h2></div><div class="col-lg-4 text-lg-end"><a href="labs.php" class="btn btn-outline-dark">View All Labs</a></div></div>
    <div class="row g-3">
      <?php foreach($d['labs'] as $labSlug): if(!isset($labs[$labSlug])) continue; $l=$labs[$labSlug]; ?>
      <div class="col-md-6 col-xl-4"><div class="lab-card"><span class="badge-soft"><?= h($l['department']) ?></span><h3 class="h5 mt-3"><?= h($l['title']) ?></h3><p class="muted mb-0"><?= h($l['desc']) ?></p></div></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container"><div class="row g-4"><div class="col-lg-6"><div class="split-box"><h2 class="display-serif">Career Prospects</h2><ul class="mt-3 dept-career-list"><?php foreach($d['careers'] as $career): ?><li><?= h($career) ?></li><?php endforeach; ?></ul></div></div><div class="col-lg-6"><div class="split-box"><h2 class="display-serif">Approval / Affiliation</h2><?php $ap=$approvals[$d['name']] ?? ($slug==='education'?$approvals['Education']:[]); foreach($ap as $a): ?><div class="download-row"><div><b><?= h($a) ?></b><div class="type">Approval / Affiliation</div></div><i class="fa-solid fa-award text-warning fs-3"></i></div><?php endforeach; ?></div></div></div></div>
</section>

<section class="section dept-enquiry-section" id="enquiry">
  <div class="container">
    <div class="cta-dark cta-compact">
      <div class="row align-items-center g-4">
        <div class="col-lg-4"><span class="form-kicker">Apply / Request Callback</span><h2>Discuss <?= h($d['name']) ?> admission.</h2><p>Fill the form. Our team will guide you on eligibility, documents, scholarship inquiry and admission steps.</p></div>
        <div class="col-lg-8"><div class="form-shell wide-form-shell"><?= renderLeadForm('Department CTA - '.$d['name']) ?></div></div>
      </div>
    </div>
  </div>
</section>
<?php include 'includes/footer.php'; ?>
