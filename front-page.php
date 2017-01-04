<?php
get_header();
?>


<main id="main-content">
<?php
if( have_posts() ) {
  $index = -2;
?>
  <section id="posts">
    <div class="container">

<?php
  while( have_posts() ) {
    the_post();
    $index++;
?>

    <?php // Featured post
    if ($index === -1) {
    ?>

      <article class="featured-post grid-row">
        <div class="grid-item item-s-10">
          <?php the_title(); ?>
        </div>
      </article>

    <?php
    } else {
    ?>
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
