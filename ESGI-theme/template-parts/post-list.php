        <?php
        $args = [
            'post_type' => 'post',
        ];
        $posts = get_posts($args);
        ?>

        var_dump($posts);
<?php include(get_template_directory() . '/template-parts/post-list.php'); ?>


<div class="post-list">
    <?php if (!empty($posts)) : ?>

        <ul>
            <?php foreach ($posts as $post) : ?>
                <li>
                    <a href="<?php echo get_permalink($post->ID); ?>">
                        <h3><?php echo $post->post_title; ?></h3>
                        <time datetime="<?php echo get_the_date('c', $post->ID); ?>"><?php echo wp_date('j F Y', strtotime($post->post_date)); ?></time>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>Aucun article trouvé.</p>
    <?php endif; ?>
</div>