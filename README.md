# Estatein — Custom WordPress Theme

A hand-coded custom WordPress theme built from the **Estatein** real-estate Figma
community template ([Figma file](https://www.figma.com/community/file/1314076616839640516)).

> **Scope note (4-hour stress test):** As stated in the brief, completing every page in
> 4 hours is not realistic. I focused on delivering a **pixel-faithful, production-quality
> Home page** rather than several rushed pages. The header/footer are built as reusable
> components, so the remaining pages (About, Properties, Services, Contact) can be added on
> top of the same foundation quickly. See **"What I'd do with more time"** below.

---

## What's included

- **Home page** (`front-page.php`) — full fidelity to the Figma desktop design:
  - Top bar, sticky header with nav, hero with an animated rotating circular badge
  - Feature grid (4 cards), Featured Properties (3 cards), Testimonials (3 cards),
    FAQ (3 cards), CTA banner, and a full 5-column footer with newsletter form.
- Reusable **header** and **footer** components (`header.php`, `footer.php`).
- Fully **responsive** layout (desktop / tablet / mobile) via CSS media queries.
- Vanilla-JS interactivity (`assets/js/main.js`): mobile menu, dismissible top bar,
  newsletter form validation + feedback, placeholder-link guard.

## Tech & approach

| Area | Decision |
|------|----------|
| **No page builder** | The Figma file ships with an Elementor/UIChemy export. Those exports are bloated and structurally broken, so I **did not import them**. I parsed the JSON only to extract exact content (copy, colors, image URLs) and hand-coded clean semantic HTML/CSS/PHP — this keeps the codebase readable and the markup lean. |
| **Assets** | All design images were pulled into `assets/images/` (local, no external CDN dependency). Images are `.webp` for size. |
| **Fonts** | `Urbanist` (headings/body) + `Inter` fallback, loaded via Google Fonts with `display=swap`. |
| **Styling** | Single stylesheet using CSS custom properties (design tokens) for the palette, so colors/spacing are centrally controlled. |
| **JS** | Dependency-free, deferred, ~1.5 KB. |

## Design tokens (from the Figma file)

```
--bg-primary:#141414  --bg-secondary/card:#1A1A1A  --border:#262626
--accent:#703BF7      --text-white:#FFFFFF         --text-gray:#999999
```

## File structure

```
estatein/
├── style.css          # Theme header + all styles (tokens, components, responsive)
├── functions.php      # Setup, asset enqueue (cache-busted), perf cleanup, helpers
├── header.php         # <head> + SEO meta + top bar + header/nav + mobile menu
├── footer.php         # Footer columns, newsletter form, social, copyright
├── front-page.php     # Home page sections
├── index.php          # Fallback template (WordPress Loop)
├── assets/
│   ├── images/        # All design images (.webp / .svg)
│   └── js/main.js     # Mobile menu, newsletter, top-bar, link guard
└── README.md
```

## Best practices applied

- **Code quality:** semantic HTML5 (`header`/`nav`/`section`/`footer`), DRY section
  rendering via PHP arrays + `foreach`, all dynamic output escaped (`esc_html`,
  `esc_attr`), a single `estatein_img()` helper for asset URLs, commented `functions.php`.
- **Performance:** assets enqueued the WordPress way with `filemtime()` cache-busting;
  `main.js` deferred; emoji scripts removed; below-the-fold images use `loading="lazy"`
  while the hero LCP image uses `fetchpriority="high"`; explicit `width`/`height` on
  images to avoid layout shift (CLS); `.webp` images.
- **SEO:** `title-tag` support, meta description, Open Graph tags, descriptive `alt`
  text, single `<h1>`, logical heading hierarchy, WP version generator removed.
- **Accessibility:** skip-to-content link, `aria-label`s on icon-only buttons,
  `aria-live` newsletter status, keyboard-focusable controls, `prefers-reduced-motion`
  disables the badge animation.
- **UX:** sticky header, hover states on every interactive element, active nav state,
  mobile hamburger menu, inline form validation feedback.

> **Placeholder links:** per the brief's "single-page" scope, all navigation links point
> to `#` and are intercepted in JS so they don't 404 on pages that aren't built yet.

## Local setup

This theme was developed on **XAMPP** (Apache + MariaDB + PHP 8.2).

1. Copy the `estatein/` folder into `wp-content/themes/`.
2. In **wp-admin → Appearance → Themes**, activate **Estatein**.
3. In **Settings → Reading**, set "Your homepage displays" to a static page (or leave
   default — `front-page.php` renders the home design automatically).
4. Visit the site root. Done — no required plugins.

## Testing

- Verified rendering across the full page (desktop 1280px, tablet 768px, mobile 375px).
- Validated all links resolve to `#` (no broken navigation), newsletter validation, and
  the dismissible top bar.
- All PHP files pass `php -l` (no syntax errors).

## What I'd do with more time

- Build the remaining pages (About, Properties, Services, Contact) reusing the existing
  header/footer and component CSS.
- Introduce **Custom Post Types** (`property`, `testimonial`, `faq`, `team`) + **ACF**
  fields so the client can manage listings, prices, tags, and quotes from the dashboard
  instead of hardcoded arrays.
- Wire the contact/newsletter forms to a plugin (e.g. Contact Form 7 / WPForms) or a
  REST endpoint.
- Add a properties archive with filtering, and pagination via the WordPress Loop.
