
<nav class="small-screen-menu">

  <center-position>
    <header class="menu-header">
      <?php include('components/company-logo.php'); ?>
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
      <svg class="icon-x"><use xlink:href="#icon-close"></use></svg>
    </button>
  </center-position>

</nav>
