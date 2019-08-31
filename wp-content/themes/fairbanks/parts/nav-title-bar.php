<?php
// Adjust the breakpoint of the title-bar by adjusting this variable
$breakpoint = "medium"; ?>

<div class="df-title-bar" data-responsive-toggle="mobile-menu" data-hide-for="<?php echo $breakpoint ?>">
  <div class="grid-x">
    <div class="cell small-12 flex-container">
      <div class="flex-child-auto">
        <a class="logo" href="<?php echo home_url(); ?>">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-mobile.png" width="247" height="auto" />
        </a>
      </div>
      <div class="flex-child-auto align-self-middle">
        <div class="text-right">
          <!-- <img class="account-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/account-icon.png" /> -->
          <button class="menu-icon" type="button" data-toggle="off-canvas"></button>
        </div>
      </div>
    </div>
    <div class="cell small-12 flex-container title-bar-licence">
      <div class="cell flex-child-auto text-right">
        <a href="tel:510-339-1483">510-339-1483</a>
      </div>
      <div class="cell flex-child-auto text-left">
        <span>LIC# 0C77825</span>
      </div>
    </div>
  </div>
  <!-- <div id="mobile-menu">
    <?php // joints_off_canvas_nav(); 
    ?>
  </div> -->
</div>

<div class="top-bar" id="top-bar-menu">
  <div class="top-bar-left show-for-<?php echo $breakpoint ?>">
    <ul class="menu">
      <li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-desktop.png" width="315" height="auto" alt="<?php bloginfo('name'); ?>" /></a></li>
    </ul>
  </div>
  <div class="top-bar-right">
    <div class="desktop-menu">
      <ul class="menu title-bar-licence">
        <li class="phone"><a href="tel:510-339-1483">510-339-1483</a></li>
        <li class="licence"><span>LIC# 0C77825</span></li>
        <!-- <li> <img class="account-icon" src="<?php //echo get_stylesheet_directory_uri(); 
                                                  ?>/assets/images/account-icon.png"/></li>
          <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
      </ul>
      <?php // joints_top_nav(); ?>

    </div>
  </div>
</div>