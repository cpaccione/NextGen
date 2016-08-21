<?php

/*

Template Name: Home

*/


?>

<?php get_header(); ?>

                <div class="fullwidthbanner-container">
                    <div class="banner">
                        <ul>
                            <?php if( have_rows('slider') ): ?>
                                <?php while( have_rows('slider') ): the_row(); 

                                //vars
                                $background = get_sub_field('background_image');
                                $product = get_sub_field('product_image');
                                $fieldOne = get_sub_field('title_field_one');
                                $fieldTwo = get_sub_field('title_field_two');
                                $summary = get_sub_field('product_summary');

                                ?>


                            <li class="slide2" data-transition="slotfade-horizontal"  data-masterspeed="300" data-slotamount="20">
                                <img src="<?php echo $background['url']; ?>" alt="<?php echo $background['alt']; ?>">
                                <div class="caption lfb carousel-caption" data-x="0" data-y="0" data-speed="1000" data-start="500" data-easing="easeOutBack" style="background: none;">
                                    <img src="<?php echo $product['url']; ?>" alt="<?php echo $product['alt']; ?>">
                                </div>
                                <div class="caption sft carousel-caption" data-x="475" data-y="0" data-speed="1000" data-start="500" data-easing="easeInBack" style="background: none; padding-left: 0;">
                                    <p class="large"><?php echo $fieldOne; ?></p>
                                </div>

                                <div class="caption sft carousel-caption" data-x="475" data-y="35" data-speed="1000" data-start="500" data-easing="easeInBack" style="background: none; padding-left: 0;">
                                    <p class="large"><?php echo $fieldTwo; ?></p>
                                </div>

                                <div class="caption sfr carousel-caption" data-x="460" data-y="95" data-speed="1000" data-start="500" data-easing="easeOutBack" style="background: none;">
                                    <p class="medium"><?php echo $summary; ?></p><br>
                                </div>

                                <div class="caption sfr carousel-caption" data-x="460" data-y="235" data-speed="1000" data-start="500" data-easing="easeOutBack" style="background: none;">
                                    <p class="medium"><img src="<?php bloginfo('template_directory'); ?>/images/slide2_bullet.png" alt="">  Incubators</p>
                                    <p class="medium"><img src="<?php bloginfo('template_directory'); ?>/images/slide2_bullet.png" alt="" />  HD video products</p>
                                    <p class="medium"><img src="<?php bloginfo('template_directory'); ?>/images/slide2_bullet.png" alt="" />  Heated work surfaces</p>
                                    <p class="medium"><img src="<?php bloginfo('template_directory'); ?>/images/slide2_bullet.png" alt="" />  Alarm monitoring</p>
                                    <p class="medium"><img src="<?php bloginfo('template_directory'); ?>/images/slide2_bullet.png" alt="" />  Process gas control</p>
                                    <p class="medium"><img src="<?php bloginfo('template_directory'); ?>/images/slide2_bullet.png" alt="" />  Custom products</p><br>
                                </div>         

                                <div class="caption sfr carousel-caption" data-x="460" data-y="345" data-speed="1000" data-start="500" data-easing="easeOutBack" style="background: none;">
                                </div>   

                                <div class="caption sfr carousel-caption" data-x="490" data-y="345" data-speed="1000" data-start="500" data-easing="easeOutBack" style="background: none;">
                                </div>
                            </li> 

                            <?php endwhile; ?>
                        <?php endif; ?>

                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
	
            <!-- MAIN CONTENT AREA -->
    		<div class="main-wrapper">
        		<div class="main-content">
            		<div class="container">
                

                <div class="row show-grid features-block mini-blocks">
                    <div class="span4 block1">
                        <div class="mini-wrapper">

                        <h2><?php the_field('news_title'); ?></h2>

                            <ul class="soft-updates">
                                <?php if( have_rows('news') ): ?>
                                    <?php while( have_rows('news') ): the_row();

                                    //vars
                                    $month = get_sub_field('month');
                                    $day = get_sub_field('day');
                                    $editor = get_sub_field('editor');


                                    ?>

                                    <li>
                                        <div class="date-img">
                                            <span class="top-date"><?php echo $month; ?></span>
                                            <span class="bottom-date"><?php echo $day; ?></span>
                                        </div>
                                        <?php echo $editor; ?>
                                    </li>

                                    <?php endwhile; ?>
                                <?php endif; ?>
                                  
                            </ul>

                        </div>
                    </div>

                    <div class="span4 block2">
                        <div class="mini-wrapper">
                            <h2><?php the_field('press_release_title'); ?></h2>
                            <ul>
                                <li><?php the_field('press_release_editor'); ?></li>
                            </ul>
                        </div>
                    </div>

                    <div class="span4 block3">
                        <div class="mini-wrapper">
                        <h2><?php the_field('brand_title'); ?></h2>
                        <ul class="mini-clients">
                            <?php if ( have_rows('brands') ): ?>
                                <?php while ( have_rows('brands') ): the_row();
	                                
	                                $link = get_sub_field('link');
	                                $brandImage = get_sub_field('brand_image');
	                                
                                ?>

                                    <li>
                                        <a href="<?php echo $link; ?>" target="_blank"><img style="margin-left: 15px;" src="<?php echo $brandImage['url']; ?>" alt="<?php $brandImage['alt']; ?>"></a>
                                    </li>

                                <?php endwhile; ?>
                            <?php endif; ?>
                            
                        </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

<?php get_footer(); ?>
