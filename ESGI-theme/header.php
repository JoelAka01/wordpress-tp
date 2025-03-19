<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <!-- <script>
        const maVar = '<?= $maVar_php ?>'
    </script> -->
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="site-header">
        <div class="container">
            <?php if ( has_custom_logo() ) : ?>
                <div class="logo"> <?php the_custom_logo(); ?> </div>
            <?php else : ?>
                <h1><?php bloginfo('name'); ?></h1>
            <?php endif; ?>
            
            <nav>
                <?php if (has_nav_menu('primary')) : ?>
                    <?php wp_nav_menu([
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'nav-menu'
                    ]); ?>
                <?php endif; ?>
            </nav>
        </div>
    </header>