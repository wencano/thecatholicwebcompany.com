# TCWC Design Studies Prototype

Design studies for The Catholic Web Company (TCWC), implemented as a multi-page PHP prototype with switchable visual variants and shared content architecture.

Deployed prototype:
- [https://wencano.com/prototypes/thecatholicwebcompany.com](https://wencano.com/prototypes/thecatholicwebcompany.com)

## Goal

Explore multiple visual directions for the same TCWC content and IA while keeping page structure reusable and maintainable.

Active style variants:
- `original`
- `modern`
- `classic`
- `editorial`

## Page Map

- `Home` (`/`)
- `Services` (`/services`)
- `Portfolio` (`/portfolio`)
- `The Church & Internet` (`/church-internet`)
- `About` (`/about`)
- `Contact` (`/contact`)
- `TCWC Info` (`/tcwcinfo`)

## Project Architecture

```text
thecatholicwebcompany.com/
├── index.php                         # Front controller / router / variant resolver
├── config.php                        # Site metadata, nav, variants
├── README.md
├── plan.md
├── pages/
│   ├── home.php
│   ├── services.php
│   ├── portfolio.php
│   ├── church-internet.php
│   ├── about.php
│   ├── contact.php
│   └── tcwcinfo.php
├── templates/
│   ├── layout.php                    # Global shell, shared JS hooks
│   └── components/
│       ├── announcement-bar.php
│       ├── variant-switcher.php
│       ├── nav.php
│       ├── footer.php
│       ├── hero.php
│       ├── cta-banner.php
│       ├── value-props.php
│       ├── video-testimonials.php
│       ├── testimonials.php
│       ├── team-grid.php
│       ├── core-values.php
│       ├── portfolio-grid.php
│       ├── contact-form.php
│       └── coverage-map.php
└── css/
    ├── base.css                      # Reset, typography tokens, base utilities
    ├── layout.css                    # Global layout, sticky bars, responsive rules
    ├── components.css                # Shared component styling
    ├── variant-original.css          # Original variant overrides
    ├── variant-modern.css            # Modern variant overrides
    ├── variant-classic.css           # Classic variant overrides
    └── variant-editorial.css         # Editorial variant overrides
```

## Routing and URL Aliases

Routing is handled in `index.php` and supports both clean internal paths and TCWC-style aliases (examples):

- `/about-the-catholic-web-company` -> `about.php`
- `/contact-the-catholic-web-company` -> `contact.php`
- `/catholic-web-company-services` -> `services.php`
- `/catholic-website-design-portfolio` -> `portfolio.php`
- `/internet-catholic-church` -> `church-internet.php`

## Variant System

Variant is selected by query parameter:

- `?variant=original`
- `?variant=modern`
- `?variant=classic`
- `?variant=editorial`

Render pipeline in `layout.php`:

1. `base.css`
2. `layout.css`
3. `components.css`
4. `variant-{name}.css`

Default variant is currently `original`.

## Implementation Notes

- Pure PHP templating with reusable component includes.
- Shared content blocks reused across pages (hero, CTA, testimonials, etc.).
- Sticky announcement bar + sticky header behavior.
- Floating variant settings button (FAB) for fast style switching.
- About page includes team photos and two-column accordion for Core Values.
- Services page uses alternating two-column video/content Q&A blocks.
