<footer class="text-center py-5">
  <div class="container">

    <a href="/" class="footer-logo">
      <img src="assets/img/logo.png" alt="AldeaFirst" class="img-fluid" />
    </a>

    <!-- Tagline -->
    <p class="text-muted mb-3">
      Transforming ideas into intelligent, scalable,<br />
      and inclusive solutions.
    </p>

    <!-- Links -->
    <div class="mb-3">
      <a href="#" class="footer-link">Terms Of Use</a> |
      <a href="#" class="footer-link">Privacy Policy</a> |
      <a href="#" class="footer-link">Career</a> |
      <a href="#" class="footer-link">Sitemap</a>
    </div>

    <!-- Social Media Icons -->
    <div class="mb-3">
      <a href="#" class="social-icon"><img src="assets/img/fb-icon.png" class="img-fluid" alt="FB"></a>
      <a href="#" class="social-icon"><img src="assets/img/x-icon.png" class="img-fluid" alt="X"></a>
      <a href="#" class="social-icon"><img src="assets/img/li-icon.png"  class="img-fluid"alt="LinkedIn"></a>
      <a href="#" class="social-icon"><img src="assets/img/yt-icon.png" class="img-fluid" alt="YouTube"></a>
    </div>

    <!-- Copyright -->
    <small>Copyrights © 2025, All rights Reserved</small>
  </div>
</footer>

<script>
  const ctaButton = document.querySelector('.cta-button');
  const navLinks = document.getElementById('nav-links');
  const header = document.querySelector('.custom-header');

  function moveCTA() {
    if (window.innerWidth < 992) {
      if (!navLinks.contains(ctaButton)) {
        navLinks.appendChild(ctaButton);
      }
    } else {
      if (!header.contains(ctaButton)) {
        header.appendChild(ctaButton);
      }
    }
  }

  // Run on load and on resize
  window.addEventListener('DOMContentLoaded', moveCTA);
  window.addEventListener('resize', moveCTA);

  // Menu toggle
  document.getElementById('menu-toggle').addEventListener('click', function () {
    navLinks.classList.toggle('active');
  });
</script>