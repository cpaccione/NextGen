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
                            <br>
                                <h2>About Us</h2>
                                <br>
                                <img src="<?php bloginfo('template_directory'); ?>/images/building.jpg" alt="NextGen Corporate Headquarters">
                                <p class="experience"><em>Our new corporate headquarters in Warminster, PA</em></p><br>
                                <p>Established in 2012, NextGen LifeLabs is focused on providing specialized cutting edge equipment, services and support for the modern ART laboratory. Our world class support and services are matched by our line of ART laboratory products.<br><br>

                                With a combined 20 years experience, we offer skilled installation and service support for a wide range of equipment as well as laboratory planning, expansion and relocation consultation.</p>
                                <br><br>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- END MAIN/PRIMARY CONTENT AREA -->

            </div>
            <!-- MAIN CONTENT AREA: REDESIGN CUSTOM - RECENT TWEETS BAR -->
        </div>

<?php get_footer(); ?>