<?php
$seo_title       = $seo_title       ?? 'Joint Group | Business Growth & Investment Facilitation';
$seo_description = $seo_description ?? 'Joint Group is a business growth, marketing, and investment facilitation firm helping startups, SMEs, and industries in Tanzania through strategic consultancy, marketing solutions, and international investment partnerships.';
$seo_canonical   = $seo_canonical   ?? 'https://jointgroup.co.tz/';
$seo_og_type     = $seo_og_type     ?? 'website';
$seo_robots      = $seo_robots      ?? 'index, follow';
$seo_og_image    = $seo_og_image    ?? 'https://jointgroup.co.tz/assets/img/og-image.jpg';
?>
<!doctype html>
<html lang="en" class="no-js">
  <head>
    <title><?= htmlspecialchars($seo_title) ?></title>
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="view-transition" content="same-origin">
    <meta name="theme-color" content="#ED5A28">
    <meta name="robots" content="<?= htmlspecialchars($seo_robots) ?>">
    <!-- Primary Meta -->
    <meta name="description" content="<?= htmlspecialchars($seo_description) ?>">
    <link rel="canonical" href="<?= htmlspecialchars($seo_canonical) ?>">
    <!-- Open Graph -->
    <meta property="og:site_name" content="Joint Group">
    <meta property="og:type" content="<?= htmlspecialchars($seo_og_type) ?>">
    <meta property="og:locale" content="en_TZ">
    <meta property="og:url" content="<?= htmlspecialchars($seo_canonical) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($seo_title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($seo_description) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($seo_og_image) ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Joint Group – Business Growth & Investment Facilitation in Tanzania">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($seo_title) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($seo_description) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($seo_og_image) ?>">
    <meta name="twitter:image:alt" content="Joint Group – Business Growth & Investment Facilitation in Tanzania">
    <!-- JSON-LD: Organization -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Joint Group",
      "url": "https://jointgroup.co.tz",
      "logo": "https://jointgroup.co.tz/assets/img/logo.png",
      "description": "Business growth and investment facilitation firm helping startups, SMEs, and industries in Tanzania.",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Dar es Salaam",
        "addressCountry": "TZ"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+255-767-280-884",
        "contactType": "customer service",
        "email": "info@jointgroup.co.tz",
        "availableLanguage": ["English", "Swahili"]
      },
      "sameAs": []
    }
    </script>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- all css -->
    <link rel="stylesheet" href="../assets/css/vendor.css">
    <style>
      :root {
        /* Typography */
        --font-body--family: "Inter", sans-serif;
        --font-body--style: normal;
        --font-body--weight: 400;
        --font-heading--family: "Poppins", sans-serif;
        --font-heading--style: normal;
        --font-heading--weight: 600;
        --font-button--family: "Poppins", sans-serif;
        --font-button--style: normal;
        --font-button--weight: 600;
        /* h1-h6 */
        --font-h1--size: 60px;
        --font-h2--size: 48px;
        --font-h3--size: 36px;
        --font-h4--size: 24px;
        --font-h5--size: 20px;
        --font-h6--size: 16px;
        /* header nav */
        --font-nav-main: 16px;
        /* Colors */
        --color-background: rgba(255, 255, 255, 1);
        --color-foreground: rgba(28, 37, 57, 1);
        --color-foreground-heading: rgba(28, 37, 57, 1);
        --color-foreground-subheading: rgba(93, 102, 111, 1);
        --color-background-subheading: rgba(255, 255, 255, 0.1);
        --color-border-subheading-bg: rgba(32, 40, 45, 0.1);
        --color-primary: rgba(28, 37, 57, 1);
        --color-primary-background: rgba(28, 37, 57, 1);
        --color-primary-hover: rgba(28, 37, 57, 1);
        --color-primary-background-hover: rgba(28, 37, 57, 1);
        --color-border: rgba(255, 255, 255, 0.3);
        --color-border-hover: rgba(93, 102, 111, 0.5);
        --color-shadow: rgba(0, 0, 0, 1);
        --color-overlay: rgba(28, 37, 57, 0.6);
        /* Brand Accent Colors */
        --color-orange: rgba(237, 90, 40, 1);
        --color-orange-hover: rgba(200, 65, 20, 1);
        --color-light-grey: rgba(245, 247, 250, 1);
        /* Buttons */
        --font-button-size: 16px;
        --font-button-size-mobile: 16px;
        --style-button-height: 56px;
        --style-button-height-mobile: 48px;
        --style-button-slim-height: 52px;
        --style-button-slim-height-mobile: 40px;
        --style-cta-underline-offset: 5px;
        --style-cta-underline-thickness: 1px;
        /* Colors - Primary Button (Orange) */
        --color-primary-button-text: rgba(255, 255, 255, 1);
        --color-primary-button-background: rgba(237, 90, 40, 1);
        --color-primary-button-border: rgba(237, 90, 40, 1);
        --color-primary-button-icon: rgba(237, 90, 40, 1);
        --color-primary-button-icon-background: rgba(255, 255, 255, 1);
        --color-primary-button-hover-text: rgba(255, 255, 255, 1);
        --color-primary-button-hover-background: rgba(200, 65, 20, 1);
        --color-primary-button-hover-border: rgba(200, 65, 20, 1);
        --color-primary-button-hover-icon: rgba(200, 65, 20, 1);
        --color-primary-button-hover-icon-background: rgba(255, 255, 255, 1);
        /* Colors - Secondary Button (Orange, inverts on hover) */
        --color-secondary-button-text: rgba(255, 255, 255, 1);
        --color-secondary-button-background: rgba(237, 90, 40, 1);
        --color-secondary-button-border: rgba(237, 90, 40, 1);
        --color-secondary-button-icon: rgba(237, 90, 40, 1);
        --color-secondary-button-icon-background: rgba(255, 255, 255, 1);
        --color-secondary-button-hover-text: rgba(237, 90, 40, 1);
        --color-secondary-button-hover-background: rgba(255, 255, 255, 1);
        --color-secondary-button-hover-border: rgba(237, 90, 40, 1);
        --color-secondary-button-hover-icon: rgba(255, 255, 255, 1);
        --color-secondary-button-hover-icon-background: rgba(237, 90, 40, 1);
        /* Colors - Input */
        --color-input-background: rgba(255, 255, 255, 1);
        --color-input-text: rgba(93, 102, 111, 1);
        --color-input-border: rgba(93, 102, 111, 0.2);
        --color-input-hover-background: rgba(255, 255, 255, 1);
        --color-input-hover-text: rgba(93, 102, 111, 1);
        --color-input-hover-border: rgba(93, 102, 111, 0.2);
        /* Borders */
        --style-border-width-buttons-primary: 1px;
        --style-border-width-buttons-secondary: 1px;
        --style-border-radius-buttons-primary: 40px;
        --style-border-radius-buttons-secondary: 40px;
        --style-border-width-inputs: 1px;
        --style-border-radius-inputs: 8px;
        --style-border-width: 1px;
        /* Focus */
        --focus-outline-width: 1px;
        --focus-outline-offset: 3px;
        /* Pagination */
        --style-pagination-border-width: 1px;
        --pagination-item-foreground: rgba(28, 37, 57, 1);
        --pagination-item-background: rgba(242, 242, 242, 1);
        --pagination-item-border: rgba(242, 242, 242, 1);
        --pagination-item-active-foreground: rgba(255, 255, 255, 1);
        --pagination-item-active-background: rgba(237, 90, 40, 1);
        --pagination-item-active-border: rgba(237, 90, 40, 1);
        /* Swiper */
        --swiper-navigation-size: 16px;
        --swiper-navigation-color: rgba(255, 255, 255, 1);
        --swiper-navigation-background-color: transparent;
        --swiper-navigation-hover-color: rgba(255, 255, 255, 1);
        --swiper-navigation-hover-background-color: rgba(255, 255, 255, 0.15);
        --swiper-pagination-bullet-inactive-color: rgba(242, 242, 242);
        --swiper-pagination-color: rgba(28, 37, 57, 1);
        --swiper-pagination-bullet-inactive-opacity: 1;
      }

      @media (max-width: 767px) {
        :root {
          --font-h1--size: 48px;
          --font-h2--size: 40px;
          --font-h3--size: 28px;
          --font-h4--size: 20px;
          --font-h5--size: 18px;
        }
      }
    </style>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/theme-overrides.css">
    <?php if (!empty($seo_jsonld_extra)) echo $seo_jsonld_extra; ?>
  </head>
  <body>
    <!-- Header 1 -->
    <sticky-header data-sticky-type="always">
      <header class="header-1 header-floating">
        <div class="container-fluid">
          <div class="header-grid">
            <a class="header-logo" href="/" aria-label="Joint Group">
              <img src="../assets/img/logo/logo.png" alt="Joint Group Logo" width="189" height="32">
            </a>
            <drawer-menu>
              <nav class="header-nav drawer-menu">
                <div class="d-lg-none header-nav-headings">
                  <a class="header-logo" href="/" aria-label="Joint Group">
                    <img src="../assets/img/logo.png" alt="Joint Group Logo" width="189" height="32" loading="lazy">
                  </a>
                  <!-- <drawer-opener class="svg-wrapper menu-close" data-drawer=".drawer-menu">
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z" fill="currentColor" />
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z" fill="currentColor" />
                    </svg>
                  </drawer-opener> -->
                </div>
                <ul class="header-menu list-unstyled">
                  <li class="nav-item">
                    <a class="menu-link menu-link-main" href="/"> Home </a>
                  </li>
                  <li class="nav-item">
                    <a class="menu-link menu-link-main" href="/pages/about"> About Us </a>
                  </li>
                  <li class="nav-item nav-item-static">
                    <a class="menu-link menu-link-main menu-accrodion" href="/pages/services"> Services <svg width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 5L0 0H10L5 5Z" fill="currentColor" />
                      </svg>
                    </a>
                    <div class="header-megamenu header-submenu menu-absolute submenu-color">
                      <ul class="list-unstyled">
                        <li class="nav-item">
                          <a class="menu-link heading fw-300" href="#"> WHY CONSULO </a>
                          <ul class="reset-submenu list-unstyled submenu-color">
                            <li class="nav-item">
                              <a class="menu-link" href="/pages/services">
                                <div class="heading text-20 fw-600"> Become a Partner </div>
                                <div class="text text-14"> Links customers with trusted Partners who help them realize greater value—faster—through Joint Group. </div>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="menu-link" href="/pages/why-choose-us">
                                <div class="heading text-20 fw-600"> Product Development </div>
                                <div class="text text-14"> Speed up innovation to enable quicker, effective team-driven product launches. </div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a class="menu-link heading fw-300" href="#"> FEATURED CASE STUDY </a>
                          <ul class="reset-submenu list-unstyled submenu-color">
                            <li class="nav-item">
                              <a class="menu-link megamenu-image-wrap" href="/pages/why-choose-us">
                                <picture>
                                  <source media="(max-width: 575px)" srcset="../assets/img/menu/575.jpg">
                                  <img src="../assets/img/menu/1.jpg" width="1000" height="668" loading="lazy" alt="Hero Image">
                                </picture>
                                <div class="content">
                                  <div class="heading text-20 fw-600">
                                    <div class="heading text-20 fw-600"> Investment Facilitation </div>
                                    <div class="text text-14"> Connecting investment-ready Tanzanian businesses with local and international investors. </div>
                                  </div>
                                  <div class="button button--primary">
                                    <span class="svg-wrapper">
                                      <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"></path>
                                      </svg>
                                    </span>
                                  </div>
                                </div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-item megamenu-links">
                          <a class="menu-link text-14 fw-300" href="/pages/contact">
                            <svg class="icon-18" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22Z" stroke="currentColor" stroke-width="1.5" />
                              <path opacity="0.5" d="M8 10.5H16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                              <path opacity="0.5" d="M8 14H13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            </svg> Contact Sales </a>
                          <a class="menu-link text-14 fw-300" href="/pages/why-choose-us">
                            <svg class="icon-18" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                              <path d="M15.4137 10.941C16.1954 11.4026 16.1954 12.5974 15.4137 13.059L10.6935 15.8458C9.93371 16.2944 9 15.7105 9 14.7868L9 9.21316C9 8.28947 9.93371 7.70561 10.6935 8.15419L15.4137 10.941Z" stroke="currentColor" stroke-width="1.5" />
                            </svg> Watch Demo </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="menu-link menu-link-main" href="/pages/contact"> Contact </a>
                  </li>
                </ul>
              </nav>
            </drawer-menu>
            <div class="header-actions d-flex align-items-center">
              <!-- <drawer-opener class="header-search search-open svg-wrapper" data-drawer=".modal-search">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M21.7104 20.2875L18.0004 16.6075C19.4405 14.8119 20.1379 12.5328 19.9492 10.2388C19.7605 7.94476 18.7001 5.81025 16.9859 4.27411C15.2718 2.73797 13.0342 1.91697 10.7333 1.97993C8.43243 2.04289 6.24311 2.98502 4.61553 4.6126C2.98795 6.24018 2.04582 8.4295 1.98286 10.7304C1.9199 13.0313 2.7409 15.2688 4.27704 16.983C5.81318 18.6971 7.94769 19.7576 10.2417 19.9463C12.5357 20.135 14.8148 19.4376 16.6104 17.9975L20.2904 21.6775C20.3834 21.7712 20.494 21.8456 20.6158 21.8964C20.7377 21.9471 20.8684 21.9733 21.0004 21.9733C21.1324 21.9733 21.2631 21.9471 21.385 21.8964C21.5068 21.8456 21.6174 21.7712 21.7104 21.6775C21.8906 21.491 21.9914 21.2418 21.9914 20.9825C21.9914 20.7231 21.8906 20.4739 21.7104 20.2875ZM11.0004 17.9975C9.61592 17.9975 8.26255 17.5869 7.1114 16.8178C5.96026 16.0486 5.06305 14.9553 4.53324 13.6762C4.00342 12.3972 3.8648 10.9897 4.1349 9.63183C4.40499 8.27396 5.07168 7.02668 6.05065 6.04772C7.02961 5.06875 8.27689 4.40206 9.63476 4.13197C10.9926 3.86187 12.4001 4.00049 13.6792 4.53031C14.9583 5.06012 16.0515 5.95733 16.8207 7.10847C17.5899 8.25962 18.0004 9.61299 18.0004 10.9975C18.0004 12.854 17.2629 14.6345 15.9501 15.9472C14.6374 17.26 12.8569 17.9975 11.0004 17.9975Z" fill="currentColor" fill-opacity="1" />
                </svg>
              </drawer-opener> -->
              <modal-search class="theme-modal modal-search">
                <div class="modal-container">
                  <div class="modal-header">
                    <!-- <drawer-opener class="svg-wrapper search-close" data-drawer=".modal-search">
                      <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z" fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z" fill="currentColor" />
                      </svg>
                    </drawer-opener> -->
                  </div>
                  <div class="modal-main d-flex align-items-center justify-content-center">
                    <form action="#" class="form-search d-flex align-items-center justify-content-center flex-wrap">
                      <label for="Search" class="text text-30"> Search </label>
                      <input type="text" placeholder="What are you looking for?" name="search" id="Search" class="text text-16" autocomplete="off">
                      <button class="button button--primary" type="submit" aria-label="Search">
                        <span class="svg-wrapper">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.7104 20.2875L18.0004 16.6075C19.4405 14.8119 20.1379 12.5328 19.9492 10.2388C19.7605 7.94476 18.7001 5.81025 16.9859 4.27411C15.2718 2.73797 13.0342 1.91697 10.7333 1.97993C8.43243 2.04289 6.24311 2.98502 4.61553 4.6126C2.98795 6.24018 2.04582 8.4295 1.98286 10.7304C1.9199 13.0313 2.7409 15.2688 4.27704 16.983C5.81318 18.6971 7.94769 19.7576 10.2417 19.9463C12.5357 20.135 14.8148 19.4376 16.6104 17.9975L20.2904 21.6775C20.3834 21.7712 20.494 21.8456 20.6158 21.8964C20.7377 21.9471 20.8684 21.9733 21.0004 21.9733C21.1324 21.9733 21.2631 21.9471 21.385 21.8964C21.5068 21.8456 21.6174 21.7712 21.7104 21.6775C21.8906 21.491 21.9914 21.2418 21.9914 20.9825C21.9914 20.7231 21.8906 20.4739 21.7104 20.2875ZM11.0004 17.9975C9.61592 17.9975 8.26255 17.5869 7.1114 16.8178C5.96026 16.0486 5.06305 14.9553 4.53324 13.6762C4.00342 12.3972 3.8648 10.9897 4.1349 9.63183C4.40499 8.27396 5.07168 7.02668 6.05065 6.04772C7.02961 5.06875 8.27689 4.40206 9.63476 4.13197C10.9926 3.86187 12.4001 4.00049 13.6792 4.53031C14.9583 5.06012 16.0515 5.95733 16.8207 7.10847C17.5899 8.25962 18.0004 9.61299 18.0004 10.9975C18.0004 12.854 17.2629 14.6345 15.9501 15.9472C14.6374 17.26 12.8569 17.9975 11.0004 17.9975Z" fill="currentColor" fill-opacity="1" />
                          </svg>
                        </span>
                      </button>
                    </form>
                  </div>
                </div>
              </modal-search>
              <div class="header-separator">
                <svg width="11" height="53" viewBox="0 0 11 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <line x1="10.5" x2="10.5" y2="53" stroke="currentColor" stroke-opacity="0.7" />
                  <line x1="0.5" y1="12" x2="0.5" y2="42" stroke="currentColor" stroke-opacity="0.3" />
                </svg>
              </div>
              <a href="/pages/contact" aria-label="contact us" class="button button--secondary button--slim d-none d-lg-inline-flex"> Let's Talk <span class="svg-wrapper">
                  <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"></path>
                  </svg>
                </span>
              </a>
              <!-- <drawer-opener class="svg-wrapper menu-open d-lg-none" data-drawer=".drawer-menu">
                <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="26" cy="26" r="25.5" fill="white" stroke="currentColor" />
                  <path d="M32.5 18.2857C32.5 17.5757 31.9179 17 31.2 17H14.3C13.5821 17 13 17.5757 13 18.2857C13 18.9958 13.5821 19.5714 14.3 19.5714H31.2C31.9179 19.5714 32.5 18.9957 32.5 18.2857ZM14.3 24.7143H37.7C38.4179 24.7143 39 25.29 39 26C39 26.7101 38.4179 27.2857 37.7 27.2857H14.3C13.5821 27.2857 13 26.7101 13 26C13 25.29 13.5821 24.7143 14.3 24.7143ZM14.3 32.4286H26C26.7179 32.4286 27.3 33.0042 27.3 33.7143C27.3 34.4243 26.7179 35 26 35H14.3C13.5821 35 13 34.4243 13 33.7143C13 33.0042 13.5821 32.4286 14.3 32.4286Z" fill="currentColor" />
                </svg>
              </drawer-opener> -->
            </div>
          </div>
        </div>
      </header>
    </sticky-header>