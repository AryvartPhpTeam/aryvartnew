<div class="footer-bar">
<div class="container">
    <div class="row mar-top1">   
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="foot">
        <?php  $footer_menu = get_option('footer_menu');
            if(isset($footer_menu)) 
              {
            if(isset($footer_menu['footer_image']))
            {
           ?>
          <img src="<?php _e($footer_menu['footer_image']); ?>" class="img-responsive">
          <?php } ?>
          <p><?php _e($footer_menu['footer_text']); ?></p>
                   </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
      <div class="foot">
        <div class="foot-news">
          <h4>News</h4>
          <ul>
            <li><?php _e($footer_menu['news1']); ?></li>
            <li><?php _e($footer_menu['news2']); ?></li>
            <li><?php _e($footer_menu['news3']); ?></li>
            <!-- <li>New design trends</li>-->
          </ul>
          </div>
        </div>
      </div>
     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="foot" style="border-right:none;">
          <h4>Contact</h4>
          <ul>
            <li><i class="fa fa-phone"></i>&nbsp;&nbsp;<?php _e($footer_menu['telephone']); ?></li>
            <li><i class="fa fa-envelope-o"></i> &nbsp;<?php _e($footer_menu['website']); ?></li>
            <li><i class="fa fa-map-marker"></i> &nbsp; &nbsp;<?php _e($footer_menu['address']); ?></li>
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
        <li><a href="<?php _e($footer_menu['facebook']); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="<?php _e($footer_menu['twitter']); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="<?php _e($footer_menu['google_plus']); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="<?php _e($footer_menu['linked_in']); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="<?php _e($footer_menu['youtube']); ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
      </ul>
      <?php } ?>
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
  jQuery('#email1').keypress(function (event) {
      var keycode = event.which;
      if (!(event.shiftKey == false && (keycode == 46 || keycode == 8 || keycode == 37 || keycode == 39 || (keycode >= 48 && keycode <= 57)))) {
          event.preventDefault();
      }
  });
   $("#email1").attr('maxlength','10');
   $("#email1").attr('minlength','10');
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
