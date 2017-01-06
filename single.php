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

    <article <?php post_class(''); ?> id="post-<?php the_ID(); ?>">
      <div class="image-header">
        <div class="mobile-only">
          <?php the_post_thumbnail('background-image'); ?>
        </div>
        <div class="desktop-only">
          <div class="background-image" style="<?php echo background_image_set_css( get_post_thumbnail_id()); ?>"></div>
        </div>
      </div>

      <div class="container">
        <div class="grid-row">
          <div class="grid-item item-s-10">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>

        <div class="grid-row">
          <div class="grid-item item-s-3">
            Facebook
          </div>
          <div class="grid-item item-s-3">
            Facebook
          </div>
        </div>

        <div class="grid-row">
          <div class="grid-item item-s-12">

          <?php the_content(); ?>
          <p><b><?php the_date('F d, Y') ?></b></p>

          </div>
        </div>

        <div class="grid-row">
          <div class="grid-item item-s-3">
            Facebook
          </div>
          <div class="grid-item item-s-3">
            Facebook
          </div>
        </div>


        </article>
      </div>
    </div>

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
