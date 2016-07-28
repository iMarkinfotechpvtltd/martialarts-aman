<?php
include('../../../../wp-config.php');
?>
<?php
$location=$_POST['location'];
$id=$_POST['id'];
?>
 <?php
 if($id==1){
 $term = get_term( $location, 'martial_category' );
$slug=$term->slug;	
$args = array('post_type' => 'martials','posts_per_page' =>1,'martial_category'=>$slug);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
<section class="best-decision loc-content">
    <div class="container">

          
        <div class="row">
            
                <div class="img-holder col-lg-6 col-md-6 col-sm-6 col-xs-6"><img class=" loc-content-inner img-responsive" src="<?php echo z_taxonomy_image_url($term->term_id);?>" alt="location" /></div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
                <a href="<?php the_permalink(); ?>" class="gen-heading"><?php echo  $term->name; ?></a>
				<div class="loc-inner">
                <?php the_field('address',$term); ?>
				<p>Phone : <a href="tel:<?php the_field('phone_number',$term); ?>"><?php the_field('phone_number',$term); ?></a></p>
				<a href="<?php the_permalink(); ?>" class="srch-inn-rslt">View Location</a>
            </div>
            </div>
        </div>

</section>
<?php 
endwhile;
wp_reset_query();
 }
 else if($id==2)
 {
	 $term = get_term( $location, 'school_category' );
$slug=$term->slug;	
$args = array('post_type' => 'schools','posts_per_page' =>1,'school_category'=>$slug);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
<section class="best-decision loc-content">
    <div class="container">

          
        <div class="row">
            
                <div class="img-holder col-lg-6 col-md-6 col-sm-6 col-xs-6"><img class=" loc-content-inner img-responsive" src="<?php echo z_taxonomy_image_url($term->term_id);?>" alt="location" /></div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
                <a href="<?php the_permalink(); ?>" class="gen-heading"><?php echo  $term->name; ?></a>
				<div class="loc-inner">
                 <?php the_field('address',$term); ?>
				<p>Phone : <a href="tel:<?php the_field('phone',$term); ?>"><?php the_field('phone',$term); ?></a></p>
				<a href="<?php the_permalink(); ?>" class="srch-inn-rslt">View Location</a>
            </div>
            </div>
        </div>

</section>
 <?php 
 endwhile;
wp_reset_query();
 } 
  else if($id==3)
 {
	 $term = get_term( $location, 'camp_category' );
$slug=$term->slug;	
$args = array('post_type' => 'camp','posts_per_page' =>1,'camp_category'=>$slug);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
 ?>
 <section class="best-decision loc-content">
    <div class="container">

          
        <div class="row">
            
                <div class="img-holder col-lg-6 col-md-6 col-sm-6 col-xs-6"><img class=" loc-content-inner img-responsive" src="<?php echo z_taxonomy_image_url($term->term_id);?>" alt="location" /></div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
               <a href="<?php the_permalink(); ?>" class="gen-heading"><?php echo  $term->name; ?></a>
			   <div class="loc-inner">
                 <?php the_field('address',$term); ?>
				<p>Phone : <a href="tel:<?php the_field('phone',$term); ?>"><?php the_field('phone',$term); ?></a></p>
				<a href="<?php the_permalink(); ?>" class="srch-inn-rslt">View Location</a>
            </div>
            </div>
        </div>

</section>
 <?php 
 endwhile;
wp_reset_query();
 } 
 else if($id==4)
 {
	 $term = get_term( $location, 'adult_category' );
$slug=$term->slug;	
$args = array('post_type' => 'adult','posts_per_page' =>1,'adult_category'=>$slug);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
 ?>
 <section class="best-decision loc-content">
    <div class="container">

          
        <div class="row">
            
                <div class="img-holder col-lg-6 col-md-6 col-sm-6 col-xs-6"><img class=" loc-content-inner img-responsive" src="<?php echo z_taxonomy_image_url($term->term_id);?>" alt="location" /></div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
                <a href="<?php the_permalink(); ?>" class="gen-heading"><?php echo  $term->name; ?></a>
				<div class="loc-inner">
                <?php the_field('address',$term); ?>
				<p>Phone : <a href="tel:<?php the_field('phone',$term); ?>"><?php the_field('phone',$term); ?></a></p>
				<a href="<?php the_permalink(); ?>" class="srch-inn-rslt">View Location</a>
            </div>
            </div>
        </div>

</section>
 <?php 
 endwhile;
wp_reset_query();
 } 
 ?>