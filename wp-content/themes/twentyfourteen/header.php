<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/bootstrap.min.css"/>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	
<div class="row" id="header-background">
        <!--Logo-->
        <div class="col-xs-3 col-sm-2 col-lg-2">
            <img src="<?php echo get_template_directory_uri();?>/images/khmer-logo.png"style="width:90%;" />
        </div>
        <div class="col-xs-6 col-sm-8 col-lg-8">
            <center>
              <img src="<?php echo get_template_directory_uri();?>/images/LogoOrganition.png"style="width:80%; height:50% " />
              <img src="<?php echo get_template_directory_uri();?>/images/eng-logo.png" style="width:75%; height:50% "/>
            </center>
        </div>
        <div class="col-xs-3 col-sm-2 col-lg-2" id="logo">
            <img src="<?php echo get_template_directory_uri();?>/images/nation-logo.png" style="width:90%;"  />
        </div>
        <!--End Logo-->
    </div><!--End row-->
    <!--End Header-->
     <div class="row">
    <!-- Fixed navbar menu -->
    <div class="navbar navbar-default" role="navigation" id="menu">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="#">Home</a></li>       
            <li><a href="#about">About</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Articles<b class="caret"></b></a>
              <ul id="sub-menu" class="dropdown-menu">
                <li><a href="#">Cat 1</a></li>
                <li><a href="#">Cat 2</a></li>
                <li><a href="#">Cat 3</a></li>
                <li><a href="#">Cat 4</a></li>
              </ul>
            </li>            
            <li><a href="#">Contact</a></li>
          </ul>
        </div><!--End nav-collapse -->
    </div><!--End navbar-->
  </div><!--End Row-->