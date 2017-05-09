<?php /* Template Name: collection */ ?>

<?php get_header(); ?>

<?php $slug = basename(get_permalink()); ?>

    <div class="content">

        <h1 class="collection-title"><?php
            echo ucwords(str_replace("-", " ", $slug));
         ?></h1>

        <?php echo do_shortcode('[envira-gallery slug="'.$slug.'"]'); ?>

	</div> <!-- /.row -->

<?php get_footer(); ?>