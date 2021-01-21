<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="./assets/script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Maven+Pro&display=swap" rel="stylesheet">

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
                        <a href="#skills"><span class="nav__letter">S</span>kills</a>
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
                    <div>
                        <p>Hello, I'm <span class="green">William</span>. An experienced Web Developer based in <span class="green">Meanwood</span>, Leeds<span class="yellow">.</span></p>
                    </div>
                    <div>
                        <p>I've worked with <span class="green">Brands</span>, <span class="green">agencies</span> and small businesses across the world<span class="yellow">.</span></p>
                    </div>
                    <div>
                        <img src="/images/william.png"/>
                    </div>
                    <div>
                        <p>I specialise in Small Business websites, Ecommerce, Web Apps & Portfolio sites<span class="yellow">.</span></p>
                    </div>
                </div>        
            </section>
            <section id="services" class="about" data-scrollclass="services__lead" data-scrollcolor="">
                <h3>Services I offer<span class="red">.</span><span class="yellow">.</span><span class="green">.</span></h3>
                <div class="services__wrapper">

                    <div id="website__development" class="services__card services__dev"><h4>Development</h4>
                    <p>Using the latest web technologies I create fully responsive, mobile first pixel perfect websites.</p>
                    <p>I will create you a brand new website, or also take on maintenance of your existing site</p>
                </div>
                <div id="website__design" class="services__card services__design"><h4>Design</h4>
                <img
                <p>From bespoke handcrafted design, to cost effective template design we'll create the perfectly designed site for your needs.</p>
                <!-- <p>I will create you a brand new website, or also take on maintenance of your existing site</p> -->
            </div>
            <div id="website__seo" class="services__card services__seo"><h4>SEO</h4>
            <p>Let us help your website reach it's google potential</p>
            <p>We can audit your site for on and off page seo factors and put together a plan to increase traction by the big search engines.</p>
        </div>
        <div id="website__hosting" class="services__card services__hosting"><h4>Hosting</h4>
        <p>Let us help your website reach it's potential via google</p>
        <p>We can audit your site for on and off page seo factors and put together a plan to increase traction by the big search engines.</p>
        </div>
    <!-- <div><h4>Web Site Design</h4></div>
    <div><h4>SEO</h4></div>
    <div><h4>Page Speed Work</h4></div>
    <div><h4>Hosting</h4></div> -->
</div>
</section>
        </main>
    </body>
</html>
