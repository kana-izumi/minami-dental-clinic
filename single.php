<!-- single.phpの中 -->
<?php if(isset($_GET['lang'])): ?>
  <?php get_template_part('template-parts/single-news')?>
<?php else: ?>
  <?php get_template_part('template-parts/single-blog')?>
<?php endif ?>