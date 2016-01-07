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
      <div class="item active"> <img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" class="img-responsive" alt="Aryvart"> 
       
      </div>
      <!-- /.item --> 
      
      <!-- Second slide -->
      <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/images/banner01.jpg" class="img-responsive" alt="Aryvart"> 
       
      </div>
      <!-- /.item --> 
      
      <!-- Third slide -->
      <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/images/banner02.jpg" class="img-responsive" alt="Aryvart"> 
      
      </div>
      <!-- /.item --> 
      <!-- Fourth slide -->
      <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/images/banner03.jpg" class="img-responsive" alt="Aryvart">
        
      </div>
      <!-- /.item --> 
      
    </div>
   
  </div>
  <!-- /.carousel --> 
</div>
<div class="header-bar hidden-xs">
  <div class="container">
    <div class="row icon-hide">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 touch">
          <?php wp_nav_menu(array('menu' =>'top_menu','menu_class'=>'list-inline text-left')); ?>
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
          <a href="" class="btn btn-default">more features</a> </div>
      </div>
    </div>
  </section>
</div>
<?php }
/*<!-- header-bar -->*/
else if(is_page( 'how-it-work') ){ ?>
  <link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/demo.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
</head>
<body>
<div class="header-bar5 hidden-xs">
  <div class="container">
<?php } 
else if(is_page('who-we-are')) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
<link href="<?php echo get_template_directory_uri(); ?>/css/animated-masonry-gallery.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/hover.css">
</head>
<body>
<div class="header-bar4 hidden-xs">
  <div class="container">
  <?php } 
  else if(is_page('what-we-do')) { ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
<link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/demo.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
</head>
<body>
<div class="header-bar10 hidden-xs">
  <div class="container">
  <?php }
  else if(is_page('portfolio')) { ?>
  <link href="<?php echo get_template_directory_uri(); ?>/css/animated-masonry-gallery.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.lightbox.css" rel="stylesheet" media="screen">
</head>
<body>
<div class="header-bar3 hidden-xs">
  <div class="container">
  <?php } 
  else if(is_page('blog')) { ?>
  <link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/demo.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
</head>
<body>
<div class="header-bar2 hidden-xs">
  <div class="container">
  <?php }
  else if(is_page('partner' )) { ?>
  <link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/demo.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
</head>
<body>
<div class="header-bar6 hidden-xs">
  <div class="container">
  <?php }
  else 
    { ?>
       <link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
       <link href="<?php echo get_template_directory_uri(); ?>/css/demo.css" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
       </head>
       <body>
       <div class="header-bar1 hidden-xs">
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
          <div class="logo"> <a href="<?php echo get_template_directory_uri(); ?>/index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Aryvart Logo" class="img-responsive"></a> </div>
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
  
