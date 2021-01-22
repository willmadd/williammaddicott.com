<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="William Maddicott is an experienced freelance web developer and Designer based in Meanwood, Leeds, UK.">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>William Maddicott | Web Design & Development</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Maven+Pro&display=swap"
        rel="stylesheet">
    <link href="./css/app.min.css" rel="stylesheet">
</head>

<body>
    <nav class="nav">
        <ul>
            <li>
                <a href="#home" class="active"><span class="nav__letter">W</span>M</a>
            </li>
            <li>
                <a href="#about"><span class="nav__letter">A</span>bout</a>
            </li>
            <li>
                <a href="#services"><span class="nav__letter">S</span>ervices I Offer</a>
            </li>
            <li>
                <a href="#work"><span class="nav__letter">M</span>y Work</a>
            </li>
            <li>
                <a href="#skills"><span class="nav__letter">T</span>ech</a>
            </li>
            <li>
                <a href="#contact"><span class="nav__letter">C</span>ontact</a>
            </li>
        </ul>
    </nav>
    <main class="main">
        <section class="home" id="home">
            <h1>william maddicott.</h1>
            <h1>web design & development<span class="green">.</span><span class="red">.</span><span
                    class="yellow">.</span></h1>
        </section>
        <section class="about" id="about">
            <h2>About Me<span class="green">.</span><span class="red">.</span><span class="yellow">.</span></h2>
            <div class="about__content">
                <div class="col">
                    <div>
                        <p>Hello, I'm <span class="green">William</span>. An experienced Web Developer based in <span
                                class="green">Meanwood</span>, Leeds<span class="yellow">.</span></p>
                    </div>
                    <img loading="lazy"
                        srcset=" ./images/officex4.webp 750w, ./images/officex3.webp 563w, ./images/officex2.webp 375w, ./images/officex1.webp 188w"
                        src="/images/officex4.webp" loading="lazy" width="750" height="750"
                        alt="william maddicott office" />
                </div>
                <div class="col me">
                    <img class="me" src="/images/williammaddicottx4.webp"
                        srcset=" ./images/williammaddicottx4.webp 750w, ./images/williammaddicottx3.webp 563w, ./images/williammaddicottx2.webp 375w, ./images/williammaddicottx1.webp 188w"
                        width="500" height="500" loading="lazy" alt="profile picture" />
                    <div>
                        <p>I specialise in Small Business websites, Ecommerce, Web Apps & Portfolio sites. (pending
                            approval from the cat)<span class="yellow">.</span></p>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <p>I work with <span class="green">Brands</span>, <span class="green">agencies</span> and
                            small
                            businesses in Meanwood, Headingley and beyond<span class="yellow">.</span></p>
                    </div>
                    <img src="/images/catx4.webp"
                        srcset=" ./images/catx4.webp 1000w, ./images/catx3.webp 750w, ./images/catx2.webp 500w, ./images/catx1.webp 250w"
                        loading="lazy" width="1000" height="1000" alt="biggled the cat sat on my laptop" />
                </div>
                <div class="col">
                    <img class="apple" height="1000" width="1000"
                        srcset=" ./images/applex4.webp 1000w, ./images/applex3.webp 750w, ./images/applex2.webp 500w, ./images/applex1.webp 250w"
                        loading="lazy" src="/images/applex4.webp" alt="apple laptop" />

                    <div>
                        <p class="discuss">Get in touch now to discuss your requirements</p>
                    </div>
                </div>
                <!-- <div></div>
                <div>
                    <p>I've worked with <span class="green">Brands</span>, <span class="green">agencies</span> and small
                        businesses across the world<span class="yellow">.</span></p>
                </div>
                <div></div>
                <div>
                    <p>I specialise in Small Business websites, Ecommerce, Web Apps & Portfolio sites. (pending approval from the cat)<span
                            class="yellow">.</span></p>
                </div>
                <div></div>
                <div>
                    <img src="/images/william.png" />
                </div> -->
            </div>
        </section>
        <section id="services" class="about" data-scrollclass="services__lead" data-scrollcolor="">
            <h2>Services I offer<span class="green">.</span><span class="red">.</span><span class="yellow">.</span></h2>
            <div class="services__wrapper">

                <div id="website__development" class="services__card">
                    <div class="services__title services__dev">
                        <h3>Development</h3>
                    </div>
                    <div class="website__container">
                        <img src="/images/developmentx4.webp"
                            srcset=" ./images/developmentx4.webp 1000w, ./images/developmentx3.webp 750w, ./images/developmentx2.webp 500w, ./images/developmentx1.webp 250w"
                            loading="lazy" height="1000" weight="1000" alt="computer with code on the screen" />
                        <p>Using the latest web technologies I create fully responsive, mobile first pixel perfect
                            websites.
                            <br /><br />I will create you a brand new website, or also take on maintenance of your
                            existing
                            site
                        </p>
                    </div>
                </div>
                <div id="website__design" class="services__card ">
                    <div class="services__title services__design">
                        <h3>Design</h3>
                    </div>
                    <div class="website__container">
                        <img src="/images/designx4.webp" alt="computer with design software on the screen"
                            srcset=" ./images/designx4.webp 1000w, ./images/designx3.webp 750w, ./images/designx2.webp 500w, ./images/designx1.webp 250w"
                            loading="lazy" height="1000" weight="1000" />
                        <p>From bespoke handcrafted design, to cost effective template design we'll create the perfectly
                            designed site for your needs.</p>
                    </div>
                </div>
                <div id="website__seo" class="services__card">
                    <div class="services__title services__seo">
                        <h3>SEO and Analytics</h3>
                    </div>
                    <div class="website__container">
                        <img src="/images/seo.png" alt="screenshot showing google analytics dashboard" />
                        <p>Let us help your website reach it's google potential<br /><br />We can audit your site for on
                            and
                            off page seo factors and put together a plan to increase
                            traction by the big search engines.</p>
                    </div>
                </div>
                <div id="website__hosting" class="services__card">
                    <div class="services__title services__hosting">
                        <h3>Hosting</h3>
                    </div>
                    <div class="website__container">
                        <img src="/images/hosting.jpg" alt="vector of cloud hosting in cloud" />
                        <p>Don't know how to host your website?<br /><br />We can can provide secure hosting and a
                            domain
                            name to your small business website, </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="work" class="work" data-scrollclass="work__lead">
            <h2>Featured Work<span class="green">.</span><span class="red">.</span><span class="yellow">.</span></h2>
            <p>I've worked on a number of brands, both large and small, to improve their e-commerce offering and online
                presence. I've provided Magento, and Shopify ecommerce solutions, as well as wordpress and cms sites,
                along with standalone static html sites . </p>
            <div class="work__container">
                <div class="work__card" id="osprey">
                    <!--<div class="work__overlay"><img src="./images/osprey-logo.png"/></div>-->
                    <div class="work__card__link"><a rel="nofollow" href="https://www.ospreyeurope.com/"
                            aria-label="link to Osprey Europe website"><img src="./images/ospreysitex5.webp"
                                srcset=" ./images/ospreysitex5.webp 2240w, ./images/ospreysitex4.webp 1680w, ./images/ospreysitex3.webp 1120w, ./images/ospreysitex2.webp 720w, ./images/ospreysitex1.webp 360w"
                                alt="Osprey website" aria-label="Osprey website" width="720" height="360"
                                loading="lazy" /></a>
                        <div class="work__badges">
                            <div class="work__badge react">
                                <p>React</p>
                            </div>
                            <div class="work__badge wordpress">
                                <p>Wordpress</p>
                            </div>
                            <div class="work__badge magento">
                                <p>Magento</p>
                            </div>
                        </div>
                        <div class="work__mobile">
                            <img src="./images/ospreymob.webp" loading="lazy" width="99" height="200"
                                alt="screen shot or Osprey Europe mobile website" />
                        </div>
                    </div>
                    <div class="work__card__content">
                        <div class="work__card__logo">
                            <img src="./images/osprey-logo72.png" width="72" height="72" loading="lazy"
                                alt="osprey Europe logo" />
                        </div>
                        <p>I built a custom React.js module to handle Osprey’s “Repairs and Guarantee” operations. The
                            module allows customers to follow a flow and select their product, and the issue with it.
                            The module then returns a list of spare parts, or returns options and creates a record that
                            allows clients to follow the process of their repair. In addition to this, created the
                            Magento 2 account area and did considerable work on the Product Display Page</p>
                    </div>
                </div>
                <div class="work__card" id="regis">
                    <!--<div class="work__overlay"><img src="./images/regis-logo.svg"/></div>-->
                    <div class="work__card__link"><a rel="nofollow" href="https://www.regissalons.co.uk/"><img
                                src="./images/regissite.jpg" width="720" height="360" loading="lazy"
                                alt="Regis website" /></a>
                        <div class="work__badges">
                            <div class="work__badge magento">
                                <p>Magento</p>
                            </div>
                            <div class="work__badge wordpress">
                                <p>Wordpress</p>
                            </div>
                        </div>
                        <div class="work__mobile">
                            <img src="./images/regismob.png" loading="lazy" width="99" height="200"
                                alt="regis website mobile screen shot" />
                        </div>
                    </div>
                    <div class="work__card__content">
                        <div class="work__card__logo">
                            <img src="./images/regis-logo.svg" height="36" width="116" alt="Regis website" />
                        </div>
                        <p>I undertook general maintenance of Regis Salons’ Wordpress and Magento sites, including
                            creating new custom pages and templates using Advanced Custom Forms. On the Magento side of
                            things I undertook the development work for the Product Display Page among other retainer
                            work. </p>
                    </div>
                </div>
                <div class="work__card" id="gshock">
                    <div class="work__card__link"><a rel="nofollow" href="https://g-shock.co.uk/"
                            aria-label="link to gshock website">
                            <img src="./images/casiosite.jpg" width="720" height="360" loading="lazy"
                                alt="g shock website" aria-label="gshock website" /></a>
                        <div class="work__badges">
                            <div class="work__badge magento">
                                <p>Magento</p>
                            </div>
                        </div>
                        <div class="work__mobile">
                            <img src="./images/gshockmob.png" loading="lazy" width="99" height="200"
                                alt="g shock website mobile" aria-label="g shock website mobile" />
                        </div>
                    </div>
                    <div class="work__card__content">
                        <div class="work__card__logo">
                            <img src="./images/gshock-logo.png" height="40" width="248" loading="lazy"
                                alt="logo fo g shock" />
                        </div>
                        <p>G Shock Product Page improvements, including frontend and backend work for 'Out of Stock'
                            notifications and 'coming soon' buttons. Along with checkout redesign carried out for the
                            Magento 2 G-Shock Checkout</p>
                    </div>
                </div>

                <div class="work__card" id="sc">
                    <div class="work__card__link"><a rel="nofollow" href="https://www.specialisedcovers.com/">
                            <img src="./images/scsite.jpg" width="720" height="360" loading="lazy"
                                alt="specialised covers website" aria-label="specialised covers website" /></a>
                        <div class="work__badges">
                            <div class="work__badge magento">
                                <p>Magento</p>
                            </div>
                            <div class="work__badge js">
                                <p>JS</p>
                            </div>
                        </div>
                        <div class="work__mobile">
                            <img src="./images/scmob.png" loading="lazy" width="99" height="200"
                                alt="specialised covers mobile website"
                                aria-label="specialised covers mobile website" />
                        </div>
                    </div>
                    <div class="work__card__content">
                        <div class="work__card__logo">
                            <img src="./images/sc.svg" alt="specialsied covers logo" height="44" width="161"
                                loading="lazy" area-label="specialsied covers logo" />
                        </div>
                        <p>G Shock Product Page improvements, including frontend and backend work for 'Out of Stock'
                            notifications and 'coming soon' buttons. Along with checkout redesign carried out for the
                            Magento 2 G-Shock Checkout</p>
                    </div>
                </div>

                <div class="work__card" id="maharishi">
                    <div class="work__card__link"><a rel="nofollow" href="https://www.maharishistore.com/">
                            <img src="./images/mahasite.jpg" width="720" height="360" loading="lazy"
                                alt="maharishi website" aria-label="maharishi website" /></a>
                        <div class="work__badges">
                            <div class="work__badge react">
                                <p>React</p>
                            </div>
                            <div class="work__badge redux">
                                <p>Redux</p>
                            </div>
                        </div>
                        <div class="work__mobile">
                            <img src="./images/mahamob.png" loading="lazy" width="99" height="200"
                                alt="maharishi mobile website" aria-label="maharishi mobile website" />
                        </div>
                    </div>
                    <div class="work__card__content">
                        <div class="work__card__logo">
                            <img class="maha__logo" src="./images/maha.webp" height="36" width="363" loading="lazy"
                                alt="mahaishi logo" aria-label="maharishi logo" />
                        </div>
                        <p>G Shock Product Page improvements, including frontend and backend work for 'Out of Stock'
                            notifications and 'coming soon' buttons. Along with checkout redesign carried out for the
                            Magento 2 G-Shock Checkout</p>
                    </div>
                </div>

                <div class="work__card" id="viewgpx">
                    <div class="work__card__link"><a rel="nofollow" href="https://www.viewgpx.com/">
                            <img src="./images/gpxsite.jpg" alt="view gpx site" /></a>
                        <div class="work__badges">
                            <div class="work__badge react">
                                <p>React</p>
                            </div>
                            <div class="work__badge redux">
                                <p>Redux</p>
                            </div>
                            <div class="work__badge laravel">
                                <p>Laravel</p>
                            </div>
                        </div>
                        <div class="work__mobile">
                            <img src="./images/gpxmob.png" width="99" height="200" alt="viewgpx mobile site" />
                        </div>
                    </div>
                    <div class="work__card__content">
                        <div class="work__card__logo">
                            <img class="maha__logo" src="./images/viewgpx.png" alt="vieegpx logo" />
                        </div>
                        <p>A .gpx file is an xml file that contains route data such as gps co-ordinated and elevation
                            data. I built the Laravel backend and React.js frontend work (excluding styling) for
                            ViewGPX.com, an online app that displays the contents of a GPX file and displays all
                            contained data on a map. The brief was to create the easiest to use viewer of GPX route
                            files, with the ability to save and share .gpx files.</p>
                    </div>
                </div>

                <!--
                <div class="work__card" id="maharishi">
                    <div class="work__card__link"><a rel="nofollow" href="https://www.maharishistore.com/"><img
                                src="./images/maharishisite.jpg" alt="maharishi website" /></a>
                        <div class="work__badges">
                        <div class="work__badge react">
                                <p>React</p>
                            </div>
                            <div class="work__badge redux">
                                <p>Redux</p>
                            </div>
                        </div>
                    </div>
                    <div class="work__card__content"><img src="./images/maha.png" />
                        <p>G Shock work here it is</p>
                    </div>
                </div>
                <div class="work__card" id="viewgpx">
                    <div class="work__card__link"><a rel="nofollow" href="https://www.viewgpx.com"><img
                                src="./images/gpxsite.jpg" alt="GPX VIEWER website" /></a>
                        <div class="work__badges">
                            <div class="work__badge react">
                                <p>React</p>
                            </div>
                            <div class="work__badge redux">
                                <p>Redux</p>
                            </div>
                            <div class="work__badge laravel">
                                <p>Laravel</p>
                            </div>
                        </div>
                    </div>
                    <div class="work__card__content"><img src="./images/viewgpx.png" />
                        <p>A .gpx file is an xml file that contains route data such as gps co-ordinated and elevation data. I built the Laravel backend and React.js frontend work (excluding styling) for ViewGPX.com, an online app that displays the contents of a GPX file and displays all contained data on a map. The brief was to create the easiest to use viewer of GPX route files, with the ability to save and share .gpx files.</p>
                    </div>
                </div>
                <div class="work__card" id="pnr">
                    <div class="work__card__link"><a rel="nofollow" href="https://www.viewgpx.com"><img
                                src="./images/pnrsite.jpg" alt="PNR Converter website" /></a>
                        <div class="work__badges">
                        <div class="work__badge react">
                                <p>React</p>
                            </div>
                            <div class="work__badge laravel">
                                <p>Laravel</p>
                            </div>
                        </div>
                    </div>
                    <div class="work__card__content"><img src="./images/pnr.svg" />
                        <p>G Shock work here it is</p>
                    </div>
                </div>
                <div class="work__card" id="bop">
                    <div class="work__card__link"><a rel="nofollow" href="https://www.bopdj.com"><img
                                src="./images/bopsite.jpg" alt="BOP DJ website" /></a>
                        <div class="work__badges">
                            <div class="work__badge magento">
                                <p>Magento</p>
                            </div>
                        </div>
                    </div>
                    <div class="work__card__content"><img src="./images/bop.svg" />
                        <p>G Shock work here it is</p>
                    </div>
                </div> -->
            </div>
        </section>
        <section id="skills" class="skills" data-scrollclass="skills__lead">
            <h2>Tech I work with<span class="green">.</span><span class="red">.</span><span class="yellow">.</span></h2>
            <div class="skills__wrapper">

                <div id="html" class="skills__card">
                    <img src="./images/html.svg" loading="lazy" width="157" height="157" alt="html logo" />
                <p class="red">HTML5</p>
                </div>
                <div id="css" class="skills__card">
                    <img src="./images/css3.svg" loading="lazy" width="157" height="157" alt="css logo" />
                    <p class="red">css3</p>
                </div>
                <div id="react" class="skills__card">
                    <img src="./images/react.svg" loading="lazy" width="157" height="157" alt="react logo" />
                    <p class="red">React</p>
                </div>
                <div id="magento" class="skills__card">
                    <img src="./images/magento.svg" loading="lazy" width="157" height="157" alt="magento logo" />
                    <p class="red">Magento</p>
                </div>
                <div id="php" class="skills__card">
                    <img src="./images/php.svg" loading="lazy" width="157" height="157" alt="php logo" />
                    <p class="red">PHP</p>
                </div>
                <div id="wordpress" class="skills__card">
                    <img src="./images/wordpress.svg" loading="lazy" width="157" height="157" alt="wordpress logo" />
                    <p class="red">Wordpress</p>
                </div>
                <div id="wordpress" class="skills__card">
                    <img src="./images/redux.svg" loading="lazy" width="157" height="157" alt="redux logo" />
                    <p class="red">Redux</p>
                </div>
                <div id="wordpress" class="skills__card">
                    <img src="./images/laravel.svg" loading="lazy" width="157" height="157" alt="laravel logo" />
                    <p class="red">Laravel</p>
                </div>
                <div id="wordpress" class="skills__card">
                    <img src="./images/graphql.svg" loading="lazy" width="157" height="157" alt="graphql logo" />
                    <p class="red">GraphQL</p>
                </div>
                <div id="wordpress" class="skills__card">
                    
                <img src="./images/javascript.svg" loading="lazy" width="157" height="157" alt="javascript logo" />
                
            </div>
                <div id="wordpress" class="skills__card">
                    <img src="./images/node.svg" loading="lazy" width="157" height="157" alt="node logo" />
                </div>
                <div id="wordpress" class="skills__card">
                    <img src="./images/sass.svg" loading="lazy" width="157" height="157" alt="sass logo" />
                </div>
            </div>
        </section>
        <section id="contact" class="contact" data-scrollclass="contact__lead">
            <h2>Get in Touch with me<span class="green">.</span><span class="red">.</span><span class="yellow">.</span>
            </h2>
            <div class="contact__wrapper">
                <div class="contact__text">
                    <p>Got a query? get in touch</p>
                </div>
                <form id="contact__form">
                    <div class="wrapper">
                        <fieldset class="formRow">
                            <div class="formRow--item">
                                <label for="firstname" class="formRow--input-wrapper js-inputWrapper">
                                    <input type="text" class="formRow--input js-input" id="name" placeholder="Name">
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="wrapper">
                        <fieldset class="formRow">
                            <div class="formRow--item">
                                <label for="email" class="formRow--input-wrapper js-inputWrapper">
                                    <input type="text" class="formRow--input js-input" id="email" placeholder="Email">
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="wrapper">
                        <fieldset class="formRow">
                            <div class="formRow--item">
                                <label for="message" class="formRow--input-wrapper js-inputWrapper">
                                    <textarea class="formRow--input js-input" id="message"
                                        placeholder="Message"></textarea>
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <button class="g-recaptcha" data-sitekey="6LfKrjMaAAAAANq9l407LqejJcG6GscjLZEuC8Tr"
                        data-callback='onSubmit' data-action='submit'>Submit</button>
                </form>
                <div id="loader" class='container loader'>
                    <div class='spinner-container'>
                        <div class="spinner-path">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div id="status__message" class="status__message"></div>

                <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <defs>
                        <filter id="gooey">
                            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -7"
                                result="goo" />
                            <feBlend in="SourceGraphic" in2="goo" />
                        </filter>
                    </defs>
                </svg>
            </div>
        </section>
    </main>
    <footer>
        <p> © William Maddicott 2021</p>
    </footer>
</body>

</html>