<section class="card-section grid__container grid__container">
    <?php
        $image = get_field('card__banner');
        if( !empty( $image ) ):
    ?>

    <img class="card-section__banner grid__item--4-12" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

    <?php endif; ?>
    <?php 
        $image = get_field('card__banner--desktop');
        if( !empty( $image ) ):
    ?>

    <img class="card-section__banner--desktop grid__item--4-12" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

    <?php endif; ?>

    <div class="card-section__card card">
        <div class="card-section__card-text-container">
            <h3 class="card-section__card-title"><?php the_field('card__title'); ?></h3>
            <p class="card-section__card-content"><?php the_field('card__content'); ?></p>
        </div>
        <div class="card-section__card-buttons-container">
            <?php $buttons_data = get_field('card__buttons'); ?>
            <a href="<?php echo $buttons_data['card__button-1-link']; ?>" class="card-section__card-button button button--line button--round"><?php echo $buttons_data['card__button-1-text']; ?></a>
            <a href="<?php echo $buttons_data['card__button-2-link']; ?>" class="card-section__card-button button button--primary button--round"><?php echo $buttons_data['card__button-2-text']; ?></a>
        </div>
    </div>
</section>