# Estatein — WordPress Theme

A custom WordPress theme built from the [Estatein Figma template](https://www.figma.com/community/file/1314076616839640516) for the developer trial task.

A note on scope: the brief is a 4-hour stress test and says up front that finishing the whole site isn't realistic. So rather than rushing several half-finished pages, I spent the time on one solid, close-to-pixel-perfect **Home page**. The header and footer are reusable, so the remaining pages can be built on the same base later.

## Running it locally

1. Copy the `estatein` folder into `wp-content/themes/`.
2. Activate **Estatein** under Appearance → Themes.
3. Open the site — the home page renders on its own through `front-page.php`. No extra setup, no plugins required.

Built and tested on XAMPP (PHP 8.2).

## How it's built

No page builder. The Figma file ships with an Elementor/UIChemy export, but those are bloated and break easily, so I only used them to pull the real copy and assets, then wrote the markup by hand in plain HTML, CSS and PHP. All styling sits in one stylesheet with CSS variables for the palette, and the small bits of interactivity — mobile menu, newsletter validation, dismissible top bar — are vanilla JS.

Things I made a point of covering:

- **Responsive** across desktop, tablet and mobile. The hero, stats and feature cards reflow to match the Figma mobile layout.
- **Performance** — webp images, lazy-loading below the fold, the hero image prioritised, width/height on images to avoid layout shift, and a deferred script.
- **SEO & accessibility** — meta and Open Graph tags, alt text, a skip link, aria labels, and reduced-motion support.

## With more time

I'd build out the other pages (About, Properties, Services, Contact) on the same header/footer, and move the listings, testimonials and FAQs into Custom Post Types + ACF so they're editable from the dashboard instead of living in the template.
