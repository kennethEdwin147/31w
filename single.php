<?php get_header(); ?>
<h2 class='article_cours_entete'>single.php</h2>

<?php if( have_posts() ) : ?>
    <section class='article_cours'>
    <?php while( have_posts() ): the_post(); ?>
      <article>
        <header>
          <p><?= the_title(); ?></p>
        </header>
        <p><?= the_content() ?></p>
        <?php 
            $titre = get_the_title();
            $sigle = substr($titre,0,8);
            $heure = substr($titre ,-6);
        ?>
        <p>Sigle du cours: <?= $sigle ?></p>
        <p>Nombre d'heures: <?= $heure ?></p>


      </article>
   <?php endwhile;?>
   </section>
<?php endif; ?>

<?php get_footer(); ?>
