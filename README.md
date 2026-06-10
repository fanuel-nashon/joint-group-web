# Joint Group Website

Corporate website for **Joint Group** — a business growth and investment facilitation firm based in Dar es Salaam, Tanzania. Built as a multi-page PHP site on the Consulo template.

---

## Table of Contents

- [Pages](#pages)
- [Tech Stack](#tech-stack)
- [File Structure](#file-structure)
- [Color Scheme](#color-scheme)
- [SEO Implementation](#seo-implementation)
- [Performance](#performance)
- [Build & Deployment](#build--deployment)
- [Requirements Met](#requirements-met)
- [Pending Changes](#pending-changes)

---

## Pages

| Page | URL | File | Purpose |
|---|---|---|---|
| Home | `/` | `pages/index.php` | Landing page — hero, services overview, stats, why-choose-us, testimonials, contact CTA |
| About Us | `/pages/about` | `pages/about.php` | Company story, mission, vision, team |
| Services | `/pages/services` | `pages/services.php` | Full service catalogue |
| Why Choose Us | `/pages/why-choose-us` | `pages/why-choose-us.php` | Differentiators, key stats |
| FAQ | `/pages/faq` | `pages/faq.php` | Bootstrap accordion Q&A, 8 questions |
| Contact | `/pages/contact` | `pages/contact.php` | Contact form, address, phone, email |
| Privacy Policy | `/pages/privacy-policy` | `pages/privacy-policy.php` | 9-section privacy policy |
| Terms & Conditions | `/pages/terms` | `pages/terms.php` | 10-section terms document |

The root `index.php` simply forwards to `pages/index.php` via `require_once`. Clean URLs are handled by `.htaccess` — `.php` extensions are hidden from visitors with a 301 redirect.

---

## Tech Stack

### Server-Side
- **PHP** — shared includes (`includes/header.php`, `includes/footer.php`, `includes/contact-form.php`), per-page SEO variable injection

### CSS

| File | Served | Role |
|---|---|---|
| `assets/css/vendor.css` | as-is (already minified) | Bootstrap 5 + bundled third-party component styles |
| `assets/css/style.css` | → `style.min.css` | Consulo template base styles; CSS custom properties for all component tokens |
| `assets/css/theme-overrides.css` | → `theme-overrides.min.css` | Joint Group brand overrides — section backgrounds, card colours, button colours, scroll-to-top |

The browser loads the **minified** `.min.css` files. The source `.css` files are kept for editing — run `npm run build` to regenerate the minified versions.

All theming uses **CSS custom properties** (`--color-background`, `--color-foreground`, `--color-foreground-heading`, etc.) defined in `:root` inside `header.php`. `theme-overrides.css` re-scopes variables at the component level without touching `style.css`.

### JavaScript

| File | Role |
|---|---|
| `assets/js/vendor.js` | Bootstrap 5 JS, Swiper.js, AOS, and other bundled libraries (already minified) |
| `assets/js/main.js` | Template initialisation, custom web component registration |

Both scripts are loaded with `defer` so they never block HTML parsing.

### Frontend Libraries (bundled in vendor files)
- **Bootstrap 5** — grid, accordion (FAQ page), utility classes
- **Swiper.js** — hero image carousel, testimonials slider
- **AOS (Animate On Scroll)** — `data-aos="fade-up"` entrance animations on sections and cards
- **Google Fonts** — Inter (body), Poppins (headings, buttons) loaded via `preconnect`

### Custom Web Components
Registered as custom HTML elements in `main.js`:

| Element | Behaviour |
|---|---|
| `<sticky-header>` | Transparent navbar that turns dark blue on scroll |
| `<hero-slider>` | Wraps the Swiper hero carousel |
| `<counter-up>` | Animates stat numbers when scrolled into view |
| `<scroll-top>` | Floating scroll-to-top button |
| `<drawer-opener>` | Off-canvas drawer overlay for mobile menu |
| `<drawer-menu>` | Mobile navigation drawer |
| `<modal-search>` | Full-screen search modal |

---

## File Structure

```
joint-group-web/
├── index.php                      # Entry point → requires pages/index.php
├── .htaccess                      # Clean URLs, gzip, caching, security headers
├── sitemap.xml                    # XML sitemap (clean URLs, no .php)
├── robots.txt                     # Crawl directives + sitemap pointer
├── package.json                   # npm build script (CSS minification)
├── .gitignore
├── README.md
│
├── pages/
│   ├── index.php                  # Home page
│   ├── about.php
│   ├── services.php
│   ├── why-choose-us.php
│   ├── faq.php
│   ├── contact.php
│   ├── privacy-policy.php
│   └── terms.php
│
├── includes/
│   ├── header.php                 # <head> meta, CSS vars, nav, SEO variables, preload hints
│   ├── footer.php                 # Footer columns, social links, copyright
│   └── contact-form.php           # Contact form handler
│
└── assets/
    ├── css/
    │   ├── vendor.css             # Third-party bundle (pre-minified, do not edit)
    │   ├── style.css              # Source — edit this
    │   ├── style.min.css          # Built output — served to browser
    │   ├── theme-overrides.css    # Source — edit this
    │   └── theme-overrides.min.css  # Built output — served to browser
    ├── js/
    │   ├── vendor.js              # Third-party bundle (pre-minified, do not edit)
    │   └── main.js
    └── img/
        ├── logo/
        ├── banner/
        ├── hero/
        ├── footer/
        └── ...
```

---

## Color Scheme

| Role | Color | Hex |
|---|---|---|
| Dark Blue — navbar, hero, headings, dark cards | `rgba(28, 37, 57, 1)` | `#1C2539` |
| Orange — all primary & secondary buttons, hover effects, icons, scroll-to-top | `rgba(237, 90, 40, 1)` | `#ED5A28` |
| Orange hover | `rgba(200, 65, 20, 1)` | `#C84114` |
| Light Grey — alternating section backgrounds, service cards, FAQ bg | `rgba(245, 247, 250, 1)` | `#F5F7FA` |
| White — page background, form boxes, standard cards | `rgba(255, 255, 255, 1)` | `#FFFFFF` |

Applied through CSS custom properties in `includes/header.php` `:root` block and overridden per-component in `assets/css/theme-overrides.css`.

---

## SEO Implementation

### Per-Page Meta System
Each page sets PHP variables **before** including `header.php`. `header.php` reads them with null-coalescing fallbacks (`??`) so any page that omits them gets sensible site-wide defaults.

```php
// Example — pages/services.php
$seo_title       = 'Our Services | Joint Group – Consultancy, Marketing & Investment';
$seo_description = 'Explore Joint Group\'s services: strategic business consultancy...';
$seo_canonical   = 'https://jointgroup.co.tz/pages/services';
require_once __DIR__ . '/../includes/header.php';
```

Available variables:

| Variable | Default |
|---|---|
| `$seo_title` | `Joint Group \| Business Growth & Investment Facilitation` |
| `$seo_description` | Site-wide description |
| `$seo_canonical` | `https://jointgroup.co.tz/` |
| `$seo_robots` | `index, follow` |
| `$seo_og_type` | `website` |
| `$seo_og_image` | `https://jointgroup.co.tz/assets/img/og-image.jpg` |
| `$seo_jsonld_extra` | _(empty — for page-specific JSON-LD blocks)_ |

### Meta Tags in `<head>` (every page)
- Unique `<title>` per page
- Unique `<meta name="description">` per page
- `<link rel="canonical">` — clean URL, no `.php`
- `<meta name="robots">` — Privacy Policy and Terms set `noindex, follow`
- Theme color: `#ED5A28` (brand orange)

### Open Graph (social sharing)
- `og:title`, `og:description`, `og:url` — per-page
- `og:type`, `og:locale` (`en_TZ`), `og:site_name`
- `og:image` (1200 × 630), `og:image:width`, `og:image:height`, `og:image:alt`

### Twitter Cards
- `twitter:card` — `summary_large_image`
- `twitter:title`, `twitter:description`, `twitter:image`, `twitter:image:alt`

### Structured Data (JSON-LD)

| Schema | Location | Purpose |
|---|---|---|
| `Organization` | `includes/header.php` (every page) | Company name, URL, logo, address, contact point |
| `FAQPage` | `pages/faq.php` | 5 Q&A pairs for Google FAQ rich results |

Additional per-page schemas can be injected via `$seo_jsonld_extra`.

### Sitemap & Robots
- `sitemap.xml` — all 8 clean URLs with `lastmod`, `changefreq`, and `priority`
- `robots.txt` — `Allow: /`, blocks `/includes/` and raw asset dirs, references the sitemap

---

## Performance

### What's in `.htaccess`

| Rule | Effect |
|---|---|
| `mod_deflate` gzip compression | ~70% reduction in wire size for all CSS, JS, and HTML |
| Vendor files cache `max-age=31536000, immutable` | Browser caches 585 KB of vendor bundles for 1 year |
| Site CSS/JS cache `max-age=2592000` | 30-day cache; bust by appending `?v=x` to the link |
| Images cache 6 months | Reduces repeat-visit payload |
| Fonts cache 1 year immutable | Google Fonts equivalents cached if self-hosted |
| Security headers | `X-Content-Type-Options`, `X-Frame-Options`, `Referrer-Policy` |

### CSS Minification

| File | Source | Minified |
|---|---|---|
| `style.css` | 187 KB | 157 KB |
| `theme-overrides.css` | 5.2 KB | 2.1 KB |

`vendor.css` (340 KB) and `vendor.js` (244 KB) are pre-minified by the template vendor and are not processed by the build step.

### Resource Hints
`header.php` includes `<link rel="preload">` for `vendor.css`, `style.min.css`, and `vendor.js` so the browser fetches them before the parser reaches the `<link>` and `<script>` tags.

---

## Build & Deployment

### Local development
Edit `assets/css/style.css` or `assets/css/theme-overrides.css` as normal. After any CSS change, regenerate the minified files:

```bash
npm run build
```

### Before deploying to production
```bash
npm run build
```
That's the only step required. Everything else is already production-ready.

### What to upload to the server
Upload all files **except**:

```
node_modules/
package-lock.json
assets/css/style.css
assets/css/theme-overrides.css
.git/
README.md
```

### Server requirements
- PHP 7.4+
- Apache with `mod_rewrite` and `mod_deflate` enabled (default on all shared hosts)

---

## Requirements Met

| Requirement | Status |
|---|---|
| Dark Blue navbar & hero sections | ✅ CSS variables in `header.php` |
| Orange primary and secondary buttons across all pages | ✅ `theme-overrides.css` |
| Alternating White / Light Grey section backgrounds | ✅ Applied to `.running-content`, `.promotion`, `.image-text-alt`, `.multicolumn-page` |
| Light Grey service cards with White icon backgrounds | ✅ `.multicolumn-card` CSS variable scoping |
| Orange card hover effects | ✅ `.multicolumn-card:hover` full variable reset |
| About page mission/vision highlight blocks | ✅ `.mission-block`, `.vision-block` |
| Contact page Light Grey background, White form box | ✅ `.section-contact-form`, `.contact-box` |
| Scroll-to-top button in brand orange | ✅ `background-color !important` override |
| FAQ page (functional) | ✅ Bootstrap accordion with 8 Q&As + FAQPage JSON-LD |
| Privacy Policy page (functional) | ✅ 9-section document; `noindex` |
| Terms & Conditions page (functional) | ✅ 10-section document; `noindex` |
| Footer links wired up | ✅ All previously dead `href="#"` links replaced |
| Per-page SEO titles and descriptions | ✅ All 8 pages have unique meta |
| Open Graph + Twitter Card tags | ✅ In `header.php` |
| JSON-LD structured data | ✅ Organization (global) + FAQPage |
| XML sitemap | ✅ `sitemap.xml` at root with clean URLs |
| robots.txt | ✅ At root, references sitemap |
| Canonical links | ✅ Every page, clean URL format |
| Clean URLs (no `.php` extension) | ✅ `.htaccess` mod_rewrite + all internal links updated |
| Gzip compression | ✅ `mod_deflate` in `.htaccess` |
| Browser caching | ✅ Far-future headers for vendor bundles, 30-day for site files |
| Minified CSS | ✅ `npm run build` → `style.min.css`, `theme-overrides.min.css` |
| Resource preloading | ✅ `<link rel="preload">` in `header.php` |

---

## Pending Changes

### 1. Image Replacements
All images are currently from the Consulo template. Replace with real Joint Group photography/assets:

| Image | Path | Notes |
|---|---|---|
| Hero slider images | `assets/img/hero/` | Replace 2–3 template hero photos with photos of the Joint Group team or Dar es Salaam |
| About page photos | `assets/img/` | Team member headshots, office interior |
| Portfolio / project images | `assets/img/projects/` | Real client projects or completed engagements |
| Partner / brand logos | `assets/img/brand/` | Logos of actual partner organisations |
| Footer background | `assets/img/footer/footer-bg-large.jpg` | Optional — can use a branded dark texture |
| OG social share image | `assets/img/og-image.jpg` | **Required** — 1200 × 630 px branded graphic used for all social media previews (currently referenced but not created) |

### 2. Social Media Profile Links
The social icons in the footer currently point to platform homepages, not Joint Group's actual accounts. Update the four `href` values in `includes/footer.php`:

| Platform | Current `href` | Replace with |
|---|---|---|
| Facebook | `https://web.facebook.com/` | Joint Group Facebook page URL |
| LinkedIn | `https://www.linkedin.com/` | Joint Group LinkedIn company page URL |
| Twitter / X | `https://x.com/` | Joint Group X/Twitter profile URL |
| Instagram | `https://www.instagram.com/` | Joint Group Instagram profile URL |
