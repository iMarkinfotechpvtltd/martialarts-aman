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
<section class="about inner-news">
    <div class="container">
 <div class="about-post inner-news-content">
            <div class="a-post-content">
            <?php the_post_thumbnail('news'); ?>
            <span class="news-p-intro"><?php the_title();?></span>
                <span class="news-post-info">
                    <ul>
                    <li><i class="fa fa-calendar" aria-hidden="true"></i><?php the_time('M d, Y');?></li>
                    <li>Posted By: <?php the_author(); ?></li>
                    </ul>
                </span>
            
               <?php the_content();;?>
            </div>
            
        </div>
</div>
</section>
<?php
endwhile;
?>
<?php get_footer(); ?>
