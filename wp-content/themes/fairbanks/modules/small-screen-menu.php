
<nav class="small-screen-menu">
  <header class="menu-header">
    header... logo?
  </header>

  <?php // .nav-menu
    wp_nav_menu(
      array(
        'theme_location' => 'secondary',
        'container' => false,
        'menu_class' => 'nav-menu',
      )
    );
  ?>

  <button class="menu-toggle" rel="site-menu-toggle">
    CLOSE
  </button>
</nav>
