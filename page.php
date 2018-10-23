<?php 

/**
 * The default template for displaying all pages.
 *
 * @package minCommerce
 */

get_header(); ?>
		
	<section class="main default-page">
            
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
			
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
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
						
<?php get_footer();