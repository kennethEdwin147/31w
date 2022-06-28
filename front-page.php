<?php get_header(); ?> <!-- front-page.php -->

<header class='site__header'>
  <h2>Front-page</h2>
</header>

<?php if( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post(); ?>
          <h3><?= the_title(); ?></h3>
          <p><?= wp_trim_words(get_the_content(), 25) ?></p>
    <?php 
        $lien = "<a href=' ". get_permalink(). " '>". substr(get_the_title(),0,8) ."</a>"; 
        echo $lien;
    ?>
   <?php endwhile;?>
<?php endif; ?>

<?php get_footer(); ?>
