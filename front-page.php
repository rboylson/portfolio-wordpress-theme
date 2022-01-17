<?php get_header();?>

<div id='home' class='generic-container'>
	<div class='hero-content'>
		<h1 class='name part1'>
			<span>Rachel <span class='last-name'>Boylson</span>
		</h1>
		<h2 class='title part1'>Frontend Web Developer</h2>
		<div class='hero-line part1'></div>
	</div>
	<div class='hero-meta'>
		<div class='social'>
			<a class='social-icon envelope' href='mailto:rachelboylson@gmail.com'>
				<i class='far fa-envelope part1'></i>
			</a>
			<a class='social-icon' href='https://www.linkedin.com/in/rachelboylson/' target='_blank'>
				<i class='fab fa-linkedin-in part1'></i>
			</a>
		</div>
	</div>
</div>

<div id='about' class='generic-container'>
	<div class='about-content'>
		<h1 class='part3'>About</h1>
		<div class='about-line part3'></div>
		<div class='about-wrapper'>
			<div>
				<p class='part3'>Creative and detail-oriented frontend developer with a proven history of successful collaboration with design and marketing partners to turn designs into reusable, clean, responsive code. </p>
				<p class='h2 part3'>When I'm not coding, I'm: </p>
				<p class='part3'>
					A part time macrame artist<br />
					An OG Animal Crossing islander<br />
					Secretly a coffee snob<br />
				</p>
			</div>
			<div>
				<p class='h2 part3'>Technologies: </p>
					<div class='part3 technologies'>
						<div class='technology'><i class="fab fa-html5"></i><span class='label'>HTML</span></div>
						<div class='technology'><i class="fab fa-css3-alt"></i><span class='label'>CSS</span></div>
						<div class='technology'><i class="fab fa-sass" style="font-size: 30px;"></i><span class='label'>SASS</span></div>
						<div class='technology'><i class="fab fa-js-square"></i><span class='label'>JavaScript</span></div>
						<div class='technology'><i class="fab fa-react"></i><span class='label'>React</span></div>
						<div class='technology'><i class="fab fa-git-alt"></i><span class='label'>Git</span></div>
						<div class='technology'><img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/nextjs-icon-dark.svg' /><span class='label'>Next.js</span></div>
					</div>
					<div class='part3 technologies'>
						<div class='technology'><img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/GraphQL Logo (Black).svg' /><span class='label'>GraphQL Querying</span></div>
						<div class='technology'><img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/heroku-logo-solid-black.svg' /><span class='label'>Heroku</span></div>
						<div class='technology'><i class="fab fa-wordpress-simple"></i><span class='label'>WordPress</span></div>
						<div class='technology'><i class="fab fa-php" style="font-size: 30px;"></i><span class='label'>PHP</span></div>
						<div class='technology'><span><i class="fas fa-database" style="font-size: 35px;"></i></span><span class='label'>SQL</span></div>
						<div class='technology'><span><i class="fas fa-running" style="font-size: 33px;"></i></span><span class='label'>GSAP</span></div>
						<div class='technology'><span><i class="fas fa-spinner"></i></span><span class='label'>Agile Scrum</span></div>
					</div>
			</div>
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
					<div class='single-details-line part3a'></div>
					<div class='single-details'>
						<h1 class='part3a'><?php echo get_field('name');?></h1>
						<h3 class='project-blurb part3a'><?php echo get_field('synopsis');?></h3>
						<div class='single-project-details part3a'>
							<p><span class='h2'><strong>Technology used:&nbsp;</strong></span></p>
							<p class='tech-used h2'><?php echo get_field('tech_used');?></p>
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

<?php get_footer();
?>
