<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <cms:editable name='page_title' type='text'>News Page</cms:editable>
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
    <cms:template title="News story" clonable="1" commentable="1">
    </cms:template>
    <main>
        <section class="news">
            <div class="inner">
                <article>
                    <h1><cms:editable name='article_header' type='text'>Enter the article header here</cms:editable></h1>
                    <div class="details">
                        <time>
                            <cms:date k_page_date format='jS M, y' />
                        </time>
                        <p>
                            <cms:show k_comments_count />&nbsp; Comments</p>
                        <div class="addthis_inline_share_toolbox"></div>
                        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55c6759b75b46ce8"></script>
                    </div>
                    <p>
                        <cms:editable name='article_standfirst' type='text'>Enter the first paragraph here</cms:editable>
                    </p>
                    <cms:editable name='article_img' label='article_img' type='image' show_preview='1' hidden='1'></cms:editable>
                    <img src="<cms:show article_img />" />
                    <cms:editable name='article_body' type='nicedit' buttons='italic,bold,link,unlink,ol,ul,image,subscript,superscript'>
                        <p>Add the rest of the article content here</p>
                    </cms:editable>
                    <h3>Read more:</h3>
                    <cms:editable name='article_readmore' type='nicedit' buttons=''>
                        <ul>
                            <li><a href="<cms:show k_site_link />http://www.familylaw.co.uk/news_and_comment/family-lawyers-gather-in-parliament-to-call-for-no-fault-divorce#.WECKyeaLSUm">Type the name of a link here, select text then click the link button</a>
                            </li>
                        </ul>
                    </cms:editable>
                    <cms:embed 'comment-displays.inc' />
                    <cms:embed 'comment-forms.inc' />
                </article>
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