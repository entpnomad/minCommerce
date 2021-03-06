<?php 

/**
 * The default template for displaying all pages.
 *
 * @package minCommerce
 */

include_once 'header_page.php'; ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <header class="pageheader" style="background-image: linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.25)), url('<?php the_post_thumbnail_url('full'); ?>'); background-position: center center; background-repeat: no-repeat; background-size:cover; background-attachment: fixed;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 eudomus">
                        <a href="<?php echo site_url(); ?>" ><img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/eudomus-120-white.png" alt="eudomus logo" /></a>
                    </div>

                    <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-0 head-menu">
                        <?php /*
                        <div class="cart-container">
                            <?php mincommerce_cart_button(); ?>
                        </div> 
                        */ ?>                                           
                        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                    </div>
                </div>
                
                <div class="row titbox">
                    <div class="col-xs-12">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </header>
		
	<section class="main default-page">
            
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
			
<p><?php the_content(); ?></p>
<?php endwhile; else: ?>
<p><?php _e('<h1>Vaya...</h1><br>Lo siento, no he podido encontrar lo que estabas buscando.'); ?></p>
<?php endif; ?>

                    </div>
                    
                    <div class="col-md-4">

                     <?php
                    dynamic_sidebar( 'pageswidgets' );
                    ?>
                                                                        
                    </div>  
                </div>
            </div>
            
	</section>
						
<?php

include_once 'section-contact.php';

get_footer();