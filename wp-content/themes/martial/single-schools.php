<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();
global $post;
while ( have_posts() ) : the_post();
 ?>

<section class="after-school">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'school' ); ?>
            <div class="img-holder">
			<img src="<?php echo $src[0];?>" alt="After School Image" class="img-responsive" />
			</div>
            <h2 class="gen-heading"><?php the_title(); ?></h2>
           <?php echo content('200'); ?>
            </div>
        </div>
    </div>
</section>
    
<section class="school-reg-form bg-fade">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="gen-heading">Get Our After School Prices, Schedule, &
Registration Info</h2>
                <form class="form-inline" role="form">
                    <div class="form-group">
    <input type="text" class="form-control" placeholder="Name">
                    </div>
                    
                    <div class="form-group">
    <input type="email" class="form-control" placeholder="Email">
                    </div>
                    
                    <div class="form-group">
    <input type="phone" class="form-control" placeholder="Phone">
                    </div>
  <button type="submit" class="btn">Submit</button>
</form>
            
            </div> 
        </div>
    </div>
</section>
    
<section class="best-decision">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 class="gen-heading"><?php the_field('always_see_title',$post->ID);?></h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="img-holder">
				<?php 						
					$image_id=get_post_meta($post->ID,"always_see_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'always' );
					?>	
				<img src="<?php echo $thumb['0'];?>" alt="" class="img-responsive" />
				</div>
                <?php the_field('always_see_content',$post->ID);?>
                <span class="author"><?php the_field('always_see_name',$post->ID);?></span>
            </div>
            
        </div>
    </div>
</section>

    <section class="experience-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="img-holder">
			<?php 						
					$image_id=get_post_meta($post->ID,"happier_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'happy' );
					?>	
			<img src="<?php echo $thumb['0'];?>" alt="Kids Activity" />
			</div>
            </div>
            <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12">
        <h2 class="gen-heading"> <?php the_field('happier_title',$post->ID);?></h2>
                <?php the_field('happier_content',$post->ID);?>
                <span class="author"><?php the_field('happier_name',$post->ID);?></span>
        </div>
       
    </div>
</section>
        
    <section class="after-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <?php the_field('testimonial_section1_content',$post->ID);?>
		<span class="author"><?php the_field('testimonial_section1_name',$post->ID);?></span>
        </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
         <?php the_field('testimonial_section2_content',$post->ID);?>
		 <span class="author"><?php the_field('testimonial_section2_name',$post->ID);?></span>
        </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
         <?php the_field('testimonial_section3_content',$post->ID);?>
		 <span class="author"><?php the_field('testimonial_section3_name',$post->ID);?></span>
        </div>
       
    </div>
</section>
        

<section class="points-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="gen-heading"><?php the_field('what_your_child_will_get_title',$post->ID);?></h2>
        <ul>
        <li>
        <div class="point-icons"><span>
		<?php 						
					$image_id=get_post_meta($post->ID,"reliable_transportation_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'reliable' );
					?>	
		<img src="<?php echo $thumb['0'];?>" alt="Reliable" />
		</span></div>
        <div class="point-content">
       <?php the_field('reliable_transportation_content',$post->ID);?>
	   </div>
        </li>
            
        <li>
        <div class="point-icons"><span>
		<?php 						
					$image_id=get_post_meta($post->ID,"powerful_martial_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'power' );
					?>	
		<img src="<?php echo $thumb['0'];?>" alt="Martial" />
		</span></div>
        <div class="point-content">
           <?php the_field('powerful_martial_content',$post->ID);?>
        </div>
        </li>
            
        <li>
            <div class="point-icons"><span>
			<?php 						
					$image_id=get_post_meta($post->ID,"fun_games_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'games' );
					?>	
			<img src="<?php echo $thumb['0'];?>" alt="Fun Games" />
			</span></div>
        <div class="point-content">
           <?php the_field('fun_games_content',$post->ID);?>
        </div>
        </li>
            
            
        <li>
            <div class="point-icons"><span>
			<?php 						
					$image_id=get_post_meta($post->ID,"caring_environment_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'caring' );
					?>	
			<img src="<?php echo $thumb['0'];?>" alt="Caring Environment" />
			</span></div>
        <div class="point-content">
          <?php the_field('caring_environment_content',$post->ID);?>
        </div>
        </li>
            
        </ul>
        </div>
    </div>
</section>
        
        
     <section class="after-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <?php the_field('testimonial_section4_content',$post->ID);?>
		<span class="author"><?php the_field('testimonial_section4_name',$post->ID);?></span>
        </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <?php the_field('testimonial_section5_content',$post->ID);?>
		<span class="author"><?php the_field('testimonial_section5_name',$post->ID);?></span>
        </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
         <?php the_field('testimonial_section6_content',$post->ID);?>
		 <span class="author"><?php the_field('testimonial_section6_name',$post->ID);?></span>
        </div>
       
    </div>
</section>
     <section class="school-reg-form bg-fade">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="gen-heading">Get Our After School Prices, Schedule, &
Registration Info</h2>
                <form class="form-inline" role="form">
                    <div class="form-group">
    <input type="text" class="form-control" placeholder="Name">
                    </div>
                    
                    <div class="form-group">
    <input type="email" class="form-control" placeholder="Email">
                    </div>
                    
                    <div class="form-group">
    <input type="phone" class="form-control" placeholder="Phone">
                    </div>
  <button type="submit" class="btn">Submit</button>
</form>
                <ul class="c-info-frm">
                <li><span><i class="fa fa-home" aria-hidden="true"></i>Address:</span>210 Dominion Road,  NE Vienna, VA 22180</li>
                <li><span><i class="fa fa-phone" aria-hidden="true"></i>Phone:</span>(703) 255-0202</li>
            </ul>
            
            </div> 
        </div>
    </div>
</section>  
<?php 
endwhile;
		?>    
<?php get_footer(); ?>
