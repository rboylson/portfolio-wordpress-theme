
<?php
get_header();
?>

<div id="single" class="site-wrapper">
    <div class="single-wrapper">
        <div class="single-container">
            <div class="single-content">
                <h1 class="part1"><?php echo get_field( "name" );?></h1>
                <h3 id="project-blurb" class="part1"><?php echo get_field( "blurb" );?></h3>
                <div id="single-line" class="part1"></div>
                <h2 id="project-type" class="part1"><strong>Product Type: </strong><?php echo get_field( "product" );?></h2>
                <h2 class="part1"><strong>Year: </strong><?php echo get_field( "year" );?></h2>
                <br />
                <h2 class="part1"><strong>Role: </strong><?php echo get_field( "role" );?></h2>
                <br />
                <div class="part1 tech-used">
                    <h2 class="tech-used"><strong>Technologies Used: </strong></h2>
                    <p class="tech-used"><?php echo get_field( "tech_used" );?></p>
                </div>
            </div>
        </div>
    </div>
    <div id="synopsis" class="single-wrapper">
        <div class="single-container">
            <div class="single-details-wrapper">
                <div class="single-photo part2">
                    <?php
                        $image = get_field('synopsis_image');
                        if( !empty($image) ){ ?>
                           <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php } ?>
                </div>
                <div class="single-details-line part2"></div>
                <div class="details">
                    <h1 class="part2">Synposis</h1>
                    <div class="single-details part2">
                        <?php echo get_field( "synopsis" );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="techthoughts" class="single-wrapper">
        <div class="single-container float-right">
            <div class="single-details-wrapper reverse">
                <div class="details">
                    <h1 class="part3">Tech<br />Thoughts</h1>
                    <div class="single-details part3">
                        <?php echo get_field( "tech_thoughts" );?>
                    </div>
                </div>
                <div class="single-details-line part3"></div>
                <div class="single-photo part3">
                    <?php
                        $image = get_field('tech_thoughts_image');
                        if( !empty($image) ){ ?>
                           <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php } ?>
                    <?php
                        $video = get_field('tech_thoughts_video');
                        if( !empty($video) ){
                            echo get_field('tech_thoughts_video');
                        } ?>
                </div>
            </div>
        </div>
    </div>
    <div id="impact" class="single-wrapper">
        <div class="single-container">
            <div class="single-details-wrapper">
                <div class="single-photo part5">
                    <?php
                        $image = get_field('impact_image');
                        if( !empty($image) ){ ?>
                           <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php } ?>
                </div>
                <div class="single-details-line part5"></div>
                <div class="details">
                    <h1 class="part5">Impact</h1>
                    <div class="single-details part5">
                        <?php echo get_field( "impact" );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
get_footer();
?>
