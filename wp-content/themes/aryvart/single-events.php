<?php get_header();?>
<section class="blog-block clearfix">
    <div class="container">
      <div class="row">
      <div class="blog">
      <h1>EVENTS</h1>
      <hr class="partner-bor">
      <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
       </div>
       </div>
    </div>
  </section>
</div>
<?php
while ( have_posts() ) : the_post();
?>
<div class="container">
<h2 class="partner text-center"><?php the_title();?></h2>
<p class="partner text-center"><?php the_content(); ?></p></div>
<?php 
endwhile;
get_footer();
?>