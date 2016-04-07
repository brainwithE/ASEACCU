<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <div id="" class="banner">
      <div class="container animated fadeIn wow">
        <label>Banner Title</label>
        <div class="banner-subtitle hidden-xs">
          <p>
                    <?php the_field('banner_description'); ?>
          </p>
        </div>
     </div>
  </div>
  <div class="fixed-container">
    <div class="container">

    <div class="post" id="post-<?php the_ID(); ?>">

        <div class="page-containers container animated fadeInUp wow">          
          <div class="section">
            <div class="col-md-6">
              <form method="post" action="<?php echo bloginfo('template_directory'); ?>/email.php" class="contact-form-wrapper ajaxform">
                <input type="text" name="Name" placeholder="Name">
                <input type="email" name="Email Address" placeholder="Email Address">
                <input type="text" name="Subject" placeholder="Subject">
                <textarea type="text" name="Message" placeholder="Message"></textarea>
                <input type="submit" class="btn-solid-orange" value="SUBMIT"></input>
                <div class="clearfix"></div>
              </form>
            </div>
            <div class="col-md-6 animated fadeIn wow">
              <?php  the_field('contact_details');?>

              <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
            </div>
          </div> 
          <div class="col-xs-12 section">
            <!-- Accordions -->
            <?php the_content(); ?>
          </div>

        </div>

        <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

      </div>
      
      <?php // comments_template(); ?>

    <?php endwhile; endif; ?>
   </div>
  </div>

<?php
/*get_sidebar();*/
get_footer();
?>