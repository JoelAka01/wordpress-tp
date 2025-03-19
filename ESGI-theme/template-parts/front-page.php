<?php get_header(); ?>

<main id="site-content">
    <div class="container">
        <?php get_template_part('template-parts/identity-card'); ?>
        
        <?php if (!is_front_page()) : ?>
            <?php
            $args = [
                'post_type' => 'post',
                'posts_per_page' => 6,
                'orderby' => 'date',
                'order' => 'DESC'
            ];
            $posts = get_posts($args);
            ?>
            
            <h2>Derniers articles</h2>
            <?php include(get_template_directory() . '/template-parts/post-list.php'); ?>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>