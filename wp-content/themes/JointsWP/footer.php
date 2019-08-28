<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
          <div class="grid-x align-justify">
          <h5 class="tk-futura-pt-bold small-6 large-1 cell">sitemap</h5>
          <div class="small-6 large-1 cell social-links">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/social.png" alt="social icons"/>
	    			</div>
          </div>
					<div class="inner-footer grid-x align-justify">
						
						<div class="small-12 large-12 cell">
							<nav role="navigation">
	    					<?php joints_footer_links(); ?>
	    				</nav>
            </div>
					</div> <!-- end #inner-footer -->
				<div class="grid-x">
          <div class="small-12 medium-12 large-12 cell">
						<p class="source-org copyright tk-futura-pt-bold"><span>copyright &copy; <?php echo date('Y'); ?> |</span> <?php bloginfo('description'); ?></p>
			    </div>
        </div>
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->