<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php get_bloginfo('name'); ?><?php wp_title(); ?></title>
    l

    <?php wp_head(); ?>
    <!-- <script>
        const maVar = '<?= $maVar_php ?>'
    </script> -->
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="site-header">
        <div class="container">     
            <nav>
                <?php if (has_nav_menu('primary')) : ?>
                    <?php wp_nav_menu([
                        'theme_location' => 'primary_menu',
                        'container' => 'nav',
                        'container_class' => 'main-nav',
                    ]); ?>
                <?php endif; ?>
            </nav>
        </div>
    </header>