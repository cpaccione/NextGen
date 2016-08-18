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
				                <h2>Our Team</h2>
			                </div>
		                </div>

		                <div class="row show-grid team-member">
			                <div class="span3 photo">
				                <div class="bordered-img"><img alt="" src="<?php bloginfo('template_directory'); ?>/images/team-member-steve.jpg"></div>
				                <ul>
					                <li><span>215-870-3433</span><i class="icon-phone"></i></li>
					                <li><span><a href="mailto:steve@nextgenlifelabs.com">steve@nextgenlifelabs.com</a></span><i class="icon-envelope"></i></li>
				                </ul>
			                </div>
			                <div class="span6">
				                <h2>Steve Strzempek</h2>
				                <h4>Technical Sales and Marketing Director<br>Eastern U.S. Sales</h4>
				                <p class="experience"><em></em></p>
			                </div>
		                </div>


		                <div class="row show-grid team-member">
			                <div class="span3 photo">
				                <div class="bordered-img"><img alt="" src="<?php bloginfo('template_directory'); ?>/images/team-member-david.jpg"></div>
				                <ul>
					                <li><span>215-410-1987</span><i class="icon-phone"></i></li>
					                <li><span><a href="mailto:david@nextgenlifelabs.com">david@nextgenlifelabs.com</a></span><i class="icon-envelope"></i></li>
				                </ul>
			                </div>
			                <div class="span6">
				                <h2>David Hopely</h2>
				                <h4>Engineering and Service Director<br>Western U.S. Sales</h4>
				                <p class="experience"><em></em></p>

			                </div>
		                </div>


		                <div class="row show-grid team-member">
			                <div class="span3 photo">
				                <div class="bordered-img"><img alt="" src="<?php bloginfo('template_directory'); ?>/images/team-member-ian.jpg"></div>
				                <ul>
					                <li><span>856-495-7863</span><i class="icon-phone"></i></li>
					                <li><span><a href="mailto:ian@nextgenlifelabs.com">ian@nextgenlifelabs.com</a></span><i class="icon-envelope"></i></li>
				                </ul>
			                </div>
			                <div class="span6">
				                <h2>Ian Tuch</h2>
				                <h4>Project Manager</h4>
				                <p class="experience"><em></em></p>

			                </div>
		                </div>

		                <div class="row show-grid team-member">
			                <div class="span3 photo">
				                <div class="bordered-img"><img alt="" src="<?php bloginfo('template_directory'); ?>/images/team-member-colleen.jpg"></div>
				                <ul>
					                <li><span>215-672-4838</span><i class="icon-phone"></i></li>
					                <li><span><a href="mailto:colleen@nextgenlifelabs.com">colleen@nextgenlifelabs.com</a></span><i class="icon-envelope"></i></li>
				                </ul>
			                </div>
			                <div class="span6">
				                <h2>Colleen Strzempek</h2>
				                <h4>Office Manager</h4>
				                <p class="experience"><em></em></p>

			                </div>
		                </div>


	                </div>
                </div>
	            <!-- END MAIN/PRIMARY CONTENT AREA -->

            </div>
	        <!-- MAIN CONTENT AREA: REDESIGN CUSTOM - RECENT TWEETS BAR -->

        </div>

<?php get_footer(); ?>