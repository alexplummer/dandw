<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <cms:editable name='page_title' type='text'>Who we are</cms:editable>
    </title>
    <link rel="author" href="humans.txt">
    <link rel="canonical" href="#">
    <link rel="dns-prefetch" href="http://fonts.googleapis.com/">
    <meta name="description" content="Practical and friendly advice covering divorce and more">
    <meta name="robots" content="index, follow">
    <meta property="fb:app_id" content="123456789">
    <meta property="og:url" content="www.divorceandwellbeing.co.uk">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Divorce and Wellbeing">
    <meta property="og:description" content="Practical and friendly advice covering divorce and more">
    <meta property="og:site_name" content="Divorce and Wellbeing">
    <meta property="og:locale" content="en_US">
    <meta property="article:author" content="">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@site_account">
    <meta name="twitter:creator" content="@individual_account">
    <meta name="twitter:url" content="www.divorceandwellbeing.co.uk">
    <meta name="twitter:title" content="Divorce and Wellbeing">
    <meta name="twitter:description" content="Practical and friendly advice covering divorce and more">
    <meta name="twitter:image" content="https://example.com/image.jpg">
    <meta name="apple-mobile-web-app-title" content="Divorce and Wellbeing">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Merriweather+Sans:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="<cms:show k_site_link />style/style.css"/>
    <link rel="apple-touch-icon" sizes="180x180" href="<cms:show k_site_link />img/brand/favicons/apple-touch-icon.png?v=6">
    <link rel="icon" type="image/png" href="<cms:show k_site_link />img/brand/favicons/favicon-32x32.png?v=6" sizes="32x32">
    <link rel="icon" type="image/png" href="<cms:show k_site_link />img/brand/favicons/favicon-16x16.png?v=6" sizes="16x16">
    <link rel="manifest" href="<cms:show k_site_link />img/brand/favicons/manifest.json?v=6">
    <link rel="mask-icon" href="<cms:show k_site_link />img/brand/favicons/safari-pinned-tab.svg?v=6" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-TileImage" content="img/brand/favicons/mstile-144x144.png?v=6">
    <meta name="msapplication-config" content="img/brand/favicons/browserconfig.xml?v=6">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <nav class="nav-mobile">
        <nav><a href="<cms:show k_site_link />index.php">Home</a><a href="<cms:show k_site_link />about.php">About</a><a href="<cms:show k_site_link />contact.php">Contact</a><a href="<cms:show k_site_link />news.php">News</a><a href="<cms:show k_site_link />who-we-are.php">Who we are</a><a href="<cms:show k_site_link />wellbeing.php">Wellbeing</a>
        </nav>
        <div class="social">
            <a class="social-fb" href="https://www.facebook.com/Divorce-and-Wellbeing-1781847755397293/" target="_blank"></a>
            <a class="social-tw" href="https://twitter.com/dwb3757" target="_blank"></a>
            <a class="social-li" href="https://www.linkedin.com/company/divorce-and-wellbeing" target="_blank"></a>
            <a class="social-im" href="https://www.instagram.com/divorceandwellbeing/?hl=en" target="_blank"></a>
        </div>
    </nav>
    <header>
        <section>
            <a href="<cms:show k_site_link />index.php">
                <img class="logo-main" src="<cms:show k_site_link />img/brand/logo-main.png" />
            </a>
            <nav><a href="<cms:show k_site_link />index.php">Home</a><a href="<cms:show k_site_link />about.php">About</a><a href="<cms:show k_site_link />contact.php">Contact</a><a href="<cms:show k_site_link />news.php">News</a><a href="<cms:show k_site_link />who-we-are.php">Who we are</a><a href="<cms:show k_site_link />wellbeing.php">Wellbeing</a>
            </nav>
            <p class="icon-menu"></p>
            <div class="social">
                <a class="social-fb" href="https://www.facebook.com/Divorce-and-Wellbeing-1781847755397293/" target="_blank"></a>
                <a class="social-tw" href="https://twitter.com/dwb3757" target="_blank"></a>
                <a class="social-li" href="https://www.linkedin.com/company/divorce-and-wellbeing" target="_blank"></a>
                <a class="social-im" href="https://www.instagram.com/divorceandwellbeing/?hl=en" target="_blank"></a>
            </div>
        </section>
    </header>
    <cms:template title="Who we are">
    </cms:template>
    <main>
        <section class="who-we-are">
            <div class="inner">
                <article>
                    <h1><cms:editable name='whoweare_header' type='text'>Who we are</cms:editable></h1>
                    <p>
                        <cms:editable name='whoweare_description' type='text'>Here is some information about the people who run Divorce and Wellbeing:</cms:editable>
                    </p>
                </article>
            </div>
            <div class="inner">
                <div class="left">
                    <img src="<cms:show k_site_link />img/wwa-ebru.jpg" />
                    <h2>Ebru Avcioglu</h2>
                    <cms:editable name='ebru_description' type='nicedit'>
                        <p>Ebru is a well-being consultant dedicated to helping people overcome their relationship challenges. She takes a holistic approach to providing practical guidance and promotes wellbeing to achieve successful outcomes. She encourages
                            a positive frame of mind to ensure you identify and maintain focus on what matters most.
                            <br>Ebru received coaching training at City University London and previously developed her career as a commercially-oriented scientist attaining a PhD in environmental engineering and a MSc in renewable energy. She has published
                            numerous widely read articles in well-respected academic journals.</cms:editable>
                    </p>
                    <cms:editable name='ebru_link' type='nicedit'><a class="social-li" href="https://www.linkedin.com/in/ebru-avcioglu-8744b822/">https://www.linkedin.com/in/ebru-avcioglu-8744b822/</a>
                    </cms:editable>
                </div>
                <div class="right">
                    <img src="<cms:show k_site_link />img/wwa-jude.jpg" />
                    <h2>Judith Benson</h2>
                    <cms:editable name='jude_description' type='nicedit'>
                        <p>Judith is a Barrister who combines her extensive experience in the criminal courts- including domestic violence and controlling and coercive behaviour - with her personal experience of divorce, separation and life as a single Mother.
                            <br>Adopting a holistic approach, she helps you negotiate the legal side of divorce or separation, guiding you to plan a strategy where you will decide together whether to involve or avoid the courts.</cms:editable>
                    </p>
                    <cms:editable name='jude_link' type='nicedit'>
                    </cms:editable>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <section>
            <div class="inner">
                <nav><a href="<cms:show k_site_link />index.php">Home</a><a href="<cms:show k_site_link />about.php">About</a><a href="<cms:show k_site_link />contact.php">Contact</a><a href="<cms:show k_site_link />news.php">News</a><a href="<cms:show k_site_link />who-we-are.php">Who we are</a><a href="<cms:show k_site_link />wellbeing.php">Wellbeing</a>
                </nav>
                <div class="brand-legal">
                    <img src="<cms:show k_site_link />img/brand/logo-white.png" />
                    <p>© Divorce and Wellbeing 2016<a href="<cms:show k_site_link />legal.php">Terms and Conditions</a>
                    </p>
                </div>
                <div class="contact-social">
                    <div class="social">
                        <a class="social-fb" href="https://www.facebook.com/Divorce-and-Wellbeing-1781847755397293/" target="_blank"></a>
                        <a class="social-tw" href="https://twitter.com/dwb3757" target="_blank"></a>
                        <a class="social-li" href="https://www.linkedin.com/company/divorce-and-wellbeing" target="_blank"></a>
                        <a class="social-im" href="https://www.instagram.com/divorceandwellbeing/?hl=en" target="_blank"></a>
                    </div><a class="email" href="mailto:info@divorceandwellbeing.co.uk">info@divorceandwellbeing.co.uk</a><a class="phone" href="tel:08455443757">08455443757</a>
                </div>
            </div>
        </section>
    </footer>
    <script src="<cms:show k_site_link />script/script.js"></script>
</body>

</html>
<?php COUCH::invoke(); ?>