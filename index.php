<?php get_header(); ?>
<h2 class='article_cours_entete'>Explorez les cours de la technique en intégration multimédia:</h2>

<?php if( have_posts() ) : ?>
    <section class='article_cours'>
    <?php while( have_posts() ): the_post(); ?>
      <article>
        <p><?= the_title(); ?></p>
      </article>
   <?php endwhile;?>
   </section>
<?php endif; ?>

<?php get_footer(); ?>
