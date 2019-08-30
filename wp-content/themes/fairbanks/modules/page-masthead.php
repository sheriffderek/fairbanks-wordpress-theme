
<?php // get data
  $masthead = get_field('banner_single');
  $mastheadImage = $masthead['image'];
  $backgroundStyles = '';
  $text = $masthead['text'];
  $hasIntroduction = $text != "";
  if ($masthead['alternate_page_title'] != '') {
    $pageTitle = $masthead['alternate_page_title'];
  } else {
    $pageTitle = the_title(); // normal page title
    // $todo - not falling back as expected - might not be in the loop
  }
  if ($mastheadImage) {
    $backgroundStyles = "background-image: url(" . $mastheadImage . ");";
    // we should probably pull this in with JS - $todo
  }
?>

<section class="page-section page-masthead" style="<?=$backgroundStyles?>">
<div class="inner-column">

  <h1 class="page-title"><?=$pageTitle?></h1>

  <?php if ($hasIntroduction) { ?>

    <section class="introduction">
    <div class="constraint">

      <div class="bread-crumbs">
        <?php get_breadcrumb(); ?>
      </div>

      <div class="subheading">Heading of some sort here</div>

      <div class="story">
        <?=$text?>
      </div>

    </div>
    </section>

  <?php } ?>

</div>
</section>
