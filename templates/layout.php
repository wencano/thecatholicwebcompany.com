<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($page_title) ?> — <?= htmlspecialchars($site['name']) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php if ($variant === 'original'): ?>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <?php elseif ($variant === 'classic'): ?>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php elseif ($variant === 'editorial'): ?>
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Source+Sans+3:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php else: ?>
        <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php endif; ?>
    <link rel="stylesheet" href="<?= asset('/css/base.css') ?>">
    <link rel="stylesheet" href="<?= asset('/css/layout.css') ?>">
    <link rel="stylesheet" href="<?= asset('/css/components.css') ?>">
    <link rel="stylesheet" href="<?= asset('/css/variant-' . $variant . '.css') ?>">
</head>
<body class="variant-<?= $variant ?> page-<?= htmlspecialchars($page_file ?? 'not-found') ?>">
    <?php require __DIR__ . '/components/variant-switcher.php'; ?>
    <?php require __DIR__ . '/components/announcement-bar.php'; ?>
    <?php require __DIR__ . '/components/nav.php'; ?>

    <main id="main">
        <?= $page_content ?>
    </main>

    <section class="prefooter-bar" aria-label="Tagline">
        <div class="container">
            <p class="prefooter-bar-text">Bringing your message beyond the church walls</p>
        </div>
    </section>

    <?php require __DIR__ . '/components/footer.php'; ?>

    <script>
    // Mobile nav toggle
    document.addEventListener('DOMContentLoaded', function() {
        const switcher = document.querySelector('.variant-switcher');
        const switcherToggle = document.querySelector('.switcher-toggle');
        if (switcher && switcherToggle) {
            switcherToggle.addEventListener('click', function() {
                const isOpen = switcher.classList.toggle('is-open');
                switcherToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            });

            document.addEventListener('click', function(e) {
                if (!switcher.contains(e.target)) {
                    switcher.classList.remove('is-open');
                    switcherToggle.setAttribute('aria-expanded', 'false');
                }
            });
        }

        const toggle = document.querySelector('.nav-toggle');
        const menu = document.querySelector('.nav-menu');
        if (toggle && menu) {
            toggle.addEventListener('click', function() {
                menu.classList.toggle('is-open');
                toggle.setAttribute('aria-expanded', menu.classList.contains('is-open'));
            });
        }

        // About page core values accordion (reliable slide animation)
        const accordionItems = Array.from(document.querySelectorAll('.value-accordion-item'));
        const getPanel = (item) => item.querySelector('.value-accordion-panel');
        const getButton = (item) => item.querySelector('.value-accordion-toggle');

        accordionItems.forEach(function(item) {
            const btn = getButton(item);
            const panel = getPanel(item);
            if (!btn || !panel) return;

            if (item.classList.contains('is-open')) {
                panel.style.height = 'auto';
                btn.setAttribute('aria-expanded', 'true');
            } else {
                panel.style.height = '0px';
                btn.setAttribute('aria-expanded', 'false');
            }

            panel.addEventListener('transitionend', function(ev) {
                if (ev.propertyName !== 'height') return;
                if (item.classList.contains('is-open')) {
                    panel.style.height = 'auto';
                }
            });

            btn.addEventListener('click', function() {
                const isOpen = item.classList.contains('is-open');
                if (isOpen) {
                    if (panel.style.height === 'auto') {
                        panel.style.height = panel.scrollHeight + 'px';
                    }
                    void panel.offsetHeight;
                    panel.style.height = '0px';
                    item.classList.remove('is-open');
                    btn.setAttribute('aria-expanded', 'false');
                } else {
                    item.classList.add('is-open');
                    btn.setAttribute('aria-expanded', 'true');
                    panel.style.height = '0px';
                    const targetHeight = panel.scrollHeight;
                    requestAnimationFrame(function() {
                        panel.style.height = targetHeight + 'px';
                    });
                }
            });
        });

        window.addEventListener('resize', function() {
            accordionItems.forEach(function(item) {
                const panel = getPanel(item);
                if (!panel) return;
                if (item.classList.contains('is-open')) {
                    panel.style.height = 'auto';
                }
            });
        });
    });
    </script>
</body>
</html>
