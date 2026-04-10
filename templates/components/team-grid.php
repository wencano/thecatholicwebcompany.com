<section class="section team-section">
    <div class="container">
        <h2 class="section-title"><?= htmlspecialchars($team_title ?? 'Our Team') ?></h2>
        <div class="team-grid">
            <?php foreach ($team as $member): ?>
                <div class="team-card">
                    <?php if (!empty($member['photo'])): ?>
                        <img src="<?= htmlspecialchars($member['photo']) ?>" alt="<?= htmlspecialchars($member['name']) ?>" class="team-avatar team-avatar-photo">
                    <?php else: ?>
                        <div class="team-avatar" aria-hidden="true">
                            <?= strtoupper(mb_substr($member['name'], 0, 1)) ?>
                        </div>
                    <?php endif; ?>
                    <h3 class="team-name"><?= htmlspecialchars($member['name']) ?></h3>
                    <p class="team-role"><?= htmlspecialchars($member['role']) ?></p>
                    <?php if (!empty($member['phone'])): ?>
                        <p class="team-ext"><?= htmlspecialchars($member['phone']) ?></p>
                    <?php elseif (!empty($member['ext'])): ?>
                        <p class="team-ext">Ext. <?= htmlspecialchars($member['ext']) ?></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
