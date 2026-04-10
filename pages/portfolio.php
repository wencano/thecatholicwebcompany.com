<?php
$portfolio = [
    ['name' => 'Aid to Women Center', 'url' => 'http://www.aidtowomencenter.org/'],
    ['name' => 'E3 Africa', 'url' => 'https://www.e3africa.org/'],
    ['name' => 'ASU Catholic Newman Center', 'url' => 'https://www.asucatholic.org/'],
    ['name' => 'San Francisco de Asís', 'url' => 'https://www.sfdaparish.org/'],
    ['name' => 'San Pedro Roman Catholic Church', 'url' => 'https://www.sprcc.bz/'],
    ['name' => 'St. Mary Help of Christians', 'url' => 'https://www.stmarys-aiken.org/'],
    ['name' => 'St. Benedict Parish', 'url' => 'http://www.stbenedict.org/'],
    ['name' => 'St. Bernadette Parish', 'url' => 'https://www.saintbernadette.com/'],
    ['name' => 'St. Francis of Assisi', 'url' => 'http://www.stfrancisapopka.org/'],
    ['name' => 'St. Gregory School', 'url' => 'http://school.stgregzelie.org/'],
    ['name' => 'St. John Bosco Catholic School', 'url' => 'http://www.sjbosco.org/'],
    ['name' => 'St. John Paul the Great Parish', 'url' => 'http://www.johnpaulgreatparish.com/'],
    ['name' => 'St. Philip & St. James', 'url' => 'http://www.spsj.org/'],
    ['name' => 'St. Rose of Lima', 'url' => 'http://www.saintrose.org/'],
    ['name' => 'St. Rose of Lima School', 'url' => 'https://school.saintrose.org/'],
    ['name' => 'St. Thomas More', 'url' => 'https://www.stmglendale.org/'],
    ['name' => 'St. Thomas The Apostle Catholic School', 'url' => 'https://staphxschool.org'],
];

$testimonials = [
    [
        'name' => 'Fr. Eduardo Montemayor, SOLT',
        'role' => 'Pastor',
        'church' => 'San Pedro Roman Catholic Church, San Pedro Town, Ambergris Caye, Belize',
        'quote' => 'We were looking for Web designers that were authentically Catholic, and could also provide us a truly excellent and beautiful webpage at a reasonable cost. The Catholic Web Company was a perfect fit for us. They worked very closely and diligently with us in designing our website for the San Pedro Roman Catholic Church in Belize. They were an answer to our prayers.',
        'photo' => $remote . '/uploads/images/freduardo2.jpg',
        'parish_url' => 'http://www.sprcc.bz/',
    ],
    [
        'name' => 'Amy Swartz',
        'role' => 'Director of Stewardship & Administration',
        'church' => 'Saint Rose of Lima Church, Murfreesboro, TN',
        'quote' => 'We have been very pleased with The Catholic Web Company. They are very responsive to our requests and it makes managing a website simple. It is great to have a website company with a focus on Catholic content. It makes them a true partner in making our website an evangelizing and informational tool for our parishioners and the community.',
        'photo' => $remote . '/uploads/images/amyswartz.jpg',
        'parish_url' => 'http://www.saintrose.org/',
    ],
    [
        'name' => 'Parish Secretary',
        'role' => 'Staff',
        'church' => 'St. Mary Roman Catholic Church, Kingman, AZ',
        'quote' => 'Anytime we have had a question or change regarding our website, the staff at The Catholic Web Company are very quick to respond to our requests. For the most part, my primary contact has been Jill Johnson and she is always very professional and friendly. I would recommend The Catholic Web Company to others.',
        'photo' => $remote . '/uploads/images/ameliakent.jpg',
        'parish_url' => 'http://www.stmarykingman.com/',
    ],
    [
        'name' => 'Fr. Don Kline',
        'role' => 'Pastor',
        'church' => 'Saint Bernadette',
        'quote' => 'The Catholic Web Company is wonderful to work with. They provide a wonderful service in a timely fashion that meets all our parish website needs. They also know and understand the important nuances of the Catholic faith which is a huge help.',
        'photo' => $remote . '/uploads/images/frdonkline.jpg',
        'parish_url' => 'https://www.saintbernadette.com/',
    ],
    [
        'name' => 'Fr. John Bonavitacola',
        'role' => 'Pastor',
        'church' => 'Our Lady of Lourdes',
        'quote' => 'The Catholic Web Company provides a great service to our parish and all the parishes they work with. It\'s both an attractive and easy solution to all the demands a pastor faces.',
        'photo' => $remote . '/uploads/images/frjohnbonavitacola.jpg',
        'parish_url' => 'https://www.ololscw.org',
    ],
    [
        'name' => 'Fr. John Ehrich',
        'role' => 'Pastor',
        'church' => 'St. Thomas More, Glendale',
        'quote' => 'You will be hard-pressed to find more competent and knowledgeable people to manage your website. I wholeheartedly recommend The Catholic Web Company.',
        'photo' => $remote . '/uploads/images/frjohn.jpg',
        'parish_url' => 'https://stmglendale.org/',
    ],
    [
        'name' => 'Mrs. Anita Petitti',
        'role' => 'Principal',
        'church' => 'St. John Bosco Catholic School',
        'quote' => 'School parents tell us that they love our website because it\'s very user-friendly on their mobile phones. It is easy to navigate and they can complete almost any task on their cell phone, without the need to sit in front of a computer. From a school administrator perspective, I like it because the updates I send to TCWC are confirmed immediately and go "live" within the hour or sooner. We are very satisfied with their service!',
        'photo' => $remote . '/uploads/images/apetitti.jpg',
        'parish_url' => 'http://www.sjbosco.org',
    ],
];

$hero_title = 'Catholic Church Website Design and Maintenance';
$hero_subtitle = 'We understand the spiritual reality of the work you do everyday and we want to help you reach as many souls as possible. We are active, practicing Catholics. We understand the Catholic Church and are passionate about spreading the Gospel of Jesus Christ.';
require __DIR__ . '/../templates/components/hero.php';
?>

<?php
require __DIR__ . '/../templates/components/coverage-map.php';
require __DIR__ . '/../templates/components/portfolio-grid.php';
require __DIR__ . '/../templates/components/testimonials.php';

$cta_title = 'Keep your website updated and relevant, Contact us today!';
$cta_subtitle = '877-343-9434';
$cta_button = 'Book A Consultation';
require __DIR__ . '/../templates/components/cta-banner.php';
