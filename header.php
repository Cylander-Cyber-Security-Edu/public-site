<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="HandheldFriendly" content="true" />
  <meta name="author" content="Cylander">
  <title>Cylander</title>
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="https://use.typekit.net/lpn2tla.css">
  <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="256x256" href="favicon/android-chrome-256x256.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="194x194" href="favicon/favicon-194x194.png">
  <link rel="manifest" href="favicon/site.webmanifest">
  <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#7C3B88">
  <meta name="apple-mobile-web-app-title" content="Cylander">
  <meta name="application-name" content="Cylander">
  <meta name="msapplication-TileColor" content="#7c3b88">
  <meta name="msapplication-TileImage" content="favicon/mstile-150x150.png">
  <meta name="msapplication-TileImage" content="favicon/mstile-144x144.png">
  <meta name="msapplication-TileImage" content="favicon/mstile-310x310.png">
  <meta name="theme-color" content="#ffffff">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Cylander",
      "url": "http://cylander.be/",
      "image": "http://cylander.be/img/logo-cylander.svg",
      "logo": "http://cylander.be/img/logo-cylander.svg",
      "description": "Cylander is a non profit association dedicated to Cyber Security Knowledge",
      "telephone": "",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "",
        "addressLocality": "",
        "postalCode": "",
        "addressCountry": "Belgique"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "",
        "longitude": ""
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "General",
        "telephone": "",
        "contactType": "customer service",
        "areaServed": "BE",
        "availableLanguage": ["en", "fr", "nl"]
      },
      "sameAs": "https://www.linkedin.com/cylander"
    }
  </script>


</head>

<body class="<?php echo $class ?? ""; ?>">
  <div id="page" class="site">
    <header id="site-header">
      <div class="header-container">

        <!-- #site-branding -->
        <div class="site-branding">
          <p class="site-title"><a href="/" rel="home">Cylander</a></p>
        </div>

        <!-- #site-navigation -->
        <nav id="site-navigation">
          <!-- .menu-toggle -->
          <button class="menu-toggle collapse" aria-controls="primary-menu" id="primary-menu-toggle" aria-expanded="false">
            <span>Menu</span>
          </button>

          <div id="main-menu-toggle-wrapper">
            <div class="inner-toggle">

              <!-- .primary-menu-wrapper -->
              <div class="primary-menu-wrapper">
                <div class="menu-main-menu-container">
                  <ul id="primary-menu" class="primary-menu nav-menu" aria-expanded="false">
                    <li class="menu-item"><a href="/#our-mission">Our mission</a></li>
                    <li class="menu-item"><a href="/#educate">Educate</a></li>
                    <li class="menu-item"><a href="/#inform">Inform</a></li>
                    <li class="menu-item"><a href="/#train">Train</a></li>
                    <li class="menu-item"><a href="/#the-future-short-term">The future Short term</a></li>
                    <li class="menu-item"><a href="/#partners">Partners</a></li>
                    <li class="menu-item"><a href="/#contact">Contact</a></li>
                  </ul>
                </div>
              </div>

              <!-- .secondary-menu-wrapper -->
              <div class="secondary-menu-wrapper">
                <div id="secondary-menu-main-menu-container">
                  <ul id="secondary-menu" class="secondary-menu" aria-expanded="false">
                    <li id="" class="menu-item"><a href="/all-news.php">News</a></li>
                    <li id="" class="menu-item"><a href="#" class="readmore modal-opener" data-modal="modal-partners">Become a partner</a></li>
                  </ul>
                </div>

                <div class="social-container">
                  <div class="menu-social-menu-container">
                    <ul id="menu-social-menu" class="gbl-social-menu">
                      <li id="" class="linkedin"><a href="#" target="_blank">Linkedin</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
