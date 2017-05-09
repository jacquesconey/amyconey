<?php /* Template Name: index */ ?>

<?php get_header(); ?>

<?php $slug = basename(get_permalink()); ?>

    <div class="content">

        <?php echo do_shortcode('[envira-gallery slug="artwork"]'); ?>

	</div> <!-- /.row -->

<?php get_footer(); ?>