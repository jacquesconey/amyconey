<?php /* Template Name: collection */ ?>

<?php get_header(); ?>

<?php $slug = basename(get_permalink()); ?>

    <div class="content">

        <h1 class="collection-title"><?php
            echo ucwords(str_replace("-", " ", $slug));
         ?></h1>

        <?php echo do_shortcode('[envira-gallery slug="'.$slug.'"]'); ?>


<?php
    switch($slug) {
        case "animals":
            $previous = "Black And White Photorealism";
            $next = "Contemporary";
            break;
        case "black-and-white-photorealism":
            $previous = "Contemporary";
            $next = "Animals";
            break;
        case "contemporary":
             $previous = "Animals";
             $next = "Black And White Photorealism";
             break;
        default:
              $previous = "";
              $next = "";
        break;
    }

?>



	</div> <!-- /.row -->

	<div class="pagination">
	   <div class="next col-md-6 col-sm-12">
	        <span><i class="fa fa-long-arrow-left" aria-hidden="true"></i> <strong>view previous: </strong><?php echo $previous ?></span>
	   </div><div class="previous col-md-6 col-sm-12">
       	   <span><strong>view next: </strong><?php echo $next ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
       </div>
	</div>

<?php get_footer(); ?>