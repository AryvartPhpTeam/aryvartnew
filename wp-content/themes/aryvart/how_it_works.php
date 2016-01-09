<?php
/*
Template Name: How it works
*/
get_header();
?>
<!-- header -->  
  <section class="blog-block clearfix">
    <div class="container">
      <div class="row">
      <div class="blog">
      <?php $service_info = get_option('service_info'); ?>
      <h1><?php _e(get_the_title($service_info['howitwork'])); ?></h1>
      <hr class="blog-bor">
      <p><?php _e(get_post($service_info['howitwork'])->post_content); ?></p>
       </div>
       </div>
    </div>
  </section>
</div> <!-- end header-->
<section>
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div id="timeline">
    <ul id="dates">
    <?php 
      $issues = get_posts(array('posts_per_page'   => -1, 'post_type' => 'issues'));
      $classs = array('lightbulb-o', 'desktop', 'pencil', 'caret-right', 'smile-o');
       $class_index = 0;
      foreach($issues as $res){
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $res->ID ), 'single-post-thumbnail' );
        ?>
      <li><a href="#<?php _e($res->ID);?>"><i class="fa fa-<?php _e($classs[$class_index]);?>"></i></a></li>
     <?php  $class_index++; } ?>
     </ul>
    <ul id="issues">
    <?php foreach($issues as $res){
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $res->ID ), 'single-post-thumbnail' );
        ?>
      <li id="<?php _e($res->ID); ?>">
        <h1><?php _e($res->post_title);?></h1>
        <p><?php _e($res->post_content);?></p>
      </li>
      <?php  } ?>
      </ul>
  </div>  
    </div>           
</div>
</div>
</section>                  
<div class="clear2"></div>
<div id="fluid-container">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-xs-12 col-sm-6">
<div class="clear2"></div>
<div class="test">
<h1><?php _e(get_the_title($service_info['testing'])); ?></h1></div>    <br>
<div class="test1">
<p><?php _e(get_post($service_info['testing'])->post_content); ?>
</p></div>
</div>
<div class="clear2"></div>
<div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
<?php _e(get_the_post_thumbnail($service_info['testing'],'full', array( 'class' => 'img-responsive' ))); ?>
</div>
</div>
<div class="clear2"></div>
</div>
</div>
<div class="container">
<div class="row">
<div class="clear2"></div>
<div class="col-lg-5 col-md-5 col-xs-12 col-sm-6">
<?php _e(get_the_post_thumbnail($service_info['project_management'],'full', array( 'class' => 'img-responsive' ))); ?>
</div>
<div class="col-lg-7 col-md-7 col-xs-12 col-sm-6">
<div class="test2">
<h1 class="test3"><?php _e(get_the_title($service_info['project_management'])); ?></h1></div>
<div class="clear2"></div> 
<div class="test4">
<p><?php _e(get_post($service_info['project_management'])->post_content); ?></p></div>
</div> 
</div>
</div>
<div class="clear2"></div>
<section class="blog-bolck2">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="blog-con">
<p><?php _e(get_post($service_info['conclusion'])->post_content); ?> </p>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!--<script src="js/jquery.timelinr-0.9.54.js"></script>-->
  <script> 
    $(function(){
      /*$().timelinr({
        autoPlay: 'true',
        autoPlayDirection: 'forward'
      })*/
      var start = 0;
      var slength = $("#dates li").length;
      $("#dates li:eq("+start+") a").addClass('selected').parent().addClass('selected_parent');
      $("#issues li:first").addClass('selected');
      function myfunction(){
        $("#dates li:eq("+start+") a").removeClass('selected').parent().removeClass('selected_parent');
        $("#issues li:eq("+start+")").removeClass('selected');
        start++;
        
        if(slength == start)
          start = 0;
        $("#dates li:eq("+start+") a").addClass('selected').parent().addClass('selected_parent');
        $("#issues li:eq("+start+")").addClass('selected');
      }
      
      setInterval(myfunction,5000);
      
      $("#dates li a").click(function(e){
        e.preventDefault();
        start = $(this).parent().index();
        $("#dates li a").removeClass('selected').parent().removeClass('selected_parent');
        $("#issues li").removeClass('selected');
        
        $("#dates li:eq("+start+") a").addClass('selected').parent().addClass('selected_parent');
        $("#issues li:eq("+start+")").addClass('selected');
      });
    });
  </script>