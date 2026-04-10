<?php
$hero_title = 'About The Catholic Web Company';
$hero_subtitle = '';
require __DIR__ . '/../templates/components/hero.php';
?>

<section class="section">
    <div class="container mission-text">
        <p>The Catholic Web Company is a full service creative agency based in Gilbert, Arizona specializing in solutions that empower Catholic churches to communicate the gospel of Jesus Christ and connect people to the local community.</p>
        <p>Our mission is to help the Church reach out to the community and beyond, and change the world in which we live according to the Gospel message. We want to help empower the Catholic Church to use media and technology outreach as effective modes of evangelization and catechesis.</p>
    </div>
</section>

<?php
$team = [
    [
        'name' => 'Chris Muglia',
        'role' => 'Founder, Managing Director',
        'phone' => '(480) 331-1995 ext 700',
        'photo' => $remote . '/uploads/images/staff/chris2024.jpg',
    ],
    [
        'name' => 'Duke Beattie',
        'role' => 'Software Engineering Director, Co-Founder',
        'phone' => '(480) 331-1995 Ext 704',
        'photo' => $remote . '/uploads/images/staff/duke2015.jpg',
    ],
    [
        'name' => 'Jill Johnson',
        'role' => 'Customer Support',
        'phone' => '(480) 331-1995 Ext 3',
        'photo' => $remote . '/uploads/images/staff/jill2.jpg',
    ],
    [
        'name' => 'Michele Grillone',
        'role' => 'Accounting',
        'phone' => '(480) 331-1995 Ext 703',
        'photo' => $remote . '/uploads/images/staff/micheleofficebg.jpg',
    ],
    [
        'name' => 'Mariloie Mulit',
        'role' => 'Customer Support',
        'phone' => '',
        'photo' => $remote . '/uploads/images/staff/mariloie.jpg',
    ],
    [
        'name' => 'Tiffany Seybert',
        'role' => 'Customer Support',
        'phone' => '(480) 331-1995 Ext 705',
        'photo' => $remote . '/uploads/images/staff/tiffany.jpg',
    ],
    [
        'name' => 'Juni Dayrit',
        'role' => 'Customer Support',
        'phone' => '',
        'photo' => $remote . '/uploads/images/staff/junidayrit.jpg',
    ],
    [
        'name' => 'Maria Bowman',
        'role' => 'Graphic Design',
        'phone' => '',
        'photo' => $remote . '/uploads/images/staff/maria.jpg',
    ],
    [
        'name' => 'Charlotte Healy',
        'role' => 'Graphic Design',
        'phone' => '',
        'photo' => $remote . '/uploads/images/staff/charlotte.jpg',
    ],
];
$team_title = 'Meet the Team';
require __DIR__ . '/../templates/components/team-grid.php';
?>

<section class="section">
    <div class="container">
        <h2 class="section-title">Core Values</h2>
        <?php
        $core_values = [
            ['id' => 'integrity', 'title' => 'Have Integrity', 'body' => 'Integrity is the virtue by which every aspect of our personal lives flow. Personal integrity demands that we are consistent with our beliefs and practice the same integrity in our business. We believe that accountability and moral responsibility are necessary tools for maintaining consistency between our actions and our principles. Simply put, we seek not to impress others rather to impress God in all we claim to be.'],
            ['id' => 'believe', 'title' => 'Know What You Believe', 'body' => 'We are Catholic and our business has the stated purpose of serving only the Catholic Church. We believe that the Catholic Church was founded by Jesus Christ himself and has continued through the apostolic succession of Peter (The first Pope). We have respect for other denominations and recognize the good work they do to build the Kingdom of God.'],
            ['id' => 'joy', 'title' => 'Serve with Joy!', 'body' => 'Yippie! We are fortunate to be using our God-given skills to help the Catholic Church.'],
            ['id' => 'passionate', 'title' => 'Be Passionate', 'body' => 'Be passionate about solving challenges, being the light in the world, promulgating the Gospel message.'],
            ['id' => 'right-person', 'title' => 'Have the Right Person for the Job', 'body' => 'Find the right person for the job. Be honest and don\'t patronize.'],
            ['id' => 'easygoing', 'title' => 'Be Easy-going, Optimistic and Friendly', 'body' => 'We seek to understand problems and provide solutions that help our customers. We do this is a friendly optimistic manner because we believe that the internet technology world is already full of enough tech-nerds who demand that you speak their language and try to make things harder than they need to be.'],
            ['id' => 'growth', 'title' => 'Pursue Growth And Learning', 'body' => 'We believe in continual personal, professional and spiritual improvement, and we\'re honest enough to acknowledge that there\'s always room for it.'],
            ['id' => 'elephants', 'title' => 'No Elephants Allowed', 'body' => 'We desire to build open and honest relationships with communication. We strive to create an environment where employees and management can speak freely to one another without fear of repercussion.'],
            ['id' => 'steward', 'title' => 'Be a Responsible Steward', 'body' => 'We are all given different talents. Talents are best when developed and shared. Make the most of what you have.'],
            ['id' => 'listen', 'title' => 'Listen and Learn', 'body' => 'We strive to listen, learn, and be open to trying. We don\'t claim to be the authority in all areas.'],
        ];
        $left_values = array_slice($core_values, 0, 5);
        $right_values = array_slice($core_values, 5);
        ?>
        <div class="values-columns">
            <div class="values-column">
                <?php foreach ($left_values as $item): ?>
                    <div class="value-accordion-item">
                        <button type="button"
                                class="value-accordion-toggle"
                                aria-expanded="false"
                                aria-controls="value-panel-<?= htmlspecialchars($item['id']) ?>">
                            <span><?= htmlspecialchars($item['title']) ?></span>
                        </button>
                        <div id="value-panel-<?= htmlspecialchars($item['id']) ?>" class="value-accordion-panel">
                            <div class="value-accordion-content">
                                <p><?= htmlspecialchars($item['body']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="values-column">
                <?php foreach ($right_values as $item): ?>
                    <div class="value-accordion-item">
                        <button type="button"
                                class="value-accordion-toggle"
                                aria-expanded="false"
                                aria-controls="value-panel-<?= htmlspecialchars($item['id']) ?>">
                            <span><?= htmlspecialchars($item['title']) ?></span>
                        </button>
                        <div id="value-panel-<?= htmlspecialchars($item['id']) ?>" class="value-accordion-panel">
                            <div class="value-accordion-content">
                                <p><?= htmlspecialchars($item['body']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php
$cta_title = 'The Catholic Web Company is ready to help you reach out to your community and beyond.';
$cta_button = "Let's Get Started on Your New Website!";
require __DIR__ . '/../templates/components/cta-banner.php';
