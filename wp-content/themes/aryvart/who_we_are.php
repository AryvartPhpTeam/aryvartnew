<?php
/*
Template Name: Who we are
*/
?>
<?PHP get_header();?>

  <!-- header -->
  <section class="blog-block clearfix">
    <div class="container">
      <div class="row">
        <div class="blog">
        	<?php $whatweare_info = get_option('whatweare_info'); ?>
          <h1><?php _e(get_the_title($whatweare_info['whoweare'])); ?></h1>
          <hr class="blog-bor">
          <p><?php _e(get_post($whatweare_info['whoweare'])->post_content); ?></p>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- end header-->
<section class="history">
  <div class="container">
    <div class="over">
      <ul class="nav nav-pills">
        <li class="active ab-back"><a href="#overview"> <i class="fa fa-file-text-o"></i> Overview</a></li>
        <li><a href="#mission"><i class="fa fa-eye"></i> Mission</a></li>
        <li><a href="#mission"><i class="fa fa-bullseye"></i> Vision</a></li>
        <li><a href="#mission"><i class="fa fa-lightbulb-o"></i> Philosophy</a></li>
        <li><a href="#ourteam"><i class="fa fa-users"></i> Our Team</a></li>
      </ul>
    </div>
  </div>
</section>
<section class="about-block" id="overview">
  <div class="container">
    <div class="who">
    <h2><?php _e(get_the_title($whatweare_info['overview'])); ?></h2>
      <p><?php _e(get_post($whatweare_info['overview'])->post_content); ?></p>
      <?php _e(get_the_post_thumbnail($whatweare_info['overview'],'full', array( 'class' => 'img-responsive' ))); ?>
  </div>
</section>
<section class="we-are">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-7 col-sm-5">
        <div class="we"> 
          <h2><?php _e(get_the_title($whatweare_info['whoweare2'])); ?></h2>
          <p><?php _e(get_post($whatweare_info['whoweare2'])->post_content); ?></p>
         </div>
      </div>
    </div>
  </div>
</section>
<section class="our-view" id="mission">
  <div class="container">
    <div class="who">
      <h2><?php _e(get_the_title($whatweare_info['ourview'])); ?></h2>
      <p><?php _e(get_post($whatweare_info['ourview'])->post_content); ?></p>
    </div>
    <div class="row">
      <div class="col-md-4 col-xs-12">
        <div class="mission">
          <div class="ico"> <span><img src="<?php echo get_template_directory_uri(); ?>/images/mission.png"></span> </div>
          <div class="mission-detail">
            <h4><?php _e(get_the_title($whatweare_info['ourmission'])); ?></h4>
            <p><?php _e(get_post($whatweare_info['ourmission'])->post_content); ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-12">
        <div class="mission">
          <div class="ico"> <span><img src="<?php echo get_template_directory_uri(); ?>/images/vission.png"></span> </div>
          <div class="mission-detail">
            <h4><?php _e(get_the_title($whatweare_info['ourvision'])); ?></h4>
            <p><?php _e(get_post($whatweare_info['ourvision'])->post_content); ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-12">
        <div class="mission">
          <div class="ico"> <span><img src="<?php echo get_template_directory_uri(); ?>/images/philosopy.png"></span> </div>
          <div class="mission-detail">
            <h4><?php _e(get_the_title($whatweare_info['philosopy'])); ?></h4>
            <p><?php _e(get_post($whatweare_info['philosopy'])->post_content); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="our-team" id="ourteam">
  <div class="container">
    <div class="who">
     <h2><?php _e(get_the_title($whatweare_info['ourteam'])); ?></h2>
      <p><?php _e(get_post($whatweare_info['ourteam'])->post_content); ?></p>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-3 col-sm-12">
        <div class="ary">
         <h3><?php _e(get_the_title($whatweare_info['aryvart'])); ?></h3>
      <p><?php _e(get_post($whatweare_info['aryvart'])->post_content); ?></p>
        </div>
      </div>
       <div class="col-lg-8 col-md-9 col-sm-12">
        <div class="team-mem">
          <ul class="list-inline">
          <?php 
      $team = get_posts(array('post_type' => 'ourteam'));
      foreach($team as $res){
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $res->ID ), 'single-post-thumbnail' );
        
      ?>
            <li>
              <div class="view view-eighth"><img src="<?php _e($image[0]); ?>" class="img-responsive img-thumbnail">
                <div class="mask">
                  <p><strong><?php _e($res->post_title);?></strong> <br>
                    <br>
                    <?php _e($res->post_content);?></p>
                </div>
              </div>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<section class="blog-bolck2 get">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="blog-con">
          <h2><?php _e(get_the_title($whatweare_info['get'])); ?></h2>
          <h6><?php _e(get_post($whatweare_info['get'])->post_content); ?></h6>
        <a href="#" class="btn btn-default"> get a quote</a> </div>
      </div>
    </div>
  </div>
</section>
<!-- header-bar -->
<script>
// Smooth Scrolling
    $('.nav a[href*=#]:not([href=#]), a.scroll-top[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top - 65
          }, 500);
          return false;
        }
      }
    });
	
    </script>
</html>
<?PHP get_footer();?>