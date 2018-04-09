      <!doctype html>
<html class="no-js" lang="">
    <head>
      <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MRJ5ZRM');</script>
        <!-- End Google Tag Manager -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php wp_title(); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">


        <!-- Place favicon.ico in the root directory -->


        <?php wp_head(); ?>

    </head>
    <body>
      <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MRJ5ZRM"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->

        <header>
            <a id="logo" href="/">&lt;e@gle&gt;</a>
            <span id="menu-icon">MENU | &#9776;</span>
        </header>

        <nav>
            <!--<ul id="topnav">
                <li><a href="http://localhost/localwp.com/">HOME</a></li>
                <li><a href="http://localhost/localwp.com/about/">ABOUT</a></li>
                <li><a href="http://localhost/localwp.com/portfolio/">PORTFOLIO</a></li>
                <li><a href="http://localhost/localwp.com/contact/">CONTACT</a></li>
                <li><a href="http://localhost/localwp.com/blog/">BLOG</a></li>
                <li><a class="close-menu" style="cursor:pointer;font-size:60px;">&times;</a></li>
                <li class="hidden">SPARE</li>
            </ul>
-->
            <?php wp_nav_menu(
              array(
                'theme_location' => 'header-menu'
              )
            ); ?>

        </nav>
