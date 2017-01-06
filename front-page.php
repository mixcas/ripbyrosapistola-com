<?php
get_header();
?>


<main id="main-content">
<?php
if( have_posts() ) {
  $index = -2;
?>
  <section id="posts">

<?php
  while( have_posts() ) {
    the_post();
    $index++;
?>

    <?php // FEATURED POST
    if ($index === -1) {
    ?>

    <article class="featured-post">
      <div class="image-header">
        <div class="mobile-only">
          <?php the_post_thumbnail('background-image'); ?>
        </div>
        <div class="desktop-only">
          <div class="background-image" style="<?php echo background_image_set_css( get_post_thumbnail_id()); ?>"></div>
          <div class="container">
            <div class="grid-column justify-end title-container">
              <div class="grid-item item-s-1 margin-bottom-basic">
                <div class="grid-row justify-center">
                  <div class="grid-item item-s-8 text-align-center">
                    <?php the_title(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>

    <?php
    } else {
    ?>
    <div class="container">
      <?php
      if ($index % 3 === 0) { // OPEN ROW
      ?>
        <div class="grid-row">
      <?php
      }
      ?>

        <article <?php post_class('grid-item item-s-4'); ?> id="post-<?php the_ID(); ?>">

          <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>

        </article>

      <?php
      if ($index % 3 === 2 || have_posts() === false) { // CLOSE ROW
      ?>
        </div>
      <?php
      }
      ?>



    <?php
    }
    ?>

<?php
  }
} else {
?>
        <article class="u-alert grid-item item-s-12"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
<?php
} ?>

        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('partials/pagination'); ?>

</main>

<?php
get_footer();
?>
