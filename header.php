<?php
/**
 * Created by PhpStorm.
 * User: 1022699
 * Date: 2018. 10. 16.
 * Time: 14:45
 */
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>" >
    <title><?php wp_title( '|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- apple touchicon and favicon -->

    <?php
        $favicon = IMAGES . '/icons/favicon.ico';
        $touchicon = IMAGES . '/icons/apple-touch-icon-precomposed.png';
    ?>
    <link rel="shortcut icon" href="<?php echo $favicon ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $touchicon; ?>" sizes="152x152">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <nav class="navbar" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="sr-only"><?php _e('Toggle navigation','tuts'); ?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url( home_url('/')); ?>">
                    <?php bloginfo( 'name'); ?>
                </a>
            </div>



            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
                wp_nav_menu(array(
                    'menu_class' => 'nav navbar-nav navbar-right',
                    'theme_location' => 'main-menu',
                    'container' => false
                ));
            ?>
            </div>
      </div>
    </nav>
</body>