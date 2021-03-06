<?php

/*

Template name: Product Overview
*/

?>

<?php get_header(); ?>

        <!-- MAIN CONTENT AREA -->  
        <div class="main-wrapper">
        <div class="main-content">
        
            <div class="container">
                <div class="row show-grid">
                    <div class="span12">
                        <div class="row show-grid">
                            <div id="left-sidebar" class="span3 sidebar">     
                                <br>                          
                                <div class="sidebar-baloon sidebar-grey-box">
                                    <p><?php the_field('left_sidebar'); ?></p>
                                </div>                              
                            </div>

                            <div class="span9 main-column two-columns-left">
	                            
	                            <br><?php the_title('<h2 class="faq-title">', '</h2>'); ?>
	                            <div id="accordion1" class="accordion">
		                            <ul><br>
			                            <?php if( have_rows('overview_links') ): ?>
                                            <?php while( have_rows('overview_links') ): the_row();

                                            //vars

                                            $pagelink = get_sub_field('link');
                                            $pagetitle = get_sub_field('title');


                                            ?>

			                            
			                                 <li><a href="<?php echo $pagelink; ?>"><?php echo $pagetitle; ?></a></li>

                                            <?php endwhile; ?>
                                        <?php endif; ?>

		                            </ul>
		                            
	                            </div>
	                            
	                            
                            </div> <!-- end span9 -->

                    </div>
                </div>
            </div>
            </div>
            
            <div class="recent-tweets">
                <div class="container">
                    <div class="row show-grid">
                    </div>    
                </div>           
            </div>
        </div>

        <div class="about-us-spacer-100"></div>

<?php get_footer(); ?>