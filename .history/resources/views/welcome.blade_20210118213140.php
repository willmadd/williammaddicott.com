<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <!-- <script src="./assets/script.js"></script> -->
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Maven+Pro&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link href="./css/app.min.css" rel="stylesheet">

    <style>
    body {
        font-family: 'Nunito';
    }
    </style>
</head>

<body>
    <nav class="nav">
        <ul>
            <li>
                <a href="#about"><span class="nav__letter">W</span>M</a>
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
                <a href="#contact"><span class="nav__letter">F</span>aq</a>
            </li>
            <li>
                <a href="#contact"><span class="nav__letter">C</span>ontact</a>
            </li>
        </ul>
    </nav>
    <main class="main">
        <section class="home">
            <h1>william maddicott.</h1>
            <h1>web design & development.<span class="yellow">.</span><span class="green">.</span></h1>
        </section>
        <section class="about">
            <h3>About Me.<span class="yellow">.</span><span class="green">.</span></h3>
            <div class="about__content">
                <div class="col">
                    <div>
                        <p>Hello, I'm <span class="green">William</span>. An experienced Web Developer based in <span
                                class="green">Meanwood</span>, Leeds<span class="yellow">.</span></p>
                    </div>
                    <img src="/images/office.jpg" />
                </div>
                <div class="col">
                    <img class="me" src="/images/williammaddicott.jpg" />
                    <div>
                        <p>I specialise in Small Business websites, Ecommerce, Web Apps & Portfolio sites. (pending
                            approval from the cat)<span class="yellow">.</span></p>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <p>I work with <span class="green">Brands</span>, <span class="green">agencies</span> and
                            small
                            businesses in Meanwood and around the world<span class="yellow">.</span></p>
                    </div>
                    <img src="/images/cat.jpg" />
                </div>
                <div class="col">
                    <img class="apple" src="/images/apple.jpg" />
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
            <h3>Services I offer<span class="red">.</span><span class="yellow">.</span><span class="green">.</span></h3>
            <div class="services__wrapper">

                <div id="website__development" class="services__card">
                    <div class="services__title services__dev">
                        <h4>Development</h4>
                    </div>
                    <div class="website__container">
                        <img src="/images/development.jpg" />
                    </div>
                    <p>Using the latest web technologies I create fully responsive, mobile first pixel perfect websites.
                        <br /><br />I will create you a brand new website, or also take on maintenance of your existing
                        site
                    </p>
                </div>
                <div id="website__design" class="services__card ">
                    <div class="services__title services__design">
                        <h4>Design</h4>
                    </div>
                    <div class="website__container">
                        <img src="/images/design.jpg" />
                    </div>
                    <p>From bespoke handcrafted design, to cost effective template design we'll create the perfectly
                        designed site for your needs.</p>
                </div>
                <div id="website__seo" class="services__card">
                    <div class="services__title services__seo">
                        <h4>SEO and Analytics</h4>
                    </div>
                    <div class="website__container">
                        <img src="/images/seo.png" />
                    </div>
                    <p>Let us help your website reach it's google potential<br /><br />We can audit your site for on and
                        off page seo factors and put together a plan to increase
                        traction by the big search engines.</p>
                </div>
                <div id="website__hosting" class="services__card">
                    <div class="services__title services__hosting">
                        <h4>Hosting</h4>
                    </div>
                    <div class="website__container">
                        <img src="/images/hosting.jpg" />
                    </div>
                    <p>Don't know how to host your website?<br /><br />We can can provide secure hosting and a domain
                        name to your small business website, </p>

                </div>
                <!-- <div><h4>Web Site Design</h4></div>
    <div><h4>SEO</h4></div>
    <div><h4>Page Speed Work</h4></div>
    <div><h4>Hosting</h4></div> -->
            </div>
        </section>
        <section id="work" class="work" data-scrollclass="work__lead">
            <h3>Featured Work<span class="yellow">.</span><span class="green">.</span></h3>
            <p>I've worked on a number of brands, both large and small, to improve their e-commerce offering and online
                presence. I've provided Magento, and Shopify ecommerce solutions, as well as wordpress and cms sites,
                along with standalone static html sites . </p>
            <div class="work__container">
            <div class="work__card" id="osprey">
                    <!--<div class="work__overlay"><img src="./images/osprey-logo.png"/></div>-->
                    <div class="work__card__link"><a rel="nofollow" href="https://www.ospreyeurope.com/"><img
                                src="./images/ospreysite.jpg" alt="Osprey website" /></a>
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
                            <img src="./images/ospreymob.png" />
                        </div>
                    </div>
                    <div class="work__card__content"><img src="./images/osprey-logo.png" />
                        <p>I built a custom React.js module to handle Osprey’s “Repairs and Guarantee” operations. The module allows customers to follow a flow and select their product, and the issue with it. The module then returns a list of spare parts, or returns options and creates a record that allows clients to follow the process of their repair. In addition to this, created the Magento 2 account area and did considerable work on the Product Display Page</p>
                    </div>
                </div>
                <div class="work__card" id="regis">
                    <!--<div class="work__overlay"><img src="./images/regis-logo.svg"/></div>-->
                    <div class="work__card__link"><a rel="nofollow" href="https://www.regissalons.co.uk/"><img
                                src="./images/regissite.jpg" alt="Regis website" /></a>
                        <div class="work__badges">
                            <div class="work__badge magento">
                                <p>Magento</p>
                            </div>
                            <div class="work__badge wordpress">
                                <p>Wordpress</p>
                            </div>
                        </div>
                        <div class="work__mobile">
                            <img src="./images/regismob.png" />
                        </div>
                    </div>
                    <div class="work__card__content">
                    <div class="i">
                        <img src="./images/regis-logo.svg" alt="Regis website" />
                    </div>
                        <p>I undertook general maintenance of Regis Salons’ Wordpress and Magento sites, including creating new custom pages and templates using Advanced Custom Forms. On the Magento side of things I undertook the development work for the Product Display Page among other retainer work.  </p>
                    </div>
                </div>
                <div class="work__card" id="gshock">
                    <div class="work__card__link"><a rel="nofollow" href="https://g-shock.co.uk/"><img
                                src="./images/casiosite.jpg" /></a>
                        <div class="work__badges">
                            <div class="work__badge magento">
                                <p>Magento</p>
                            </div>
                        </div>
                        <div class="work__mobile">
                            <img src="./images/gshockmob.png" />
                        </div>
                    </div>
                    <div class="work__card__content"><img src="./images/gshock-logo.png" />
                        <p>I worked in developing the Product page</p>
                    </div>
                </div>
                
                
                <!-- <div class="work__card" id="sc">
                    <div class="work__card__link"><a rel="nofollow" href="https://www.specialisedcovers.com/"><img
                                src="./images/scsite.jpg" alt="Specialised Covers website" /></a>
                        <div class="work__badges">
                            <div class="work__badge magento">
                                <p>Magento</p>
                            </div>
                        </div>
                    </div>
                    <div class="work__card__content"><img src="./images/sc.svg" />
                        <p>G Shock work here it is</p>
                    </div>
                </div>
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
            <h3>Tech I work with.<span class="yellow">.</span><span class="green">.</span></h3>
            <div class="skills__wrapper">

                <div id="html" class="skills__card">
                    <img src="./images/html.svg" />
                </div>
                <div id="css" class="skills__card">
                    <img src="./images/css3.png" />
                </div>
                <div id="react" class="skills__card">
                    <img src="./images/react.png" />
                </div>
                <div id="magento" class="skills__card">
                    <img src="./images/magento.png" />
                </div>
                <div id="php" class="skills__card">
                    <img src="./images/php.png" />
                </div>
                <div id="wordpress" class="skills__card">
                    <img src="./images/wordpress.png" />
                </div>
            </div>
        </section>
        <section id="contact" class="contact" data-scrollclass="contact__lead">
            <p>Hi. I'm William. Nice to meet you. I'm an experienced web designer & full stack developer based in
                Meanwood Village, Leeds, UK</p>
            <p>I work with brands, agencies and anyone else across the world</p>
            <h4>My development work focusses on React based web apps, Ecommerce & travel sites & stand alone sites...
                But I'll take on pretty much anything</h4>
        </section>
    </main>
</body>

</html>