/* ============================================
   Abuyog Community College – Offline Homepage
   JavaScript
   ============================================ */

(function () {
  'use strict';

  // ===== Philippine Standard Time =====
  function updatePST() {
    const el = document.getElementById('pstTime');
    if (!el) return;
    const now = new Date();
    const options = {
      timeZone: 'Asia/Manila',
      weekday: 'short',
      year: 'numeric',
      month: 'short',
      day: 'numeric',
      hour: '2-digit',
      minute: '2-digit',
      second: '2-digit',
      hour12: true
    };
    el.textContent = now.toLocaleString('en-PH', options);
  }
  updatePST();
  setInterval(updatePST, 1000);

  // ===== Mobile Nav =====
  const navToggle = document.getElementById('navToggle');
  const mainNav = document.getElementById('mainNav');

  if (navToggle && mainNav) {
    navToggle.addEventListener('click', function () {
      mainNav.classList.toggle('open');
      navToggle.textContent = mainNav.classList.contains('open') ? '✕' : '☰';
    });
  }

  // Dropdowns on mobile
  document.querySelectorAll('.dropdown > button').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      if (window.innerWidth <= 720) {
        e.preventDefault();
        btn.parentElement.classList.toggle('open');
      }
    });
  });

  // ===== Hero Slider =====
  const slides = document.querySelectorAll('.slide');
  const dotsContainer = document.getElementById('sliderDots');
  let current = 0;
  let autoTimer;

  if (slides.length && dotsContainer) {
    slides.forEach(function (_, i) {
      const dot = document.createElement('button');
      dot.className = 'slider-dot' + (i === 0 ? ' active' : '');
      dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));
      dot.addEventListener('click', function () {
        goTo(i);
      });
      dotsContainer.appendChild(dot);
    });

    function goTo(index) {
      slides[current].classList.remove('active');
      if (dotsContainer.children[current]) {
        dotsContainer.children[current].classList.remove('active');
      }
      current = (index + slides.length) % slides.length;
      slides[current].classList.add('active');
      if (dotsContainer.children[current]) {
        dotsContainer.children[current].classList.add('active');
      }
      resetAuto();
    }

    function next() {
      goTo(current + 1);
    }

    function prev() {
      goTo(current - 1);
    }

    var nextBtn = document.getElementById('nextSlide');
    var prevBtn = document.getElementById('prevSlide');
    if (nextBtn) nextBtn.addEventListener('click', next);
    if (prevBtn) prevBtn.addEventListener('click', prev);

    function resetAuto() {
      clearInterval(autoTimer);
      autoTimer = setInterval(next, 6000);
    }
    resetAuto();
  }

  // ===== Back to Top =====
  const backTop = document.getElementById('backTop');
  if (backTop) {
    window.addEventListener('scroll', function () {
      backTop.classList.toggle('visible', window.scrollY > 400);
    });
    backTop.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // ===== Accessibility Modal =====
  const a11yModal = document.getElementById('a11yModal');
  const openA11y = document.getElementById('openA11y');
  const closeA11y = document.getElementById('closeA11y');

  if (openA11y && a11yModal) {
    openA11y.addEventListener('click', function (e) {
      e.preventDefault();
      a11yModal.classList.add('open');
    });
  }
  if (closeA11y && a11yModal) {
    closeA11y.addEventListener('click', function () {
      a11yModal.classList.remove('open');
    });
  }
  if (a11yModal) {
    a11yModal.addEventListener('click', function (e) {
      if (e.target === a11yModal) a11yModal.classList.remove('open');
    });
  }

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && a11yModal) {
      a11yModal.classList.remove('open');
    }
    if (e.altKey && e.key === '0' && a11yModal) {
      e.preventDefault();
      a11yModal.classList.add('open');
    }
    if (e.altKey && (e.key === 'h' || e.key === 'H')) {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  });

  // ===== Smooth anchor scroll =====
  document.querySelectorAll('a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
      var id = a.getAttribute('href');
      if (id && id.length > 1) {
        var el = document.querySelector(id);
        if (el) {
          e.preventDefault();
          el.scrollIntoView({ behavior: 'smooth', block: 'start' });
          if (mainNav && mainNav.classList.contains('open')) {
            mainNav.classList.remove('open');
            if (navToggle) navToggle.textContent = '☰';
          }
        }
      }
    });
  });
})();
