<?php

add_theme_support('post-thumbnails'); 

// Include custom navwalker
require_once('functions/bs4navwalker.php');

// Register WordPress nav menu
register_nav_menu('top', 'Top menu');
register_nav_menu('bottom', 'Bottom menu');

add_image_size('activities', 400, 400, true);
add_image_size('group-activities', 700, 700, true);
add_image_size('we-have-great-fun', 920, 585, true);
add_image_size('massive', 2000, 2000, true);
