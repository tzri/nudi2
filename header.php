<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav>
    <?php wp_nav_menu([
        "theme_location" => "main-menu",
        "container" => false,
        "items_wrap" => '%3$s<hr/>',
        "fallback_cb" => false,
        "link_before" => "",
        "link_after" => " ",
    ]); ?>
</nav>


