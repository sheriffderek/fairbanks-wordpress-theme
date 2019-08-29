<?php
$rows = get_field('logos', 'options');

?>
<section class="carriers">
  <div class="carriers__inner">
    <?php if (isset($rows) && $rows) {
      foreach ($rows as $row) {
        ?>
        <div class="carriers__logo">
          <img src="<?php echo $row['image'] ?>" alt="provider" />
        </div>
      <?php }
    } ?>
  </div>
</section>