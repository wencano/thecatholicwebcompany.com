<section class="section portfolio-section">
    <div class="container">
        <h2 class="section-title">Our Portfolio</h2>
        <p class="section-intro">We are proud to serve over 100 Catholic parishes and nonprofits across the country. Here are some of the communities we work with.</p>
        <div class="portfolio-grid">
            <?php foreach ($portfolio as $client): ?>
                <a href="<?= htmlspecialchars($client['url']) ?>" class="portfolio-card" target="_blank" rel="noopener noreferrer">
                    <span class="portfolio-icon" aria-hidden="true">✝</span>
                    <span class="portfolio-name"><?= htmlspecialchars($client['name']) ?></span>
                    <span class="portfolio-arrow" aria-hidden="true">&rarr;</span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
