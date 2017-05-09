<?php /* Template Name: index */ ?>

    <?php //echo do_shortcode('[envira-gallery slug="collection-1"]'); ?>

    			<?php
    			while ( have_posts() )
                {
                    the_post();
                    ?>
                    <?php
                    the_content();
                }
                ?>

