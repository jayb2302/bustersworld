<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
   
    <?php wp_head() ?>
</head>
<body>
<div id="menu-wrapper">
    <div id="menu-icon">
        <!-- Your menu icon HTML goes here -->
    </div>
    <nav class="main-navigation">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary-menu', // Replace with your menu location
                'menu_id'        => 'primary-menu', // You can add custom classes and attributes here
            )
        );
        ?>
    </nav>
</div>


