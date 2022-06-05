<?php get_header(); ?>
<h1>Mon premier modèle wordpress</h1>

<?php 
if( have_posts() ) :
    while( have_posts() ): the_post(); ?>
    <?= the_title(); ?>
    <p><?php endwhile;?></p>
<?php endif; ?>

<?php get_footer(); ?>
