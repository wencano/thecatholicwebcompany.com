<div class="variant-switcher">
    <button type="button"
            class="switcher-toggle"
            aria-haspopup="true"
            aria-expanded="false"
            aria-controls="variant-switcher-menu"
            aria-label="Open style settings">
        <svg class="switcher-icon" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M19.43 12.98c.04-.32.07-.65.07-.98s-.03-.66-.08-.98l2.11-1.65a.5.5 0 0 0 .12-.63l-2-3.46a.5.5 0 0 0-.6-.22l-2.49 1a7.06 7.06 0 0 0-1.7-.98l-.38-2.65A.5.5 0 0 0 14 2h-4a.5.5 0 0 0-.49.42l-.38 2.65c-.61.24-1.18.56-1.71.98l-2.49-1a.5.5 0 0 0-.6.22l-2 3.46a.5.5 0 0 0 .12.63l2.11 1.65c-.05.32-.08.65-.08.98s.03.66.08.98l-2.11 1.65a.5.5 0 0 0-.12.63l2 3.46a.5.5 0 0 0 .6.22l2.49-1c.53.42 1.1.74 1.71.98l.38 2.65A.5.5 0 0 0 10 22h4a.5.5 0 0 0 .49-.42l.38-2.65c.61-.24 1.18-.56 1.7-.98l2.49 1a.5.5 0 0 0 .6-.22l2-3.46a.5.5 0 0 0-.12-.63zM12 15.5A3.5 3.5 0 1 1 12 8a3.5 3.5 0 0 1 0 7.5z"/>
        </svg>
    </button>
    <div id="variant-switcher-menu" class="switcher-menu" role="menu" aria-label="Style options">
        <?php foreach ($variants as $key => $label): ?>
            <a href="?variant=<?= $key ?>"
               role="menuitem"
               class="switcher-btn<?= $variant === $key ? ' is-active' : '' ?>">
                <?= htmlspecialchars($label) ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>
