document.addEventListener('DOMContentLoaded', function(){
  document.querySelectorAll('a[href^="#"]').forEach(function(a){
    a.addEventListener('click', function(e){
      var href = this.getAttribute('href');
      if(!href || href === '#') return;
      var target = document.querySelector(href);
      if(target){ e.preventDefault(); target.scrollIntoView({behavior:'smooth', block:'start'}); }
    });
  });

  var popupShown = sessionStorage.getItem('admissionPopupShown');
  setTimeout(function(){
    if(!popupShown && window.bootstrap && document.getElementById('admissionPopup')){
      new bootstrap.Modal(document.getElementById('admissionPopup')).show();
      sessionStorage.setItem('admissionPopupShown','1');
    }
  }, 14000);

  var exitShown = false;
  document.addEventListener('mouseleave', function(e){
    if(e.clientY <= 0 && !exitShown && window.bootstrap && document.getElementById('exitPopup')){
      exitShown = true;
      new bootstrap.Modal(document.getElementById('exitPopup')).show();
    }
  });

  var chatToggle = document.querySelector('.chat-toggle');
  var chatBox = document.querySelector('.chat-box');
  if(chatToggle && chatBox){ chatToggle.addEventListener('click', function(){ chatBox.classList.toggle('open'); }); }

  document.querySelectorAll('.lead-form').forEach(function(form){
    form.addEventListener('submit', function(){
      var btn = form.querySelector('button[type="submit"]');
      if(btn){ btn.disabled = true; btn.innerHTML = 'Submitting...'; setTimeout(function(){btn.disabled=false; btn.innerHTML='<i class="fa-solid fa-paper-plane me-2"></i>Submit Admission Inquiry';}, 5000); }
    });
  });

  function isDesktop(){ return window.matchMedia('(min-width: 1200px)').matches; }
  var dropdowns = Array.prototype.slice.call(document.querySelectorAll('.site-nav .nav-item.dropdown'));
  function closeAll(except){
    dropdowns.forEach(function(dd){
      if(dd === except) return;
      var menu = dd.querySelector('.dropdown-menu');
      var toggle = dd.querySelector('.dropdown-toggle');
      dd.classList.remove('is-open','show');
      if(menu) menu.classList.remove('show');
      if(toggle) toggle.setAttribute('aria-expanded','false');
    });
  }
  function openDropdown(dd){
    if(!isDesktop()) return;
    closeAll(dd);
    var menu = dd.querySelector('.dropdown-menu');
    var toggle = dd.querySelector('.dropdown-toggle');
    dd.classList.add('is-open','show');
    if(menu) menu.classList.add('show');
    if(toggle) toggle.setAttribute('aria-expanded','true');
  }

  dropdowns.forEach(function(dd){
    var toggle = dd.querySelector('.dropdown-toggle');
    dd.addEventListener('mouseenter', function(){ openDropdown(dd); });
    dd.addEventListener('focusin', function(){ openDropdown(dd); });
    if(toggle){
      toggle.addEventListener('click', function(e){
        if(isDesktop()){
          e.preventDefault();
          e.stopPropagation();
          openDropdown(dd);
        }
      });
    }
  });
  document.querySelectorAll('.site-nav .nav-item:not(.dropdown) .nav-link, .btn-apply').forEach(function(link){
    link.addEventListener('mouseenter', function(){ if(isDesktop()) closeAll(); });
  });
  document.addEventListener('click', function(e){ if(isDesktop() && !e.target.closest('.site-nav .dropdown')) closeAll(); });
  document.addEventListener('keydown', function(e){ if(e.key === 'Escape') closeAll(); });
  window.addEventListener('resize', function(){ if(!isDesktop()) closeAll(); });
});

(function(){
  function baseAuto(delay){
    return { delay: delay || 2600, disableOnInteraction:false, pauseOnMouseEnter:true };
  }
  function bootSwipers(){
    if (typeof Swiper === 'undefined') return;
    var defaults = { grabCursor:true, watchOverflow:true };

    if (document.querySelector('.department-swiper')) {
      new Swiper('.department-swiper', Object.assign({}, defaults, {
        loop:true, speed:850, autoplay:baseAuto(2600), slidesPerView: 1.08, spaceBetween: 18,
        pagination: { el: '.dept-pagination', clickable: true },
        navigation: { nextEl: '.dept-next', prevEl: '.dept-prev' },
        breakpoints: { 576:{slidesPerView:1.4}, 768:{slidesPerView:2.1}, 992:{slidesPerView:3}, 1200:{slidesPerView:4} }
      }));
    }

    if (document.querySelector('.course-swiper')) {
      new Swiper('.course-swiper', Object.assign({}, defaults, {
        loop:true, speed:900, autoplay:baseAuto(2800), slidesPerView: 1.05, spaceBetween: 18,
        pagination: { el: '.course-pagination', clickable: true },
        navigation: { nextEl: '.course-next', prevEl: '.course-prev' },
        breakpoints: { 576:{slidesPerView:1.35}, 768:{slidesPerView:2.05}, 992:{slidesPerView:2.7}, 1200:{slidesPerView:3.15} }
      }));
    }

    if (document.querySelector('.placement-swiper')) {
      new Swiper('.placement-swiper', Object.assign({}, defaults, {
        loop:true, speed:900, autoplay:baseAuto(2400), slidesPerView: 1.05, spaceBetween: 18,
        navigation: { nextEl: '.placement-next', prevEl: '.placement-prev' },
        breakpoints: { 576:{slidesPerView:1.35}, 768:{slidesPerView:2}, 992:{slidesPerView:3}, 1200:{slidesPerView:3.5} }
      }));
    }

    if (document.querySelector('.dept-placement-swiper')) {
      new Swiper('.dept-placement-swiper', Object.assign({}, defaults, {
        loop:true, speed:900, autoplay:baseAuto(2500), slidesPerView: 1.05, spaceBetween: 18,
        pagination: { el: '.dept-place-pagination', clickable: true },
        navigation: { nextEl: '.dept-place-next', prevEl: '.dept-place-prev' },
        breakpoints: { 576:{slidesPerView:1.35}, 768:{slidesPerView:2}, 992:{slidesPerView:3}, 1200:{slidesPerView:3.3} }
      }));
    }

    if (document.querySelector('.dept-course-swiper')) {
      new Swiper('.dept-course-swiper', Object.assign({}, defaults, {
        loop:true, speed:900, autoplay:baseAuto(2700), slidesPerView: 1.05, spaceBetween: 18,
        pagination: { el: '.dept-course-pagination', clickable: true },
        navigation: { nextEl: '.dept-course-next', prevEl: '.dept-course-prev' },
        breakpoints: { 576:{slidesPerView:1.35}, 768:{slidesPerView:2}, 992:{slidesPerView:2.7}, 1200:{slidesPerView:3.1} }
      }));
    }

    if (document.querySelector('.reel-swiper')) {
      new Swiper('.reel-swiper', Object.assign({}, defaults, {
        loop:true, speed:900, autoplay:baseAuto(2300), slidesPerView: 'auto', spaceBetween: 18,
        navigation: { nextEl: '.reel-next', prevEl: '.reel-prev' }, freeMode: false
      }));
    }

    if (document.querySelector('.gallery-swiper')) {
      new Swiper('.gallery-swiper', Object.assign({}, defaults, {
        loop:true, speed:900, autoplay:baseAuto(2500), slidesPerView: 'auto', spaceBetween: 18,
        centeredSlides: false, navigation: { nextEl: '.gallery-next', prevEl: '.gallery-prev' }, freeMode: false
      }));
    }

    if (document.querySelector('.blog-swiper')) {
      new Swiper('.blog-swiper', Object.assign({}, defaults, {
        loop:true, speed:900, autoplay:baseAuto(2900), slidesPerView: 1.05, spaceBetween: 18,
        navigation: { nextEl: '.blog-next', prevEl: '.blog-prev' },
        breakpoints: { 576:{slidesPerView:1.3}, 768:{slidesPerView:2}, 992:{slidesPerView:3}, 1200:{slidesPerView:3.2} }
      }));
    }
  }
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', bootSwipers); else bootSwipers();
})();
