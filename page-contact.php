<?php

/*

Template name: Contact

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
							<h2>Contact Us</h2>
							<br>
							<p> <b>NextGen Life Labs, Inc.</b><br>
								384 Nina Way<br>
								Warminster, PA 18974<br>
								Office: <a href="tel:215-672-4838">215-672-4838</a><br>
								Fax: <a href="tel:215-672-4904">215-672-4904</a><br>
								Facebook: <a href="https://www.facebook.com/nextgenlifelabs" target="_blank">https://www.facebook.com/nextgenlifelabs</a><br>
								LinkedIn: <a href="https://www.linkedin.com/company/8333433" target="_blank">https://www.linkedin.com/company/8333433</a>
							</p>
						</div>
					</div>
				</div>
			</div>

		<!-- END MAIN/PRIMARY CONTENT AREA -->

		</div>
		<div class="about-us-spacer-300"></div>
		<!-- MAIN CONTENT AREA: REDESIGN CUSTOM - RECENT TWEETS BAR -->
	</div>

	<div class="about-us-spacer-100"></div>

<?php get_footer(); ?>