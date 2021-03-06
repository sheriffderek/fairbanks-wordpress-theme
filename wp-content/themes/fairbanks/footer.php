
    </main> <!-- .page-content -->

    <?php include 'modules/site-footer.php'; ?>
		
    <?php include 'modules/small-screen-menu.php'; ?>

		<?php wp_footer(); ?>

    <?php // $todo - get this into the gulp build ?>
    <script src='https://unpkg.com/flickity@2/dist/flickity.pkgd.js'></script>

    <script>
      (function() {

        function mainMenuToggle(event) {
          if ( event.target.matches('[rel="site-menu-toggle"]') ) {
            document.body.classList.toggle('site-menu-open');
            // $todo - should also stop scrolling
          }
        }

        document.addEventListener('click', function(event) {
          mainMenuToggle(event);
        });

      })();
    </script>

	</body>

</html>