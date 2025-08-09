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
  <link rel="stylesheet" href="<?php echo BULMA_CSS_URL; ?>">
  <link rel="stylesheet" href="<?php echo FONTAWESOME_CSS_URL; ?>">
  <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="./">
        <img src="assets/images/lochstudios.png" width="28" height="28" alt="LochStudios Logo">
        <span class="ml-2 has-text-weight-bold"><?php echo h(SITE_NAME); ?></span>
      </a>
      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasic">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
    <div id="navbarBasic" class="navbar-menu">
      <div class="navbar-end">
        <div class="navbar-item">
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a href="<?php echo $social_media['facebook']; ?>" target="_blank" class="button is-small is-light">
              <span class="icon"><i class="fab fa-facebook-f"></i></span>
            </a>
            <a href="<?php echo $social_media['twitter']; ?>" target="_blank" class="button is-small is-light">
              <span class="icon"><i class="fab fa-x-twitter"></i></span>
            </a>
            <a href="<?php echo $social_media['instagram']; ?>" target="_blank" class="button is-small is-light">
              <span class="icon"><i class="fab fa-instagram"></i></span>
            </a>
            <a href="<?php echo $social_media['github']; ?>" target="_blank" class="button is-small is-light">
              <span class="icon"><i class="fab fa-github"></i></span>
            </a>
            <a href="<?php echo $social_media['email']; ?>" class="button is-small is-light">
              <span class="icon"><i class="fas fa-envelope"></i></span>
            </a>
            <a href="<?php echo $social_media['phone']; ?>" class="button is-small is-light">
              <span class="icon"><i class="fas fa-phone"></i></span>
            </a>
          </div>
        </div>
      </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section class="hero is-primary is-medium">
    <div class="hero-body">
      <div class="container">
        <h1 class="title is-size-1"><?php echo h(SITE_NAME); ?></h1>
        <p class="subtitle is-size-4"><?php echo h($page_description); ?></p>
        <div class="buttons">
          <a href="#portfolio" class="button is-primary is-inverted is-outlined is-medium">
            <span class="icon"><i class="fas fa-eye"></i></span>
            <span>View Our Work</span>
          </a>
          <a href="<?php echo $social_media['email']; ?>" class="button is-light is-medium">
            <span class="icon"><i class="fas fa-envelope"></i></span>
            <span>Get Started</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio" class="section">
    <div class="container">
      <div class="has-text-centered mb-6">
        <h2 class="title is-size-2">Our Portfolio</h2>
        <p class="subtitle is-size-5">Websites we've built that are still thriving online</p>
      </div>
      
      <div class="columns is-multiline">
        <?php foreach ($websites as $website): ?>
        <div class="column is-3-desktop is-6-tablet">
          <div class="card has-shadow">
            <div class="card-image">
              <a href="<?php echo h($website['url']); ?>" <?php echo (!isset($website['external']) || $website['external'] !== false) ? 'target="_blank"' : ''; ?>>
                <figure class="image">
                  <img class="site-thumbnail" src="<?php echo h($website['image']); ?>" alt="<?php echo h($website['alt']); ?>" loading="lazy">
                </figure>
              </a>
            </div>
            <div class="card-content">
              <div class="media">
                <div class="media-content">
                  <p class="title is-5"><?php echo $website['name']; ?></p>
                  <?php if (isset($website['description'])): ?>
                  <p class="subtitle is-6 has-text-grey"><?php echo h($website['description']); ?></p>
                  <?php endif; ?>
                </div>
              </div>
              <div class="content">
                <a href="<?php echo h($website['url']); ?>" <?php echo (!isset($website['external']) || $website['external'] !== false) ? 'target="_blank"' : ''; ?> class="button is-primary is-small is-fullwidth">
                  <span class="icon"><i class="fas fa-external-link-alt"></i></span>
                  <span>Visit Website</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="section has-background-light">
    <div class="container">
      <div class="columns is-vcentered">
        <div class="column is-6">
          <h2 class="title is-size-2">Why Choose Us?</h2>
          <div class="content is-medium">
            <p>We've been creating exceptional websites for years, helping businesses and individuals establish their online presence with modern, responsive designs.</p>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check has-text-success"></i></span>Modern, responsive designs</li>
              <li><span class="fa-li"><i class="fas fa-check has-text-success"></i></span>Fast loading times</li>
              <li><span class="fa-li"><i class="fas fa-check has-text-success"></i></span>SEO optimized</li>
              <li><span class="fa-li"><i class="fas fa-check has-text-success"></i></span>Ongoing support</li>
            </ul>
          </div>
        </div>
        <div class="column is-6">
          <div class="columns is-multiline has-text-centered">
            <div class="column is-6">
              <div class="box">
                <p class="title is-size-1 has-text-primary"><?php echo count($websites); ?>+</p>
                <p class="subtitle">Websites Built</p>
              </div>
            </div>
            <div class="column is-6">
              <div class="box">
                <p class="title is-size-1 has-text-primary">100%</p>
                <p class="subtitle">Client Satisfaction</p>
              </div>
            </div>
            <div class="column is-6">
              <div class="box">
                <p class="title is-size-1 has-text-primary">24/7</p>
                <p class="subtitle">Support Available</p>
              </div>
            </div>
            <div class="column is-6">
              <div class="box">
                <p class="title is-size-1 has-text-primary">Fast</p>
                <p class="subtitle">Delivery</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="columns">
        <div class="column is-6">
          <h3 class="title is-4">Contact Us</h3>
          <div class="buttons mb-4">
            <a href="<?php echo $social_media['facebook']; ?>" target="_blank" class="button is-outlined">
              <span class="icon"><i class="fab fa-facebook-f"></i></span>
            </a>
            <a href="<?php echo $social_media['twitter']; ?>" target="_blank" class="button is-outlined">
              <span class="icon"><i class="fab fa-x-twitter"></i></span>
            </a>
            <a href="<?php echo $social_media['instagram']; ?>" target="_blank" class="button is-outlined">
              <span class="icon"><i class="fab fa-instagram"></i></span>
            </a>
            <a href="<?php echo $social_media['github']; ?>" target="_blank" class="button is-outlined">
              <span class="icon"><i class="fab fa-github"></i></span>
            </a>
            <a href="<?php echo $social_media['email']; ?>" class="button is-outlined">
              <span class="icon"><i class="fas fa-envelope"></i></span>
            </a>
            <a href="<?php echo $social_media['phone']; ?>" class="button is-outlined">
              <span class="icon"><i class="fas fa-phone"></i></span>
            </a>
          </div>
          <div class="content">
            <p><strong>Mail Us</strong>: <?php echo h(BUSINESS_ADDRESS); ?></p>
            <p><strong>Phone Us</strong>: <a href="tel:<?php echo SITE_PHONE; ?>"><?php echo formatPhoneForDisplay(SITE_PHONE); ?></a></p>
            <p><strong>International</strong>: <a href="tel:<?php echo SITE_PHONE_INTL; ?>"><?php echo SITE_PHONE_INTL; ?></a></p>
            <p><strong>In the phone menu; option 4 or extension 5000</strong></p>
            <p><strong>Direct Line</strong>: <a href="tel:<?php echo SITE_PHONE_DIRECT; ?>"><?php echo formatPhoneForDisplay(SITE_PHONE_DIRECT); ?></a></p>
            <p>Send us a <strong>FAX</strong> at this number: <?php echo SITE_FAX; ?></p>
          </div>
        </div>
        <div class="column is-6">
          <div class="content has-text-right-desktop">
            <h4 class="title is-5"><?php echo h(SITE_COMPANY); ?></h4>
            <p>Professional web development services in Australia</p>
            <hr>
            <p>Copyright &copy; <?php echo getCurrentYear(); ?> All rights reserved.<br>
            <strong><?php echo h(SITE_COMPANY); ?></strong> and any of <strong><?php echo h(SITE_COMPANY); ?></strong> subsidiaries are registered under<br>
            ABN: <a href="<?php echo SITE_ABN_URL; ?>" target="_blank"><?php echo SITE_ABN; ?></a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

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

    // Smooth scrolling for anchor links
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
