<?php
/*
Template Name: Home Page 
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">
					
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    	<?php get_template_part( 'partials/loop', 'home' ); ?>
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>
                        
                        <div class="row home-blocks-container">
                          <div class="large-12 columns">
                            <!--<h1>We design graphics for your business or product.</h1>
                            <p>We believe that excellent graphic design can help your business thrive. We are brand specialists located in Croton on Hudson, NY. Designing logos, websites, brochures, packaging and more, we will help your company stand out. Imagine your product or service with a professional, unified look. An eye-catching design that stands out amongst your competitors, and is unique to YOUR product or service, ultimately resulting in increased sales.</p>-->
                            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Homeintro')) : endif; ?>
                            </div>
                            </div>
                            
                            <div class="row home-blocks-container" data-equalizer>
                            <div class="large-4 columns home-widget-container" data-equalizer-watch>
                            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Homeleft')) : endif; ?>
                            </div>
                            <div class="large-4 columns home-widget-container" data-equalizer-watch>
                            <div class="flex-video"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Homecenter')) : endif; ?></div>
                            </div>
                            <div class="large-4 columns home-widget-container" data-equalizer-watch>
                            
                            <div class="social-icons">
                            	<h4>Follow Us</h4>
                            	<ul class="inline-list">
                                     <li><a href="#" class="icon-facebook"></a></li>
                                     <li><a href="#" class="icon-google-plus"></a></li>
                                     <li><a href="#" class="icon-twitter"></a></li>
                                     <li><a href="#" class="icon-pinterest"></a></li>
                                     <li><a href="#" class="icon-linkedin"></a></li>
                                     <li><a href="#" class="icon-youtube"></a></li>
                                     <li><a href="#" class="icon-instagram"></a></li>
                                </ul>
                            </div>
                            
                            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Homeright')) : endif; ?>
                            
                            </div>
                            </div>
                            <div class="row">
                            <div class="large-12 columns">
                            <div class="panel">
                            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Homecta')) : endif; ?>
                            <!--<h4>Get in touch!</h4>
                            <div class="row">
                            <div class="large-9 columns">
                            
                            We'd love to hear from you, you attractive person you.
                            
                            </div>
                            <div class="large-3 columns">
                            <img class="alignright  wp-image-50" alt="Opt-in.1" src="http://hvgd.prowebinnovations.com/wp-content/uploads/2014/02/Opt-in.1.jpg" width="180" height="77" /></div>
                            </div>
                            </div>-->
                            </div>
                            </div>

    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
