<?php
  $rows = get_field('logos', 'options');
?>

<section class="page-section partners-intro">
<div class="inner-column">
  

  <?php if (isset($rows) && $rows) { 
    foreach ($rows as $row) { ?>

      <decorative-image class="logo">
        <img src="<?php echo $row['image'] ?>" alt="provider" />
      </decorative-image>

    <?php } 
  } ?>


</div>
</section>
