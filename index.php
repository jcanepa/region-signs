<!DOCTYPE html>
<html>
<head>
    <title>Region Signs Inc.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" 
      content="Region Signs Inc is an independently owned sign shop producting high quality graphic printing, lettering and custom signs located in Northwest Indiana.">

    <!-- Fonts & Styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <!-- Facebook Pixel -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '286405539386416'); 
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" 
          src="https://www.facebook.com/tr?id=286405539386416&ev=PageView&noscript=1"/>
    </noscript>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#top">
                    <img src="images/logo.png" alt="Region Signs Inc." style="height: 42px">
                    <span class="d-block mt-2">
                        WBE Certified - Indiana
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#services">
                                Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#work">
                                Work
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- Hero slider -->
        <section class="hero d-none d-sm-block" id="top">
            <div class="carousel slide" id="heroCarousel" data-ride="carousel" data-interval="8000">
                <ol class="carousel-indicators">
                    <li data-target="#heroCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#heroCarousel" data-slide-to="1"></li>
                    <li data-target="#heroCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <picture class="w-100">
                            <source srcset="images/carousel/slide-1.webp" type="image/webp">
                            <img src="images/standard-image-format/carousel/slide-1.png" alt="Region Signs in downtown Whiting, IN">
                        </picture>
                        <div class="container">
                            <div class="carousel-caption">
                                <h2>Custom Signs &#38; Printing</h2>
                                <p>We are a full-service sign shop specializing in high-quality graphic output for all of your important project needs - on time and on budget.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <picture class="w-100">
                            <source srcset="images/carousel/slide-4.webp" type="image/webp">
                            <img src="images/standard-image-format/carousel/slide-4.png" alt="Region Signs in downtown Whiting, IN">
                        </picture>
                        <div class="container">
                            <div class="carousel-caption">
                                <h2>Rooted in The Region</h2>
                                <p>Established in 2003, we have been proudly serving Northwest Indiana and Chicagoland. We have since served clients throughout the nation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <picture class="w-100">
                            <source srcset="images/carousel/slide-3.webp" type="image/webp">
                            <img src="images/standard-image-format/carousel/slide-3.png" alt="Region Signs in downtown Whiting, IN">
                        </picture>
                        <div class="container">
                            <div class="carousel-caption">
                                <h2>WBE Certified Since 2004</h2>
                                <p>Region Signs is proud to be a women-owned business certified in the state of Indiana. We take pride in our work, our products, and our customers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <picture class="w-100">
                            <source srcset="images/carousel/slide-2.webp" type="image/webp">
                            <img src="images/standard-image-format/carousel/slide-2.png" alt="Region Signs in downtown Whiting, IN">
                        </picture>
                        <div class="container">
                            <div class="carousel-caption">
                            <h2>Sign of the Times</h2>
                            <p>Our 30+ years of industry experience is a sign of success. We're the certified team to fulfill your custom project needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <!-- Three CTAs -->
        <section class="marketing py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="circle">
                            <picture class="w-100">
                                <img data-src="images/standard-image-format/marketing/printing.jpg" class="lazyload" alt="Custom printing">
                            </picture>
                        </div>
                        <h4>Printing</h4>
                        <p class="text-muted px-sm-5">
                            No matter the size or scale - we offer a wide range of digital printing options.
                        </p>
                        <p><a class="btn btn-primary" href="#printing" role="button">More</a></p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="circle">
                            <picture class="w-100">
                                <img data-src="images/standard-image-format/marketing/lettering.jpg" class="lazyload" alt="">
                            </picture>
                        </div>
                        <h4>Lettering</h4>
                        <p class="text-muted px-sm-5">
                            Decals deliver results - we offer an infinite amount of vinyl lettering possibilities.
                        </p>
                        <p><a class="btn btn-primary" href="#lettering" role="button">More</a></p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="circle">
                            <picture class="w-100">
                                <img data-src="images/standard-image-format/marketing/signs.jpg" class="lazyload" alt="">
                            </picture>
                        </div>
                        <h4>Signs</h4>
                        <p class="text-muted px-sm-5">
                            Grab attention for your company or occasion - custom signage is our specialty.
                        </p>
                        <p><a class="btn btn-primary" href="#signs" role="button">More</a></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Region Signs Inc. -->
        <section class="about py-5-md" id="about">
            <div class="container">
                <div class="row my-5-md p-5">
                    <div class="col my-5 copy">
                        <h3 class="pb-3">Region Signs Inc.</h3>  
                        <p class="lead">
                            Established in 2003 by <strong>Carolyn Sarvanidis</strong> and <strong>Tim King</strong>, Region Signs Inc. is a full-service sign and promotions company located conveniently in downtown Whiting, Indiana.
                        </p>
                        <p>With over 30 years of industry experience, we specialize in the design and manufacturing of custom signage and identification.</p>
                        <p>Our goal is to <strong>always give our customers the best</strong> in products, service, selection, and price.</p>
                        <p>We specialize in time-sensitive, <strong>high quality graphic output</strong> for your important projects.</p>
                        <p>Whether you're working on a major construction project, producing trade show graphics, unveiling a new corporate initiative or just a personal project, we help you match the right services for your project requirements and meet your deadline &mdash; <strong>on time and on budget</strong>.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section class="services py-5 bg-light" id="services">
            <div class="container">
                <div class="row py-5 service">
                    <div class="col-md-8">
                        <div class="row image-grid">
                            <div class="col-6">
                                <picture class="w-100">
                                    <source data-srcset="images/services/signs/sheridan.webp" class="lazyload" type="image/webp">
                                    <img data-src="images/standard-image-format/services/signs/sheridan.jpg" class="lazyload" alt="Region Signs Custom Vehicle Lettering">
                                </picture>
                            </div>
                            <div class="col-6">
                                <picture class="w-100">
                                    <source data-srcset="images/services/signs/mascot.webp" class="lazyload" type="image/webp">
                                    <img data-src="images/standard-image-format/services/signs/mascot.jpg" class="lazyload" alt="Region Signs Custom Vehicle Lettering">                                
                                </picture>
                            </div>
                            <div class="col-6">
                                <picture class="w-100">
                                    <source data-srcset="images/services/signs/diamonds.webp" class=" lazyload"  type="image/webp">
                                        <img data-src="images/standard-image-format/services/signs/diamonds.jpg" alt="Region Signs Custom Vehicle Lettering">
                                <picture class="w-100">
                            </div>
                            <div class="col-6">
                                <picture class="w-100">
                                    <source data-srcset="images/services/signs/unilever.webp" class="lazyload" type="image/webp">
                                    <img data-src="images/standard-image-format/services/signs/unilever.jpg" class="lazyload" alt="Region Signs Custom Vehicle Lettering">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 copy" id="signs">
                        <h2>Signs</h2>
                        <p class="lead">
                            We collaborate with you to turn your message into an effective signage solution. 
                        </p>
                        <p>
                            We create beautiful, durable, signage that is perfect for product sales, special events, or promotions. <a href="tel:1-219-473-1616">Give us a call</a> today to discuss all of our custom signage capabilities.
                        </p>
                        <p>
                            View our line of <a href="http://regionsignsinc.com/pdf/OHSA-Approved.pdf">OHSA Approved signs</a>.
                        </p>
                        <h6>Products</h6>
                        <ul>
                            <li>Safety Signs</li>
                            <li>Hanging signs</li>
                            <li>Yard Signs</li>
                            <li>Wayfinders</li>
                            <li>Signcades</li>
                            <li>Storefront Identification</li>
                            <li>Event Outings</li>
                            <li>Traffic Control</li>
                            <li>Pipe Identification</li>
                        </ul>
                        <h6>Materials</h6>
                        <ul>
                            <li>Aluminum (various weights)</li>
                            <li>Corrugated Plastic</li>
                            <li>Foamcore</li>
                            <li>PVC Board</li>
                            <li>MDO Board</li>
                            <li>Magnet</li>
                            <li>Banner</li>
                            <li>Cardstock</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row py-5 service">
                    <div class="col-md-6 copy" id="printing">
                        <h2>Printing</h2>
                        <p class="lead">
                            No matter the project, we have your graphics solution.
                        </p>
                        <p>
                            We specialize in helping our customers get their message designed, produced and out in public. <a href="tel:1-219-473-1616">Give us a call</a> today to discuss all the custom printing options that we offer.
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Services:</h6>
                                <ul>
                                    <li>Full-color copies</li>
                                    <li>Banners</li>
                                    <li>Posters</li>
                                    <li>Business cards</li>
                                    <li>Decals (stickers)</li>
                                    <li>Labels</li>
                                    <li>Maps</li>
                                    <li>Calendars</li>
                                    <li>Billboards</li>
                                    <li>Wall Graphics</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6>Materials:</h6>
                                <ul>
                                    <li>Canvas</li>
                                    <li>Mesh Banner</li>
                                    <li>Light to Heavy Display Flims</li>
                                    <li>Scrim Vinyl</li>
                                    <li>Perforated Window Vinyl</li>
                                    <li>White & Clear Cling-on</li>
                                    <li>Glossy Art Paper</li>
                                    <li>Satin Photo Paper</li>
                                    <li>Easy Tack Wall Graphics</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <picture class="w-100">
                            <source data-srcset="images/services/printing.webp" class="lazyload" type="image/webp">
                            <img data-src="images/standard-image-format/services/printing.jpg" class="lazyload" alt="Region Signs custom signs and printing.">
                        </picture>
                    </div>
                </div>
                <hr>
                <div class="row py-5 service" id="lettering">
                    <div class="col-md-8">
                        <div class="row image-grid">
                            <div class="col-6">
                                <picture class="w-100">
                                    <source data-srcset="images/services/lettering/mittal.webp" class="lazyload" type="image/webp">
                                    <img data-src="images/standard-image-format/services/lettering/mittal.jpg" class="lazyload" alt="Region Signs Custom Vehicle Lettering">
                                </picture>
                            </div>
                            <div class="col-6">
                                <picture class="w-100">
                                    <source data-srcset="images/services/lettering/coffee.webp" class="lazyload" type="image/webp">
                                    <img data-src="images/standard-image-format/services/lettering/coffee.jpg" class="lazyload" alt="Region Signs Custom Vehicle Lettering">
                                </picture>
                            </div>
                            <div class="col-6">
                                <picture class="w-100">
                                    <img data-src="images/standard-image-format/services/lettering/training.jpg" class="lazyload" alt="Region Signs Custom Vehicle Lettering">
                                </picture>
                            </div>
                            <div class="col-6">
                                <picture class="w-100">
                                    <source data-srcset="images/services/lettering/police.webp" class="lazyload" type="image/webp">
                                    <img data-src="images/standard-image-format/services/lettering/police.jpg" class="lazyload" alt="Region Signs Custom Vehicle Lettering">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 copy">
                        <h2>Lettering</h2>
                        <p class="lead">
                            High-quality interior and exterior materials, ready to supply all of your identification needs.
                        </p>
                        <p>Looking for something specific for your project? <a href="tel:1-219-473-1616"><a href="tel:1-219-473-1616">Give us a call</a></a> to explore all of our lettering options.</p>
                        <h6>Products</h6>
                        <ul>
                            <li>Die-cut vinyl lettering</li>
                            <li>Window Decals</li>
                            <li>Vehicle & Boat Decals</li>
                            <li>Vehicle Wraps</li>
                            <li>Stencils</li>
                            <li>Labels</li>
                            <li>3D Letters and Numbers</li>
                        </ul>
                        <h6>Materials</h6>
                        <ul>
                            <li>Perma-Grip</li>
                            <li>Indoor/Outdoor?</li>
                            <li>Scrim Vinyl</li>
                            <li>Perforated Window Vinyl</li>
                            <li>White & Clear Cling-on</li>
                            <li>Acrylic (3D)</li>
                            <li>Aluminum (3D)</li>
                            <li>Brass (3D)</li>
                            <li>Magnet</li>
                            <li>PVC</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row py-5 service">
                    <div class="col-md-4 copy">
                        <h2>Promotional Items</h2>
                        <p class="lead">
                            Personalized for you.
                        </p>
                        <p>
                            Make a lasting impression with our signature, personalized items. We provide a wide selection that will fulfill all of your marketing needs. Call to get a quote on your next projects customized products.
                        </p>
                        <h6>Products:</h6>
                        <ul>
                            <li>Apparel/Wearables</li>
                            <li>Tradeshow Materials</li>
                            <li>Table Covers</li>
                            <li>Bags/Totes/Luggage</li>
                            <li>Pens/Notepads</li>
                            <li>Drinkware</li>
                            <li>Koozies</li>
                            <li>Magnets</li>
                            <li>Pins</li>
                            <li>Stickers</li>
                            <li>Balloons/Inflatables</li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <picture class="w-100">
                            <source data-srcset="images/services/promotional.webp" class="lazyload" type="image/webp">
                            <img data-src="images/standard-image-format/services/promotional.jpg" class="lazyload" alt="Region Signs has a great selection of promotional items">
                        </picture>
                    </div>
                </div>
                <hr>
                <div class="row py-5 service">
                    <div class="col-md-8">
                        <div class="row image-grid">
                            <div class="col-6">
                                <picture class="w-100">
                                    <source data-srcset="images/services/engraving/sign.webp" class="lazyload" type="image/webp">
                                    <img data-src="images/standard-image-format/services/engraving/sign.jpg" class="lazyload" alt="Printing posters for Perogi Fest">                                
                                </picture>
                            </div>
                            <div class="col-6">
                                <img data-src="images/services/engraving/plaque.webp" class="lazyload" alt="Custom plaque design and installation">                                
                            </div>
                            <div class="col-6">
                                <img data-src="images/services/engraving/memorial.webp" class="lazyload" alt="Whiting Veteran's Memorial by Region Signs, Inc.">                                
                            </div>
                            <div class="col-6">
                                <img data-src="images/services/engraving/wayfinder.webp" class="lazyload" alt="Region Signs custom wayfinder engraving">                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pl-3 copy">
                        <h2>Engraving & Cast Metal Signs</h2>
                        <p class="lead">
                            We engrave on a variety of materials to suit your application.
                        </p>
                        <p>
                           With our state-of-the-art equipment and our highly trained team, we have the capability of offering specialized engraving capabilities. We carry a long line of engraving products. <a href="tel:1-219-473-1616">Call us now</a> to get your custom project in process.
                        </p>
                        <h6>Services:</h6>
                        <ul>
                            <li>Plates</li>
                            <li>Tags</li>
                            <li>Signs</li>
                            <li>Plaques</li>
                            <li>Trophies</li>
                            <li>Awards</li>
                            <li>Pins</li>
                            <li>Clocks</li>
                            <li>Various Gift Items</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row py-5 service">
                    <div class="col-md-4 pl-3 copy">
                        <h2>Design</h2>
                        <p class="lead">
                            Looking for a logo or custom artwork?
                        </p>
                        <p>
                            Using industry standard software, our graphic designers will work closely with you from concept to finished product on getting all your graphics needs met. <a href="tel:1-219-473-1616">Give us a call</a> today to get your project started.
                        </p>
                        <h6>Services:</h6>
                        <ul>
                            <li>Logo & Brand Design</li>
                            <li>Banner Artwork</li>
                            <li>Signage Layouts</li>
                            <li>Vehicle & Window Graphics</li>
                            <li>Label Design</li>
                            <li>Corporate Marketing</li>
                            <li>Brochures</li>
                            <li>Menus</li>
                        </ul>
                        <h6>
                            Top Formats:
                        </h6>
                        <div>
                            <span class="badge badge-pill badge-secondary">.JPEG</span>
                            <span class="badge badge-pill badge-secondary">.PNG</span>
                            <span class="badge badge-pill badge-secondary">.AI</span>
                            <span class="badge badge-pill badge-secondary">.PSD</span>
                            <span class="badge badge-pill badge-secondary">.PDF</span>
                            <span class="badge badge-pill badge-secondary">.ESP</span>
                            <span class="badge badge-pill badge-secondary">.TIFF</span>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <img data-src="images/services/design.webp" class="lazyload" alt="Region Signs graphic design and printing.">
                    </div>
                </div>
                <hr>
                <div class="row py-5 service">
                    <div class="col-md-8">
                        <div class="row image-grid">
                            <div class="col-6">
                                <img data-src="images/services/installation/window.webp" class="lazyload" alt="Region Signs Custom Vehicle Lettering">                                
                            </div>
                            <div class="col-6">
                                <img data-src="images/services/installation/brick.webp" class="lazyload" alt="Region Signs Custom Vehicle Lettering">                                
                            </div>
                            <div class="col-6">
                                <img data-src="images/services/installation/church.webp" class="lazyload" alt="Region Signs Custom Vehicle Lettering">                                
                            </div>
                            <div class="col-6">
                                <img data-src="images/services/installation/unilever.webp" class="lazyload" alt="Region Signs Custom Vehicle Lettering">                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 copy">
                        <h2>Installation</h2>
                        <p class="lead">
                            Designed to your needs, installed to your specifications.
                        </p>
                        <p>
                            Need a hand getting noticed? From start to finish, we get the job done. With our team of trained professionals, we offer local delivery and installation.
                        </p>
                        <p>
                            <a href="tel:1-219-473-1616">Call us</a> today to get your signs installed and start getting noticed now.
                        </p>
                        <h6>Products</h6>
                        <ul>
                            <li>Safety Signs</li>
                            <li>Hanging signs</li>
                            <li>Yard Signs</li>
                            <li>Wayfinders</li>
                            <li>Signcades</li>
                            <li>Storefront Identification</li>
                            <li>Event Outings</li>
                            <li>Traffic Control</li>
                            <li>Pipe Identification</li>
                        </ul>
                        <h6>Materials</h6>
                        <ul>
                            <li>Aluminum (various weights)</li>
                            <li>Corrugated Plastic</li>
                            <li>Foamcore</li>
                            <li>PVC Board</li>
                            <li>MDO Board</li>
                            <li>Magnet</li>
                            <li>Banner</li>
                            <li>Cardstock</li>
                        </ul>
                    </div>
                </div>
                <div class="row py-5 service">
                    <div class="col-md-4 copy">
                        <h2>Painted Projects</h2>
                        <p class="lead">
                            Casey allows us to offer a wide range of capabilities and options for our clients. If you're interested in a project, <a href="https://www.caseykingart.com/paint">visit his page</a> for more information.
                        </p>
                        <p>
                            <a href="tel:1-219-473-1616">Call us</a> today to commission a painting.
                        </p>
                        <h6>Specializing in hand-painted</h6>
                        <ul>
                            <li>Murals</li>
                            <li>Signage</li>
                            <li>Sculptures</li>
                            <li>Fabrication</li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="row image-grid">
                            <div class="col-6">
                                <img data-src="images/standard-image-format/services/painting/barber.jpg" class="lazyload" alt="Region Signs Custom Vehicle Lettering">                                
                            </div>
                            <div class="col-6">
                                <img data-src="images/standard-image-format/services/painting/beard.jpg" class="lazyload" alt="Region Signs Custom Vehicle Lettering">                                
                            </div>
                            <div class="col-6">
                                <img data-src="images/standard-image-format/services/painting/owl.jpg" class="lazyload" alt="Region Signs Custom Vehicle Lettering">                                
                            </div>
                            <div class="col-6">
                                <img data-src="images/standard-image-format/services/painting/signs.jpg" class="lazyload" alt="Region Signs Custom Vehicle Lettering">                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Brand slider -->
        <section class="brands py-2" id="brands">
            <div class="container">
                <div class="row slider-wrapper">
                    <div class="slider multiple-items">
                        <div class="my-auto">
                            <img data-src="images/brands/logo-bp.webp" class="mx-auto lazyload" alt="BP Logo" style="max-width: 150px;">
                        </div>
                        <div>
                            <img data-src="images/brands/logo-arcelormittal.webp" class="mx-auto lazyload" alt="AcelorMittal Logo">
                        </div>
                        <div>
                            <img data-src="images/brands/logo-peterbuilt.webp" class="mx-auto lazyload" alt="Peterbuilt Logo">
                        </div>
                        <div>
                            <img data-src="images/brands/logo-flexngate.webp" class="mx-auto lazyload" alt="Flex n Gate Logo">
                        </div>
                        <div>
                            <img data-src="images/brands/logo-method.webp" class="mx-auto lazyload" alt="Method Logo">
                        </div>
                        <div>
                            <img data-src="images/standard-image-format/brands/logo-citgo.png" class="mx-auto lazyload" alt="Citgo Logo" style="max-width: 120px;">
                        </div>
                        <div>
                            <img data-src="images/standard-image-format/brands/logo-intek.png" class="mx-auto lazyload" alt="Intek Logo" >
                        </div>
                        <div>
                            <img data-src="images/standard-image-format/brands/logo-union-pacific.png" class="mx-auto lazyload" alt="Union Pacific Logo" style="max-width: 150px;">
                        </div>
                        <div>
                            <img data-src="images/standard-image-format/brands/logo-voest-alpine.png" class="mx-auto lazyload" alt="Voest Alpine Logo" >
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Photo gallery -->
        <section class="gallery bg-light py-5" id="work">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>Our Work</h2>
                        <p class="lead mb-5">
                            We specialize in custom signage and offer a wide range of capabilities. Get inspired by browsing some examples of past work.
                        </p>
                    </div>
                </div>

                <div class="photo-gallery-pages">
                    <div class="row photo-gallery gallery-1">
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img data-src="images/gallery/whiting-city-signs-banners.jpg" class="lazyload" alt="Instalation of custom signage">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img data-src="images/gallery/whiting.jpg" class="lazyload" alt="Instalation of custom signage">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img data-src="images/gallery/whiting-utility-box.jpg" class="lazyload" alt="Instalation of custom signage">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img data-src="images/gallery/education-banners.jpg" class="lazyload" alt="Instalation of custom signage">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img data-src="images/gallery/elm-sign.jpg" class="lazyload" alt="Instalation of custom signage">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img data-src="images/gallery/event-and-safety.jpg" class="lazyload" alt="Instalation of custom signage">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img data-src="images/gallery/mascot-sign.jpg" class="lazyload" alt="Instalation of custom signage">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img data-src="images/gallery/parking-sign.jpg" class="lazyload" alt="Instalation of custom signage">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img data-src="images/gallery/piatek.jpg" class="lazyload" alt="Instalation of custom signage">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img data-src="images/gallery/piatek-2.jpg" class="lazyload" alt="Instalation of custom signage">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img data-src="images/gallery/chicago-steel.jpg" class="lazyload" alt="Instalation of custom signage">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img data-src="images/gallery/cleveland.jpg" class="lazyload" alt="Instalation of custom signage">
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="/work" class="btn btn-block btn-primary py-3 mb-3 text-uppercase text-light font-weight-bold">
                                View More Images
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial slider -->
        <section class="testimonials py-5">
            <div class="container">
                <div class="carousel carousel-fade" data-ride="carousel">
                    <div class="carousel-inner" style="height: 300px">
                        <div class="carousel-item active d-flex h-100 align-items-center justify-content-center">
                            <blockquote class="blockquote text-center align-middle mb-0">
                                <p class="mb-0">
                                    "The work done at Region Signs is exquisite! <br>We order shirts there annually and they wash and wear great!"
                                </p>
                                <footer class="blockquote-footer">
                                    Nick F.
                                </footer>
                            </blockquote>
                        </div>
                        <div class="carousel-item d-flex h-100 align-items-center justify-content-center">
                            <blockquote class="blockquote text-center align-middle mb-0">
                                <p class="mb-0">
                                    "Great place for all of your <br>printing and marketing needs!"
                                </p>
                                <footer class="blockquote-footer">
                                    Colin P.
                                </footer>
                            </blockquote>
                        </div>
                        <div class="carousel-item d-flex h-100 align-items-center justify-content-center">
                            <blockquote class="blockquote text-center align-middle mb-0">
                                <p class="mb-0">
                                    "They saved our project, they're always quick, <br>great and can help you out with any printing bind."
                                </p>
                                <footer class="blockquote-footer">
                                    Brittany E.
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact card & Google Maps -->
        <section class="directions bg-light pt-5" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col text-center pb-3">
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-4">
                        <div class="card mb-5 text-center">
                            <picture>
                                <source srcset="images/119th.webp" type="image/webp">
                                <img src="images/standard-image-format/119th.jpg" alt="Region Signs in downtown Whiting, IN" class="card-img-top">
                            </picture>
                            <div class="card-body">
                                <p class="mb-0">
                                    <strong>Region Signs Inc.</strong><br>
                                    1345 119th Street<br>
                                    Whiting, IN 46394
                                </p>
                                <hr>
                                <p class="mb-0">
                                    <i class="fas fa-phone"></i>
                                    <spam>(219)473-1616</spam>
                                </p>
                                <p class="mb-0">
                                    <i class="fas fa-fax"></i>
                                    <span>(219)473-9905</span>
                                </p>
                                <p class="mb-0">
                                    <i class="far fa-envelope"></i>
                                    <span>sales@regionsignsinc.com</span>
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="tel:1-219-473-1616" class="btn btn-primary">
                                    Call
                                </a>
                                <a href="mailto:sales@regionsignsinc.com" class="btn btn-primary">
                                    Email
                                </a>
                                <a href="http://maps.apple.com?daddr=1345+119th+Street,+Whiting+IN" class="btn btn-primary btn-block mt-2 d-sm-none">Directions</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="100%" height="600" 
                      id="gmap_canvas" 
                      src="https://maps.google.com/maps?q=region%20signs&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                      frameborder="0" 
                      scrolling="no" 
                      marginheight="0" 
                      marginwidth="0"></iframe>
                </div>
            </div>
        </section>
    </main>
    <footer class="py-5 bg-dark text-light text-center-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h5>Apparel Catalogs</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="http://regionsignsinc.imprintableapparel.com/catalog/8" target="_blank">Athletic &#38; Outerwear</a></li>
                        <li><a class="text-muted" href="http://regionsignsinc.imprintableapparel.com/catalog/8" target="_blank">Uniforms &#38; Workwear</a></li>
                        <li><a class="text-muted" href="http://regionsignsinc.imprintableapparel.com/catalog/12" target="_blank">Accessories</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h5>Promotional Items</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="https://www.garyline.com/" target="_blank">Garyline</a></li>
                        <li><a class="text-muted" href="http://www.targetline.com/product-section/usa/27" target="_blank">Targetline</a></li>
                        <li><a class="text-muted" href="https://www.imagenbrands.com/Product/Index/" target="_blank">Crown</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h5>Trophies &#38; Awards</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="http://www.corpawds.com/" target="_blank">Gifts &#38; Corporate</a></li>
                        <li><a class="text-muted" href="http://www.premiersportawards.com/index.php?p=yes" target="_blank">Sport &#38; Academic</a></li>
                        <li><a class="text-muted" href="http://premiercrystal.com/index.php?prices=YES" target="_blank">Crystal &#38; Glass</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h5>Local Links</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="http://www.whitingindiana.com/" target="_blank">City of Whiting</a></li>
                        <li><a class="text-muted" href="https://www.wrchamber.com/" target="_blank">Whiting Chamber of Commerce</a></li>
                        <li><a class="text-muted" href="http://www.lakeshorechamber.com/" target="_blank">Lakeshore Chamber of Commerce</a></li>
                    </ul>
                </div>
                <div class="col-12 mt-3">
                    <img src="images/logo.png" alt="Region Signs Inc." style="width: 70px!important" class="pb-2">
                    <small class="d-block mb-3 text-muted">Copyright &copy; 2019 Region Signs, Inc. All Rights Reserved.</small>
                    <ul class="social-icons list-group list-group-horizontal list-unstyled">
                        <li class="pr-3">
                            <a class="text-muted" href="https://www.facebook.com/Region-Signs-Inc-254793944581396" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="pr-3">
                            <a class="text-muted" href="https://www.yelp.com/biz/region-signs-whiting" target="_blank">
                                <i class="fab fa-yelp"></i>
                            </a>
                        </li>
                        <li class="pr-3">
                            <a class="text-muted" href="https://www.google.com/search?ei=GurqXMLCK8Ks0PEPqImneA&q=region+signs+inc&oq=region+signs+inc&gs_l=psy-ab.3..0l2.1166.1722..2021...0.0..0.120.533.2j3......0....1..gws-wiz.......33i22i29i30j33i160j0i22i30.-As3RdRwxhk#lrd=0x8811d91c119005c3:0x87bc35ee11eda234,1,,," target="_blank">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                        <li class="pr-3">
                            <a class="text-muted" href="https://twitter.com/RegionSignsInc" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" type="text/javascript"></script>
    <script src="/js/lazysizes.min.js" async=""></script>
    <script src="/js/scripts.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-70431347-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-70431347-3');
    </script>
    <script>
        $(document).ready(function(){
            /* Slick slider */
            $('.slider').slick({
                autoplay: true,
                slidesToShow: 3,
                infinite: true,
                dots: true,
                arrows: false,
                speed: 800,
                responsive: [
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            dots: false,
                        }
                    }
                ]
            });
        });
    </script>
</body>
</html>