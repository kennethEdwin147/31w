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
    <section class="site">
        <header class="site__header">
            <section class="site__branding">
                titre du site
            </section>
            <nav class="site__navigation">
                Menu
            </nav>
        </header>
 
