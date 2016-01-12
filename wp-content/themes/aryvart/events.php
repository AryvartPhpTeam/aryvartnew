<?php
/* Template Name: Events */

get_header(); 
?>
<section class="blog-block clearfix">
    <div class="container">
      <div class="row">
      <div class="blog">
      <h1>ALL EVENTS</h1>
      <hr class="partner-bor">
      <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
       </div>
       </div>
    </div>
  </section>
</div>
<div class="row mar-top1">
    <?php 
      $args = array(
          'posts_per_page'   => -1,
          'orderby'          => 'date',
          'order'            => 'DESC',
          'post_type'        => 'events',
          'post_status'      => 'publish',
          'suppress_filters' => true 
        );
      $event = get_posts($args);
      foreach($event as $res){
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $res->ID ), 'single-post-thumbnail' );
      ?>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mrg-10 animatedParent">
      <div class="animated bounceInLeft slow">
        <div class="date"> <span><?php _e(date("d",strtotime(get_post_meta( $res->ID, 'entry_post_date', true ))));?></span>
          <hr class="line">
          <span><?php _e(date("M",strtotime(get_post_meta( $res->ID, 'entry_post_date', true ))));?></span> </div>
        <div class="news-events">
       <img src="<?php _e($image[0]); ?>" class="img-responsive n-wd"> </div>
        <div class="news">
          <h3><?php _e($res->post_title);?></h3>
          <p><?php _e(wp_trim_words($res->post_content,17));?></p>
          <span><a href="<?php _e(get_permalink($res->ID));?>">FIND OUT MORE >></a></span> </div>
          </div>
      </div>
      <?php } ?>
    </div>
    <?php 
    get_footer();