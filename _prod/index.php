<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <cms:editable name='page_title' type='text'>Home</cms:editable>
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
    <cms:template title="Homepage">
    </cms:template>
    <main class="overlap">
        <div class="hero">
            <cms:editable name='hero_group' label='Hero' desc='Hero section content' type='group'></cms:editable>
            <section>
                <div class="inner">
                    <div class="left oversized">
                        <iframe width="100%" height="315" src="<cms:editable name='hero_youtube' type='text' group='hero_group'>https://www.youtube.com/embed/KbdtYXyaLGw?rel=0</cms:editable>" frameborder="0" allowfullscreen></iframe>
                        <p>
                            <cms:editable name='hero_header' type='text' group='hero_group'>You don’t have to face relationship challenges alone</cms:editable>
                        </p>
                        <a href="<cms:show k_site_link />about.php">
                            <cms:editable name='hero_link' type='text' group='hero_group'>Find out more</cms:editable>
                        </a>
                    </div>
                    <div class="right">
                        <form class="contact-form form-home">
                            <h3><cms:editable name='form_header' type='text' group='hero_group'>Get support today</cms:editable></h3>
                            <p>
                                <cms:editable name='form_description' type='text' group='hero_group'>We offer friendly advice and practical options. Contact us today to arrange your confidential meeting.</cms:editable>
                            </p>
                            <label for="contact-name">Full name</label>
                            <input type="text" id="contact-name" placeholder="Enter your name" />
                            <br/>
                            <label for="contact-email">Email</label>
                            <input type="text" id="contact-email" placeholder="Enter your email" />
                            <br/>
                            <button class="contact-submit" type="button">Continue</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <section class="intro-thirds">
            <div class="inner">
                <cms:editable name='intro_group' label='Intro' desc='Intro section content' type='group'></cms:editable>
                <div class="media-block-left">
                    <div class="home-quotes">
                        <cms:repeatable name='quotes' group='intro_group'>
                            <cms:editable name='quote' label="Quote" type='text' />
                            <cms:editable name='quoteAuthor' label="Quote Author" type='text' />
                        </cms:repeatable>
                        <cms:show_repeatable 'quotes'>
                            <blockquote>
                                <cms:show quote /><span><cms:show quoteAuthor /></span>
                            </blockquote>
                        </cms:show_repeatable>
                        <div class="pagination"></div>
                    </div>
                    <h1><cms:editable name='intro_header' type='text' group='intro_group'>About Divorce and Wellbeing</cms:editable></h1>
                    <p><strong><cms:editable name='intro_standfirst' type='text' group='intro_group'>Divorce and Wellbeing is a divorce consultancy offering a tailor made service to help and support you through the traumatic journey of separation and divorce.</cms:editable></strong>
                    </p>
                    <cms:editable name='intro_img' label='intro_img' type='image' show_preview='1' hidden='1' group='intro_group'></cms:editable>
                    <img src="<cms:show intro_img />" />
                    <p>
                        <cms:editable name='intro_text' type='text' group='intro_group'>We provide holistic guidance that with the help of our tested and trusted network of experts in a wide range of services from the legal and financial to the deeply personal, will get you onto the road to recovery and independence.
                            We will meet you for an initial assessment to understand where you are and will draw you a roadmap tailored to your individual needs. Divorce is a long process which requires endurance and stability.</cms:editable>
                    </p><a href="<cms:show k_site_link />about.php">Continue reading</a>
                </div>
                <div class="highlight-list">
                    <cms:editable name='services_group' label='Services' desc='Services section content' type='group' />
                    <div class="highlight">
                        <header>
                            <h2><cms:editable name='services_header' type='text' group='services_group'>Some of our services</cms:editable></h2>
                        </header>
                        <cms:editable name='services_list' type='nicedit' buttons='italic' group='services_group'>
                            <ul>
                                <li>In-house sessions for personal consultancy and legal advice</li>
                                <li>Legal services</li>
                                <li>Financial advisory</li>
                                <li>Therapeutic services</li>
                                <li>Wellness</li>
                                <li>Social events</li>
                            </ul>
                        </cms:editable>
                        <footer>
                            <h3>To find out more:</h3><a class="email" href="mailto:info@divorceandwellbeing.co.uk">info@divorceandwellbeing.co.uk</a><a class="phone" href="tel:08455443757">08455443757</a>
                            <p class="lined">Meeting rooms in Mayfair and Fleet Street, London</p>
                        </footer>
                    </div>
                </div>
                <div class="media-block-right">
                    <cms:editable name='story_group' label='My story' desc='My story section content' type='group'></cms:editable>
                    <h3><cms:editable name='story_header' type='text' group='story_group'>My story</cms:editable></h3>
                    <cms:editable name='story_img' label='story_img' type='image' show_preview='1' hidden='1' group='story_group'></cms:editable>
                    <picture>
                        <img src="<cms:show story_img />" />
                    </picture>
                    <p>
                        <cms:editable name='story_text' type='text' group='story_group'>I moved to London in the late nineties as a young married woman. In the beginning, it was an exciting experience for both of us, however it wasn't long before my marriage was showing signs that something was wrong. I started feeling
                            isolated and worried, and eventually I faced the inevitability of divorce.</cms:editable>
                    </p><a href="<cms:show k_site_link />about.php#story">Continue reading</a>
                    <div class="news-list">
                        <cms:pages masterpage="news-article.php" paginate="1" limit="1">
                            <h3><cms:editable name='news_header' type='text' group='story_group'>Latest news</cms:editable></h3>
                            <article class="news-block">
                                <h4><cms:show k_page_title /></h4>
                                <time>
                                    <cms:date k_page_date format='jS M, y' />
                                </time>
                                <p>
                                    <cms:excerptHTML count='70' ignore='img'>
                                        <cms:show article_standfirst /></cms:excerptHTML>
                                </p><a href="<cms:show k_page_link />">Read article</a>
                            </article>
                        </cms:pages>
                    </div>
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