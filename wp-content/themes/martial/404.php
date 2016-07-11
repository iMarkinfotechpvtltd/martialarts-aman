<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	
     <section>
         <div class="container">
             <div style="width:100%; padding:20px 0; text-align:center;">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/404-page.jpg" alt="404" />
             </div>
         </div>
    </section>
<!--div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            

			<!--section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><//?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></h1>
				</header><!-- .page-header -->

				<!--div class="page-content">
					<p><//?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentysixteen' ); ?></p>

					<//?php get_search_form(); ?>
				</div><!-- .page-content -->
			<!--/section><!-- .error-404 -->

		<!--/main><!-- .site-main -->

		<!--<//?php get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->

<!--<//?php get_sidebar(); ?>-->
<?php get_footer(); ?>
