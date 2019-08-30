
<?php // get data
  $posts = get_field('associated_faqs');
?>
<?php if ($posts) { ?>

  <ol class="faq-list">
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
      <?php setup_postdata($post); ?>

      <?php // get data
        $question = get_field('question');;
        $answer = get_field('answer');
        $link = get_field('read_more_link');
        $cta = get_field('read_more_cta');
      ?>

      <li>
        <?php include('faq-card.php'); ?>
      </li>
    <?php endforeach; ?>
  </ol>

  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php } ?>

<script>
  (function() {
    // get all of the faqs....
    // atach an event listener to them... toggle the closest parent? For now... /?

    // var faqToggles = document.querySelectorAll('[rel="faq-toggle-thing"]');
    // console.log('faqToggles', faqToggles);
    document.addEventListener('click', function(event) {
      if ( event.target.matches('[rel="faq-toggle-thing"]') ) {
        event.target.closest('.faq-card').classList.toggle('open');
      }
    });
  })();
</script>
