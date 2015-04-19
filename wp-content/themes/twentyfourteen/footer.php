<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<!--This part for footer.php-->
<div class="container"><!--Contianer footer-->
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-lg-12"><!--center-->
         <div class="panel panel-default" id="video">
          <div class="panel-body">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-lg-4">
                  This for content1
                  This for content1
                  This for content1
                  This for content1
                  This for content1
                  This for content1
                </div><!--End col-->
                <div class="col-xs-4 col-sm-4 col-lg-4">
                  This for content2
                  This for content2
                  This for content2
                  This for content2
                  This for content2
                  This for content2
                </div><!--End col-->
                <div class="col-xs-4 col-sm-4 col-lg-4">
                  This for content Facebook
                  This for content Facebook
                  This for content Facebook
                  This for content Facebook
                  This for content Facebook
                </div><!--End col-->
            </div><!--End row-->
          </div><!--End panel body-->
        </div><!--End Panel-->
     </div><!--End col-->
</div><!--End Container content-->
  </div><!--End row-->
</div><!--End Container footer-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--End Part for footer-->
	</div><!-- #page -->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>


	<?php wp_footer(); ?>
</body>
</html>