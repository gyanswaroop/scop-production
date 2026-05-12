</main>
<a class="whatsapp-float" href="https://wa.me/<?= WHATSAPP_NUMBER ?>" target="_blank" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
<div class="sticky-apply"><a href="admissions.php#online-application" class="btn btn-gold shadow-soft"><i class="fa-solid fa-pen-to-square me-1"></i> Apply Now</a></div>
<div class="chat-widget">
  <button class="chat-toggle" aria-label="Admission Chat"><i class="fa-solid fa-comments"></i></button>
  <div class="chat-box">
    <div class="chat-head">Admission Helpdesk</div>
    <div class="chat-body">
      <p class="small muted mb-2">Select your interest and request a callback.</p>
      <form action="api/chat-submit.php" method="post">
        <input type="hidden" name="csrf" value="<?= h(csrf_token()) ?>">
        <input class="form-control" name="name" placeholder="Your Name" required>
        <input class="form-control" name="mobile" placeholder="Mobile Number" required>
        <select class="form-select" name="course"><option>Pharmacy</option><option>Nursing</option><option>B.Ed.</option><option>ITI</option><option>Scholarship Guidance</option></select>
        <button class="btn btn-primary w-100 mt-2">Request Callback</button>
      </form>
    </div>
  </div>
</div>

<div class="modal fade premium-lead-modal" id="admissionPopup" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content">
    <button type="button" class="modal-x" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
    <div class="row g-0">
      <div class="col-lg-5 popup-visual" style="--popup-img:url('assets/img/headSCoI/Admission-Process.png')">
        <div class="popup-copy"><span>Free Guidance</span><h3>Confused about the right course?</h3><p>Get eligibility, admission process and scholarship support in one call.</p></div>
      </div>
      <div class="col-lg-7 popup-form"><h4>Request Admission Guidance</h4><p class="muted">Our admission team will connect with you shortly.</p><?= renderLeadForm('Timed Popup') ?></div>
    </div>
  </div></div>
</div>
<div class="modal fade premium-lead-modal exit-lead-modal" id="exitPopup" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content">
    <button type="button" class="modal-x" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
    <div class="row g-0">
      <div class="col-lg-5 popup-visual" style="--popup-img:url('assets/img/admission_online.jpg')">
        <div class="popup-copy"><span>Before You Leave</span><h3>Want us to explain the best option?</h3><p>Share your details. We will help you compare Pharmacy, Nursing, B.Ed. and ITI.</p></div>
      </div>
      <div class="col-lg-7 popup-form"><h4>Get a Callback</h4><p class="muted">No spam. Only course and admission guidance.</p><?= renderLeadForm('Exit Intent Popup') ?></div>
    </div>
  </div></div>
</div>

<footer>
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4">
        <div class="d-flex align-items-center gap-2 mb-3"><img src="assets/img/logos/sakshi-Group-80x80.png" style="width:56px" alt="SGoI"><h5 class="mb-0">Sakshi Group of Institutions</h5></div>
        <p>Career-focused education in Pharmacy, Nursing, B.Ed. and ITI with labs, practical exposure, student support and admission guidance.</p>
        <p><i class="fa-solid fa-location-dot me-2"></i>309, Ishwari Ganj - Palara Rd, Kalyanpur, Kanpur, Uttar Pradesh 208017</p>
      </div>
      <div class="col-6 col-lg-2"><h5>Programs</h5><?php foreach($courses as $slug=>$c): ?><a href="course.php?slug=<?= h($slug) ?>"><?= h($c['title']) ?></a><?php endforeach; ?></div>
      <div class="col-6 col-lg-2"><h5>Admissions</h5><a href="admissions.php#pay-fee">Pay Fee Online</a><a href="admissions.php#details">Admission Details</a><a href="admissions.php#process">Admission Process</a><a href="admissions.php#online-application">Online Application</a><a href="admissions.php#downloads">Download</a></div>
      <div class="col-6 col-lg-2"><h5>Facilities</h5><a href="facilities.php">Facilities</a><a href="labs.php">Labs</a><a href="placements.php">Placements</a><a href="gallery.php">Gallery</a><a href="blog.php">Blog</a></div>
      <div class="col-6 col-lg-2"><h5>Contact</h5><a href="contact.php#contact">Contact Us</a><a href="contact.php#admission">Admission Department</a><a href="contact.php#grievance">Grievance</a><a href="contact.php#anti-ragging">Anti Ragging</a><a href="privacy.php">Privacy Policy</a></div>
    </div>
    <div class="footer-bottom d-flex flex-wrap justify-content-between gap-2"><span>© <?= date('Y') ?> Sakshi Group of Institutions. All rights reserved.</span><span><?= ADMISSION_EMAIL ?> · <?= ADMISSION_PHONE_DISPLAY ?></span></div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="assets/js/main.js?v=9.0"></script>
</body>
</html>
