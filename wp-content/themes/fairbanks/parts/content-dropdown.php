<?php
$rows = get_field('list');

?>
<?php if ($rows) : ?>


  <section class="questions">
    <ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
      <?php foreach ($rows as $row) {  ?>
        <li class="accordion-item" data-accordion-item>
          <!-- Accordion tab title -->
          <a href="#" class="accordion-title">
            <div><?php echo $row['question']; ?></div>
          </a>

          <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
          <div class="accordion-content" data-tab-content>
            <div><?php echo $row['answer']; ?></div>

          </div>
        </li>
      <?php   } ?>

    </ul>
  </section>

<?php endif; ?>