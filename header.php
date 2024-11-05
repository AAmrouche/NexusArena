<?php
// Inclure l'en-tête WordPress standard
get_header();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/logo.svg" alt="Logo du site">
        </a>
    </div>

<header class="site-header">
    <div class="menu-container">
        <!-- Affiche le menu principal WordPress -->
        <?php
        wp_nav_menu(array(
            'theme_location' => 'menu-tete', // Emplacement du menu enregistré dans functions.php
            'menu_class' => 'main-nav',      // Classe CSS pour les éléments de menu
            'container' => 'nav',            // Balise HTML englobant le menu
            'container_class' => 'menu-container',
        ));
        ?>
        
        <!-- Boutons d'inscription/connexion/déconnexion -->
        <div class="user-buttons">
            <?php if (is_user_logged_in()) : ?>
                <!-- Si l'utilisateur est connecté, afficher le bouton de déconnexion -->
                <a href="<?php echo wp_logout_url(home_url()); ?>" class="btn btn-logout">Déconnexion</a>
            <?php else : ?>
                <!-- Si l'utilisateur n'est pas connecté, afficher les boutons d'inscription et de connexion -->
                <a href="<?php echo wp_login_url(); ?>" class="btn btn-login">Connexion</a>
                <a href="<?php echo wp_registration_url(); ?>" class="btn btn-register">Inscription</a>
            <?php endif; ?>
        </div>
    </div>
</header>

<?php wp_footer(); ?>
</body>
</html>
