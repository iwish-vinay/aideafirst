<style>
/* This style gives the sticky header a background so content doesn't show through on scroll. */
.header-bg {
    background-color: rgba(12, 12, 12, 0.85); /* Dark, semi-transparent background */
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px); /* For Safari browser support */
}
</style>
<header class="sticky-top header-bg">
  <div class="container">
    <div class="custom-header" >
      <!-- Logo & Brand -->
      <div class="brand">
        <a href="index.php" class="brand-icon">
          <img src="assets/img/logo-lite.png" alt="AIdeaFirst" class="img-width" />
        </a>
      </div>

      <!-- Navigation -->
      <nav class="d-flex">
        <a href="index.php#Services" class="nav-link">Services</a>
        <a href="index.php#Products" class="nav-link">Products</a>
        <a href="index.php#Process" class="nav-link">Process</a>
        <a href="about.php" class="nav-link">About</a>
        <a href="faqs.php" class="nav-link">FAQs</a>
        <a href="#" class="nav-link">Blog</a>
      </nav>

      <!-- CTA Button -->
      <div>
        <a href="index.php#Contact" class="btn btn-outline-light">Get In Touch</a>
      </div>
    </div>
  </div>
</header>