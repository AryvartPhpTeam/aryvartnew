<?php
/*
Template Name: portfolio
*/
?>
<?php get_header();?>

  <section class="blog-block clearfix">
    <div class="container">
      <div class="row">
         <?php $whatwedo_info = get_option('whatwedo_info'); ?>
      <div class="blog">
      <h1><?php _e(get_the_title($work_info['portifolio'])); ?></h1>
      <hr class="blog-bor">

      <p><?php _e(get_post($whatwedo_info['portifolio'])->post_content); ?></p>
       </div>
       </div>
    </div>
  </section>
</div>
<section class="porfolio">
  <div class="container">
    <?php
      $post_id = 109;
      $queried_post = get_post($post_id);
    ?>
    <div class="port-simple">
      <h1><?php echo $queried_post->post_title; ?></h1>
      <p><?php echo $queried_post->post_content; ?></p>
    </div>
    <div class="port-tab">
      <div id="gallery">
      <div id="gallery-header">  
        <div class="gallery-header-center-right-links" id="filter-all">All</div>
        <?php 
          $taxonomy = 'gallerytitle';
          $terms = get_terms($taxonomy, array('post_type' =>'gallery'));
          
          foreach($terms as $name){
        ?>  
      <div class="gallery-header-center-right-links" id="filter-<?php _e($name->slug);?>"><?php _e($name->name);?></div>
        <?php  }?>
          </div>
          <div id="gallery-content">
          <div id="gallery-content-center">
           <div class="protpollo">
           <div class="thumbnails" data-toggle="lightbox" >
            <?php $posts=get_posts(array('post_type'=>'gallery'));                                       
              foreach($posts as $res){
              $term_list = wp_get_post_terms($res->ID, 'gallerytitle', array("fields" => "all"));
                if( class_exists('Dynamic_Featured_Image') ) {
                 global $dynamic_featured_image;
                 $terms= $dynamic_featured_image->get_featured_images($res->ID);
                 foreach($terms as $name){
            ?>
		
		  <a href="<?php _e($name['thumb'])?>" title="<?php _e($term_list[0]->name);?>" data-title-link="http://google.com"  class="thumbnail img-responsive"><img src="<?php _e($name['thumb'])?>" class="all <?php _e($term_list[0]->slug);?>" alt=""/></a>
     
          <?php }}
        }?>
          </div>
         
 </div>
          </div>
    </div>
   
  </div><!--/main-->
    </div><!--/gallery-->
  </div>
</section>
<?php get_footer(); ?>