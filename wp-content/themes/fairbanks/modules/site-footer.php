
<footer class="page-section site-footer">
<div class="inner-column">

  <header class="footer-header">
    <h2 class="heading">
      Site map
    </h2>

    <?php include "components/social-networks.php" ?>
  </header>

  <nav class="main-menu">
    <?php
      wp_nav_menu(
        array(
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'nav-menu',
        )
      );
    ?>
  </nav>

  <legal-info>

    <div class="copyright">copyright &copy; <?php echo date('Y'); ?> |</span> <?php bloginfo('description'); ?></div>
    
    <div class="c">C3i3</div>

  </legal-info>

</div>
</footer>
