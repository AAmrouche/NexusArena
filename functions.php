<?php
// Enregistrement du menu
function register_my_menu() {
    register_nav_menu('menu-tete', 'Menu de Tête');
}
add_action('after_setup_theme', 'register_my_menu');
