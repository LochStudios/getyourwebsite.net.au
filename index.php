<?php
// Include configuration
require_once 'config.php';

// Page specific configuration
$page_title = getPageTitle();
$page_description = getMetaDescription();
$websites = getPortfolioWebsites();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo h($page_title); ?></title>
  <meta name="description" content="<?php echo h($page_description); ?>">
  <link rel="icon" href="assets/images/lochstudios.png" type="image/png" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="<?php echo INTER_FONT_URL; ?>">
  <link rel="stylesheet" href="<?php echo FONTAWESOME_CSS_URL; ?>">
  <link rel="stylesheet" href="<?php echo asset('assets/css/custom.css'); ?>">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar is-fixed-top modern-navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item no-hover" href="./">
        <img src="assets/images/lochstudios.png" width="28" height="28" alt="LochStudios Logo">
        <span class="ml-2 has-text-weight-bold"><?php echo h(SITE_NAME); ?></span>
      </a>
      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasic">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
    <div id="navbarBasic" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item has-text-weight-medium" href="#portfolio">Portfolio</a>
        <a class="navbar-item has-text-weight-medium" href="#why-us">Why Us</a>
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
            <a href="<?php echo $social_media['instagram']; ?>" target="_blank" class="button is-light is-rounded">
              <span class="icon"><i class="fab fa-instagram"></i></span>
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

  <!-- Hero -->
  <section class="hero is-fullheight hero-gradient">
    <div class="hero-body">
      <div class="container">
        <div class="columns is-vcentered">
          <div class="column is-half">
            <div class="glass-card p-6">
              <img src="assets/images/lochstudios.png" alt="<?php echo h(SITE_NAME); ?>" style="max-width: 200px; margin: 0 auto;">
            </div>
          </div>
          <div class="column is-half">
            <div class="content has-text-white">
              <h1 class="title is-1 has-text-white mb-4">
                Welcome to <span class="has-text-warning"><?php echo h(SITE_NAME); ?></span>
              </h1>
              <h2 class="subtitle is-4 has-text-white-bis mb-5">
                <?php echo h($page_description); ?>
              </h2>
              <div class="buttons">
                <a href="#portfolio" class="button modern-button is-large">
                  <span class="icon"><i class="fas fa-eye"></i></span>
                  <span>View Our Work</span>
                </a>
                <a href="<?php echo $social_media['email']; ?>" class="button is-light is-large is-rounded">
                  <span class="icon"><i class="fas fa-envelope"></i></span>
                  <span>Get Started</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio" class="section section-modern">
    <div class="container">
      <div class="has-text-centered mb-6">
        <h2 class="title is-2 gradient-text mb-4">Our Portfolio</h2>
        <p class="subtitle is-5 has-text-grey">Websites we've built that are still thriving online</p>
      </div>

      <div class="columns is-multiline">
        <?php foreach ($websites as $website): ?>
        <div class="column is-3">
          <div class="card floating-card">
            <div class="card-image">
              <a href="<?php echo h($website['url']); ?>" <?php echo (!isset($website['external']) || $website['external'] !== false) ? 'target="_blank"' : ''; ?>>
                <figure class="image">
                  <img class="site-thumbnail"
                       src="<?php echo h($website['image']); ?>"
                       alt="<?php echo h($website['alt']); ?>"
                       loading="lazy">
                </figure>
              </a>
            </div>
            <div class="card-content">
              <p class="title is-5"><?php echo $website['name']; ?></p>
              <?php if (isset($website['description'])): ?>
              <p class="subtitle is-6 has-text-grey"><?php echo h($website['description']); ?></p>
              <?php endif; ?>
              <a href="<?php echo h($website['url']); ?>" <?php echo (!isset($website['external']) || $website['external'] !== false) ? 'target="_blank"' : ''; ?> class="button is-fullwidth modern-button">
                <span class="icon"><i class="fas fa-external-link-alt"></i></span>
                <span>Visit Website</span>
              </a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section id="why-us" class="section section-modern has-background-light">
    <div class="container">
      <div class="columns is-vcentered">
        <div class="column is-6">
          <h2 class="title is-2 gradient-text mb-5">Why Choose Us?</h2>
          <div class="content">
            <p>We've been creating exceptional websites for years, helping businesses and individuals establish their online presence with modern, responsive designs.</p>
            <ul class="check-list">
              <li>Modern, responsive designs</li>
              <li>Fast loading times</li>
              <li>SEO optimized</li>
              <li>Ongoing support</li>
            </ul>
          </div>
        </div>
        <div class="column is-6">
          <div class="columns is-multiline">
            <div class="column is-half">
              <div class="stat-card">
                <p class="stat-number"><?php echo count($websites); ?>+</p>
                <p class="stat-label">Websites Built</p>
              </div>
            </div>
            <div class="column is-half">
              <div class="stat-card">
                <p class="stat-number">100%</p>
                <p class="stat-label">Client Satisfaction</p>
              </div>
            </div>
            <div class="column is-half">
              <div class="stat-card">
                <p class="stat-number">24/7</p>
                <p class="stat-label">Support Available</p>
              </div>
            </div>
            <div class="column is-half">
              <div class="stat-card">
                <p class="stat-number">Fast</p>
                <p class="stat-label">Delivery</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer has-background-dark">
    <div class="container">
      <div class="columns">
        <div class="column is-6">
          <h3 class="title is-4 has-text-white">Contact Us</h3>
          <div class="buttons mb-4">
            <a href="<?php echo $social_media['facebook']; ?>" target="_blank" class="button is-light is-rounded">
              <span class="icon"><i class="fab fa-facebook-f"></i></span>
            </a>
            <a href="<?php echo $social_media['twitter']; ?>" target="_blank" class="button is-light is-rounded">
              <span class="icon"><i class="fab fa-x-twitter"></i></span>
            </a>
            <a href="<?php echo $social_media['instagram']; ?>" target="_blank" class="button is-light is-rounded">
              <span class="icon"><i class="fab fa-instagram"></i></span>
            </a>
            <a href="<?php echo $social_media['github']; ?>" target="_blank" class="button is-light is-rounded">
              <span class="icon"><i class="fab fa-github"></i></span>
            </a>
            <a href="<?php echo $social_media['email']; ?>" class="button modern-button is-rounded">
              <span class="icon"><i class="fas fa-envelope"></i></span>
              <span>Email Us</span>
            </a>
          </div>
          <div class="content">
            <p><strong class="has-text-white">Mail Us</strong>: <?php echo h(BUSINESS_ADDRESS); ?></p>
            <p><strong class="has-text-white">Australia</strong>: <a href="tel:<?php echo SITE_PHONE_AU; ?>"><?php echo formatPhoneForDisplay(SITE_PHONE_AU, 'AU'); ?></a></p>
            <p><strong class="has-text-white">Australian Mobile/WhatsApp</strong>: <a href="tel:<?php echo SITE_PHONE_AU_MOBILE; ?>"><?php echo formatPhoneForDisplay(SITE_PHONE_AU_MOBILE, 'AU_MOBILE'); ?></a></p>
            <p><strong class="has-text-white">New Zealand</strong>: <a href="tel:<?php echo SITE_PHONE_NZ; ?>"><?php echo formatPhoneForDisplay(SITE_PHONE_NZ, 'NZ'); ?></a></p>
            <p><strong class="has-text-white">United States</strong>: <a href="tel:<?php echo SITE_PHONE_US; ?>"><?php echo formatPhoneForDisplay(SITE_PHONE_US, 'US'); ?></a></p>
            <p><strong class="has-text-white">United Kingdom</strong>: <a href="tel:<?php echo SITE_PHONE_UK; ?>"><?php echo formatPhoneForDisplay(SITE_PHONE_UK, 'UK'); ?></a></p>
            <p>Send us a <strong class="has-text-white">FAX</strong> at this number: <?php echo SITE_FAX; ?></p>
          </div>
        </div>
        <div class="column is-6">
          <div class="content has-text-right-desktop">
            <h4 class="title is-5 has-text-white"><?php echo h(SITE_COMPANY); ?></h4>
            <p>Professional web development services in Australia</p>
            <hr style="background-color: rgba(255,255,255,0.1);">
            <p class="has-text-grey-light">
              Copyright &copy; <?php echo getCurrentYear(); ?> All rights reserved.<br>
              <strong class="has-text-white"><?php echo h(SITE_COMPANY); ?></strong> and any of <strong class="has-text-white"><?php echo h(SITE_COMPANY); ?></strong> subsidiaries are registered under<br>
              ABN: <strong class="has-text-warning"><a href="<?php echo SITE_ABN_URL; ?>" target="_blank"><?php echo SITE_ABN; ?></a></strong>
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
