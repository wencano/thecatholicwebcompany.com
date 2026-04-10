<footer class="site-footer">
    <div class="container footer-inner">
        <div class="footer-brand">
            <img src="<?= htmlspecialchars($site['logo_white']) ?>" alt="<?= htmlspecialchars($site['name']) ?>" class="logo-img">
            <p class="footer-tagline"><?= htmlspecialchars($site['tagline']) ?></p>
        </div>

        <div class="footer-contact">
            <h4>Contact</h4>
            <p>Sales: <a href="tel:<?= preg_replace('/[^0-9+]/', '', $site['phone_sales']) ?>"><?= htmlspecialchars($site['phone_sales']) ?></a></p>
            <p>Support: <a href="tel:<?= preg_replace('/[^0-9+]/', '', $site['phone_support']) ?>"><?= htmlspecialchars($site['phone_support']) ?></a></p>
            <p><a href="mailto:<?= htmlspecialchars($site['email']) ?>"><?= htmlspecialchars($site['email']) ?></a></p>
        </div>

        <div class="footer-address">
            <h4>Location</h4>
            <address><?= htmlspecialchars($site['address']) ?></address>
        </div>

        <div class="footer-nav">
            <h4>Pages</h4>
            <ul>
                <?php foreach ($nav as $item): ?>
                    <li><a href="<?= url($item['url']) ?>"><?= htmlspecialchars($item['label']) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($site['name']) ?> &reg;. All Rights Reserved.</p>
        </div>
    </div>
</footer>
