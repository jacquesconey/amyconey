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
            $prevLink = "black-and-white-photorealism";
            $nextLink = "contemporary";
            break;
        case "black-and-white-photorealism":
            $previous = "Contemporary";
            $next = "Animals";
            $prevLink = "contemporary";
            $nextLink = "animals";
            break;
        case "contemporary":
             $previous = "Animals";
             $next = "Black And White Photorealism";
             $prevLink = "animals";
             $nextLink = "black-and-white-photorealism";
             break;
        default:
              $previous = "";
              $next = "";
              $prevLink = "";
              $nextLink = "";
        break;
    }

?>



	</div> <!-- /.row -->

	<div class="pagination">
	<a href=<?php echo '"/'.$prevLink.'">'?>
	   <div class="next col-md-6 col-sm-12">
	        <span><i class="fa fa-long-arrow-left" aria-hidden="true"></i> <strong>view previous: </strong><?php echo $previous ?></span>
	   </div></a><a href=<?php echo '"/'.$nextLink.'">'?><div class="previous col-md-6 col-sm-12">
       	   <span><strong>view next: </strong><?php echo $next ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
       </div></a>
	</div>

<?php get_footer(); ?>