<?php $metaTitle='Nursing Labs | Sakshi Group of Institutions'; include 'includes/header.php'; $deptKey='nursing'; ?>
<section class="page-hero-solid" style="--hero-img:url('<?= h(img_src('assets/img/labs/nursing_foundation_lab.jpg')) ?>')"><div class="container"><span class="page-kicker"><i class="fa-solid fa-flask-vial"></i> Nursing Labs</span><h1>Nursing Labs with image for every lab.</h1><p>Nursing laboratories support skill practice, patient-care readiness, maternal-child health, nutrition, community health and clinical confidence.</p></div></section>
<section class="section bg-cream"><div class="container"><div class="row g-4">
<?php foreach($departments[$deptKey]['labs'] as $labSlug): if(!isset($labs[$labSlug])) continue; $lab=$labs[$labSlug]; $labImg=$labImageMap[$labSlug] ?? 'assets/img/labs/head_labs.jpg'; ?>
  <div class="col-md-6 col-xl-4"><article class="lab-detail-card"><img class="lab-card-image" src="<?= h(img_src($labImg)) ?>" alt="<?= h($lab['title']) ?>"><div class="body"><span class="badge-soft"><?= h($lab['department']) ?></span><h3 class="mt-3"><?= h($lab['title']) ?></h3><p><?= h($lab['desc']) ?></p></div></article></div>
<?php endforeach; ?>
</div></div></section>
<section class="section"><div class="container"><div class="cta-dark cta-compact"><div class="row g-4 align-items-center"><div class="col-lg-4"><h2>Need guidance for Nursing Labs?</h2><p>Submit your details and our admission team will explain facilities, eligibility and admission process.</p></div><div class="col-lg-8"><div class="form-shell wide-form-shell"><?= renderLeadForm('Nursing Labs Page') ?></div></div></div></div></div></section>
<?php include 'includes/footer.php'; ?>
