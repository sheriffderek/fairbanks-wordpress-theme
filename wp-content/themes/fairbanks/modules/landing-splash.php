
<section class="page-section landing-splash">
<div class="inner-column">

  <aside class="stuff">
    <div class="subheading" roll="$todo">Bay area's best</div>

    <h1 class="heading">Dawn Fairbanks</h1>

    <h2 class="subheading">
      <span class="visually-hidden">Bay area's best</span>
      Insurance Services Inc
    </h2>

    <a class="button" href="http://www.fairbanks-ins.com/page.asp?type=ifp" target="quote">
      <h3>Request an insurance quote</h3>
    </a>
  </aside>

</div>
</section>



<section class="page-section landing-splash-slider">
<div class="inner-column">

  <h2>Slider data:</h2>

  <ul class="slide-list">
    <?php
      $rows = get_field('slide');
    ?>

    <?php foreach($rows as $row) { ?>
      <li>
        <ul>
          <li>
            <?=$row['slide_heading']?>
          </li>

          <li>
            <?=$row['slide_subheading']?>
          </li>

          <li>
            <?=$row['slide_background_image']['url']?>
          </li>

          <li>
            <?=$row['slide_link']?>
          </li>

          <li>
            <?=$row['slide_button_text']?>
          </li>
        </ul>
      </li>
    <?php } ?>
  </ul>

</div>
</section>
