<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    <title>Our Story - ASAFAR.US: Nurturing Nature's Sweetness from Morocco</title>
    <meta name="description" content="Learn about the journey behind ASAFAR.US, where passion meets purity. Explore our commitment to delivering the finest Moroccan honey, rooted in tradition and sustainability.">
</head>
<body>

 <header id="header" class="header style-02 header-dark header-transparent header-sticky">
    @include('layout.header')
 </header>

<div class="banner-wrapper has_background">
    @include('layout.banner')
    <div class="banner-wrapper-inner">
        <h1 class="page-title">About</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="{{ route('index') }}"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>About</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="site-main  main-container no-sidebar">
    <div class="section-037">
        <div class="container">
            <div class="akasha-popupvideo style-01">
                <div class="popupvideo-inner">
                    <div class="icon">
                        <img src="assets/images/about-img.png"
                             class="attachment-full size-full" alt="img">
                             <img src="assets/images/about-img2.png" style="margin-top: 1rem"
                             class="attachment-full size-full" alt="img">
                        <div class="product-video-button">
                            <a class="buttonvideo" href="#" data-videosite="vimeo" data-videoid="158800043" tabindex="0">
                                <div class="videobox_animation circle_1"></div>
                                <div class="videobox_animation circle_2"></div>
                                <div class="videobox_animation circle_3"></div>
                            </a>
                        </div>

                    </div>

                    <div class="popupvideo-wrap">
                        <h4 class="title">
                            Who we are </h4>
                        <p class="desc">
                            <h4>About Asafar.us</h4>
                            <p>Welcome to Asafar.us, where the pure essence of Morocco comes to life through our exceptional organic products. We take pride in offering a unique range of Moroccan treasures, with a focus on exquisite honey and the delightful ammlou.
                            </p>


                            <h4>Our Story</h4>

                            <p>Asafar.us is born from a passion for authenticity and a deep appreciation for the rich Moroccan traditions. Our journey began with the desire to share the goodness of nature, sourced directly from the bountiful landscapes of Morocco. We believe in the power of organic, sustainable practices that not only preserve the environment but also deliver unparalleled quality to our customers.
                            </p>
                            <h4>The Essence of Morocco</h4>
                            <p>At Asafar.us, we specialize in curating the finest Moroccan honey and ammlou, bringing you the purest flavors and nutritional benefits straight from the heart of Morocco. Our honey is a true testament to the diverse flora of the Moroccan countryside, resulting in a rich, amber nectar that captivates the senses. Each jar tells a story of bees dancing through fragrant blossoms and the meticulous craftsmanship of our beekeepers.
                            </p>
                            <h4>Ammlou: A Taste of Tradition</h4>

                            <p>Explore the unique experience of ammlou, a traditional Moroccan spread that combines the richness of almonds, argan oil, and honey. This delectable fusion offers a harmonious blend of nutty undertones and sweet notes, a culinary delight that reflects the centuries-old culinary heritage of Morocco.
                            </p>

                            <h4>Sustainability and Quality</h4>
                            <p>We are committed to sustainable and ethical practices, ensuring that our products not only meet the highest quality standards but also contribute to the well-being of the environment and local communities. Our dedication to authenticity and purity is a testament to the care we put into every step of the production process.
                            </p>

                            <h4>Join Us on a Journey</h4>

                            <p>Embark on a journey with Asafar.us and discover the unparalleled taste of Moroccan nature. We invite you to savor the richness of our organic honey and ammlou, crafted with love and respect for the land. At Asafar.us, we don't just offer products; we offer a piece of Morocco, delivered to your doorstep.
                            </p>


                            Thank you for choosing Asafar.us – where nature meets tradition, and every jar tells a story.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-040">
        <div class="akasha-heading style-01">
            <div class="heading-inner">
                <h3 class="title">
                    Follow Us </h3>
                <div class="subtitle">
                    @ASAFAR.US
                </div>
            </div>
        </div>

    </div>
</div>
@include('layout.footer')
@include('layout.nav-footer')
<a href="#" class="backtotop active">
    <i class="fa fa-angle-up"></i>
</a>
@include('layout.js')
</body>

</html>
