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

<section class="kids-page-sec1">
    <div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="img-holder">
			<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'adult' ); ?>			
			<img src="<?php echo $src[0];?>" alt="Adult page" class="img-responsive" />
			</div>
        </div>
        
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2 class="gen-heading"><?php the_title();?></h2>
            <?php echo content('200');?>
        </div>
    </div>
    </div>
    </section>
    
<section class="school-reg-form  kids-p-from1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="gen-heading">Get Started Now</h2>
                <h3>Get our class schedule, prices, and web special</h3>
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
    

<section class="adult-testimonials contrast-bg">
    <div class="container">
    <div class="testimonials-adult lost-20-p">
       <?php the_field('testimonial1_content',$post->ID);?>
        <span class="adult-name"><?php the_field('testimonial1_name',$post->ID);?></span>
    </div>
        
    <div class="testimonials-adult">
       <?php the_field('testimonial2_content',$post->ID);?>
        <span class="adult-name"><?php the_field('testimonial2_name',$post->ID);?></span>
    </div>    
        
    <div class="testimonials-adult last">
       <?php the_field('testimonial3_content',$post->ID);?>
        <span class="adult-name"><?php the_field('testimonial3_name',$post->ID);?></span>
    </div>
    </div>
</section> 
    
    
    

    
<section class="adult-p-sections">
    <div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
            <?php the_field('training_with_us_content',$post->ID);?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
            <div class="pos wht-u-get">
			<?php 						
					$image_id=get_post_meta($post->ID,"training_with_us_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'train' );
			?>	
			<img src="<?php echo $thumb['0'];?>" alt="training_with_us" />
			</div>
        </div>
    </div>
    </div>
</section>
    
    
    
<section class="adult-p-sections contrast-bg">
    <div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="pos slf-defense">
			<?php 						
					$image_id=get_post_meta($post->ID,"self_defense_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'self' );
			?>	
			<img src="<?php echo $thumb['0'];?>" alt="self"/>
			</div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <?php the_field('self_defense_content',$post->ID);?>
        </div>
    </div>
    </div>
</section>
    
    
    
<section class="adult-p-sections">
    <div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
             <?php the_field('mental_strength_content',$post->ID);?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
            <div class="pos mental-strgth">
			<?php 						
					$image_id=get_post_meta($post->ID,"mental_strength_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'mental' );
			?>	
			<img src="<?php echo $thumb['0'];?>" alt="mental strength" class="" />
			</div>
        </div>
    </div>
    </div>
</section>
    
    
    
<section class="adult-p-sections contrast-bg">
    <div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="pos make-frnds">
			<?php 						
					$image_id=get_post_meta($post->ID,"new_friends_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'new' );
			?>	
			<img src="<?php echo $thumb['0'];?>" alt="new friends" class="img-responsive" />
			</div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <?php the_field('new_friends_content',$post->ID);?>
        </div>
    </div>
    </div>
</section>
    
    
    
<section class="adult-p-sections">
    <div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
           <?php the_field('professional_instructors_content',$post->ID);?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
            <div class="pos prof-instructor">
			<?php 						
					$image_id=get_post_meta($post->ID,"professional_instructors_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'proff' );
			?>	
			<img src="<?php echo $thumb['0'];?>" alt="Professional" class="img-responsive" />
			</div>
        </div>
    </div>    
    </div>
</section>
    
    

<section class="adult-testimonials contrast-bg">
    <div class="container">
    <div class="testimonials-adult">
        <?php the_field('testimonial4_content',$post->ID);?>
        <span class="adult-name"><?php the_field('testimonial4_name',$post->ID);?></span>
    </div>    
        
    <div class="testimonials-adult last">
        <?php the_field('testimonial5_content',$post->ID);?>
        <span class="adult-name"><?php the_field('testimonial5_name',$post->ID);?></span>
    </div>
    </div>
</section> 
    
    
    
<section class="school-reg-form get-startd">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="gen-heading">Let’s Get Started!</h2>
                <p>Enter your info to get access to our class schedule, prices, and web special.</p>
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
