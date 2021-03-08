<?php
function rasel_bootstrapping(){
    load_theme_textdomain("rasel");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
}
add_action("after_setup_theme","rasel_bootstrapping");
function rasel_assets(){
    wp_enqueue_style("bootstrap","//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
    wp_enqueue_style("alpha",get_stylesheet_uri());
}
add_action("wp_enqueue_scripts","rasel_assets");