<?php
/* Template Name:what we do */
get_header();
?>
  <section class="blog-block">
    <div class="container">
      <div class="row">
      <div class="blog">
      <h1>What we do</h1>
      <hr class="blog-bor">
      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
       </div>
       </div>
    </div>
  </section>
</div>
<section class="do">
<div class="fluid-container">

<div class="container">
<div class="clear2"></div>
<div class="row">
<?php 
        $taxonomy = 'servicecategory';
        $terms = get_terms($taxonomy , array('hide_empty' =>false));
     foreach($terms as $res){
         
?>
<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
<div data-delay="10" data-animate="fadeInUp" class="mobile2 text-center fadeInUp animated"><img src="<?php echo z_taxonomy_image_url($res->term_id); ?>"><h1 class="mobile1"><?php _e($res->name); ?></h1></div>
<div class="clear2"></div>
</div>
 <?php  
  } ?>
</div>
</div>
</div>
</section>

<section class="what-we-do">
<div class="fluid-container">
<div class="container">
<div class="clear2"></div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<?php
    $queried_post = get_post(271);
?>
<h1 class="web1 text-center"><?php echo $queried_post->post_title?></h1></h1>
<div class="clear2"></div>
<?php echo $queried_post->post_content?><br>
<div class="clear2"></div>
</div>
</div>
</div>
</div>
</section>
<section class="history1">
  <div class="container">
    <div class="over1">
      <ul class="nav nav-pills">
        <li class="presen" role="presentation"><a href="<?php _e(get_permalink(296));?>"><!--<i class="fa fa-desktop"></i>--><img src="<?php echo get_template_directory_uri(); ?>/images/develop1.png"><br><span>
 WEB DESIGN</span></a></li>
        <li class="presen" role="presentation"><!--<img src="images/bb.png">--><a href="<?php _e(get_permalink());?>"><!--<i class="fa fa-desktop"></i>--><img src="<?php echo get_template_directory_uri(); ?>/images/bb.png"><br><span>PHP DEVELOPMENT</span></a></li> 
      </ul>
    </div>
  </div>
</section>
<div class="clear2"></div>
<section id="web-design" class="out">
<div class="container">
<div class="row">
<?php
    $post_id=273;
    $queried_post = get_post($post_id);
    $image = wp_get_attachment_image_src( get_post_thumbnail_id($queried_post->ID ), 'single-post-thumbnail' );
?>
<div class="col-md-7 col-lg-7 col-xs-12 col-sm-12">
<?php echo $queried_post->post_content?>
<a class="btn btn-default" href="<?php _e(get_permalink());?>"> Read More</a>
</div>
<div class="col-md-5 col-lg-5 col-xs-12 col-sm-12">
<img class="res img-responsive" src="<?php _e($image[0]); ?>">
</div>
</div>
</div>
</section>
<section class="header-bar12">

<div class="container">
<div class="clear2"></div>
<div class="row">
<div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
<h1 class="demo1 text-center">Our Work <strong>Methodology</strong></h1><hr class="blog-bor"><div class="clear2"></div>
</div>
<div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
<img class="source img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/rename.png"></div>
</div>
</div>
</section>

<section class="have1">
<div class="container">
<div class="clear2"></div>
<div class="row">
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
<h1 class="have text-center">Have A One On One Interaction With Our Experts Now</h1>
</div>
</div>
<div class="clear14"></div>
<?php _e(do_shortcode('[contact-form-7 id="301" title="what we do"]')); ?>
</div>
</div>
</section>
<?php get_footer(); ?>