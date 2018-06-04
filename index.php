<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="_container">
  <div class="row">
    <div class="post col-md-8 mt-5 p-4">
      <!-- Visualizza il Titolo come un link al permalink dell'articolo. -->
      <h2 class = "title-article text-center">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Link permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      </h2>
      <!-- Visualizza la data (nel formato 16 Novembre 2009) ed un link agli altri articoli dell'autore dell'articolo. -->
      <div class="text-center mb-5">
        <small><?php the_time('j F Y') ?> di <?php the_author_posts_link() ?></small>
      </div>
       <div class="entry">
         <?php the_content(); ?>
         <!--stampa solo un tot caratteri  -->
         <?php the_excerpt(); ?>
       </div>
       <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
       <p class="tags">
          <?php $post_tags = wp_get_post_tags($post->ID);
                if (!empty($post_tags)) {
                    the_tags();
                }
          ?>
      </p>
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
