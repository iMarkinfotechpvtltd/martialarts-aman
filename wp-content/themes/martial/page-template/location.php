<?php
/*
  Template Name: Location
 */
 ?>
 <?php  get_header(); 
 $location_id=$_GET['uid'];
 $location_id;
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
							<?php }
										}							?>
                        </select>
                    </div>
					<input type="hidden" class="id-inner" value="<?php echo $location_id;?>">              
  <button type="submit" class="btn loc-btn">Search</button>
   <div id="loading" style="display: none"  align="center"> 
               <img src="http://i.imgur.com/fAj1wi5.gif" id="loading_image">
                                   </div>
            </div> 
<div class="result" style="display:none;">Select a valid location</div>

                    </div>
      
            
            </div> 
        </div>
    </div>
</section>
  
<div class="location-inner">  
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
			<style>
			.result {
    position: absolute !important;
    text-align: center !important;
    left: 0 !important;
    right: 0 !important;
    color: #f00 !important;
    margin-top: 3px !important;
    font-size: 18px !important;
    font-weight: bold !important;
}
			</style>
            
        </div>
    </div>
</section>
</div>
</div>
<?php 
endwhile;
wp_reset_query();
?>

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
 <?php get_footer(); ?>