<?php
// Include configuration
require_once 'config.php';

// EYTB Inc page configuration
$page_title = getPageTitle("Event Yeah The Boys Inc.");
$page_description = getMetaDescription("Learn about Event Yeah The Boys Incorporated - an annual charity event that raised awareness and funds for Men's Mental Health services in the Clarence Valley, NSW.");

// Organization data
$eytb_data = [
    'name' => 'Event Yeah The Boys Inc.',
    'abbreviation' => 'EYTB',
    'purpose' => 'to advance awareness of and access to mental health services for Men in the Clarence Valley, NSW',
    'location' => 'Grafton, NSW',
    'funds_raised' => 'AU$13,000',
    'description' => 'Event Yeah the Boys Inc. (EYTB) was a charity whose purpose is to advance awareness of and access to mental health services for Men in the Clarence Valley, NSW by providing an annual event in Grafton, NSW to counteract the high local suicide rates of males. EYTB brings together services, raises awareness of the issues around the mental health of men and raises funds for organisations providing services to them.'
];

// Donation links
$donation_links = [
    [
        'name' => 'MATES in Construction NSW Ltd',
        'url' => 'https://donorbox.org/mates-in-construction-nsw-ltd',
        'description' => 'Supporting construction workers with mental health services'
    ],
    [
        'name' => 'Parents Beyond Breakup Ltd',
        'url' => 'https://www.givenow.com.au/parentsbeyondbreakup',
        'description' => 'Supporting parents through relationship breakdown'
    ]
];
?>
<!doctype html>
<html lang="en">
<head>
    <title><?php echo h($page_title); ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php echo h($page_description); ?>">
    <link rel="icon" href="assets/images/lochstudios.png" type="image/png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="<?php echo INTER_FONT_URL; ?>">
    <link rel="stylesheet" href="<?php echo FONTAWESOME_CSS_URL; ?>">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <!-- Main Navigation Bar -->
    <nav class="navbar is-fixed-top modern-navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item no-hover" href="./">
                <img src="assets/images/lochstudios.png" alt="LochStudios Logo" width="28" height="28">
                <span class="ml-2 has-text-weight-bold"><?php echo h(SITE_COMPANY); ?></span>
            </a>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="mainNav">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="mainNav" class="navbar-menu">
            <div class="navbar-start">
                <a href="eytbinc.php" class="navbar-item is-active has-text-weight-medium">EYTB Inc.</a>
                <a href="index.php" class="navbar-item has-text-weight-medium">Back Home</a>
            </div>
            <div class="navbar-end">
                <div class="navbar-item no-hover">
                    <div class="buttons">
                        <a href="<?php echo $social_media['facebook']; ?>" target="_blank" class="button is-light is-rounded">
                            <span class="icon"><i class="fab fa-facebook-f"></i></span>
                        </a>
                        <a href="<?php echo $social_media['twitter']; ?>" target="_blank" class="button is-light is-rounded">
                            <span class="icon"><i class="fab fa-x-twitter"></i></span>
                        </a>
                        <a href="<?php echo $social_media['github']; ?>" target="_blank" class="button is-light is-rounded">
                            <span class="icon"><i class="fab fa-github"></i></span>
                        </a>
                        <a href="<?php echo $social_media['email']; ?>" class="button modern-button is-rounded">
                            <span class="icon"><i class="fas fa-envelope"></i></span>
                            <span>Contact</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Banner Hero Section -->
    <section class="hero is-large" style="background: linear-gradient(rgba(7,18,32,0.6), rgba(7,18,32,0.85)), url('assets/images/eytbinc-banner.jpg') center/cover;">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title is-1 has-text-white">
                    <?php echo h($eytb_data['name']); ?>
                </h1>
                <p class="subtitle is-4 has-text-white-bis">
                    Supporting Men's Mental Health in the Clarence Valley
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="section section-modern">
        <div class="container">
            <!-- Introduction -->
            <div class="columns is-vcentered mb-6">
                <div class="column is-8">
                    <h2 class="title is-2 gradient-text mb-4">What was "<?php echo h($eytb_data['name']); ?>"?</h2>
                    <p class="subtitle is-5 has-text-grey">
                        <?php echo h($eytb_data['name']); ?> was an annual event to celebrate blokes while raising money, awareness of and access to Men's Mental Health issues and services in the Clarence Valley, NSW.
                    </p>
                </div>
                <div class="column is-4 has-text-centered">
                    <div class="stat-card">
                        <p class="stat-number"><?php echo h($eytb_data['funds_raised']); ?></p>
                        <p class="stat-label">Total Funds Raised</p>
                    </div>
                </div>
            </div>

            <!-- What They Did Section -->
            <div class="columns">
                <div class="column is-8">
                    <h3 class="title is-4 has-text-white">What did they do?</h3>
                    <div class="content">
                        <p><?php echo h($eytb_data['description']); ?></p>

                        <div class="impact-box mt-5">
                            <h4 class="title is-5 has-text-white">
                                <span class="icon"><i class="fas fa-heart"></i></span>
                                Impact Achievement
                            </h4>
                            <p>
                                In their tenure they raised over <strong class="has-text-info"><?php echo h($eytb_data['funds_raised']); ?></strong> for providers of mental health services for men.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="floating-card">
                        <div class="card-content">
                            <h4 class="title is-5">Key Facts</h4>
                            <div class="content">
                                <ul style="list-style: none; padding-left: 0;">
                                    <li style="padding: 0.4rem 0;"><i class="fas fa-map-marker-alt has-text-info" style="width: 1.5em;"></i> <strong>Location:</strong> <?php echo h($eytb_data['location']); ?></li>
                                    <li style="padding: 0.4rem 0;"><i class="fas fa-calendar has-text-info" style="width: 1.5em;"></i> <strong>Type:</strong> Annual Event</li>
                                    <li style="padding: 0.4rem 0;"><i class="fas fa-users has-text-info" style="width: 1.5em;"></i> <strong>Focus:</strong> Men's Mental Health</li>
                                    <li style="padding: 0.4rem 0;"><i class="fas fa-dollar-sign has-text-info" style="width: 1.5em;"></i> <strong>Raised:</strong> <?php echo h($eytb_data['funds_raised']); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Section -->
    <section class="section section-modern has-background-light">
        <div class="container">
            <div class="has-text-centered mb-6">
                <h3 class="title is-2 gradient-text mb-4">Continue Supporting Men's Mental Health</h3>
                <p class="subtitle is-5 has-text-grey">While EYTB Inc. is no longer active, you can still make a difference</p>
            </div>

            <div class="columns is-centered">
                <?php foreach ($donation_links as $link): ?>
                <div class="column is-5">
                    <div class="card floating-card">
                        <div class="card-content has-text-centered">
                            <div class="icon-modern" style="margin: 0 auto 1rem;">
                                <i class="fas fa-hand-holding-heart"></i>
                            </div>
                            <h4 class="title is-5"><?php echo h($link['name']); ?></h4>
                            <p class="has-text-grey mb-4"><?php echo h($link['description']); ?></p>
                            <a href="<?php echo h($link['url']); ?>" target="_blank" class="button modern-button is-medium">
                                <span class="icon"><i class="fas fa-external-link-alt"></i></span>
                                <span>Donate Now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <div class="container has-text-centered">
            <h3 class="title is-3">Make a Difference Today</h3>
            <p class="subtitle is-5" style="color: #071220;">Your donation can help save lives and support mental health services for men</p>
            <div class="buttons is-centered mt-5">
                <?php foreach ($donation_links as $link): ?>
                <a href="<?php echo h($link['url']); ?>" target="_blank" class="button is-light is-large is-rounded">
                    <span class="icon"><i class="fas fa-heart"></i></span>
                    <span>Support <?php echo h(explode(' ', $link['name'])[0]); ?></span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer has-background-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-8">
                    <div class="content">
                        <h4 class="title is-5 has-text-white">About This Page</h4>
                        <p>This page serves as a memorial to the important work done by <?php echo h($eytb_data['name']); ?> in supporting men's mental health in the Clarence Valley region.</p>
                        <p>If you or someone you know is struggling with mental health issues, please reach out for help:</p>
                        <ul>
                            <li><strong class="has-text-white">Lifeline:</strong> 13 11 14</li>
                            <li><strong class="has-text-white">Beyond Blue:</strong> 1300 22 4636</li>
                            <li><strong class="has-text-white">MensLine Australia:</strong> 1300 78 99 78</li>
                        </ul>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="content has-text-right-desktop">
                        <p class="has-text-grey-light">
                            Copyright &copy; <?php echo getCurrentYear(); ?> All rights reserved.<br>
                            <strong class="has-text-white"><?php echo h(SITE_COMPANY); ?></strong> and any of <strong class="has-text-white"><?php echo h(SITE_COMPANY); ?></strong> subsidiaries are registered under: ABN:
                            <strong class="has-text-warning"><a href="<?php echo SITE_ABN_URL; ?>" target="_blank"><?php echo SITE_ABN; ?></a></strong><br>
                            <br>Powered By: <a href="<?php echo SITE_URL; ?>" target="_blank"><?php echo h(SITE_NAME); ?></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
        $navbarBurgers.forEach( el => {
            el.addEventListener('click', () => {
                const target = el.dataset.target;
                const $target = document.getElementById(target);
                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');
            });
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    });
</script>
</body>
</html>
