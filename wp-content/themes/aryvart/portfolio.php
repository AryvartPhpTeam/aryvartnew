<?php
/*
Template Name: portfolio
*/
?>
<?PHP get_header();?>

  <!-- header -->
  
  <section class="blog-block clearfix">
    <div class="container">
      <div class="row">
      <div class="blog">
      <h1>Portfolio</h1>
      <hr class="blog-bor">
      <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
       </div>
       </div>
    </div>
  </section>
</div>
<section class="porfolio">
  <div class="container">
    <div class="port-simple">
      <h1>Simply but, we don't disappoint</h1>
      <p>We work with passion and that’s the reason to release incredible arts. We love to work hard, create things and always aim to please every customers, even the hardest ones</p>
    </div>
    <div class="port-tab">
      <div id="gallery">
          <div id="gallery-header">  
          <div class="gallery-header-center-right-links" id="filter-all">All</div>
          <div class="gallery-header-center-right-links" id="filter-design">Web Design</div>
          <div class="gallery-header-center-right-links" id="filter-branding">Branding</div>
          <div class="gallery-header-center-right-links" id="filter-development">Development</div>
          </div>
          <div id="gallery-content">
          <div id="gallery-content-center">
           <div class="protpollo">
           <div class="thumbnails" data-toggle="lightbox">
		<!--<a href="images/img.jpg" rel="lightbox[mando]" id="image1" title="image 1"><img src="images/img.jpg" class="all design" border="0" alt="" /></a>
          <div class="lightboxDesc image1">My description for image 1</div>
     <a href="images/img1.jpg" rel="lightbox[mando]" id="image2" title="image 2"><img src="images/img1.jpg" class="all branding" border="0" alt="" /></a>
		  <div class="lightboxDesc image2">My description for image 2</div>
		  <a href="images/img4.jpg" rel="lightbox[mando]" id="image3" title="image 3"><img src="images/img4.jpg"  border="0" alt="" /></a>
          <div class="lightboxDesc image2">My description for image 2</div>
           <a href="images/img8.jpg" rel="lightbox[mando]" id="image3" title="image 3"><img src="images/img8.jpg" border="0" alt="" /></a>
          <div class="lightboxDesc image2">My description for image 2</div>
          <a href="images/img2.jpg" rel="lightbox[mando]" id="image3" title="image 3"><img src="images/img2.jpg" border="0" alt="" /></a>
          <div class="lightboxDesc image2">My description for image 2</div>
          <a href="images/img10.jpg" rel="lightbox[mando]" id="image3" title="image 3"><img src="images/img10.jpg" border="0" alt="" /></a>
          <div class="lightboxDesc image2">My description for image 2</div>
          <a href="images/img6.jpg" rel="lightbox[mando]" id="image3" title="image 3"><img src="images/img6.jpg" border="0" alt="" /></a>
          <div class="lightboxDesc image2">My description for image 2</div>
          <a href="images/img5.jpg" rel="lightbox[mando]" id="image3" title="image 3"><img src="images/img5.jpg" border="0" alt="" /></a>
          <div class="lightboxDesc image2">My description for image 2</div>
          <a href="images/img3.jpg" rel="lightbox[mando]" id="image3" title="image 3"><img src="images/img3.jpg" border="0" alt="" /></a>
          <div class="lightboxDesc image2">My description for image 2</div>
          <a href="images/img1.jpg" rel="lightbox[mando]" id="image3" title="image 3"><img src="images/img1.jpg" border="0" alt="" /></a>
          <div class="lightboxDesc image2">My description for image 2</div>
           <a href="images/img7.jpg" rel="lightbox[mando]" id="image3" title="image 3"><img src="images/img7.jpg" border="0" alt="" /></a>
          <div class="lightboxDesc image2">My description for image 2</div>
           <a href="images/img8.jpg" rel="lightbox[mando]" id="image3" title="image 3"><img src="images/img8.jpg" border="0" alt="" /></a>
          <div class="lightboxDesc image2">My description for image 2</div>
          <a href="images/img9.jpg" rel="lightbox[mando]" id="image3" title="image 3"><img src="images/img9.jpg" border="0" alt="" /></a>
          <div class="lightboxDesc image2">My description for image 2</div>
          <a href="images/img10.jpg" rel="lightbox[mando]" id="image3" title="image 3"><img src="images/img10.jpg" border="0" alt="" /></a>
          <div class="lightboxDesc image2">My description for image 2</div>
          <a href="images/img1.jpg" rel="lightbox[mando]" id="image3" title="image 3"><img src="images/img1.jpg" border="0" alt="" /></a>
          <div class="lightboxDesc image2">My description for image 2</div>
          <a href="images/img8.jpg" rel="lightbox[mando]" id="image3" title="image 3"><img src="images/img8.jpg" border="0" alt="" /></a>
          <div class="lightboxDesc image2">My description for image 2</div>
          <a href="images/img2.jpg" rel="lightbox[mando]" id="image3" title="image 3"><img src="images/img2.jpg" border="0" alt="" /></a>
          <div class="lightboxDesc image2">My description for image 2</div>
          <a href="images/img1.jpg" rel="lightbox[mando]" id="image3" title="image 3"><img src="images/img1.jpg" border="0" alt="" /></a><div class="lightboxDesc image2">My description for image 2</div>-->

		  <a href="images/img.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail img-responsive"><img src="<?php echo get_template_directory_uri(); ?>/images/img.jpg" class="all development" alt=""/></a>
           <a href="images/img4.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img4.jpg" class="all design" alt=""/></a>
           <a href="images/img8.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img8.jpg" class="all development" alt=""/></a>
            <a href="images/img4.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img4.jpg" class="all branding" alt=""/></a>
             <a href="images/img5.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img5.jpg" class="all development" alt=""/></a>
              <a href="images/img1.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img1.jpg" class="all development" alt=""/></a>
               <a href="images/img10.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img10.jpg" alt=""/></a>
                <a href="images/img6.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img6.jpg" class="all development" alt=""/></a>
                 <a href="images/img.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img.jpg" alt=""/></a>
                  <a href="images/img1.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img1.jpg"  class="all branding" alt=""/></a>
                  <a href="images/img10.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img10.jpg" alt=""/></a>
                  <a href="images/img8.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img8.jpg" alt=""/></a>
                  <a href="images/img4.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img4.jpg"  class="all branding" alt=""/></a>
                   <a href="images/img8.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img8.jpg"  class="all design" alt=""/></a>
                    <a href="images/img10.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img10.jpg"  class="all development" alt=""/></a>
                     <a href="images/img.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img.jpg"  class="all branding" alt=""/></a>
                      <a href="images/img1.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img1.jpg"  class="all design" alt=""/></a>
                       <a href="images/img.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img.jpg"  class="all development" alt=""/></a>
                        <a href="images/img5.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img5.jpg"  class="all branding" alt=""/></a>
                         <a href="images/img10.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img10.jpg"  class="all design" alt=""/></a>
                         <a href="images/img6.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img6.jpg"  class="all development" alt=""/></a>
                         <a href="images/img4.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img4.jpg"  class="all branding" alt=""/></a>
                         <a href="images/img6.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img6.jpg"  class="all design" alt=""/></a>
                         <a href="images/img10.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img10.jpg"  class="all brandings" alt=""/></a>
                         <a href="images/img5.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/img5.jpg"  class="all design" alt=""/></a>
		  <!--<img src="images/img.jpg" class="all development"/>
        		 <img src="images/img2.jpg" class="all design"/>
         		 <img src="images/img8.jpg" class="all development"/>
        		 <img src="images/img2.jpg" class="all design"/>
          		 <img src="images/img10.jpg" class="all branding">
                  <img src="images/img6.jpg" class="all development"/>
                  <img src="images/img5.jpg" class="all design"/>
                  <img src="images/img3.jpg" class="all design"/>
                  <img src="images/img1.jpg" class="all development"/>
                  <img src="images/img7.jpg" class="all branding">
                  <img src="images/img8.jpg" class="all design"/>
                  <img src="images/img9.jpg" class="all design"/>
                  <img src="images/img10.jpg" class="all branding">
                  <img src="images/img1.jpg" class="all design"/>
                  <img src="images/img8.jpg" class="all development"/>
                  <img src="images/img2.jpg" class="all branding">
                  <img src="images/img8.jpg" class="all design"/>
                  <img src="images/img.jpg" class="all branding">
                  <img src="images/img5.jpg" class="all design"/>
                  <img src="images/img3.jpg" class="all development"/>
                  <img src="images/img6.jpg" class="all branding">
                  <img src="images/img5.jpg" class="all development"/>
                  <img src="images/img10.jpg" class="all design"/>
                  <img src="images/img4.jpg" class="all branding">
                  <img src="images/img9.jpg" class="all development"/>
                  <img src="images/img2.jpg" class="all design"/>-->
          </div>
         <!-- <div class="example">
        <ul class="thumbnails" data-toggle="lightbox">
            <li class="span3"><a href="img/image-1.jpg" title="Image #1" data-title-link="http://google.com" data-description="Lorem ipsum dolor" class="thumbnail"><img src="img/thumb-1.jpg" alt=""/></a></li>
            <li class="span3"><a href="img/image-2.jpg" title="Image #2" data-title-link="#markup" data-description="Lorem ipsum dolor" class="thumbnail"><img src="img/thumb-2.jpg" alt=""/></a></li>
            <li class="span3"><a href="img/image-3.jpg" title="Image #3" data-description="Lorem ipsum dolor" class="thumbnail"><img src="img/thumb-3.jpg" alt=""/></a></li>
            <li class="span3"><a href="img/image-4.jpg" title="Image #4" data-description="Lorem ipsum dolor" class="thumbnail"><img src="img/thumb-4.jpg" alt=""/></a></li>
        </ul>
    </div>-->
 </div>
          </div>
    </div>
  </div><!--/main-->
    </div><!--/gallery-->
  </div>
</section>
<?php get_footer(); ?>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/animated-masonry-gallery.js"></script>

        <script src="js/bootstrap.lightbox.js"></script>
        <script>
// Load code prettifier
$(document).ready(function(){
  prettyPrint();
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