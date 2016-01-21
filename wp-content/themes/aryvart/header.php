<!DOCTYPE html-->
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Aryvart</title>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">

<?php wp_head(); ?>

<?php if(is_front_page('Home'))
{ ?>
<!--<link href="css/animate.min.css" rel="stylesheet">-->
<link href="<?php echo get_template_directory_uri(); ?>/css/demo.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animations.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
</head>
<body id="main" class="m-scene page loaded">
<div class="wrapper">
    <div id="loader">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.svg" alt="Aryvart">
            </figure>
        </div>
        </div>
<div class="banner-block" style="position:absolute; width:100%;">

  <div id="carousel-example-generic" class="carousel slide carousel-fade"> 
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox"> 
      
      <!-- First slide -->
     <?php $i=0; 
      $slider = get_posts(array('post_type' => 'slider'));
      foreach($slider as $res){
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $res->ID ), 'single-post-thumbnail' );
      ?>
        <div class="item <?php if($i==0) {?>active <?php } ?>">
          <img src="<?php _e($image[0]); ?>" class="img-responsive" alt="Aryvart"/>
        </div>
        <?php $i++; } ?>
     <!-- /.item --> 
    </div>
   
  </div>
  <!-- /.carousel --> 
</div>
<div class="header-bar hidden-xs" style="position:relative; height:600px;">
  <div class="container">
    <div class="row icon-hide">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 touch">
          <?php wp_nav_menu(array('menu' =>'top_menu','menu_class'=>'list-inline text-right')); ?>
      </div>
    </div>
  </div>
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <div class="logo"> <a href="<?php _e(site_url());?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Aryvart Logo" class="img-responsive"></a> </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
          <div class="menu">
            <nav class="navbar navbar-default"> 
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand visible-xs" href="#">Menu</a> </div>
              
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php wp_nav_menu(array('menu' => 'header_menu', 'menu_class' => 'nav navbar-nav')); ?>
              </div>
              <!-- /.navbar-collapse --> 
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  
  <!-- header -->
  <section class="block">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner-head">
          <h2>BuildYour Website <br>
            <strong class="bor-bot">Effortlessly</strong></h2>
          <p>Our elegant aesthetics makes your business <br>
            stand out from the crowd</p>
          <a href="<?php _e(get_permalink(55));?>" class="btn btn-default">more features</a> </div>
      </div>
    </div>
  </section>
</div>
<?php }else{
/*<!-- header-bar -->*/
 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
 if(is_page( 'how-it-works') ){ ?>
   <link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/demo.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
</head>
<body>
<div style="background:url(<?php _e($image[0]);?>) no-repeat #444" class="header-bar5 hidden-xs">
  <div class="container">
<?php } 
else if(is_page('who-we-are')) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
<link href="<?php echo get_template_directory_uri(); ?>/css/animated-masonry-gallery.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/hover.css">
</head>
<body>
<div style="background:url(<?php _e($image[0]);?>) no-repeat #444" class="header-bar4 hidden-xs">
  <div class="container">
  <?php } 
  else if(is_page('what-we-do')) { ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
<link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/demo.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
</head>
<body>
<div style="background:url(<?php _e($image[0]);?>) no-repeat #444" class="header-bar10 hidden-xs">
  <div class="container">
  <?php }
  else if(is_page('web-design')) { ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
<link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/demo.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
</head>
<body>
<div style="background:url(<?php _e($image[0]);?>) no-repeat #444 scroll 0% 0% / cover;" class="header-bar10 hidden-xs">
  <div class="container">
  <?php }
else if(is_page('php-developement')) { ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
<link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/demo.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
</head>
<body>
<div style="background:url(<?php _e($image[0]);?>) no-repeat #444" class="header-bar10 hidden-xs">
  <div class="container">
  <?php }
  else if(is_page('portfolio')) { ?>
  <link href="<?php echo get_template_directory_uri(); ?>/css/animated-masonry-gallery.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.lightbox.css" rel="stylesheet" media="screen">
</head>
<body>
<div style="background:url(<?php _e($image[0]);?>) no-repeat #444" class="header-bar3 hidden-xs">
  <div class="container">
  <?php } 
  else if(is_page('blog')) { ?>
  <link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/demo.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
</head>
<body>
<div style="background:url(<?php _e($image[0]);?>) no-repeat #444" class="header-bar2 hidden-xs">
  <div class="container">
  <?php }
else if(is_page('events')) { ?>
  <link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/demo.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
</head>
<body>
<div style="background:url(<?php _e($image[0]);?>) no-repeat #444" class="blog-bg2 hidden-xs">
  <div class="container">
  <?php }
   else if(is_singular('events')) { ?>
  <link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/demo.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
</head>
<body>
<div style="background:url(<?php _e($image[0]);?>) no-repeat #444" class="blog-bg2 hidden-xs">
  <div class="container">
  <?php }
  else if(is_singular('blog')) { ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/font-awesome.css">
<link href="<?php echo get_template_directory_uri();?>/css/animate.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri();?>/css/demo.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/responsive.css">
</head>
<body>
  <div style="background:url(<?php _e($image[0]);?>) no-repeat #444" class="header-bar2 hidden-xs">
  <div class="container">

  <?php }
  else if(is_page('partners' )) { ?>
  <link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/demo.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
</head>
<body>
<div style="background:url(<?php _e($image[0]);?>) no-repeat #444" class="header-bar6 hidden-xs">
  <div class="container">
  <?php }
  else if(is_page('contact'))
    { ?>
       <link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
       <link href="<?php echo get_template_directory_uri(); ?>/css/demo.css" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
       </head>
       <body>
       <div style="background:url(<?php _e($image[0]);?>) no-repeat #444 scroll 0% 0% / cover;" class="header-bar1 hidden-xs">
       <div class="container">
     <?php }
      else if(is_page('career')) { ?>
        <link href="<?php echo get_template_directory_uri(); ?>/css/animated-masonry-gallery.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
        </head>
        <body>
        <div style="background:url(<?php _e($image[0]);?>) no-repeat #444" class="header-bar7 hidden-xs">
        <div class="container">
      <?php }
       else if(is_taxonomy('post_tag')) { ?>
  <link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/demo.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
</head>
<body>

<div style="background:url(<?php _e($image[0]);?>) no-repeat #444" class="header-bar2 hidden-xs">
  <div class="container">
  <?php } ?>
    <div class="row icon-hide">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 touch">
        <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
          <div class="clearfix"></div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <?php wp_nav_menu(array('menu' =>'top_menu','menu_class'=>'list-inline text-left')); ?>
          
        </div>
      </div>
    </div>
  </div>
  <header class="header1">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <div class="logo"> <a href="<?php _e(site_url());?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Aryvart Logo" class="img-responsive"></a> </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
          <div class="menu">
            <nav class="navbar navbar-default"> 
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand visible-xs" href="#">Menu</a> </div>
              
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php wp_nav_menu(array('menu' => 'header_menu', 'menu_class' => 'nav navbar-nav')); ?>

              </div>
              <!-- /.navbar-collapse --> 
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <?php } ?>
  
