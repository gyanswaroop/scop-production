<?php $metaTitle='B.Ed. Labs | Sakshi Group of Institutions'; include 'includes/header.php'; $deptKey='education'; ?>
<section class="page-hero-solid" style="--hero-img:url('<?= h(img_src('assets/img/b.ed/BEd.jpg')) ?>')"><div class="container"><span class="page-kicker"><i class="fa-solid fa-flask-vial"></i> B.Ed. Labs</span><h1>B.Ed. Labs with image for every lab.</h1><p>B.Ed. resource centres help student-teachers build practical teaching ability, psychology understanding, ICT skill and classroom support material.</p></div></section>
<section class="section bg-cream"><div class="container"><div class="row g-4">
<?php foreach($departments[$deptKey]['labs'] as $labSlug): if(!isset($labs[$labSlug])) continue; $lab=$labs[$labSlug]; $labImg=$labImageMap[$labSlug] ?? 'assets/img/labs/head_labs.jpg'; ?>
  <div class="col-md-6 col-xl-4"><article class="lab-detail-card"><img class="lab-card-image" src="<?= h(img_src($labImg)) ?>" alt="<?= h($lab['title']) ?>"><div class="body"><span class="badge-soft"><?= h($lab['department']) ?></span><h3 class="mt-3"><?= h($lab['title']) ?></h3><p><?= h($lab['desc']) ?></p></div></article></div>
<?php endforeach; ?>
</div></div></section>
<section class="section"><div class="container"><div class="cta-dark cta-compact"><div class="row g-4 align-items-center"><div class="col-lg-4"><h2>Need guidance for B.Ed. Labs?</h2><p>Submit your details and our admission team will explain facilities, eligibility and admission process.</p></div><div class="col-lg-8"><div class="form-shell wide-form-shell"><?= renderLeadForm('B.Ed. Labs Page') ?></div></div></div></div></div></section>
<?php include 'includes/footer.php'; ?>
