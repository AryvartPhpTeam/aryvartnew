<?php
/*
Template Name: Blog
*/
?>
<?PHP get_header();?>
  <!-- header -->
  
  <section class="blog-block">
    <div class="container">
      <div class="row">
      <div class="blog">
        <?php $whatwedo_info = get_option('whatwedo_info'); ?>
      <h1><?php _e(get_the_title($work_info['blog'])); ?></h1>
      <hr class="blog-bor">
      <p><?php _e(get_post($whatwedo_info['blog'])->post_content); ?></p>
       </div>
       </div>
    </div>
  </section>
</div>
<section class="blog-block1">
  <div class="container">
     
    <?php 
            $args = array(
          'posts_per_page'   => 4,
          'orderby'          => 'date',
          'order'            => 'DESC',
          'post_type'        => 'blog',
          'post_status'      => 'publish',
          'suppress_filters' => true 
        );
           
        $class=array('padd-rgt',' padd-lft','padd-rgt',' padd-lft');
        $class_index = 0;
        $event = get_posts($args);
        $i=1;
        foreach($event as $res){
      if($i%2 != 0) {
     $image = wp_get_attachment_image_src( get_post_thumbnail_id( $res->ID ), 'single-post-thumbnail' );?>
   <div class="row"> 
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 <?php _e($class[$class_index]);?> ">
    <img src="<?php _e($image[0]);?>" style="width:598px; height:400px;"  class="img-responsive">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="post-details">
     <div class="date-blog"><span><?php _e(date("d",strtotime(get_post_meta( $res->ID, 'entry_post_month', true ))));?></span><hr><span><?php _e(date("M",strtotime(get_post_meta( $res->ID, 'entry_post_month', true ))));?></span></div>
    <?php $taxonomy='blogcategory';
        $term=wp_get_post_terms($res->ID, $taxonomy, array("fields" => "names"));
    ?>
    <h4><i class="fa fa-folder-open-o"></i> &nbsp; &nbsp; <?php echo (implode(',',$term));?></h4>
   

    <h3><?php _e($res->post_title);?></h3>
    
    <p><?php _e(wp_trim_words($res->post_content,20));?></p>
    <a href="<?php _e(get_permalink($res->ID));?>" class="btn btn-default2">Read More</a>
    </div>
    </div>
    </div>
     <?php $class[$class_index]++; } 
     else{
      $term=wp_get_post_terms($res->ID, $taxonomy, array("fields" => "names"));
       $image = wp_get_attachment_image_src( get_post_thumbnail_id( $res->ID ), 'single-post-thumbnail' );
      ?>
    <div class="row"> 
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 <?php _e($class[$class_index]);?>">
    <div class="post-details">
    <div class="date-blog"><span><?php _e(date("d",strtotime(get_post_meta( $res->ID, 'entry_post_month', true ))));?></span><hr><span><?php _e(date("M",strtotime(get_post_meta( $res->ID, 'entry_post_month', true ))));?></span></div>
    <h4><i class="fa fa-folder-open-o"></i> &nbsp; &nbsp; <?php echo (implode(',',$term));?></h4>
    <h3><?php _e($res->post_title);?></h3>
    <p><?php _e(wp_trim_words($res->post_content,20));?></p>
    <a href="<?php _e(get_permalink($res->ID));?>" class="btn btn-default2">Read More</a>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padd-lft">
    <img src="<?php _e($image[0]);?>" style="width:598px; height:400px;"   class="img-responsive">
    </div>
    <?php 
     $class[$class_index]++;}$i++;}?>
    </div>
    
    </div>

    </div>
    <!-- row -->
  </div>
  <!-- container -->
</section>

<section class="blog-bolck2">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="blog-con">
<p>OUR INTENTION IS TO REINVENT THE CUSTOMER SATISFACTION FOR A CONNECTED WORLD</p>
</div>
</div>
</div>
</div>
</secton>

<?php get_footer(); ?>