<?php get_header();

while(have_posts()){
	the_post();
   ?>
	<div class="page-section">
 				<div class="wrapper">
 				
 					<h2 class="headline headline--large headline--centered">
 						<?php the_title(); ?>
 					</h2>
 					

 					<?php if(has_post_thumbnail( )): ?>
 					<div class="single__image">
 						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
 					</div>
 				<?php endif; ?>
 				 	<div class="metabox">
 						
 						<p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Blog Home</a></p>
 					</div>
 					
 					<div class="generic-content-container"><?php the_content(); ?></div>
 				</div>
		</div>

	<?php
}

get_footer();
 ?>
