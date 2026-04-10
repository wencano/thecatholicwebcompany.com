<?php
$services = [
    [
        'title' => 'We Build It',
        'icon' => 'build',
        'summary' => 'We work closely with you to build a beautiful new website that highlights the charisms and ministry traits of your parish community. We also identify the archetypes of the people you are trying to attract to your parish and design accordingly.',
    ],
    [
        'title' => 'We Maintain It',
        'icon' => 'maintain',
        'summary' => 'Your website goes live and we maintain it - every single day, 365 days a year! Our relationship with you is just like that of any other employee you have on staff. You can submit requests to us anytime using our content submission website, sendusstuff.com. Requests are completed within hours (we are CRAZY about speediness and efficiency).',
    ],
    [
        'title' => 'You Can Focus on Your Ministry',
        'icon' => 'ministry',
        'summary' => 'Now that we take care of keeping your website up-to-date, you can get back to the ministry you have been called to! We are your strategic partner in all things related to your website.',
    ],
];

$services_articles = [
    [
        'title' => 'So, how does The Catholic Web Company build and maintain my Parish or Ministry\'s website?',
        'topic' => 'Build + Maintain Process',
        'video_url' => 'https://player.vimeo.com/video/202326804',
        'paragraphs' => [
            'Well, first, we create you a great website that not only WORKS, but highlights your best traits.',
            'We work with you and quickly learn who you are as a community, and all that you have to offer, in order to provide solutions specifically catered to your needs and the needs of those you serve.',
            'After your site goes live, we update your website proactively by studying your bulletin and converting that information into graphical and text-based content which we post to your website.',
            'In addition to the personal updates we provide for you each week, you can also make requests at any time by visiting our submission site: www.SendUsStuff.com.',
        ],
    ],
    [
        'title' => 'We ARE the Content Management System',
        'topic' => 'Hands-Off Website Management',
        'video_url' => 'https://player.vimeo.com/video/202327626',
        'paragraphs' => [
            'At The Catholic Web Company, we are often asked if we can build a website for a Parish or Ministry that they themselves can manage and maintain.',
            'Technically we don\'t, because we ARE your content management system!',
            'Whether it\'s a page update, a graphic banner, registration form, or a donation button, we are your personal webmaster. All you have to do is make a simple request, and we\'ll get it done.',
        ],
    ],
    [
        'title' => 'We can maintain your website regardless of your location',
        'topic' => 'Nationwide Remote Support',
        'video_url' => 'https://player.vimeo.com/video/202328173',
        'paragraphs' => [
            'Because the internet is accessible from any computer or mobile device anywhere in the world, we can efficiently maintain your website, regardless of your location.',
            'Your Parish or organization will get the same level of exceptional service, whether you are a thousand miles away, or a thousand feet away.',
            'Our staff is always engaged, on-call and available to you, 24 hours a day, seven days a week.',
        ],
    ],
    [
        'title' => 'We offer several affordable options',
        'topic' => 'Affordable, Predictable Pricing',
        'video_url' => 'https://player.vimeo.com/video/202328489',
        'paragraphs' => [
            'After we determine your needs, we will recommend a maintenance package best suited to your Parish or organization.',
            'There are never any hidden fees or extra charges, and you can expect the same bill amount every month.',
            'Yes, we do have a contract, which is renewable every year. You may change the service level, or cancel the contract at any time.',
        ],
    ],
    [
        'title' => 'Do you offer services such as E-Newsletters, Social Media or Video Streaming?',
        'topic' => 'Add-On Communication Services',
        'video_url' => 'https://player.vimeo.com/video/202328927',
        'paragraphs' => [
            'At The Catholic Web Company, we offer many additional services and we\'ll be happy to talk with you, in order to determine your needs.',
            'We can advise you on the best ways to utilize Social Media to increase engagement for your evangelistic, catechetical, and event-based efforts, and yes, we can even help set up live video streaming from your Parish or organization.',
            'We have an E-Newsletter platform that works seamlessly with your new Catholic Web Company website, allowing you to reach out to your parishioners or members with beautiful and informative emails.',
        ],
    ],
    [
        'title' => 'Why is it important that your site be Mobile-Friendly?',
        'topic' => 'Mobile-First User Experience',
        'video_url' => 'https://player.vimeo.com/video/202330588',
        'paragraphs' => [
            'Did you know that in today\'s world about 88% of all daily internet traffic comes from some type of mobile device, that is, a smart phone or tablet?',
            'Mobile friendly means that your new Catholic Web Company website looks great and functions beautifully on any device, anywhere.',
            'As mobile technology continues to evolve, we constantly test your website on each platform, to ensure that nothing will prevent the people you\'re trying to reach from learning about all that your Parish or ministry has to offer.',
        ],
    ],
    [
        'title' => 'How can my Parish or ministry actually make a difference online?',
        'topic' => 'Digital Evangelization Impact',
        'video_url' => 'https://player.vimeo.com/video/202331087',
        'paragraphs' => [
            'In today\'s vast, interconnected digital world, people learn and gather information in so many different ways.',
            'A Pastor or Ministry Leader may only have the attention of a congregation or group for an hour or so each week.',
            'All the while, the average person actually consumes between three and six hours of web and social media content every day.',
            'A beautiful, up-to-date and easy to use website will draw people to a fuller experience of the life of faith, and overall enrich the lives of your parishioners or members.',
        ],
    ],
];

$hero_title = 'The Catholic Web Company Services';
$hero_subtitle = 'We work closely with you to build a beautiful new website that highlights the charisms and ministry traits of your parish community. Then we continually update/maintain your new website after it is launched, every day, 365 days a year.';
require __DIR__ . '/../templates/components/hero.php';

require __DIR__ . '/../templates/components/value-props.php';
?>

<section class="section services-detail">
    <div class="container">
        <?php foreach ($services_articles as $idx => $item): ?>
            <article class="service-block service-qa<?= ($idx % 2 === 1) ? ' is-reversed' : '' ?>">
                <div class="service-qa-inner">
                    <?php if (!empty($item['video_url'])): ?>
                        <div class="service-qa-media">
                            <div class="Flexible-container">
                                <iframe
                                    src="<?= htmlspecialchars($item['video_url']) ?>"
                                    width="640"
                                    height="360"
                                    frameborder="0"
                                    webkitallowfullscreen
                                    mozallowfullscreen
                                    allowfullscreen
                                    loading="lazy"
                                    title="<?= htmlspecialchars($item['title']) ?> Video"></iframe>
                            </div>
                            <p><a href="<?= htmlspecialchars($item['video_url']) ?>" target="_blank" rel="noopener noreferrer">Open video in new tab</a></p>
                        </div>
                    <?php endif; ?>

                    <div class="service-qa-content">
                        <p class="service-qa-label"><strong><?= htmlspecialchars($item['topic']) ?></strong></p>
                        <h3><?= htmlspecialchars($item['title']) ?></h3>
                        <?php foreach ($item['paragraphs'] as $text): ?>
                            <?php if (stripos($text, 'SendUsStuff.com') !== false): ?>
                                <p>
                                    <?= str_replace(
                                        'www.SendUsStuff.com',
                                        '<a href="http://www.sendusstuff.com/" target="_blank" rel="noopener noreferrer">www.SendUsStuff.com</a>',
                                        htmlspecialchars($text)
                                    ) ?>
                                </p>
                            <?php else: ?>
                                <p><?= htmlspecialchars($text) ?></p>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<?php
$cta_title = 'The Catholic Web Company keeps your website up-to-date and utilizes the latest internet technologies.';
$cta_button = "Let's Get Started on Your New Website!";
require __DIR__ . '/../templates/components/cta-banner.php';
