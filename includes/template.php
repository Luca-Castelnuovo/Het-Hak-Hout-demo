<?php

function page_header($title = 'Overlangbroek', $active_menu_item = 'home')
{
    $home;
    $vogels;
    $wandelen;

    switch ($active_menu_item) {
        case 'home':
            $home = 'class="active"';

            break;
        case 'vogels':
            $vogels = 'class="active"';

            break;
        case 'wandelen':
            $wandelen = 'class="active"';

            break;
    }

    return <<<HTML
    <!DOCTYPE html>
    <html>
        <head>
            <!-- Config -->
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta name="google" content="notranslate" />
            <link rel="manifest" href="/site.webmanifest" />
            <title>{$title}</title>

            <!-- SEO -->
            <link href="https://overlangbroek.lucacastelnuovo.nl" rel="canonical" />
            <meta
                name="keywords"
                content="overlangbroek, essenhakhout, wandelen, wandelgebied"
            />
            <meta
                content="Overlangbroek heeft een prachtig wandelgebied."
                name="description"
            />

            <!-- Icons -->
            <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

            <!-- Styles -->
            <link rel="stylesheet" href="/static/css/main.css" />
            <link
                href="https://fonts.googleapis.com/icon?family=Material+Icons"
                rel="stylesheet"
            />
        </head>

        <body>
            <nav role="navigation" class="color-primary--background hover-disabled">
                <div class="nav-wrapper container">
                    <a href="/" class="brand-logo">Overlangbroek</a>

                    <a
                        href="#"
                        data-target="menu-mobile"
                        class="right sidenav-trigger"
                        ><i class="material-icons">menu</i></a
                    >

                    <ul id="menu-desktop" class="right hide-on-med-and-down">
                        <li {$home}><a href="/">Home</a></li>
                        <li {$vogels}><a href="/vogels">Vogels</a></li>
                        <li {$wandelen}><a href="/wandelen">Wandelen</a></li>
                    </ul>

                    <ul id="menu-mobile" class="sidenav">
                        <li {$home}><a href="/">Home</a></li>
                        <li {$vogels}><a href="/vogels">Vogels</a></li>
                        <li {$wandelen}><a href="/wandelen">Wandelen</a></li>
                    </ul>
                </div>
            </nav>

            <div class="container">
                <div class="section">
HTML;
}

function page_footer()
{
    return <<<'HTML'
        </div>
    </div>

    <script src="https://cdn.lucacastelnuovo.nl/analytics.lucacastelnuovo.nl/js/dynamic/tracking.27.js?site_id=2"></script>
    <script src="https://cdn.lucacastelnuovo.nl/general/js/materialize.js"></script>
    <script src="/static/js/main.js"></script>

    <script>
    if ("serviceWorker" in navigator) {
        if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker
          .register("pwabuilder-sw.js", {
            scope: "./"
          });
        }
    }
    </script>
</body>
</html>
HTML;
}
