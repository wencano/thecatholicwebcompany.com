<section class="cta-banner">
    <div class="container cta-inner">
        <h2 class="cta-title"><?= htmlspecialchars($cta_title ?? "Let's Get Started on Your New Website!") ?></h2>
        <?php if (!empty($cta_subtitle)): ?>
            <p class="cta-subtitle"><?= htmlspecialchars($cta_subtitle) ?></p>
        <?php endif; ?>
        <a href="<?= url('/contact') ?>" class="btn btn-primary"><?= htmlspecialchars($cta_button ?? 'Request a Quote') ?></a>
    </div>
</section>
