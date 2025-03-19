<div class="identity-card">
    <div class="site-logo">
        <?php 
        if (has_custom_logo()) {
            the_custom_logo();
        } else {
            echo '<h1 class="site-title">'.get_bloginfo('name').'</h1>';
        }
        ?>
    </div>
    <div class="site-description">
        <?php echo get_bloginfo('description'); ?>
    </div>
</div>