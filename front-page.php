<?php
get_header();
?>


<div id="home" class="generic-container">
    <div class="hero-content">
        <h1 class="name part1">
            <span>Rachel <span class="last-name">Boylson</span>
        </h1>
        <h2 class="title part1">Front End Web Developer</h2>
        <div class="hero-line part1"></div>
    </div>
    <div class="hero-meta">
        <h2 class="city part1">
            <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Based in San Francisco
        </h2>
        <div class="social">
            <a class="social-icon envelope" href="mailto:rachelboylson@gmail.com">
                <i class="far fa-envelope part1"></i></i>
            </a>
            <a class="social-icon linkedin" href="https://www.linkedin.com/in/rachelboylson/" target="_blank">
                <i class="fab fa-linkedin-in part1"></i></i>
            </a>
        </div>
    </div>
</div>

<div id="portfolio" class="generic-container">
    <h1 class="section-title part2">Projects</h1>
    <div class="project-home-wrapper">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="project-home-item part2">
                    <div class="project-home-card">

                        <div class="project-home-hover">
                            <h3><?php echo get_field( "blurb" );?></h3>
                        </div>

                        <div class="project-home-default">
                            <h1><?php echo get_field( "name" );?></h1>
                            <div class="project-home-line"></div>
                            <div>
                                <h3><?php echo get_field( "product" );?>, <?php echo get_field( "year" );?></h3>
                            </div>
                        </div>

                    </div>
                    <div class="project-home-cta">
                        <a href="<?php echo get_permalink();?>" class="links"><h2>DETAILS →</h2></a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<div id="about" class="generic-container">
    <div class="about-content">
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
    <div class="about-image">
        <img class="part3a" src="/wp-content/themes/rmb_portfolio/assets/headshot-bw.jpg" />
    </div>
</div>

<?php
get_footer();
?>
