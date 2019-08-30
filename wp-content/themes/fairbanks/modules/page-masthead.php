
<?php // get data
  $masthead = get_field('banner_single');
  $mastheadImage = $masthead['image'];
  $backgroundStyles = '';
  $text = $masthead['text'];
  $hasIntroduction = $text != "";

  if ($hasIntroduction) {
    $mastheadType = 'complex';
  } else {
    $mastheadType = 'simple';
  }

  if ($masthead['alternate_page_title'] != '') {
    $pageTitle = $masthead['alternate_page_title'];
  } else {
    $pageTitle = get_the_title();
  }
  if ($mastheadImage) {
    $backgroundStyles = "background-image: url(" . $mastheadImage . ");";
    // we should probably pull this in with JS - $todo
  }
?>

<section class="page-section page-masthead <?=$mastheadType?>" style="<?=$backgroundStyles?>">
<div class="inner-column">

  <h1 class="page-title"><?=$pageTitle?></h1>

  <?php if ($hasIntroduction) { ?>

    <section class="introduction">
    <div class="constraint">

      <?php include 'components/bread-crumbs.php'; ?>

      <div class="subheading">Heading of some sort here</div>

      <div class="story">
        <?=$text?>
      </div>

    </div>
    </section>

  <?php } ?>

</div>
</section>
