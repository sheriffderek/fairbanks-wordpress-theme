<?php // get data
  $posts = get_field('associated_faqs');
?>

<?php if ($posts != false) { ?>

  <section class="page-section faq-intro">
  <div class="inner-column">
    
    <?php include 'components/faq-list.php'; ?>

  </div>
  </section>

<?php } ?>
