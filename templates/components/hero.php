<?php
$has_hero_video = !empty($hero_video_mp4) || !empty($hero_video_webm);
$has_hero_poster = !empty($hero_poster);
$hero_classes = 'hero';
if ($has_hero_video) {
    $hero_classes .= ' has-video';
}
if ($has_hero_poster) {
    $hero_classes .= ' has-poster';
}
?>
<section class="<?= htmlspecialchars($hero_classes) ?>">
    <?php if ($has_hero_video): ?>
        <?php if ($has_hero_poster): ?>
            <img
                class="hero-poster"
                src="<?= htmlspecialchars($hero_poster) ?>"
                alt=""
                aria-hidden="true"
                loading="eager"
                decoding="async">
        <?php endif; ?>
        <video class="hero-video" autoplay muted loop playsinline preload="metadata">
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
