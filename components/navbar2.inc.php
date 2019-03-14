<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">


    	<!-- Brand -->
        <a class="navbar-brand pt-0 waves-effect" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php 
            	$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				if ( has_custom_logo() ) {
				        echo '<img src="'. esc_url( $logo[0] ) .'" alt="'. get_bloginfo( 'description' ) .'">';
				} else {
				        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
				}
            ?>
        </a>
        <!-- Brand -->



	<?php if ( has_nav_menu( 'header-menu' ) || has_nav_menu( 'social' ) ) : ?>
		<!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

		<!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
			
			<?php if ( has_nav_menu( 'header-menu' ) ) : ?>
			<ul class="navbar-nav mr-auto">	
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'header-menu',	
				                'menu_class' 	  => 'nav-item',															
								'walker' => new Custom_Walker_Nav_Menu_Top
							)
						);
						//create_bootstrap_menu( 'header-menu' );
						//clean_custom_menus('header-menu');
					?>
			</ul>
			<?php endif; ?>

		</div><!-- Links -->
	<?php endif; ?>


	</div>
</nav>
<!-- Navbar -->