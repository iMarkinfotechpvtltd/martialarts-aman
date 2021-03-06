<?php
/*
  Template Name: Location
 */
 ?>
 <?php  get_header(); 
 $location_id=$_GET['uid'];
 if($location_id==1 || $location_id==2 || $location_id==3 || $location_id==4){
 ?>
 		<?php
		while ( have_posts() ) : the_post();
		?>
 <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'locate' ); ?>
 <section class="location-form" style="background-image:url('<?php echo $src[0];?>');">
    <div class="container">
        <div class="row">
            <div class="loc-form-holder col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10  col-xs-12">
                <h2 class="loc-form-head">Please select your location</h2>
				<div class="form-inline">
                    <div class="form-group">
                        <select class="location">
						<option value="0">Select Your Location</option>
								 <?php
										if($location_id==1){
									$args = array( 'taxonomy' => 'martial_category','hide_empty'=>0 );
									$terms = get_terms('martial_category', $args);
									  
									foreach ($terms as $term) 
									{
										$slug=$term->name;
										$term_id=$term->term_id;
																				
								?>
                            <option value="<?php echo $term_id; ?>"><?php print_r($slug);?></option>
							<?php 
									}
									}
										else if($location_id==2){
												$args = array( 'taxonomy' => 'school_category','hide_empty'=>0 );
									$terms = get_terms('school_category', $args);
									  
									foreach ($terms as $term) 
									{
										$slug=$term->name;
										$term_id=$term->term_id;
																				
								?>
                            <option value="<?php echo $term_id; ?>"><?php print_r($slug);?></option>
											
										<?php	
										}
										}
										else if($location_id==3){
												$args = array( 'taxonomy' => 'camp_category','hide_empty'=>0 );
									$terms = get_terms('camp_category', $args);
									  
									foreach ($terms as $term) 
									{
										$slug=$term->name;
										$term_id=$term->term_id;
							?>
							<option value="<?php echo $term_id; ?>"><?php print_r($slug);?></option>
							<?php	
								}
								}
							else if($location_id==4){
												$args = array( 'taxonomy' => 'adult_category','hide_empty'=>0 );
									$terms = get_terms('adult_category', $args);
									  
									foreach ($terms as $term) 
									{
										$slug=$term->name;
										$term_id=$term->term_id;
							?>
							<option value="<?php echo $term_id; ?>"><?php print_r($slug);?></option>
							<?php	
								}
								}
							?>
                        </select>
                    </div>
					<input type="hidden" class="id-inner" value="<?php echo $location_id;?>">              
  <button type="submit" class="btn loc-btn">Search</button>
   <div id="loading" style="display: none"  align="center"> 
               <img src="http://i.imgur.com/BgN5Ssx.gif" id="loading_image">
                                   </div>
            </div> 
<div class="result" style="display:none;">Select a valid location</div>

                    </div>
      
            
            </div> 
        </div>
    </div>
</section>
<div class="location-inner">  
    <div class="container">
        <div class="row">
	<?php
		if($location_id==1){
			$args = array( 'taxonomy' => 'martial_category','hide_empty'=>0 );
            $terms = get_terms('martial_category', $args);
              
            foreach ($terms as $term) 
            {
				$slug=$term->slug;
				$args = array('post_type' => 'martials','posts_per_page' =>1,'martial_category'=>$slug);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
	?>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
	<div class="srch-result">
                <h2><a href="<?php the_permalink(); ?>" class="small-heading"><?php echo  $term->name; ?></a></h2>
                <?php the_field('address',$term); ?>
				<p>Phone : <a href="tel:<?php the_field('phone_number',$term); ?>" class="search-tel"><?php the_field('phone_number',$term); ?></a></p>
				<a href="<?php the_permalink(); ?>">View Location</a>
            </div></div>		
  <?php
  endwhile;
  wp_reset_query();
			}
  }
  else if($location_id==2){ 
	$args = array( 'taxonomy' => 'school_category','hide_empty'=>0 );
            $terms = get_terms('school_category', $args);
              
            foreach ($terms as $term) 
            {
				$slug=$term->slug;
				$args = array('post_type' => 'schools','posts_per_page' =>1,'school_category'=>$slug);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
  ?>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
		<div class="srch-result">
                <h2><a href="<?php the_permalink(); ?>" class="small-heading"><?php echo  $term->name; ?></a></h2>
                <?php the_field('address',$term); ?>
				<p>Phone : <a href="tel:<?php the_field('phone',$term); ?>" class="search-tel"><?php the_field('phone',$term); ?></a></p>
				<a href="<?php the_permalink(); ?>">View Location</a>
            </div>
			</div>
  <?php
   endwhile;
  wp_reset_query();
  }
  }
  else if($location_id==3){
	  $args = array( 'taxonomy' => 'camp_category','hide_empty'=>0 );
            $terms = get_terms('camp_category', $args);
              
            foreach ($terms as $term) 
            {
				$slug=$term->slug;
				$args = array('post_type' => 'camp','posts_per_page' =>1,'camp_category'=>$slug);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
	  ?>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
	<div class="srch-result">
                <h2><a href="<?php the_permalink(); ?>" class="small-heading"><?php echo  $term->name; ?></a></h2>
               <?php the_field('address',$term); ?>
				<p>Phone : <a href="tel:<?php the_field('phone',$term); ?>" class="search-tel"><?php the_field('phone',$term); ?></a></p>
				<a href="<?php the_permalink(); ?>">View Location</a>
            </div>
			</div>
  
  <?php
   endwhile;
  wp_reset_query();
  }
  }
  else if($location_id==4){
	  $args = array( 'taxonomy' => 'adult_category','hide_empty'=>0 );
            $terms = get_terms('adult_category', $args);
              
            foreach ($terms as $term) 
            {
				$slug=$term->slug;
				$args = array('post_type' => 'adult','posts_per_page' =>1,'adult_category'=>$slug);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
	  ?>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
	<div class="srch-result">
                <h2><a href="<?php the_permalink(); ?>" class="small-heading"><?php echo  $term->name; ?></a></h2>
               <?php the_field('address',$term); ?>
				<p>Phone : <a href="tel:<?php the_field('phone',$term); ?>" class="search-tel"><?php the_field('phone',$term); ?></a></p>
				<a href="<?php the_permalink(); ?>">View Location</a>
            </div>	
			</div>
  
  <?php
   endwhile;
  wp_reset_query();
  }
  }
  ?>
	</div>
    </div>

</div>
<?php 
endwhile;
wp_reset_query();
?>
 <?php }else{ ?>
 <section>
         <div class="container">
             <div style="width:100%; padding:20px 0; text-align:center;">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/404-page.jpg" alt="404" />
             </div>
         </div>
    </section>
 <?php } ?>
<script>

jQuery(document).ready(function(){

		jQuery(".loc-btn").click(function(){
				var location = jQuery(".location").val();
				var id = jQuery(".id-inner").val();
				
				if(location!=0){
					jQuery(".result").hide();
					jQuery("#loading").show();
			jQuery.ajax({

			type: "POST",

			url:"<?php bloginfo('template_url'); ?>/ajax/search.php",

			data:{
				location : location,
				id : id
				},

			success:function(resp) 

			{
				// jQuery(".result").hide();
				// jQuery("#loading").hide();
					 // alert(resp);
					if(resp!="")
					{
						jQuery(".result").hide();
						jQuery("#loading").hide();
						jQuery('.location-inner').empty().html(resp);
					
					}
					
			} 

			});
				}
				else{
					jQuery("#loading").show();
					jQuery("#loading").hide();
					jQuery(".result").show();
				}
		});



});

</script>
	<script>

jQuery(document).ready(function(){
jQuery(".menu-item-109").addClass("current-menu-item");
});

</script>
 <?php get_footer(); ?>