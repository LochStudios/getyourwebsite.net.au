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
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="<?php echo h($page_description); ?>">
    <link rel="icon" href="assets/images/lochstudios.png" type="image/png" />
    <link rel="stylesheet" href="<?php echo BULMA_CSS_URL; ?>">
    <link rel="stylesheet" href="<?php echo FONTAWESOME_CSS_URL; ?>">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <!-- Main Navigation Bar -->
    <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="./">
                    <img src="assets/images/lochstudios.png" alt="LochStudios Logo" width="28" height="28">
                    <span class="ml-2"><?php echo h(SITE_COMPANY); ?></span>
                </a>
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="mainNav">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div id="mainNav" class="navbar-menu">
                <div class="navbar-start">
                    <a href="eytbinc.php" class="navbar-item is-active">EYTB Inc.</a>
                    <a href="index.php" class="navbar-item">Back Home</a>
                </div>
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a href="<?php echo $social_media['facebook']; ?>" target="_blank" class="button is-small is-dark">
                                <span class="icon"><i class="fab fa-facebook-f"></i></span>
                            </a>
                            <a href="<?php echo $social_media['twitter']; ?>" target="_blank" class="button is-small is-dark">
                                <span class="icon"><i class="fab fa-x-twitter"></i></span>
                            </a>
                            <a href="<?php echo $social_media['github']; ?>" target="_blank" class="button is-small is-dark">
                                <span class="icon"><i class="fab fa-github"></i></span>
                            </a>
                            <a href="<?php echo $social_media['email']; ?>" class="button is-small is-dark">
                                <span class="icon"><i class="fas fa-envelope"></i></span>
                            </a>
                            <a href="<?php echo $social_media['phone']; ?>" class="button is-small is-dark">
                                <span class="icon"><i class="fas fa-phone"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="full-width-content">
        <!-- Banner Hero Section -->
        <section class="hero is-large" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.7)), url('assets/images/eytbinc-banner.jpg') center/cover;">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title is-size-1 has-text-white">
                        <?php echo h($eytb_data['name']); ?>
                    </h1>
                    <p class="subtitle is-size-4 has-text-white">
                        Supporting Men's Mental Health in the Clarence Valley
                    </p>
                </div>
            </div>
        </section>
        
        <!-- Main Content Section -->
        <section class="section content-section">
            <div class="container">
                <!-- Introduction -->
                <div class="columns is-vcentered mb-6">
                    <div class="column is-8">
                        <h2 class="title is-2 main-title">What was "<?php echo h($eytb_data['name']); ?>"?</h2>
                        <p class="subtitle main-subtitle">
                            <?php echo h($eytb_data['name']); ?> was an annual event to celebrate blokes while raising money, awareness of and access to Men's Mental Health issues and services in the Clarence Valley, NSW.
                        </p>
                    </div>
                    <div class="column is-4 has-text-centered">
                        <div class="box has-background-primary has-text-white">
                            <p class="title is-size-2 has-text-white">
                                <?php echo h($eytb_data['funds_raised']); ?>
                            </p>
                            <p class="subtitle has-text-white">Total Funds Raised</p>
                        </div>
                    </div>
                </div>
                
                <!-- What They Did Section -->
                <div class="content mt-6">
                    <div class="columns">
                        <div class="column is-8">
                            <h3 class="title is-4">What did they do?</h3>
                            <div class="content is-medium">
                                <p><?php echo h($eytb_data['description']); ?></p>
                                
                                <div class="box has-background-info-light mt-5">
                                    <h4 class="title is-5 has-text-white">
                                        <span class="icon"><i class="fas fa-heart"></i></span>
                                        Impact Achievement
                                    </h4>
                                    <p class="is-size-5 has-text-white">
                                        In their tenure they raised over <strong class="has-text-white"><?php echo h($eytb_data['funds_raised']); ?></strong> for providers of mental health services for men.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="column is-4">
                            <div class="box">
                                <h4 class="title is-6">Key Facts</h4>
                                <div class="content">
                                    <ul class="fa-ul">
                                        <li><span class="fa-li"><i class="fas fa-map-marker-alt has-text-primary"></i></span><strong>Location:</strong> <?php echo h($eytb_data['location']); ?></li>
                                        <li><span class="fa-li"><i class="fas fa-calendar has-text-primary"></i></span><strong>Type:</strong> Annual Event</li>
                                        <li><span class="fa-li"><i class="fas fa-users has-text-primary"></i></span><strong>Focus:</strong> Men's Mental Health</li>
                                        <li><span class="fa-li"><i class="fas fa-dollar-sign has-text-primary"></i></span><strong>Raised:</strong> <?php echo h($eytb_data['funds_raised']); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Support Section -->
                <div class="section">
                    <div class="container">
                        <div class="has-text-centered mb-6">
                            <h3 class="title is-3">Continue Supporting Men's Mental Health</h3>
                            <p class="subtitle">While EYTB Inc. is no longer active, you can still make a difference</p>
                        </div>
                        
                        <div class="columns is-centered">
                            <?php foreach ($donation_links as $link): ?>
                            <div class="column is-5">
                                <div class="card has-shadow">
                                    <div class="card-content has-text-centered">
                                        <div class="content">
                                            <span class="icon is-large has-text-primary mb-3">
                                                <i class="fas fa-hand-holding-heart fa-3x"></i>
                                            </span>
                                            <h4 class="title is-5"><?php echo h($link['name']); ?></h4>
                                            <p><?php echo h($link['description']); ?></p>
                                            <a href="<?php echo h($link['url']); ?>" target="_blank" class="button is-primary is-medium mt-4">
                                                <span class="icon"><i class="fas fa-external-link-alt"></i></span>
                                                <span>Donate Now</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Call to Action -->
        <section class="hero is-primary">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h3 class="title is-3">Make a Difference Today</h3>
                    <p class="subtitle">Your donation can help save lives and support mental health services for men</p>
                    <div class="buttons is-centered">
                        <?php foreach ($donation_links as $link): ?>
                        <a href="<?php echo h($link['url']); ?>" target="_blank" class="button is-light is-large">
                            <span class="icon"><i class="fas fa-heart"></i></span>
                            <span>Support <?php echo h(explode(' ', $link['name'])[0]); ?></span>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="columns">
                    <div class="column is-8">
                        <div class="content">
                            <h4 class="title is-5">About This Page</h4>
                            <p>This page serves as a memorial to the important work done by <?php echo h($eytb_data['name']); ?> in supporting men's mental health in the Clarence Valley region.</p>
                            <p>If you or someone you know is struggling with mental health issues, please reach out for help:</p>
                            <ul>
                                <li><strong>Lifeline:</strong> 13 11 14</li>
                                <li><strong>Beyond Blue:</strong> 1300 22 4636</li>
                                <li><strong>MensLine Australia:</strong> 1300 78 99 78</li>
                            </ul>
                        </div>
                    </div>
                    <div class="column is-4">
                        <div class="content has-text-right-desktop">
                            <p>
                                Copyright &copy; <?php echo getCurrentYear(); ?> All rights reserved.<br>
                                <strong><?php echo h(SITE_COMPANY); ?></strong> and any of <strong><?php echo h(SITE_COMPANY); ?></strong> subsidiaries are registered under: ABN: 
                                <a href="<?php echo SITE_ABN_URL; ?>" target="_blank"><?php echo SITE_ABN; ?></a><br>
                                <br />Powered By: <a href="<?php echo SITE_URL; ?>" target="_blank"><?php echo h(SITE_NAME); ?></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
        
        // Add a click event on each of them
        $navbarBurgers.forEach( el => {
            el.addEventListener('click', () => {
                // Get the target from the "data-target" attribute
                const target = el.dataset.target;
                const $target = document.getElementById(target);
                
                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');
            });
        });

        // Smooth scrolling for any internal links
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
