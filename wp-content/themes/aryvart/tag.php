<?PHP 
/**
 * The template for displaying Tags pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();?>
  <!-- header -->
  
  <section class="blog-block">
    <div class="container">
      <div class="row">
      <div class="blog">
      <h1>Blog</h1>
      <hr class="blog-bor">
      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
       </div>
       </div>
    </div>
  </section>
</div>
<section class="blog-block1">
  <div class="container">
     <header class="archive-header">
				<h1 class="archive-title"><?php printf( __( '%s Tag', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>

				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header>
    <?php 
        $i=1;
        while ( have_posts() ) : the_post(); $res = $post;
      if($i%2 != 0) {
     $image = wp_get_attachment_image_src( get_post_thumbnail_id( $res->ID ), 'single-post-thumbnail' );?>
   <div class="row"> 
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 <?php _e($class[$class_index]);?> ">
    <img src="<?php _e($image[0]);?>" class="img-responsive">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="post-details">
     <div class="date-blog"><span><?php _e(date("d",strtotime(get_post_meta( $res->ID, 'entry_post_month', true ))));?></span><hr><span><?php _e(date("M",strtotime(get_post_meta( $res->ID, 'entry_post_month', true ))));?></span></div>
    <?php $taxonomy='post_tag';
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
    <img src="<?php _e($image[0]);?>" class="img-responsive">
    </div>
    <?php 
     $class[$class_index]++;}$i++;
     endwhile;?>
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
<?php get_footer();