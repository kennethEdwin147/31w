<?php 

/**
 * template header
 * Ce templat est intédré dans tous les modèles de thème
 * @link : https://developer.wordpress.org/themes/
 * @package : 31w
 */
 ?>

<!DOCTYPE html>
<html <?= language_attributes(); ?> >
<head>
    <meta charset="<?= bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= wp_head(); ?></head>
<body>
    <section class='site'>
        <header class='site__header'>
            <section class='site__branding'>
                <div class='site__description'>
                    <h2>
                        <a href="<?= esc_url( home_url( '/' ) ); ?>"> <?= bloginfo( 'name' );?></a>
                    </h2>
                    <h2><?= bloginfo( 'description' );?></h2>
                </div>
            </section>
            <nav class='site__navigation'>
                <h2>Explorez le Menu</h2>
            </nav>
        </header>
 
