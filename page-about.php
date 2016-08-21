<?php

/*

Template name: About Us

*/

?>

<?php get_header(); ?>

    <!-- MAIN CONTENT AREA --> 
        <div class="main-wrapper">
        <div class="main-content">
            <div class="container">
                <div class="row show-grid">         
                    <!-- BEGIN LEFT-SIDEBAR -->
                    <div class="span3 sidebar" id="left-sidebar">
                        <!-- LEFT-SIDEBAR: SIDEBAR NAVIGATION -->
                        <div class="side-nav sidebar-block left-side-nav">                            
                            <br>
                            <div class="widget-wrap">
                                <?php dynamic_sidebar( 'about' ); ?>
                            </div>
                        </div>                                
                    </div>                           
                    <!-- END LEFT-SIDEBAR -->

                    <!-- BEGIN MAIN/PRIMARY CONTENT AREA -->                            
                    <div class="span9 main-column two-columns-left">
                        <div class="row show-grid team-member">                                    

                            <div class="span9">
	                            
	                            <br><?php the_title('<h2>', '</h2>'); ?><br>
	                            
                            <?php
		                            
	                            $image = get_field('hero_image');
		                            
		                            
		                            if( !empty($image) ):
		                            
		                            //vars
		                            $url = $image['url'];
                 		            $alt = $image['alt'];
				 					$caption = $image['caption'];
		                           
	                            ?>
	                            
	                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
	                            
	                            <?php if( $caption ): ?>
	                            
	                            <p class="experience"><em><?php echo $caption; ?></em></p><br>
	                            	                            	                         
                            	<?php endif; ?>
                            <?php endif; ?>
	                            
                                <?php the_field('editor'); ?>
                                
                            </div>

                        </div>
                    </div>
                </div>

                <!-- END MAIN/PRIMARY CONTENT AREA -->

            </div>
            
        <!-- MAIN CONTENT AREA: REDESIGN CUSTOM - RECENT TWEETS BAR -->
        </div>

<?php get_footer(); ?>