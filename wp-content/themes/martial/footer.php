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
        <ul>
            <li><a href="">About</a</li>
            <li><a href="">Programs</a</li>
            <li><a href="">Success Stories</a</li>
            <li><a href="">Locations</a</li>
            <li><a href="">Blog</a</li>
            <li><a href="">Birthday</a</li>
            <li><a href="">Web Special</a</li>     
            <li><a href="">Appointment</a></li>
            
            </ul>
        </div>
        </div>
    </div>
                
        <div class="copy-rgt">
        <div class="container">
        <div class="row">
        <div class="col-lg-4">
            <p>Copyright © 2016 - Mountain Kim Martial Arts - All Rights Reserved</p>
        </div>
        <div class="col-lg-4">
            <div class="foot-logo">
        <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer-logo.png" /></a>
            </div>
        </div>
        <div class="col-lg-offset-1 col-lg-3">
        <ul>
            <li><a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
        </ul>
        </div>
        </div>
        </div>        
        </div>
    
    </footer>
	
<?php wp_footer(); ?>
           <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
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
</body>
</html>
