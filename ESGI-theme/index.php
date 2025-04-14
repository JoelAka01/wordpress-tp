<?php get_header(); ?>

<main id="site-content">
    <div class="container">
        <?php include(get_template_directory() . '/template-parts/identity-card.php'); ?>
        <?php include(get_template_directory() . '/template-parts/post-list.php'); ?>
    </div>
</main>

<?php get_footer(); ?>