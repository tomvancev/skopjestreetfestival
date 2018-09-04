<?php get_header(); ?>

		<div class="page-section blog">
			
 			 <div class="wrapper">
 				<h2 class="headline headline--large headline--centered">
				<?php if(get_cat_name(get_queried_object_id())){
					echo 'Category: ' . get_cat_name(get_queried_object_id());
				}else{ ?>
 					Blog Naslov
 				<?php } ?>
 				</h2>
 		   <?php 
 		   if(!have_posts()): ?> 
			<br>
			<br>
			<br>
			<p style="text-align: center;">Sorry we don't have any posts in this category yet...</p>

			<?php 
 		   	endif;

      	while(have_posts()): the_post();
        ?>
 			<div class="row row--gutters">
			 		<div class="blog__item__image-container row__medium-3">
			 			<img src="<?php 
								if(has_post_thumbnail()){
									echo get_the_post_thumbnail_url();
									}else{
									echo get_theme_file_uri( $file = 'images/plaza.jpg' );
										
									}	

								 ?>" alt="">
			 		</div>
			 		<div class="row__medium-6 blog__item__content">
			 			<h2><?php echo wp_trim_words(get_the_title(),20); ?></h2>
			 			<p><?php if(has_excerpt()){
					              echo get_the_excerpt();
					            }else{
					            echo wp_trim_words(get_the_content(),40);
					            } 
					            ?></p>
	            		<p class="text-center no-b-margin"><a href="<?php the_permalink(  ); ?>" class="btn btn--black btn--full-width">Procitaj Poveke</a></p>
			 		</div>
 			</div>	
      <?php 
		 endwhile;
		 echo paginate_links();
     	?>
 		
 			</div>
		</div>

<?php get_footer(); ?>
