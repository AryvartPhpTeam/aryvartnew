<div class="footer-bar">
  <div class="container">
    <div class="row mar-top1">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="foot"> <img src="<?php echo get_template_directory_uri(); ?>/images/logo1.png">
          <p>Aryvart is an International IT company based in France & India specialized in providing an eminent IT services to the connected world. We take pride in being an One stop solution provider for all your business needs.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
      <div class="foot">
        <div class="foot-news">
          <h4>News</h4>
          <ul>
            <li>Standard post</li>
            <li>How To Choose The Best Website For Business?</li>
            <li>What make a brand success</li>
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
            <li><i class="fa fa-map-marker"></i> &nbsp; &nbsp;&nbsp;<?php echo get_option('street'); ?>&nbsp; &nbsp; <?php   echo get_option('state');?></li>
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
        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
      </ul>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
      <p>Copyright&copy; 2015 All Reserved by Aryvart</p> 
    </div>
  </div>
</footer>
<a href="#" class="scrollup" style="display: none;">Scroll</a>
</body>
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
});
</script>

</html>