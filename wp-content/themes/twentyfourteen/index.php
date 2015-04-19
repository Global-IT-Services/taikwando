<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<!--This part for put in index.php-->
<div class="container"><!--Contianer Content-->
<!--Promotion Content-->
  <div class="row" id="content"><!--Content-->
     <div class="col-xs-12 col-sm-12 col-lg-12"><!--center-->
              <div class="col-xs-6 col-sm-3 col-lg-3" id="promotion">
                <center>
                  <img src="<?php echo get_template_directory_uri();?>/images/promotion.png" class="imagelogo"/><br/>
                  <b class="logotitle">Promotion1</b>
                </center>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p> 
              </div>
              <div class="col-xs-6 col-sm-3 col-lg-3" id="promotion">
                 <center>
                  <img src="<?php echo get_template_directory_uri();?>/images/promotion.png" class="imagelogo"/><br/>
                  <b class="logotitle">Promotion2</b>
                </center>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
              </div>
              <div class="col-xs-6 col-sm-3 col-lg-3" id="promotion">
                 <center>
                  <img src="<?php echo get_template_directory_uri();?>/images/promotion.png" class="imagelogo"/><br/>
                  <b class="logotitle">Promotion3</b>
                </center>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
              </div>
              <div class="col-xs-6 col-sm-3 col-lg-3" id="promotion">
                 <center>
                  <img src="<?php echo get_template_directory_uri();?>/images/promotion.png" class="imagelogo"/><br/>
                  <b class="logotitle">Promotion4</b>
                </center>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
              </div>
     </div><!--End col-->
</div><!--End Container content-->
<!--End Promotion Content-->
<!--Content for Video and link-->
<div class="row" id="content"><!--Content-->
<div class="col-xs-12 col-sm-12 col-lg-12"><!--center-->
         <div class="panel panel-default" id="video">
          <div class="panel-body">
            <b>Video and Imgae Gallary</b>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-lg-8">
                <div class="col-xs-5 col-sm-5 col-lg-5" id="promotion">
                  <img src="<?php echo get_template_directory_uri();?>/images/video.jpg" width="100%" />
                </div>
                <div class="col-xs-5 col-sm-5 col-lg-5" id="promotion">
                  <img src="<?php echo get_template_directory_uri();?>/images/video.jpg" width="100%" />
                </div>
                <div class="col-xs-5 col-sm-5 col-lg-5" id="promotion">
                  <img src="<?php echo get_template_directory_uri();?>/images/video.jpg" width="100%" />
                </div>
                <div class="col-xs-5 col-sm-5 col-lg-5" id="promotion">
                  <img src="<?php echo get_template_directory_uri();?>/images/video.jpg" width="100%" />
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-lg-4">
                <b>Quick Link</b>
                <p>
                  <ul>
                    <li>Link1</li>
                    <li>Link2</li>
                    <li>Link3</li>
                    <li>Link4</li>
                  </ul>
                </p>
              </div><!--End col-->
            </div><!--End row-->
          </div><!--End panel body-->
        </div><!--End Panel-->
     </div><!--End col-->
</div><!--End Container content-->
<!--End content for video and link-->
<!----Content for Sponcer-->
<div class="row" id="content"><!--Content-->
<div class="col-xs-12 col-sm-12 col-lg-12"><!--center-->
         <div class="panel panel-default" id="sponcer">
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-lg-12">
                <b>Sponcer</b>
                <center>
                  <img src="<?php echo get_template_directory_uri();?>/images/khmer-logo.png" width="10%" class="sponcer-logo"/>
                  <img src="<?php echo get_template_directory_uri();?>/images/khmer-logo.png" width="10%" class="sponcer-logo"/>
                  <img src="<?php echo get_template_directory_uri();?>/images/khmer-logo.png" width="10%" class="sponcer-logo"/>
                  <img src="<?php echo get_template_directory_uri();?>/images/khmer-logo.png" width="10%" class="sponcer-logo"/>
                </center>
              </div>
            </div><!--End row-->
          </div><!--End panel body-->
        </div><!--End Panel-->
     </div><!--End col-->
</div><!--End Container content-->
<!--End Content for sponcer-->
</div><!--End Contain-->
</div><!--End Row-->
<!--End Part for index.php-->

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
