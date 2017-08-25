    <?php get_header(); ?>
      <?php while ( have_posts() ) {
        the_post();
        get_template_part( 'content-single', get_post_format() );
        } ?>
    <?php get_footer(); ?>