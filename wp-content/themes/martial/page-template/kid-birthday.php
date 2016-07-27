<?php
/*
 Template Name: Birthday Template
 */
?>
<?php get_header();

global $post;
while ( have_posts() ) : the_post();
 ?>
<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'locate' ); ?>
<section class="inner-banner kids-b" style="background-image:url(<?php echo $src[0];?>);">
        <div class="container">
        <div class="">
        <?php the_content();?>
        </div>
        </div>
    </section>
    
    
    <section class="kid-b-odd party">
    <div class="container">
    <div class="row">
    <div class="col-lg-7 con-md-5">
       <?php the_field('give_your_child_a_birthday_party_content',148); ?>
    </div>
    <div class="col-lg-5 con-md-5">
		<?php 						
			$image_id=get_post_meta(148,"give_your_child_a_birthday_party_image",true);	
			$thumb = wp_get_attachment_image_src($image_id, 'party' );
		?>	
        <img src="<?php echo $thumb['0'];?>" alt="party" class="img-responsive" />
    </div>
    </div>
    </div>
    </section>
    
    <section class="kid-b-even people-views">
        <span class="kid-b-b4">
		<?php 						
			$image_id=get_post_meta(148,"what_other_parents_are_saying_left_image",true);	
			$thumb = wp_get_attachment_image_src($image_id, 'left' );
		?>	
		<img src="<?php echo $thumb['0'];?>" />
		</span>
        
    <div class="container">
        <div class="row k-b-heading">
        <h2><?php the_field('what_other_parents_are_saying_title',148); ?></h2>
        </div>
        
    <div class="row k-b-content">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <?php the_field('saying1_content',148); ?>
        <span><?php the_field('saying1_name',148); ?></span>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <?php the_field('saying2_content',148); ?>
        <span> <?php the_field('saying2_name',148); ?></span>
    </div>
        
   <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <?php the_field('saying3_content',148); ?>
       <span><?php the_field('saying3_name',148); ?></span>        
    </div>
    </div>
    </div>
        <span class="kid-b-aftr">
	<?php 						
			$image_id=get_post_meta(148,"what_other_parents_are_saying_right_image",true);	
			$thumb = wp_get_attachment_image_src($image_id, 'right' );
	?>	
	<img src="<?php echo $thumb['0'];?>" />
		</span>
    </section>
    
    <section class="kid-b-odd party-price">
    <div class="container">
        <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"> 
           <?php the_field('see_birthday_party_prices_content',148); ?>
            <!--<ul class="info-price">
                <li><span><i class="fa fa-home" aria-hidden="true"></i>Address:</span><?php //the_field('address',148); ?></li>
                <li><span><i class="fa fa-phone" aria-hidden="true"></i>Phone:</span><a href="tel:<?php //the_field('phone',148); ?>" class="call-fun"> <?php //the_field('phone',148); ?></a></li>
            </ul>-->
            <div class="price-form">
                <?php echo do_shortcode('[contact-form-7 id="241" title="Kid Birthday"]');?>
            </div>
        </div>
        </div>
    </section>
        
    
    
    <section class="find ready">
    <div class="container">
        <form role="form" class="form-inline">
            <div class="form-group"><label>Are You Ready?</label></div>
            <div class="form-group"><a href="<?php echo site_url();?>/#location">Get Started</a></div>
        </form>
        
    </div>
    </section>
	<?php 
endwhile;
		?>  
<?php get_footer();?>