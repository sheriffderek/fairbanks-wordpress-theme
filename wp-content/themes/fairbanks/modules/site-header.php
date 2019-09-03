
<?php
  $hasMastheadImage = get_field('banner_single')['image'];
  if ($hasMastheadImage) {
    $headerStyle = "";
  } else {
    $headerStyle = "with-background";
  }
?>

<header class="page-section site-header <?=$headerStyle?>">
<div class="inner-column">

  <site-branding>
    <a class="home-link" href="<?php echo home_url(); ?>">
      <?php include('components/company-logo.php'); ?>
    </a>
  </site-branding>

  <site-information>

    <site-actions>

      <div class="contact-info">510-339-1483 | LIC# 0C77825</div>

      <button class="user">
        <svg class="icon-x"><use xlink:href="#icon-user"></use></svg>
      </button>

      <button class="menu-toggle" rel="site-menu-toggle">
        <svg class="icon-x"><use xlink:href="#icon-menu"></use></svg>
      </button>
    </site-actions>

    <nav class="main-menu">
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'secondary',
            'container' => false,
            'menu_class' => 'nav-menu',
          )
        );
      ?>
    </nav>
  </site-information>

</div>
</header>
