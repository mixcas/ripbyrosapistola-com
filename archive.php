<?php
get_header();
?>

<main id="main-content">
  <section id="posts">

<?php
if( have_posts() ) {
  while( have_posts() ) {
    the_post();
?>

    <article class="featured-post">
      <a href="<?php the_permalink(); ?>">
        <div class="image-header">
          <div class="mobile-only">
            <?php the_post_thumbnail('background-image'); ?>
          </div>
          <div class="desktop-only">
            <a href="<?php the_permalink(); ?>">
              <div class="background-image" style="<?php echo background_image_set_css( get_post_thumbnail_id()); ?>"></div>
            </a>
            <div class="container">
              <div class="grid-column justify-end title-container">
                <div class="grid-item item-s-1 margin-bottom-basic">
                  <div class="grid-row justify-center">
                    <div class="grid-item item-s-6 text-align-center padding-top-small padding-bottom-small font-size-h1 font-italic bg-black-alpha white-text">
                      <?php the_title(); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>
    </article>

<?php
  }
} else {
?>
        <article class="u-alert grid-item item-s-12"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
<?php
} ?>

  </section>

  <?php get_template_part('partials/pagination'); ?>

</main>

<?php
get_footer();
?>
