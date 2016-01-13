<?php
/*
Template Name: contact
*/
get_header();
?>
<section class="contact=block">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
          <div class="col-lg-7 col-md-7 col-sm-2 col-xs-12">
            <div class="clearfix"></div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12">
            <div class="contact-add1">
              <?php $footer_info = get_option('footer_info');?>
              <h3><?php _e($footer_info['country']); ?></h3>
              <p><?php _e($footer_info['country_address']); ?></p>
              
            </div>
          </div>
        </div>
       
        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
          <div class="clearfix"></div>
        </div>
         </div>
        <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="clearfix"></div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
         <div class="col-lg-2 col-md-2 col-xs-12">
             <div class="clearfix"></div>
          </div>
         <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
         <div class="contact-add1">
              <h3><?php _e($footer_info['country2']); ?></h3>
              <p> <?php _e($footer_info['country_address2']); ?></p>
            </div>
           
          </div>
          
        </div>
      </div>
    </div>
    
  </section>
  
</div>
<section class="contact-block1">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contact-add">
<div class="cont-details">
<img src="<?php echo get_template_directory_uri(); ?>/images/mobile.png">
</div>
<p>Personal : <?php _e($footer_info['personal_number']); ?><br>
Office :<?php _e($footer_info['office_number']); ?></p>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contact-add">
<div class="cont-details">
<img src="<?php echo get_template_directory_uri(); ?>/images/print.png">
</div>
<p>Fax :<?php _e($footer_info['fax']); ?></p>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contact-add">
<div class="cont-details">
<img src="<?php echo get_template_directory_uri(); ?>/images/message.png">
</div>
<p><?php _e($footer_info['mail']); ?><br>
<?php _e($footer_info['mail2']); ?></p>
</div>
</div>
<hr>
</div>
</section>
<section>
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center enquiry">
<h2>Have an Enquiry?</h2>
<p><?php _e($footer_info['enquiry']); ?></p>
</div>
 <?php _e(do_shortcode('[contact-form-7 id="136" title="contact"]')); ?>
</div>
</section>

<!-- header-bar -->
<?PHP get_footer();?>