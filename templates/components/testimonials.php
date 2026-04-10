<section class="section testimonials">
    <div class="container">
        <div class="testimonial-grid">
            <?php foreach ($testimonials as $t): ?>
                <blockquote class="testimonial-card">
                    <p class="testimonial-quote">&ldquo;<?= htmlspecialchars($t['quote']) ?>&rdquo;</p>
                    <footer class="testimonial-author">
                        <?php if (!empty($t['photo'])): ?>
                            <img src="<?= htmlspecialchars($t['photo']) ?>" alt="" class="testimonial-avatar">
                        <?php else: ?>
                            <div class="testimonial-avatar" aria-hidden="true"><?= strtoupper(mb_substr($t['name'], 0, 1)) ?></div>
                        <?php endif; ?>
                        <div>
                            <cite class="testimonial-name"><?= htmlspecialchars($t['name']) ?></cite>
                            <span class="testimonial-role">
                                <?= htmlspecialchars($t['role']) ?>,
                                <?php if (!empty($t['parish_url'])): ?>
                                    <a href="<?= htmlspecialchars($t['parish_url']) ?>" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($t['church']) ?></a>
                                <?php else: ?>
                                    <?= htmlspecialchars($t['church']) ?>
                                <?php endif; ?>
                            </span>
                        </div>
                    </footer>
                </blockquote>
            <?php endforeach; ?>
        </div>
    </div>
</section>
