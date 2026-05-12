<?php $metaTitle='ITI Labs | Sakshi Group of Institutions'; include 'includes/header.php'; $deptKey='iti'; ?>
<section class="page-hero-solid" style="--hero-img:url('<?= h(img_src('assets/img/gallery/iti/ITI1.jpg')) ?>')"><div class="container"><span class="page-kicker"><i class="fa-solid fa-flask-vial"></i> ITI Labs</span><h1>ITI Labs with image for every lab.</h1><p>ITI workshops support trade-specific practical training for fitter, electrician, electronics mechanic and draughtsman students.</p></div></section>
<section class="section bg-cream"><div class="container"><div class="row g-4">
<?php foreach($departments[$deptKey]['labs'] as $labSlug): if(!isset($labs[$labSlug])) continue; $lab=$labs[$labSlug]; $labImg=$labImageMap[$labSlug] ?? 'assets/img/labs/head_labs.jpg'; ?>
  <div class="col-md-6 col-xl-4"><article class="lab-detail-card"><img class="lab-card-image" src="<?= h(img_src($labImg)) ?>" alt="<?= h($lab['title']) ?>"><div class="body"><span class="badge-soft"><?= h($lab['department']) ?></span><h3 class="mt-3"><?= h($lab['title']) ?></h3><p><?= h($lab['desc']) ?></p></div></article></div>
<?php endforeach; ?>
</div></div></section>
<section class="section"><div class="container"><div class="cta-dark cta-compact"><div class="row g-4 align-items-center"><div class="col-lg-4"><h2>Need guidance for ITI Labs?</h2><p>Submit your details and our admission team will explain facilities, eligibility and admission process.</p></div><div class="col-lg-8"><div class="form-shell wide-form-shell"><?= renderLeadForm('ITI Labs Page') ?></div></div></div></div></div></section>
<?php include 'includes/footer.php'; ?>
