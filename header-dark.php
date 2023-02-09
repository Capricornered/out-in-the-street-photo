<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.typekit.net/vwr1ojs.css">
    <link href="css/styles.css" rel="stylesheet">

    <script src="js/scripts.js"></script>

    <title>Out in the Street Photography</title>

    
    <?php
        wp_head();
    ?>

</head>

<body id="dark">

<header>
    <span id="logo">
        <a href="<?php echo get_home_url(); ?>">
            <?php
                if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                }
            ?>
        </a>
    </span>
    <span id="hamburger">&equiv;</span>
    <nav id="main-menu">
        <?php
            wp_nav_menu(
                array(
                    "menu" => "primary",
                    "container" => "",
                    "theme_location" => "primary",
                )
            );
            ?>
    </nav>
</header>