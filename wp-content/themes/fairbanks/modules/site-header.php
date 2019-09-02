
<header class="page-section site-header">
<div class="inner-column">

  <a class="home-link" href="<?php echo home_url(); ?>">
    <decorative-image class="company-logo">
      <img src="https://placehold.it/400x150" alt="Company logo" />
    </decorative-image>
  </a>

  <nav class="main-menu">
    <?php
      wp_nav_menu(
        array(
          'theme_location' => 'secondary',
          'container' => false,
        )
      );
    ?>
  </nav>

</div>
</header>
