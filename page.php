<?php get_header(); ?>
<?php query_posts($query_string . '&cat=-3,-8'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="_container">
  <div class="row">
    <div class="post col-md-8 mt-5 p-4">
      <!-- Visualizza il Titolo come un link al permalink dell'articolo. -->
      <h2 class = "title-article text-center">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Link permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      </h2>
      <!-- Visualizza la data (nel formato 16 Novembre 2009) ed un link agli altri articoli dell'autore dell'articolo. -->
       <div class="entry">
         <?php the_content(); ?>
         <!--stampa solo un tot caratteri  -->

       </div>
    </div> <!-- closes the first div box -->
    <div class="col-md-4 mt-5 pl-5 siderbar_cnt">
      <?php get_sidebar(); ?>
    </div>
  <?php endwhile; else: ?>
    <p>Spiacente, nessun articolo corrisponde ai criteri di ricerca.</p>
  <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
