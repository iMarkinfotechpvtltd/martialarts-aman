<?php
/*
 Template Name: Home Page Template
 */
?>
<?php get_header(); ?>
   <section class="banner">
        <div class="container">
        <div class="">
            <div class="banner-content col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
			<?php 
				while ( have_posts() ) : the_post();
				echo content('50');
				endwhile;
			?>
                <a href="#down" class="animated">check out our programs below</a>
                
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <?php 
				while ( have_posts() ) : the_post();
				the_post_thumbnail('home');
				endwhile;
			?>
            </div>
        </div>
        </div>
    </section>
    
    <section class="box-section">
        <div class="container" id="down">
        <div class="row">
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="red-box">
                    <?php the_field('kids_martial_arts_content',6);?>
					<?php 						
					$image_id=get_post_meta(6,"kids_martial_arts_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'kid' );
					?>	
                    <img src="<?php echo $thumb['0'];?>" alt="Kid's Martial Arts" />
                    <a href="<?php echo get_permalink(46);?>/?uid=1"> Click Here</a>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="red-box">
                    <?php the_field('after_school_program_content',6);?>
					<?php 						
					$image_id=get_post_meta(6,"after_school_program_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'kid' );
					?>	
                    <img src="<?php echo $thumb['0'];?>" alt="After School Program" />
                    <a href="<?php echo get_permalink(46);?>/?uid=2"> Click Here</a>
                </div>
            </div>
            </div>
            
            <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="red-box">
                     <?php the_field('summer_camp_content',6);?>
					 <?php 						
					$image_id=get_post_meta(6,"summer_camp_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'kid' );
					?>	
                    <img src="<?php echo $thumb['0'];?>" alt="Summer Camp" />
                    <a href="<?php echo get_permalink(46);?>/?uid=3"> Click Here</a>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="red-box">
                    <?php the_field('adult_martial_arts_content',6);?>
					 <?php 						
					$image_id=get_post_meta(6,"adult_martial_arts_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'kid' );
					?>	
                    <img src="<?php echo $thumb['0'];?>" alt="Adult Martial Arts" />
                    <a href="<?php echo get_permalink(46);?>/?uid=4"> Click Here</a>
                </div>
            </div>
            
            </div>
        </div>
        
    
    </section>
    
    <section class="why-us">
        <div class="container">
        <div class="row">
            <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
            <?php the_field('why_mountain_kim_martial_arts',6); ?>
				<?php 						
					$image_id=get_post_meta(6,"why_mountain_kim_martial_arts_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'why' );
				?>	
                <img src="<?php echo $thumb['0'];?>" alt="Why Us" class="img-responsive" />
                <a href="<?php echo get_permalink(23);?>">Learn More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                
                </div>
        </div>
        </div>
    
    </section>
    
    <section class="news-n -test">
    <div class="left-part">
	<?php 						
			$image_id=get_post_meta(6,"testimonial_image",true);	
			$thumb = wp_get_attachment_image_src($image_id, 'testimonial' );
	?>	
        <img src="<?php echo $thumb['0'];?>" alt="Testimonial"/>
        </div>
    <div class="right-part">
        </div>
        
        <div class="container">
        <div class="row">
            <div class="testimonial-main col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-6 col-xs-6">
                <?php the_field('testimonial_content',6);?>
            </div>
            <div class="news-main col-lg-5 col-md-5 col-sm-6 col-xs-6">
                <h2>News</h2>
				<ul>
					<?php 
								$args = array('post_type' => 'post','posts_per_page'=>3,'order' => 'DESC');
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
					?>
                <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
					<?php 
						endwhile;
						wp_reset_query();
					?>
                </ul>
            </div>
            
            </div>
            
            <div class="row">
            <div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-12 col-xs-12 video-slider">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/video-img.jpg" class="img-responsive" />
                <a href="">See All Success Stories <i aria-hidden="true" class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
            
        </div>
    </section>
    
    <section class="find">
    <div class="container">
        <form role="form" class="form-inline">
            <div class="form-group"><label>Find A Location Near You</label></div>
            <div class="form-group"><input type="text" placeholder="ENTER ZIP CODE" class="form-control"><button><span><i aria-hidden="true" class="fa fa-long-arrow-right"></i> <i aria-hidden="true" class="fa fa-long-arrow-right"></i></span></button></div>
        </form>
        
    </div>
    </section>
<?php get_footer();?>