
<footer class="page-section site-footer">
<div class="inner-column">

  <nav class='main-menu'>
  <?php
    wp_nav_menu(
      array(
        'theme_location' => 'primary',
        'container' => false,
      )
    );
  ?>
  </nav>

  <div>copyright &copy; <?php echo date('Y'); ?> |</span> <?php bloginfo('description'); ?></div>

</div>
</footer>
