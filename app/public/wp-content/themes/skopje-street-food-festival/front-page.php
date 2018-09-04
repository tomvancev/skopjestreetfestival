<?php get_header(); ?>
 		

 		<?php 
	   $slideShowSlides = new WP_Query(array(
          'posts_per_page'=> -1,
          'post_type'=>'slide'
        ));
 		 ?>
			<div class="hero-slider">
				<?php
			 if($slideShowSlides->have_posts()): 
			     while($slideShowSlides->have_posts()):$slideShowSlides->the_post();
		        ?>
				<div>
					<img src="<?php echo get_field('slide_image')['sizes']['frontPageSlide']; ?>" alt="">
				</div>

 	<?php  endwhile; ?>
 	<?php 	wp_reset_postdata(); ?>
    <?php  else: ?>
				<div>
					<img src="<?php echo get_theme_file_uri( $file = 'images/omlette.jpg' ); ?>" alt="">
				</div>
				<div>
					<img src="<?php echo get_theme_file_uri( $file = 'images/plaza.jpg' ); ?>" alt="">
				</div>			
	<?php  endif; ?>					
			</div>

	<?php 
		/*
		 * The WordPress Query class.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/WP_Query
		 */

		$args = array(
			'post_type' => array(
				'post'
			),
	
			'post_status' => array(
				'publish'
			),
			'posts_per_page' => 20
		);
	
		$homePagePost = new WP_Query( $args );

	 ?>



		<div class="page-section">
			<div class="wrapper">
				<div class="row row--gutters">
	<?php 
				$postCount = 1;
				if($homePagePost->have_posts()): 
			    while($homePagePost->have_posts()):$homePagePost->the_post(); 
    ?>

				
					<div class="row__medium-4" >
						<div class="blog-card">
							<div class="blog-card__image-container">
								<img src="<?php 
								if(has_post_thumbnail()){
									echo get_the_post_thumbnail_url();
									}else{
									echo get_theme_file_uri( $file = 'images/plaza.jpg' );
										
									}	

								 ?>" alt="" class="blog-card__image">
							</div>
							<div class="blog-card__headline">
								<h2 data-title="<?php the_title(); ?>"><?php echo wp_trim_words(get_the_title(),12); ?></h2>
							</div>
							<div class="blog-card__content">
								<p><?php if(has_excerpt()){
					              echo get_the_excerpt();
					            }else{
					            echo wp_trim_words(get_the_content(),40);
					            } 
					            ?></p>
							</div>
							<p class="text-center no-b-margin"><a href="<?php the_permalink( ); ?>" class="btn btn--black btn--full-width">Procitaj Poveke</a></p>
						</div>
					</div>
			<?php 
				if($postCount % 3 == 0){
					?>
				</div>
				<div class="row row--gutters">
					<?php 
				}
			 ?>

	<?php 
				$postCount++;
				endwhile;
				wp_reset_postdata();
				else:
					echo "<p>No posts found</p>";
				endif;
	 ?>
					
				</div>
			</div>
		</div>

<?php get_footer(); ?>