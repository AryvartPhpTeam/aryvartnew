<?php
/*
Template Name: Partner
*/
?>
<?PHP get_header();?>

  <!-- header -->
  <?php $service_info = get_option('service_info'); ?>
  <section class="blog-block clearfix">
    <div class="container">
      <div class="row">
      <div class="blog">
      <h1><?php _e(get_the_title($service_info['partnerpage'])); ?></h1>
      <hr class="partner-bor">
      <p><?php _e(get_post($service_info['partnerpage'])->post_content); ?></p>
       </div>
       </div>
    </div>
  </section>
</div>

<div class="container">
<?php $whatwedo_info = get_option('whatwedo_info'); ?>
<h1 class="partner text-center"><?php _e(get_the_title($whatwedo_info['partner'])); ?></h1>
<p class="partner1 text-center"><?php _e(get_post($whatwedo_info['partner'])->post_content); ?></p></div>
<div class="container">
<div class="row">
<?php 
      $partner = get_posts(array('post_type' => 'partner'));
      $classs = array('part','part1','part','part2');
      $class_index = 0;
      foreach($partner as $res){
        
      ?>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 partner3 <?php _e($classs[$class_index]);?>">
<h1><?php _e($res->post_title)?></h1>
<ul><?php _e($res->post_content)?></ul>
</div>
<?php $class_index++; }  ?>  
</div>
</div>
<div class="container partner3">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 partner3 part3">
<h1>Partner Form:</h1></div></div></div>
<?php _e(do_shortcode('[contact-form-7 id="304" title="partners"]')); ?>
<div class="container partner3">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 partner3 part3">
<h1><?php _e(get_the_title($whatwedo_info['ourpartners'])); ?></h1></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<?php _e(get_the_post_thumbnail($whatwedo_info['ourpartners'],'full', array( 'class' => 'img-responsive' ))); ?></div>
</div></div>
<?php get_footer(); ?>		  