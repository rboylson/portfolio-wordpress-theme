
<?php
get_header();
?>

<div class="site-border" class="projects">
    <div class="projects-wrapper">
        <div class="projects-container">
            <div class="project-info">
                <h2>
                    <?php echo get_field( "product" );?>
                    <span class="project-info-line"></span>
                    <?php echo get_field( "year" );?>
                </h2>
                <h1><?php echo get_field( "name" );?></h1>
                <div class="project-blurb">
                    <h3><?php echo get_field( "blurb" );?></h3>
                </div>
            </div>
            <div class="project-line"></div>
            <div class="project-cta">
                <a href="<?php echo get_permalink();?>" class="links"><h2>VIEW DETAILS<br /> ABOUT THIS PROJECT →</h2></a>
            </div>
        </div>
    </div>
</div>

<h2>Synopsis</h2>
<?php echo get_field( "synopsis" );?>
<?php
    $image = get_field('synopsis_image');
    if( !empty($image) ){ ?>
       <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php } ?>
<h2>Development Thoughts</h2>
<?php echo get_field( "tech_thoughts" );?>
<?php
    $image = get_field('tech_thoughts_image');
    if( !empty($image) ){ ?>
       <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php } ?>
<h2>Impact</h2>
<?php echo get_field( "impact" );?>
<?php
    $image = get_field('impact_image');
    if( !empty($image) ){ ?>
       <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php } ?>

<?php
get_footer();
?>
