<!-- Hero section -->
	<?php get_header();?>

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>   <!-- contents of the loop --> 
      <?php get_template_part( 'content', get_post_format() ); ?> 
	  <?php endwhile;?>  <nav>

</nav>
 <?php endif;?>

	 
	
   <?php get_footer();?>



	<!-- Footer section end -->


