<?php

/**
 * The template part for displaying an author byline
 */
?>

<div class="date">
  <?php

  echo '<span>';
  printf(
    get_the_time(__('j', 'jointswp'))
  );
  echo '</span>';
  echo '<span>';
  printf(
    get_the_time(__('M', 'jointswp'))
  );
  echo '</span>';

  ?>
</div>