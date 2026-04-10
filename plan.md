# TCWC Redesign — 3 Variants

## Goal
Redesign thecatholicwebcompany.com in 3 style variants to demonstrate web design taste for the Senior Front-End Developer role at The Catholic Web Company. All content stays the same — only CSS changes between variants.

## Variant Concepts

### Variant 1: "Classic" — Traditional Catholic
- Deep burgundy (#6B1D2A), gold (#C9A94E), cream (#FAF7F0) palette
- Serif headings (Playfair Display), clean sans body (Inter)
- Subtle ornamental dividers, soft card shadows
- Warm, reverent, timeless feel — like a well-maintained parish hall

### Variant 2: "Modern" — Clean Minimal
- Navy (#1B2A4A), white, coral accent (#E8634A) palette
- Geometric sans-serif (DM Sans or Poppins)
- Generous whitespace, subtle borders, flat design
- Contemporary nonprofit/agency feel — professional and approachable

### Variant 3: "Editorial" — Bold Typographic
- Near-black (#1A1A1A), off-white (#F5F2ED), accent blue (#2D5BA4) palette
- Strong serif headlines (Libre Baskerville), large type scale
- High contrast sections, full-width hero, editorial magazine layout
- Confident and authoritative — like a Catholic publication

## Pages (6 total)
1. **Home** (`/` or `/index`) — hero, value props, testimonials, CTA
2. **Services** (`/services`) — service descriptions, videos, CTA
3. **Portfolio** (`/portfolio`) — client grid with links + testimonials
4. **Church & Internet** (`/church-internet`) — content article + CTA
5. **About** (`/about`) — mission, team, core values
6. **Contact** (`/contact`) — form, contact info, map reference

## Architecture

```
thecatholicwebcompany.com/
├── index.php                   # Front controller / router
├── config.php                  # Site settings, nav items, contact info
├── pages/
│   ├── home.php
│   ├── services.php
│   ├── portfolio.php
│   ├── about.php
│   ├── contact.php
│   └── church-internet.php
├── templates/
│   ├── layout.php              # HTML skeleton, loads CSS variant
│   └── components/
│       ├── nav.php             # Logo + mobile toggle + nav links
│       ├── footer.php          # Contact, address, copyright
│       ├── hero.php            # Full-width hero with CTA
│       ├── testimonials.php    # Testimonial cards carousel/grid
│       ├── value-props.php     # 3-column "We Build / Maintain / Focus"
│       ├── cta-banner.php      # Call-to-action strip
│       ├── team-grid.php       # Team member cards
│       ├── portfolio-grid.php  # Portfolio client cards
│       ├── core-values.php     # 10 core values list
│       └── contact-form.php    # Contact form + info sidebar
├── css/
│   ├── base.css                # Reset, typography tokens, shared utilities
│   ├── layout.css              # Grid/flex page structure
│   ├── components.css          # Component styles (nav, cards, hero, etc.)
│   ├── variant-classic.css     # Variant 1 overrides
│   ├── variant-modern.css      # Variant 2 overrides
│   └── variant-editorial.css   # Variant 3 overrides
└── assets/
    └── images/
        ├── tcwclogo-black.svg  # Recreated/simplified logo placeholder
        └── tcwclogo-white.svg
```

## How Variant Switching Works
- `?variant=classic` / `?variant=modern` / `?variant=editorial` query param
- `index.php` reads the param, stores it in config
- `layout.php` loads `base.css` + `layout.css` + `components.css` + `variant-{name}.css`
- Home page includes a small variant switcher bar at top for easy comparison

## PHP Approach
- **No framework, no dependencies.** Pure PHP includes — matches the role's "basic PHP for templating" bonus skill.
- `index.php` acts as front controller: maps URL path to page file, wraps in layout.
- `config.php` holds all content data (nav items, contact info, testimonials, portfolio entries, team members) as PHP arrays — keeps templates clean.
- Each page file sets `$page_title` and defines content, then gets wrapped by `layout.php`.
- Components are reusable `include`s that receive data via variables.

## CSS Strategy
- **base.css**: CSS reset, CSS custom properties (tokens), typography scale, responsive breakpoints
- **layout.css**: Page grid, section spacing, container widths — shared across variants
- **components.css**: Default component structure (nav, hero, cards, forms) — structural only
- **variant-*.css**: Overrides CSS custom properties (colors, fonts, shadows, border-radius) + any variant-specific layout tweaks (e.g., editorial uses larger hero, classic uses ornamental borders)

This means variants are thin — mostly token overrides with occasional structural tweaks. Demonstrates understanding of CSS architecture and maintainability.

## Content Data (from live site)
All real content from thecatholicwebcompany.com will be hardcoded in `config.php`:
- **Nav**: Home, Our Services, Portfolio, The Church & Internet, About Us, Contact Us
- **Contact**: Sales (800) 643-0870, Support (480) 331-1995, info@thecatholicwebcompany.com
- **Address**: 240 E. Coury Ave Suite 242, Mesa, AZ 85210
- **Testimonials**: 7 testimonials with name/role/church/quote
- **Portfolio**: 17 client sites with name + URL
- **Team**: 9 members with name, role, extension
- **Core Values**: 10 values
- **Services**: Build / Maintain / Focus sections + extended service descriptions

## Implementation Order
1. `config.php` — all content data
2. `index.php` — router + variant logic
3. `templates/layout.php` — HTML skeleton
4. `templates/components/` — all components
5. `pages/` — all 6 pages
6. `css/base.css` + `layout.css` + `components.css` — structural CSS
7. `css/variant-modern.css` — start with Modern as default (cleanest baseline)
8. `css/variant-classic.css` — Traditional overrides
9. `css/variant-editorial.css` — Bold overrides
10. Variant switcher UI + polish

## What This Demonstrates
- **Semantic HTML5**: Clean, accessible markup without frameworks
- **CSS architecture**: Token-based system, layered CSS, variant overrides
- **PHP templating**: Organized includes, separation of data/templates/pages
- **Responsive design**: Mobile-first, works across all screen sizes
- **Design taste**: 3 distinct aesthetics from the same markup
- **Maintainability**: Adding a 4th variant = just a new CSS file
