<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <cms:editable name='page_title' type='text'>Wellbeing Group</cms:editable>
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
    <cms:template title="Wellness">
    </cms:template>
    <main>
        <section class="wellbeing">
            <div class="inner">
                <article>
                    <h1><cms:editable name='wellbeing_header' type='text'>The Wellbeing Group</cms:editable></h1>
                    <cms:editable name='wellness_img' label='wellness_img' type='image' show_preview='1' hidden='1'></cms:editable>
                    <img class="wellness-img" src="<cms:show wellness_img />" />
                    <p>
                        <cms:editable name='wellbeing_intro' type='nicedit' buttons='italic,bold,link,unlink,ol,ul,image,subscript,superscript'>We are very excited to announce that we are commencing our Wellbeing Group. We aim to bring people together to help and support each other in turning corners and rebuilding lives for a better and brighter future.
                            <br>
                            <br>There will be monthly events where you can meet and share your stories, as well as activities to broaden your horizons, lift your spirits and be inspired by some art and music. We value all our members’ thoughts and contributions
                            so any recommendations would be happily received.
                            <br>
                            <br>Our first event will be a ‘Welcome back from Summer’ Drinks in September - date and venue to be announced soon. Watch this space for more news…</cms:editable>
                    </p>
                    <div class="wellness-event">
                        <h2><cms:editable name='wellbeing_event_header' type='text'>Welcome back from Summer</cms:editable></h2>
                        <time>
                            <cms:editable name='wellbeing_event_date' type='text'>Monday, 9 October 2017</cms:editable>
                        </time>
                        <time>
                            <cms:editable name='wellbeing_event_time' type='text'>6.30 – 8.30 pm</cms:editable>
                        </time>
                        <cms:editable name='wellness_event_description' type='nicedit' buttons='italic,bold,link,unlink,ol,ul,image,subscript,superscript'>
                            <h4>Get to know The Wellbeing Group at DWB!</h4>
                            <p>Come and hear what Divorce and Wellbeing is all about and find out how we help people face relationship challenges and rebuild their lives. Discover some of the additional services you can access through our professional partners.
                                Mingle with likeminded people over drinks and snacks, learn a few wellbeing techniques through our interactive group sessions and above all, have fun doing it!
                                <br>
                                <br>Event registration starts on 21 August.</p>
                        </cms:editable>
                        <cms:editable name='wellness_eventbrite_description' type='richtext'><a class="button" href="">Sign up</a>
                        </cms:editable>
                        <br/>
                        <h2><cms:editable name='wellbeing_findoutmore_header' type='text'>Find out more</cms:editable></h2>
                        <cms:form enctype="multipart/form-data" method="post" class="k_form">
                            <label>Enter your name (required)</label>
                            <br/>
                            <cms:input type="text" placeholder="Full name" name="name" label="Full name" desc='A text input for your name' maxlength="100" required='1' validator='min_len=3' />
                            <br/>
                            <label>Enter your email (required)</label>
                            <br/>
                            <cms:input type="text" name="email" placeholder="Email" label='Email' maxlength="100" validator='email' required='1' />
                            <br/>
                            <label>Enter a message</label>
                            <br/>
                            <cms:input type="textarea" cols="35" rows="5" name="message" label='Leave a message'></cms:input>
                            <br/>
                            <label>Enter the code below</label>
                            <br/>
                            <cms:input name='recaptcha' type='recaptcha' />
                            <br/>
                            <br/>
                            <cms:if k_success>
                                <div class="k_successmessage">
                                    <cms:send_mail from=k_email_from to='info@divorceandwellbeing.co.uk' subject='Wellbeing registration'>
                                        <cms:show k_success />
                                    </cms:send_mail>
                                    <h3>Message sent</h3>
                                    <p>Thanks, your registration has been sent</p>
                                </div>
                            </cms:if>
                            <cms:if k_error>
                                <div class="k_errormessage">
                                    <ul>
                                        <cms:each k_error>
                                            <li>
                                                <cms:show item />
                                            </li>
                                        </cms:each>
                                    </ul>
                                </div>
                            </cms:if>
                            <input type="submit" value="Register" name="submit" />
                        </cms:form>
                    </div>
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