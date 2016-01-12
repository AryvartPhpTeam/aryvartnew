<div class="footer-bar">
<div class="container">
    <div class="row mar-top1">   
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="foot">
        <?php 
      $testimonial = get_posts(array('post_type' => 'footer'));
      foreach($testimonial as $res){
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $res->ID ), 'single-post-thumbnail' );
      ?>
        
          <img src="<?php  _e($image[0]); ?>" class="img-responsive">
          <p><?php echo $res->post_content; ?></p>
        </div>
      </div>
      <?php }?>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
      <div class="foot">
        <div class="foot-news">
          <h4>News</h4>
          <ul>
            <li><?php echo get_option('title'); ?></li>
            <li><?php echo get_option('title1'); ?></li>
            <li><?php echo get_option('title2'); ?></li>
            <!-- <li>New design trends</li>-->
          </ul>
        </div>
        </div>
      </div>
     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="foot" style="border-right:none;">
          <h4>Contact</h4>
          <ul>
            <li><i class="fa fa-phone"></i> &nbsp; &nbsp;&nbsp;<?php echo get_option('telephone'); ?></li>
            <li><i class="fa fa-envelope-o"></i> &nbsp; &nbsp;&nbsp;<?php echo get_option('email'); ?></li>
            <li><i class="fa fa-map-marker"></i> &nbsp; &nbsp;&nbsp;<?php echo get_option('address'); ?>&nbsp; &nbsp; <?php   echo get_option('state');?></li>
          </ul>
        </div>
      </div>   
    </div>
  </div>
</div>
<!-- footer-bar-->
<footer>
  <div class="container">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
      <ul class="list-inline">
        <li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://plus.google.com/collections/featured" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="https://linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a></li>
      </ul>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
      <p>Copyright&copy; <?php _e(date("Y")); ?> All Reserved by Aryvart</p> 
    </div>
  </div>
</footer>
<a href="#" class="scrollup" style="display: none;">Scroll</a>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/css3-animate-it.js"></script>
<!--<script src="js/demo.js"></script>-->
<script type="text/javascript">
$('.carousel').carousel({
  interval: 1600
})
$(document).ready(function(){
  $(window).scroll(function(e){
    if($(window).scrollTop() < 250)
      $(".animated ").removeClass("go");
  });

if($(".sidebar_blog").length)
  {
    $(".sidebar_blog h1.recent").each(function(){

      $txt = $(this).text().split(" ");
      $txt[0] = "<span>"+$txt[0]+"</span>";
      $txt.join(" ");

      $(this).html($txt);

    });

    $("h1.recent+ul").addClass("standard");

    $(".widget_tag_cloud .tagcloud a").addClass("btn btn-default3");
  }

});
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/animated-masonry-gallery.js"></script>

        <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.lightbox.js"></script>
        <script>
// Load code prettifier
$(document).ready(function(){
  //prettyPrint();
});

// Fancy text animation
var ta = (function(a){
  var a = $(a), b = a.text(), c = b.length, d = 200;
  a.empty()
  for(i=0;i<c;++i){
    a.append($("<span/>").text(b[i]).fadeIn(1300+(d*i)));
  }
})("header p");
$("abbr[data-toggle=tooltip]").tooltip();
</script>
<?php wp_footer() ?>
</html>
