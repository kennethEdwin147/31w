<?php get_header(); ?>

<h1>Front-page</h1>
<h2 class='article_cours_entete'>Explorez les cours de la technique en intégration multimédia:</h2>

<?php if( have_posts() ) : ?>
    <section class='article_section'>
    <?php while( have_posts() ): the_post(); ?>
      <article class='article_cours'>
        <header class='article_cours__entete'>
          <h3 class='article_cours__titre'><?= the_title(); ?></h3>
          <p class='article_cours__texte'><?= wp_trim_words(get_the_content(), 25) ?></p>
        </header>
        <?php 
         $lien = "<a class='article_cours__bouton' href=' ". get_permalink(). " '>". substr(get_the_title(),0,8) ."</a>"; 
         echo $lien;
        ?>
      </article>
   <?php endwhile;?>
   </section>
<?php endif; ?>

<?php get_footer(); ?>
