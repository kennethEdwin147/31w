<?php get_header(); ?>
<h2 class='article_cours_entete'>Explorez les cours de la technique en intégration multimédia:</h2>

<?php if( have_posts() ) : ?>
    <section class='article_cours'>
    <?php while( have_posts() ): the_post(); ?>
      <article>
        <header>
          <p><?= the_title(); ?></p>
        </header>
      </article>
   <?php endwhile;?>
   </section>
<?php endif; ?>

<?php get_footer(); ?>



<?php if( have_posts() ) : ?>
    <section class='article_cours'>
    <?php while( have_posts() ): the_post(); ?>
      <article>
        <header>
          <p><?= the_title(); ?></p>
        </header>
        <p><?= wp_trim_words(get_the_content(), 30) ?></p>
        <?php 
         $lien = "<a href=' ". get_permalink(). " '>". substr(get_the_title(),0,8) ."</a>"; 
         echo $lien;
        ?>
      </article>
   <?php endwhile;?>
   </section>
<?php endif; ?>

<?php get_footer(); ?>


