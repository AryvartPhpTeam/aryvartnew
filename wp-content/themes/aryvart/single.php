<?php 
get_header(); 
while ( have_posts() ) : the_post();
?>
<div class="welcome-section">
    <div class="container">
        <div class="welcome">
            <h1><?php the_title();?></h1>
            <p><?php the_content(); ?> </p>
        </div>
    </div>
</div>

        
<?php 
endwhile;
get_footer(); ?>