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
                            
                            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Homeintro')) : endif; ?>
                            
                          </div>
                        </div>
                            
                            <div class="row home-blocks-container">
                                <div class="large-4 columns home-widget-container">
                                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Homeleft')) : endif; ?>
                                </div>
                                <div class="large-4 columns home-widget-container">
                                <div class="flex-video"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Homecenter')) : endif; ?></div>
                                </div>
                                <div class="large-4 columns home-widget-container">

                                <div class="social-icons">
                                    <h4>Follow Us</h4>
                                    <ul class="inline-list">
                                         <li><a href="https://www.facebook.com/HudsonValleyGraphics" title="Facebook Page" class="icon-facebook"></a></li>
                                         <li><a href="https://plus.google.com/u/0/112462019235863494371/posts" title="Google + Page" class="icon-google-plus"></a></li>
                                         <li><a href="https://twitter.com/hvgraphics" title="Follow Us" class="icon-twitter"></a></li>
                                         <li><a href="http://www.pinterest.com/janeenv60/" title="Pinterest Scrapbook" class="icon-pinterest"></a></li>
                                         <li><a href="http://www.linkedin.com/profile/view?id=140537391&trk=tab_pro" title="Janeen's Linkin Profile" class="icon-linkedin"></a></li>
                                         <li><a href="http://www.youtube.com/channel/UCaYAf6tT67Q5RYNtzUVs4AQ" title="Graphic design vidoes" class="icon-youtube"></a></li>
                                         <li><a href="http://instagram.com/hudson_valley_graphics#" title="Photo sharing" class="icon-instagram"></a></li>
                                    </ul>
                                </div>

                                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Homeright')) : endif; ?>

                                </div>
                            </div>
                            <div class="row">
                                <div class="large-12 columns">
                                <div class="panel">

                                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Homecta')) : endif; ?>

                                </div>
                                </div>
                            </div>

    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
