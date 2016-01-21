<?php
/* Template Name:Developement*/
get_header();
?>
 <?php $whatwedo_info = get_option('whatwedo_info'); ?>
 <section class="blog-block">
    <div class="container">
      <div class="row">
      <div class="blog">
      <h1><?php _e(get_the_title($whatwedo_info['phpdevelopement'])); ?></h1>
      <hr class="blog-bor">
      <p><?php _e(get_post($whatwedo_info['phpdevelopement'])->post_content); ?></p>
       </div>
       </div>
    </div>
  </section>
</div>
<section class="web-design">
<div class="fluid-container">
<div class="container">
<div class="clear2"></div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 web-design1">
<h1 class="web text-center"><?php _e(get_the_title($whatwedo_info['developement'])); ?></h1>
<hr class="blog-bor4">
<div align="center"><?php _e(get_the_post_thumbnail($service_info['developement'],'full', array( 'class' => 'img-responsive' ))); ?> </div><br/>
<p>
<?php _e(get_post($whatwedo_info['developement'])->post_content); ?></p>
<div class="clear2"></div>
</div>
</div>
</div>
</div>
</section>
<?php get_footer(); ?>