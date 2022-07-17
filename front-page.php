<?php get_header(); ?>


<section class="site__main">
        <section class="site__sidebar">
          
            <img class="article_image" src="http://eddym91.sg-host.com/wp-content/uploads/2022/07/FJ5f7ZHXMAAgzMh.jpg">
        </section>
    <section class='site__article'>
      <article class="article_cours">
          <h3 class='article_cours__titre'>Comment faire le bon choix?</h3>
          <p class='article_cours__texte'>Si tu ne sais toujours pas quel programme choisir…
          Quelques-uns de nos programmes d’études acceptent de nouvelles candidatures pour l’admission à l’automne 2022. 
          Consulte la liste ci-dessous des programmes d’études et dépose ta candidature avant le 21 avril.
          </p>
       </article>
       <div class="widget_menu">
            <a href="" class="article_menu">Étudiant actuel</a>
            <a href="" class="article_menu">Grand Public</a>
            <a href="" class="article_menu">Coût des études</a>
            <a href="" class="article_menu">Listes cours</a>
        </div>
</footer>
   </section>
</section>

<section class='section_article_cours'>
<?php if( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post(); ?>
      <article class="liste_cours">
          <h3 class='liste_cours__titre'><?= the_title(); ?></h3>
          <p class='liste_cours__texte'><?= wp_trim_words(get_the_content(), 10) ?></p>
        <?php 
         $lien = "<a class='article_cours__bouton' href=' ". get_permalink(). " '>". substr(get_the_title(),0,8) ."</a>"; 
         echo $lien;
        ?>
       </article>
   <?php endwhile;?>
<?php endif; ?>
</section>

<?php get_footer(); ?>
