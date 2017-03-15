  <footer id="footer" class="bg-black white-text margin-top-basic padding-top-small padding-bottom-small">
    <div class="grid-row container margin-top-basic margin-bottom-basic">
      <div class="grid-item item-s-12 item-l-4">
        <h4 class="margin-bottom-tiny">Find us</h4>
        <p>Lisboa #48, Colonia Juárez, México D.F.</p>

        <p>Tel: +52 (55) 5264 8248</p>

        <p>Hours<br/>
        Thur - Fri 1:00pm a 8:00pm<br/>
        Sat - Sun 1:00pm a 5:00pm
        </p>

        <p>rosapistola@gmail.com</p>
      </div>
      <div id="footer-logo" class="grid-item item-s-12 item-l-4">
        <?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/rip_logo.svg'); ?>
      </div>
      <div class="grid-item item-s-12 item-l-4">
        <h4 class="margin-bottom-tiny">Follow us</h4>
        <a class="social-icon" href="http://facebook.com/Ripbyrosapistola/" target="_blank" rel="nofollow"><?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/fb_logo.svg'); ?></a>
        <a class="social-icon" href="https://www.instagram.com/rosapistola/" target="_blank" rel="nofollow"><?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/instagram_logo.svg'); ?></a>
        <a class="social-icon" href="https://twitter.com/rosapistola" target="_blank" rel="noopener"><?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/twitter_logo.svg'); ?></a></p>
      </div>
    </div>
    <div class="grid-row">
      <div class="grid-item item-s-12">
        <p class="text-align-center">R†P by Rosa Pistola · Copyright © 2017 · All Rights Reserved</p>
      </div>
    </div>
  </footer>

</section>

<?php
  get_template_part('partials/scripts');
  get_template_part('partials/schema-org');
?>

</body>
</html>
