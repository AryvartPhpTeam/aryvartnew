<?php get_header(); ?>
<section class="banner-block1">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mar-top">
        <div class="services animatedParent">
          <h3 class='animated bounceInDown'>OUR SERVICES</h3>
          <h2 class='animated bounceInDown'><strong>WHAT WE CAN DO </br>
            FOR YOU</strong></h2>
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
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mrg-10 animatedParent">
        <div class="client animated bounceInLeft slow">
        <img src="<?php echo get_template_directory_uri(); ?>/images/cod.png">
          <p>Our experience with Aryvart Team was very positive and extremely professional. At first we were worried about the risk of outsourcing efforts to a company we had never used.
            Through a solid list of references we solidified our decision and began development</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mrg-10 animatedParent">
        <div class="client animated bounceInLeft slow"><img src="<?php echo get_template_directory_uri(); ?>/images/cod.png">
          <p>Our experience with Aryvart Team was very positive and extremely professional. At first we were worried about the risk of outsourcing efforts to a company we had never used.
            Through a solid list of references we solidified our decision and began development</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 animatedParent">
        <div class="client1  animated bounceInRight slow">
          <h3> OUR CLIENTS</h3>
          <h2><strong> CLIENTS THAT TRUST <br>
            OUR SERVICES</strong></h2>
        </div>
      </div>
    </div>
    <div class="row mrg-top">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 animatedParent">
        <div class="client-icon bor-rit2 animated bounceInUp padded"> <img src="<?php echo get_template_directory_uri(); ?>/images/icon5.png">
          <div class="row">
            <div class="star"> <span><strong class="fnt-sz">7+</strong></span>
              <p>Successful<br>
                Years</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 animatedParent">
        <div class="client-icon bor-rit1 animated bounceInUp padded"> <img src="<?php echo get_template_directory_uri(); ?>/images/icon6.png">
          <div class="row">
            <div class="star"> <span><strong class="fnt-sz">50+</strong></span>
              <p>Developers & <br>
                UI Engineers</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 animatedParent">
        <div class="client-icon bor-rit2 animated bounceInUp padded"> <img src="<?php echo get_template_directory_uri(); ?>/images/icon7.png">
          <div class="row">
            <div class="star"> <span><strong class="fnt-sz">26+</strong></span>
              <p>Successful Mobile <br>
                & Web Products</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 animatedParent">
        <div class="client-icon bor-rit animated bounceInUp padded"> <img src="<?php echo get_template_directory_uri(); ?>/images/icon8.png">
          <div class="row">
            <div class="star"> <span><strong class="fnt-sz">98%</strong></span>
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
            <strong> LATEST NEWS AND <br>
            EVENTS</strong></h2>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-2 col-xs-12">
        <div class="clearfix"></div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 animatedParent">
        <div class="latest-news animated bounceInRight slower">
          <p>Interested in finding out more? Click on all news for more information.</p>
          <a href="" class="btn btn-default1">read all news</a> </div>
      </div>
    </div>
    <div class="row mar-top1">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mrg-10 animatedParent">
      <div class="animated bounceInLeft slow">
        <div class="date"> <span>12</span>
          <hr class="line">
          <span>oct</span> </div>
        <div class="news-events">
       <img src="<?php echo get_template_directory_uri(); ?>/images/news.jpg" class="img-responsive n-wd"> </div>
        <div class="news">
          <h3>Your website that looks great on 	all devices</h3>
          <p>Aryvart responsive web design techniques helps you enhance your site to meet Google's responsive web design recommendations. </p>
          <span><a href="">FIND OUT MORE >></a></span> </div>
          </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mrg-10 animatedParent">
      <div class="animated bounceInUp padded">
        <div class="date"> <span>21</span>
          <hr class="line">
          <span>oct</span> </div>
        <div class="news-events"> <img src="<?php echo get_template_directory_uri(); ?>/images/news1.jpg" class="img-responsive n-wd"> </div>
        <div class="news">
          <h3>Your website that looks great on 	all devices</h3>
          <p>Aryvart responsive web design techniques helps you enhance your site to meet Google's responsive web design recommendations. </p>
          <span><a href="">FIND OUT MORE >></a></span> </div>
          </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mrg-10 animatedParent">
      <div class="animated bounceInRight slower">
        <div class="date"> <span>30</span>
          <hr class="line">
          <span>oct</span> </div>
        <div class="news-events"> <img src="<?php echo get_template_directory_uri(); ?>/images/news2.jpg" class="img-responsive n-wd"> </div>
        <div class="news">
          <h3>Your website that looks great on 	all devices</h3>
          <p>Aryvart responsive web design techniques helps you enhance your site to meet Google's responsive web design recommendations. </p>
          <span><a href="">FIND OUT MORE >></a></span> </div>
      </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
