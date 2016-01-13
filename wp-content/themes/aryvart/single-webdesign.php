<?php
/* Template Name:Web Design*/
get_header();
?>
 <section class="blog-block">
    <div class="container">
      <div class="row">
      <div class="blog">
      <h1>WEB DESIGN</h1>
      <hr class="blog-bor">
      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
       </div>
       </div>
    </div>
  </section>
</div>
<section class="web-design">
<div class="fluid-container">
<div class="container">
<div class="clear2"></div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 web-design1">
   <?php $whatwedo_info = get_option('whatwedo_info'); ?>
<h1 class="web text-center"><?php _e(get_the_title($whatwedo_info['webdesign'])); ?></h1>
<hr class="blog-bor4">
<p>
<?php _e(get_post($whatwedo_info['webdesign'])->post_content); ?></p>
<div class="clear2"></div>
</div>
</div>
</div>
</div>
</section>
<div class="clear2"></div>
<section class="what-we">
<div class="container">
<div class="row">
<?php 
        $taxonomy = 'web_design';
        $terms = get_terms($taxonomy , array('hide_empty' =>false));
        $chunked_posts = array_chunk($terms,3,true);

        $classs = array('fa-magic', 'fa-cog', 'fa-umbrella', 'fa-expand', 'fa-life-ring', 'fa-expand');
        $class_index = 0;

?>
<div class="col-md-4 col-lg-4 col-xs-12 col-sm-6 padding-top-60">
 
        <?php foreach($chunked_posts[0] as $k => $res){?>
                            <div data-delay="400" data-animate="fadeInUp" class="f-iconbox margin-bottom-30 right fadeInUp animated">
								<span class="icon"><i class="fa <?php _e($classs[$class_index]);?>"></i></span>
								<span class="title"><?php _e($res->name); ?></span>
								<p><?php _e($res->description); ?></p>
							</div>
                            <div class="clear13"></div>
               <?php $class_index++; }  ?>                         
</div>
<div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
                            <img class="img-responsive" alt="image description" src="<?php echo get_template_directory_uri(); ?>/images/mb.png">
                        </div>
                        
<div class="col-xs-12 col-sm-6 col-md-4 padding-top-60 padding-xs-topzero">
					<?php foreach($chunked_posts[1] as $k => $res){?>
							<div data-delay="600" data-animate="fadeInUp" class="f-iconbox margin-bottom-30 fadeInUp animated">
								<span class="icon"><i class="fa <?php _e($classs[$class_index]);?>"></i></span>
								<span class="title"><?php _e($res->name); ?></span>
								<p class="paragraph"><?php _e($res->description); ?></p>
							</div>
					<?php $class_index++; }  ?>  
</div>
</div>
</div>
</section>
<div class="clear2"></div>
<section class="header-bar11">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
<h1 class="web-inner text-center">Ultra Responsive</h1>
<h1 class="web-inner1 text-center">Mobile, Tablets & Desktop</h1></div>
<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 web-in">
<img class="img-responsive" alt="image description" src="<?php echo get_template_directory_uri(); ?>/images/cm.png"  style="align:center">
</div>
</div>
</div>
</div>
</section>
<section>
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
<h1 class="web-inner2 text-center">Our Process Flow</h1>
<hr class="blog-bor9">
</div>
</div>
</div>
</section>
<section>
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 web-in1">
<img class="img-responsive" alt="image description" src="<?php echo get_template_directory_uri(); ?>/images/xs.png">
<!--<div class="w50 left centered wow fadeInUp" data-wow-delay="0.25s">
                        <div class="service-item tb-offset-sm">
                            <div class="circle-icon">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 16 16" preserveAspectRatio="none">
                                    <style type="text/css" >
                                      <![CDATA[
                                        circle {
                                            stroke: #80c918;
                                            fill: transparent;
                                        }
                                        circle.c1 {
                                            stroke-dasharray: 5, 4.5;
                                            stroke-width: 0.25;
                                        }
                                        circle.c2 {
                                            stroke-dasharray: 0.25, 0.53;
                                            stroke-width: 1;
                                        }
                                        circle.c3 {
                                            stroke-dasharray: 10, 20;
                                            stroke-width: 0.25;
                                        }
                                        circle.c4 {
                                            stroke-dasharray: 0.2, 0.2;
                                            stroke-width: 0.2;
                                        }
                                      ]]>
                                    </style>
                                    <circle class="c1" cx="8" cy="8" r="6.215">
                                        <animateTransform attributeName="transform"
                                            attributeType="XML"
                                            type="rotate"
                                            from="0 8 8 "
                                            to="360 8 8"
                                            dur="20s"
                                            repeatCount="indefinite"/>
                                            
                                    </circle>
                                </svg>
                                <span class="icon-lamp4"></span>
                            </div>
                            <h4>User <br />Experience</h4>
                            <div class="service-detail">
                                <ul>
                                    <li>Strategy</li>
                                    <li>Sketching</li>
                                    <li>Wireframing</li>
                                </ul>
                            </div>                            
                        </div>
                    </div>-->
</div>
</div>
</div>
</section>
<?php get_footer(); ?>
