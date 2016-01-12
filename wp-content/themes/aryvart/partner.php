<?php
/*
Template Name: Partner
*/
?>
<?PHP get_header();?>

  <!-- header -->
  
  <section class="blog-block clearfix">
    <div class="container">
      <div class="row">
      <div class="blog">
      <h1>BECOME A PARTNER</h1>
      <hr class="partner-bor">
      <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
       </div>
       </div>
    </div>
  </section>
</div>

<div class="container">
<?php $post=get_post(305); ?>
<h1 class="partner text-center"><?php _e($post->post_title);?></h1>
<p class="partner1 text-center"><?php _e($post->post_content);?></p></div>
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
<h1>Our Partners:</h1></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<img src="<?php echo get_template_directory_uri(); ?>/images/1223.png" class="img-responsive"></div>
</div></div>
<?php get_footer(); ?>		  

