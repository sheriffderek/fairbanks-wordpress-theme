
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">



  <!-- TypeKit custom fonts -->
  <link rel="stylesheet" href="https://use.typekit.net/pww6cmg.css">






  <?php // $todo - do we need this? ?>
  <meta class="foundation-mq">

  <?php // $todo - do we need this? ?>
  <!-- If Site Icon isn't set in customizer -->
  <?php if (!function_exists('has_site_icon') || !has_site_icon()) { ?>
  <!-- Icons & Favicons -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
  
    <link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
  <?php } ?>

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">






  <?php wp_head(); ?>
</head>