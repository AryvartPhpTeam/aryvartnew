<?php
/*
Template Name: careers
*/
get_header();
?>
 <section class="blog-block clearfix">
    <div class="container">
      <div class="row">
      <div class="blog">
      <?php $work_info = get_option('work_info'); ?>
      <h1><?php _e(get_the_title($work_info['careers'])); ?></h1>
      <hr class="blog-bor">
      <p><?php _e(get_post($work_info['careers'])->post_content); ?></p>
       </div>
       </div>
    </div>
  </section>
</div> <!-- end header-->
<section class="career">
  <div class="container">
      <p><?php _e(get_post($work_info['modal'])->post_content); ?></p>
      <p><b><?php _e(get_post($work_info['lorem_ipsum'])->post_content); ?> </b></p>    
  </div>
</section>
<section class="opening">
  <div class="container">
    <div class="row">  
    <div class="life">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padrgt0">            
            <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">
              <li class="open"><a href="#vtab1" data-toggle="tab"><img src="<?php echo get_template_directory_uri(); ?>/images/opening.png"> Current Openings</a></li>
              <li class="live"><a href="#vtab2" data-toggle="tab"><img src="<?php echo get_template_directory_uri(); ?>/images/life.png"> <?php _e(get_the_title($work_info['life'])); ?></a></li>
              <li class="fun"><a href="#vtab3" data-toggle="tab"><img src="<?php echo get_template_directory_uri(); ?>/images/fun.png"> <?php _e(get_the_title($work_info['fun'])); ?></a></li>
              <li class="join"><a href="#vtab4" data-toggle="tab"><img src="<?php echo get_template_directory_uri(); ?>/images/join.png"> Join Aryvart Family</a></li>
            </ul>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 padlft0">
            <div class="tab-content clearfix">

                <div role="tabpanel" class="tab-pane fade in active" id="vtab1">
                    <div class="opening-ary clearfix">
                      <?php 
                      $open = get_posts(array('posts_per_page'   => -1, 'post_type' => 'opening'));
      $classs = array(' padrgt10', 'padlft0 padrgt10', 'padlft0 padrgt10', 'padrgt10', 'padlft0 padrgt10', 'padlft0 padrgt10');
       $class_index = 0;
      foreach($open as $res){
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $res->ID ), 'single-post-thumbnail' );
        ?>
                      <div class="col-md-4 <?php _e($classs[$class_index]);?>">
                        <div class="open-web" data-toggle="modal" data-target="#<?php _e($res->ID);?>">
                          <a href="#"><img src="<?php _e($image[0]); ?>" class="img-responsive"><?php _e($res->post_title);?>
                        </a></div>
                      </div>
                    
                    <?php $class_index++;  } ?>
                  </div>                  
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab2">
                    <div class="fun-ary">
                    <?php _e(get_the_post_thumbnail($work_info['life'],'full', array( 'class' => 'img-responsive' ))); ?>
                   </div>
                </div>
                <div role="tabpanel" class="tab-pane fade in" id="vtab3">
                   <div class="fun-ary">
                    <?php _e(get_the_post_thumbnail($work_info['fun'],'full', array( 'class' => 'img-responsive' ))); ?>
                   </div>
                </div>
                <div role="tabpanel" class="tab-pane fade in" id="vtab4">
                   <div class="join-form clearfix">
                      <?php _e(do_shortcode('[contact-form-7 id="263" title="Join Aryvart Family"]')); ?>
                   </div>
                </div>
            </div>
        </div>
        <div class="container">
  <div class="container">
  <h2><?php _e(get_the_title($work_info['modal'])); ?></h2>
  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <?php foreach($open as $res) { ?>
  <div class="modal fade" id="<?php _e($res->ID); ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php _e($res->post_title);?></h4>
        </div>
        <div class="modal-body">
        <?php _e($res->post_content);?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <?php } ?>

  
</div>

  
</div>
        </div>    
      </div>
  </div>
</section>
<section class="career">
  <div class="container">
      <p><?php _e(get_post($work_info['modal'])->post_content); ?></p>
  </div>
</section>
<!-- header-bar -->

<!-- header-bar -->
<?PHP get_footer();?>