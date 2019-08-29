<?php
/*
Template Name: Home Page
*/

get_header();

get_template_part('parts/content', 'masthead')



?>
<section class="services">
  <div class="services__inner">
    <h2>INSURANCE SERVICES
      <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </span>
    </h2>
    <div class="services__listings">
      <div class="media-object">
        <div class="media-object-section">
          <div class="thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail.jpg">
          </div>
        </div>
        <div class="media-object-section">
          <h4>COBRA, ERISA, POP, HSA, FSA</h4>
          <p>Customized ERISA wraps, COBRA solutions, Section 125 POP, and a host of choices for your HSA and FSA needs</p>
        </div>
      </div>
      <div class="media-object">
        <div class="media-object-section">
          <div class="thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail.jpg">
          </div>
        </div>
        <div class="media-object-section">
          <h4>COBRA, ERISA, POP, HSA, FSA</h4>
          <p>Customized ERISA wraps, COBRA solutions, Section 125 POP, and a host of choices for your HSA and FSA needs</p>
        </div>
      </div>
      <div class="media-object">
        <div class="media-object-section">
          <div class="thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail.jpg">
          </div>
        </div>
        <div class="media-object-section">
          <h4>COBRA, ERISA, POP, HSA, FSA</h4>
          <p>Customized ERISA wraps, COBRA solutions, Section 125 POP, and a host of choices for your HSA and FSA needs</p>
        </div>
      </div>
      <div class="media-object">
        <div class="media-object-section">
          <div class="thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail.jpg">
          </div>
        </div>
        <div class="media-object-section">
          <h4>COBRA, ERISA, POP, HSA, FSA</h4>
          <p>Customized ERISA wraps, COBRA solutions, Section 125 POP, and a host of choices for your HSA and FSA needs</p>
        </div>
      </div>
      <div class="media-object">
        <div class="media-object-section">
          <div class="thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail.jpg">
          </div>
        </div>
        <div class="media-object-section">
          <h4>COBRA, ERISA, POP, HSA, FSA</h4>
          <p>Customized ERISA wraps, COBRA solutions, Section 125 POP, and a host of choices for your HSA and FSA needs</p>
        </div>
      </div>
      <div class="media-object">
        <div class="media-object-section">
          <div class="thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail.jpg">
          </div>
        </div>
        <div class="media-object-section">
          <h4>COBRA, ERISA, POP, HSA, FSA</h4>
          <p>Customized ERISA wraps, COBRA solutions, Section 125 POP, and a host of choices for your HSA and FSA needs</p>
        </div>
      </div>
    </div>
  </div>

</section>
<?php
get_template_part('parts/content', 'dropdown');

get_template_part('parts/content', 'providers');


?>

<section class="ourclients">
  <div class="ourclients__inner">
    <div class="media-object stack-for-small">
      <div class="media-object-section ourclients__text">
        <h4>Our Clients</h4>
        <p class="quote tk-futura-pt-bold">Couldn’t be happier with Dawn...</p>
        <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi</p>
        <a href="/" class="button">SEE OUR TESTIMONIALS</a>
      </div>
      <div class="media-object-section ourclients__img">
        <div class="thumbnail">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-quotes.png">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="ourteam">
  <div class="ourteam__inner">
    <div class="ourteam__text">
      <h4>Our Team</h4>
      <p class="quote tk-futura-pt-bold">An Independent Life and Health Agency,</p>
      <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt </p>
      <a href="/" class="button">SEE OUR TEAM</a>
    </div>
  </div>
</section>
<!--	<div class="content">

		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 large-8 medium-8 cell" role="main">
				
				<//?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<//?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <//?php endwhile; endif; ?>							
			    					
			</main>  

		</div> 

	</div> 
  end #content -->

<?php get_footer(); ?>