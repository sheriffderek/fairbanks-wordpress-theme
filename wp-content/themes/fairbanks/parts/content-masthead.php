<?php
// If outside the loop.
// $image = get_field('text');
// echo '<pre>';
// var_dump($image);
// echo '</pre>';

if (isset($image)) : ?>
  <section class="masthead" style="background-image:url(<?php echo $image ?>)">

    <div class="masthead__callout">
      <h1>
        <span class="top">BAY AREA’S BEST</span>
        DAWN FAIRBANKS
        <span class="bottom">INSURANCE SERVICES INC</span>
      </h1>
      <a href="#/" class="button">REQUEST AN INSURANCE QUOTE</a>
  </section>
<?php endif; ?>