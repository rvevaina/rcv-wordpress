<?php get_header(); ?>

<div class="header-container">
    <div class="row">
        <nav class="navbar home-page col-sm-12" role="navigation">
            <div class="wrap">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle"></button>
                    <a class="brand about-page" href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/common-files/img/header/nav-logo3.png" alt=""></a>
                </div>

                <div class="mobile-nav">
                    <input class="burger-check" id="burger-check" type="checkbox">
                    <label for="burger-check" class="burger"></label>
                    <nav id="mobile-navigation" class="mobile-navigation">
                        <ul>
                            <li><a href="work">WORK</a></li>
                            <li><a target="_blank" href="https://medium.com/@ray_vevaina">BLOG</a></li>
                            <li><a href="contact">CONTACT</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="nav pull-right">
                        <li class="active"><a href="#about-section">ABOUT</a>
                        </li>
                        <li><a href="work">WORK</a>
                        </li>
                        <li><a target="_blank" href="https://medium.com/@ray_vevaina">BLOG</a>
                        </li>
                        <li><a href="contact">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<section class="main-landing full-height">
    <img class ="wall-image" src="<?php echo get_template_directory_uri(); ?>/common-files/img/home/video-top7.png" usemap="#after" alt=""/>
    <img class="wall-image-after" src="<?php echo get_template_directory_uri(); ?>/common-files/img/home/wall-image-after3.png" usemap="#after" alt=""/>
    <map name="after" id="after">
        <area shape="poly" coords="741,43,1146,35,1143,201,736,206" href="#about-section" class="about-section-wall" onclick="slideToAbout();return false;">
        <area shape="poly" coords="741,203,1146,202,1143,337,734,340" href="work.html">
        <area shape="poly" coords="736,339,1149,345,1147,562,745,553" href="contact">
        <area shape="poly" coords="96,173,741,179,742,421,105,425" href="#" onclick="stopVideo();return false;">
    </map>

    <video autoplay class="video-main"> <div class="overlay"></div>
        <source src="<?php echo get_template_directory_uri(); ?>/common-files/img/home/video.mp4" type="video/mp4">
        <!--<source src="../video/band.webm" type="video/webm">-->
    </video>

</section>

<section class="about-section row" id="about-section">
    <div class="container">
        <div class="overlay"></div>
        <div class="design">
            <div class="design-content">
                <h3 class="title">Design</h3>
                <img class="vector" src="<?php echo get_template_directory_uri(); ?>/common-files/img/home/design-vector.png"/>
                <div class="text">
                    <p>The first step to creating quality mobile and web applications is a well thought out design and UX plan.</p>
                    <p>My design process starts out with simple wireframes that are eventually shaped into efficient user experience journeys.</p>
                    <p>Using modern UI (user interface) principles, my team and I create clean, beautiful and functional designs that won’t just draw customers in, but will keep them coming back for more.
                    </p>
                </div>
            </div>
        </div>
        <img class="plus-sign" src="<?php echo get_template_directory_uri(); ?>/common-files/img/home/plus1.png">
        <div class="develop">
            <div class="develop-content">
                <h3 class="title">Development</h3>
                <img class="vector" src="<?php echo get_template_directory_uri(); ?>/common-files/img/home/develop-vector.png"/>
                <div class="text"><p>RCV Interactive's development philosophy is simple - <br> creating amazing software is a two way street.</p>
                    <p>I strive towards responsive communication and fully understanding your goals before choosing the best possible way to tell your story to the world.</p>
                    <p>Although I specialize in front-end development, CSS & JavaScript frameworks and custom management software, ultimately our development journey will be decided by how best to attract and retain customers to your business.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="main-content" id="main-content">
    <section class="about-2">
        <img class="design-dev-mobile" src="<?php echo get_template_directory_uri(); ?>/common-files/img/home/design+dev-mobile.png" alt=""/>
        <div class="container">
            <div class="row skills">
                <div class="col-sm-10 col-lg-7 col-md-7">
                    <h3>Services</h3>
                    <p>I take care of the entire design and development process from prototyping to quality assurance to ensure your customers receive the best website/app experience possible.
                    </p>
                    <div class="features">
                        <div class="box">
                            <img src="<?php echo get_template_directory_uri(); ?>/common-files/icons/front-end.png" width="100" height="100" alt="">
                            <h6>Software development</h6>
                            <p>Utilizing front-end development languages such as <a><a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5">HTML5</a>, <a target="_blank"
                                                                                                                                                                                          href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS3">CSS3</a> & <a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/JavaScript"> JavaScript.</a><br> Frameworks such as <a target="_blank" href="http://getbootstrap.com/">Bootstrap</a>,<a
                                        href="http://foundation.zurb.com/"> Foundation</a> & <a target="_blank" href="http://facebook.github.io/react/">ReactJS</a>, and CMS’s (Custom Management Software) such as
                                    <a target ="_blank" href="https://wordpress.com/">WordPress</a> & <a target="_blank" href="//www.shopify.ca/">Shopify</a>.
                            </p>
                        </div>
                        <div class="box">
                            <img src="<?php echo get_template_directory_uri(); ?>/common-files/icons/Responsive1@2x.png" width="100" height="100" alt="">
                            <h6 class="responsive">Responsive Design</h6>
                            <p>Modern responsive design techniques to ensure your website/app delivers consistent user experience on different browsers, laptops, tablets, mobile phones and large screen computers.
                            </p>
                        </div>
                        <div class="box">
                            <img src="<?php echo get_template_directory_uri(); ?>/common-files/icons/wordpress.png" width="100" height="100" alt="">
                            <h6>Wordpress/Custom CMS</h6>
                            <p>Need a website with content that needs frequent updating? No worries. You get full control over the content on your website using custom management software such as <a target ="_blank" href="https://wordpress.com/">WordPress</a>, <a target="_blank" href="//www.shopify.ca/">Shopify</a> and <a target ="_blank" href="https://squarespace.com/">Sqaurespace.</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-offset-1 text-center">
                    <img class="iphone" src="<?php echo get_template_directory_uri(); ?>/common-files/img/content/iphone@2x.png" width="302" height="635" alt="">
                    <div id="c-10_myCarousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?php echo get_template_directory_uri(); ?>/common-files/img/home/mobile-screenshot1.png" width="302" height="635" alt="">
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri(); ?>/common-files/img/home/mobile-screenshot2.png" width="302" height="635" alt="">
                            </div>
                            <div class="item">
                                <img class="screenshot3" src="<?php echo get_template_directory_uri(); ?>/common-files/img/home/mobile-screenshot3.png" width="302" height="635" alt="">
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#c-10_myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#c-10_myCarousel" data-slide-to="1"></li>
                            <li data-target="#c-10_myCarousel" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-landing">
        <div class="overlay"></div>
        <div class="container">
            <h2>Transform your web presence with unique digital experiences.</h2>
            <a class="btn btn-success" href="contact">Say Hello</a>
        </div>
    </section>


<?php get_footer(); ?>
