<?php /* Template Name: About Page */ ?>
<?php get_header(); ?>

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
                <!-- Sub Menus -->
        <div class="submenu-container"> 
          <div class="container">       
          <?php
            if (has_nav_menu('aboutus')) :
              wp_nav_menu(array('theme_location' => 'aboutus', 'menu_class' => 'menu-navigation nav navbar-nav submenu', 'menu_id' => 'secondary-navbar'));
            endif;
          ?>
          </div>
        </div>

        <div class="container">
              <!-- section divs -->

              <div class="section  animated fadeIn wow">
                <!-- Accordions -->
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