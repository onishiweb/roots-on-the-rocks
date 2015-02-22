<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?> role="document">

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

  <main class="main" role="main">
    <?php include roots_template_path(); ?>
  </main><!-- /.main -->

  <?php if (roots_display_sidebar()) : ?>
    <aside class="sidebar" role="complementary">
      <?php include roots_sidebar_path(); ?>
    </aside><!-- /.sidebar -->
  <?php endif; ?>

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
