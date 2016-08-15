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
                                   
                                    <!-- FOOTER: ADDRESS -->
                                    <address class="address">

                                        <p><i class="icon-map-marker icon-large"></i>384 Nina Way</p>
                                        <p><i class="icon-map-marker icon-large" style="opacity:0"></i>Warminster, PA 18974</p>

                                        <p><i class="icon-phone icon-large"></i>Office: <a href="tel:215-672-4838">215-672-4838</a></p>      
                                        <p><i class="icon-phone icon-large"></i>Fax: <a href="tel:215-672-4904">215-672-4904</a></p>

                                        <p><i class="icon-print icon-large"></i><a href="mailto:info@nextgenlifelabs.com?Subject=Information%20Request">info@nextgenlifelabs.com</a></p>                   
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
                                            <a href="about_us.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="product.html">Products</a>
                                        </li>
                                        <li>
                                            <a href="services.html">Services</a>
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
                            <p>All content Copyright 2016 NextGen LifeLabs</p>
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
