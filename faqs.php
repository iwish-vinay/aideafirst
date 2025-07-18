<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FAQs</title>
  <link rel="icon" type="image/png" href="assets/img/favicon.png">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />


  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>

  <div id="pageLoader">
  <div class="spinner"></div>
</div>

  <!-- header -->
  <?php include('header.php'); ?>

  <div class="about-hero text-white d-flex 
  align-items-center justify-content-center">
  <h1>FAQs</h1>
</div>

  <section class="py-5">
  <div class="container">
    <div class="accordion" id="faqAccordion">

        <!-- Item 1 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        What does AIdeaFirst do?
        <span class="accordion-icon ms-auto"><i class="fas fa-times"></i></span>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
      data-bs-parent="#faqAccordion">
      <div class="accordion-body text-muted">
        AIdeaFirst is a technology studio that designs and develops AI-powered digital products. We help startups and organizations bring bold ideas to life through strategy, design, engineering, and intelligent automation.
      </div>
    </div>
  </div>

  <!-- Item 2 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Do you work with early-stage startups?
        <span class="accordion-icon ms-auto"><i class="fas fa-plus"></i></span>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
      data-bs-parent="#faqAccordion">
      <div class="accordion-body text-muted">
        Absolutely. We specialize in helping founders validate, prototype, and launch MVPs quickly. Whether you’re at idea stage or ready to scale, we support you every step of the way.
      </div>
    </div>
  </div>

  <!-- Item 3 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        What technologies do you use?
        <span class="accordion-icon ms-auto"><i class="fas fa-plus"></i></span>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
      data-bs-parent="#faqAccordion">
      <div class="accordion-body text-muted">
        We work with modern front-end frameworks (React, Next.js), back-end systems (Node.js, Python, Firebase), cloud platforms (AWS, GCP), and AI/ML models (OpenAI, LangChain, TensorFlow) based on project needs.
      </div>
    </div>
  </div>

  <!-- Item 4 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        How is your process different?
        <span class="accordion-icon ms-auto"><i class="fas fa-plus"></i></span>
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
      data-bs-parent="#faqAccordion">
      <div class="accordion-body text-muted">
        Our process is AI-first, fast, and collaborative. We combine strategic planning with rapid design sprints and agile development—so you get working products in weeks, not months.
      </div>
    </div>
  </div>

  <!-- Item 5 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Can you help us integrate AI into existing systems?
        <span class="accordion-icon ms-auto"><i class="fas fa-plus"></i></span>
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
      data-bs-parent="#faqAccordion">
      <div class="accordion-body text-muted">
        Yes. We assess your current infrastructure and recommend intelligent automation, AI models, or optimization strategies tailored to your operations.
      </div>
    </div>
  </div>

  <!-- Item 6 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        How do you price your services?
        <span class="accordion-icon ms-auto"><i class="fas fa-plus"></i></span>
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
      data-bs-parent="#faqAccordion">
      <div class="accordion-body text-muted">
        Pricing depends on the project scope, complexity, and timelines. We offer fixed-price packages for MVPs, and flexible retainers for long-term product support. Let’s talk and we’ll send you a custom quote.
      </div>
    </div>
  </div>

  <!-- Item 7 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
        Where are you located?
        <span class="accordion-icon ms-auto"><i class="fas fa-plus"></i></span>
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
      data-bs-parent="#faqAccordion">
      <div class="accordion-body text-muted">
        We’re proudly based in North Carolina, USA—but we work with clients globally across time zones.
      </div>
    </div>
  </div>

  <!-- Item 8 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingEight">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
        Do you offer post-launch support?
        <span class="accordion-icon ms-auto"><i class="fas fa-plus"></i></span>
      </button>
    </h2>
    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
      data-bs-parent="#faqAccordion">
      <div class="accordion-body text-muted">
        Yes. We offer ongoing support, product iteration, AI tuning, performance tracking, and version upgrades to keep your product competitive.
      </div>
    </div>
  </div>
      


      </div>

    </div>
  </div>
</section>


<!-- footer -->
  <?php include('footer.php'); ?>

  


<!-- Back to Top Button -->
<button id="backToTop" class="btn btn-danger rounded-circle shadow" title="Back to Top">
  ↑
</button>


<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Toggle Icon Script -->
<script>
  const accordion = document.getElementById('faqAccordion');
  accordion.addEventListener('shown.bs.collapse', (event) => {
    const button = event.target.previousElementSibling.querySelector('.accordion-button');
    const icon = button.querySelector('i');
    icon.classList.remove('fa-plus');
    icon.classList.add('fa-times');
  });

  accordion.addEventListener('hidden.bs.collapse', (event) => {
    const button = event.target.previousElementSibling.querySelector('.accordion-button');
    const icon = button.querySelector('i');
    icon.classList.remove('fa-times');
    icon.classList.add('fa-plus');
  });
</script>




<script>
  window.addEventListener("load", function () {
    const loader = document.getElementById("pageLoader");
    loader.style.opacity = "0";
    setTimeout(() => {
      loader.style.display = "none";
    }, 500);
  });
</script>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    once: true, // Animate only once on scroll
    duration: 800, // Animation duration
    offset: 120, // Offset to trigger animation
  });
</script>


<script>
  const backToTopBtn = document.getElementById("backToTop");

  // Show button on scroll
  window.onscroll = function () {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
      backToTopBtn.style.display = "block";
    } else {
      backToTopBtn.style.display = "none";
    }
  };

  // Scroll to top on click
  backToTopBtn.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });
</script>




 </body>
 </html>