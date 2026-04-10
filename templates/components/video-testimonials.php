<section class="section video-testimonials">
    <div class="container">
        <h2 class="section-title">What People are Saying</h2>
        <div class="video-testimonial-grid">
            <?php foreach ($video_testimonials as $vt): ?>
                <div class="video-testimonial-card">
                    <div class="Flexible-container">
                        <iframe
                            src="<?= htmlspecialchars($vt['video_url']) ?>"
                            frameborder="0"
                            allow="autoplay; fullscreen; picture-in-picture"
                            allowfullscreen
                            loading="lazy"
                            title="<?= htmlspecialchars($vt['name']) ?>"></iframe>
                    </div>
                    <h3 class="video-testimonial-name"><?= htmlspecialchars($vt['name']) ?></h3>
                    <?php if (!empty($vt['parish_url'])): ?>
                        <p class="video-testimonial-parish"><a href="<?= htmlspecialchars($vt['parish_url']) ?>" target="_blank" rel="noopener noreferrer">Visit <?= htmlspecialchars($vt['parish']) ?></a></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
