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
                <!--img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/video-img.jpg" class="img-responsive" /-->
                
                
                <!--========================= Video Slider =========================-->
                
                <div id="wrapper_bu"> <!-- BEGIN CAROUSEL -->
				   <div id="bu1" class="holder_bu_center"> <!-- SLIDE ITEM --> 
					<div class="abc">
								<?php

                
                $link = get_field('video1_link',6);

              if (strpos($link, 'youtube') > 0) 
              {
                 
                $video_id = explode("?v=", $link); // For videos like http://www.youtube.com/watch?v=...
                if (empty($video_id[1])){ $video_id = explode("/v/", $link); }// For videos like http://www.youtube.com/watch/v/..

                $video_id = explode("&", $video_id[1]); // Deleting any other params
                $video_id = $video_id[0];
                //https://www.googleapis.com/youtube/v3/videos?id=7lCDEYXw3mM&key=YOUR_API_KEY&part=snippet,contentDetails,statistics,status
                $api = "https://www.googleapis.com/youtube/v3/videos?id=".$video_id."&key=AIzaSyDS3-2p4XKps18w9ulX6oVJACIUv-0xydY%20&part=snippet,contentDetails,statistics,status";
                $json_output = file_get_contents($api);
                $json = json_decode($json_output, true);

                $thumbnail;
                $items = $json['items'];
                foreach ($items as $val) {
					         $title = $val['snippet']['title'];
                  $thumbnail = $val['snippet']['thumbnails']['medium']['url'];
                  }
              }

              elseif (strpos($link, 'vimeo') > 0) {
              
                $video_id = explode(".com/", $link); // For videos like http://www.youtube.com/watch?v=...
                
                if (empty($video_id[1])){ $video_id = explode("/v/", $link); }// For videos like http://www.youtube.com/watch/v/..

                $video_id = explode("&", $video_id[1]); // Deleting any other params
                $video_id = $video_id[0];

                $api = "http://vimeo.com/api/v2/video/".$video_id.".json";
                $hash = json_decode(file_get_contents($api));

                //$hash = json_decode(file_get_contents("http://vimeo.com/api/v2/video/113057859.json"));
                $title = $hash[0]->title;
                $thumbnail = $hash[0]->thumbnail_large;
                   
              }
                ?>
				<a class="html5lightbox" href="<?php echo the_field('video1_link',6); ?>">
				<img src="<?php echo $thumbnail; ?>" style=" display: inline-block;">
				</a>
				</div>				
				   </div>
																
					<div id="bu2"> <!-- SLIDE ITEM --> 
							<div class="abc">	
							<?php

                
                $link = get_field('video2_link',6);

              if (strpos($link, 'youtube') > 0) 
              {
                 
                $video_id = explode("?v=", $link); // For videos like http://www.youtube.com/watch?v=...
                if (empty($video_id[1])){ $video_id = explode("/v/", $link); }// For videos like http://www.youtube.com/watch/v/..

                $video_id = explode("&", $video_id[1]); // Deleting any other params
                $video_id = $video_id[0];
                //https://www.googleapis.com/youtube/v3/videos?id=7lCDEYXw3mM&key=YOUR_API_KEY&part=snippet,contentDetails,statistics,status
                $api = "https://www.googleapis.com/youtube/v3/videos?id=".$video_id."&key=AIzaSyDS3-2p4XKps18w9ulX6oVJACIUv-0xydY%20&part=snippet,contentDetails,statistics,status";
                $json_output = file_get_contents($api);
                $json = json_decode($json_output, true);

                $thumbnail;
                $items = $json['items'];
                foreach ($items as $val) {
					         $title = $val['snippet']['title'];
                  $thumbnail = $val['snippet']['thumbnails']['medium']['url'];
                  }
              }

              elseif (strpos($link, 'vimeo') > 0) {
              
                $video_id = explode(".com/", $link); // For videos like http://www.youtube.com/watch?v=...
                
                if (empty($video_id[1])){ $video_id = explode("/v/", $link); }// For videos like http://www.youtube.com/watch/v/..

                $video_id = explode("&", $video_id[1]); // Deleting any other params
                $video_id = $video_id[0];

                $api = "http://vimeo.com/api/v2/video/".$video_id.".json";
                $hash = json_decode(file_get_contents($api));

                //$hash = json_decode(file_get_contents("http://vimeo.com/api/v2/video/113057859.json"));
                $title = $hash[0]->title;
                $thumbnail = $hash[0]->thumbnail_large;
                   
              }
                ?>
						<a class="html5lightbox" href="<?php echo the_field('video2_link',6); ?>">
						<img src="<?php echo $thumbnail; ?>" style=" display: inline-block;">
						</a>
						</div>
					</div>
				</div>
                
                <!--========================= Video Slider =========================-->
                
                <a href="">See All Success Stories <i aria-hidden="true" class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
            
        </div>
    </section>
     
    <section class="find ready">
    <div class="container">
        <form role="form" class="form-inline">
            <div class="form-group"><label>Are You Ready?</label></div>
            <div class="form-group"><a href="#">Get Started</a></div>
        </form>
        
    </div>
    </section>
    <!--<section class="find">
    <div class="container">
        <form role="form" class="form-inline">
            <div class="form-group"><label>Find A Location Near You</label></div>
            <div class="form-group"><input type="text" placeholder="ENTER ZIP CODE" class="form-control"><button><span><i aria-hidden="true" class="fa fa-long-arrow-right"></i> <i aria-hidden="true" class="fa fa-long-arrow-right"></i></span></button></div>
        </form>
        
    </div>
    </section>-->
		<script>

jQuery(document).ready(function(){
jQuery(".menu-item-107").removeClass("current-menu-item");
jQuery(".menu-item-109").removeClass("current-menu-item");
});

</script>

<?php get_footer();?>