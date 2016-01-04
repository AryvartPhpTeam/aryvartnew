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
        	<?php
                $post_id = 76;
                $queried_post = get_post($post_id);
                ?>
          <h1><?php echo $queried_post->post_title; ?></h1>
          <hr class="blog-bor">
          <p><?php echo $queried_post->post_content; ?></p>
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
    	<?php
                $post_id = 41;
                $queried_post = get_post($post_id);
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
        ?>
      <h2><?php echo $queried_post->post_title; ?></h2>
      <p><?php echo $queried_post->post_content; ?></p>
      <img src="<?php  _e($image[0]); ?>" class="img-responsive"> </div>
  </div>
</section>
<section class="we-are">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-7 col-sm-5">
        <div class="we">
        <?php
                $post_id = 47;
                $queried_post = get_post($post_id);
                
        ?>
          <h2><?php echo $queried_post->post_title; ?></h2>
          <p><?php echo $queried_post->post_content; ?> </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="our-view" id="mission">
  <div class="container">
    <div class="who">
    <?php
                $post_id = 52;
                $queried_post = get_post($post_id);
    ?>    
      <h2><?php echo $queried_post->post_title; ?></h2>
      <p><?php echo $queried_post->post_content; ?></p>
    </div>
    <div class="row">
      <div class="col-md-4 col-xs-12">
        <div class="mission">
          <div class="ico"> <span><img src="<?php echo get_template_directory_uri(); ?>/images/mission.png"></span> </div>
          <div class="mission-detail">
          <?php
                $post_id = 54;
                $queried_post = get_post($post_id);
          ?>   
            <h4><?php echo $queried_post->post_title; ?></h4>
            <p><?php echo $queried_post->post_content; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-12">
        <div class="mission">
          <div class="ico"> <span><img src="<?php echo get_template_directory_uri(); ?>/images/vission.png"></span> </div>
          <div class="mission-detail">
          <?php
                $post_id = 57;
                $queried_post = get_post($post_id);
           ?>   
            <h4><?php echo $queried_post->post_title; ?></h4>
            <p><?php echo $queried_post->post_content; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-12">
        <div class="mission">
          <div class="ico"> <span><img src="<?php echo get_template_directory_uri(); ?>/images/philosopy.png"></span> </div>
          <div class="mission-detail">
          <?php
                $post_id = 59;
                $queried_post = get_post($post_id);
           ?> 
            <h4><?php echo $queried_post->post_title; ?></h4>
            <p><?php echo $queried_post->post_content; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="our-team" id="ourteam">
  <div class="container">
    <div class="who">
     <?php
                $post_id = 61;
                $queried_post = get_post($post_id);
       ?>
      <h2><?php echo $queried_post->post_title; ?></h2>
      <p><?php echo $queried_post->post_content; ?></p>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-3 col-sm-12">
        <div class="ary">
         <?php
                $post_id = 63;
                $queried_post = get_post($post_id);
           ?>
          <h3><?php echo $queried_post->post_title; ?></h3>
          <p><?php echo $queried_post->post_content; ?></p>
        </div>
      </div>
      <div class="col-lg-8 col-md-9 col-sm-12">
        <div class="team-mem">
          <ul class="list-inline">
            <li>
              <?php
                $post_id = 73;
                $queried_post = get_post($post_id);
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
                ?>
              <div class="view view-eighth"><img src="<?php  _e($image[0]); ?>" class="img-responsive img-thumbnail">
                <div class="mask">
                  <p><strong><?php echo $queried_post->post_title; ?></strong> <br>
                    <br>
                    <?php echo $queried_post->post_content; ?></p>
                </div>
              </div>
            </li>
            <li>
            <?php
                $post_id = 70;
                $queried_post = get_post($post_id);
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
               ?>
              <div class="view view-eighth"><img src="<?php  _e($image[0]); ?>" class="img-responsive img-thumbnail">
                <div class="mask">
                  <p><strong><?php echo $queried_post->post_title; ?> </strong> <br>
                    <br>
                    <?php echo $queried_post->post_content; ?></p>
                </div>
              </div>
            </li>
            <li>
            <?php
                $post_id = 66;
                $queried_post = get_post($post_id);
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
               ?>
              <div class="view view-eighth"><img src="<?php  _e($image[0]); ?>" class="img-responsive img-thumbnail">
                <div class="mask">
                  <p><strong><?php echo $queried_post->post_title; ?> </strong> <br>
                    <br>
                    <?php echo $queried_post->post_content; ?></p>
                </div>
              </div>
            </li>
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
          <h2>We Always Try to Create a Difference</h2>
          <h6>It has roots in a piece of classical Latin literature from 45 BC,</h6>
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