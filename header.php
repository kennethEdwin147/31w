<?php
 /**
  * Template header
  * Ve template est intégré dans tous les modèles de thème
  * @link : https://developer.wordpress.org/themes/
  * @package : 31w
  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>  >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <section class="site">
    <header class='site__header'>
        <section class="menu__header">
            <div class="menu__header_nav">
            <?php wp_nav_menu(array(
                            'menu' => '',
                            'container' => 'nav',
                            'container_class' => 'menu__sidebar',
                            'menu_class' => 'menu__sidebar__ul'
            )) ?>
            </div>
      
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="http://eddym91.sg-host.com/wp-content/uploads/2022/07/logo_college_maisonneuve-1.png">
            </a>
        </section>
        <section class="menu__decoration">
        </section>
    </header>
    <section class="site__banner">
        <section class="site__banner__img"></section>
    </section>

  
    

