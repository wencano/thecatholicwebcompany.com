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

$video_testimonials = [
    [
        'name' => 'Fr. Don Kline Testimonial',
        'video_url' => 'https://player.vimeo.com/video/727938300?h=ade14cc958&badge=0&autopause=0&player_id=0&app_id=58479',
        'parish' => 'St. Bernadette',
        'parish_url' => 'http://www.saintbernadette.com/',
    ],
    [
        'name' => 'Fr. Eduardo Testimonial',
        'video_url' => 'https://player.vimeo.com/video/727938136?h=6f54c5cec8&badge=0&autopause=0&player_id=0&app_id=58479',
        'parish' => 'San Pedro Catholic Church',
        'parish_url' => 'https://www.sprcc.bz/',
    ],
    [
        'name' => 'Deacon José Testimonial',
        'video_url' => 'https://player.vimeo.com/video/728318398?h=a10ff91adf&badge=0&autopause=0&player_id=0&app_id=58479',
        'parish' => 'St. Stanislaus',
        'parish_url' => 'https://www.ststanscc.org/index',
    ],
    [
        'name' => 'Jessica Adams Testimonial',
        'video_url' => 'https://player.vimeo.com/video/730109451?h=e5c442364e&badge=0&autopause=0&player_id=0&app_id=58479',
        'parish' => 'Sacred Heart of Jesus',
        'parish_url' => 'https://www.shoj.org/',
    ],
];

$testimonials = [
    [
        'name' => 'Fr. Eduardo Montemayor, SOLT',
        'role' => 'Pastor',
        'church' => 'San Pedro Roman Catholic Church, San Pedro Town, Ambergris Caye, Belize',
        'quote' => 'We were looking for Web designers that were authentically Catholic, and could also provide us a truly excellent and beautiful webpage at a reasonable cost. The Catholic Web Company was a perfect fit for us. They worked very closely and diligently with us in designing our website for the San Pedro Roman Catholic Church in Belize. They were an answer to our prayers.',
        'photo' => $remote . '/uploads/images/freduardo2.jpg',
    ],
    [
        'name' => 'Amy Swartz',
        'role' => 'Director of Stewardship & Administration',
        'church' => 'Saint Rose of Lima Church, Murfreesboro, TN',
        'quote' => 'We have been very pleased with The Catholic Web Company. They are very responsive to our requests and it makes managing a website simple. It is great to have a website company with a focus on Catholic content. It makes them a true partner in making our website an evangelizing and informational tool for our parishioners and the community.',
        'photo' => $remote . '/uploads/images/amyswartz.jpg',
    ],
    [
        'name' => 'Parish Secretary',
        'role' => 'Staff',
        'church' => 'St. Mary Roman Catholic Church, Kingman, AZ',
        'quote' => 'Anytime we have had a question or change regarding our website, the staff at The Catholic Web Company are very quick to respond to our requests. For the most part, my primary contact has been Jill Johnson and she is always very professional and friendly. I would recommend The Catholic Web Company to others.',
        'photo' => $remote . '/uploads/images/ameliakent.jpg',
    ],
    [
        'name' => 'Fr. Don Kline',
        'role' => 'Pastor',
        'church' => 'Saint Bernadette',
        'quote' => 'The Catholic Web Company is wonderful to work with. They provide a wonderful service in a timely fashion that meets all our parish website needs. They also know and understand the important nuances of the Catholic faith which is a huge help.',
        'photo' => $remote . '/uploads/images/frdonkline.jpg',
    ],
    [
        'name' => 'Fr. John Bonavitacola',
        'role' => 'Pastor',
        'church' => 'Our Lady of Lourdes',
        'quote' => 'The Catholic Web Company provides a great service to our parish and all the parishes they work with. It\'s both an attractive and easy solution to all the demands a pastor faces.',
        'photo' => $remote . '/uploads/images/frjohnbonavitacola.jpg',
    ],
    [
        'name' => 'Fr. John Ehrich',
        'role' => 'Pastor',
        'church' => 'St. Thomas More, Glendale',
        'quote' => 'You will be hard-pressed to find more competent and knowledgeable people to manage your website. I wholeheartedly recommend The Catholic Web Company.',
        'photo' => $remote . '/uploads/images/frjohn.jpg',
    ],
    [
        'name' => 'Mrs. Anita Petitti',
        'role' => 'Principal',
        'church' => 'St. John Bosco Catholic School',
        'quote' => 'School parents tell us that they love our website because it\'s very user-friendly on their mobile phones. It is easy to navigate and they can complete almost any task on their cell phone, without the need to sit in front of a computer. From a school administrator perspective, I like it because the updates I send to TCWC are confirmed immediately and go "live" within the hour or sooner. We are very satisfied with their service!',
        'photo' => $remote . '/uploads/images/apetitti.jpg',
    ],
];

?>
<section class="section">
    <div class="container">
        <div class="Flexible-container" style="max-width: 980px; margin: 0 auto;">
            <iframe
                src="https://player.vimeo.com/video/727926896?h=9df9079142"
                width="640"
                height="360"
                frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen
                loading="lazy"
                title="Welcome to The Catholic Web Company"></iframe>
        </div>
    </div>
</section>

<?php

$cta_title = 'Keep your website updated and relevant, Contact us today!';
$cta_subtitle = '877-343-9434';
$cta_button = 'Book A Consultation';
require __DIR__ . '/../templates/components/cta-banner.php';

require __DIR__ . '/../templates/components/video-testimonials.php';
require __DIR__ . '/../templates/components/testimonials.php';

$cta_title = 'Keep your website updated and relevant, Contact us today!';
$cta_subtitle = '877-343-9434';
$cta_button = 'Book A Consultation';
require __DIR__ . '/../templates/components/cta-banner.php';

require __DIR__ . '/../templates/components/value-props.php';
require __DIR__ . '/../templates/components/coverage-map.php';
?>
