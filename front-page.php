<?php
get_header();
?>


<main id="main-content">
<?php
$latest_posts =  new WP_Query( array(
  'post_per_page' => 7,
) );
if( $latest_posts->have_posts() ) {
  $latest_posts->the_post();
?>
  <section id="posts">

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

    <div class="container">
<?php
  $index = -1;
  while( $latest_posts->have_posts() ) {
    $latest_posts->the_post();
    $index++;
?>
    <?php
    if ($index % 3 === 0) { // OPEN ROW
    ?>
      <div class="grid-row posts-grid">
      <?php
      }
      ?>

        <article <?php post_class('grid-item item-s-4'); ?> id="post-<?php the_ID(); ?>">

          <div class="background-image" style="background-image: url(<?php echo the_post_thumbnail_url('background-image-grid'); ?>);"></div>
          <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>

        </article>

      <?php
      if ($index % 3 === 2 || $latest_posts->have_posts() === false) { // CLOSE ROW
      ?>
      </div>
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

</main>

<?php
get_footer();
?>
