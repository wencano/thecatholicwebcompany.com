<section class="section values-section">
    <div class="container">
        <h2 class="section-title">Our Core Values</h2>
        <ol class="values-list">
            <?php foreach ($core_values as $i => $val): ?>
                <li class="value-item">
                    <span class="value-number"><?= $i + 1 ?></span>
                    <div>
                        <h3 class="value-title"><?= htmlspecialchars($val['title']) ?></h3>
                        <p class="value-desc"><?= htmlspecialchars($val['desc']) ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>
