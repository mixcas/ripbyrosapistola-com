  <footer id="footer" class="bg-black white-text margin-top-basic padding-top-small padding-bottom-small">
    <div class="grid-row container margin-top-basic margin-bottom-basic">
      <div class="grid-item item-s-4">
        <h4 class="margin-bottom-tiny">Find us</h4>
        <p>Lisboa #48, Colonia Juárez, México D.F.</p>

        <p>Tel: +52 (55) 5264 8248</p>

        <p>Hours<br/>
        Thur - Fri 1:00pm a 8:00pm<br/>
        Sat - Sun 1:00pm a 5:00pm
        </p>

        <p>rosapistola@gmail.com</p>
      </div>
      <div id="footer-logo" class="grid-item item-s-4">
        <?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/rip_logo.svg'); ?>
      </div>
      <div class="grid-item item-s-4">
        <h4 class="margin-bottom-tiny">Follow us</h4>
        <p><a href="https://www.facebook.com/Ripbyrosapistola" target="_blank" rel="noopener">facebook.com/Ripbyrosapistola</a></p>
        <p><a href="https://www.instagram.com/rosapistola/" target="_blank" rel="noopener">instagram.com/rosapistola/</a></p>
        <p><a href="https://twitter.com/rosapistola" target="_blank" rel="noopener">twitter.com/rosapistola</a></p>
      </div>
    </div>
    <p class="text-align-center">R†P by Rosa Pistola · Copyright © 2017 · All Rights Reserved</p>
  </footer>

</section>

<?php
  get_template_part('partials/scripts');
  get_template_part('partials/schema-org');
?>

</body>
</html>
