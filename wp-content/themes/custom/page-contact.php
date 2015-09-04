<?php

/*

 * Template Name: Contact-page

 * Description: A Page Template with no sidebar.

 */

get_header(); ?>

    <div class="header-container">
        <div class="row">
            <nav class="navbar col-sm-12" role="navigation">
                <div class="wrap">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle"></button>
                        <a class="brand" href="/">
                            <img src="<?php echo get_template_directory_uri(); ?>/common-files/img/header/nav-logo3.png" alt="">
                        </a>
                    </div>
                    <div class="mobile-nav">
                        <input class="burger-check" id="burger-check" type="checkbox">
                        <label for="burger-check" class="burger"></label>
                        <nav id="mobile-navigation" class="mobile-navigation">
                            <ul>
                                <li><a href="/">HOME</a></li>
                                <li><a href="work">WORK</a></li>
                                <li><a target="_blank" href="https://medium.com/@ray_vevaina">BLOG</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav pull-right">
                            <li><a href="/">ABOUT</a>
                            </li>
                            <li><a href="work">WORK</a>
                            </li>
                            <li><a target="_blank" href="https://medium.com/@ray_vevaina">BLOG</a>
                            </li>
                            <li class="active"><a href="contact">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="page-wrapper">
        <section class="contact-me">
            <div class="container">
                <div class="content">
                    <div class="social-btns">
                        <a href="mailto:hello@rcvinteractive.com">
                            <div class="fui-mail"></div>
                            <div class="fui-mail"></div>
                        </a>
                        <a target="_blank" href="https://ca.linkedin.com/in/rayhanv">
                            <div class="fui-linkedin"></div>
                            <div class="fui-linkedin"></div>
                        </a>
                        <a target="_blank" href="https://twitter.com/ray_vevaina">
                            <div class="fui-twitter"></div>
                            <div class="fui-twitter"></div>
                        </a>
                    </div>
                    <div class="profile">
                        <p>My name is Rayhan Vevaina, a Toronto based designer and developer specializing<br /> in unique web experiences.</p>

                        <p> I have a passion for creating beautiful, intuitive, and highly crafted web solutions,</br> combining strategy with emerging technologies.</p>

                        <p>My <a href ="work">work</a> is a sample of projects created both independently and as part of</br> various agencies.</p>
                    </div>
                    <div class="contact-para">
                        <h3>Get in touch</h3>
                        <p>I am always looking to partner with like-minded<br /> people with a passion for creating great work.</p>
                        <p>If you are interested in working together,<br /> please reach out to me at the email address below - </p>
                        <div class="links">
                            <a href="mailto:hello@rcvinteractive.com">hello@rcvinteractive.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php get_footer(); ?>
    </div>

