<html>
	<head>
		<title>Skopje Street Food Festival</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
		
	</head>
	<body>
		<header class="site-header site-header--black">
			<div class="wrapper wrapper--relative">
				
				    <div class="site-header__ssf-logo site-header__ssf-logo--img-small">
						<a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_file_uri( $file = 'images/logo.png' ); ?>" alt="" class=""></a>
		  			</div>
			
		        <div class="site-header__menu-icon">
		          	<div class="site-header__menu-icon__middle"></div>
		        </div>
				<div class="site-header__menu-content">
		    		<nav class="primary-nav primary-nav--centered">
						<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
					</nav>	

				</div>	
			</div>	
		</header>