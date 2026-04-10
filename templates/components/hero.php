<section class="hero">
    <?php if (!empty($hero_video_mp4) || !empty($hero_video_webm)): ?>
        <video class="hero-video" autoplay muted loop playsinline>
            <?php if (!empty($hero_video_mp4)): ?>
                <source src="<?= htmlspecialchars($hero_video_mp4) ?>" type="video/mp4">
            <?php endif; ?>
            <?php if (!empty($hero_video_webm)): ?>
                <source src="<?= htmlspecialchars($hero_video_webm) ?>" type="video/webm">
            <?php endif; ?>
        </video>
        <div class="hero-video-overlay" aria-hidden="true"></div>
    <?php endif; ?>
    <div class="container hero-inner">
        <h1 class="hero-title"><?= htmlspecialchars($hero_title) ?></h1>
        <?php if (!empty($hero_subtitle)): ?>
            <p class="hero-subtitle"><?= htmlspecialchars($hero_subtitle) ?></p>
        <?php endif; ?>
        <?php
        $primary_href = $hero_cta_url ?? '/contact';
        if (strpos($primary_href, 'http://') !== 0 && strpos($primary_href, 'https://') !== 0) {
            $primary_href = url($primary_href);
        }
        $secondary_href = $hero_cta2_url ?? '';
        if (!empty($secondary_href) && strpos($secondary_href, 'http://') !== 0 && strpos($secondary_href, 'https://') !== 0) {
            $secondary_href = url($secondary_href);
        }
        ?>
        <?php if (!empty($hero_cta) || !empty($hero_cta2)): ?>
            <div class="hero-actions">
                <?php if (!empty($hero_cta)): ?>
                    <a href="<?= htmlspecialchars($primary_href) ?>" class="btn btn-primary"><?= htmlspecialchars($hero_cta) ?></a>
                <?php endif; ?>
                <?php if (!empty($hero_cta2) && !empty($secondary_href)): ?>
                    <a href="<?= htmlspecialchars($secondary_href) ?>" class="btn btn-secondary"><?= htmlspecialchars($hero_cta2) ?></a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
