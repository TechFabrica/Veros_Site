<section class="main grid__container">
    <?php 
        $image = get_field('main__banner');
        if( !empty( $image ) ):
    ?>

    <img class="main__banner grid__item--4-6" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

    <?php endif; ?>
    <div class="main__content-container grid__item--4-6">
        <h3 class="main__title"><?php echo get_field('main__title'); ?></h3>
        <p class="main__content"><?php echo get_field('main__content'); ?></p>
        
        <a href="<?php the_field('main__button-link'); ?>" class="main__button button button--line button--round">
            <?php the_field('main__button-text'); ?>
        </a>
    </div>
</section>