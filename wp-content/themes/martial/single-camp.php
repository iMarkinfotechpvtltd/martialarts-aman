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
        <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
		<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'kids-inner' ); ?>
            <div class="img-holder">
			<img src="<?php echo $src[0];?>" alt="kids page" class="img-responsive" />
			</div>
        </div>
        
        <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
            <?php echo content('200'); ?>
        </div>
    </div>
    </div>
    </section>
    
<section class="school-reg-form  kids-p-from1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="gen-heading">Get our class schedule, prices, and
web special.</h2>
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
    
<section class="kids-testimonial-sec b-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="gen-heading"><?php the_field('what_other_parents_are_saying_title',$post->ID); ?></h2>
                <ul>
                <li>
                <?php the_field('confidence_content',$post->ID); ?>
                 <span><?php the_field('confidence_name',$post->ID); ?></span>
                </li>
                    
                    <li>
                <?php the_field('emphasis_on_discipline_content',$post->ID); ?>
                 <span><?php the_field('emphasis_on_discipline_name',$post->ID); ?></span>
                </li>
                    
                    <li>
                 <?php the_field('learning_lessons_content',$post->ID); ?>
                 <span> <?php the_field('learning_lessons_name',$post->ID); ?></span>
                </li>
                    
                </ul>
            </div>
        </div>
    </div>
</section>
    
    <section class="kids-sec-odd fitness">
        <div class="container">
            <div class="row">
                <div class=" col-lg-7">
                <?php the_field('what_your_child_will_get_in_our_program',$post->ID); ?>
                </div>
                
            
            
            </div>
        </div>
    </section>
    
    <section class="kids-sec-even confidence">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                <div class="img-holder">
				<?php 						
					$image_id=get_post_meta($post->ID,"more_confidence_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'confidence' );
					?>	
				<img src="<?php echo $thumb['0'];?>" alt="" class="img-responsive" /></div>
                </div>
                <div class="col-lg-8">
                <?php the_field('more_confidence_content',$post->ID); ?>
                </div>
            
            </div>
        </div>
    </section>
    
    <section class="kids-sec-odd lesson">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                 <?php the_field('focus_content',$post->ID); ?>
                </div>
                <div class="col-lg-offset-1 col-lg-4">
                    <div class="img-holder">
					<?php 						
					$image_id=get_post_meta($post->ID,"focus_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'disp' );
					?>	
				<img src="<?php echo $thumb['0'];?>" alt="" class="img-responsive" /></div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="kids-sec-even defense">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
               <?php the_field('self_defense',$post->ID); ?>
                </div>
            
            </div>
        </div>
    </section>
    
    
    <section class="kids-sec-odd environment">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                <div class="img-holder">
				<?php 						
					$image_id=get_post_meta($post->ID,"strong_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'more' );
					?>	
				<img src="<?php echo $thumb['0'];?>" alt="" class="img-responsive" /></div>
                </div>
            <div class="col-lg-8">
               <?php the_field('strong_content',$post->ID); ?>
            </div>
            </div>
        </div>
    </section>
    
    
<section class="kids-testimonial-sec aftr">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="gen-heading"><?php the_field('what_other_parents_are_saying_title',$post->ID); ?></h2>
                <ul>
                <li>
                <?php the_field('really_loves_content',$post->ID); ?>
                 <span><?php the_field('really_loves_name',$post->ID); ?></span>
                </li>
                    
                    <li>
                 <?php the_field('increased_confidence_content',$post->ID); ?>
                 <span><?php the_field('increased_confidence_name',$post->ID); ?></span>
                </li>
                    
                    <li>
                <?php the_field('focusing_better_content',$post->ID); ?>
                 <span><?php the_field('focusing_better_name',$post->ID); ?></span>
                </li>
                    
                </ul>
            </div>
        </div>
    </div>
</section>    
    
<section class="school-reg-form last-kids get-startd">
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
