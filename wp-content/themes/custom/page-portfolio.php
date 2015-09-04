<?php

/*

 * Template Name: Portfolio-page

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
                            <li><a target="_blank" href="https://medium.com/@ray_vevaina">BLOG</a></li>
                            <li><a href="contact">CONTACT</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav pull-right">
                        <li><a href="/">ABOUT</a>
                        </li>
                        <li class="active"><a href="#">WORK</a>
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
<div class="page-wrapper">
    <section class="work">
        <div class="container">
            <div class="head-box">
                <div class="brand">
                    <img src="<?php echo get_template_directory_uri(); ?>/common-files/img/projects/notch-logo.png" width="42" height="21" alt=""><h3>Notch</h3></div>
                <p>Web and mobile app built specifically for foosball enthusiasts everywhere.</p>
                <p>Using ReactJs and firebase, we built a web and mobile application that generates bracket style playoff scenarios and tracks scores & rankings to find out who is the best of the best at foosball at
                    <a target="_blank" href="http://www.tammandkit.com/">Tamm+Kit</a>.
                </p>
                <div class="features">
                    <div>
                        <span>Technologies Used: </span><br/ >  React.js | Firebase | jQuery | HTML5 + CSS3 (SCSS) | Responsive Design
                    </div>
                    <div>
                        <span>Client </span><br/ >  Tamm+Kit (Agency promotion)
                    </div>
                </div>
            </div>
            <div class="projects">
                <div class="project-wrapper">
                    <div class="project">
                        <div class="photo-wrapper">
                            <a href="http://www.themetalworks.ca/" target="_blank">
                                <div class="photo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common-files/img/projects/metalworks.png">
                                </div>
                                <div class="overlay"><span class="fui-eye"></span>
                                </div>
                            </a>
                        </div>
                        <div class="info">
                            <div class="name"><h3>The MetalWorks</h3></div>
                            <p>Fusion Homes needed a way to showcase their new development project, a new urban village called ‘The MetalWorks’ in Guelph, Ontario.</p>
                            <p>We created a responsive website illustrating their story by using social media as the forefront of the user experience.</p>
                            <p>Utilizing live twitter and Instragram feeds and interactive media such as videos and slideshows, we were able to capture large amounts of user attention and hype leading up to the launch of the village.</p>
                            <p><span class="technology">Created at</span><a target="_blank" href="http://www.blackjet.ca/"> Blackjet Inc</a>
                            <p><span class="technology">Technologies Used:</span><br /><span> jQuery | Dropkick.js | HTML5 + CSS3 (SASS) | Responsive Design</span></p>

                        </div>
                    </div>
                </div>
                <div class="project-wrapper">
                    <div class="project">
                        <div class="photo-wrapper">
                            <a href="http://www.waterwisecoffee.com/" target="_blank">
                                <div class="photo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common-files/img/projects/waterwise.png">
                                </div>
                                <div class="overlay"><span class="fui-eye"></span>
                                </div>
                            </a>
                        </div>
                        <div class="info">
                            <div class="name"><h3>WaterWise Coffee</h3></div>
                            <p>Created in partnership with <a target="_blank" href="http://www.mother-parkers.com">Mother Parkers</a>, WaterWise coffee is a commitment to improving lives, ecology and economies through water related projects.</p>
                            <p>To promote their seven part documentary filmed in Africa, we created an interactive web experience using a Wordpress build, with each page showcasing a different aspect of the documentary.</p>
                            <p>The website was an integral part of the Waterwise project, raising awareness through social media and driving people to donate. ($21,015 raised to date)</p>
                            <p><span class="technology">Created at</span><a target="_blank" href="http://www.dashboard.ca/"> Dashboard</a>
                            <p><span class="technology">Technologies Used:</span><br /><span> Wordpress | jQuery | HTML5 + CSS3 (SCSS) | Responsive Design</span></p>
                        </div>
                    </div>
                </div>
                <div class="project-wrapper">
                    <div class="project">
                        <div class="photo-wrapper">
                            <a href="/etdt/index.html" target="_blank">
                                <div class="photo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common-files/img/projects/etdt.png">
                                </div>
                                <div class="overlay"><span class="fui-eye"></span>
                                </div>
                            </a>
                        </div>
                        <div class="info">
                            <div class="name"><h3>Eat This. Drink That.</h3></div>
                            <p>Hungry? Thirsty? Hungry and Thirsty at the same time?</p>
                            <p>Eat This. Drink That. is an web app created to help people choose where to go out using randomized food and drink pairings.  Using the yellow pages API, the app generates a list of restaurants and bars based on what foods and drinks you're craving at the time.</p>
                            <p>Fight thirst, hunger and decision fatigue all at once, using this simple and intuitive app.</p>
                            <p><span class="technology">Technologies Used:</span><br /> <span>APIs + AJAX  | jQuery | HTML5 + CSS3 (SCSS) | Responsive Design</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.container-->
    </section>
</div>
    <?php get_footer(); ?>