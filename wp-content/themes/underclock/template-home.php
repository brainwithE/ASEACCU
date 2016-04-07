<?php /* Template Name: Home Page */ ?>
<?php get_header(); ?>

	  <div id="inside-slider-container" class="slider-container animated fadeIn wow">
        <div class="my-slider">
            <ul>
                    
                    <?php foreach (get_field('sliders') as $row2) :
                          if($row2['slider_image']!=null){ $featured_img = $row2['slider_image']; } else { $featured_img = 'http://lorempixel.com/g/1360/900/'; }
                    ?>
                      <li class="animated-delay-2 animated fadeIn wow">
                        <img class="img-responsive" src="<?php echo $featured_img; ?>" />
                        <a class="slider-link" href="<?php if($row2['slider_image']!=null){ print $row2['slider_link']; } else { print '#'; } ?>" target="_blank"><div class="slider-caption"><?php print $row2['slider_title']; ?></div></a>
                      </li>
                    <?php endforeach; ?>
              
              <!--<li><img class="img-responsive" src="images/slider.png" /></li>
              <li><img class="img-responsive" src="images/slider.png" /></li>-->
            </ul>
          </div>
        
    </div>

      <div id="home-fixed-container" class="fixed-container">
        <div class="container">

          <div class="section animated fadeIn wow">
            <div class="col-xs-12">
              <?php
                  while ( have_posts() ) : the_post();

                    the_content(); 

                  endwhile; // End of the loop.
              ?>
              <div class="btn-link-container more-btn more-learn">
                  <a href="<?php echo esc_url(home_url('/')); ?>/about">
                    <p>Learn More</p>
                    <i class="fa fa-chevron-circle-right"></i>
                  </a>
              </div>
            </div>
          </div>

          <div class="section">
              <?php 
                  $display_count = 4;

                  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                  $args = array(
                    'showposts' => $display_count,
                    'paged' => $paged,
                    'order' => 'DESC',
                    'category_name' => get_field('page_filter')
                  );
                  query_posts($args);
                  if (have_posts()) : while (have_posts()) : the_post();
              
                  if(has_post_thumbnail()){ $featured_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); } else { $featured_img = "http://lorempixel.com/550/440"; }
              ?>

                  <a class="unlinkify" href="<?php the_permalink(); ?>">
                    <div class="col-xs-12 col-sm-6 cards animated fadeInUp wow">
                      <div class="img-container hidden-xs">
                        <img class="animated animated-delay-2 fadeIn" src="<?php echo $featured_img; ?>">
                      </div>
                      <div class="cards-detail">
                        <i><?php the_time('M j,Y'); ?></i>
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                      </div>
                    </div>
                  </a>
              
              <?php endwhile; endif;?>

              <div class="btn-link-container more-btn">
                  <a href="<?php echo esc_url(home_url('/')); ?>/newsevents">
                    <p>More News and Events</p>
                    <i class="fa fa-chevron-circle-right"></i>
                  </a>
              </div>
          </div>

        </div>
      </div>

<?php
/*get_sidebar();*/
get_footer();
?>