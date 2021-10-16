<?php
get_header();
?>
<div class="site-wrapper">
    <div class="site-border" id="home">
        <div id="home-wrapper">
            <div id="home-container">
                <div id="hero-content">
                    <h1 id="name" class="part1"><span>Rachel <span id="last-name">Boylson</span></h1>
                    <h2 id="title" class="part1">Front End Web Developer</h2>
                    <div id="hero-line" class="part1"></div>
                </div>
                <div id="hero-meta">
                    <h2 id="city" class="part1"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Based in San Francisco</h2>
                    <div id="social">
                        <a class="social-icon envelope" href="mailto:rachelboylson@gmail.com">
                            <i class="far fa-envelope part1"></i></i>
                        </a>
                        <a class="social-icon linkedin" href="https://www.linkedin.com/in/rachelboylson/" target="_blank">
                            <i class="fab fa-linkedin-in part1"></i></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-border projects" id="portfolio">
        <div class="projects-wrapper">
            <h1 class="projects-title part2">Portfolio</h1>
            <div class="projects-grid">
                <?php $count = 1; ?>
                <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="projects-container part2">
                        <div class="project-info">
                            <!-- <h2>
                                <?php echo get_field( "product" );?>
                                <span class="project-info-line"></span>
                                <?php echo get_field( "year" );?>
                            </h2> -->
                            <h1><?php echo get_field( "name" );?></h1>
                                <div class="project-blurb">
                                    <h3><?php echo get_field( "blurb" );?></h3>
                                </div>
                            </div>
                            <div class="project-line"></div>
                            <div class="project-cta part2">
                                <a href="<?php echo get_permalink();?>" class="links"><h2>DETAILS →</h2></a>
                            </div>
                        </div>
                        <?php $count++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>




    <div class="site-border" id="about">
        <div id="about-wrapper">
            <div id="about-container">
                <div id="about-content-wrapper">
                    <div id="about-content">
                        <h1 class="part3">About</h1>
                        <h1 class="title part3">Serial <span class="title-bold">Crafter</span></h1>
                        <a class="part3" href="https://www.instagram.com/cincinnatiweavingco/" target="_blank">View my Instagram →</a>

                        <h1 class="title part3">Ameture iPhone <span class="title-bold">Photographer</span></h1>
                        <a class="part3" href="https://www.instagram.com/walksthroughsf/" target="_blank">View my (other) Instagram →</a>

                        <h1 class="title part3"><span class="title-bold">Cincinnati</span> Native</h1>
                        <h3 class="part3">If you ever find yourself in South West Ohio...</h3>
                        <a class="part3" href="https://momnemcoffee.com/" target="_blank">Favorite Coffee Shop →</a>
                        <a class="part3" href="https://blueashchili.com/" target="_blank">Favorite Cincinnati-style chili →</a>

                        <h1 class="title part3">Semi-avid <span class="title-bold">Reader</span></h1>
                        <a class="part3" href="https://gregmckeown.com/books/effortless/" target="_blank">Favorite Read →</a>
                        <a class="part3" href="https://www.amazon.com/dp/B004XCFRV8/ref=dp-kindle-redirect?_encoding=UTF8&btkr=1" target="_blank">Current Read →</a>

                        <h1 class="title part3"><span class="title-bold">non-Minimalist </span>Minimalist</h1>
                        <a class="part3" href="https://www.huffpost.com/entry/the-ultimate-guide-to-realistic-minimalism-what-you-need-what-you-dont-and-how-to-break-the-cycle-of-wanting_b_8101430" target="_blank">How I keep things realistically simple →</a>
                    </div>
                    <div id="about-line" class="part3a"></div>
                    <div id="about-image">
                        <img class="part3a" src="/wp-content/themes/rmb_portfolio/assets/headshot-bw.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
?>
