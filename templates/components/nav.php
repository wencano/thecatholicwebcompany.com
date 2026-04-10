<header class="site-header">
    <div class="container header-inner">
        <a href="<?= url('/') ?>" class="logo" aria-label="<?= htmlspecialchars($site['name']) ?> — Home">
            <img src="<?= htmlspecialchars($site['logo_black']) ?>" alt="<?= htmlspecialchars($site['name']) ?>" class="logo-img">
        </a>

        <button class="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">
            <span class="nav-toggle-bar"></span>
            <span class="nav-toggle-bar"></span>
            <span class="nav-toggle-bar"></span>
        </button>

        <nav class="nav-menu" aria-label="Main navigation">
            <ul class="nav-list">
                <?php foreach ($nav as $item): ?>
                    <li>
                        <a href="<?= url($item['url']) ?>"
                           class="nav-link<?= $current_path === $item['url'] ? ' is-active' : '' ?>">
                            <?= htmlspecialchars($item['label']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>
