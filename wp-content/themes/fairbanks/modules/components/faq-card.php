
<aside class="faq-card">
  <h2 class="question" rel="faq-toggle-thing">
    <?=$question?>

    <div class='icon'>+</div>
  </h2>

  <rich-text-content class="answer">
    <?=$answer?>

    <?php if ($link) { // AND - $todo - only if you're not on this page already ?>
      <a class="button" href="<?=$link?>">
        <span><?=$cta?></span>
      </a>
    <?php } ?>
  </rich-text-content>
</aside>
