<?php

/*

Template name: Team

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
			                <br>
			                <div class="span9">
				                <?php the_title('<h2>', '</h2>'); ?>
			                </div>
		                </div>
		                
		                <?php if( have_rows('team') ): ?>
		                	<?php while( have_rows('team') ): the_row(); 
			                	
			                	//vars
			                	$image = get_sub_field('profile_photo');
			                	$name = get_sub_field('name');
			                	$title = get_sub_field('title_and_location');
			                	$phone = get_sub_field('phone_number');
			                	$email = get_sub_field('email_address');
			                				                 				   
		                	?>
		                	
				                <div class="row show-grid team-member">
					                <div class="span3 photo">
						                <div class="bordered-img"><img alt="<?php echo $image['alt']; ?>" src="<?php echo $image['url']; ?>"></div>
						                <ul>
							                <li><span><?php echo $phone; ?></span><i class="icon-phone"></i></li>
							                <li><span><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></span><i class="icon-envelope"></i></li>
						                </ul>
					                </div>
					                <div class="span6">
						                <h2><?php echo $image['title'] ?></h2>
						                <h4><?php echo $title; ?></h4>
						                <p class="experience"><em></em></p>
					                </div>
				                </div>
		                	
		                	
		                	<?php endwhile; ?>
	                	<?php endif; ?>
		                
		                
	                </div>
                </div>
	            <!-- END MAIN/PRIMARY CONTENT AREA -->

            </div>
	        <!-- MAIN CONTENT AREA: REDESIGN CUSTOM - RECENT TWEETS BAR -->

        </div>

<?php get_footer(); ?>