<section class="identity-card">
    <div class="site-logo">
        <?php 
        if (has_custom_logo()) {
            the_custom_logo();
        } else {
            echo '<h1 class="site-title">' . get_bloginfo('name') . '</h1>';
        }
        ?>
    </div>

    <div class="site-description">
        <h1><?= get_bloginfo('name'); ?></h1> 
        <p><?= get_bloginfo('description'); ?></p>
    </div>

    <footer>
        <ul>
            <li>
            <a href="<?= getSocialLink('twitter'); ?>" target="_blank" rel="noopener noreferrer">
                    <?= getIcon('twitter'); ?>
            </a>
            <a href="<?= getSocialLink('facebook'); ?>" target="_blank" rel="noopener noreferrer">
                <?= getIcon('facebook'); ?>
            </a>
            <a href="<?= getSocialLink('google'); ?>" target="_blank" rel="noopener noreferrer">
                <?= getIcon('google'); ?>
            </a>
            </li>
        </ul>
    </footer>
</section>