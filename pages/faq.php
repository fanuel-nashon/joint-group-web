<?php
$seo_title       = 'FAQs | Joint Group – Common Questions Answered';
$seo_description = 'Find answers to frequently asked questions about Joint Group\'s services, investment facilitation, consultancy engagements, and how to get started.';
$seo_canonical   = 'https://jointgroup.co.tz/pages/faq.php';
$seo_jsonld_extra = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What does Joint Group do?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Joint Group is a Tanzania-based business growth and investment facilitation firm. We help startups, SMEs, and established companies scale through strategic consultancy, marketing solutions, professional training, and international investment partnerships."
      }
    },
    {
      "@type": "Question",
      "name": "Who are your typical clients?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We work with early-stage startups, SMEs looking to expand market share, and large corporations pursuing strategic partnerships operating in or targeting Tanzania and East Africa."
      }
    },
    {
      "@type": "Question",
      "name": "How do I get started with Joint Group?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Reach out through our Contact page or email info@jointgroup.co.tz. A consultant will schedule a free discovery call to understand your goals and recommend the right service package."
      }
    },
    {
      "@type": "Question",
      "name": "Do you connect businesses with international investors?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Investment facilitation is one of our core services. We maintain a network of local and international investors and help prepare your business for investment readiness."
      }
    },
    {
      "@type": "Question",
      "name": "Is my business information kept confidential?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We sign Non-Disclosure Agreements (NDAs) before any sensitive business information is exchanged and never share client data with third parties without explicit consent."
      }
    }
  ]
}
</script>';
require_once __DIR__ . '/../includes/header.php';
?>

    <!-- Main -->
    <main>
      <!-- Page Banner -->
      <div class="page-banner overlay">
        <picture class="media media-bg">
          <source media="(max-width: 575px)" srcset="../assets/img/banner/page-banner-575.jpg">
          <source media="(max-width: 991px)" srcset="../assets/img/banner/page-banner-991.jpg">
          <img src="../assets/img/banner/page-banner.jpg" width="1920" height="520" loading="eager" alt="Page Banner Image">
        </picture>
        <div class="page-banner-content">
          <div class="container text-center">
            <h1 class="heading text-80 fw-700" data-aos="fade-up">FAQs</h1>
            <ul class="breadcrumb list-unstyled" data-aos="fade-up" data-aos-delay="100">
              <li>
                <a href="/index.php" class="text text-18" aria-label="Home Page">Home</a>
              </li>
              <li>
                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.08929 5.40903C7.24552 5.5653 7.33328 5.77723 7.33328 5.9982C7.33328 6.21917 7.24552 6.43109 7.08929 6.58736L2.37512 11.3015C2.29825 11.3811 2.2063 11.4446 2.10463 11.4883C2.00296 11.532 1.89361 11.5549 1.78296 11.5559C1.67231 11.5569 1.56258 11.5358 1.46016 11.4939C1.35775 11.452 1.2647 11.3901 1.18646 11.3119C1.10822 11.2336 1.04634 11.1406 1.00444 11.0382C0.962537 10.9357 0.941453 10.826 0.942414 10.7154C0.943376 10.6047 0.966364 10.4954 1.01004 10.3937C1.05371 10.292 1.1172 10.2001 1.19679 10.1232L5.32179 5.9982L1.19679 1.8732C1.04499 1.71603 0.960996 1.50553 0.962894 1.28703C0.964793 1.06853 1.05243 0.859522 1.20694 0.705015C1.36145 0.550508 1.57046 0.462868 1.78896 0.460969C2.00745 0.45907 2.21795 0.543066 2.37512 0.694864L7.08929 5.40903Z" fill="currentColor"/>
                </svg>
              </li>
              <li>
                <a role="link" aria-disabled="true" class="text text-18 active">FAQs</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ Content -->
      <div class="section-padding" style="background-color: rgba(245,247,250,1);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-12">

              <div class="section-headings text-center mb-5" data-aos="fade-up">
                <div class="subheading text-20 subheading-bg justify-content-center">
                  <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                    <g clip-path="url(#faq-clip)">
                      <path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="currentColor"/>
                    </g>
                    <defs><clipPath id="faq-clip"><rect width="14" height="14" fill="currentColor"/></clipPath></defs>
                  </svg>
                  <span>Common Questions</span>
                  <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                    <g clip-path="url(#faq-clip2)">
                      <path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="currentColor"/>
                    </g>
                    <defs><clipPath id="faq-clip2"><rect width="14" height="14" fill="currentColor"/></clipPath></defs>
                  </svg>
                </div>
                <h2 class="heading text-50">Frequently Asked Questions</h2>
                <p class="text text-18">Everything you need to know about Joint Group and our services.</p>
              </div>

              <!-- Accordion -->
              <div class="accordion" id="faqAccordion" data-aos="fade-up">

                <!-- Q1 -->
                <div class="accordion-item border-0 mb-3 radius18" style="background:#fff; box-shadow:0 2px 12px rgba(28,37,57,.07);">
                  <h2 class="accordion-header" id="faq1">
                    <button class="accordion-button fw-600 text-18" type="button" data-bs-toggle="collapse" data-bs-target="#ans1" aria-expanded="true" aria-controls="ans1" style="border-radius:18px; background:#fff; color:var(--color-foreground);">
                      What does Joint Group do?
                    </button>
                  </h2>
                  <div id="ans1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text text-16">
                      Joint Group is a Tanzania-based business growth and investment facilitation firm. We help startups, SMEs, and established companies scale through strategic consultancy, marketing solutions, professional training, and international investment partnerships.
                    </div>
                  </div>
                </div>

                <!-- Q2 -->
                <div class="accordion-item border-0 mb-3 radius18" style="background:#fff; box-shadow:0 2px 12px rgba(28,37,57,.07);">
                  <h2 class="accordion-header" id="faq2">
                    <button class="accordion-button collapsed fw-600 text-18" type="button" data-bs-toggle="collapse" data-bs-target="#ans2" aria-expanded="false" aria-controls="ans2" style="border-radius:18px; background:#fff; color:var(--color-foreground);">
                      Who are your typical clients?
                    </button>
                  </h2>
                  <div id="ans2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text text-16">
                      We work with a wide range of clients — from early-stage startups seeking their first investment round, to SMEs looking to expand market share, to large corporations pursuing strategic partnerships. If your business operates in or targets Tanzania and East Africa, we can add value.
                    </div>
                  </div>
                </div>

                <!-- Q3 -->
                <div class="accordion-item border-0 mb-3 radius18" style="background:#fff; box-shadow:0 2px 12px rgba(28,37,57,.07);">
                  <h2 class="accordion-header" id="faq3">
                    <button class="accordion-button collapsed fw-600 text-18" type="button" data-bs-toggle="collapse" data-bs-target="#ans3" aria-expanded="false" aria-controls="ans3" style="border-radius:18px; background:#fff; color:var(--color-foreground);">
                      How do I get started with Joint Group?
                    </button>
                  </h2>
                  <div id="ans3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text text-16">
                      Simply reach out through our <a href="/pages/contact.php" style="color:rgba(237,90,40,1);">Contact page</a> or email us at <a href="mailto:info@jointgroup.co.tz" style="color:rgba(237,90,40,1);">info@jointgroup.co.tz</a>. One of our consultants will schedule a free discovery call to understand your goals and recommend the right service package.
                    </div>
                  </div>
                </div>

                <!-- Q4 -->
                <div class="accordion-item border-0 mb-3 radius18" style="background:#fff; box-shadow:0 2px 12px rgba(28,37,57,.07);">
                  <h2 class="accordion-header" id="faq4">
                    <button class="accordion-button collapsed fw-600 text-18" type="button" data-bs-toggle="collapse" data-bs-target="#ans4" aria-expanded="false" aria-controls="ans4" style="border-radius:18px; background:#fff; color:var(--color-foreground);">
                      What industries do you specialise in?
                    </button>
                  </h2>
                  <div id="ans4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text text-16">
                      We have experience across multiple sectors including agriculture, technology, manufacturing, real estate, hospitality, and retail. Our multi-industry expertise allows us to tailor strategies that are relevant to your specific market context.
                    </div>
                  </div>
                </div>

                <!-- Q5 -->
                <div class="accordion-item border-0 mb-3 radius18" style="background:#fff; box-shadow:0 2px 12px rgba(28,37,57,.07);">
                  <h2 class="accordion-header" id="faq5">
                    <button class="accordion-button collapsed fw-600 text-18" type="button" data-bs-toggle="collapse" data-bs-target="#ans5" aria-expanded="false" aria-controls="ans5" style="border-radius:18px; background:#fff; color:var(--color-foreground);">
                      Do you connect businesses with international investors?
                    </button>
                  </h2>
                  <div id="ans5" class="accordion-collapse collapse" aria-labelledby="faq5" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text text-16">
                      Yes. Investment facilitation is one of our core services. We maintain a network of local and international investors actively looking for opportunities in Tanzania and the East African region. We help prepare your business for investment readiness and broker introductions.
                    </div>
                  </div>
                </div>

                <!-- Q6 -->
                <div class="accordion-item border-0 mb-3 radius18" style="background:#fff; box-shadow:0 2px 12px rgba(28,37,57,.07);">
                  <h2 class="accordion-header" id="faq6">
                    <button class="accordion-button collapsed fw-600 text-18" type="button" data-bs-toggle="collapse" data-bs-target="#ans6" aria-expanded="false" aria-controls="ans6" style="border-radius:18px; background:#fff; color:var(--color-foreground);">
                      How long does a typical engagement last?
                    </button>
                  </h2>
                  <div id="ans6" class="accordion-collapse collapse" aria-labelledby="faq6" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text text-16">
                      Engagement length varies by service. A one-time strategic review may take 2–4 weeks, while ongoing growth consultancy or marketing retainers typically run 3–12 months. We align timelines with your business objectives and report progress at every stage.
                    </div>
                  </div>
                </div>

                <!-- Q7 -->
                <div class="accordion-item border-0 mb-3 radius18" style="background:#fff; box-shadow:0 2px 12px rgba(28,37,57,.07);">
                  <h2 class="accordion-header" id="faq7">
                    <button class="accordion-button collapsed fw-600 text-18" type="button" data-bs-toggle="collapse" data-bs-target="#ans7" aria-expanded="false" aria-controls="ans7" style="border-radius:18px; background:#fff; color:var(--color-foreground);">
                      Is my business information kept confidential?
                    </button>
                  </h2>
                  <div id="ans7" class="accordion-collapse collapse" aria-labelledby="faq7" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text text-16">
                      Absolutely. All client information shared with Joint Group is treated with the strictest confidentiality. We sign Non-Disclosure Agreements (NDAs) before any sensitive business information is exchanged, and we never share client data with third parties without explicit consent.
                    </div>
                  </div>
                </div>

                <!-- Q8 -->
                <div class="accordion-item border-0 mb-3 radius18" style="background:#fff; box-shadow:0 2px 12px rgba(28,37,57,.07);">
                  <h2 class="accordion-header" id="faq8">
                    <button class="accordion-button collapsed fw-600 text-18" type="button" data-bs-toggle="collapse" data-bs-target="#ans8" aria-expanded="false" aria-controls="ans8" style="border-radius:18px; background:#fff; color:var(--color-foreground);">
                      How can I contact Joint Group?
                    </button>
                  </h2>
                  <div id="ans8" class="accordion-collapse collapse" aria-labelledby="faq8" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text text-16">
                      You can reach us by email at <a href="mailto:info@jointgroup.co.tz" style="color:rgba(237,90,40,1);">info@jointgroup.co.tz</a>, by phone at <a href="tel:+255767280884" style="color:rgba(237,90,40,1);">+255 767 280 884</a>, or by filling out the form on our <a href="/pages/contact.php" style="color:rgba(237,90,40,1);">Contact page</a>. We respond within one business day.
                    </div>
                  </div>
                </div>

              </div><!-- /accordion -->

              <div class="text-center mt-5" data-aos="fade-up">
                <p class="text text-18">Still have questions?</p>
                <a href="/pages/contact.php" class="button button--primary" aria-label="Contact Us">
                  Get in Touch
                  <span class="svg-wrapper">
                    <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"/>
                    </svg>
                  </span>
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>

    </main>

    <!-- Footer -->
    <footer>
      <?php include __DIR__ . '/../includes/footer.php'; ?>
    </footer>

    <!-- Modal and Drawer Overlay -->
    <drawer-opener id="drawer-overlay"></drawer-opener>

    <!-- Scroll to Top Button -->
    <scroll-top>
      <div class="scroll-to-top">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5"/>
        </svg>
      </div>
    </scroll-top>

    <!-- all js -->
    <script src="../assets/js/vendor.js" defer></script>
    <script src="../assets/js/main.js" defer></script>
  </body>
</html>
