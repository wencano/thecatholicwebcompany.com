<section class="section value-props">
    <div class="container">
        <h2 class="section-title">Serving You 365 Days a Year</h2>
        <div class="props-grid">
            <?php foreach ($services as $svc): ?>
                <div class="prop-card">
                    <div class="prop-icon" aria-hidden="true">
                        <?php if ($svc['icon'] === 'build'): ?>
                            <svg viewBox="0 0 48 48" width="48" height="48"><rect x="8" y="14" width="32" height="24" rx="3" fill="none" stroke="currentColor" stroke-width="2.5"/><polyline points="8,14 24,28 40,14" fill="none" stroke="currentColor" stroke-width="2.5"/><line x1="24" y1="6" x2="24" y2="14" stroke="currentColor" stroke-width="2.5"/><circle cx="24" cy="4" r="2" fill="currentColor"/></svg>
                        <?php elseif ($svc['icon'] === 'maintain'): ?>
                            <svg viewBox="0 0 48 48" width="48" height="48"><circle cx="24" cy="24" r="18" fill="none" stroke="currentColor" stroke-width="2.5"/><polyline points="24,12 24,24 32,28" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/></svg>
                        <?php else: ?>
                            <svg viewBox="0 0 48 48" width="48" height="48"><path d="M24 6 L30 18 L42 20 L33 29 L35 42 L24 36 L13 42 L15 29 L6 20 L18 18 Z" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/></svg>
                        <?php endif; ?>
                    </div>
                    <h3 class="prop-title"><?= htmlspecialchars($svc['title']) ?></h3>
                    <?php if (stripos($svc['summary'], 'sendusstuff.com') !== false): ?>
                        <p class="prop-summary">
                            <?= str_replace(
                                'sendusstuff.com',
                                '<a href="http://www.sendusstuff.com/" target="_blank" rel="noopener noreferrer">sendusstuff.com</a>',
                                htmlspecialchars($svc['summary'])
                            ) ?>
                        </p>
                    <?php else: ?>
                        <p class="prop-summary"><?= htmlspecialchars($svc['summary']) ?></p>
                    <?php endif; ?>
                    <?php if ($current_path === '/' && $svc['icon'] === 'maintain'): ?>
                        <p><a href="<?= url('/services') ?>" class="btn btn-secondary">Read About Our Services</a></p>
                    <?php endif; ?>
                    <?php if ($current_path === '/' && $svc['icon'] === 'ministry'): ?>
                        <p><a href="<?= url('/church-internet') ?>" class="btn btn-secondary">The Church &amp; the Internet</a></p>
                    <?php endif; ?>
                    <?php if ($current_path === '/' && $svc['icon'] === 'build'): ?>
                        <p><a href="<?= url('/portfolio') ?>" class="btn btn-secondary">View Our Portfolio</a></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
