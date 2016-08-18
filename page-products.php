<?php

/*

Template name: Products
*/

?>

<?php get_header(); ?>

    <div class="page-title page-title-blue stacked-title">
        <div class="container">
            <div class="row show-grid">
                <div class="span12">
                    <?php the_title('<h1>', '</h1>'); ?>
                </div>
            </div>
        </div>
    </div>

        <!-- MAIN CONTENT AREA -->  
        <div class="main-wrapper">
        <div class="main-content">
        
            <div class="container">
                <div class="row show-grid">
                    <div class="span12">
                        <div class="row show-grid">
                            <div id="left-sidebar" class="span3 sidebar left-box-height">     
                                <br>                          
                                <div class="sidebar-baloon sidebar-grey-box">
                                    <p>Please contact us for custom applications or products not shown.</p>
                                </div>                              
                            </div>


                            <?php if( have_rows('accordion') ): ?>
                                <?php while( have_rows('accordion') ): the_row(); ?>

                            <div class="span9 main-column two-columns-left">
                                <h2 class="faq-title"><?php the_sub_field('section_title'); ?></h2>
                                    <div id="accordion2" class="accordion">

                                <?php if( have_rows('product') ): ?>
                                    <?php while( have_rows('product') ): the_row(); ?>

                                

                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a href="#<?php the_sub_field('accordion_name'); ?>" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                                                <?php the_sub_field('product_title'); ?>
                                            </a>
                                        </div>
                                        <div class="accordion-body collapse" id="<?php the_sub_field('accordion_name'); ?>" style="height: 0px;">
                                            <div class="accordion-inner">
                                                <?php the_sub_field('product_editor'); ?>
                                            </div>
                                        </div>
                                    </div>  

                    
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div> <!-- end span9 -->
                            
                                <?php endwhile; ?>
                            <?php endif; ?>

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