<?php get_header(); ?>
<section class="banner-block1">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mar-top">
        <div class="services animatedParent">
          <h3 class='animated bounceInDown'>OUR SERVICES</h3>
          <h2 class='animated bounceInDown'><strong><?php $aryvart_info = get_option('aryvart_info');?><?php _e($aryvart_info['ourservice']); ?></strong></h2>
        </div>
      </div>
      <?php 
            $post_list = get_posts(array('posts_per_page' => -1));
            foreach($post_list as $res){

                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $res->ID ), 'single-post-thumbnail' );
            ?>
            
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mar-top animatedParent">
        <div class="web-develop animated bounceInLeft slow">
          <div class="we-dev"><img src="<?php _e($image[0]); ?>"></div>
          <h3><?php _e($res->post_title);?></h3>
          <p><?php _e($res->post_content);?></p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-xs-12">
        <div class="clearfix"></div>
      </div>
       <?php }?>
    </div>
  </div>
</section>
<section class="banner-block2">
  <div class="container">
    <div class="row">
      <?php 
      $testimonial = get_posts(array('post_type' => 'testimonials-widget'));
      foreach($testimonial as $res){
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $res->ID ), 'single-post-thumbnail' );
      ?>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mrg-10 animatedParent">
        <div class="client animated bounceInLeft slow">
          <img src="<?php _e($image[0]); ?>">
          <p><?php _e($res->post_content);?></p>
        </div>
      </div>
      <?php }?>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 animatedParent">
        <div class="client1  animated bounceInRight slow">
          <h3> OUR CLIENTS</h3>
          <h2><strong><?php _e($aryvart_info['ourclient']); ?></strong></h2>
        </div>
      </div>
    </div>
   
    <div class="row mrg-top">
    
                 
                    
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 animatedParent">
        <div class="client-icon bor-rit2 animated bounceInUp padded"> <img src="<?php echo get_template_directory_uri(); ?>/images/icon5.png">
          <div class="row">
            <div class="star"> <span><strong class="fnt-sz">
             <?php _e($aryvart_info['successful_years']); ?> </strong></span>
              <p>Successfull<br> Years</p>

            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 animatedParent">
        <div class="client-icon bor-rit1 animated bounceInUp padded"> <img src="<?php echo get_template_directory_uri(); ?>/images/icon6.png">
          <div class="row">
            <div class="star"> <span><strong class="fnt-sz"><?php _e($aryvart_info['developers']); ?></strong></span>
              <p>Developers & <br>
                UI Engineers</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 animatedParent">
        <div class="client-icon bor-rit2 animated bounceInUp padded"> <img src="<?php echo get_template_directory_uri(); ?>/images/icon7.png">
          <div class="row">
            <div class="star"> <span><strong class="fnt-sz"><?php _e($aryvart_info['successful_products']); ?></strong></span>
              <p>Successful Mobile <br>
                & Web Products</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 animatedParent">
        <div class="client-icon bor-rit animated bounceInUp padded"> <img src="<?php echo get_template_directory_uri(); ?>/images/icon8.png">
          <div class="row">
            <div class="star"> <span><strong class="fnt-sz"><?php _e($aryvart_info['satisfaction']); ?></strong></span>
              <p>Customer <br>
                 Satisfaction</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="banner-block3">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
        <div class="latest-news1 animatedParent">
          <h2 class='animated bounceInDown'>WHAT WE DO<br>

            <strong><?php _e($aryvart_info['whatwedo']); ?></strong></h2>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-2 col-xs-12">
        <div class="clearfix"></div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 animatedParent">
        <div class="latest-news animated bounceInRight slower">
          <p>Interested in finding out more? Click on all news for more information.</p>
          <a href="<?php _e(get_permalink(226));?>" class="btn btn-default1">read all events</a> </div>
      </div>
    </div>
    <div class="row mar-top1">
    <?php 
            $args = array(
          'posts_per_page'   => 3,
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
  </div>
</section>
<?php get_footer(); ?>
 
