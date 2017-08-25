
      <?php get_header(); ?>
      <?php while ( have_posts() ) {
        the_post();
        get_template_part( 'content', get_post_format() );
        } ?>
       
        <nav>
  <ul class='pager'>
    <li><?php previous_posts_link( __('Naujesni', 'balta') ); ?></li>
    <li><?php next_posts_link(  __('Senesni', 'balta') ); ?></li>
  </ul>
 </nav>
    <?php get_footer(); ?>


   
