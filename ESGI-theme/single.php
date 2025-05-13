<?php get_header(); ?>

<main id="site-content">
    <?= the_title(); ?> 
    <h1><?= $post->post_title; ?></h1>
    <div>
        <div class="post_meta">
            <div class="post_auto">
                <?= get_the_author_meta('nickname', $post->post_author); ?>
                <div class="post_auto_avatar">
                    <?= get_avatar($post->post_author); ?>

            </div>


            <div class="post_author">
                <?= the_author(); ?>
            </div>
            <time 
             datetime="<?php echo get_the_date('c', $post->ID); ?>"><?php echo wp_date('j F Y', strtotime($post->post_date)); ?>
            </time>

            <div class="post-thumbnails">
                <?php the_post_thumbnail(); ?>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>