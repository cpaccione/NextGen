        <!-- FOOTER STARTS HERE -->
        <footer id="footer">
            <div class="footer-top"></div>
            <div class="footer-wrapper">
                <div class="container">
                    <div class="row show-grid">
                        <div class="span12">
                            <div class="row show-grid">
                                <!-- FOOTER: LOGO -->
                                <div class="span4">
                                    <img alt="" class="footer-logo" src="<?php bloginfo('template_directory'); ?>/images/nextgen_logo.png" />
                                    <!-- FOOTER: ADDRESS -->
                                    <address class="address">

                                        <p><i class="icon-map-marker icon-large"></i>Philadelpia, PA USA</p>

                                        <p><i class="icon-phone icon-large"></i>David Hopely: <a href="tel:215-410-1987">(215) 410-1987</a></p>      
                                        <p><i class="icon-phone icon-large"></i>Steve Strzempek: <a href="tel:215-870-3433">(215) 870-3433</a></p>

                                        <p><i class="icon-print icon-large"></i><a href="mailto:steve@nextgenlifelabs.com?Subject=Information%20Request">steve@nextgenlifelabs.com</p>                   
                                        <p><i class="icon-print icon-large"></i><a href="mailto:david@nextgenlifelabs.com?Subject=Information%20Request">david@nextgenlifelabs.com</p>
                                    </address>
                                </div>
                                <!-- FOOTER: ABOUT US -->
                                <div class="span4 footer-center">
                                    <h4 class="center-title">About Us</h4>

                                    <p>With a combined 20 years experience, we offer skilled installation and service support for a wide range of equipment as well as laboratory planning, expansion and relocation consultation.</p>
                                </div>
                                <!-- FOOTER: NAVIGATION LINKS -->
                                <div class="span4 footer-right">
                                    <h4 class="center-title">Navigate</h4>
                                    <ul class="footer-navigate">
                                        <li>
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li>
                                            <a href="index.html">Products</a>
                                        </li>
                                        <li>
                                            <a href="index.html">Services</a>
                                        </li>
<!--                                         <li>
                                            <a href="team.html">Our Team</a>
                                        </li>
                                        <li>
                                            <a href="contactus.html">Contact Us</a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row show-grid">
                        <!-- FOOTER: COPYRIGHT TEXT -->
                        <div class="span12">
                            <p>All content Copyright 2014 NextGen LifeLabs | Site by <a href="http://www.adamfreemer.net">AF Designs</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        </div>

		<script>
			jQuery(function($) {
			    if($(window).width()>769){
			        $('.navbar .dropdown').hover(function() {
			            $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

			        }, function() {
			            $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

			        });

			        $('.navbar .dropdown > a').click(function(){
			            location.href = this.href;
			        });

			    }
			});
		</script>
		<?php wp_footer(); ?>
	</body>
</html>
