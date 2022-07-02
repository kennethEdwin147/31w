<?php get_header(); ?>


<section class="site__main">
        <section class="site__sidebar">
            <img class="article_image" src="http://localhost:8080/31w-ken/wp-content/uploads/2022/07/FJ5f7ZHXMAAgzMh.jpg" alt="" srcset="">
        </section>
        
<?php if( have_posts() ) : ?>
    <section class='site__article'>
    <?php while( have_posts() ) : the_post(); ?>
      <article class="article_cours">
          <h3 class='article_cours__titre'><?= the_title(); ?></h3>
          <p class='article_cours__texte'><?= wp_trim_words(get_the_content(), 25) ?></p>
        <?php 
         $lien = "<a class='article_cours__bouton' href=' ". get_permalink(). " '>". substr(get_the_title(),0,8) ."</a>"; 
         echo $lien;
        ?>
       </article>
       <?php break; ?>
   <?php endwhile;?>
   </section>
<?php endif; ?>

</section>

<?php get_footer(); ?>
