
<aside class="team-member-card">

  <div class="portrait">
    <decorative-image class="head-shot">
      <img src="<?=$headShot?>" alt="<?=$altText?>" />
    </decorative-image>
  </div>

  <div class="info">
    <h1 class="name"><?=$name?></h1>

    <?php if ($title) { ?>
      <h2 class="title"><?=$title?></h2>
    <?php } ?>

    <div class='introduction'>
      <?=$intro?>
    </div>

    <a class="button" href="<?=$link?>">
      <span>Read more</span>
    </a>
  </div>

</aside>
