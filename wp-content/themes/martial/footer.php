<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		<footer>
    <div class="container">
    <div class="row">
        <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
        <ul class="custom">
           <?php

		$defaults = array(
		'theme_location'  => '',
		'menu'            => 'header',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '%3$s',
		'depth'           => 0,
		'walker'          => ''
		);

		wp_nav_menu( $defaults );

		?> 
            
            </ul>
        </div>
        </div>
    </div>
                
        <div class="copy-rgt">
        <div class="container">
        <div class="row">
        <div class="col-lg-4">
            <p>Copyright © <?php echo date('Y ');?> - Mountain Kim Martial Arts - All Rights Reserved.<br>Powered By: <a href="" target="_blank" class="imark">iMark <span>I</span>nfotech</a></p>
        </div>
        <div class="col-lg-4">
            <div class="foot-logo">
        <a href="<?php echo site_url();?>"><img src="<?php echo get_option_tree('logo_footer');?>" /></a>
            </div>
        </div>
        <div class="col-lg-offset-1 col-lg-3">
        <ul>
            <li><a target="_blank" href="<?php echo get_option_tree('pinterest_url');?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="<?php echo get_option_tree('facebook_url');?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="<?php echo get_option_tree('twitter_url');?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="<?php echo get_option_tree('you_tube_url');?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
        </ul>
        </div>
        </div>
        </div>        
        </div>
    
    </footer>
	
<?php wp_footer(); ?>
           <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		   <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5lightbox.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
	
	
       <script type="text/javascript">
jQuery(function() {
  jQuery('a.animated').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

</script> 
       <script type="text/javascript">
jQuery(function() {
  jQuery('#menu-item-107>a').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

</script> 
       <script type="text/javascript">
jQuery(function() {
  jQuery('#menu-item-109>a').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

</script> 
    <script>
        jQuery('.carousel').carousel({
            interval: 1000 //changes the speed
        })
    </script> 
		<script type="text/javascript">
		jQuery(function() {
    jQuery("input[name='text-697']").keydown(function(e) {
		if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1
             ) {
                 // let it happen, don't do anything
                 return;
        }
      if (e.ctrlKey || e.altKey) {
        e.preventDefault();
      } else {
        var key = e.keyCode;
        if (!((key == 8)|| (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
          e.preventDefault();
        }
      }
    });
  });
		</script>	
<script>

// jQuery(document).ready(function(){

	// jQuery(".menu-item-107").each(function(){

		// jQuery(this).click(function(){
		// var abc= jQuery(this).attr("class");
		// var data=abc.split(" ");
		// alert("."+data[7]);
		// return;
		// jQuery(this).addClass("cust");
		// jQuery().removeClass(".custom>li.current-menu-item");
		// });

	// });

// });

</script>
   <script>
    jQuery(document).ready(function() {
jQuery('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
          jQuery("nav li a").removeClass("active");
		  jQuery(".menu-item-106").removeClass("current-menu-item");
		  jQuery(".banner-content>a").removeClass("active");
		  jQuery("#lctn").removeClass("active");
jQuery(this).addClass('active');
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });


});
    
    </script>
	<script>
jQuery(document).ready(function(){
var hash = jQuery(location).attr('hash');
if(hash=="#down")
{

jQuery(".menu-item-107>a").addClass("active");
jQuery(".menu-item-106").removeClass("current-menu-item");
}
else if(hash=="#location")
{

jQuery(".menu-item-109>a").addClass("active");
jQuery(".menu-item-106").removeClass("current-menu-item");
}



});
</script>

</body>
</html>
