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
        <div class="grid-row justify-center">
          <div class="grid-item item-s-12 item-l-8 text-align-center">
            <h1 class="big-text"><?php the_title(); ?></h1>
          </div>
        </div>

        <div class="grid-row margin-bottom-small justify-center">
          <div class="grid-item item-s-3">
            <a class="background-color-facebook share-button justify-center padding-top-tiny padding-bottom-tiny text-align-center" href="#" onclick="Site.Share.onFB()">
              <?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/facebook_share.svg'); ?>
            </a>
          </div>
          <div class="grid-item item-s-3">
            <a class="background-color-twitter share-button justify-center padding-top-tiny padding-bottom-tiny text-align-center" href="#" onclick="Site.Share.onTW()">
              <?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/twitter_share.svg'); ?>
            </a>
          </div>
        </div>

        <div class="grid-row justify-center">
        <div class="grid-item item-s-12 item-m-8 <?php echo in_category('lookbook') ? '' : 'item-l-6'; ?> content-copy">

          <?php the_content(); ?>
          <p><b><?php the_date('F d, Y') ?></b></p>

          </div>
        </div>

        <div class="grid-row justify-center">
          <div class="grid-item item-s-3">
            <a class="background-color-facebook share-button padding-top-tiny padding-bottom-tiny text-align-center" href="#" onclick="Site.Share.onFB()">
              <?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/facebook_share.svg'); ?>
            </a>
          </div>
          <div class="grid-item item-s-3">
            <a class="background-color-twitter share-button padding-top-tiny padding-bottom-tiny text-align-center" href="#" onclick="Site.Share.onTW()">
              <?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/twitter_share.svg'); ?>
            </a>
          </div>
        </div>


      </div>
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
