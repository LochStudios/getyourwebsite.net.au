<?php
/**
 * Website Configuration File
 * GetYourWebsite.net.au
 * 
 * This file contains common configuration settings
 * and utility functions for the website.
 */

// Website Information
define('SITE_NAME', 'GetYourWebsite');
define('SITE_COMPANY', 'LochStudios');
define('SITE_URL', 'https://getyourwebsite.net.au');
define('SITE_EMAIL', 'make@getyourwebsite.net.au');
define('SITE_PHONE_AU', '+61256323092');
define('SITE_PHONE_AU_MOBILE', '+61480001064');
define('SITE_PHONE_NZ', '+6498731233');
define('SITE_PHONE_US', '+13158796488');
define('SITE_PHONE_UK', '+442080899548');
define('SITE_FAX', '(02) 5632-3095');
define('SITE_ABN', '20 447 022 747');
define('SITE_ABN_URL', 'https://abr.business.gov.au/ABN/View/20447022747');

// Business Address
define('BUSINESS_ADDRESS', 'PO Box 219, South Grafton, New South Wales, 2460, Australia');

// Social Media Links
$social_media = [
    'facebook' => 'https://www.facebook.com/lochstudios/',
    'twitter' => 'https://twitter.com/LochStudios',
    'instagram' => 'https://www.instagram.com/lochstudiosau/',
    'github' => 'https://github.com/LochStudios',
    'email' => 'mailto:' . SITE_EMAIL,
    'phone' => 'tel:' . SITE_PHONE_AU
];

// CDN URLs for latest versions
define('BULMA_CSS_URL', 'https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css');
define('FONTAWESOME_CSS_URL', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css');

/**
 * Get current year for copyright
 */
function getCurrentYear() {
    return date('Y');
}

/**
 * Sanitize output for HTML
 */
function h($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/**
 * Generate page title
 */
function getPageTitle($pageTitle = '') {
    $baseTitle = SITE_NAME . ' | ' . SITE_COMPANY;
    return !empty($pageTitle) ? $pageTitle . ' | ' . $baseTitle : $baseTitle;
}

/**
 * Generate meta description
 */
function getMetaDescription($description = '') {
    $defaultDescription = 'Professional web development services by ' . SITE_COMPANY . '. Custom websites, modern designs, and ongoing support.';
    return !empty($description) ? $description : $defaultDescription;
}

/**
 * Format phone number for display with country-specific formatting
 */
function formatPhoneForDisplay($phone, $country = '') {
    // Remove tel: prefix if present
    $phone = str_replace(['tel:', 'tel://'], '', $phone);
    
    // Format based on country
    switch($country) {
        case 'AU':
            // Australia: (02) 5632-3092
            if (strpos($phone, '+61') === 0) {
                $number = substr($phone, 3);
                $areaCode = '0' . substr($number, 0, 1);
                $localNumber = substr($number, 1);
                return '(' . $areaCode . ') ' . substr($localNumber, 0, 4) . '-' . substr($localNumber, 4);
            }
            break;
        case 'AU_MOBILE':
            // Australian Mobile: 0480001064
            if (strpos($phone, '+61') === 0) {
                $number = '0' . substr($phone, 3);
                return $number;
            }
            break;
        case 'NZ':
            // New Zealand: +64 9 873 1233
            if (strpos($phone, '+64') === 0) {
                $number = substr($phone, 3);
                return '+64 ' . substr($number, 0, 1) . ' ' . substr($number, 1, 3) . ' ' . substr($number, 4);
            }
            break;
        case 'US':
            // United States: +1 (315) 879-6488
            if (strpos($phone, '+1') === 0) {
                $number = substr($phone, 2);
                return '+1 (' . substr($number, 0, 3) . ') ' . substr($number, 3, 3) . '-' . substr($number, 6);
            }
            break;
        case 'UK':
            // United Kingdom: +44 2080 899 548
            if (strpos($phone, '+44') === 0) {
                $number = substr($phone, 3);
                return '+44 ' . substr($number, 0, 4) . ' ' . substr($number, 4, 3) . ' ' . substr($number, 7);
            }
            break;
    }
    
    return $phone;
}

/**
 * Check if current page is active
 */
function isActivePage($pageName) {
    $currentPage = basename($_SERVER['PHP_SELF'], '.php');
    return $currentPage === $pageName;
}

/**
 * Generate navigation item class
 */
function getNavClass($pageName) {
    return isActivePage($pageName) ? 'navbar-item is-active' : 'navbar-item';
}

/**
 * Portfolio websites data
 */
function getPortfolioWebsites() {
    return [
        [
            'name' => 'LochStudios',
            'url' => 'https://lochstudios.com/',
            'image' => 'assets/images/sites/lochstudios.jpeg',
            'alt' => 'LochStudios',
            'description' => 'Professional software development and IT services'
        ],
        [
            'name' => 'FourFlavors',
            'url' => 'https://fourflavors.net/',
            'image' => 'assets/images/sites/fourflavors.jpeg',
            'alt' => 'FourFlavors',
            'description' => 'Online radio station'
        ],
        [
            'name' => 'GamingForAustralia',
            'url' => 'https://gamingforaustralia.com.au/',
            'image' => 'assets/images/sites/gamingforaustralia.jpeg',
            'alt' => 'GamingForAustralia',
            'description' => 'Australian gaming community hub'
        ],
        [
            'name' => 'BotOfTheSpecter',
            'url' => 'https://botofthespecter.com/',
            'image' => 'assets/images/sites/botofthespecter.jpeg',
            'alt' => 'BotOfTheSpecter',
            'description' => 'Twitch bot and streaming tools'
        ],
        [
            'name' => 'gfaUnDead',
            'url' => 'https://gfaundead.stream/',
            'image' => 'assets/images/sites/gfaundead.jpeg',
            'alt' => 'gfaUnDead',
            'description' => 'Gaming and streaming content'
        ],
        [
            'name' => 'LS Computer Repair<br>(GraftonIT)',
            'url' => 'https://lscomputerrepair.com/',
            'image' => 'assets/images/sites/lscomputerrepair.jpeg',
            'alt' => 'LS Computer Repair',
            'description' => 'Computer repair and IT services'
        ],
        [
            'name' => 'SentralNetwork',
            'url' => 'https://sentral.network/',
            'image' => 'assets/images/sites/sentral.jpeg',
            'alt' => 'SentralNetwork',
            'description' => 'Network services and solutions'
        ],
        [
            'name' => 'Martha\'s Creations',
            'url' => 'https://marthascreations.com/',
            'image' => 'assets/images/sites/marthascreations.jpeg',
            'alt' => 'Martha\'s Creations',
            'description' => 'Handmade crafts and creative services'
        ],
        [
            'name' => 'Mr. Badly Productions',
            'url' => 'https://mrbadly.com/',
            'image' => 'assets/images/sites/mrbadly.jpeg',
            'alt' => 'Mr. Badly Productions',
            'description' => 'Media production and content creation'
        ],
        [
            'name' => 'Nourish My Heart',
            'url' => 'https://nourishmyheart.net/',
            'image' => 'assets/images/sites/nourishmyheart.jpeg',
            'alt' => 'Nourish My Heart',
            'description' => 'Health and wellness services'
        ],
        [
            'name' => 'Counselling For The Valley',
            'url' => 'https://counsellingforthevalley.com.au/',
            'image' => 'assets/images/sites/counsellingforthevalley.jpeg',
            'alt' => 'Counselling For The Valley',
            'description' => 'Professional counselling services'
        ],
        [
            'name' => 'Producer Jayce',
            'url' => 'https://producerjayce.com/',
            'image' => 'assets/images/sites/producerjayce.jpeg',
            'alt' => 'Producer Jayce',
            'description' => 'Music production and audio services'
        ],
        [
            'name' => 'Event Yeah The Boys Inc.',
            'url' => 'eytbinc.php',
            'image' => 'assets/images/sites/eytbinc.jpeg',
            'alt' => 'Event Yeah The Boys Inc.',
            'external' => false,
            'description' => 'Men\'s mental health awareness charity'
        ]
    ];
}
?>
