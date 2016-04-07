<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package potato_theme
 */

get_header(); ?>

<div id="" class="banner">
    <div class="container animated fadeIn wow">
        <label><?php the_title(); ?></label>
        <div class="banner-subtitle hidden-xs">
        <p>
          <?php
            while ( have_posts() ) : the_post();

              the_field('banner_description');

            endwhile; // End of the loop.
          ?>
        </p>
        </div>
     </div>
  </div>

  <div class="fixed-container">
  	<div class="container">
  		<div class="section">
	  	<?php
				while ( have_posts() ) : the_post();

					the_content(); 

				endwhile; // End of the loop.
		?>
		</div>
	</div>
  </div>

<?php
/*get_sidebar();*/
get_footer();
?>