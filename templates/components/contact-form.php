<section class="section contact-section">
    <div class="container">
        <h2 class="section-title">Contact Us</h2>
        <p class="section-intro">Thank you for your interest in The Catholic Web Company. Please fill out the form below or feel free to give us a call at <?= htmlspecialchars($site['phone_sales']) ?>. We look forward to speaking with you.</p>

        <div class="contact-layout">
            <form class="contact-form" action="#" method="post">
                <div class="form-group">
                    <label for="contact-name">Name</label>
                    <input type="text" id="contact-name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="contact-email">Email</label>
                    <input type="email" id="contact-email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="contact-phone">Phone</label>
                    <input type="tel" id="contact-phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="contact-parish">Parish / Organization</label>
                    <input type="text" id="contact-parish" name="parish">
                </div>
                <div class="form-group form-group-full">
                    <label for="contact-message">Message</label>
                    <textarea id="contact-message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>

            <aside class="contact-info">
                <div class="info-block">
                    <h3>Phone</h3>
                    <p>Sales: <a href="tel:<?= preg_replace('/[^0-9+]/', '', $site['phone_sales']) ?>"><?= htmlspecialchars($site['phone_sales']) ?></a></p>
                    <p>Support: <a href="tel:<?= preg_replace('/[^0-9+]/', '', $site['phone_support']) ?>"><?= htmlspecialchars($site['phone_support']) ?></a></p>
                </div>
                <div class="info-block">
                    <h3>Email</h3>
                    <p><a href="mailto:<?= htmlspecialchars($site['email']) ?>"><?= htmlspecialchars($site['email']) ?></a></p>
                </div>
                <div class="info-block">
                    <h3>Address</h3>
                    <address><?= htmlspecialchars($site['address']) ?></address>
                </div>
            </aside>
        </div>
    </div>
</section>
