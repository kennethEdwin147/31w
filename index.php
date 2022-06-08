<?php get_header(); ?>
<h2 class='article_cours_entete'>Explorez les cours de la technique en intégration multimédia:</h2>

<?php if( have_posts() ) : ?>
    <section class='article_section'>
    <?php while( have_posts() ): the_post(); ?>
      <article class='article_cours'>
        <header class='article_cours__entete'>
          <h3 class='article_cours__titre'><?= the_title(); ?></h3>
        </header>
      </article>
   <?php endwhile;?>
   </section>
<?php endif; ?>

<?php get_footer(); ?>



