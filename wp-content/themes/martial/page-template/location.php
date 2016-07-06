<?php
/*
  Template Name: Location
 */
 ?>
 <?php  get_header(); ?>
 		<?php
		while ( have_posts() ) : the_post();
		?>
 <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'locate' ); ?>
 <section class="location-form" style="background-image:url('<?php echo $src[0];?>');">
    <div class="container">
        <div class="row">
            <div class="loc-form-holder col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10  col-xs-12">
                <h2 class="loc-form-head">Please select your location</h2>
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <select>
                            <option>Select Your Location</option>
                            <option>Las Vegas</option>
                        </select>
                    </div>
                    
                    
  <button type="submit" class="btn loc-btn">Search</button>
</form>
            
            </div> 
        </div>
    </div>
</section>
    
<section class="best-decision loc-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="img-holder col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/afterschool-img01afterschool-img02.jpg" alt="" class="img-responsive" /></div>
				<div class=" col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <?php echo content('200');?>
            </div>
			</div>
            
        </div>
    </div>
</section>
<?php 
endwhile;
wp_reset_query();
?>
 <?php get_footer(); ?>