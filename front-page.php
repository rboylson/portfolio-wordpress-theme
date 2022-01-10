<?php get_header();?>

<div id='home' class='generic-container'>
	<div class='hero-content'>
		<h1 class='name part1'>
			<span>Rachel <span class='last-name'>Boylson</span>
		</h1>
		<h2 class='title part1'>Front End Web Developer add a bit more here</h2>
		<div class='hero-line part1'></div>
	</div>
	<div class='hero-meta'>
		<div class='social'>
			<a class='social-icon envelope' href='mailto:rachelboylson@gmail.com'>
				<i class='far fa-envelope part1'></i></i>
			</a>
			<a class='social-icon' href='https://www.linkedin.com/in/rachelboylson/' target='_blank'>
				<i class='fab fa-linkedin-in part1'></i></i>
			</a>
		</div>
	</div>
</div>

<div id='portfolio' class='generic-container'>
	<h1 class='section-title part2'>Projects</h1>
	<?php if (have_posts()): ?>
		<?php $count = 1;?>  
		<?php while (have_posts()): the_post();?>  
			<div class='generic-container portfolio-item-wrapper'>
				<div class='single-details-wrapper <?php if ($count % 2 == 0) { echo 'single-details-wrapper-reverse'; } ?> '>
					<div class='single-photo part3a'>
						<?php $image = get_field('synopsis_image');
						if (!empty($image)) { ?>
							<img src='<?php echo $image['url'];?>' alt='<?php echo $image['alt'];?>' />
						<?php } ?>
					</div>
					<div class='single-details-line'></div>
					<div class='single-details'>
						<h1 class='part3a'><?php echo get_field('name');?></h1>
						<h3 class='project-blurb part3a'><?php echo get_field('blurb');?></h3>
						<div class='single-line part3a'></div>
						<div class='single-project-details part3a'>
							<p><span class='h2'><strong>Technology:&nbsp;</strong></span></p>
							<p><?php echo get_field('tech_used');?></p>
						</div>
						<div class='part3a buttons'>
						<?php
							$viewCode = get_field('view_code');
							if (!empty($viewCode)) { ?>
								<a href=<?php echo get_field('view_code');?> target='_blank'><span class='h2'><strong>View Code</strong></span></a>
							<?php } ?>
							<?php
							$viewCode = get_field('view_live');
							if (!empty($viewCode)) { ?>
								<a href=<?php echo get_field('view_live');?> target='_blank'><span class='h2'><strong>View Live</strong></span></a>
							<?php }	?>
						</div>
					</div>
				</div>
			</div>  
		<?php $count += 1;?>  
		<?php endwhile;?>
	<?php endif;?>
</div>

<div id='about' class='generic-container'>
	<div class='about-content'>
		<h1 class='part3'>About</h1>
		<div class='about-line part3'></div>
		<p class='part3'>Lorem ipsum dolorosa liber mater et in aeternum lorem ipsum dolorosa liber mater et in aeternum lorem ipsum dolorosa liber mater et in aeternum lorem ipsum dolorosa liber mater et in aeternum lorem ipsum dolorosa liber mater et in aeternum lorem ipsum dolorosa liber mater et in aeternum </p>

		<p class='h2 part3'>When I'm not coding, I'm also: </p>

		<p class='part3'><i class="fas fa-angle-double-down"></i> A part time macrame artist</p>
		<p class='part3'><i class="fas fa-gamepad"> </i> An OG Animal Crossing islander</p>
		<p class='part3'><i class="fas fa-mug-hot"></i> Secretly a coffee snob</p>
	</div>
</div>

<?php get_footer();
?>
