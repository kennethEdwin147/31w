<?php get_header(); ?>
<h2 class='article_cours_entete'>single.php</h2>

<?php if( have_posts() ) : ?>
    <section class='article_section'>
    <?php while( have_posts() ): the_post(); ?>
    <article class='article_cours'>
      <header class='article_cours__entete'>
        <h3 class='article_cours__titre'><?= the_title(); ?></h3>
        <p class='article_cours__texte'><?= the_content() ?></p>
      </header>
      <?php 
        $titre = get_the_title();
        $sigle = substr($titre,0,8);
        $heure = substr($titre ,-6);
      ?>
    <p class='article_cours__texte'>Sigle du cours: <?= $sigle ?></p>
    <p class='article_cours__texte'>Nombre d'heures: <?= $heure ?></p>
  </article>

   <?php endwhile;?>
   </section>
<?php endif; ?>

<?php get_footer(); ?>


