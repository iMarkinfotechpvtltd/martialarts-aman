<?php
/*
 Template Name: News Template
 */
?>
<?php get_header(); ?>
<section class="about newz">
    <div class="container">
    <div class="row">
        <div class="all-post col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="news-posts"><h2 class="gen-heading">LATEST NEWS</h2></div>
		<?php 
			$i=1;
			$args = array('post_type' => 'post','posts_per_page'=>-1,'order' => 'DESC');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			if($i%2==0){
		?>
			 <div class="about-post even">
            <div class="a-post-content">
            <?php the_post_thumbnail('news'); ?>
            <span class="news-p-intro"><?php the_title();?></span>
                <span class="news-post-info">
                    <ul>
                    <li><i class="fa fa-calendar" aria-hidden="true"></i><?php the_time('M d, Y');?></li>
                    <li>Posted By: <?php the_author(); ?></li>
                    </ul>
                </span>
            
               <?php echo content('35');?><a href="<?php the_permalink(); ?>">Read More</a>
            </div>
            
        </div>
        
			<?php } else{ ?>
			<div class="about-post odd">
            <div class="a-post-content">
            <?php the_post_thumbnail('news');?>
            <span class="news-p-intro"><?php the_title(); ?></span>
                <span class="news-post-info">
                    <ul>
                    <li><i class="fa fa-calendar" aria-hidden="true"></i><?php the_time('M d, Y');?></li>
                    <li>Posted By: <?php the_author(); ?></li>
                    </ul>
                </span>
            
                <?php echo content('35'); ?><a href="<?php the_permalink(); ?>">Read More</a></p>
            </div>
            
        </div>
        <?php 
			}
			$i++;
			endwhile;
			wp_reset_query();
		?>
         
        
       
       </div>
        
        <div class="about-sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="about-red-box">
			<h2><?php the_field('advertisement1_title',102); ?></h2>
			<?php 						
					$image_id=get_post_meta(102,"advertisement1_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'add' );
				?>	
                    <img src="<?php echo $thumb['0'];?>" alt="Kid's Martial Arts" />
                <div class="about-side-hov"><a href="<?php the_field('advertisement1_link',102); ?>"> Click Here</a></div>
            </div>
            
            <div class="about-red-box">
                    <h2><?php the_field('advertisement2_title',102); ?></h2>
					<?php 						
					$image_id=get_post_meta(102,"advertisement2_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'add' );
				?>	
                    <img src="<?php echo $thumb['0'];?>" alt="After School Program" />
                    <div class="about-side-hov"><a href="<?php the_field('advertisement2_link',102); ?>"> Click Here</a></div>
            </div>
            
            <div class="about-red-box">
                    <h2><?php the_field('advertisement3_title',102); ?></h2>
					<?php 						
					$image_id=get_post_meta(102,"advertisement3_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'add' );
				?>	
                    <img src="<?php echo $thumb['0'];?>" alt="Summer Camp" />
                    <div class="about-side-hov"><a href="<?php the_field('advertisement3_link',102); ?>"> Click Here</a></div>
            </div>
            
            <div class="about-red-box">
                    <h2><?php the_field('advertisement4_title',102); ?></h2>
					<?php 						
					$image_id=get_post_meta(102,"advertisement4_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'add' );
					?>	
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/block-img4.png" alt="Adult Martial Arts" />
                    <div class="about-side-hov"><a href="<?php the_field('advertisement4_link',102); ?>"> Click Here</a></div>
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
			$args = array('post_type' => 'success','posts_per_page'=>-1,'order' => 'DESC');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
	?>
     <div class="item <?php if($i==0){echo'active';}else{} ?>">
      <?php echo content('50');?>
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
						$args = array('post_type' => 'post','posts_per_page'=>6,'order' => 'DESC');
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