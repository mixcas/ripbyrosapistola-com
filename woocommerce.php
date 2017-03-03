<?php
get_header();
?>

<main id="main-content" class="margin-top-basic">
  <section id="posts">
    <div class="container">
      <div class="grid-row">

        <article class="grid-item item-s-12">
          <?php woocommerce_content(); ?>
        </article>

      </div>
    </div>
  </section>

  <?php get_template_part('partials/pagination'); ?>

</main>

<?php
get_footer();
?>
