<?php
if( get_next_posts_link() || get_previous_posts_link() ) {
?>
  <!-- post pagination -->
  <nav id="pagination" class="grid-row margin-top-basic margin-bottom-small container justify-between">
<?php
$previous = get_previous_posts_link('< Newer');
$next = get_next_posts_link('Older >');
if ($previous) {
?>
    <div class="grid-item item-s-4"><?php echo $previous; ?></div>
<?php
}

if ($next) {
?>
    <div class="grid-item item-s-4 text-align-right"><?php echo $next; ?></div>
<?php
}
?>
  </nav>
<?php
}
?>
