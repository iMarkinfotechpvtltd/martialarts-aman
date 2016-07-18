<?php
/*
 Template Name: About Template
 */
?>
<?php get_header(); ?>
<section class="about">
    <div class="container">
    <div class="row">
        <div class="all-post col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="about-post odd">
			<?php
				while ( have_posts() ) : the_post();
			?>
            <h2><?php the_title();?></h2>
			<?php endwhile;?>
            <div class="a-post-content">
			<?php 						
					$image_id=get_post_meta(23,"about_us_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'about' );
			?>	
            <img src="<?php echo $thumb['0'];?>" class="img-responsive" alt="About Us image" />
            <?php while ( have_posts() ) : the_post(); ?>
            <?php echo content('100'); ?>
			<?php endwhile;?>
            </div>
            
        </div>
        
        <div class="about-post even">
            <h2><?php the_field('our_mission_title',23);?></h2>
            <div class="a-post-content">
			<?php 						
					$image_id=get_post_meta(23,"our_mission_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'about' );
			?>	
            <img src="<?php echo $thumb['0'];?>" class="img-responsive" alt="About Us image" />
            <?php the_field('our_mission_content',23);?>
            </div>
            
        </div>
        
         <div class="about-post odd">
            <h2><?php the_field('our_history_title',23);?></h2>
            <div class="a-post-content">
			<?php 						
					$image_id=get_post_meta(23,"our_history_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'about' );
			?>	
            <img src="<?php echo $thumb['0'];?>" class="img-responsive" alt="About Us image" />
           <?php the_field('our_history_content',23);?>
            </div>
            
        </div>
        
        <div class="about-post even">
            <h2><?php the_field('how_does_mountain_kim_martial_arts_give_back_title',23);?></h2>
            <div class="a-post-content">
			<?php 						
					$image_id=get_post_meta(23,"how_does_mountain_kim_martial_arts_give_back_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'about' );
			?>	
            <img src="<?php echo $thumb['0'];?>" class="img-responsive" alt="About Us image" />
            <?php the_field('how_does_mountain_kim_martial_arts_give_back_content',23);?>
            </div>
            
        </div>
        
         <div class="about-post odd">
            <h2><?php the_field('are_you_a_good_fit_title',23);?></h2>
            <div class="a-post-content">
			<?php 						
					$image_id=get_post_meta(23,"are_you_a_good_fit_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'about' );
			?>	
            <img src="<?php echo $thumb['0'];?>" class="img-responsive" alt="About Us image" />
           <?php the_field('are_you_a_good_fit_content',23);?>
            </div>
            
        </div>
        
            
        </div>
        
        <div class="about-sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="about-red-box">
                    <h2><?php the_field('kid_martial_art_title',23);?></h2>
					<?php 						
						$image_id=get_post_meta(23,"kid_martial_art_image",true);	
						$thumb = wp_get_attachment_image_src($image_id, 'add' );
					?>	
                    <img src="<?php echo $thumb['0'];?>" alt="Kid's Martial Arts" />
                <div class="about-side-hov"><a href="<?php the_field('kid_martial_art_link',23);?>"> Click Here</a></div>
            </div>
            
            <div class="about-red-box">
                    <h2><?php the_field('after_school_program_title',23);?></h2>
					<?php 						
						$image_id=get_post_meta(23,"after_school_program_image",true);	
						$thumb = wp_get_attachment_image_src($image_id, 'add' );
					?>	
                    <img src="<?php echo $thumb['0'];?>" alt="After School Program" />
                    <div class="about-side-hov"><a href="<?php the_field('after_school_program_link',23);?>"> Click Here</a></div>
            </div>
            
            <div class="about-red-box">
                    <h2><?php the_field('summer_camp_title',23);?></h2>
					<?php 						
						$image_id=get_post_meta(23,"summer_camp_image",true);	
						$thumb = wp_get_attachment_image_src($image_id, 'add' );
					?>	
                    <img src="<?php echo $thumb['0'];?>" alt="Summer Camp" />
                    <div class="about-side-hov"><a href="<?php the_field('summer_camp_link',23);?>"> Click Here</a></div>
            </div>
            
            <div class="about-red-box">
                    <h2><?php the_field('adult_martial_arts_title',23);?></h2>
					<?php 						
						$image_id=get_post_meta(23,"adult_martial_arts_image",true);	
						$thumb = wp_get_attachment_image_src($image_id, 'add' );
					?>	
                    <img src="<?php echo $thumb['0'];?>" alt="Adult Martial Arts" />
                    <div class="about-side-hov"><a href="<?php the_field('adult_martial_arts_link',23);?>"> Click Here</a></div>
            </div>
            
            
            <div class="about-widget-right">
                <h2 class="widget-rgtside-title">Success Stories</h2>
                <div class="about-widget-body">
                
                    <!--Content Slider-->
                   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
  <?php 
				$i=0;
			$args = array('post_type' => 'success','posts_per_page'=>5,'order' => 'DESC');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
	?>
    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i;?>" class="<?php if($i==0){echo'active';}else{} ?>"></li>
 <?php 
 $i++;
	endwhile;
	wp_reset_query();
	?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  <?php 
				$i=0;
			$args = array('post_type' => 'success','posts_per_page'=>5,'order' => 'DESC');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
	?>
    <div class="item <?php if($i==0){echo'active';}else{} ?>">
      <?php echo content('100');?>
	  <span><?php the_field('name',$post->ID); ?></span>
    </div>
 <?php 
 $i++;
	endwhile;
	wp_reset_query();
	?>
    
  </div>

 <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                    <!--Content Slider-->
                                        
                </div>
            </div>
            
            <div class="about-widget-right">
                <h2 class="widget-rgtside-title">Recent News</h2>
                <div class="about-widget-body">
                <ul class="news-post">
				<?php 
						$args = array('post_type' => 'post','posts_per_page'=>3,'order' => 'DESC');
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
				?>
                   <li>
                    <a href="<?php the_permalink();?>"><?php the_title();?>
                    <span> <i class="fa fa-calendar" aria-hidden="true"></i><?php the_time('M d, Y'); ?></span></a>
                    </li>
                   <?php 
						endwhile;
						wp_reset_query();
				?> 
                </ul>
                </div>
            </div>
            
            
        </div>
    </div>
    
    <div class="row">
        <div class="abt-page-form col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
            <?php the_field('how_can_you_reach_us',23); ?>
        <?php echo do_shortcode('[contact-form-7 id="45" title="Contact form 1"]');?>    
        </div>
    </div>
    
    </div>
</section>
    
    
<section class="find ready abt-location">
    <div class="container">
        <form role="form" class="form-inline">
            <!--div class="form-group"><label>Are You Ready?</label></div-->
            <div class="form-group"><a href="<?php echo site_url();?>/#location">Find A Location Near You</a></div>
        </form>
        
    </div>
    </section>
<?php get_footer();?>