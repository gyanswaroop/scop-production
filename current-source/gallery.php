<?php
$metaTitle='Gallery | Sakshi Group of Institutions';
include 'includes/header.php';
$extraGallery = [
 ['assets/img/b.ed/certificate_distribution.jpg','B.Ed. Certificate Distribution','bed'],
 ['assets/img/b.ed/educational_tour.jpg','B.Ed. Educational Tour','bed'],
 ['assets/img/home/IMG-20230203-WA0007.jpg','Life@SGoI Activity','life'],
 ['assets/img/home/hall_01.jpg','Seminar Hall','events'],
 ['assets/img/home/visit_1.jpg','Campus Visit','events'],
 ['assets/img/home/visit_2.jpg','Student Visit','events']
];
$allGallery = array_merge($galleryImages, $extraGallery);
$filter = $_GET['cat'] ?? 'all';
if($filter !== 'all') $allGallery = array_values(array_filter($allGallery, fn($g)=>($g[2]??'')===$filter));
$perPage = 9; $page=max(1,(int)($_GET['page']??1)); $total=count($allGallery); $pages=max(1,(int)ceil($total/$perPage)); $page=min($page,$pages); $items=array_slice($allGallery,($page-1)*$perPage,$perPage);
?>
<section class="page-hero-solid" style="--hero-img:url('<?= h(img_src('assets/img/page_head/Gallery-Head-Image.jpg')) ?>')"><div class="container"><span class="page-kicker"><i class="fa-solid fa-images"></i> Gallery</span><h1>Campus life, labs, events and department activities.</h1><p>Browse gallery images category-wise with pagination. Separate department gallery pages are also available.</p></div></section>
<section class="section"><div class="container"><div class="gallery-filter mb-4"><a class="btn btn-outline-dark <?= $filter==='all'?'active':'' ?>" href="gallery.php">All</a><?php foreach($galleryCategories as $key=>$label): ?><a class="btn btn-outline-dark <?= $filter===$key?'active':'' ?>" href="gallery.php?cat=<?= h($key) ?>"><?= h($label) ?></a><?php endforeach; ?><a class="btn btn-primary" href="gallery-pharmacy.php">Pharmacy</a><a class="btn btn-primary" href="gallery-nursing.php">Nursing</a><a class="btn btn-primary" href="gallery-iti.php">ITI</a><a class="btn btn-primary" href="gallery-bed.php">B.Ed.</a></div><div class="gallery-grid-v8"><?php foreach($items as $g): ?><article class="gallery-item-v8"><img src="<?= h(img_src($g[0])) ?>" alt="<?= h($g[1]) ?>"><div class="cap"><span><?= h($galleryCategories[$g[2]] ?? ucfirst($g[2])) ?></span><h3><?= h($g[1]) ?></h3></div></article><?php endforeach; ?></div><?php if($pages>1): ?><nav class="mt-5"><ul class="pagination justify-content-center"><?php for($i=1;$i<=$pages;$i++): ?><li class="page-item <?= $i===$page?'active':'' ?>"><a class="page-link" href="gallery.php?cat=<?= h($filter) ?>&page=<?= $i ?>"><?= $i ?></a></li><?php endfor; ?></ul></nav><?php endif; ?></div></section>
<?php include 'includes/footer.php'; ?>
