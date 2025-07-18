<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AIdeaFirst</title>
  <link rel="icon" type="image/png" href="assets/img/favicon.png">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>

  <div id="pageLoader">
  <div class="spinner"></div>
</div>

  <!-- header -->
  <?php include('header.php'); ?>

  <!-- hero section -->
  <div class="container hero-sec">
    <div class="row align-items-center">
      <!-- Text Column -->
      <div class="col-md-6">
        <h1>Transforming<br>Ideas Into Intelligent<br>Solutions</h1>
        <p>
          AIdeaFirst is a next-gen technology studio helping startups, businesses, and communities
          launch impactful AI-powered products—fast and beautifully.
        </p>
        <div>
          <a href="#" class="btn btn-red">Get Started</a>
          <a href="#" class="btn btn-gray">Book A Call</a>
        </div>
      </div>

      <!-- Image Column -->
      <div class="col-md-6 ai-img-bg">
        <img src="assets/img/AI_Ball.png" alt="AI Sphere" class="hero-image" />
      </div>
    </div>
  </div>

   <!-- FEATURE SEC -->
  <div class="container feature-sec">
    <div class="row">
        <div class="feature-card" data-aos="fade-up" data-aos-delay="0">
          <div class="feature-icon">
            <img src="assets/img/hero_icon1.png" alt="Digital Prodcuts" />
          </div>
          <div class="feature-title">END-TO-END<br>DIGITAL PRODUCTS</div>
        </div>
        <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
          <div class="feature-icon">
           <img src="assets/img/hero_icon2.png" alt="AI AI-INTEGRATED" />
          </div>
          <div class="feature-title">AI-INTEGRATED<br>WORKFLOWS</div>
        </div>
        <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
          <div class="feature-icon">
            <img src="assets/img/hero_icon3.png" alt="MVPs" />
          </div>
          <div class="feature-title">MVPs FOR<br>STARTUPS</div>
        </div>

        <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
          <div class="feature-icon">
            <img src="assets/img/hero_icon4.png" alt="Brand Identity" />
          </div>
          <div class="feature-title">BRAND IDENTITY<br>SYSTEMS</div>
        </div>

        <div class="feature-card" data-aos="fade-up" data-aos-delay="400">
          <div class="feature-icon">
            <img src="assets/img/hero_icon5.png" alt="communities" />
          </div>
          <div class="feature-title">IMPACTFUL AI TOOLS<br>FOR COMMUNITIES</div>
        </div>
    </div>
  </div>

  <div class="section-heading text-center" id="Services">
    <span class="subheading">OUR SERVICES</span>
    <h2 class="main-heading">Transform Your Business with AI</h2>
  </div>

  <div class="container services-sec">
  <div class="row g-4">
    <!-- Card 1 -->
    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
      <div class="service-card">
        <div class="service-content">
          <h5>Branding &<br>Identity Design</h5>
          <p>We transform abstract ideas into tangible identities that resonate</p>
        </div>
        <div class="service-image">
          <img src="assets/img/branding.png" alt="Branding Design" class="img-fluid">
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
      <div class="service-card">
        <div class="service-content">
          <h5>UI/UX &<br>Product Design</h5>
          <p>We bring user-first principles and design systems together to create intuitive, delightful experiences</p>
        </div>
        <div class="service-image">
          <img src="assets/img/ui-ux.png" alt="UI UX Design" class="img-fluid">
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
      <div class="service-card">
        <div class="service-content">
          <h5>Mobile & Web <br>App Development</h5>
          <p>From MVP to enterprise-grade platforms, we engineer robust digital products.</p>
        </div>
        <div class="service-image">
          <img src="assets/img/mvp.png" alt="MVPs Development" class="img-fluid">
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
      <div class="service-card">
        <div class="service-content">
          <h5>AI Agent <br>Development</h5>
          <p>We build intelligent, scalable AI agents tailored to your needs: OpenAI/GPT-based chatbots and copilots.</p>
        </div>
        <div class="service-image">
          <img src="assets/img/ai-agent.png" alt="ai agent" class="img-fluid">
        </div>
      </div>
    </div>
     

     <!-- Card 5 -->
    <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
      <div class="service-card">
        <div class="service-content">
          <h5>IT Consulting <br>& Managed Services</h5>
          <p>We build, secure, and manage scalable systems across AWS, Azure, GCP, and beyond.</p>
        </div>
        <div class="service-image">
          <img src="assets/img/it-consulting.png" alt="it-consulting" class="img-fluid">
        </div>
      </div>
    </div>

  </div>
</div>


<div class="product-sec" id="Products">
     <div class="section-heading text-center">
      <span class="subheading">Our Products</span>
      <h2 class="main-heading">Simple & Efficient Products</h2>
    </div>

    <div class="container">

    <!-- Aldea Launch Toolkit -->
    <div class="row align-items-center product-card">
      <!-- Image Column -->
      <div class="col-md-6 order-1 order-md-2  ps-md-5" data-aos="fade-up" data-aos-delay="500">
        <img src="assets/img/ai-launch-card.png" alt="Aldea Launch Toolkit" class="img-fluid">
      </div>
      <!-- Content Column -->
      <div class="col-md-6 order-2 order-md-1" data-aos="fade-up" data-aos-delay="500">
        <h4><img src="assets/img/launch-icon.png" alt="AI Launch" class="prd-icon">Aldea Launch Toolkit</h4>
        <p>
          Everything you need to bring your startup vision to life. This product includes: - Strategic brand consulting  Logo, brand assets, and voice - High-fidelity UI/UX design - MVP application (web or mobile) - Custom AI agent prototype
        </p>
        <b>INCLUDES</b>          
        <ul>
          <li>Strategic Brand Setup</li>
          <li>Full UI/UX Design</li>
          <li>MVP App (Web/Mobile)</li>
          <li>AI Agent Prototype</li>
        </ul>
      </div>
    </div>

    <!-- Aldea Agents -->
    <div class="row align-items-center product-card">
      <!-- Image Column -->
      <div class="col-md-6 order-1" data-aos="fade-up" data-aos-delay="500">
        <img src="assets/img/ai-agent-card.png" alt="Aldea Agents" class="img-fluid">
      </div>
      <!-- Content Column -->
      <div class="col-md-6 order-2  ps-md-5" data-aos="fade-up" data-aos-delay="500">
        <h4><img src="assets/img/ai-agent-icon.png" alt="AI Agent" class="prd-icon">Aldea Agents</h4>
        <p >
          Deploy fully customized AI agents built for your specific workflows: - Customer support AI that understands your business - Smart lead gen bots integrated with your CRM - Personalized scheduling or FAQ bots for websites - Multilingual virtual assistants for global reach
        </p>
        <b>INCLUDES</b>
          <ul >
          <li>AI Support Bots</li>
          <li>CRM-Integrated Lead Gen Agents</li>
          <li>AI Scheduling / FAQ Tools</li>
          <li>Multilingual Virtual Assistants</li>
        </ul>
      </div>
    </div>


     <!-- LearnWithAI -->
    <div class="row align-items-center product-card">
      <!-- Image Column -->
      <div class="col-md-6 order-1 order-md-2  ps-md-5" data-aos="fade-up" data-aos-delay="500">
        <img src="assets/img/ai-learn-card.png" alt="LearnWithAI" class="img-fluid">
      </div>
      <!-- Content Column -->
      <div class="col-md-6 order-2 order-md-1" data-aos="fade-up" data-aos-delay="500">
        <h4><img src="assets/img/learn-ai-icon.png" alt="learn-ai-icon" class="prd-icon">LearnWithAI</h4>
        <p>
           A platform designed to empower students with personalized academic support and guidance: - AI-driven career advice based on aptitude and interest - Adaptive SAT/ACT prep tools - Knowledge testing and revision planning
        </p>
        <b>INCLUDES</b>
          <ul>
          <li>AI Career Guidance</li>
          <li>Knowledge Testing & Study Planning</li>
          <li>Adaptive Test Prep</li>
        </ul>
      </div>
    </div>

    <!--  AIdeaForms -->
    <div class="row align-items-center product-card" >
      <!-- Image Column -->
      <div class="col-md-6 order-1" data-aos="fade-up" data-aos-delay="500">
        <img src="assets/img/ai-form-card.png" alt="AIdeaForms" class="img-fluid">
      </div>
      <!-- Content Column -->
      <div class="col-md-6 order-2  ps-md-5" data-aos="fade-up" data-aos-delay="500">
        <h4><img src="assets/img/ai-form-icon.png" alt="AIdeaForms" class="prd-icon"> AIdeaForms</h4>
        <p >
          Elevate form experiences with smart automation: - AI-assisted intake forms for clients, patients, or leads  Dynamic form responses based on user input - Analytics dashboard to track trends and insights - Seamless integration with backend systems
        </p>
        <b>INCLUDES</b>
          <ul >
          <li>Client & Patient Intake Forms</li>
          <li>Integrated Analytics Dashboards</li>
          <li>Dynamic Response Forms</li>
        </ul>
      </div>
    </div>

</div>
  
</div>



<div class="section-heading text-center" id="Process">
      <span class="subheading">Our Process</span>
      <h2 class="main-heading">Structured for Speed,<br> Powered by AI</h2>
</div>

<div class="container process-sec">
  <div class="row g-4">
    
    <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
    <div class="process-box">
      <div class="d-flex align-items-start">
        <div class="me-3">
          <span class="process-number">1</span>
        </div>
        <div>
          <h5 class="process-title">Discover</h5>
          <p class="process-description">
            We understand your business goals, user needs, and define a clear AI-driven direction.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
    <div class="process-box">
      <div class="d-flex align-items-start">
        <div class="me-3">
          <span class="process-number">2</span>
        </div>
        <div>
          <h5 class="process-title">Design</h5>
          <p class="process-description">
            We translate ideas into intuitive interfaces, smart workflows, and scalable system architecture.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
    <div class="process-box">
      <div class="d-flex align-items-start">
        <div class="me-3">
          <span class="process-number">3</span>
        </div>
        <div>
          <h5 class="process-title">Develop</h5>
          <p class="process-description">
            Using modern stacks & AI models, we build powerful apps, websites, and automation systems.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
    <div class="process-box">
      <div class="d-flex align-items-start">
        <div class="me-3">
          <span class="process-number">4</span>
        </div>
        <div>
          <h5 class="process-title">Deploy</h5>
          <p class="process-description">
We launch, test, and continuously improve your product with data-driven enhancements.          </p>
        </div>
      </div>
    </div>
  </div>

  </div>
</div>



<div class="section-heading text-center">
      <span class="subheading">Benefits</span>
      <h2 class="main-heading">What We Offer</h2>
</div>

<!-- Benefits SEC -->
  <div class="container benefits-sec">
    <div class="row">
        <div class="benefit-card" data-aos="fade-up" data-aos-delay="0">
          <div class="benefit-icon">
            <img src="assets/img/ai-first-icon.png" alt="Digital Prodcuts" />
          </div>
          <div class="benefit-title">AI-First <br>Thinking</div>
          <div class="benefit-desc">We design with intelligence and scale in mind.</div>
        </div>
        <div class="benefit-card" data-aos="fade-up" data-aos-delay="100">
          <div class="benefit-icon">
           <img src="assets/img/design-led-icon.png" alt="AI AI-INTEGRATED" />
          </div>
          <div class="benefit-title">Design-Led<br>Execution</div>
          <div class="benefit-desc"> We design with intelligence and scale in mind.</div>

        </div>
        <div class="benefit-card" data-aos="fade-up" data-aos-delay="200">
          <div class="benefit-icon">
            <img src="assets/img/speed-icon.png" alt="MVPs" />
          </div>
          <div class="benefit-title">Speed Without<br>Compromise</div>
          <div class="benefit-desc">Agile development that doesn't cut corners</div>
        </div>

        <div class="benefit-card" data-aos="fade-up" data-aos-delay="300">
          <div class="benefit-icon">
            <img src="assets/img/scaleable-icon.png" alt="Brand Identity" />
          </div>
          <div class="benefit-title">Scalable<br>Architecture</div>
          <div class="benefit-desc">Solutions that grow with your vision.</div>
        </div>

        <div class="benefit-card" data-aos="fade-up" data-aos-delay="400">
          <div class="benefit-icon">
            <img src="assets/img/relationship-icon.png" alt="communities" />
          </div>
          <div class="benefit-title">Transparent<br>Partnership</div>
          <div class="benefit-desc">Collaborative process, clear communication, and shared success.</div>
        </div>
    </div>
  </div>

  <div class="contact-sec" id="Contact">
     <div class="section-heading text-center">
      <span class="subheading">Contact</span>
      <h2 class="main-heading">Reach out to us</h2>
  </div>

    <div class="container contact-wrapper" >
  <div class="row g-4">
    <!-- Contact Info -->
    <div class="col-md-4">
      <div class="contact-info ">
        <div class="icon-location">
          <img src="assets/img/location.png" alt="location">
        </div>
        <h6>Corporate Office 1:</h6>
        <p>3007 Mill Gate Ln<br>Cary, North Carolina, USA</p>
        <a href="mailto:hello@aideafirst.com">hello@aideafirst.com</a>
        <br>
        <h6>Corporate Office 2:</h6>
        <p>2612 Overlook Ridge Street, Pineville,<br>North Carolina, 28134 USA</p>
        <a href="mailto:support@aideafirst.com">support@aideafirst.com</a>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="col-md-8">
      <div class="contact-card">
        <form>
          <div class="mb-4">
            <input type="text" class="form-control" placeholder="Name" required />
          </div>
          <div class="mb-4">
            <input type="email" class="form-control" placeholder="Email" required />
          </div>
          <div class="mb-4">
            <input type="tel" class="form-control" placeholder="Phone No." required />
          </div>
          <div class="mb-4">
            <textarea class="form-control" rows="3" placeholder="Message" required></textarea>
          </div>
          <div>
            <button type="submit" class="btn btn-submit">SUBMIT</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

  </div>

<!-- footer -->
  <?php include('footer.php'); ?>

  


<!-- Back to Top Button -->
<button id="backToTop" class="btn btn-danger rounded-circle shadow" title="Back to Top">
  ↑
</button>




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