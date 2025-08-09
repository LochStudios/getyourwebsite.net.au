# GetYourWebsite.net.au

A modern, PHP-powered portfolio website showcasing web development projects by LochStudios.

## Features

- **Modern Design**: Built with Bulma CSS 1.0.4 framework
- **FontAwesome 7.0.0**: Latest icon library for modern iconography  
- **PHP-Powered**: Dynamic content management with PHP
- **Responsive**: Mobile-first design that works on all devices
- **Performance Optimized**: Compressed assets, browser caching, and clean code
- **SEO Friendly**: Semantic HTML, meta tags, and structured data
- **Security**: Protected configuration files and secure headers

## Technology Stack

- **Frontend**: HTML5, CSS3 (Bulma 1.0.4), JavaScript (ES6+)
- **Icons**: FontAwesome 7.0.0
- **Backend**: PHP 7.4+
- **Server**: Apache with mod_rewrite
- **Version Control**: Git

## Project Structure

```
├── .git/                   # Git version control
├── .gitattributes          # Git configuration
├── .htaccess               # Apache configuration and URL rewriting
├── config.php              # Centralized configuration (protected)
├── index.php               # Main portfolio page
├── eytbinc.php             # Event Yeah The Boys Inc. memorial page
├── README.md               # Project documentation
└── assets/
    ├── css/
    │   └── custom.css      # Custom styling and themes
    └── images/
        ├── .htaccess       # Image directory configuration
        ├── eytbinc-banner.jpg  # EYTB page banner image
        ├── eytbinc-logo.jpg    # EYTB logo
        ├── lochstudios.png     # LochStudios logo/favicon
        └── sites/              # Portfolio website thumbnails
            ├── botofthespecter.jpeg
            ├── counsellingforthevalley.jpeg
            ├── eytbinc.jpeg
            ├── fourflavors.jpeg
            ├── gamingforaustralia.jpeg
            ├── gfaundead.jpeg
            ├── lochstudios.jpeg
            ├── lscomputerrepair.jpeg
            ├── marthascreations.jpeg
            ├── mrbadly.jpeg
            ├── nourishmyheart.jpeg
            ├── producerjayce.jpeg
            └── sentral.jpeg
```

## Configuration

The website uses a centralized configuration system in `config.php`:

- Site information (name, company, contact details)
- Social media links
- CDN URLs for external libraries
- Portfolio website data
- Helper functions for security and formatting

## Key Features

### Portfolio Showcase
- Dynamic portfolio grid displaying completed websites
- Hover effects and modern card design
- External link handling with proper targeting
- Lazy loading for optimal performance

### Contact Information
- Multiple contact methods (phone, email, social media)
- Australian business details with ABN
- International contact options
- Structured contact data

### EYTB Memorial Page
- Dedicated page for Event Yeah The Boys Inc.
- Mental health awareness information
- Donation links to continuing charities
- Responsive design with engaging visuals

### Modern PHP Architecture
- Centralized configuration management
- Security-focused design with input sanitization
- Modular code structure for easy maintenance
- SEO-optimized meta tags and content

## Installation

1. Clone the repository
2. Configure your web server to serve PHP files
3. Ensure mod_rewrite is enabled for clean URLs
4. Update `config.php` with your specific details
5. Upload to your web server

## Requirements

- PHP 7.4 or higher
- Apache web server with mod_rewrite
- Modern web browser support

## Browser Support

- Chrome (latest)
- Firefox (latest)  
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Performance Features

- Compressed assets with gzip
- Browser caching for static files
- Optimized images with lazy loading
- Minified CSS and clean HTML output
- CDN delivery for external libraries

## Security Features

- Input sanitization with helper functions
- Protected configuration files
- Security headers via .htaccess
- XSS protection and CSRF prevention
- Secure file access controls

## Updates from Previous Version

### Framework Updates
- Upgraded from Bulma 1.0.0 to 1.0.4
- Updated FontAwesome from 6.4.0 to 7.0.0
- Modern icon replacements (Twitter X icon)

### Architecture Improvements
- Converted from static HTML to dynamic PHP
- Centralized configuration system
- Improved security with input sanitization
- Better SEO with dynamic meta tags

### Design Enhancements
- Modern dark theme with GitHub-inspired colors
- Enhanced hover effects and animations
- Improved mobile responsiveness
- Better accessibility features

### Performance Optimizations
- Lazy loading for images
- Browser caching configuration
- Compressed assets delivery
- Optimized loading sequences

## Contributing

This is a portfolio website for LochStudios. For inquiries about web development services, please contact us through the website.

## License

Copyright © 2025 LochStudios. All rights reserved.
ABN: 20 447 022 747

---

**Built with ❤️ by LochStudios**
