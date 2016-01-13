<?php get_header();?>
<section class="blog-block clearfix">
    <div class="container">
      <div class="row">
      <div class="blog">
      <h1>EVENTS</h1>
      <hr class="partner-bor">
      <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
       </div>
       </div>
    </div>
  </section>
</div>
<?php
while ( have_posts() ) : the_post();
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id), 'single-post-thumbnail' );
?>
<div class="container">
<h4 class="partner text-center"><?php the_title();?></h4><br/>
<div align="center"><img src="<?php _e($image[0]); ?>" class="img-responsive n-wd"> </div><br/>
<h6 class="what-we-do1"><?php the_content(); ?></h6></div>
<?php 
endwhile;
get_footer();
?>