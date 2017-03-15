<?php
get_header();
?>


<main id="main-content" class="margin-top-basic">
<?php
if( have_posts() ) {
?>
  <section id="posts">
    <div class="container grid-row">
      <div class="grid-item item-s-12 margin-bottom-small text-align-center">
        <h2 class="big-text">News</h2>
      </div>
    </div>
    <div class="container posts-grid">
<?php
  $index = -1;
  while( have_posts() ) {
    the_post();
    $index++;
?>
    <?php
    if ($index % 3 === 0) { // OPEN ROW
    ?>
      <div class="grid-row margin-bottom-small">
      <?php
      }
      ?>

        <article <?php post_class('grid-item item-s-4'); ?> id="post-<?php the_ID(); ?>">
          <div class="grid-post text-align-center">
            <a href="<?php the_permalink() ?>">
              <div class="background-image" style="background-image: url(<?php echo the_post_thumbnail_url('background-image-grid'); ?>);"></div>
            </a>
            <h2 class="grid-title padding-top-tiny padding-bottom-tiny font-size-h1 white-text"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
          </div>
        </article>

      <?php
      if ($index % 3 === 2 || ($wp_query->current_post + 1) == $wp_query->post_count) { // CLOSE ROW
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
    <?php get_template_part('partials/pagination'); ?>
  </section>

</main>

<?php
get_footer();
?>
