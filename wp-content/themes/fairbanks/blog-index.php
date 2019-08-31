
<?php
/* 
Template Name: Blog index
*/
get_header(); ?>



<?php include 'modules/page-masthead.php'; ?>
 


<section class="page-section blog-stuffs">
<div class="inner-column">
  

  <main class="primary-content">
    
    <h1>Paginated list of blog articles should be here...</h1>
    
    <ol>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <li>
        article.... 
      </li>
        

        

      <?php endwhile;
    endif; ?>


    </ol>
    

  </main>

  <aside class="alternate-content">
    <?php include 'modules/components/contextual-sidebar.php'; ?>
  </aside>


</div>
</section>

 

<?php get_footer(); ?>
